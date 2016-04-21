var skill = document.getElementsByClassName('skill');
for (i=0; i< skill.length ; i++ ){
  var pourcent = skill[i].innerHTML;
  skill[i].style.transition = "width 5s ease-out 2s";
  //skill[i].style.width = "0%";
  skill[i].style.width = pourcent;
}
