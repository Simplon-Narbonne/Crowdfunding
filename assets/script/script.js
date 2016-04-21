var skill = document.getElementsByClassName('skill');
for (i=0; i< skill.length ; i++ ){
  var pourcent = skill[i].innerHTML;
  pourcentUnit = pourcent.substring(0, pourcent.length-1);
  if (pourcentUnit > 100){
    var pourcent = "100%";
  }
  skill[i].style.transition = "width 5s ease-out 2s";
  skill[i].style.width = pourcent;
}
