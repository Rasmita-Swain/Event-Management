document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(SplitText)
   
  let spilt = SplitText.create(".focus-in" ,{

    type :"lines,words,chars"

  });
  gsap.from(spilt.chars,{

    y:40,
    opacity:0,
    duration:0.7,
    delay:8,
    stagger:{
        each:0.1,
        from:"random"
    }
  })
 });

 /*toggle menu animation*/

 const navToggle = document.querySelector('.nav-toggle');
 const navMenu = document.querySelector('.nav-menu');

 navToggle.addEventListener('click',() => {
   
  navToggle.classList.toggle('active');
  navMenu.classList.toggle('active');
 });