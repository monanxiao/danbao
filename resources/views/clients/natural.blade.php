@extends('layouts.app')
@section('title','自然人客户列表')
@section('content')

<div class="row">
    <form action="#" class="form-inline search-form" >
        &nbsp;&nbsp;&nbsp;<input type="text" class="form-control input-sm"  name="client" placeholder="搜索自然人">
        <button class="btn btn-primary btn-sm" >搜索</button>
        <button type='button' class="btn btn-info btn-sm" data-toggle="modal" data-target="#naturalAdd" >
        <i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;自然人
    </button> 
    </form>
</div
    <div class="table-responsive">
       <table class="table" style='margin-top:15px;'>
                    <thead>
                        <tr style="white-space: nowrap;">
                            <th style='width:50px;text-align:center;'>#id</th>
                            <th style='width:110px;'>客户名称</th>
                            <th style='width:105px;text-align:center;'>手机</th>
                            <th style='width:120px;text-align:center;'>婚姻状况</th>
                            <th style='width:80px;text-align:center;'>学历</th>
                            <th style='width:120px;text-align:center;'>客户来源</th>
                            <th style='width:120px;text-align:center;'>公积金(元)</th>
                            <th style='width:80px;text-align:center;'>社保(年)</th> 
                            <th style='width:100px;text-align:center;'>已贷款(元)</th>
                            <th style='width:100px;text-align:center;'>已违约(元)</th>
                            <th style='width:100px;text-align:center;'>本人年收入(元)</th>
                            <th style='text-align:center;'>操作</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr class="active" style="white-space: nowrap;">
                        @foreach($natural as $cv)
                        <td style='text-align:center;'>#{{ $cv->id }}</td> 
                        <td style='text-align:center;'>{{ $cv->natural_name }}</td>
                        <td style='text-align:center;'>{{ $cv->phone }}</td>
                        <td style='text-align:center;'>{{ $cv->marriage }}</td>
                        <td style='text-align:center;'>{{ $cv->education }}</td>
                        <td style='text-align:center;'>{{ $cv->source }}</td>                        
                        <td style='text-align:center;'>{{ $cv->accumulation_fund }}</td>
                        <td style='text-align:center;'>{{ $cv->social_security }}</td>
                        <td style='text-align:center;'>{{ $cv->borrowed }}</td>
                        <td style='text-align:center;'>{{ $cv->have_default }}</td>
                        <td style='text-align:center;'>{{ $cv->annual_income }}</td>
                        <td style='text-align:center;white-space: nowrap;'>
                            <a href="{{ URL('natural/items',$cv->id) }}"  class="btn btn-success btn-sm">
                            项目
                            </a>&nbsp;
                            <a href="{{ URL('natural',$cv->id) }}" class="btn btn-success btn-sm">
                            详情
                            </a> 
                            <button style='margin-left:5px;' class="btn btn-primary btn-sm" data-toggle="modal" data-target="#clientedit" onclick="edit(this)">
                                        编辑
                            </button>

                                   {{--  <input type="hidden" id='u_id' value='{{ $cv->id }}' name='id' />
                                    <input type="hidden" id='u_name' value='{{ $cv->nickname }}' name='u_name' />
                                    <input type="hidden" id='u_cross' value='{{ $cv->cross_type }}' name="cross" />
                                    <input type="hidden" id='u_capital' value='{{ $cv->capital }}' name="capital" />
                                    <input type="hidden" id='u_legal' value='{{ $cv->legal }}' name="legal" />
                                    <input type="hidden" id='u_time' value='{{ $cv->time  }}' name="time" />
                                    <input type="hidden" id='u_commit' value='{{ $cv->commit  }}' name="commit" />
                                    <input type="hidden" id='u_abode' value='{{ $cv->abode  }}' name="commit" />
                                    <input type="hidden" id='u_garden' value='{{ $cv->garden  }}' name="commit" />
                                    <input type="hidden" id='u_guild' value='{{ $cv->guild  }}' name="commit" /> --}}
                        </td>
                        @endforeach                       
                    </tr>
                </tbody>
            </table>
    </div>

@include('modal.naturalAdd')

<script type="text/javascript">

     function edit(o){
        
        $("#n_name").text($(o).parent().find("#u_name").val());
        $("#c_id").val($(o).parent().find("#u_id").val());
        $("#nickname").val($(o).parent().find("#u_name").val());
        $("#cross_type").val($(o).parent().find("#u_cross").val());
        $("#capital").val($(o).parent().find("#u_capital").val());
        $("#legal").val($(o).parent().find("#u_legal").val());
        $("#time").val($(o).parent().find("#u_time").val());
        $("#commit").val($(o).parent().find("#u_commit").val());
        $("#abode").val($(o).parent().find("#u_abode").val());
        $("#garden").val($(o).parent().find("#u_garden").val());
        $("#guild").val($(o).parent().find("#u_guild").val());
       
    }
</script>

@endsection