# reset-recruit — 全求人投稿の削除（CLI）

求人カスタム投稿タイプ `job` の投稿を **すべて完全削除** します（ゴミ箱へ移動ではなく `wp_delete_post( ..., true )`）。

## 前提

- 作業ディレクトリは WordPress プロジェクトルート `wp-techno`
- Docker Compose の `wpcli` サービスが利用可能であること
- **タクソノミー（都道府県・職種など）は削除しない**（投稿のみ削除）

## 手順

1. **必ず dry-run で対象件数を確認する**

```bash
bash wp-content/themes/witc-tec/inc/cli/run-reset-recruit.sh --dry-run
```

2. ユーザーが本削除を明示している場合のみ、次を実行する

```bash
bash wp-content/themes/witc-tec/inc/cli/run-reset-recruit.sh
```

3. 実行結果（削除件数・失敗件数・dry-run の一覧）をユーザーに報告する

## 注意

- ユーザーが「削除して」と言っていない限り、**dry-run のみ**実行すること
- 本削除は取り消せない。件数が多い場合は dry-run の一覧を見せてから確認を取ること
- インポート再実行の前処理として使う想定（`run-import-jobs-from-csv.sh` と併用）

## 関連ファイル

- [inc/cli/reset-recruit-jobs.php](../../inc/cli/reset-recruit-jobs.php) — WP-CLI eval-file 本体
- [inc/cli/run-reset-recruit.sh](../../inc/cli/run-reset-recruit.sh) — Docker 経由の実行ラッパー
- [inc/cli/run-import-jobs-from-csv.sh](../../inc/cli/run-import-jobs-from-csv.sh) — 削除後の再インポート用
