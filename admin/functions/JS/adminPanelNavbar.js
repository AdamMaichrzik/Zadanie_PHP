var opened = false;

function openNav(){
  if(opened == false){
    opened = true;
    openNavv();
  } if(opened == true){
    opened = false;
    closeNav();
  }
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function openNavv() {
  document.getElementById("mySidebar").style.width = "189px";
  document.getElementById("main").style.marginLeft = "189px";
}