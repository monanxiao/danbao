@extends('layouts.app')
@section('title','项目详情')
@section('content')

<table class="table table-striped table-hover">
	<thead>
	    <tr>
	    	<th colspan="6" style='text-align:center;'><h4>项目列表</h4></th>
	    </tr>
	    <tr>
	    	<th style='width:20%;text-align: center;'>项目名称</th>
	    	<th style='width:17%;text-align: center;'>客户</th>
	    	<th style='width:5%;text-align: center;'>客户类型</th>
	    	<th style='width:5%;text-align: center;'>项目状态</th>
	    	<th style='width:5%;text-align: center;'>主办经理</th>
	    	<th style='width:8%;text-align: center;'>创建时间</th>
	    </tr>
	</thead>
	<tbody>
		@foreach($items as $iv)
	   		<tr class="success">
	   			<td style='text-align: center;'>
	   				@switch(0)
	   				@case($iv->companys_id)
	   					<a href="{{ URL('items/phase/show',$iv->id) }}">{{ $iv->items_name }}</a>
	   				@break
	   				@case($iv->naturals_id)
					<a href="{{ URL('items/phase/show',$iv->id) }}">{{ $iv->items_name }}</a>
	   				@break
	   				@endswitch
	   			</td>	
   				@switch(0)
   				@case($iv->companys_id)
   					<td style='text-align: center;'><a href="{{ URL('natural',$iv->naturals_id) }}">{{ $iv->natural_name }}</a></td>
   					<td style='text-align: center;'>自然人</td>
   				@break
   				@case($iv->naturals_id)
   					<td style='text-align: center;'><a href="{{ URL('company',$iv->companys_id) }}">{{ $iv->company_name }}</a></td>
   					<td style='text-align: center;'>公司</td>
   				@break
   				@endswitch
   				@if($iv->items_status == '未开始')
	   				<td style='text-align: center;background-color:#ccc;'>
				@elseif($iv->items_status == '进行中')
					<td  style='text-align: center;background-color:#d9534f;'>
				@elseif($iv->items_status == '完成')
					<td style='text-align: center;background-color:#5CB85C;'>
				@endif
	   				{{ $iv->items_status }}
	   			</td>
	   			<td style='text-align: center;'>{{ $iv->users_name }}</td>
	   			<td style='text-align: center;'>{{ $iv->created_at }}</td>
	   		</tr>
   		@endforeach
   	</tbody>
</table>

@stop