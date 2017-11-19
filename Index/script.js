function help() {
  if (document.getElementById('help').style.width = '0px') {
    document.getElementById('help').style.width='250px';
  }
}
function help_close(){
  if (document.getElementById('help').style.width = '250px') {
    document.getElementById('help').style.width='0px';
  }
}
function motywl(){
  document.getElementById('body').style.filter = 'invert(0%)'
}
function motywd(){
  document.getElementById('body').style.filter = 'invert(100%)'
}
//Created by Mateusz Jasnowski
