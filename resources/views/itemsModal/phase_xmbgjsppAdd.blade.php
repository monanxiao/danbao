 <!-- 增加阶段项目变更及审批模态框 -->
<div class="modal fade" id="xmbgjspAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span name='phase_title'>项目变更及审批</span></h4>
      </div>
@if($xmbgjsp_status == 0)
		<form action="" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name='btn_type' value='xmbgjsp'>
   <input type="hidden" id='table_status' name='table_status' value=''> 
   {{-- 主办项目经理 --}}
   <input type="hidden" name='item_name' value='{{ $fxscsp_data['item_name'] }}'>
   {{-- 贷款类型 --}}
   <input type='hidden' name='legal_person'  value='{{ $items->items_type }}' >

   @include('itemsModal.publicTables')          
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">客户名称</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">客户名称</i></div>
                              <input type="text" readonly name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}' maxlength="20">
                          </div>
                      </div>
                    
                  </td>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">担保金额</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                              <input type="text" readonly name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength="5" >
                          </div>
                      </div>
                    
                  </td>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款类型</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;贷款类型</i></div>
                              <input type="text" readonly name='legal_person' class="form-control" id="exampleInputAmount"  value='{{ $items->items_type }}' maxlength="5" >
                          </div>
                      </div>
                    
                  </td>
                  <td style='width:250px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">担保期限</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                            <input type="text" readonly name='registered_capital' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' onkeyup="if(/\D/.test(this.value)){alert('只能输入数字');this.value='';}">
                            <div class="input-group-addon">月</div>
                          </div>
                       </div>
                    
                  </td>
                </tr>
             <tr>
             	   <td colspan="2" style='width:500px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款银行</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款银行</i></div>
                              <input type="text" name='loan_bank' class="form-control" id="exampleInputAmount" placeholder="贷款银行" value='' maxlength='50'>
                          </div>
                      </div>
                    
                  </td>
                <td>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">客户经理</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;客户经理</i></div>
                          <input type="text" readonly name='business_address' class="form-control" id="exampleInputAmount"  value='{{ $fxscsp_data['item_name'] }}' maxlength='50'>
                      </div>
                  </div>
                </td>    
                <td>
                  <div class="form-group">
                           <label class="sr-only" for="exampleInputAmount">时间</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;申请时间</i></div>
                                  <input type="text" name='dc_time' id='sandbox1-container' class='form-control' data-date-format='yyyy-mm-dd' value="<?php echo date('Y-m-d');?>">
                            </div>
                        </div>
                </td>
                <script>
                  // 日期选择器设置
                  $('#sandbox1-container').datepicker({ 
                                                    language: "zh-CN",
                                                    orientation: "top auto",
                                                    autoclose: true,
                                                    startview: 2,
                                                    todayHighlight: true
                                                  });
                </script>
              </tr>
                <tr>
                  <td colspan="5" style='width:500px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">申请变更事项及理由</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;变更</i></div>
                              <input type="text" name='alteration' class="form-control" id="exampleInputAmount" placeholder="请输入申请变更事项及理由" value='' maxlength='50'>
                          </div>
                      </div>
                    
                  </td>
                </tr>
			<tr>
				<th colspan="5" style='text-align: center'>
				  <h3>附件上传</h3> 
				  <span style='color:red;font-size:12px;'>一次只能上传一个格式</span>
				</th>
			</tr>
			<tr>
			  <td colspan="5">
				<div class="file-loading">
					<input id="file-1" name='business_license[]'  multiple="multiple" type="file" class="file" data-upload-url="#">
				</div>
			  </td>
			</tr>

            </table>
          <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" onclick="save(this)">
                    保存
                    </button>
                    <span style='color:red;font-size:14px;'>(保存数据可修改)</span> 
                    <button type="submit" class="btn btn-success" onclick="ok(this)">
                    完成
                    </button>
                    <span style='color:red;font-size:14px;'>(进入下一阶段)</span>
                    <button type="submit" class="btn btn-warning">
                    提审<br>
                    </button>
                    <span style='color:red;font-size:14px;'>(领导审批)</span>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
          </div>
    </form>
