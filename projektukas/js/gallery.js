mfunction initMyModal(firstImage, lastImage){

 var index = firstImage;

 $(".gallery-image").click(function(){
   index = firstImage;
   createImage(index);
   $(".mymodal").css({"display":"flex"});
 });

 $(".mymodal").click(function(e){
   // sitas if naudojamas tam, kad paspaudus ant mygtuko neuzdarytu modalo, nes ant bet kurio vaikinio elemento modale paspaudus uzdaro modala priesingu atveju... sitas if nusako jei nera paspaustas konkretus elementas toliau nebevykdom
   if (e.target !== this){
     return;
   }

   $(this).fadeOut();
 })

 $("#pirmyn").click(function(){
   index++;
   if(index <= lastImage){
     createImage(index);
   }
   else{
     index--;
   }
 })

 $("#atgal").click(function(){
   index--;
   if(index > 0){
     createImage(index);
   }
   else{
     index++;
   }
 })
}

function createImage(i){
 $(".imagebox").empty();
 var naujasPav = $("<img />");
 naujasPav.prop("src", "foto/"+i+".jpg");
 naujasPav.addClass("myimg");
 $(".imagebox").append(naujasPav);
}
