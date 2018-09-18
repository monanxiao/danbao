 <!-- 增加阶段初审材料模态框 -->
<div class="modal fade" id="csclAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span name='phase_title'></span></h4>
        </div>
                <!-- 导航区 -->
        <ul class="nav nav-tabs"  role="tablist">
          <li role="presentation" id='lxcss' class="active">
            <a href="#lxspb"  role="tab" data-toggle="tab">立项审批表</a>
          </li>
          <li role="presentation" id='dbcss' class=''>
            <a href="#dbyxh"  role="tab" data-toggle="tab">担保意向函</a>
          </li>
        </ul>
@if($phasestatus == 0 )
{{-- 面板区域 --}} 
<form action="" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name='btn_type' value='cscl'>
   <input type="hidden" id='table_status' name='table_status' value=''>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="lxspb">
        <div class="form-group">
            <div class="modal-body">           
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">客户名称</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">公司</i></div>
                              <input type="text" name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}'maxlength="20">
                              
                          </div>
                      </div>
                    </fieldset>
                  </td>
                  <td style='width:160px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">法人</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;法人</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength="5" >
                          </div>
                      </div>
                    </fieldset>
                  </td>
                  <td style='width:250px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">注册资本</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;注册资本</i></div>
                            <input type="text" name='registered_capital' class="form-control" id="exampleInputAmount" value="{{ $company->registered_capital }}" onkeyup="if(/\D/.test(this.value)){alert('只能输入数字');this.value='';}">
                            <div class="input-group-addon">元</div>
                          </div>
                       </div>
                    </fieldset>
                  </td>
                  <td colspan="2" style='width:500px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">经营地址</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;经营地址</i></div>
                              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->business_address }}' maxlength='50'>
                          </div>
                      </div>
                    </fieldset>
                  </td>
                </tr>
                <tr>
                  <td colspan="5" style='width:500px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">经营状况</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;经营状况</i></div>
                              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->state_operation }}' maxlength='50'>
                          </div>
                      </div>
                    </fieldset>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style='width:500px;'>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">用途</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;用途</i></div>
                            <input type="text" name='loans_use' class="form-control" id="exampleInputAmount" placeholder="贷款用途(最多50字)" maxlength='50'>
                        </div>
                    </div>
                  </td>    
                  <td>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">贷款人</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                            <input type="text" name='borrower' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                        </div>
                    </div>
                  </td>    
                  <td>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">贷款期限</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;期限</i></div>
                            <input type="text" name='deadline' class="form-control" id="exampleInputAmount" placeholder="贷款期限(年)" maxlength='2'>
                        </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">担保费率</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;费率</i></div>
                            <input type="text" name='rate' class="form-control" id="exampleInputAmount" placeholder="担保费率(年化)" maxlength='3'>
                        </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td  colspan="5" style='width:500px;'>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">反担保措施</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true">&nbsp;&nbsp;反担保措施</i></div>
                              <input type="text" name='measure' class="form-control" id="exampleInputAmount" placeholder="反担保措施" maxlength='13'>
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
                          <a href="#dbyxh" class="btn btn-primary" style='background-color:'';' role="tab" onclick="next(this)" data-toggle="tab">
                          下一步
                          </a>                        
                        </div>
            </div>
        </div>
       <hr>
    </div>


      <div role="tabpanel" class="tab-pane" id="dbyxh">
          <div class="form-group">
                {{ csrf_field() }}
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
                              <label class="sr-only" for="exampleInputAmount">担保额度</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款金额</i></div>
                                  <input type="text" name='loans_money' class="form-control" id="exampleInputAmount" placeholder="贷款额度" maxlength='3'>
                                 
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
                  </div>
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
            
            </div>
              <hr>
          </div>
        </div>  
    </form>
  @elseif($phasetable['table_status']  == 2)
  {{-- 面板区域 --}} 