@elseif($xmbgjsp_data['table_status'] == 2)
  <form action="{{ URL('items/phase/edit',$xmbgjsp_data['items_id']) }}" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name='btn_type' value='xmbgjsp'>
   <input type="hidden" id='table_status' name='table_status' value=''> 
   {{-- 主办项目经理 --}}
   <input type="hidden" name='item_name' value='{{ $fxscsp_data['item_name'] }}'>
   {{-- 贷款类型 --}}
   <input type='hidden' name='legal_person'  value='{{ $items->items_type }}' >

   @include('itemsModal.publicTables')          
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">客户名称</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">客户名称</i></div>
                              <input type="text" readonly name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}' maxlength="20">
                          </div>
                      </div>
                    
                  </td>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">担保金额</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                              <input type="text" readonly name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength="5" >
                          </div>
                      </div>
                    
                  </td>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款类型</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;贷款类型</i></div>
                              <input type="text" readonly name='legal_person' class="form-control" id="exampleInputAmount"  value='{{ $items->items_type }}' maxlength="5" >
                          </div>
                      </div>
                    
                  </td>
                  <td style='width:250px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">担保期限</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                            <input type="text" readonly name='registered_capital' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' onkeyup="if(/\D/.test(this.value)){alert('只能输入数字');this.value='';}">
                            <div class="input-group-addon">月</div>
                          </div>
                       </div>
                    
                  </td>
                </tr>
             <tr>
                 <td colspan="2" style='width:500px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款银行</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款银行</i></div>
                              <input type="text" name='loan_bank' class="form-control" id="exampleInputAmount" value='{{ $xmbgjsp_data['loan_bank'] }}' maxlength='50'>
                          </div>
                      </div>
                    
                  </td>
                <td>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">客户经理</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;客户经理</i></div>
                          <input type="text" readonly name='business_address' class="form-control" id="exampleInputAmount"  value='{{ $fxscsp_data['item_name'] }}' maxlength='50'>
                      </div>
                  </div>
                </td>    
                <td>
                  <div class="form-group">
                           <label class="sr-only" for="exampleInputAmount">时间</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;申请时间</i></div>
                                  <input type="text" name='dc_time' id='sandbox1-container' class='form-control' data-date-format='yyyy-mm-dd' value="<?php echo date('Y-m-d');?>">
                            </div>
                        </div>
                </td>
                <script>
                  // 日期选择器设置
                  $('#sandbox1-container').datepicker({ 
                                                    language: "zh-CN",
                                                    orientation: "top auto",
                                                    autoclose: true,
                                                    startview: 2,
                                                    todayHighlight: true
                                                  });
                </script>
              </tr>
                <tr>
                  <td colspan="5" style='width:500px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">申请变更事项及理由</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;变更</i></div>
                              <input type="text" name='alteration' class="form-control" id="exampleInputAmount" value='{{ $xmbgjsp_data['alteration'] }}' maxlength='50'>
                          </div>
                      </div>
                    
                  </td>
                </tr>
                 <?php $a = 0;$b=0; ?>
          @foreach($url as $uv)
            @if($uv->phases_id == 6)
            @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'jpg' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'png')
           <?php $a = 1; ?>
            @elseif(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'doc' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'docx')
           <?php $b = 1; ?>
            @endif
            @endif
          @endforeach
          @if($a==1||$b==1)
                       <tr>
                          <th colspan="5" style='text-align: center'>已上传附件列表</th>
                        </tr>
            @if($a==1)
                        <tr>
                          <td colspan="5">
                            <div class="boss">
                              <div class="bigimg">
                                <img src="" height="350" width="350" id="spic"> 
                              </div>
                              <div class="xia"> <a class="prev"><</a> <a class="next">></a>
                                <div class="items">
                                  <ul >
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 6)
                                        @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'jpg' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'png')
                                          <li>
                                            <a target="_blank"  href="{{ $uv->site_url }}">
                                              <img src="{{ $uv->site_url }}" id='imgsrc' height="56" width="56">
                                            </a>
                                            <br>
                                            <span>{{ $uv->file_name }}</span>
                                            <br> 
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->file_name }}" >下载</a>
                                          </li>
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                              <script>
                                var src = document.getElementById('imgsrc').src;
                                document.getElementById("spic").src=src;
                              </script>
                          </td>
                        </tr>
            @endif
            @if($b==1)
                        <tr>
                          <td colspan="5">
                            <div class="boss">
                              <div class="xia" style='width:1100px;'> 
                                <a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
                                <a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
                                <div class="items" style='height:120px;width:95%; '>
                                  <ul style="height:68px;top:50%;margin-top:-34px;">
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 1)
                                        @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'doc' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'docx')
                                          <li style='width:150px;float:left;'>
                                            <a href="#" onClick="doword('{{ URL('') . $uv->site_url }}')">
                                              <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <br>
                                            <span>{{ $uv->file_name }}</span>
                                            <br>
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->file_name }}" >下载</a>
                                          </li>
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                          </td>
                        </tr>
            @endif
            @endif
                        <tr>
                          <th colspan="5" style='text-align: center'>可打印模板</th>
                        </tr>
                        <tr>
                          <td colspan="5">
                            <div class="boss">
                              <div class="xia" style='width:1100px;'> 
                                <a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
                                <a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
                                <div class="items" style='height:120px;width:95%;'>
                                  <ul style="height:68px;top:50%;margin-top:-34px;" >
                                    @foreach($mb_words as $uv)
                                      @if($uv->phase_id == 6)
                                        @if(substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'doc' || substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'docx')
                                          <li style='width:150px;float:left;'>
                                            <a href="#" onClick="doword('{{ URL('') . $uv->site_url }}')">
                                              <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <br>
                                            <span>{{ $uv->mb_name }}</span>
                                            <br>
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->mb_name }}" >下载</a>
                                          </li>
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                          </td>
                        </tr>
      <tr>
        <th colspan="5" style='text-align: center'>
          <h3>附件上传</h3> 
          <span style='color:red;font-size:12px;'>一次只能上传一个格式</span>
        </th>
      </tr>
      <tr>
        <td colspan="5">
        <div class="file-loading">
          <input id="file-1" name='business_license[]'  multiple="multiple" type="file" class="file" data-upload-url="#">
        </div>
        </td>
      </tr>

            </table>
          <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" onclick="save(this)">
                    更新
                    </button>
                    <span style='color:red;font-size:14px;'>(保存数据可修改)</span> 
                    <button type="submit" class="btn btn-success" onclick="ok(this)">
                    完成
                    </button>
                    <span style='color:red;font-size:14px;'>(进入下一阶段)</span>
                    <button type="submit" class="btn btn-warning">
                    提审<br>
                    </button>
                    <span style='color:red;font-size:14px;'>(领导审批)</span>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
          </div>
    </form>
