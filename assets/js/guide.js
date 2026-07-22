// スクロールバーの常時表示設定
document.addEventListener('DOMContentLoaded', function() {
  const swatchList = document.querySelector('.swatch-list');
  if (swatchList) {
    // モバイルデバイスの場合のみスクロールバーを表示
    if (window.innerWidth <= 768) {
      swatchList.style.setProperty('--scrollbar-visible', 'block');
      swatchList.style.setProperty('scrollbar-width', 'auto');
      swatchList.style.setProperty('-webkit-overflow-scrolling', 'touch');
      
      // iOSデバイスでのスクロールバー表示
      if (/iPad|iPhone|iPod/.test(navigator.userAgent)) {
        swatchList.style.setProperty('overflow', 'scroll');
        swatchList.style.setProperty('-webkit-overflow-scrolling', 'touch');
      }
    } else {
      // PCの場合はスクロールバーを非表示
      swatchList.style.setProperty('--scrollbar-visible', 'none');
    }
  }
}); 