
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

/*smooth scrolling*/
 document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(ScrollTrigger)
  
 const lenis = new Lenis();
 lenis.on('scroll', ScrollTrigger.update);
 gsap.ticker.add((time) => {
  lenis.raf(time * 1000); 
});
gsap.ticker.lagSmoothing(0);

const imgFinalPos = [
  [-160, -120],
  [50, -120],
  [-180, 30],
  [40, 30],
];
/*const scaleFactor = window.innerWidth / 1000; // base screen

const imgFinalPos = [
  [-100 * scaleFactor, -100 * scaleFactor],
  [80 * scaleFactor, -90 * scaleFactor],
  [-100 * scaleFactor, 80 * scaleFactor],
  [80 * scaleFactor, 80 * scaleFactor],
];*/

const spotlightImages = document.querySelectorAll(".spotlight-img");

ScrollTrigger.create({
   trigger:".spotlight" ,
   start:"top top" ,
   end: `+${window.innerHeight * 6}px`,
   pin:true ,
   pinSpacing:true ,
   scrub:1,
   onUpdate: (self) => {
     const progress = self.progress;

     const initialRotations =[5 ,-3 ,3.5 ,-1];
     const startOffset =[0 ,0.1 ,0.2, 0.3];
   //problem start
   spotlightImages.forEach ((img, index) => {
     const initialRotation = initialRotations[index];
     const phase1Start = startOffset[index];
     const phase1End = Math.min(
      phase1Start + (0.45 - phase1Start) * 0.9 ,
      0.45
     );
     let x= -50;
     let y, rotation ;

     if (progress < phase1Start){
       y=200;
       rotation = initialRotation;
     } else if (progress <= 0.45){
        let phase1Progress ;
       if (progress >= phase1End){
         phase1Progress=1;
       } else{
         const linearProgress = 
         (progress - phase1Start) / (phase1End - phase1Start);
         phase1Progress= 1 - Math.pow(1 - linearProgress, 3);
      }
     y= 200 - phase1Progress * 250;
     rotation= initialRotation;
     } else{
       y= -50;
       rotation = initialRotation;
     }
     const phaseTwoOffsets = [0.5, 0.55, 0.6, 0.65];
      const phase2Start = phaseTwoOffsets[index];
      const phase2End = Math.min( 
        phase2Start + (0.95 - phase2Start) * 0.9,
         0.95 
      );
     const finalX = imgFinalPos[index][0]; 
     const finalY = imgFinalPos[index][1];

      if (progress >= phase2Start && progress <= 0.95) { 
        let phase2Progress ; 
        if (progress >= phase2End) { 
          phase2Progress = 1;
         } else {
           const linearProgress = 
           (progress - phase2Start) / (phase2End - phase2Start);
            phase2Progress = 1 - Math.pow(1 - linearProgress,3);
           }
           x= -50 + (finalX+50) * phase2Progress;
           y= -50 + (finalY+50) * phase2Progress;
           rotation = initialRotation * (1-phase2Progress);
          } else if (progress > 0.95) {
            x = finalX;
             y = finalY;
             rotation = 0;
             }
   

     gsap.set(img, {
        transform: `translate(${x}%, ${y}%) rotate(${rotation}deg)`,
     });
   });
  },
});
 });