var lugo={
  scroll:function(id){
    $("html,body").animate({
      scrollTop:$(id).offset().top-75
    },200);
  }
}