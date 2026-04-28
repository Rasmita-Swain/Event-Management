import { setupMarqueeAnimation } from "./marquee.js";

document.addEventListener("DOMContentLoaded", (event) => {
  gsap.registerPlugin(SplitText)
  window.addEventListener("load", () => {
    document.fonts.ready.then(() => { 
      let spilt = SplitText.create(".focus-in" ,{ type :"lines,words,chars" });

  gsap.from(spilt.chars,{

    y:40,
    opacity:0,
    duration:0.7,
    delay:8,
    stagger:{
        each:0.1,
        from:"random"
    }
  });
});
  });
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

 //events section
 document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger, SplitText);
  
 const lenis = new Lenis();
 lenis.on("scroll", ScrollTrigger.update);
 gsap.ticker.add((time) => lenis.raf(time * 1000)); 
gsap.ticker.lagSmoothing(0);

 const cards = gsap.utils.toArray(".card");
 const introCard = cards[0];

const titles = gsap.utils.toArray(".card-title h2");
document.fonts.ready.then(() => {
titles.forEach((title) => {
  const spilt1 = new SplitText(title, {
    type: "char",
    charsClass: "char",
    tag: "div",
  });
  spilt1.chars.forEach((char) =>{
    char.innerHTML = `<span>${char.textContent}</span>` ;
  });
});
});

const cardImgWrap = introCard.querySelector(".card-img");
const cardImg = introCard.querySelector(".card-img img");
gsap.set(cardImgWrap, { scale: 0.5, borderRadius: "400px"});
gsap.set(cardImg, { scale: 1.5});

function animateContentIn(titleChars, description) {
   gsap.to(titleChars, { x: "0%", duration: 0.75,  ease: "power4.out"});
   gsap.to(description, { 
    x: 0,
    opacity:1,
    duration:0.75,
    delay:0.1,
    ease: "power4.out",
   });
}

function animateContentOut(titleChars, description) {
   gsap.to(titleChars, { x: "100%", duration: 0.5, ease: "power4.out"});
   gsap.to(description, { 
    x: "40px",
    opacity:0,
    duration:0.5,
    ease: "power4.out",
   });
}

const marquee = introCard.querySelector(".card-marquee .marquee");
const titleChars = introCard.querySelector(".card-title h2");
const description = introCard.querySelector(".card-book");

ScrollTrigger.create({
  trigger: introCard,
  start: "top top",
  end: "+=300vh",
  onUpdate: (self) => {
    const progress = self.progress;
    const imgScale = 0.5 + progress * 0.5;
    const borderRadius = 400 - progress * 375;
    const innerImgScale = 1.5 - progress * 0.5;

    gsap.set(cardImgWrap, {
      scale: imgScale,
      borderRadius: borderRadius + "px",
    });
    gsap.set(cardImg, { scale: innerImgScale });

    if(imgScale >= 0.5 && imgScale <= 0.75) {
      const fadeProgress = (imgScale - 0.5) / (0.75 - 0.5);
      gsap.set(marquee, { opacity: 1 - fadeProgress });
    } else if (imgScale < 0.5) {
      gsap.set(marquee, { opacity: 1 });
    } else if (imgScale > 0.75) {
      gsap.set(marquee, { opacity: 0 });
    }

    if (progress >=1 && !introCard.contentRevealed) {
      introCard.contentRevealed = true;
      animateContentIn(titleChars , description);
    }
    if (progress <1 && introCard.contentRevealed) {
      introCard.contentRevealed = false;
      animateContentOut(titleChars , description);
    }
  },
});

cards.forEach((card, index) => {
  const isLastCard = index === cards.length - 1 ;
  ScrollTrigger.create({
    trigger: card,
    start: "top top",
    end: isLastCard ? "+=100vh" : "top top",
    endTrigger: isLastCard ? null : cards[cards.length - 1],
    pin: true,
    pinSpacing: isLastCard,
  });
});

cards.forEach((card, index) => {
  if (index < cards.length - 1){
    const cardWrap = card.querySelector(".card-wrap");
    ScrollTrigger.create({
      trigger: cards[index + 1],
      start: "top bottom",
      end: "top top",
      onUpdate: (self) => {
        const progress = self.progress;
        gsap.set(cardWrap, {
          scale: 1 - progress * 0.25,
          opacity: 1 - progress,
        });
      },
    });
  }
});

 cards.forEach((card, index) => {
  if (index > 0) {
    const cardImg = card.querySelector(".card-img img");
    const imgContainer = card.querySelector(".card-img");
    ScrollTrigger.create({
      trigger: card,
      start: "top bottom",
      end: "top top",
      onUpdate: (self) => {
        const progress = self.progress;
        gsap.set(cardImg, { scale: 2 - progress});
        gsap.set(imgContainer, { borderRadius: 150 - progress * 125 + "px"});
      },
    });
  }
 });


 cards.forEach((card, index) => {
  if (index === 0) return;

  const cardDescription = card.querySelector(".card-book");
  const cardTitleChars = card.querySelectorAll(".card-title h2");


  ScrollTrigger.create({
    trigger: card,
    start: "top top",  

    onEnter: () => animateContentIn(cardTitleChars, cardDescription),
    //onEnterBack: () => animateContentIn(cardTitleChars, cardDescription),

   // onLeave: () => animateContentOut(cardTitleChars, cardDescription),
    onLeaveBack: () => animateContentOut(cardTitleChars, cardDescription),
  });
 });

 setupMarqueeAnimation();
});

