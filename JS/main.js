
/*au chargement de la page*/ 
function logo_noir(){
  var img =  document.getElementById("nav_logo");
  img.src = "./IMG/Adrien-black-SMALL.PNG";
} 
function logo_blanc(){
  var img =  document.getElementById("nav_logo");
  img.src = "./IMG/Adrien-white-SMALL.PNG";
}
function header_scrolled(){
  document.getElementById("navbar").style.background ="#f1f1f1";
  document.getElementById("nav_right").style.color = "black";
  document.getElementById("navbar").style.padding ="20px";
  document.getElementById("nav_right").style.background = "#f1f1f1";
  document.getElementById('nav-icone').classList.add('back_noir');
  document.getElementById('nav-icone2').classList.add('back_noir'); 
  document.getElementById('nav-icone3').classList.add('back_noir'); 
  document.getElementById('nav-icone').classList.remove('back_blanc');
  document.getElementById('nav-icone2').classList.remove('back_blanc'); 
  document.getElementById('nav-icone3').classList.remove('back_blanc'); 
      document.getElementById("nav_right").style.top = "160px";
}
function header_unscroll(){
  document.getElementById("navbar").style.background ="transparent";
  document.getElementById("nav_right").style.color = "white";
  document.getElementById("navbar").style.padding ="30px 20px"
  document.getElementById("nav_right").style.background = "transparent";
  document.getElementById('nav-icone').classList.add('back_blanc');
  document.getElementById('nav-icone2').classList.add('back_blanc'); 
  document.getElementById('nav-icone3').classList.add('back_blanc'); 
  document.getElementById('nav-icone').classList.remove('back_noir');
  document.getElementById('nav-icone2').classList.remove('back_noir'); 
  document.getElementById('nav-icone3').classList.remove('back_noir'); 
      document.getElementById("nav_right").style.top = "180px";
}
/*Au chargement de la page */
window.onload = function () {
  if (document.documentElement.scrollTop > 150){
    header_scrolled()
    logo_noir()
  }else{
    header_unscroll()
    logo_blanc()
  }
}

/*animation du titre*/
if (document.getElementById('accueil')){
  var txt = "Solutions logicielles et applications métiers";
  var i = 0;
  var titre = document.getElementById("titre");

  function animate(){
    if( i < txt.length) {
      titre.innerHTML += txt.charAt(i);
      i++;
      setTimeout(animate, 80)
    }
  }
  animate();
}

/*defilement des liens*/
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      }); 
  });
});

/*animation du menu au scroll */
function chang_logo(){
  if(document.documentElement.scrollTop > 150){
    logo_noir()
  }else{
    logo_blanc()
  }
}
window.onscroll = function () {
    if (document.documentElement.scrollTop > 150){
      header_scrolled()
      chang_logo()
    }
    else{
      header_unscroll()
      chang_logo()  
    }
}

/*Burger et menu */
var nav = document.getElementById("nav-toggle");
nav.onclick = navtanslation;
function navtanslation()
{
    document.getElementById('nav_right').classList.toggle('is-open');
    document.getElementById('nav_right').classList.toggle('is-closed');
}



/*Animation au scroll*/	
const scrollElements = document.querySelectorAll(".js-scroll");

const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const displayScrollElement = (element) => {
    element.classList.add("scrolled");
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.25)) {
      displayScrollElement(el);
    }
  })
}
window.addEventListener("scroll", () => { 
  handleScrollAnimation();
});


