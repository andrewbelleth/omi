//ハンバーガー
jQuery(document).ready(function ($) {
  // メニュー開閉用の処理
  $(".hamburger").on("click", function (event) {
    event.stopPropagation();
    $("#header").toggleClass("open");
    $(".mask").toggleClass("active");
  });

  // メニュー部分はクリックイベントを止める
  $("#header__menu").on("click", function (event) {
    event.stopPropagation();
  });

  // マスクをクリックしたらメニューを閉じる
  $(".mask").on("click", function () {
    $("#header").removeClass("open");
    $(".mask").removeClass("active");
  });

  // ドキュメント全体のクリックイベントでメニューを閉じる
  $(document).on("click", function () {
    if ($("#header").hasClass("open")) {
      $("#header").removeClass("open");
      $(".mask").removeClass("active");
    }
  });
});

//ヘッダーメニュークリックで閉じる
document.querySelectorAll('.header__link').forEach(link => {
  link.addEventListener('click', function () {
    document.querySelector('.header').classList.remove('open');
    document.querySelector('.mask').classList.remove('active');
  });
});

// ページトップ

jQuery(document).ready(function () {
  var pagetop = jQuery("#page-top");

  pagetop.click(function () {
    jQuery("html").animate({ scrollTop: 0 }, { duration: 300, queue: false });
    return false;
  });
});


// //fadeIn
// document.addEventListener("DOMContentLoaded", function () {
//   let triggerEffects = document.querySelectorAll(".fadeIn");
//   gsap.set(".fadeIn", { y: 40, autoAlpha: 0 });

//   triggerEffects.forEach((trigger) => {
//     let tl = gsap.timeline({
//       scrollTrigger: {
//         trigger: trigger,
//         start: "top 95%",
//        /*  markers: true, */
//       },
//     });
//     tl
//     .fromTo(
//       trigger,
//       { y: 40, autoAlpha: 0 },
//       { y: 0, autoAlpha: 1, stagger: 0.2, delay: 0.5 ,duration: 0.2}
//     );
//   });
// });


//あこーでぃおん
jQuery(document).ready(function () {
  var firstAccordion = jQuery("#firstAccordion");
  firstAccordion.find(".accordion_inner").show().addClass("active");
  firstAccordion.find(".accordion_header").addClass("active");

  var accordionWrapper = jQuery(".accordion_wrapper");

  accordionWrapper.click(function () {
    var accordionInner = jQuery(this).find(".accordion_inner");
    var accordionHeader = jQuery(this).find(".accordion_header");
    var isActive = accordionInner.hasClass("active");
    accordionInner.slideToggle().toggleClass("active");
    accordionHeader.toggleClass("active");
    if (!isActive) {
      jQuery(".accordion_inner")
        .not(accordionInner)
        .slideUp()
        .removeClass("active");
      jQuery(".accordion_header").not(accordionHeader).removeClass("active");
    }
  });
});

//ページ内リンク
document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(ScrollToPlugin);

  // ページ内リンクのイベントリスナー設定
  const anchors = document.querySelectorAll(".link");

  anchors.forEach((anchor) => {
    anchor.addEventListener("click", (e) => {
      const href = anchor.getAttribute("href");

      // ハッシュ部分を取得
      const hashIndex = href.indexOf("#");
      if (hashIndex === -1) return; // ハッシュがないリンクは無視

      const hash = href.slice(hashIndex + 1);
      const targetElement = document.getElementById(hash);

      // 現在のページのURLを取得
      const currentUrl = new URL(window.location.href);
      const linkUrl = new URL(href, window.location.href);

      // 同じページ内のリンクならGSAPでスムーススクロール
      if (currentUrl.pathname === linkUrl.pathname && targetElement) {
        e.preventDefault(); // デフォルトのジャンプを防ぐ

        gsap.to(window, {
          duration: 0.5,
          ease: "power2.out",
          scrollTo: {
            y: targetElement,
            offsetY: 100,
            autokill: true,
          },
        });
      }
    });
  });

  // ページロード時のハッシュ処理
  if (window.location.hash) {
    setTimeout(() => {
      const hash = window.location.hash.slice(1);
      const targetElement = document.getElementById(hash);

      if (targetElement) {
        gsap.to(window, {
          duration: 0.5,
          ease: "power2.out",
          scrollTo: {
            y: targetElement,
            offsetY: 80,
            autokill: true,
          },
        });
      }
    }, 80);
  }
});

