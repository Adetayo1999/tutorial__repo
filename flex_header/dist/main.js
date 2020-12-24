

const Btn = $(".header__menu-btn");
const Ham = $(".header__menu-ham");
const Nav = $("nav");
const Menu = $(".header__menu");
const MenuItem = $(".header__nav-item");

let showMenu = false;

Btn.click(function(){
    if(!showMenu){
        Btn.addClass("open");
        Ham.addClass("open");
        Nav.addClass("open");
        Menu.addClass("open");
        MenuItem.addClass("open");

        showMenu = true
    }else
    {
        Btn.removeClass("open");
        Ham.removeClass("open");
        Nav.removeClass("open");
        Menu.removeClass("open");
        MenuItem.removeClass("open");

        showMenu = false
    }
})