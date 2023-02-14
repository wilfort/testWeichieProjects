/*!
 * You're free to use javascript to spice up your theme.
 * How you bundle it (gulp, webpack, vite, ...) is up to you.
 */


/******************************* 
 * FAQ Accordeon functionality *
 *******************************/
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

/*****************************************************
 * Active state on link in main-navigation on scroll *
 *****************************************************/
let sections = document.querySelectorAll("div[id]");
window.addEventListener("scroll", navHighlighter);
document.querySelector("ul li a[href*='#About']").classList.add("active");
function navHighlighter() {
  
    let scrollY = window.pageYOffset;
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