// swiper
const swiper = new Swiper('.swiper', {
  centeredSlides: true,
  slidesPerView: 1,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  // 1024px以上で1.371428571429
  breakpoints: {
    769: {
      slidesPerView: 1.19523809524,
    },
    1025: {
      slidesPerView: 1.371428571429,
    },
  },
});

//モーダル
document.addEventListener('DOMContentLoaded', function () {
  const modal = document.getElementById('structure__item-3');
  const modalTrigger = document.getElementById('structure__popup');
  const modalClose = document.getElementById('structure__item-close');
  const modalOverlay = document.getElementById('structure__item-overlay');
  if (modalTrigger) {
    modalTrigger.addEventListener('click', function () {
      modal.classList.add('is-open');
      modalOverlay.classList.add('is-open');
    });
  }

  if (modalClose) {
    modalClose.addEventListener('click', function () {
      modal.classList.remove('is-open');
      modalOverlay.classList.remove('is-open');
    });
  }

  if (modalOverlay) {
    modalOverlay.addEventListener('click', function () {
      modal.classList.remove('is-open');
      modalOverlay.classList.remove('is-open');
    });
  }
});


$(function () {
  $('.header__menu-btn').on('click', function () {
    $('#header').toggleClass('menu-open');
    $('#header__menu-btn').toggleClass('active');
    $('#sp-menu').toggleClass('active');
  });

  $('#top-slider').slick({
    centerMode: true,
    arrows: false,
    // centerPadding: '198px',
    centerPadding: '12.375rem',
    // slidesToShow: 3,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 8000,
    cssEase: 'linear',
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1921,
        settings: {
          variableWidth: false,
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 1025,
        settings: {
          variableWidth: false,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 769,
        settings: {
          variableWidth: false,
          centerPadding: '2.5625rem',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 641,
        settings: {
          variableWidth: false,
          centerPadding: '3.09375rem',
          slidesToShow: 1
        }
      }
    ]
  });

  $('#top-gallery').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 8000,
    cssEase: 'linear',
    arrows: false,
    swipe: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 1921,
        settings: {
          variableWidth: false,
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 769,
        settings: {
          variableWidth: false,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 641,
        settings: {
          variableWidth: false,
          slidesToShow: 1
        }
      }
    ]
  })
})

let panels = gsap.utils.toArray(".top-strength__item");

panels.forEach((panel) => {
  gsap.fromTo(
    panel,
    { width: '95%' },
    {
      width: '100%', duration: .5,
      scrollTrigger: {
        trigger: panel,
        start: 'top 50%',
        end: 'bottom 75%',
        ease: 'power2.out',
        scrub: true,
      },
    },
  )
});

let inviewItems = gsap.utils.toArray('.inview');

inviewItems.forEach((inviewItem) => {
  ScrollTrigger.create({
    trigger: inviewItem,
    start: "top 80%",
    toggleClass: {
      targets: inviewItem,
      className: "active",
    },
    once: true,
  });
});

$(function () {
  let mm = gsap.matchMedia();
  let bodyH = $('body').innerHeight();

  mm.add("(max-width: 768px)", () => {
    let stopP = $('.footer__nav').offset().top;
    let p = bodyH - stopP;

    gsap.fromTo('.page-top',
      { autoAlpha: 0 },
      {
        duration: .3,
        autoAlpha: 1,
        scrollTrigger: {
          trigger: 'body',
          start: 'top+=200 top',
          endTrigger: '.footer__nav',
          end: '0% bottom-=76',
          toggleActions: 'play none none reverse',
          onLeave: () => {
            $('.page-top').addClass('infooter')
            $('.page-top').css('bottom', 'calc(' + p + 'px - 26px)')

          },
          onEnterBack: () => {
            $('.page-top').removeClass('infooter')
            $('.page-top').css('bottom', '24px')
          },
        }
      })
  });

  mm.add("(min-width: 769px)", () => {
    let stopP = $('.footer__logo').offset().top;
    let p = bodyH - stopP;

    gsap.fromTo('.page-top',
      { autoAlpha: 0 },
      {
        duration: .3,
        autoAlpha: 1,
        scrollTrigger: {
          trigger: 'body',
          start: 'top+=200 top',
          endTrigger: '.footer__logo',
          end: 'top-=31 bottom-=132',
          toggleActions: 'play none none reverse',
          onLeave: () => {
            $('.page-top').addClass('infooter')
            $('.page-top').css('bottom', 'calc(' + p + 'px - 5.25rem + 31px)')

          },
          onEnterBack: () => {
            $('.page-top').removeClass('infooter')
            $('.page-top').css('bottom', '48px')
          },
        }
      })
  });

});

