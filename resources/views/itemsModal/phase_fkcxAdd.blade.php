 <!-- 增加阶段放款程序模态框 -->
<div class="modal fade" id="fkcxAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span name='phase_title'>放款程序</span></h4>
      </div>
<!-- 导航区 -->
<ul class="nav nav-tabs"  role="tablist">
  <li role="presentation" id='lxcss' class="active">
	<a href="#fkscspb"  role="tab" data-toggle="tab">放款审查审批表</a>
  </li>

  <li role="presentation" id='dbcss' class=''>
    <a href="#fktzs"  role="tab" data-toggle="tab">放款通知书</a>
  </li>
  <li role="presentation" id='dbcss' class=''>
    <a href="#fdbzl"  role="tab" data-toggle="tab">反担保资料</a>
  </li>
</ul>
    <div class="tab-content">
      {{-- 放款审查审批表开始 --}}
      <div role="tabpanel" class="tab-pane active" id="fkscspb">
          <div class="form-group">
            <form action="" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name='btn_type' value='cscl'>
   <input type="hidden" id='table_status' name='table_status' value=''>           
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">客户名称</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">客户名称</i></div>
                              <input type="text" name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}' maxlength="20">
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款总额</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;贷款总额</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength="5" >
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">已使用额度</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;已使用额度</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" placeholder="已用额度" value='' maxlength="5" >
                          </div>
                      </div>
                  </td>
                  <td>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">放款金额</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;放款金额</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" placeholder="贷款金额" value='' maxlength="5" >
                          </div>
                      </div>
                  </td>
                </tr>
				<tr>
                  <td>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款种类</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;贷款种类</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['dklx'] }}' maxlength="5" >
                          </div>
                      </div>
                  </td>
                  <td style='width:250px;'>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">担保期限</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                            <input type="text" name='registered_capital' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' onkeyup="if(/\D/.test(this.value)){alert('只能输入数字');this.value='';}">
                            <div class="input-group-addon">月</div>
                          </div>
                       </div>
                    
                  </td>
                 <td style='width:250px;'>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款人</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                          </div>
                      </div>
                    
                  </td>
                <td>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">担保费</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保费</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount"  value='{{ $phasetable['loans_money']*$phasetable['rate']/100 }}' maxlength='50'>
                      </div>
                  </div>
                </td>    
              </tr>
                <tr>
                  <td colspan="5" style='width:500px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">其他事项说明</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;其他事项说明</i></div>
                              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" placeholder="请输入申请变更事项及理由" value='' maxlength='50'>
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
                        <input id="file-1" name='business_license' type="file" class="file" data-upload-url="#">
                    </div>
                  </td>
                </tr>

            </table>
          <div class="modal-footer">
			<a href="#lxspb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
			下一步
			</a>
            <button type="submit" class="btn btn-primary" onclick="save(this)">
            一次放款
            </button>
            <span style='color:red;font-size:14px;'>(保存数据可修改)</span> 
            <button type="submit" class="btn btn-primary" onclick="save(this)">
            分次放款
            </button>
            <span style='color:red;font-size:14px;'>(保存数据可修改)</span> 
            <button type="submit" class="btn btn-success" onclick="ok(this)">
            完成
            </button>
            <span style='color:red;font-size:14px;'>(进入下一阶段)</span>
            <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>   
            <button type="submit" class="btn btn-warning">
            提审<br>
            </button>
            <span style='color:red;font-size:14px;'>(领导审批)</span>
          </div>
        </form>
          </div>
      </div>
      {{-- 放款审查审批表结束--}}
      {{-- 放款通知书开始 --}}
      <div role="tabpanel" class="tab-pane" id="fktzs">
          <div class="form-group">
                    <form action="" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name='btn_type' value='cscl'>
   <input type="hidden" id='table_status' name='table_status' value=''>           
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款机构</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">贷款机构</i></div>
                              <input type="text" name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}' maxlength="20">
                          </div>
                      </div>
                    
                  </td>
                  <td>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">发放金额</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;发放金额</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength="5" >
                          </div>
                      </div>
                  </td>
                  <td>
                     <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">时间</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;实际放款时间</i></div>
                          
                              <input type="text" name='dc_time' id='sandbox-container' class='form-control' data-date-format='yyyy-mm-dd' value="<?php echo date('Y-m-d');?>">
                          
                    </div>
                  </div>
                  </td>
                </tr>
             <tr>
                 <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款人</label>
                          <div class="input-group"> 
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                          </div>
                      </div>
                    
                  </td>
                  <td>
                     <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">时间</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;出具日期</i></div>
                          
                              <input type="text" name='dc_time' id='sandbox-container' class='form-control' data-date-format='yyyy-mm-dd' value="<?php echo date('Y-m-d');?>">
                          
                    </div>
                  </div>
                  </td>
                </tr>
                <tr>
                  <th colspan="5" style='text-align: center'><h3>附件上传</h3></th>
                </tr>
                <tr>
                  <td colspan="5">
                    <div class="file-loading">
                        <input id="file-1" name='business_license' type="file" class="file" data-upload-url="#">
                    </div>
                  </td>
                </tr>

            </table>
          <div class="modal-footer">
                <a href="#lxspb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
                上一步
                </a>
            <button type="submit" class="btn btn-primary" onclick="save(this)">
            一次放款
            </button>
            <span style='color:red;font-size:14px;'>(保存数据可修改)</span> 
            <button type="submit" class="btn btn-primary" onclick="save(this)">
            分次放款
            </button>
            <span style='color:red;font-size:14px;'>(保存数据可修改)</span> 
            <button type="submit" class="btn btn-success" onclick="ok(this)">
            完成
            </button>
            <span style='color:red;font-size:14px;'>(进入下一阶段)</span>
            <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>   
            <button type="submit" class="btn btn-warning">
            提审<br>
            </button>
            <span style='color:red;font-size:14px;'>(领导审批)</span>
          </div>
        </form>
          </div>
      </div>
      {{-- 放款通知书结束 --}}
      {{-- 反担保资料 --}}
       <div role="tabpanel" class="tab-pane" id="fdbzl">
          <div class="form-group">
            担保资料
          </div>
      </div>
      {{-- 反担保资料 --}}
    </div>
    </div>
  </div>
</div>