jQuery(function ($) {
  /* FLOW STEP03 の横スクロール画像のスクロールバー
     ネイティブのスクロールバーはつまみの長さが中身の幅で決まってしまい、
     ブロックごとに長さが変わるため、カンプどおり固定長のバーを自前で動かす */
  var THUMB_RATIO = 0.55; // バー全体に対するつまみの割合（SCSS の .dtf-acc__bar-thumb と合わせる）
  var updaters = [];

  function setupScrollBar(scroll) {
    var bar = scroll.nextElementSibling;

    if (!bar || !bar.classList.contains("dtf-acc__bar")) {
      return;
    }

    var thumb = bar.querySelector(".dtf-acc__bar-thumb");
    var startX = 0;
    var startScrollLeft = 0;

    // スクロールできる量（横に隠れている分）
    function maxScroll() {
      return scroll.scrollWidth - scroll.clientWidth;
    }

    // つまみが動ける量
    function maxTravel() {
      return bar.clientWidth * (1 - THUMB_RATIO);
    }

    function update() {
      var max = maxScroll();

      // 画像が枠に収まっていてスクロール不要なときはバーごと隠す
      if (max <= 1) {
        bar.classList.add("is-hidden");
        return;
      }

      bar.classList.remove("is-hidden");
      thumb.style.transform =
        "translateX(" + (scroll.scrollLeft / max) * maxTravel() + "px)";
    }

    function onPointerMove(event) {
      var max = maxScroll();
      var travel = maxTravel();

      if (max <= 0 || travel <= 0) {
        return;
      }

      scroll.scrollLeft =
        startScrollLeft + ((event.clientX - startX) / travel) * max;
    }

    function onPointerUp() {
      thumb.classList.remove("is-dragging");
      document.removeEventListener("pointermove", onPointerMove);
      document.removeEventListener("pointerup", onPointerUp);
      document.removeEventListener("pointercancel", onPointerUp);
    }

    // つまみをドラッグして動かせるようにする（画像側のスワイプ・ホイールは標準のまま）
    thumb.addEventListener("pointerdown", function (event) {
      event.preventDefault();
      startX = event.clientX;
      startScrollLeft = scroll.scrollLeft;
      thumb.classList.add("is-dragging");
      document.addEventListener("pointermove", onPointerMove);
      document.addEventListener("pointerup", onPointerUp);
      document.addEventListener("pointercancel", onPointerUp);
    });

    scroll.addEventListener("scroll", update);
    updaters.push(update);
    update();
  }

  function updateScrollBars() {
    updaters.forEach(function (update) {
      update();
    });
  }

  Array.prototype.forEach.call(
    document.querySelectorAll(".dtf-acc__scroll"),
    setupScrollBar
  );

  $(window).on("resize", updateScrollBars);

  // FLOW STEP03 のアコーディオン（複数同時に開ける）
  $(".dtf-acc__head").on("click", function () {
    var $head = $(this);
    var isOpen = $head.hasClass("active");

    $head.toggleClass("active");
    $head.attr("aria-expanded", isOpen ? "false" : "true");
    // 閉じている間は幅が測れないので、開ききってからバーを計算し直す
    $head
      .closest(".dtf-acc__item")
      .find(".dtf-acc__body")
      .slideToggle(300, updateScrollBars);
    $head.find(".dtf-acc__head-more-text").text(isOpen ? "詳しく見る" : "閉じる");
  });
});
