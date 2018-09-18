
@extends('layouts.app')
@section('title','公司详情户列表')
@section('content')

<table class="table table-striped table-bordered table-hover">
    <thead>
    	<tr>
    		<th colspan="5" style='text-align:center;'>
    			<h4>{{ $company->company_name }}</h4>
    		</th>
    	</tr>
    </thead>
    <tbody>
        <tr>
            <td>法人:&nbsp;&nbsp;{{ $company->legal_person }}</td>
            <td>注册资本:&nbsp;&nbsp;{{ $company->registered_capital }}</td>
            <td>统一社会信用代码:&nbsp;&nbsp;{{ $company->credit_code }}</td>
            <td>登记机关:&nbsp;&nbsp;{{ $company->check_in }}</td>
            <td>成立时间:&nbsp;&nbsp;{{ $company->establish_time}}</td>
        </tr>
        <tr>
         <td>注册地址:&nbsp;&nbsp;{{ $company->registered_address }}</td>
         <td>公司状态:&nbsp;&nbsp;{{ $company->state }}</td>
         <td>公司类型:&nbsp;&nbsp;{{ $company->company_type }}</td>
         <td>经营地址:&nbsp;&nbsp;{{ $company->business_address }}</td>
         <td>企业规模:&nbsp;&nbsp;{{ $company->scale }}</td>
        </tr>
        <tr>
            <td>客户来源:&nbsp;&nbsp;{{ $company->source }}</td>
            <td>客户级别:&nbsp;&nbsp;
                @switch($company->rank)
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
            <td>公司座机:&nbsp;&nbsp;{{ $company->company_machin }}</td>
            <td>开户行:&nbsp;&nbsp;{{ $company->open_account }}</td>
            <td>开户账号:&nbsp;&nbsp;{{ $company->open_num }}</td>
        </tr>
        <tr>
            <td colspan="2" >经营情况:&nbsp;&nbsp;{{ $company->state_operation }}</td>
            <td colspan="3" >经营范围:&nbsp;&nbsp;{{ $company->frame }}</td>
        </tr>
    </tbody>
</table>

<div class="row" style='margin-left:0px;'>
    <form action="#" class="form-inline search-form" >
        <button type='button' class="btn btn-info btn-sm" data-toggle="modal" data-target="#naturalAdd" >
            <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;担保人
        </button>        
        <button type='button' class="btn btn-info btn-sm" data-toggle="modal" data-target="#naturalAdd" >
            <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;固定资产
        </button> 
        <button type='button' class="btn btn-info btn-sm" data-toggle="modal" data-target="#naturalAdd" >
            <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;证件
        </button>
        <button type='button' class="btn btn-info btn-sm" data-toggle="modal" data-target="#naturalAdd" >
            <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;其它
        </button>   
    </form>
</div>

<ul class="nav nav-tabs" role="tablist" style='margin-bottom: 15px;margin-top:15px;'>
          <li role="presentation" class="active"><a href="#dbr" role="tab" data-toggle="tab">担保人</a></li>
          <li role="presentation"><a href="#dbr" role="tab" data-toggle="tab">固定资产</a></li>
          <li role="presentation"><a href="#zj" role="tab" data-toggle="tab">证件</a></li>
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
