 <!-- 增加阶段反担保落实模态框 -->
<div class="modal fade" id="fdblsAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span name='phase_title'>反担保落实</span></h4>
      </div>
<!-- 导航区 -->
<ul class="nav nav-tabs"  role="tablist">

  <li role="presentation" id='dbcss' class='active'>
    <a href="#zydc"  role="tab" data-toggle="tab">质押动产清单</a> 
  </li>
  <li role="presentation" id='lxcss' class="">
	<a href="#bzr"  role="tab" data-toggle="tab">担保人</a>
  </li>

  <li role="presentation" id='dbcss' class=''>
    <a href="#zyw"  role="tab" data-toggle="tab">抵押物清单</a> 
  </li>
 
</ul>
    <div class="tab-content">
      {{-- 保证人开始 --}}
      <div role="tabpanel" class="tab-pane" id="bzr">
          <div class="form-group">
            担保人
          </div>
      </div>
      {{-- 保证人结束--}}
      {{-- 质押动产清单开始 --}}              
<form action="" method='POST' enctype="multipart/form-data">
   {{ csrf_field() }}
      <div role="tabpanel" class="tab-pane active" id="zydc">
          <div class="form-group">
            <div class="modal-body">           
              <table class="table table-striped table-bordered table-hover">
                <tr>
                  <td colspan="5" style='text-align: center'>质押动产清单(1)</td>
                </tr>
                <tr>
                  <td>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">动产名称</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">动产名称</i></div>
                              <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="动产名称" value='' maxlength="20">
                          </div>
                      </div>
                  </td>
                  <td style='width:160px;'>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">抵押人</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp;抵押人</i></div>
                              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" placeholder="抵押人" maxlength="5" >
                          </div>
                      </div>
                  </td>
                  <td style='width:250px;'>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">数量</label>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;数量</i></div>
                            <input type="text" name='registered_capital' class="form-control" id="exampleInputAmount" placeholder="质押数量" onkeyup="if(/\D/.test(this.value)){alert('只能输入数字');this.value='';}">
                            <div class="input-group-addon">元</div>
                          </div>
                       </div>
                  </td>
                  <td colspan="2" style='width:500px;'>
                      <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">所在地址</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;所在地址</i></div>
                              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" placeholder="所在地址" maxlength='50'>
                          </div>
                      </div>
                  </td>
                </tr>

                <tr>
                  <td colspan="2" style='width:500px;'>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">登记机关</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;登记机关</i></div>
                            <input type="text" name='loans_use' class="form-control" id="exampleInputAmount" placeholder="登记机关" maxlength='50'>
                        </div>
                    </div>
                  </td>    
                  <td>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">认定价值</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;认定价值</i></div>
                            <input type="text" name='borrower' class="form-control" id="exampleInputAmount" placeholder="认定价值" maxlength='50'>
                        </div>
                    </div>
                  </td>    
                  <td>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">规格型号</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;规格型号</i></div>
                            <input type="text" name='deadline' class="form-control" id="exampleInputAmount" placeholder="规格型号" maxlength='2'>
                        </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">产权凭证</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true">&nbsp;&nbsp;产权凭证</i></div>
                            <input type="text" name='rate' class="form-control" id="exampleInputAmount" placeholder="产权凭证" maxlength='3'>
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
          </div>
      </div>
      {{-- 质押动产清单结束 --}}
    </div>
    </div>
  </div>
</div>
