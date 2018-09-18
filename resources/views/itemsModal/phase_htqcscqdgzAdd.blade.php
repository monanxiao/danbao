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
                <th colspan="5" style='text-align: center'><h3>附件上传</h3></th>
              </tr>
              <tr>
                <td colspan="5">
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