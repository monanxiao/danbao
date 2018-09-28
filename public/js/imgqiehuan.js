/*
* @Author: Gao Yongjian
* @Date:   2018-09-26 16:01:08
* @Last Modified by:   Mo Nanxiao
* @Last Modified time: 2018-09-26 16:09:19
*/
var $spic=$("#spic");
var $spic1=$("#spic1");
var $spic2=$("#spic2");
var $spic3=$("#spic3");
var $spic4=$("#spic4");
var $spic5=$("#spic5");
var $spic6=$("#spic6");
var $spic7=$("#spic7");
var $mask=$("#mask");
var $bigimg=$(".bigimg");
var $bpic=$("#bpic");
$(".items img").on("mouseover",function(){
 $spic.attr("src",$(this).attr("src"));//鼠标滑过切换
 $bpic.attr("src",$(this).attr("src"));
});
$(".items1 img").on("mouseover",function(){
 $spic1.attr("src",$(this).attr("src"));//鼠标滑过切换
 $bpic.attr("src",$(this).attr("src"));
});
$(".items2 img").on("mouseover",function(){
 $spic2.attr("src",$(this).attr("src"));//鼠标滑过切换
 $bpic.attr("src",$(this).attr("src"));
});
$(".items3 img").on("mouseover",function(){
 $spic3.attr("src",$(this).attr("src"));//鼠标滑过切换
 $bpic.attr("src",$(this).attr("src"));
});
$(".items4 img").on("mouseover",function(){
 $spic4.attr("src",$(this).attr("src"));//鼠标滑过切换
 $bpic.attr("src",$(this).attr("src"));
});
$(".items5 img").on("mouseover",function(){
 $spic5.attr("src",$(this).attr("src"));//鼠标滑过切换
 $bpic.attr("src",$(this).attr("src"));
});
$(".items6 img").on("mouseover",function(){
 $spic6.attr("src",$(this).attr("src"));//鼠标滑过切换
 $bpic.attr("src",$(this).attr("src"));
});
$(".items7 img").on("mouseover",function(){
 $spic7.attr("src",$(this).attr("src"));//鼠标滑过切换
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