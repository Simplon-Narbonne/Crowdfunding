$(document).ready(function(){
  $('.description').hide();
  $('.images img').show();
});

function description_hover(){
  $('.images img').hover(function(){
    console.log("hover image OK");
    $('.images img').hide("slow");
    console.log("hide img OK");
    var strDescription = $('.description').html("<div class='description'></div>");
    strDescription.show();
    console.log("show description OK");
  });
}
