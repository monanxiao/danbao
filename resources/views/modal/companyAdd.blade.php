 <!-- 增加公司客户模态框 -->
<div class="modal fade" id="companyAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">公司信息表</h4>
      </div>
      
<form action="" method='POST' enctype="multipart/form-data">
    {{ csrf_field() }}
 <div class="modal-body">           
<table class="table table-striped table-bordered table-hover">
  <tr>

    <td>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">客户名称</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
              <input type="text" name='company_name' class="form-control" id="exampleInputAmount" placeholder="公司名称(最多20字)" maxlength="20">
          </div>
      </div>
    </td>

     <td style='width:130px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">法人</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
              <input type="text" name='legal_person' class="form-control" id="exampleInputAmount" placeholder="法人" maxlength="5" >
          </div>
      </div>
    </td>

    <td style='width:230px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">注册资本</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true"></i></div>
            <input type="text" name='registered_capital' class="form-control" id="exampleInputAmount" placeholder="注册资本" onkeyup="if(/\D/.test(this.value)){alert('只能输入数字');this.value='';}">
            <div class="input-group-addon">元</div>
          </div>
      </div>
    </td>

    <td style='width:230px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">成立时间</label>
          <div class="input-group">
              <div class="input-group-addon">成立时间</div>
              <input type="date" name='establish_time' class="form-control" id="exampleInputAmount" placeholder="成立时间">
          </div>
      </div>
    </td>

  </tr>

  <tr>

    <td colspan="2" style='width:500px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">注册地址</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" placeholder="注册地址(最多50字)" maxlength='50'>
          </div>
      </div>
    </td>

    <td>
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">公司状态</label>
          <div class="input-group">
              <div class="input-group-addon">公司状态</div>
              <select name='state' class="form-control">
                <option value='在营'>在营</option>
                <option value='吊销'>吊销</option>
                <option value='注销'>注销</option>
              </select>
          </div>
      </div>
    </td>
    <td>
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">公司类型</label>
          <div class="input-group">
              <div class="input-group-addon">公司类型</div>
              <select name='company_type' class="form-control">
                <option value='0'>请选择类型</option>
                <option value='个人独资'>个人独资</option>
                <option value='合伙企业'>合伙企业</option>
                <option value='有限责任公司'>有限责任公司</option>
                <option value='股份有限公司'>股份有限公司</option>
              </select>
          </div>
      </div>
    </td>
  </tr>

  <tr>
    <td colspan="2" style='width:500px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">经营地址</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='business_address' class="form-control" id="exampleInputAmount" placeholder="经营地址(最多50字)" maxlength='50'>
          </div>
      </div>
    </td>
    <td>
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">企业规模</label>
          <div class="input-group">
              <div class="input-group-addon">企业规模</div>
              <select name='scale' class="form-control">
                <option value='0'>请选择规模</option>
                <option value='大'>大</option>
                <option value='中'>中</option>
                <option value='小'>小</option>
                <option value='微'>微</option>
              </select>
          </div>
      </div>
    </td>     
      <td>
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">客户来源</label>
          <div class="input-group">
              <div class="input-group-addon">客户来源</div>
              <select name='source' class="form-control">
                <option value='0'>请选择来源</option>
                <option value='自主营销'>自主营销</option>
                <option value='银行推荐'>银行推荐</option>
                <option value='政府部门'>政府部门</option>
                <option value='园区推荐'>园区推荐</option>
                <option value='客户转介绍'>客户转介绍</option>
              </select>
          </div>
      </div>
    </td>
  </tr>

  <tr>
    <td colspan="2" style='width:500px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">社会信用代码</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='credit_code' class="form-control" id="exampleInputAmount" placeholder="18位社会信用代码" maxlength='18'>
          </div>
      </div>
    </td> 
    <td>
        <div class="form-group">
            <label class="sr-only" for="exampleInputAmount">公司座机</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <input type="text" name='company_machin' class="form-control" id="exampleInputAmount" placeholder="公司座机" maxlength='13'>
            </div>
        </div>
      </td>

     <td>
        <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">客户级别</label>
          <div class="input-group">
              <div class="input-group-addon">客户级别</div>
              <select name='rank' class="form-control">
                <option value='0'>请选择级别</option>
                <option value='1'>一级客户</option>
                <option value='2'>二级客户</option>
                <option value='3'>三级客户</option>
                <option value='4'>普通客户</option>
              </select>
          </div>
      </div>
    </td>
  </tr>

  <tr>
    <td colspan="2" style='width:500px;'>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">登记机关</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='check_in' class="form-control" id="exampleInputAmount" placeholder="登记机关" maxlength='50'>
          </div>
      </div>
    </td>
    <td>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">开户信息</label>
          <div class="input-group">
              <div class="input-group-addon">开户行</div>
              <input type="text" name='open_account' class="form-control" id="exampleInputAmount" placeholder="示例:工商泸州分行" maxlength='50'>
          </div>
      </div>
    </td>
    <td>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">开户账号</label>
          <div class="input-group">
              <div class="input-group-addon">开户账号</div>
              <input type="text" name='open_num' class="form-control" id="exampleInputAmount" placeholder="示例:62220206360*****602" maxlength='50'>
          </div>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="4" style='width:500px;'>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">经营范围</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-sitemap" aria-hidden="true"></i></div>
              <textarea type="text" name='frame' class="form-control" id="exampleInputAmount" maxlength='150'>经营范围...</textarea>
          </div>
      </div>
    </td>
  </tr> 
  <tr>
    <td colspan="4" style='width:500px;'>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">经营状况</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-sitemap" aria-hidden="true"></i></div>
              <textarea type="text" name='state_operation' class="form-control" id="exampleInputAmount" maxlength='150' placeholder="经营状况...(最多150字)">经营状况...(最多150字)</textarea>
          </div>
      </div>
    </td>
  </tr>


  <tr>
    <th colspan="4" style='text-align: center'><h3>附件上传</h3></th>
  </tr>
  <tr>
    <td colspan="4">
        <!-- 导航区 -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#yezz" role="tab" data-toggle="tab">营业执照</a></li>
          <li role="presentation"><a href="#sfz" role="tab" data-toggle="tab">身份证</a></li>
          <li role="presentation"><a href="#khxkz" role="tab" data-toggle="tab">开户许可证</a></li>
          <li role="presentation"><a href="#tzjyxkz" role="tab" data-toggle="tab">特种经营许可证</a></li>
        </ul>
         
        <!-- 面板区 -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="yezz">
             
                  <div class="form-group">
                      <div class="file-loading">
                          <input id="file-1" name='business_license' type="file" class="file" data-upload-url="#">
                      </div>
                  </div>
                  <hr>
          
            </div>
            <div role="tabpanel" class="tab-pane" id="sfz">
              
                  <div class="form-group">
                      <div class="file-loading">
                          <input id="file-2" name='identity_card' type="file" class="file" data-upload-url="#">
                      </div>
                  </div>
                  <hr>
             
            </div>
            <div role="tabpanel" class="tab-pane" id="khxkz">
          
                  <div class="form-group">
                      <div class="file-loading">
                          <input id="file-3" name='licence_opening'  type="file" class="file" data-upload-url="#">
                      </div>
                  </div>
                  <hr>

            </div>
            <div role="tabpanel" class="tab-pane" id="tzjyxkz">
               
                  <div class="form-group">
                      <div class="file-loading">
                          <input id="file-4" name='licence' type="file" class="file" data-upload-url="#">
                      </div>
                  </div>
                  <hr>
            </div>
        </div>
    </td>
  </tr>
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
<script>
 $("#file-1").fileinput({
        theme: 'fa',
        uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function () {
        var $el = $("#file-1");
        if ($el.attr('disabled')) {
            $el.fileinput('enable');
        } else {
            $el.fileinput('disable');
        }
    });
    $(".btn-info").on('click', function () {
        $("#file-1").fileinput('refresh', {previewClass: 'bg-info'});
    });
     $("#file-2").fileinput({
        theme: 'fa',
        uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function () {
        var $el = $("#file-2");
        if ($el.attr('disabled')) {
            $el.fileinput('enable');
        } else {
            $el.fileinput('disable');
        }
    });
    $(".btn-info").on('click', function () {
        $("#file-2").fileinput('refresh', {previewClass: 'bg-info'});
    });
     $("#file-3").fileinput({
        theme: 'fa',
        uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function () {
        var $el = $("#file-3");
        if ($el.attr('disabled')) {
            $el.fileinput('enable');
        } else {
            $el.fileinput('disable');
        }
    });
    $(".btn-info").on('click', function () {
        $("#file-3").fileinput('refresh', {previewClass: 'bg-info'});
    });
     $("#file-4").fileinput({
        theme: 'fa',
        uploadExtraData: {kvId: '10'}
    });
    $(".btn-warning").on('click', function () {
        var $el = $("#file-4");
        if ($el.attr('disabled')) {
            $el.fileinput('enable');
        } else {
            $el.fileinput('disable');
        }
    });
    $(".btn-info").on('click', function () {
        $("#file-4").fileinput('refresh', {previewClass: 'bg-info'});
    });

    $(document).ready(function () {
     
        $("#kv-explorer").fileinput({
            'theme': 'explorer-fa',
            // 'uploadUrl': '#',
            overwriteInitial: false,
            initialPreviewAsData: true,
            initialPreview: [
                "http://lorempixel.com/1920/1080/nature/1",
                "http://lorempixel.com/1920/1080/nature/2",
                "http://lorempixel.com/1920/1080/nature/3"
            ],
            initialPreviewConfig: [
                {caption: "nature-1.jpg", size: 329892, width: "120px", url: "{$url}", key: 1},
                {caption: "nature-2.jpg", size: 872378, width: "120px", url: "{$url}", key: 2},
                {caption: "nature-3.jpg", size: 632762, width: "120px", url: "{$url}", key: 3}
            ]
        });
    });

</script> 
