 <!-- 增加公司客户模态框 -->
<div class="modal fade" id="ItemsAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:500px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">公司信息表</h4>
      </div>
      
<form action="" method='POST' enctype="multipart/form-data">
    {{ csrf_field() }}
      <div class="modal-body">
          <table class="table table-striped table-bordered table-hover" style='margin-top:15px;'>
        <tbody>
           <tr class="active">
              <td>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">项目名称</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <input type="text" name='items_name' class="form-control" id="exampleInputAmount" placeholder="项目名称(最多20字)" maxlength="20">
                        <input type="hidden" name='c_id' value='{{ $cid }}'>
                        <input type="hidden" name='type' value='company'>
                    </div>
                </div>
              </td>
                  <td>
                    <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">项目类型</label>
                      <div class="input-group">
                          <div class="input-group-addon">项目类型</div>
                          <select name='state' class="form-control">
                            <option value='正常借款'>正常借款</option>
                            <option value='借款展期'>借款展期</option>
                            <option value='非融资'>非融资</option>
                          </select>
                      </div>
                    </div>
                  </td>  
           </tr>    
        </tbody>
    </table>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="submit" class="btn btn-primary">添加</button>
      </div>
</form>
    </div>
  </div>
</div>  