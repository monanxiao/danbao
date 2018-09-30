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
                          <th colspan="5" style='text-align: center'>可打印模板</th>
                        </tr>
                        <tr>
                          <td colspan="5">
                            <div class="boss">
                              <div class="xia" style='width:1100px;'> 
                                <a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
                                <a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
                                <div class="items" style='height:120px;width:95%;'>
                                  <ul style="height:68px;top:50%;margin-top:-34px; ">
                                    @foreach($mb_words as $uv)
                                      @if($uv->phase_id == 5)
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
                    <button type="submit" class="btn btn-warning">
                    提审<br>
                    </button>
                    <span style='color:red;font-size:14px;'>(领导审批)</span>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">取消</button>   
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