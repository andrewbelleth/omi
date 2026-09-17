jQuery(function ($) {
  // FLOW STEP03 のアコーディオン（複数同時に開ける）
  $(".dtf-acc__head").on("click", function () {
    var $head = $(this);
    var isOpen = $head.hasClass("active");

    $head.toggleClass("active");
    $head.attr("aria-expanded", isOpen ? "false" : "true");
    $head.closest(".dtf-acc__item").find(".dtf-acc__body").slideToggle(300);
    $head.find(".dtf-acc__head-more-text").text(isOpen ? "詳しく見る" : "閉じる");
  });
});
