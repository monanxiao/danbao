<!-- Modal -->
<div class="modal fade" id="dbhAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document"  style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">担保函</h4>
      </div>
      <div class="modal-body">
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
                    <button type="submit" class="btn btn-primary">
                      立即打印
                    </button>
                    <span style='color:red;font-size:14px;'>(打印担保函)</span>
                    <button type="submit" class="btn btn-primary">
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
    </div>
  </div>
</div>