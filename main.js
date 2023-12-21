let scroll =document.querySelector(".top");
window.onscroll = function(){
   if (this.scrollY>=1000){
    scroll.classlist.add("show")
    } else{
         scroll.classlist.remove("show");
            }
        };
scroll.onclick=function(){
    window.scrollTo({
        top:0,
        behavior:"smooth",
    });
}
      