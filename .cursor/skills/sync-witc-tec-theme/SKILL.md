---
name: sync-witc-tec-theme
description: >-
  個人開発テーマ theme-techno を先方パイプラインレポ yuto-ri/witc-tec の
  wp-content/themes/witc-tec へ丸ごと同期し、使い捨て feature ブランチで PR する。
  Use when the user asks to sync/deploy theme to witc-tec, 先方レポ, ConoHa テスト環境,
  テーマ同期, or run sync-theme-from-local.sh.
---

# sync-witc-tec-theme

個人レポ（正本）→ 先方レポ（テスト環境パイプライン）への一方向同期。

| 役割 | パス |
|------|------|
| 正本 | `~/Developer/wp-dev-base/wp-content/themes/theme-techno` |
| 先方 clone | `~/Developer/witc-tec` |
| テーマ配置先 | `~/Developer/witc-tec/wp-content/themes/witc-tec`（フォルダ名固定） |
| 同期スクリプト | `~/Developer/witc-tec/script/sync-theme-from-local.sh` |
| テスト環境 | https://yutori-development.conohawing.com/witc-tec/ |

## ルール

- 正本は常に個人 `theme-techno`。先方で直した変更は稀 → 入ったら個人側へ逆同期してから再流す
- 同期ブランチは**使い捨て**（`feature/andrewbelleth/sync-theme-YYYYMMDD`）。常設 feature を使い回さない
- `main` 直 push 禁止。PR → マージのみ
- WP デプロイに SCSS ビルドは無い。**CSS はコミット必須**（`.gitignore` が `assets/css/` を無視 → `git add -f`）
- 同期前に個人側で CSS ビルド済みであること

## ワークフロー（スキップ禁止）

```
Progress:
- [ ] 1. 前提確認（clone / CSS 存在）
- [ ] 2. main 最新化 + 使い捨て feature 作成
- [ ] 3. sync スクリプト実行（--stage）
- [ ] 4. commit / push / PR 作成
- [ ] 5. ラベル確認（env/wp-development, deploy/conoha）
- [ ] 6. （依頼時のみ）マージ後デプロイ成功を確認
- [ ] 7. マージ後ブランチ掃除（リモートは Actions、ローカルは削除）
```

### 1. 前提確認

```bash
test -d ~/Developer/witc-tec/.git || gh repo clone yuto-ri/witc-tec ~/Developer/witc-tec
test -x ~/Developer/witc-tec/script/sync-theme-from-local.sh
ls ~/Developer/wp-dev-base/wp-content/themes/theme-techno/assets/css | head
```

`assets/css` が空なら同期を止めてビルドを依頼する。

### 2. ブランチ

```bash
cd ~/Developer/witc-tec
git checkout main && git pull origin main
git checkout -b feature/andrewbelleth/sync-theme-$(date +%Y%m%d)
```

同日に再同期する場合は末尾に `-2` 等を付ける。

### 3. 同期

```bash
cd ~/Developer/witc-tec
./script/sync-theme-from-local.sh --dry-run   # 必要なら
./script/sync-theme-from-local.sh --stage     # rsync + git add -A + git add -f assets/css
```

スクリプト除外（個人用ゴミ）: `.git` / `.cursor` / `.vscode` / `.agents` / `.env` / `inbox` / `docs` / `csv` / `exports` / `public-theme` / `tools` / `task.md` / `column-cpt-implementation-log.md`

### 4. Commit / Push / PR

```bash
cd ~/Developer/witc-tec
git status --short -- wp-content/themes/witc-tec/assets/css   # untracked が残っていないこと
git commit -m "$(cat <<'EOF'
feat(theme): Sync witc-tec theme from local development

EOF
)"
git push -u origin HEAD
gh pr create --base main --title "feat(theme): テーマ同期（ローカル最新）" --body "$(cat <<'EOF'
## 概要
個人開発レポのテーマを witc-tec に丸ごと同期。

## 確認
- [ ] ラベル: env/wp-development / deploy/conoha
- [ ] assets/css を force-add 済み

EOF
)"
```

### 5. ラベル

`wp-content/**` 変更なら labeler が自動付与。無い場合は手で付ける:

- `env/wp-development`
- `deploy/conoha`

### 6. マージ後

ユーザーがマージした場合、またはマージ依頼を受けた場合:

```bash
gh run list --repo yuto-ri/witc-tec --workflow "Deploy to Development" --limit 3
# WP job: deploy_wordpress_assets_to_conoha = success
# Static job: skipped で正常（テーマのみ同期時）
```

### 7. ブランチ削除

リモートは `Delete Merged Branches` が消すことが多い。ローカル:

```bash
cd ~/Developer/witc-tec
git checkout main && git pull
git branch -D feature/andrewbelleth/sync-theme-YYYYMMDD 2>/dev/null || true
```

## デプロイの仕組み（要約）

- トリガー: `main` 向け PR が **merged** かつ上記ラベル付き
- 内容: `wp-content/themes/witc-tec` を ConoHa へ rsync（`--delete`）
- 手動: Actions `workflow_dispatch` → target `wordpress`

## やってはいけないこと

- 個人レポの remote を先方に差し替える
- テーマフォルダ名を `theme-techno` のまま先方へ置く
- CSS なし / `git add -f` 忘れのまま PR
- 同期用ブランチの使い回し
