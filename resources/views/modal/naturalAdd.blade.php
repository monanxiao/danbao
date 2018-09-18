 <!-- 增加自然人客户模态框 -->
<div class="modal fade" id="naturalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">自然人信息表</h4>
      </div>
      
<form action="" method='POST' enctype="multipart/form-data">
    {{csrf_field()}}
 <div class="modal-body">           
<table class="table table-striped table-bordered table-hover">
  <tr>
    <!-- <td colspan="2"> -->
    <td style='width:150px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">客户名称</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
              <input type="text" name='natural_name' class="form-control" id="exampleInputAmount" placeholder="自然人名字" maxlength="5">
          </div>
      </div>
    </td>
    <td style='width:170px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">婚姻</label>
          <div class="input-group">
              <div class="input-group-addon">婚姻</div>
              <select name='marriage' class="form-control">>
                <option value='未婚'>未婚</option>
                <option value='已婚'>已婚</option>
                <option value='离婚'>离婚</option>
                <option value='丧偶'>丧偶</option>
              </select>
          </div>
      </div>
    </td>
     <td style='width:225px;'>
        <div class="form-group">
            <label class="sr-only" for="exampleInputAmount">手机</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <input type="text" name='phone' class="form-control" id="exampleInputAmount" placeholder="手机" maxlength='13'>
            </div>
        </div>
      </td>
     <td style='width:225px;'>
        <div class="form-group">
            <label class="sr-only" for="exampleInputAmount">家庭座机</label>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <input type="text" name='plane' class="form-control" id="exampleInputAmount" placeholder="家庭座机" maxlength='13'>
            </div>
        </div>
      </td>
    <td colspan="2" style='width:500px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">家庭住址</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='address' class="form-control" id="exampleInputAmount" placeholder="家庭住址" maxlength='120'>
          </div>
      </div>
    </td>
  </tr>

  <tr>
    <td colspan="2" style='width:300px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">所在单位</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='work_name' class="form-control" id="exampleInputAmount" placeholder="单位名称" maxlength='120'>
          </div>
      </div>
    </td>
    <td>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">单位性质</label>
          <div class="input-group">
              <div class="input-group-addon">单位性质</div>
              <select name='natural_unit' class="form-control">
                <option value='0'>请选择</option>
                <option value='国家行政企业'>国家行政企业</option>
                <option value='公私合作企业'>公私合作企业</option>
                <option value='中外合资企业'>中外合资企业</option>
                <option value='社会组织机构'>社会组织机构</option>
                <option value='国际组织机构'>国际组织机构</option>
                <option value='外资企业'>外资企业</option>
                <option value='私营企业'>私营企业</option>
                <option value='集体企业'>集体企业</option>
                <option value='国防军事企业'>国防军事企业</option>
              </select>
          </div>
      </div>
    </td>
    <td>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">所属行业</label>
          <div class="input-group">
              <div class="input-group-addon">所属行业</div>
              <select name='trade' class="form-control">
                <option value='0'>请选择</option>
                <option value='农林牧渔'>农林牧渔</option>
                <option value='医药卫生'>医药卫生</option>
                <option value='建筑建材'>建筑建材</option>
                <option value='冶金矿产'>冶金矿产</option>
                <option value='石油化工'>石油化工</option>
                <option value='水利水电'>水利水电</option>
                <option value='交通运输'>交通运输</option>
                <option value='信息产业'>信息产业</option>
                <option value='机械机电'>机械机电</option>
                <option value='轻工食品'>轻工食品</option>
                <option value='服装纺织'>服装纺织</option>
                <option value='专业服务'>专业服务</option>
                <option value='安全防护'>安全防护</option>
                <option value='环保绿化'>环保绿化</option>
              </select>
          </div>
      </div>
    </td>
    <td colspan="2" style='width:500px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">单位地址</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true"></i></div>
              <input type="text" name='work_address' class="form-control" id="exampleInputAmount" placeholder="单位地址" maxlength='50'>
          </div>
      </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" style='width:500px;'>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">单位座机</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='work_plane' class="form-control" id="exampleInputAmount" placeholder="单位座机" maxlength='15'>
          </div>
      </div>
    </td>
    <td>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">单位邮编</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='postcode' class="form-control" id="exampleInputAmount" placeholder="单位邮编" maxlength='15'>
          </div>
      </div>
    </td>
    <td>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">本人年收入</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='annual_income' class="form-control" id="exampleInputAmount" placeholder="本人年收入" maxlength='15'>
          </div>
      </div>
    </td>
    <td>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">公积金金额</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='accumulation_fund' class="form-control" id="exampleInputAmount" placeholder="公积金金额" maxlength='15'>
          </div>
      </div>
    </td>
    <td>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">社保年限</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='social_security' class="form-control" id="exampleInputAmount" placeholder="社保年限" maxlength='15'>
          </div>
      </div>
    </td>
  </tr>

  <tr>
    
    <td>
      <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">学历</label>
          <div class="input-group">
              <div class="input-group-addon">学历</div>
              <select name='education' class="form-control">
                <option value='小学'>小学</option>
                <option value='初中'>初中</option>
                <option value='高中'>高中</option>
                <option value='初中中专'>初中中专</option>
                <option value='高中中专'>高中中专</option>
                <option value='大专'>大专</option>
                <option value='本科'>本科</option>
                <option value='研究生'>研究生</option>
              </select>
          </div>
      </div>
    </td>
    <td>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">已贷款</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='borrowed' class="form-control" id="exampleInputAmount" placeholder="已贷款金额(元)" maxlength='15'>
          </div>
      </div>
    </td>
    <td>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">已违约</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='have_default' class="form-control" id="exampleInputAmount" placeholder="已违约(元)" maxlength='15'>
          </div>
      </div>
    </td>
        <td>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">职位</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='profession' class="form-control" id="exampleInputAmount" placeholder="职位" maxlength='50'>
          </div>
      </div>
    </td>
    <td>
       <div class="form-group">
          <label class="sr-only" for="exampleInputAmount">工作年限</label>
          <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></div>
              <input type="text" name='work_age' class="form-control" id="exampleInputAmount" placeholder="工作年限" maxlength='50'>
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
    <th colspan="6" style='text-align: center'><h3>附件上传</h3></th>
  </tr>
  <tr>
    <td colspan="6">
        <!-- 导航区 -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class='active'>
            <a href="#sfz" role="tab" data-toggle="tab">身份证</a>
          </li>
          <li role="presentation"1>
            <a href="#jsz" role="tab" data-toggle="tab">驾驶证</a>
          </li>
           <li role="presentation">
            <a href="#qtzj" role="tab" data-toggle="tab">其他证件</a>
          </li>
        </ul>
         
        <!-- 面板区 -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="sfz">
                  <div class="form-group">
                      <div class="file-loading">
                          <input id="file-2" name='identity_card' type="file" class="file" data-upload-url="#">
                      </div>
                  </div>
                  <hr>
            </div>
            <div role="tabpanel" class="tab-pane" id="jsz">
          
                  <div class="form-group">
                      <div class="file-loading">
                          <input id="file-3" name='driver_license'  type="file" class="file" data-upload-url="#">
                      </div>
                  </div>
                  <hr>

            </div>
            <div role="tabpanel" class="tab-pane" id="qtzj">
                  <div class="form-group">
                      <div class="file-loading">
                          <input id="file-4" name='else_licence' type="file" class="file" data-upload-url="#">
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