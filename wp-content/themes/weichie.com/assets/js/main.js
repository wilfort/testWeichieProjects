/*!
 * You're free to use javascript to spice up your theme.
 * How you bundle it (gulp, webpack, vite, ...) is up to you.
 */
let toggles = document.getElementsByClassName('toggleB');
let contentDiv = document.getElementsByClassName('contentB');
let iconsA = document.getElementsByClassName('iconA');
let iconsM = document.getElementsByClassName('iconM');

for(let i = 0; i < toggles.length; i++){
    toggles[i].addEventListener('click',() => {
        if(parseInt(contentDiv[i].style.height)
        != contentDiv[i].scrollHeight){
            contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
            toggles[i].style.color="#000000";
            iconsA[i].style.display = "none";
            iconsM[i].style.display = "block";
        }
        else{
            contentDiv[i].style.height ="0px";
            toggles[i].style.color="#000000";
            iconsM[i].style.display = "none";
            iconsA[i].style.display = "block";
        }
        for (let j=0; j<contentDiv.length; j++){
            if(j!==i){
                contentDiv[j].style.height ="0px";
                toggles[j].style.color="#000000";
                iconsM[j].style.display = "none";
                iconsA[j].style.display = "block";
            }
        }
    });
}

let navLi = document.getElementsByClassName('navLi');
let navS = document.getElementsByClassName('section');
// for(let nL = 0; nL < navLi.length; nL++){

//     navLi[nL].addEventListener('click',()=>{
//         for(let i=0; i < navLi.length; i++){
//             if(i==nL){navLi[nL].classList.add("active");}else{navLi[i].classList.remove("active");}        
//         }   
//       });
//     for(let nS=0; nS < navS.length; nS++){
//         console.log(navS[nS])
//         console.log("navS[nS]")
//     }
// };
let sections = document.querySelectorAll("div[id]");
console.log(sections)
window.addEventListener("scroll", navHighlighter);
document.querySelector("ul li a[href*='#About']").classList.add("active");
function navHighlighter() {
  
    // Get current scroll position
    let scrollY = window.pageYOffset;
    // Now we loop through sections to get height, top and ID values for each
    sections.forEach(current => {
      let sectionHeight = current.offsetHeight;
      let sectionTop = current.offsetTop - 50;
      let sectionId = current.getAttribute("id");
      if (
        scrollY > sectionTop &&
        scrollY <= sectionTop + sectionHeight
        ){
            document.querySelector("ul li a[href*=" + sectionId + "]").classList.add("active");
        } else {
        document.querySelector("ul li a[href*=" + sectionId + "]").classList.remove("active");
        }
    });
  }
// navS[3].waypoint(function() {
//     for(let i=0; i < navLi.length; i++){
//         if(i==3){navLi[nL].classList.add("active");}else{navLi[i].classList.remove("active");}        
//     } 
// }, { offset: 101 });
// $('#Information').waypoint(function() {
//     navLi.children().classList.remove("active");
//   navLi[3].classList.add("active");
// }, { offset: 101 });
// $('#Information').waypoint(function() {
//     navLi.children().classList.remove("active");
//   navLi[3].classList.add("active");
// }, { offset: 101 });
// $('#Information').waypoint(function() {
//     navLi.children().classList.remove("active");
//   navLi[3].classList.add("active");
// }, { offset: 101 });
/*
Smooth scrolling
*/
// $("#toTop").click(function() {
//      $('html, body').animate({
//          scrollTop:        $("#About").offset().top-65
//      }, 1000);
//   return false;
//  });
/*$('#Speakers').waypoint(function(event, direction) {

  $(".nav-container ul li").children().removeClass("active");
  $("#s2").addClass("active");
  
  if (direction === 'down') {
    offset = 90;
  } 
  else {
    offset = 20;
  }
});*/


/*
Using jquery waypoints to change active on scroll
*/
// $('#Speakers').waypoint(function() {

//     navLi.children().removeClass("active");
//     navLi[1].addClass("active");
// }, { offset: 101 });


// $('#Agenda').waypoint(function() {
//     navLi.children().removeClass("active");
//   navLi[2].addClass("active");
// }, { offset: 101 });

// $('#Information').waypoint(function() {
//     navLi.children().removeClass("active");
//   navLi[3].addClass("active");
// }, { offset: 101 });

// $('#About').waypoint(function() {
//     navLi.children().removeClass("active");
//   navLi[0].addClass("active");
// }, { offset: 0 });

// $('#Speakers').waypoint(function() {
//   $(".to-top").addClass("visible");
// }, { offset: 100 });

// $('#About').waypoint(function(event, direction) {
//   $(".to-top").removeClass("visible");
// }, { offset: 30 });