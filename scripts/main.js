$(document).ready(function(){
  $('.select').owlCarousel({
center: true,
items:2,
loop:true,
margin:10,
responsive:{
 1025:{
  items:4
 },
  992:{
    items:3
  },
  769:{
    items:3
    
  },
  541:{
    items:2
  },
  320:{
    items:1
  },
}
});
});
const men=document.querySelector(".list");
const menubtn=document.querySelector(".icon-menu");
const cancelbtn=document.querySelector(".icon-cross");
menubtn.onclick = ()=>{
    men.classList.add("active");
    menubtn.classList.add("hide");
}
cancelbtn.onclick = ()=>{
    men.classList.remove("active");
    menubtn.classList.remove("hide");
}
window.addEventListener("scroll",function(){
    var header =this.document.querySelector("header");
    header.classList.toggle("sticky",window.scrollY >0);
})
const currentlocation =location.href;
const menuitem =document.querySelectorAll('a');
const menulenght=menuitem.length
for(let i = 0;i<menulenght;i++){
    if(menuitem[i].href === currentlocation){
        menuitem[i].className.add("active")
    }
}
$(document).ready(function(){
    $('.lists').click(function(){
        const value =$(this).attr('data-filter');
        if(value =='All'){
            $('.itembox').show('1000');
        }
        else{
            $('.itembox').not('.'+value).hide('1000');
            $('.itembox').filter('.'+value).show('1000');
        }
    })
    $('.lists').click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    })
})
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}