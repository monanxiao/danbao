@extends('layouts.app')
@section('title','项目详情')
@section('content')
<h5>
  项目详情
</h5>
<h4 style="text-align:center;width:100%;padding-bottom:10px;border-bottom:1px dashed #ccc;" >{{ $items->items_name }}</h4>
	
  <div id="stepBar" class="ui-stepBar-wrap">
  	<div class="ui-stepBar">
  		<div class="ui-stepProcess"></div>
  	</div>
  	<div class="ui-stepInfo-wrap">
  		<table class="ui-stepLayout" border="0" cellpadding="0" cellspacing="0">
  		<tr>
  			<?php $i=0;$now=0; ?>
  			@foreach($phase as $pv)
  				<?php $i++; ?>
  			  @if( $pv->phases_status == '进行中' )
  				<?php $now=$i; ?>
  				<td class="ui-stepInfo">

  					<p class="top_text" style="color:#f00;" >{{$pv->phases_status}}</p>

  			  @elseif( $pv->phases_status == '完成' )

  				<?php $now=$i; ?>
  				<td class="ui-stepInfo">
  					<p class="top_text" style="color:#00b100;">{{$pv->phases_status}}</p>

  			  @elseif($pv->phases_status == '跳过')

  				<td class="ui-stepInfo">
  					<p class="top_text" style="color:#428bca;">{{$pv->phases_status}}</p>

  			  @else
  				<td class="ui-stepInfo">
  					<p class="top_text" style="color:#ccc;">{{$pv->phases_status}}</p>

          @endif 

  					<a class="ui-stepSequence"  data-toggle="modal" data-target="#{{$pv->phase_type}}" onclick="objbtn(this)" >{{$i}}</a>
            <input type="hidden" id='phase_id' value='{{$i}}'>

  					<p class="ui-stepName">{{ $pv->phase_name }}</p>
  				</td>
  			  
  			@endforeach
  		</tr>
  		</table>
  	</div>
  </div>

<div style='clear:both;'></div>
<div id='gb' class='custom-tabs-line tabs-line-bottom left-aligned' style='margin-top:30px;'>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active">
            <a href="#left1" role="tab" data-toggle="tab">
                全部动态
            </a>
        </li>
        <li role="presentation" >
            <a href="#left2" role="tab" data-toggle="tab">
            意见<span class="badge">0</span>
            </a>
        </li>
        <li role="presentation" >
            <a href="#left3" role="tab" data-toggle="tab">
            文档附件<span class="badge">0</span>
            </a>
        </li>
        <li role="presentation" >
            <a href="#left4" role="tab" data-toggle="tab">
            合同模板<span class="badge">0</span>
            </a>
        </li>
    </ul>
</div>
<div id='gb' class="tab-content">
    <div class="tab-pane fade in active success" id="left1">
            全部动态
    </div> 
    <div class="tab-pane fade success" id="left2">

            <table class="table table-striped table-bordered table-hover">
                <tbody>
                    <tr class="success" >
                        <td>
                            我是意见1
                        </td>
                    </tr>
                    <tr class="success">
                        <td>
                            我是意见2
         4               </td>
                    </tr>
                </tbody>
            </table>

    </div>
     <div class="tab-pane fade success" id="left3">
            @foreach($mb_words as $uv)
                      @if($uv->phase_id == 1)
                        @if(substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'doc' || substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'docx')
                          <li style='width:150px;float:left;'>
                            <a href="#" onClick="doword('{{ URL(''). '/' . $uv->site_url  }}')">
                              <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                            </a>
                            <br>
                            <span>{{ $uv->mb_name }}</span>
                            <br>
                              <a href="{{ '/' .$uv->site_url }}" download="{{ $uv->mb_name }}" >下载</a>
                          </li>
                        @endif
                      @endif
            @endforeach
    </div>
    <div class="tab-pane fade success" id="left4">
              @foreach($mb_words as $uv)
                          @if(substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'doc' || substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'docx')
                            <li style='width:150px;float:left;'>
                              <a href="#" onClick="doword('{{ URL(''). '/' . $uv->site_url  }}')">
                                <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                              </a>
                              <br>
                              <span>{{ $uv->mb_name }}</span>
                              <br>
                                <a href="{{ '/' .$uv->site_url }}" download="{{ $uv->mb_name }}" >下载</a>
                            </li>
                        @endif
              @endforeach
    </div>
