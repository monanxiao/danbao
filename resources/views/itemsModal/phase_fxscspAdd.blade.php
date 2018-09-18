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

  <li role="presentation" id='dbcss' class=''>
    <a href="#dbh"  role="tab" data-toggle="tab">担保函</a>
  </li>
</ul>
<!-- 面板区开始 -->
<form action="" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name='btn_type' value='fxhbjb'>
   <input type="hidden" id='table_status' name='table_status' value=''>
  <div class="tab-content">
	<!-- 风控会表决表开始 -->
		<div role="tabpanel" class="tab-pane active" id="fkhbjb">
			<div class="form-group">
			    <div class="modal-body"> 
            <table class="table table-striped table-bordered table-hover">
                    <tr> 
                        <td style='width:335px;'>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">贷款机构</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款机构</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                              </div>
                          </div>
                        </td> 
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保金额</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                                  <input type="text" name='loans_money' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength='3'>
                                 
                              </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保费</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保费</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                              </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保费率</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保费率</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['rate'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>                   
                    </tr> 
                    <tr>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">客户名称</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;客户名称</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}' maxlength='50'>
                              </div>
                          </div>
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
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保期限</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' maxlength='50'>
                              </div>
                          </div>
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
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">反担保措施</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;反担保措施</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['measure'] }}' maxlength='50'>
                              </div>
                          </div>
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
                                  <input type="text" name='item_name' class="form-control" id="exampleInputAmount" value='张三' maxlength='50'>
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
                          <button type="button" class="btn btn-default" data-dismiss="modal">
                          取消
                          </button>
                          <button type="submit" class="btn btn-primary">
                            立即打印
                          </button>
                          <span style='color:red;font-size:14px;'>(打印立项审批表)</span>  
                          <a href="#dbh" class="btn btn-primary" style='background-color:'';' role="tab" onclick="next(this)" data-toggle="tab">
                          下一步
                          </a>                        
                    </div>
			    </div>
          <hr>
			</div>
    </div> 
		<!-- 风控会表决表结束 -->

	<!-- 担保函开始 -->
      <div role="tabpanel" class="tab-pane" id="dbh">
          <div class="form-group">
                <div class="modal-body">           
                    <table class="table table-striped table-bordered table-hover">
                      <tr>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">贷款人</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                              </div>
                          </div>
                        </td>    
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">借款金额</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;借款金额</i></div>
                                  <input type="text" name='loans_money' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength='3'>
                                 
                              </div>
                          </div>
                        </td>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">时间</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;时间</i></div>
                                  <input type="text" name="alertDateQuery" id="aDate">
                        <script type="text/javascript">
                            var mydateInput = document.getElementById("aDate");
                            var date = new Date();
                            var dateString = date.getFullYear() + "年" + (date.getMonth() + 1) + "月" + date.getDate() + '日';
                            mydateInput.value = "   " + dateString;
                        </script>
                              </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  <div class="modal-footer">
                    <a href="#fkhbjb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
                        上一步
                    </a>
                    <button type="submit" class="btn btn-primary">
                      立即打印
                    </button>
                    <span style='color:red;font-size:14px;'>(打印风控会表决表)</span>
                     <button type="submit" class="btn btn-primary">
                      立即打印
                    </button>
                    <span style='color:red;font-size:14px;'>(打印担保函)</span>
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
	              </div>
	              <hr>
	        </div>
	   </div>
	    <!-- 担保函结束 -->
	</div>
	<!-- 面板区结束 -->
</form>
    </div>
  </div>
</div>