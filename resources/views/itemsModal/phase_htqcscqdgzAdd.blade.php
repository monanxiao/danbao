 <!-- 增加阶段合同起草、审查及签订、公证模态框 -->
<div class="modal fade" id="htqcspqdgzAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span name='phase_title'>合同起草、审查及签订、公证</span></h4>
      </div>
<!-- 导航区 -->
<ul class="nav nav-tabs"  role="tablist">
  <li role="presentation" id='lxcss' class="active">
	<a href="#ywhtscspb"  role="tab" data-toggle="tab">业务合同审查审批表</a>
  </li>

  <li role="presentation" id='dbcss' class=''>
    <a href="#ywhtmx"  role="tab" data-toggle="tab">业务合同明细</a>
  </li>
</ul>
    <div class="tab-content">
      {{-- 业务合同审查审批表开始 --}}
      <div role="tabpanel" class="tab-pane active" id="ywhtscspb">
          <div class="form-group">
             <div class="modal-body">           
          <table class="table table-striped table-bordered table-hover">
            <tr>
              <td colspan="2" style='width:500px;'>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">客户名称</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">公司</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}'maxlength="20">
                      </div>
                  </div>
              </td>
              <td>
                <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">风险控制委员会决议编号</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">决议编号</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="决议编号" maxlength="20">
                      </div>
                  </div>
              </td>
            </tr>
            <tr>
              <td colspan="3" style='width:500px;text-align: center;'>合同(1)</td>
            </tr>
            <tr>
              <td>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">合同名称</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">合同名称</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="合同名称" maxlength="20">
                      </div>
                  </div>
              </td>
              <td>
                <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">合同编号</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">合同编号</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="合同编号" maxlength="20">
                      </div>
                  </div>
              </td>
              <td>
                <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">份数</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">份数</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="份数" maxlength="20">
                      </div>
                  </div>
              </td>
            </tr>
            <tr>
              <td colspan="3" style='width:500px;text-align: center;'>合同(2)</td>
            </tr>
            <tr>
              <td>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">合同名称</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">合同名称</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="合同名称" maxlength="20">
                      </div>
                  </div>
              </td>
              <td>
                <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">合同编号</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">合同编号</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="合同编号" maxlength="20">
                      </div>
                  </div>
              </td>
              <td>
                <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">份数</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">份数</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="份数" maxlength="20">
                      </div>
                  </div>
              </td>
            </tr>
            <tr>
              <td colspan="3" style='width:500px;text-align: center;'>合同(3)</td>
            </tr>
            <tr>
              <td>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">合同名称</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">合同名称</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="合同名称" maxlength="20">
                      </div>
                  </div>
              </td>
              <td>
                <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">合同编号</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">合同编号</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="合同编号" maxlength="20">
                      </div>
                  </div>
              </td>
              <td>
                <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">份数</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">份数</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="份数" maxlength="20">
                      </div>
                  </div>
              </td>
            </tr>
            <tr>
                <td colspan="3" style='width:500px;'>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">备注</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">备注</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="输入备注" maxlength="20">
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
                <td colspan="3">
                    <!-- 导航区 -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#yezz" role="tab" data-toggle="tab">附件</a></li>
                    </ul>
                     
                    <!-- 面板区 -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="yezz">
                         
                              <div class="form-group">
                                  <div class="file-loading">
                                      <input id="file-1" name='business_license' type="file" multiple class="file" data-upload-url="#">
                                  </div>
                              </div>
                              <hr>
                        </div>
                    </div>
                </td>
              </tr>
            </table>
			
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary" onclick="save(this)">
               保存
              </button>
              <span style='color:red;font-size:14px;'>(保数据可修改)</span> 
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
      {{-- 业务合同审查审批表 结束--}}
      {{-- 业务合同明细开始 --}}
      <div role="tabpanel" class="tab-pane" id="ywhtmx">
          <div class="form-group">
            业务合同所有文档
          </div>
      </div>
      {{-- 业务合同明细结束 --}}
    </div>
    </div>
  </div>
</div>