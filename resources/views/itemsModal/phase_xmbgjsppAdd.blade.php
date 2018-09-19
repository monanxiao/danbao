 <!-- 增加阶段项目变更及审批模态框 -->
<div class="modal fade" id="xmbgjspAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span name='phase_title'>项目变更及审批</span></h4>
      </div>
		<form action="" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name='btn_type' value='xmbgjsp'>
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
                          <label class="sr-only" for="exampleInputAmount">担保金额</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength="5" >
                          </div>
                      </div>
                    
                  </td>
                  <td>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款类型</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;贷款类型</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount"  value='{{ $items->items_type }}' maxlength="5" >
                          </div>
                      </div>
                    
                  </td>
                  <td style='width:250px;'>
                   
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">担保期限</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                            <input type="text" name='registered_capital' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' onkeyup="if(/\D/.test(this.value)){alert('只能输入数字');this.value='';}">
                            <div class="input-group-addon">元</div>
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
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount"  value='张三' maxlength='50'>
                      </div>
                  </div>
                </td>    
                <td>
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">时间</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;申请时间</i></div>
                          <input type="text" name='dc_time' id='sandbox-container' class='form-control' data-date-format='yyyy-mm-dd' value="<?php echo date('Y-m-d');?>">
                    </div>
                  </div>
                </td>
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
            <button type="submit" class="btn btn-primary">
              立即打印
            </button>
            <span style='color:red;font-size:14px;'>(打印担保意向函)</span>
            <button type="submit" class="btn btn-primary" onclick="save(this)">
            保存
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
</div>