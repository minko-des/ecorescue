
// $(document).ready(function() {
document.addEventListener("DOMContentLoaded", () => {

    const linkBtnContacts = document.querySelectorAll(".js-link-btn__contact");
    const linkBtnLines = document.querySelectorAll(".js-link-btn__line");

    // どちらかの要素が１つもない場合は処理を中断
    if (linkBtnContacts.length === 0 || linkBtnLines.length === 0) return;

    function toggleClass() {
        const isWide = window.matchMedia("(min-width: 768px)").matches;

        linkBtnContacts.forEach((btn) => {
            btn.classList.toggle("c-link-btn__contact--wide", isWide);
            btn.classList.toggle("c-link-btn__contact--narrow", !isWide);
        });

        linkBtnLines.forEach((btn) => {
            btn.classList.toggle("c-link-btn__line--wide", isWide);
            btn.classList.toggle("c-link-btn__line--narrow", !isWide);
        });
    }

    // 初回チェック
    toggleClass();
    // 画面幅が変わった時に関数を実行
    window.addEventListener("resize", toggleClass);


    // メニューページ表示非表示関数
    const hamburgerBtn = document.querySelector(".c-hamburger-btn");
    const sideBar = document.querySelector(".l-sidebar");

    hamburgerBtn.addEventListener("click" , () => {
        sideBar.classList.toggle("u-open-menu");

        const currentText = hamburgerBtn.textContent;
        hamburgerBtn.textContent = currentText == "close" ? "menu" : "close";
        
    });


    // メニューページ表示非表示関数
    // const menuBtn = document.querySelector(".c-menu-btn");
    // const sideBar = document.querySelector(".p-sidebar");

    // menuBtn.addEventListener("click" , () => {
    //     const currentText = menuBtn.textContent;
    //     menuBtn.textContent = currentText === "CLOSE" ? "MENU" : "CLOSE";
    //     sideBar.classList.toggle("menuOpen");

    //     toggleBodyScroll();
    // });

    // function toggleBodyScroll() {
    //     if (sideBar.classList.contains("menuOpen")) {
    //         document.body.classList.add("u-noScroll");
    //     } else {
    //         document.body.classList.remove("u-noScroll");
    //     }
    // }


});