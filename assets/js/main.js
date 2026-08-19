/* 장가네 흑염소 — 1차 화면 초안 JS
   범위를 최소로 유지합니다: 메뉴 앵커 스크롤 + 모바일 헤더 메뉴 토글 두 가지뿐입니다.
   카카오톡 버튼 노출 여부는 PHP(template-parts/contact-floating.php)에서
   서버 사이드로 처리하므로 JS에서 따로 숨김 처리를 하지 않습니다.
   무거운 애니메이션·외부 라이브러리 의존 없음. */
(function () {
  "use strict";

  document.addEventListener("click", function (e) {
    var target = e.target.closest("[data-scroll-to]");
    if (!target) return;
    var selector = target.getAttribute("data-scroll-to");
    var el = document.querySelector(selector);
    if (el) {
      e.preventDefault();
      el.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  });

  // 모바일 헤더 메뉴(햄버거) 토글. 2026-08-20 다중 페이지 구조 보강 시 추가.
  var navToggle = document.getElementById("nav-toggle");
  var siteNav = document.getElementById("site-nav");
  if (navToggle && siteNav) {
    navToggle.addEventListener("click", function () {
      var isOpen = siteNav.classList.toggle("is-open");
      navToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
  }
})();
