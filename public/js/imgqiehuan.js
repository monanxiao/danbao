/*
* @Author: Gao Yongjian
* @Date:   2018-09-26 16:01:08
* @Last Modified by:   Mo Nanxiao
* @Last Modified time: 2018-09-26 16:09:19
*/
var $spic=$("#spic");
var $mask=$("#mask");
var $bigimg=$(".bigimg");
var $bpic=$("#bpic");
$(".items img").on("mouseover",function(){
  
 $spic.attr("src",$(this).attr("src"));//鼠标滑过切换
 $bpic.attr("src",$(this).attr("src"));
 
});
 
var l=$bigimg.eq(0).offset().left;
var t=$bigimg.eq(0).offset().top;
var width1=$mask.outerWidth()/2;
var height1=$mask.outerHeight()/2;
 
var maxl=$bigimg.width()-$mask.outerWidth();
var maxt=$bigimg.height()-$mask.outerHeight();
 
var bili=$bpic.width()/$spic.width();
 
$bigimg.mouseover(function(e){
 var maskl=e.clientX-l-width1,maskt=e.clientY-t-height1;
 if(maskl<0) maskl=0;
 if(maskt<0) maskt=0;
 if(maskl>maxl)maskl=maxl;
 if(maskt>maxt)maskt=maxt;
 
 $mask.css({"left":maskl,"top":maskt});
 
 $(".zoom").show();
 
 $bpic.css({"margin-left":-maskl*bili,"margin-top":-maskt*bili});
});
 
 
// var marginLeft=0
// $(".next").click(function(){
 
//  marginLeft=marginLeft-63.5;
//  if(marginLeft<-254) marginLeft=-254;
 
//  $(".items ul").css({"margin-left":marginLeft})
// })
// $(".prev").click(function(){
 
//  marginLeft=marginLeft+63;
//  if(marginLeft>0) marginLeft=0;
 
//  $(".items ul").css({"margin-left":marginLeft})
// });