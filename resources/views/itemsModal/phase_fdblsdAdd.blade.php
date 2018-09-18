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
  <li role="presentation" id='lxcss' class="active">
	<a href="#bzr"  role="tab" data-toggle="tab">保证人</a>
  </li>

  <li role="presentation" id='dbcss' class=''>
    <a href="#zyw"  role="tab" data-toggle="tab">质押物</a> 
  </li>
</ul>
    <div class="tab-content">
      {{-- 保证人开始 --}}
      <div role="tabpanel" class="tab-pane active" id="bzr">
          <div class="form-group">
            保证人
          </div>
      </div>
      {{-- 保证人结束--}}
      {{-- 质押物开始 --}}
      <div role="tabpanel" class="tab-pane" id="zyw">
          <div class="form-group">
            质押物
          </div>
      </div>
      {{-- 质押物结束 --}}
    </div>
    </div>
  </div>
</div>