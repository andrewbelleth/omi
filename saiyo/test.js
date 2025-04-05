"use strict";

document.addEventListener('DOMContentLoaded', () => {
  const fileInput = document.querySelector('input[name="your-file"]');
  const fileInputWrapper = fileInput.closest('.wpcf7-form-control-wrap[data-name="your-file"]');
  const confirmButton = document.querySelector(".form__confirm-btn");
  const acceptanceCheckbox = document.querySelector('input[name="acceptance-505"]');

  // カスタムボタンをクリックしたときにファイル入力をトリガー
  fileInputWrapper.addEventListener('click', function(event) {
    if (event.target !== fileInput) {
      fileInput.click();
    }
  });

  // ファイルが選択されたときにファイル名を表示
  fileInput.addEventListener('change', function() {
    const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : '選択されていません';
    fileInputWrapper.setAttribute('data-filename', fileName);
    updateConfirmElement(this.id, fileName); // 確認画面の要素を更新
  });

  // 入力フィールドの内容が変更された場合の処理
  const formInputs = document.querySelectorAll('.form__item input, .form__item select, .form__item textarea, .form__item [type="file"]');
  formInputs.forEach(input => {
    input.addEventListener('change', function () {
      const val = this.value;
      const id = this.id;

      // メールアドレスのフォーマットチェック
      if (id === 'your_email') {
        if (!validateEmail(val)) {
          this.setCustomValidity("正しいメールアドレスを入力してください。");
        } else {
          this.setCustomValidity("");
        }
      }

      updateConfirmElement(id, val); // 確認画面の要素を更新
      checkFormValidity(); // フォームの有効性をチェック
    });
  });

  // ラジオボタンの初期値を取得し、確認画面に反映させる
  const radioButtons = document.querySelectorAll('[type="radio"]:checked');
  radioButtons.forEach(button => {
    const radioValue = button.value;
    const id = button.closest('[id]').id;
    updateConfirmElement(id, radioValue); // 確認画面の要素を更新
  });

  // ラジオボタンが変更された場合の処理を追加
  const radioInputs = document.querySelectorAll('[type="radio"]');
  radioInputs.forEach(input => {
    input.addEventListener('change', function() {
      if (this.checked) {
        const radioValue = this.value;
        const id = this.closest('[id]').id;
        updateConfirmElement(id, radioValue); // 確認画面の要素を更新
        checkFormValidity(); // フォームの有効性をチェック
      }
    });
  });

  // 確認ボタンをクリックした場合の処理
  confirmButton.addEventListener('click', () => {
    if (confirmButton.disabled) return;

    document.querySelector(".form").style.display = 'none';
    document.querySelector(".confirm_area").style.display = 'block';

    // 確認画面にファイル名を再反映
    const fileName = fileInput.files.length > 0 ? fileInput.files[0].name : '選択されていません';
    updateConfirmElement(fileInput.id, fileName);

    window.scrollTo(0, document.querySelector('#navi').getBoundingClientRect().top);
  });

  // 戻るボタンをクリックした場合の処理
  const backButton = document.querySelector(".back_button");
  backButton.addEventListener('click', () => {
    document.querySelector(".form").style.display = 'block';
    document.querySelector(".confirm_area").style.display = 'none';
    window.scrollTo(0, document.querySelector('#navi').getBoundingClientRect().top);
  });

  // 必須項目が変更された場合の処理
  const requiredInputs = document.querySelectorAll('[aria-required="true"]');
  requiredInputs.forEach(input => {
    input.addEventListener('input', checkFormValidity); // フォームの有効性をチェック
  });

  // 個人情報取扱いチェックボックスの状態を確認
  acceptanceCheckbox.addEventListener('change', checkFormValidity); // フォームの有効性をチェック

  // 確認ボタンの有効化/無効化をチェック
  function checkFormValidity() {
    let isValid = true;

    // 必須項目をループで確認
    requiredInputs.forEach(requiredInput => {
      if (requiredInput.value === "" || !requiredInput.checkValidity()) {
        isValid = false;
      }
    });

    // チェックボックスの状態を確認（チェックされているか）
    if (!acceptanceCheckbox.checked) {
      isValid = false;
    }

    console.log('Form is valid:', isValid); // バリデーションの状態をログ出力
    confirmButton.disabled = !isValid;
  }

  // ページ読み込み時にチェックボックスの状態を確認
  checkFormValidity();

  // 確認画面の要素を更新する関数
  function updateConfirmElement(id, value) {
    const confirmElement = document.querySelector(`.confirm_${id}`);
    if (confirmElement) {
      confirmElement.textContent = value;
    } else {
      console.error(`Confirm element not found for .confirm_${id}`);
    }
  }

  // メールアドレスのバリデーション関数
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  // 電話番号のバリデーション
  document.querySelector('#your_tel').addEventListener('input', function() {
    const phoneValue = this.value;

    // カスタムバリデーションを行う
    if (!validatePhoneNumber(phoneValue)) {
      this.setCustomValidity("正しい電話番号を入力してください。");
    } else {
      this.setCustomValidity("");
    }
    checkFormValidity(); // フォームの有効性を再チェック
  });
  // 電話番号のバリデーション関数
  function validatePhoneNumber(phone) {
    const phonePattern = /^0\d{1,4}-\d{1,4}-\d{4}$/;
    return phonePattern.test(phone);
  }

  // 送信ボタンをクリックした場合の処理
  document.addEventListener('wpcf7mailsent', (event) => {
    console.log('wpcf7mailsent event triggered');
    location = 'https://omi-in.co.jp/saiyo/entry-thanks/';
  }, false);
});
