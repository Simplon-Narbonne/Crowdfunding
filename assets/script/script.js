var progress = document.getElementsByClassName('progress');
for (i=0; i< progress.length ; i++ ){
  var pourcent = progress[i].innerHTML;
  pourcentUnit = pourcent.substring(0, pourcent.length-1);
  if (pourcentUnit > 100){
    var pourcent = "100%";
  }
  progress[i].style.width = pourcent;
}
