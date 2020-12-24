const Logo = document.querySelector(".header__logo");
const Navigate = document.querySelector("nav");
const menuBtn = document.querySelector(".header__btn");
const Hamburger = document.querySelector(".header__hamburger");
const menuNav = document.querySelector(".header__nav");
const menuNavItem = document.querySelectorAll(".header__nav-item");


let showMenu = false;


menuBtn.addEventListener("click" , function(){
    if(!showMenu){
        Logo.classList.add("open");
        Navigate.classList.add("open");
        menuBtn.classList.add("open");
        Hamburger.classList.add("open");
        menuNav.classList.add("open");
        menuNavItem.forEach(item => item.classList.add("open"));
        showMenu =true;
    }else{
        Logo.classList.remove("open");
        Navigate.classList.remove("open");
        menuBtn.classList.remove("open");
        Hamburger.classList.remove("open");
        menuNav.classList.remove("open");
        menuNavItem.forEach(item => item.classList.remove("open"));
        showMenu =false;
    }
})