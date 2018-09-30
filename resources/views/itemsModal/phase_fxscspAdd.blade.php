 <!-- 增加阶段风险审查审批模态框 -->
<div class="modal fade" id="fxscspAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span name='phase_title'>风险审查审批模态框</span></h4>
      </div>
          
<!-- 导航区 -->
<ul class="nav nav-tabs"  role="tablist">
  <li role="presentation" id='lxcss' class="active">
    <a href="#fkhbjb"  role="tab" data-toggle="tab">风险控制委员会表决表</a>
  </li>
  <li role="presentation" id='dbcss' class="">
	 <a href="#fkhjyb"  role="tab" data-toggle="tab">风险控制委员会决议</a>
  </li>
</ul>
@if($fxscsp_status == 0 )
<!-- 面板区开始 -->
<form action="" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name='btn_type' value='fxhbjb'>
   <input type="hidden" id='table_status' name='table_status' value=''>
   @include('itemsModal.publicTables')
   {{-- 担保费 --}}
  <input type="hidden" name='money_sum' value='{{ $phasetable['loans_money']*$phasetable['rate']/100 }}' >
  <div class="tab-content">
	<!-- 风控会表决表开始 -->
		<div role="tabpanel" class="tab-pane active" id="fkhbjb">
			<div class="form-group">
			    <div class="modal-body"> 
            <table class="table table-striped table-bordered table-hover">
                    <tr> 
                        <td style='width:335px;'>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">贷款机构</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款机构</i></div>
                                  <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td> 
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保金额</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                                  <input type="text" name='loans_money' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength='3'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保费</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保费</i></div>
                                  <input type="text" name='money_sum' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money']*$phasetable['rate']/100 }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保费率</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保费率</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['rate'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>                   
                    </tr> 
                    <tr>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">客户名称</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;客户名称</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保性质</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保性质</i></div>
                                  <input type="text" name='assure' class="form-control" id="exampleInputAmount" placeholder="输入担保性质" maxlength='50'>
                              </div>
                          </div>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保期限</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">风险经理</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;风险经理</i></div>
                                  <input type="text" name='risk_name' class="form-control" id="exampleInputAmount" placeholder="输入风险经理" maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">反担保措施</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;反担保措施</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['measure'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">其他要求</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;其他要求</i></div>
                                  <input type="text" name='content' class="form-control" id="exampleInputAmount" placeholder="请输入其他要求" maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">备注</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;备注</i></div>
                                  <input type="text" name='commit' class="form-control" id="exampleInputAmount" placeholder="请输入备注" maxlength='50'>
                              </div>
                          </div>
                        </td>
                         
                        
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">主办项目经理</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;主办项目经理</i></div>
                                  <input type="text" name='item_name' class="form-control" id="exampleInputAmount" placeholder="请输入经理" maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">表决意见</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;表决意见</i></div>
                                  <input type="text" name='bjyj' class="form-control" id="exampleInputAmount" placeholder="请输入表决意见" maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">风险控制要求</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;风险控制要求</i></div>
                                  <input type="text" name='fxkzyq' class="form-control" id="exampleInputAmount" placeholder="请输入风险控制要求" maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>

            </table>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">
                          取消
                          </button> 
                          <a href="#fkhjyb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="next(this)" data-toggle="tab">
                          下一步
                          </a>                        
                        </div>
			    </div>
          <hr>
			</div>
    </div> 
		<!-- 风控会表决表结束 -->
{{-- 风控会决议表开始 --}}
<div role="tabpanel" class="tab-pane" id="fkhjyb">
      <div class="form-group">
          <div class="modal-body">
            <table class="table table-striped table-bordered table-hover">
                    <tr>
                      <td style='width:715px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">评审会参会成员</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;参会成员</i></div>
                                  <input type="text" name='user_vip' class="form-control" id="exampleInputAmount" placeholder="评审会参会成员" maxlength='50'>
                              </div>
                          </div>
                        </td>
                      <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">同意票数</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;同意票数</i></div>
                                  <input type="text" name='consent' class="form-control" id="exampleInputAmount" placeholder="请输入同意票数" maxlength='50'>
                              </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">反对票数</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;反对票数</i></div>
                                  <input type="text" name='oppose' class="form-control" id="exampleInputAmount" placeholder="请输入反对票数" maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">项目实施要求</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;实施要求</i></div>
                                  <input type="text" name='items_yq' class="form-control" id="exampleInputAmount" placeholder="项目实施要求" maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">反担保落实要件</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;反担保落实要件</i></div>
                                  <input type="text" name='fdb_ls' class="form-control" id="exampleInputAmount" placeholder="反担保落实要件" maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">主任委员意见</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;主任委员意见</i></div>
                                  <input type="text" name='zrwy' class="form-control" id="exampleInputAmount" placeholder="主任委员意见" maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">评审会决议</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;评审会决议</i></div>
                                  <input type="text" name='pshjy' class="form-control" id="exampleInputAmount" placeholder="评审会决议" maxlength='50'>
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
                    <a href="#fkhbjb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
                        上一步
                    </a>
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
          </div>
      </div>
