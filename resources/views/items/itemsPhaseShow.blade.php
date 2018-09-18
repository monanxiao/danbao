@extends('layouts.app')
@section('title','项目详情')
@section('content')
<h5>
  项目详情
</h5>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
            	<th colspan="6" style='text-align:center;'><h4>{{ $items->items_name }}</h4></th>
            </tr>
{{--             <tr>
            	<th>客户</th>
            	<th style='width:150px;text-align:center;'>金额</th>
            	<th style='width:130px;text-align:center;'>开始</th>
            	<th style='width:130px;text-align:center;'>截止</th>
            	<th style='width:60px;text-align:center;'>期限</th>
            	<th style='width:90px;text-align:center;'>剩余</th>
            </tr> --}}
        </thead>
       	{{-- <tbody>
       		<tr>
       			<td>{{ $item->nickname }}</td>
       			<td>{{ $item->redit_money }}</td>
       			<td style='text-align:center;'>
                    @if($item->start_date != 0)
                    {{ date('Y-m-d',$item->start_date) }}
                    @else
                    未设置
                    @endif
                </td>
       			<td style='text-align:center;'>
                    @if($item->stop_date != 0)
                    {{ date('Y-m-d',$item->stop_date) }}
                    @else
                    未设置
                    @endif
                </td>
       			 @if($item->stop_date != 0 && $item->start_date != 0)
                        <td style='text-align:center;'>{{ floor(($item->stop_date - $item->start_date)/(60*60*24)) }}天</td>
                    @else
                        <td style='text-align:center;'>未设置</td>
                    @endif
                    @if($item->stop_date != 0 && $item->start_date != 0)
                        @if($item->stop_date - time() > 0)
                       <td style='text-align:center;'> {{ floor(($item->stop_date - time())/(60*60*24) ) }}天 </td>
                       @else
                       <td style='text-align:center;'> 已超时{{ floor(($item->stop_date - time())/(60*60*24) ) }}天 </td>
                       @endif
                    @else
                        <td style='text-align:center;'>无</td>
                    @endif
       		</tr>
       	</tbody> --}}
    </table>
<ul class="list-inline">
    @foreach($phase as $pv)
    <li style='float:left;margin-left:10px;'> 
        <button type="button" id='title_1' class="btn btn-success btn-sm" data-toggle="modal" data-target="#{{ $pv->phase_type }}" onclick="objbtn(this)">
            {{ $pv->phase_name }}
        </button>
        <i class="fa fa-arrow-circle-right" aria-hidden="true" style='margin-left:15px;'></i>
        <input type="hidden" id='pname' value='{{ $pv->phase_name }}' />
    </li>
    @endforeach
</ul>

<div style='clear:both;'></div>
<div id='gb' class='custom-tabs-line tabs-line-bottom left-aligned' style='margin-top:30px;'>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active">
            <a href="#tab-bottom-left1" role="tab" data-toggle="tab">
                全部动态
            </a>
        </li>
        <li role="presentation" >
            <a href="#tab-bottom-left2" role="tab" data-toggle="tab">
            意见<span class="badge">0</span>
            </a>
        </li>
        <li role="presentation" >
            <a href="#tab-bottom-left3" role="tab" data-toggle="tab">
            归档<span class="badge">0</span>
            </a>
        </li>
    </ul>
</div>
<div class="tab-content">
    <div class="tab-pane fade in active success" id="tab-bottom-left1">
        <div class="table-responsive" style='margin-top:5px;'>
            <table class="table table-striped table-bordered table-hover">
                <tbody>
                </tbody>
            </table>
        </div>
    </div> 
    <div class="tab-pane fade success" id="tab-bottom-left2">
        <div class="table-responsive" style='margin-top:5px;'>
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
    </div>
</div>
{{-- 初审材料 --}}
@include('itemsModal.phase_cscl')
  
@if($phasestatus != 0)
{{-- 保前尽职调查 --}}
@include('itemsModal.phase_bqjzdcAdd') 
{{--  风险审批审查 --}} 
@include('itemsModal.phase_fxscspAdd')
{{-- 项目变更及审批 --}}
@include('itemsModal.phase_fdblsdAdd')
{{-- 合同起草审查及签订公证 --}}
@include('itemsModal.phase_fkcxAdd')
{{-- 反担保落实 --}}
@include('itemsModal.phase_htqcscqdgzAdd')
{{-- 放款程序 --}}
@include('itemsModal.phase_xmbgjsppAdd')
@endif
 
  
<script>
    // 日期选择器设置
    $('#sandbox-container').datepicker({ 
                                          language: "zh-CN",
                                          orientation: "top auto",
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
</script>

@stop