<form action="{{ URL('items/phase/edit',$phasetable['id']) }}" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
   <input type="hidden" name='btn_type' value='cscl'>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="lxspb">
        <div class="form-group">
            <div class="modal-body">           
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">客户名称</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">公司</i></div>
                              <input type="text" name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}'maxlength="20">
                        
                          </div>
                      </div>
                    </fieldset>
                  </td>
                  <td style='width:160px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">法人</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;法人</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength="5" >
                          </div>
                      </div>
                    </fieldset>
                  </td>
                  <td style='width:250px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">注册资本</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;注册资本</i></div>
                            <input type="text" name='registered_capital' class="form-control" id="exampleInputAmount" value="{{ $company->registered_capital }}" onkeyup="if(/\D/.test(this.value)){alert('只能输入数字');this.value='';}">
                            <div class="input-group-addon">元</div>
                          </div>
                       </div>
                    </fieldset>
                  </td>
                  <td colspan="2" style='width:500px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">经营地址</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;经营地址</i></div>
                              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->business_address }}' maxlength='50'>
                          </div>
                      </div>
                    </fieldset>
                  </td>
                </tr>
                <tr>
                  <td colspan="5" style='width:500px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">经营状况</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;经营状况</i></div>
                              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->state_operation }}' maxlength='50'>
                          </div>
                      </div>
                    </fieldset>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style='width:500px;'>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">用途</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;用途</i></div>
                            <input type="text" name='loans_use' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_use'] }}' maxlength='50'>
                        </div>
                    </div>
                  </td>    
                  <td>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">贷款人</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                            <input type="text" name='borrower' class="form-control" id="exampleInputAmount" value='{{ $phasetable['borrower'] }}' maxlength='50'>
                        </div>
                    </div>
                  </td>    
                  <td>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">贷款期限</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;期限</i></div>
                            <input type="text" name='deadline' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' maxlength='2'>
                        </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">担保费率</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;费率</i></div>
                            <input type="text" name='rate' class="form-control" id="exampleInputAmount" value='{{ $phasetable['rate'] }}' maxlength='3'>
                        </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td  colspan="5" style='width:500px;'>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">反担保措施</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true">&nbsp;&nbsp;反担保措施</i></div>
                              <input type="text" name='measure' class="form-control" id="exampleInputAmount" value='{{ $phasetable['measure'] }}' maxlength='13'>
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
                          <a href="#dbyxh" class="btn btn-primary" style='background-color:'';' role="tab" onclick="next(this)" data-toggle="tab">
                          下一步
                          </a>                        
                        </div>
            </div>
        </div>
       <hr>
    </div>


      <div role="tabpanel" class="tab-pane" id="dbyxh">
          <div class="form-group">
                <div class="modal-body">           
                    <table class="table table-striped table-bordered table-hover">
                      <tr>
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">贷款人</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                                  <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['borrower'] }}' maxlength='50'>
                              </div>
                          </div>
                        </td>    
                        <td>
                          <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">担保额度</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款金额</i></div>
                                  <input type="text" name='loans_money' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength='3'>
                                  <input type="hidden" id='table_status' name='table_status' value=''>
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
                  </div>
                  <div class="modal-footer">
                        <a href="#lxspb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
                        上一步
                        </a>
                    <button type="submit" class="btn btn-primary">
                      立即打印
                    </button>
                    <span style='color:red;font-size:14px;'>(打印担保意向函)</span>
                    <button type="submit" class="btn btn-primary" onclick="save(this)">
                    更新
                    </button>
                     <input type="hidden" id='table_status' name='table_status' value=''>
                    <span style='color:red;font-size:14px;'>(更新数据可修改)</span> 
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
    </form>
  @elseif($phasetable['table_status']  == 1)
    {{-- 面板区域 --}} 