</div>
{{-- 风控会决议表结束 --}}
	
	</div>
	<!-- 面板区结束 -->
</form>
  @elseif($fxscsp_data['table_status']  == 2)

  <!-- 面板区开始 -->
<form action="{{ URL('items/phase/edit',$phasetable['items_id']) }}" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name='btn_type' value='fxhbjb'>
   <input type="hidden" id='table_status' name='table_status' value=''>
      {{-- 担保费 --}}
  <input type="hidden" name='money_sum' value='{{ $phasetable['loans_money']*$phasetable['rate']/100 }}' >
   @include('itemsModal.publicTables')
  <div class="tab-content">
  <!-- 风控会表决表开始 -->
    <div role="tabpanel" class="tab-pane active" id="fkhbjb">
      <div class="form-group">
          <div class="modal-body"> 
            <table class="table table-striped table-bordered table-hover">
                    <tr> 
                        <td style='width:335px;'>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">贷款机构</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款机构</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td> 
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保金额</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                                  <input type="text" name='loans_money' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength='3'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保费</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保费</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money']*$phasetable['rate']/100 }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保费率</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保费率</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['rate'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>                   
                    </tr> 
                    <tr>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">客户名称</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;客户名称</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保性质</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保性质</i></div>
                                  <input type="text" name='assure' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['assure'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保期限</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">风险经理</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;风险经理</i></div>
                                  <input type="text" name='risk_name' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['risk_name'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">反担保措施</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;反担保措施</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['measure'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">其他要求</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;其他要求</i></div>
                                  <input type="text" name='content' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['content'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">备注</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;备注</i></div>
                                  <input type="text" name='commit' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['commit'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                         
                        
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">主办项目经理</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;主办项目经理</i></div>
                                  <input type="text" name='item_name' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['item_name'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">表决意见</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;表决意见</i></div>
                                  <input type="text" name='bjyj' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['bjyj'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">风险控制要求</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;风险控制要求</i></div>
                                  <input type="text" name='fxkzyq' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['fxkzyq'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>

            </table>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">
                          取消
                          </button> 
                          <a href="#fkhjyb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="next(this)" data-toggle="tab">
                          下一步
                          </a>                        
                        </div>
          </div>
          <hr>
      </div>
    </div> 
    <!-- 风控会表决表结束 -->
{{-- 风控会决议表开始 --}}
<div role="tabpanel" class="tab-pane" id="fkhjyb">
      <div class="form-group">
          <div class="modal-body">
            <table class="table table-striped table-bordered table-hover">
                    <tr>
                      <td style='width:715px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">评审会参会成员</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;参会成员</i></div>
                                  <input type="text" name='user_vip' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['user_vip'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                      <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">同意票数</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;同意票数</i></div>
                                  <input type="text" name='consent' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['consent'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">反对票数</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;反对票数</i></div>
                                  <input type="text" name='oppose' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['oppose'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">项目实施要求</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;实施要求</i></div>
                                  <input type="text" name='items_yq' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['items_yq'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">反担保落实要件</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;反担保落实要件</i></div>
                                  <input type="text" name='fdb_ls' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['fdb_ls'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">主任委员意见</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;主任委员意见</i></div>
                                  <input type="text" name='zrwy' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['zrwy'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">评审会决议</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;评审会决议</i></div>
                                  <input type="text" name='pshjy' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['pshjy'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                    </tr>
                       <tr id="all_box4" style="display:none;" >
                          <th colspan="5" style='text-align: center'>已上传附件列表</th>
                        </tr>
                        <tr id="img_box4" style="display:none;" >
                          <td colspan="5">
                            <div class="boss">
                              <div class="bigimg">
                                <img src="" height="350" width="350" id="spic4"> 
                              </div>
                              <div class="xia"> <a class="prev"><</a> <a class="next">></a>
                                <div class="items4">
                                  <ul >
								  <?php $isshow_img = false;$isshow_doc = false; ?>
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 4)
                                        @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'jpg' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'png')
                                          <li>
                                            <a target="_blank"  href="{{ $uv->site_url }}">
                                              <img src="{{ $uv->site_url }}" id='imgsrc4' height="56" width="56">
                                            </a>
                                            <br>
                                            <span>{{ $uv->file_name }}</span>
                                            <br> 
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->file_name }}" >下载</a>
											</li>
											@if(!$isshow_img)
											<script type="text/javascript" >
												document.getElementById("all_box4").style.display="";
												document.getElementById("img_box4").style.display="";
											</script>
											<?php $isshow_img = true; ?>
											@endif
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                              <script>
                                var src = document.getElementById('imgsrc4').src;
                                document.getElementById("spic4").src=src;
                              </script>
                          </td>
                        </tr>
                        <tr id="docx_box4" style="display:none;" >
                          <td colspan="5">
                            <div class="boss">
                              <div class="xia" style='width:1100px;'> 
                                <a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
                                <a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
                                <div class="items" style='height:120px;width:95%;'>
                                  <ul style="height:68px;top:50%;margin-top:-34px;">
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 4)
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
											@if(!$isshow_doc)
											<script type="text/javascript" >
												document.getElementById("all_box4").style.display="";
												document.getElementById("docx_box4").style.display="";
											</script>
											<?php $isshow_doc = true; ?>
											@endif
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
                                      @if($uv->phase_id == 4)
                                        @if(substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'doc' || substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'docx')
                                          <li style='width:150px;float:left;'>
                                            <a href="#" onClick="doword('{{ URL('') . '/'. $uv->site_url }}')">
                                              <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <br>
                                            <span>{{ $uv->mb_name }}</span>
                                            <br>
                                              <a href="{{ '/' . $uv->site_url }}" download="{{ $uv->mb_name }}" >下载</a>
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
                              <input id="file-1" name='business_license[]' multiple="multiple"  type="file" class="file" data-upload-url="#">
                          </div>
                        </td>
                      </tr>
            </table>
            <div class="modal-footer">
                    <a href="#fkhbjb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
                        上一步
                    </a>
                    <button type="submit" class="btn btn-primary" onclick="save(this)">
                    更新
                    </button>
                    <span style='color:red;font-size:14px;'>(更新数据可修改)</span> 
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
          </div>
      </div>
</div>
{{-- 风控会决议表结束 --}}
  
  </div>
  <!-- 面板区结束 -->
</form>
  @elseif($fxscsp_data['table_status']  == 1)
    <!-- 面板区开始 -->
<form action="" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   @include('itemsModal.publicTables')
  {{-- 提交的阶段 --}}
  <input type="hidden" id='table_status' name='btn_type' value=' ' />
  <div class="tab-content">
  <!-- 风控会表决表开始 -->
    <div role="tabpanel" class="tab-pane active" id="fkhbjb">
      <div class="form-group">
          <div class="modal-body"> 
            <table class="table table-striped table-bordered table-hover">
                    <tr> 
                        <td style='width:335px;'>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">贷款机构</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款机构</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td> 
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保金额</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                                  <input type="text" name='loans_money' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength='3'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保费</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保费</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money']*$phasetable['rate']/100 }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保费率</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保费率</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['rate'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>                   
                    </tr> 
                    <tr>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">客户名称</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;客户名称</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保性质</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保性质</i></div>
                                  <input type="text" name='assure' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['assure'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保期限</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">风险经理</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;风险经理</i></div>
                                  <input type="text" name='risk_name' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['risk_name'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">反担保措施</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;反担保措施</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['measure'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">其他要求</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;其他要求</i></div>
                                  <input type="text" name='content' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['content'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style='width:500px;'>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">备注</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;备注</i></div>
                                  <input type="text" name='commit' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['commit'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                         
                        
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">主办项目经理</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;主办项目经理</i></div>
                                  <input type="text" name='item_name' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['item_name'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">表决意见</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;表决意见</i></div>
                                  <input type="text" name='bjyj' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['bjyj'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" style='width:500px;'>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">风险控制要求</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;风险控制要求</i></div>
                                  <input type="text" name='fxkzyq' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['fxkzyq'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
            </table>
                    <div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">
					  取消
					  </button> 
					  <a href="#fkhjyb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="next(this)" data-toggle="tab">
					  下一步
					  </a>                        
					</div>
          </div>
          <hr>
      </div>
    </div> 
    <!-- 风控会表决表结束 -->
{{-- 风控会决议表开始 --}}
<div role="tabpanel" class="tab-pane" id="fkhjyb">
      <div class="form-group">
          <div class="modal-body">
            <table class="table table-striped table-bordered table-hover">
                    <tr>
                      <td style='width:715px;'>
                        <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">评审会参会成员</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;参会成员</i></div>
                                  <input type="text" name='user_vip' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['user_vip'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                      <td>
                        <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">同意票数</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;同意票数</i></div>
                                  <input type="text" name='consent' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['consent'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">反对票数</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;反对票数</i></div>
                                  <input type="text" name='oppose' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['oppose'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                        <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">项目实施要求</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;实施要求</i></div>
                                  <input type="text" name='items_yq' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['items_yq'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                        <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">反担保落实要件</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;反担保落实要件</i></div>
                                  <input type="text" name='fdb_ls' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['fdb_ls'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                        <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">主任委员意见</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;主任委员意见</i></div>
                                  <input type="text" name='zrwy' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['zrwy'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                    <tr>
                      <td colspan="4" style='width:500px;'>
                        <fieldset disabled>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">评审会决议</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;评审会决议</i></div>
                                  <input type="text" name='pshjy' class="form-control" id="exampleInputAmount" value='{{ $fxscsp_data['pshjy'] }}' maxlength='50'>
                              </div>
                          </div>
                        </fieldset>
                        </td>
                    </tr>
                       <tr id="all_box4" style="display:none;" >
                          <th colspan="5" style='text-align: center'>已上传附件列表</th>
                        </tr>
                        <tr id="img_box4" style="display:none;" >
                          <td colspan="5">
                            <div class="boss">
                              <div class="bigimg">
                                <img src="" height="350" width="350" id="spic4"> 
                              </div>
                              <div class="xia"> <a class="prev"><</a> <a class="next">></a>
                                <div class="items4">
                                  <ul >
								  <?php $isshow_img = false;$isshow_doc = false; ?>
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 4)
                                        @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'jpg' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'png')
                                          <li>
                                            <a target="_blank"  href="{{ $uv->site_url }}">
                                              <img src="{{ $uv->site_url }}" id='imgsrc4' height="56" width="56">
                                            </a>
                                            <br>
                                            <span>{{ $uv->file_name }}</span>
                                            <br> 
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->file_name }}" >下载</a>
											</li>
											@if(!$isshow_img)
											<script type="text/javascript" >
												document.getElementById("all_box4").style.display="";
												document.getElementById("img_box4").style.display="";
											</script>
											<?php $isshow_img = true; ?>
											@endif
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                              <script>
                                var src = document.getElementById('imgsrc4').src;
                                document.getElementById("spic4").src=src;
                              </script>
                          </td>
                        </tr>
                        <tr id="docx_box4" style="display:none;" >
                          <td colspan="5">
                            <div class="boss">
                              <div class="xia" style='width:1100px;'> 
                                <a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
                                <a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
                                <div class="items" style='height:120px;width:95%;'>
                                  <ul style="height:68px;top:50%;margin-top:-34px;">
                                    @foreach($url as $uv)
                                      @if($uv->phase_id == 4)
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
											@if(!$isshow_doc)
											<script type="text/javascript" >
												document.getElementById("all_box4").style.display="";
												document.getElementById("docx_box4").style.display="";
											</script>
											<?php $isshow_doc = true; ?>
											@endif
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
                                      @if($uv->phase_id == 4)
                                        @if(substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'doc' || substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'docx')
                                          <li style='width:150px;float:left;'>
                                            <a href="#" onClick="doword('{{ URL('') . '/'. $uv->site_url }}')">
                                              <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <br>
                                            <span>{{ $uv->mb_name }}</span>
                                            <br>
                                              <a href="{{ '/' . $uv->site_url }}" download="{{ $uv->mb_name }}" >下载</a>
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
            @foreach($phase as $pv)
              @if($pv->id == 5)
                @if($pv->phases_status == '未开始')
                  <div>
                    <h3 style='text-align: center;'>进入下一阶段</h3>
                    <div style='text-align: center;'>
                      <button type="submit" class='btn btn-warning' onclick='danbaohan(this)' style='margin-right: 15px;' >担保函</button>
                      <button type="submit" class='btn btn-warning' onclick="xmbgjsp(this)" style='margin-right: 15px;' >项目变更及审批</button>
                      <button type="submit" class='btn btn-warning' onclick="htqc(this)" style='margin-right: 15px;' >合同起草</button>
                    </div>
                  </div>
                @endif
              @endif
            @endforeach
            <div class="modal-footer">
				<a href="#fkhbjb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
					上一步
				</a>
				<button type="submit" class="btn btn-warning">
				提审<br>
				</button>
				<span style='color:red;font-size:14px;'>(领导审批)</span>
				<button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>                       
            </div>
            
          </div>
      </div>
</div>
{{-- 风控会决议表结束 --}}
  
  </div>
  <!-- 面板区结束 -->
</form>
  @endif
    </div>
  </div>
</div>