</div>
{{-- 初审材料 --}}
@include('itemsModal.phase_cscl')
  
@if($phasestatus != 0)
{{-- 保前尽职调查 --}}
@include('itemsModal.phase_bqjzdcAdd') 
{{--  风险审批审查 --}} 
@include('itemsModal.phase_fxscspAdd')
{{-- 担保函 --}}
@include('itemsModal.phase_dbhAdd')
{{-- 项目变更及审批 --}}
@include('itemsModal.phase_xmbgjsppAdd')
{{-- 合同起草审查及签订公证 --}}
@include('itemsModal.phase_htqcscqdgzAdd')
{{-- 反担保落实 --}}
@include('itemsModal.phase_fdblsdAdd')
{{-- 放款程序 --}}
@include('itemsModal.phase_fkcxAdd')

@endif

  
<script type="text/javascript" >


    $(function(){
                  stepBar.init("stepBar", {
                    step : <?=$now?>,
                    change : false,
                    animation : true
                  });
                });
    // 日期选择器设置
    $('#sandbox-container').datepicker({ 
                                          language: "zh-CN",
                                          orientation: "left auto",
                                          autoclose: true,
                                          startview: 2,
                                          todayHighlight: true
                                        });
  	function objbtn(o){
  		// 获取阶段名称
  		var title = $(o).parent().find("#pname").val();

  		var phase_title = new Date().toLocaleDateString(); 
  		// 写入阶段名称到span
  		$("span[name='phase_title']").each(function() { $(this).text(title); }); 
       
        //判断是否完成上一阶段
      var status = {{ $phasestatus }};

      var phase_id = $(o).parent().find("#phase_id").val()

      if(phase_id != phase_id && status != 0){ 

          alert('请完成上一阶段');
      }

  	}

    //保存数据可以修改
     function save(o){
      var status = 2;
      // $(o).parent().find("input#table_status").val(status);
       $("input#table_status").val(status);
     }
     //完成进入下一阶段
     function ok(o){
      var status = 1;
      $("input#table_status").val(status);
      // $(o).parent().find("input#table_status").val(status);
     } 

// 选择阶段传参阶段标识
    //担保函
    function danbaohan(o){
                    var status = 'dbh';
                     $("input#table_status").val(status);
                   }
     //项目审查及审批
     function xmbgjsp(o){
       var status = 'xmbgjsp';
       $("input#table_status").val(status);
     }

     //合同起草
     function htqc(o){
       var status = 'htqcspjqd';
       $("input#table_status").val(status);
     }
//选择阶段传参标识结束


    // 下一步
    function next(o){
          //1
          $("li#lxcss").removeClass("active");
          //2
          $("li#dbcss").addClass("active");
          
    } 
    // 上一步
    function last(o){

          //2
          $("li#dbcss").removeClass("active");
          //1
          $("li#lxcss").addClass("active");
     }

     // 默认下拉框
      window.onload=function(){
                              //所属园区
                              var optElements = document.getElementById("selId").children;

                              var optValue = document.getElementById("vaId").value;

                              for(var opt in optElements){
                                  if(optElements[opt].value == optValue){
                                      optElements[opt].selected="selected";
                                  }
                              }

                              //货币分类
                              var optElements = document.getElementById("selhbId").children;
                              
                              var optValue = $("#hbIdval").val();
                              

                              for(var opt in optElements){
                                  if(optElements[opt].value == optValue){
                                      optElements[opt].selected="selected";
                                  }
                              }

                              //行业
                              var optElements = document.getElementById("selhyId").children;
                              
                              var optValue = $("#hyIdval").val();
                              

                              for(var opt in optElements){
                                  if(optElements[opt].value == optValue){
                                      optElements[opt].selected="selected";
                                  }
                              }
                          }

      function doword(doc){ 

         var WordApp = null;
         try{
            WordApp = new ActiveXObject("Word.Application"); 
         }catch(e){
            alert("IE的安全级别过高!请在IE的菜单栏中:工具——INTERNET选项——安全---本地Intranet——自定义级别——对没有标记为安全的activeX控件...那句改为启用或提示!");
            return;
        }
        WordApp.Application.Visible=true;
        WordApp.Documents.Add(doc,true);
    }
    

  </script>

@stop