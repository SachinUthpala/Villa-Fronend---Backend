// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");
let main2 = document.querySelector(".main2");
let main3 = document.querySelector(".main3");


toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
  main2.classList.toggle("active");
  main3.classList.toggle("active");
};

//toggle

function navs2(){
  navigation.classList.toggle("active");
  main2.classList.toggle("active");
  main3.classList.toggle("active");
}

function navs3(){
  navigation.classList.toggle("active");
  main2.classList.toggle("active");
  main3.classList.toggle("active");
}

function openHome(){
  document.getElementById("Home").style.display = "block";
  document.getElementById("Users").style.display = "none";
  //document.getElementById("Customers").style.display = "none";
  document.getElementById("Msg").style.display = "none";
}

function openUsers(){
  document.getElementById("Home").style.display = "none";
  document.getElementById("Users").style.display = "block";
  //document.getElementById("Customers").style.display = "none";
  document.getElementById("Msg").style.display = "none";
}

function openMassages(){
  document.getElementById("Home").style.display = "none";
  document.getElementById("Users").style.display = "none";
  //document.getElementById("Customers").style.display = "none";
  document.getElementById("Msg").style.display = "block";
}