function activateMenuByHash() {
  const hash = window.location.hash.replace('#', '');
  const menuItems = document.querySelectorAll('#sidemenu li a');

  let matched = false;

  menuItems.forEach(item => {
    const slug = item.getAttribute('data-slug');
    if (slug === hash) {
      item.classList.add('active');
      matched = true;
    } else {
      item.classList.remove('active');
    }
  });

  if (!matched && menuItems.length > 0) {
    menuItems[0].classList.add('active');
  }
}

// 初期表示時
document.addEventListener('DOMContentLoaded', activateMenuByHash);

// フラグメントが変化したとき
window.addEventListener('hashchange', activateMenuByHash);

//パララックス+紙芝居

gsap.registerPlugin(ScrollTrigger);

(() => {
  const initParallax = () => {
    const target = document.querySelector('.js-pallax-target'); // ラッパー
    const bg = document.querySelector('.pallax-bg');       // 背景画像
    const img = document.querySelector('.js-pallax-img');       // 中の画像
    if (!target || !img) return;

    // パララックス（画像がゆっくり動く）
    gsap.fromTo(
      img,
      { yPercent: 0 },
      {
        yPercent: -30,
        scrollTrigger: {
          trigger: bg,
          start: 'center 80%', // 画面下に入ったらスタート
          end: 'bottom top',  // 画面上から出るまで
          scrub: 0.7,
          ease: 'none',
          // markers: true,
        }
      }
    );

    // ピン（画像が固定されて、その後 recruitがかぶる）
    ScrollTrigger.create({
      trigger: target,
      start: 'top 14%%', // トップが画面の10%にきたら
      /*  end: () => `+=${target.offsetHeight}`, */ // 最後までスクロールし終わったら終了
      end: 'bottom top',
      pin: true,
      pinSpacing: false, // recruitがピッタリかぶる
      ease: 'none',
      // markers: true
    });
  };

  window.addEventListener('load', initParallax);
})();

const shuffleNumberCounter = (target) => {
  const targetNum = Number(target.getAttribute('data-num'))
  if (!targetNum) {
    return
  }

  const duration = 2000 // 1秒間
  const startTime = performance.now()

  const animate = (currentTime) => {
    const elapsed = currentTime - startTime
    const progress = Math.min(elapsed / duration, 1)

    // イージング関数を使用してアニメーションを滑らかにする
    const easeProgress = 1 - Math.pow(1 - progress, 3)
    const currentNum = Math.floor(targetNum * easeProgress)

    if (Number.isInteger(targetNum)) {
      target.innerHTML = currentNum.toLocaleString()
    } else {
      target.innerHTML = `${currentNum.toLocaleString()}.${Math.floor(Math.random() * 9)}`
    }

    if (progress < 1) {
      requestAnimationFrame(animate)
    } else {
      // 最終的な値を設定
      target.innerHTML = targetNum.toLocaleString()
    }
  }

  requestAnimationFrame(animate)
}

document.addEventListener('DOMContentLoaded', function () {
  const solutions = document.querySelectorAll('.js-count');
  const targets = document.querySelectorAll('.js-count-num');
  let animatedElements = new Set();

  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    return (rect.top <= windowHeight * 0.8 && rect.bottom >= 0);
  }
  function startAnimation() {
    targets.forEach((target, index) => {
      shuffleNumberCounter(target)
    }
    );
  }
  function handleScroll() {
    solutions.forEach((solution, index) => {
      if (!animatedElements.has(solution) && isElementInViewport(solution)) {
        startAnimation();
        animatedElements.add(solution);
      }
    });

    // すべての要素がアニメーション済みの場合、スクロールイベントを削除
    if (animatedElements.size === solutions.length) {
      window.removeEventListener('scroll', handleScroll);
    }
  }
  window.addEventListener('scroll', handleScroll);
  handleScroll();
});
