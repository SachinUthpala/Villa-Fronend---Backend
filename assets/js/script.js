const preloader = document.querySelector("[data-preloader]");

window.addEventListener("load" , () => {
    preloader.classList.add("remove");
});

/*add event on multipal elements */

const addEventOnElement = function(elements , eventType , callBack){
    for(let i=0 , len = elements.length ; i< len ; i++){
        elements[i].addEventListener(eventType , callBack);
    }
}

const navBar = document.querySelector("[data-navbar]");
const navBarToggler = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNav = function(){
    navBar.classList.toggle("active");
    document.body.classList.toggle("nav-active");
}

addEventOnElement(navBarToggler , "click" , toggleNav);

function openMenu(){
    const open = document.querySelector("[data-navbar]");
    open.classList.add("active");
}

function closeMenu() {
   const ovlay = document.querySelector("[data-overlay]"); 
   ovlay.classList.remove("active");
}

/*header*/

const header = document.querySelector("[header-data]");

window.addEventListener("scroll" , () => {
    if(window.scrollY > 100){
        header.classList.add("active");
    }else{
        header.classList.remove("active");
    }
})



