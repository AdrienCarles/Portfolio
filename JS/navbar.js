window.onload = function () {
    document.getElementById("nav_logo").style.color = "white";
    document.getElementById("nav_right").style.color = "white";
}


var i = 0;
var txt = "Adrien Carles Dévelloppeur Intégrateur WEB";
var container = document.getElementById("titre");

function animate(){
    if( i < txt.length) {
        container.innerHTML += txt.charAt(i);
        i++;
        setTimeout(animate, 80)
    }
}
animate();

window.onscroll = function () {
    if (document.documentElement.scrollTop > 80){
        document.getElementById("navbar").style.background ="#f1f1f1";
        document.getElementById("navbar").style.padding ="10px 10px";
        document.getElementById("nav_logo").style.color = "black";
        document.getElementById("nav_right").style.color = "black";
    }
    else{
        document.getElementById("navbar").style.background ="transparent";
        document.getElementById("navbar").style.padding ="30px 10px";
        document.getElementById("nav_logo").style.color = "white";
        document.getElementById("nav_right").style.color = "white";
    }
}
