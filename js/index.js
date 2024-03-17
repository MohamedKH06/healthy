// for add and remove active class 
const boxs =document.querySelectorAll('.pq-accordion-box');
boxs.forEach(box =>{
  box.addEventListener('click',()=>{
    document.querySelector('.pq-active')?.classList.remove('pq-active');
    box.classList.add('pq-active');
  })
})


//Accordian Action
var action = 'click';
var speed = "500";

//Document.Ready
$(document).ready(function(){
  //Question handler
$('.pq-ad-title').on(action, function(){
  //gets next element
  //opens .a of selected question
$(this).next().slideToggle(speed)
    //selects all other answers and slides up any open answer
    .siblings('.ad-title-text').slideUp();
  
  //Grab img from clicked question
var img = $(this).children('.img');
  //Remove Rotate class from all images except the active
  $('.img').not(img).removeClass('rotate');
  //toggle rotate class
  img.toggleClass('rotate');

});//End on click




});//End Ready