//image scroll reveal
 ScrollReveal({ 
    reset: true ,
    distance:'60px',
    duration:2500,
    delay:400
});
ScrollReveal().reveal('.gallery-header', { delay: 400,origin:'top' });
const buttons = document.querySelectorAll(".filter-option li");
const gbox = document.querySelectorAll(".gall-box");

buttons.forEach(btn => {
  btn.addEventListener("click", () => {
    const filter = btn.getAttribute("data-filter");

    gbox.forEach(gbox => {
      if (filter === "all") {
        gbox.style.display = "block";
      } else {
        if (gbox.classList.contains(filter)) {
          gbox.style.display = "block";
        } else {
          gbox.style.display = "none";
        }
      }
    });
  });
});

//change color while scrolling

const changeColor = () => {
  const sections = document.querySelectorAll(".sections");

  sections.forEach((section) => {
    const rect = section.getBoundingClientRect();

    if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
      document.body.style.background =
        section.getAttribute("data-colors");
    }
  });
};

window.addEventListener("scroll", changeColor);


//review section

const openBtn = document.getElementById("openReviewBtn");
const modal = document.getElementById("reviewModal");
const closeBtn = document.getElementById("closeModal");

const form = document.getElementById("reviewForm");
const track = document.getElementById("reviewTrack");
const stars = document.querySelectorAll(".stars span");

let selectedStars = 0;

//  Open Modal
openBtn.addEventListener("click", () => {
  modal.classList.add("active");
});

//  Close Modal
closeBtn.addEventListener("click", () => {
  modal.classList.remove("active");
});

// ⭐ Star Selection
stars.forEach(star => {
  star.addEventListener("click", () => {
    selectedStars = star.dataset.value;

    stars.forEach(s => s.classList.remove("active"));
    for (let i = 0; i < selectedStars; i++) {
      stars[i].classList.add("active");
    }
  });
});

//  Load Reviews from localStorage
function loadReviews() {
  fetch("php/getReviews.php")
    .then(res => res.json())
    .then(reviews => {

      let duplicated = [...reviews, ...reviews];

      track.innerHTML = duplicated.map(r => `
        <div class="review-card">

          <div class="review-avatar" style="background:${getColor(r.name)}">
            ${r.name.charAt(0).toUpperCase()}
          </div>

          <h3>${r.name}</h3>

          <div class="stars">
            ${"⭐".repeat(r.stars)}
          </div>

          <p class="review-text">
            ${r.message}
          </p>

        </div>
      `).join("");
    });
}


function getColor(name) {
  const colors = ["#c9a227", "#8a7d6b", "#c14356", "#6b8e23", "#4682b4"];
  let index = name.charCodeAt(0) % colors.length;
  return colors[index];
}

//  Submit Review
form.addEventListener("submit", (e) => {
  e.preventDefault();

  let name = document.getElementById("name").value;
  let message = document.getElementById("message").value;

  if (selectedStars === 0) {
    alert("Please select rating");
    return;
  }

  let formData = new FormData();
  formData.append("name", name);
  formData.append("stars", selectedStars);
  formData.append("message", message);

  fetch("php/review.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    data = data.trim();
    if (data === "success") {
      alert("Review submitted successfully!");
      form.reset();
      selectedStars = 0;
      stars.forEach(s => s.classList.remove("active"));

      loadReviews();
    } else {
      alert("Error submitting review");
    }
  });
});



const cform = document.querySelector(".contactForm");

cform.addEventListener("submit", async function (e) {
    e.preventDefault(); // stop default redirect

    const formData = new FormData(cform);

    const response = await fetch(cform.action, {
        method: "POST",
        body: formData
    });

    const result = await response.json();

    if (result.success) {
        cform.reset();
    } else {
        alert("Something went wrong!");
    }
});


document.addEventListener("DOMContentLoaded", function () {

  const cform = document.querySelector(".contactForm");
  const popup = document.getElementById("popup");
  const closeBttn = document.getElementById("closeModdal");

  cform.addEventListener("submit", async function (e) {
    e.preventDefault();

    const formData = new FormData(cform);

    const response = await fetch(cform.action, {
      method: "POST",
      body: formData
    });

    const result = await response.json();

    if (result.success) {
      popup.classList.add("open"); //  show popup only if success
    } else {
      alert("Something went wrong!");
    }
  });

  closeBttn.addEventListener("click", function () {
    popup.classList.remove("open");
    cform.reset(); //  clear fields
  });

});


loadReviews();