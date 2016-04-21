var skill = document.getElementsByClassName('skill');
for (i=0; i< skill.length ; i++ ){
  var pourcent = skill[i].innerHTML;
  pourcentUnit = pourcent.substring(0, pourcent.length-1);
  if (pourcentUnit > 100){
    var pourcent = "100%";
  }
  skill[i].style.width = pourcent;
}
