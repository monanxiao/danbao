@extends('layouts.app')
@section('title','自然人项目列表')
@section('content')
<h3>自然人:&nbsp;&nbsp;{{ $natural->natural_name }}</h3>
<div class="row">
    <form action="#" class="form-inline search-form" >
        &nbsp;&nbsp;&nbsp;<input type="text" class="form-control input-sm"  name="client" placeholder="搜索项目">
        <button class="btn btn-primary btn-sm" >搜索</button>
        
        <button type='button' class="btn btn-info btn-sm" data-toggle="modal" data-target="#ItemsAdd" >
        <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;项目
    </button> 
    </form>
</div>
      
    <table class="table" style='margin-top:15px;'>
            <thead>
                <tr style="white-space: nowrap;">
                    <th style='width:50px;text-align:center;'>#id</th>
                    <th style=''>项目名称</th>
                    <th style=''>项目类型</th>
                    <th style=''>创建人</th>
                    <th style=''>创建时间</th>
                    <th style=''>状态</th>
                    <th style=''>操作</th>
                </tr>
            </thead>
        <tbody>
            @foreach($item as $iv)
        	   <tr class="active">  
                    <td>
                        <a href="{{ URL('items/phase/show',$iv->id) }}">{{ $iv->id }}</a>
                    </td>
                     <td>
                        <a href="{{ URL('items/phase/show',$iv->id) }}">{{ $iv->items_name }}</a>
                    </td>   
                     <td>{{ $iv->items_type }}</td>   
                     <td>{{ $iv->users_name }}</td>   
                     <td>{{ $iv->created_at}}</td>   
                     <td>{{ $iv->items_status }}</td>   
                </tr> 
            @endforeach    
        </tbody>
    </table>
@include('modal.itemsNaturalAdd')
@stop