
@extends('layouts.app')
@section('title','公司详情户列表')
@section('content')

<table class="table table-striped table-bordered table-hover">
    <thead>
    	<tr>
    		<th colspan="5" style='text-align:center;'>
    			<h4>{{ $natural->natural_name }}</h4>
    		</th>
    	</tr>
    </thead>
    <tbody>
        <tr>
            <td>婚姻状况:&nbsp;&nbsp;{{ $natural->marriage }}</td>
            <td>手机:&nbsp;&nbsp;{{ $natural->phone }}</td>
            <td>座机:&nbsp;&nbsp;{{ $natural->plane }}</td>
            <td>住宅地址:&nbsp;&nbsp;{{ $natural->address }}</td>
            <td>本人年收入:&nbsp;&nbsp;{{ $natural->annual_income}}</td>
        </tr>
        <tr>
         <td>公积金:&nbsp;&nbsp;{{ $natural->accumulation_fund }}元</td>
         <td>社保年限:&nbsp;&nbsp;{{ $natural->social_security }}年</td>
         <td>学历:&nbsp;&nbsp;{{ $natural->education }}</td>
         <td>已贷款:&nbsp;&nbsp;{{ $natural->borrowed }}</td>
         <td>已违约:&nbsp;&nbsp;{{ $natural->have_default }}</td>
        </tr>
        <tr>
          
            <td>单位名称:&nbsp;&nbsp;{{ $natural->work_name }}</td>
            <td>单位性质:&nbsp;&nbsp;{{ $natural->natural_unit }}</td>
            <td>所属行业:&nbsp;&nbsp;{{ $natural->trade }}</td>
            <td>单位地址:&nbsp;&nbsp;{{ $natural->work_address }}</td>
            <td>单位座机:&nbsp;&nbsp;{{ $natural->work_plane }}</td>
        </tr>
        <tr>
            <td>单位地址:&nbsp;&nbsp;{{ $natural->work_address }}</td>
            <td>单位邮编:&nbsp;&nbsp;{{ $natural->postcode }}</td>
            <td>客户来源:&nbsp;&nbsp;{{ $natural->source }}</td>
                <td>客户级别:&nbsp;&nbsp;
                    @switch($natural->rank)
                        @case(1)
                        一级客户
                        @break
                        @case(2)
                        二级客户
                        @break
                        @case(3)
                        三级客户
                        @break
                        @default
                        普通客户
                    @endswitch
            </td> 
            <td></td>             
        </tr>
    </tbody>
</table>

<div class="row" style='margin-left:0px;'>
    <form action="#" class="form-inline search-form" >
        <button type='button' class="btn btn-info btn-sm" data-toggle="modal" data-target="#naturalAdd" >
            <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;担保人
        </button>
        <button type='button' class="btn btn-info btn-sm" data-toggle="modal" data-target="#naturalAdd" >
            <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;证件
        </button>
        <button type='button' class="btn btn-info btn-sm" data-toggle="modal" data-target="#naturalAdd" >
            <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;固定资产
        </button>
        <button type='button' class="btn btn-info btn-sm" data-toggle="modal" data-target="#naturalAdd" >
            <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;其它
        </button>   
    </form>
</div>

<ul class="nav nav-tabs" role="tablist" style='margin-bottom: 15px;margin-top: 15px;'>
          <li role="presentation" class="active"><a href="#dbr" role="tab" data-toggle="tab">担保人</a></li>
          <li role="presentation"><a href="#zj" role="tab" data-toggle="tab">证件</a></li>
          <li role="presentation"><a href="#zj" role="tab" data-toggle="tab">固定资产</a></li>
          <li role="presentation"><a href="#qt" role="tab" data-toggle="tab">其他</a></li>
        </ul>
         
        <!-- 面板区 -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="dbr">
                  <div class="form-group">
                          担保人
                  </div>
                  <hr>
            </div>
            <div role="tabpanel" class="tab-pane" id="zj">
                <div class="form-group">
                    <table class="table table-striped table-hover">
                            @foreach($accessory as $av)
                                <tr class="btn-default btn-lg active">
                                    <td>
                                        #{{ $av->id }}
                                     </td>
                                     <td>
                                         {{ $av->file_name }}
                                     </td>
                                     <td>
                                        预览:&nbsp;&nbsp;<i class="fa fa-search" aria-hidden="true" onclick="real(this)" ></i>
                                            &nbsp;&nbsp;<a href='{{ url("") }}{{ $av->site_url }}'>查看原图</a>
                                            <input type="hidden" id='src_url' value='{{ url("") }}{{ $av->site_url }}'>
                                            <input type="hidden" id='file_name' value='{{ $av->file_name }}'>
                                     </td>
                                     <td>
                                         {{ $av->file_belong }}
                                     </td>
                                     <td>
                                         上传人:张三
                                         {{-- {{ $av->users_id }} --}}
                                     </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
                  <hr>
            </div>
            <div role="tabpanel" class="tab-pane" id="qt">
                  <div class="form-group">
                        其他
                  </div>
                  <hr>
            </div>
        </div>
@include('modal.imagmotai')
@stop
