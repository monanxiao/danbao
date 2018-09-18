<!--图片模态框 -->
<div class="motai" id="mo">
    <span class="close" id="close">×</span>
    <img class="motaiimg" id="moimg">
    <div id="caption"></div>
</div>
<script>
    function real(o){
        document.getElementById('mo').style.display="block";
        var url = $(o).parent().find("#src_url").val();
        var img_name = $(o).parent().find("#file_name").val();
        document.getElementById("moimg").src = url;
        document.getElementById("caption").innerHTML = img_name;
    }

    var span=document.getElementById("close");

    span.onclick=function(){
        document.getElementById('mo').style.display="none";
    }
</script>