@elseif($xmbgjsp_data['table_status'] == 1)
  <form action="" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}        
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">客户名称</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">客户名称</i></div>
                              <input type="text" readonly name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}' maxlength="20">
                          </div>
                      </div>
                    
                  </td>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">担保金额</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                              <input type="text" readonly name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength="5" >
                          </div>
                      </div>
                    
                  </td>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款类型</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;贷款类型</i></div>
                              <input type="text" readonly name='legal_person' class="form-control" id="exampleInputAmount"  value='{{ $items->items_type }}' maxlength="5" >
                          </div>
                      </div>
                    
                  </td>
                  <td style='width:250px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">担保期限</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                            <input type="text" readonly name='registered_capital' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' onkeyup="if(/\D/.test(this.value)){alert('只能输入数字');this.value='';}">
                            <div class="input-group-addon">月</div>
                          </div>
                       </div>
                    
                  </td>
                </tr>
             <tr>
                 <td colspan="2" style='width:500px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款银行</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款银行</i></div>
                              <input type="text" readonly name='loan_bank' class="form-control" id="exampleInputAmount" value='{{ $xmbgjsp_data['loan_bank'] }}' maxlength='50'>
                          </div>
                      </div>
                    
                  </td>
                <td>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">客户经理</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;客户经理</i></div>
                          <input type="text" readonly name='business_address' class="form-control" id="exampleInputAmount"  value='{{ $fxscsp_data['item_name'] }}' maxlength='50'>
                      </div>
                  </div>
                </td>    
                <td>
                  <div class="form-group">
                           <label class="sr-only" for="exampleInputAmount">时间</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;申请时间</i></div>
                                  <input type="text" name='dc_time' id='sandbox1-container' class='form-control' data-date-format='yyyy-mm-dd' value="<?php echo date('Y-m-d');?>">
                            </div>
                        </div>
                </td>
                <script>
                  // 日期选择器设置
                  $('#sandbox1-container').datepicker({ 
                                                    language: "zh-CN",
                                                    orientation: "top auto",
                                                    autoclose: true,
                                                    startview: 2,
                                                    todayHighlight: true
                                                  });
                </script>
              </tr>
                <tr>
                  <td colspan="5" style='width:500px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">申请变更事项及理由</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;变更</i></div>
                              <input type="text" readonly name='alteration' class="form-control" id="exampleInputAmount" value='{{ $xmbgjsp_data['alteration'] }}' maxlength='50'>
                          </div>
                      </div>
                    
                  </td>
                </tr>
                 <?php $a = 0;$b=0; ?>
          @foreach($url as $uv)
            @if($uv->phases_id == 6)
            @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'jpg' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'png')
           <?php $a = 1; ?>
            @elseif(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'doc' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'docx')
           <?php $b = 1; ?>
            @endif
            @endif
          @endforeach
          @if($a==1||$b==1)
                       <tr>
                          <th colspan="5" style='text-align: center'>已上传附件列表</th>
                        </tr>
            @if($a==1)
                        <tr>
                          <td colspan="5">
                            <div class="boss">
                              <div class="bigimg">
                                <img  id="spic" src="" height="350" width="350"> 
                              </div>
                              <div class="xia"> <a class="prev"><</a> <a class="next">></a>
                                <div class="items">
                                  <ul >
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 6)
                                        @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'jpg' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'png')
                                          <li>
                                            <a target="_blank"  href="{{ $uv->site_url }}">
                                              <img src="{{ $uv->site_url }}" id='imgsrc' height="56" width="56">
                                            </a>
                                            <br>
                                            <span>{{ $uv->file_name }}</span>
                                            <br> 
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->file_name }}" >下载</a>
                                          </li>
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                              
                          </td>
                        </tr>
            @endif
            @if($b==1)
                        <tr>
                          <td colspan="5">
                            <div class="boss">
                              <div class="xia" style='width:1100px;'> 
                                <a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
                                <a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
                                <div class="items" style='height:120px;width:95%; '>
                                  <ul style="height:68px;top:50%;margin-top:-34px;">
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 1)
                                        @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'doc' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'docx')
                                          <li style='width:150px;float:left;'>
                                            <a href="#" onClick="doword('{{ URL('') . $uv->site_url }}')">
                                              <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <br>
                                            <span>{{ $uv->file_name }}</span>
                                            <br>
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->file_name }}" >下载</a>
                                          </li>
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                          </td>
                        </tr>
            @endif
            @endif
                        <tr>
                          <th colspan="5" style='text-align: center'>可打印模板</th>
                        </tr>
                        <tr>
                          <td colspan="5">
                            <div class="boss">
                              <div class="xia" style='width:1100px;'> 
                                <a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
                                <a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
                                <div class="items" style='height:120px;width:95%;'>
                                  <ul style="height:68px;top:50%;margin-top:-34px;" >
                                    @foreach($mb_words as $uv)
                                      @if($uv->phase_id == 6)
                                        @if(substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'doc' || substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'docx')
                                          <li style='width:150px;float:left;'>
                                            <a href="#" onClick="doword('{{ URL('') . $uv->site_url }}')">
                                              <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <br>
                                            <span>{{ $uv->mb_name }}</span>
                                            <br>
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->mb_name }}" >下载</a>
                                          </li>
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                          </td>
                        </tr>
            </table>
          <div class="modal-footer">
                    <span style='color:red;font-size:14px;'>(进入下一阶段)</span>
                    <button type="submit" class="btn btn-warning">
                    提审<br>
                    </button>
                    <span style='color:red;font-size:14px;'>(领导审批)</span>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>
          </div>
    </form>
@endif
    </div>
  </div>
</div>