<form action="{{ URL('items/phase/edit',$phasetable['id']) }}" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="lxspb">
        <div class="form-group">
            <div class="modal-body">           
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">客户名称</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">公司</i></div>
                              <input type="text" name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}'maxlength="20">
                          </div>
                      </div>
                    </fieldset>
                  </td>
                  <td style='width:160px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">法人</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;法人</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength="5" >
                          </div>
                      </div>
                    </fieldset>
                  </td>
                  <td style='width:250px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">注册资本</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;注册资本</i></div>
                            <input type="text" name='registered_capital' class="form-control" id="exampleInputAmount" value="{{ $company->registered_capital }}" onkeyup="if(/\D/.test(this.value)){alert('只能输入数字');this.value='';}">
                            <div class="input-group-addon">元</div>
                          </div>
                       </div>
                    </fieldset>
                  </td>
                  <td colspan="2" style='width:500px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">经营地址</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;经营地址</i></div>
                              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->business_address }}' maxlength='50'>
                          </div>
                      </div>
                    </fieldset>
                  </td>
                </tr>
                <tr>
                  <td colspan="5" style='width:500px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">经营状况</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;经营状况</i></div>
                              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->state_operation }}' maxlength='50'>
                          </div>
                      </div>
                    </fieldset>
                  </td>
                </tr>
                <tr>
                  <td colspan="2" style='width:500px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">用途</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;用途</i></div>
                              <input type="text" name='loans_use' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_use'] }}' maxlength='50'>
                          </div>
                      </div>
                    </fieldset>
                  </td>    
                  <td>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款人</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                              <input type="text" name='borrower' class="form-control" id="exampleInputAmount" value='{{ $phasetable['borrower'] }}' maxlength='50'>
                          </div>
                      </div>
                    </fieldset>
                  </td>    
                  <td>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">贷款期限</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;期限</i></div>
                              <input type="text" name='deadline' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' maxlength='2'>
                          </div>
                      </div>
                    </fieldset>
                  </td>
                  <td>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">担保费率</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;费率</i></div>
                              <input type="text" name='rate' class="form-control" id="exampleInputAmount" value='{{ $phasetable['rate'] }}' maxlength='3'>
                          </div>
                      </div>
                    </fieldset>
                  </td>
                </tr>
                <tr>
                  <td  colspan="5" style='width:500px;'>
                    <fieldset disabled>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">反担保措施</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true">&nbsp;&nbsp;反担保措施</i></div>
                              <input type="text" name='measure' class="form-control" id="exampleInputAmount" value='{{ $phasetable['measure'] }}' maxlength='13'>
                          </div>
                      </div>
                    </fieldset>
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
                          <a href="#dbyxh" class="btn btn-primary" style='background-color:'';' role="tab" onclick="next(this)" data-toggle="tab">
                          下一步
                          </a>                        
                        </div>
            </div>
        </div>
       <hr>
    </div>


      <div role="tabpanel" class="tab-pane" id="dbyxh">
          <div class="form-group">
                {{ csrf_field() }}
                <div class="modal-body">           
                    <table class="table table-striped table-bordered table-hover">
                      <tr>
                        <td>
                          <fieldset disabled>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">贷款人</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                                    <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['borrower'] }}' maxlength='50'>
                                </div>
                            </div>
                          </fieldset>
                        </td>    
                        <td>
                          <fieldset disabled>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">担保额度</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;贷款金额</i></div>
                                    <input type="text" name='loans_money' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength='3'>
                                    <input type="hidden" id='table_status' name='table_status' value=''>
                                </div>
                            </div>
                          </fieldset>
                        </td>
                        <td>
                          <fieldset disabled>
                            <div class="form-group">
                              <label class="sr-only" for="exampleInputAmount">时间</label>
                              <div class="input-group">
                                  <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;时间</i></div>
                                    <input type="text" name='dc_time' id='sandbox-container' class='form-control' data-date-format='yyyy-mm-dd' value="<?php echo date('Y-m-d');?>" >
                              </div>
                            </div>
                          </fieldset>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <div class="modal-footer">
                        <a href="#lxspb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
                        上一步
                        </a>
                    <button type="submit" class="btn btn-primary">
                      立即打印
                    </button>
                    <span style='color:red;font-size:14px;'>(打印担保意向函)</span>
                    <button type="submit" class="btn btn-primary">
                            立即打印
                    </button>
                    <span style='color:red;font-size:14px;'>(打印立项审批表)</span> 
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
    </form>
  @endif
    </div>
  </div>
</div> 

