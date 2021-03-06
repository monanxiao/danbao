 <!-- 增加保前尽职调查模态框 -->
<div class="modal fade" id="bqjzdcAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style='width:1280px;'>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span name='phase_title'></span></h4>
        </div>
<!-- 导航区 -->
<ul class="nav nav-tabs"  role="tablist">
  <li role="presentation" id='lxcss' class="active">
    <a href="#rzdbyewspb"  role="tab" data-toggle="tab">融资担保业务审批表</a>
  </li>
  <li role="presentation" id='dbcss' class=''>
    <a href="#fdbwr"  role="tab" data-toggle="tab">反担保物、反担保人</a>
  </li>
</ul>

@if($bqjzdc_status == 0)
<form action="" method='POST' enctype="multipart/form-data">
  {{ csrf_field() }}        
    <input type="hidden" id='table_status' name='table_status' value=''/>
    <input type="hidden" name='btn_type' value='bqjzdc'/>
    @include('itemsModal.publicTables')
{{-- 面板区 --}}
<div class="tab-content">

    {{-- 融资担保业务审批表 --}}
    <div role="tabpanel" class="tab-pane active" id="rzdbyewspb">
      <div class="form-group">
          
           <div class="modal-body">           
          <table class="table table-striped table-bordered table-hover">
            <tr>
              <td style='width:300px;'>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">客户</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-building" aria-hidden="true">&nbsp;&nbsp;客户</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}'maxlength="20">
                      </div>
                  </div>
                </fieldset>
              </td>
              <td style='width:180px;'>
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
              <td style='width:240px;'>
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
                        <label class="sr-only" for="exampleInputAmount">经营范围</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-star-o" aria-hidden="true">&nbsp;&nbsp;经营范围</i></div>
                            <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->frame }}' maxlength='50'>
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
                          <div class="input-group-addon"><i class="fa fa-location-arrow" aria-hidden="true">&nbsp;&nbsp;用途</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount"  value='{{ $phasetable['loans_use'] }}' maxlength='50'>
                      </div>
                  </div>
                </fieldset>
              </td>    
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">贷款人</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                          <input type="text" name='borrower' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                      </div>
                  </div>
                </fieldset>
              </td>    
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">担保期限</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' maxlength='2'>
                      </div>
                  </div>
                </fieldset>
              </td>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">担保费率</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-percent" aria-hidden="true">&nbsp;&nbsp;担保费率</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['rate'] }}' maxlength='3'>
                      </div>
                  </div>
                </fieldset>
              </td>
            </tr>
            <tr>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">成立时间</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;成立时间</i></div>
                            <input type="text" name='company_machin' class="form-control" id="exampleInputAmount" value='{{ $company->establish_time }}' maxlength='13'>
                        </div>
                    </div>
                </fieldset>
              </td>
              <td colspan="2" style='width:500px;'>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">企业划型</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-map" aria-hidden="true">&nbsp;&nbsp;企业划型</i></div>
                          <input type="text" name='company_machin' class="form-control" id="exampleInputAmount" value='{{ $company->company_type }}' maxlength='13'>
                      </div>
                  </div>
                </fieldset>
              </td>
              <td>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">所属行业</label>
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-share" aria-hidden="true">&nbsp;&nbsp;所属行业</i></div>
                      <select name='sshy' class="form-control">
                        <option value='机构组织'>机构组织</option>
                        <option value='农林牧渔'>农林牧渔</option>
                        <option value='医药卫生'>医药卫生</option>
                        <option value='建筑建材'>建筑建材</option>
                        <option value='冶金矿产'>冶金矿产</option>
                      </select>
                  </div>
                </div>
              </td>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">担保金额</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                          <input type="text" name='company_machin' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength='13'>
                      </div>
                  </div>
              </fieldset>
              </td>
            </tr>
            <tr>
              <td colspan="2" style='width:500px;'>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">金融机构</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-building-o" aria-hidden="true">&nbsp;&nbsp;金融机构</i></div>
                            <input type="text" name='jrjg_name' class="form-control" id="exampleInputAmount" placeholder="金融机构名称" maxlength='50'>
                            
                        </div>
                    </div>
              </td>
              <td>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">贷款种类</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true">&nbsp;&nbsp;贷款种类</i></div>
                        <select name='dklx' class="form-control">
                          <option value='RMB'>RMB</option>
                          <option value='美元'>美元</option>
                          <option value='日元'>日元</option>
                        </select>
                    </div>
                  </div>
              </td>
              <td>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">负债总额</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;负债总额</i></div>
                            <input type="text" name='fzze' class="form-control" id="exampleInputAmount" placeholder="负债总额(元)" maxlength='50'>
                        </div>
                    </div>
              </td>
              <td>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">本公司在保余额</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;在保余额</i></div>
                            <input type="text" name='dbye' class="form-control" id="exampleInputAmount" placeholder="在保余额(元)" maxlength='50'>
                        </div>
                    </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">贷款利率</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-percent" aria-hidden="true">&nbsp;&nbsp;贷款利率</i></div>
                            <input type="text" name='dkln' class="form-control" id="exampleInputAmount" placeholder="贷款利率(年化)" maxlength='50'>
                        </div>
                    </div>
              </td>
              <td>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">贷款期限</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true">&nbsp;&nbsp;贷款期限</i></div>
                            <input type="text" name='dkqx' class="form-control" id="exampleInputAmount" placeholder="0月" maxlength='50'>
                        </div>
                    </div>
              </td>
              <td>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">所属园区</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true">&nbsp;&nbsp;所属园区</i></div>
                        <select name='ssyq' class="form-control">
                          <option value='一园区'>一园区</option>
                          <option value='二园区'>二园区</option>
                          <option value='三园区'>三园区</option>
                        </select>
                    </div>
                  </div>
              </td>
              <td>
                  <div class="form-group">
					  <label class="sr-only" for="exampleInputAmount">调查人</label>
					  <div class="input-group">
						  <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true">&nbsp;&nbsp;调查人</i></div>
						  <input type="text" name='users_name' class="form-control" id="exampleInputAmount" placeholder="调查人" maxlength='13'>
					  </div>
				  </div>
                </td>
                <td>
                  <div class="form-group">
                           <label class="sr-only" for="exampleInputAmount">时间</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;调查时间</i></div>
                                  <input type="text" name='dc_time' id='sandbox-bqjzdc' class='form-control' data-date-format='yyyy-mm-dd' value="<?php echo date('Y-m-d');?>">
                            </div>
                        </div>
                </td>
              </tr>
              <tr>
                <td colspan="5" rowspan='2' style='width:500px;height:80px;'>
                    <textarea name='dc_yijian' style='width:100%;height:100%;'>输入调查人意见</textarea>
                </td>
              </tr>
            
            </table>
          </div>
            <div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">
			  取消
			  </button>
			  <a href="#fdbwr" class="btn btn-primary" style='background-color:'';' role="tab" onclick="next(this)" data-toggle="tab">
			  下一步
			  </a>                        
            </div>
    </div>
    <hr>
  </div>
  {{-- 反担保物人 --}}
  <div role="tabpanel" class="tab-pane" id="fdbwr">
    <div class="form-group">
         <textarea name='remark' style='width:95%;height:300px;margin:15px 2.5%;'>反担保物、反担保人....</textarea>
			<table class="table table-striped table-bordered table-hover">
                <tr>
					<th colspan="5" style='text-align: center'>
					  <h3>附件上传</h3> 
					  <span style='color:red;font-size:12px;'>一次只能上传一个格式</span>
					</th>
                </tr>
                <tr>
                  <td colspan="5">
                    <div class="file-loading">
                        <input id="file-1" name='business_license[]'  multiple="multiple" type="file" class="file" data-upload-url="#">
                    </div>
                  </td>
                </tr>
			</table>
          <div class="modal-footer">
              <a href="#rzdbyewspb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
                        上一步
              </a>
              <button type="submit" class="btn btn-primary" onclick="save(this)">
               保存
              </button>
              <span style='color:red;font-size:14px;'>(保数据可修改)</span> 
              <button type="submit" class="btn btn-success" onclick="ok(this)">
                完成
              </button>
              <span style='color:red;font-size:14px;'>(进入下一阶段)</span>   
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
</form>
@elseif($bqjzdc_data['table_status'] == 2)
<form action="{{ URL('items/phase/edit',$phasetable['items_id']) }}" method='POST' enctype="multipart/form-data">
  {{ csrf_field() }}
    <input type="hidden" id='table_status' name='table_status' value=''/>
    <input type="hidden" name='btn_type' value='bqjzdc'/>
       @include('itemsModal.publicTables')
{{-- 面板区 --}}
<div class="tab-content">

    {{-- 融资担保业务审批表 --}}
    <div role="tabpanel" class="tab-pane active" id="rzdbyewspb">
      <div class="form-group">
          
           <div class="modal-body">           
          <table class="table table-striped table-bordered table-hover">
            <tr>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">客户名称</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-building" aria-hidden="true">&nbsp;&nbsp;客户</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}'maxlength="20">
                      </div>
                  </div>
                </fieldset>
              </td>
              <td style='width:180px;'>
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
              <td style='width:240px;'>
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
                        <label class="sr-only" for="exampleInputAmount">经营范围</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-star-o" aria-hidden="true">&nbsp;&nbsp;经营范围</i></div>
                            <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->frame }}' maxlength='50'>
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
                          <div class="input-group-addon"><i class="fa fa-location-arrow" aria-hidden="true">&nbsp;&nbsp;用途</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount"  value='{{ $phasetable['loans_use'] }}' maxlength='50'>
                      </div>
                  </div>
                </fieldset>
              </td>    
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">贷款人</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                          <input type="text" name='borrower' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                      </div>
                  </div>
                </fieldset>
              </td>    
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">担保期限</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' maxlength='2'>
                      </div>
                  </div>
                </fieldset>
              </td>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">担保费率</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-percent" aria-hidden="true">&nbsp;&nbsp;担保费率</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['rate'] }}' maxlength='3'>
                      </div>
                  </div>
                </fieldset>
              </td>
            </tr>
            <tr>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">成立时间</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;成立时间</i></div>
                            <input type="text" name='establish_time ' class="form-control" id="exampleInputAmount" value='{{ $company->establish_time }}' maxlength='13'>
                        </div>
                    </div>
                </fieldset>
              </td>
              <td colspan="2" style='width:500px;'>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">企业划型</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-map" aria-hidden="true">&nbsp;&nbsp;企业划型</i></div>
                          <input type="text" name='company_machin' class="form-control" id="exampleInputAmount" value='{{ $company->company_type }}' maxlength='13'>
                      </div>
                  </div>
                </fieldset>
              </td>
              <td>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">所属行业</label>
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-share" aria-hidden="true">&nbsp;&nbsp;所属行业</i></div>
                      <select name='sshy' id='selhyId' class="form-control">
                        <option value='机构组织'>机构组织</option>
                        <option value='农林牧渔'>农林牧渔</option>
                        <option value='医药卫生'>医药卫生</option>
                        <option value='建筑建材'>建筑建材</option>
                        <option value='冶金矿产'>冶金矿产</option>
                      </select>
                      <input type="hidden" id="hyIdval" value="{{ $bqjzdc_data['sshy'] }}" />
                  </div>
                </div>
              </td>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">担保金额</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                          <input type="text" name='loans_money' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength='13'>
                      </div>
                  </div>
              </fieldset>
              </td>
            </tr>
            <tr>
              <td colspan="2" style='width:500px;'>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">金融机构</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-building-o" aria-hidden="true">&nbsp;&nbsp;金融机构</i></div>
                            <input type="text" name='jrjg_name' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['jrjg_name'] }}' maxlength='50'>

                        </div>
                    </div>
              </td>
              <td>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">贷款种类</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true">&nbsp;&nbsp;贷款种类</i></div>
                        <select name='dklx' id='selhbId' class="form-control">
                          <option value='RMB'>RMB</option>
                          <option value='美元'>美元</option>
                          <option value='日元'>日元</option>
                        </select>
                        <input type="hidden" id='hbIdval' value='{{ $bqjzdc_data['dklx'] }}'>
                    </div>
                  </div>
              </td>
              <td>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">负债总额</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;负债总额</i></div>
                            <input type="text" name='fzze' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['fzze'] }}' maxlength='50'>
                        </div>
                    </div>
              </td>
              <td>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">本公司在保余额</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;在保余额</i></div>
                            <input type="text" name='dbye' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['dbye'] }}' maxlength='50'>
                        </div>
                    </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">贷款利率</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-percent" aria-hidden="true">&nbsp;&nbsp;贷款利率</i></div>
                            <input type="text" name='dkln' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['dkln'] }}' maxlength='50'>
                        </div>
                    </div>
              </td>
              <td>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">贷款期限</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true">&nbsp;&nbsp;贷款期限</i></div>
                            <input type="text" name='dkqx' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['dkqx'] }}' maxlength='50'>
                        </div>
                    </div>
              </td>
              <td>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">所属园区</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true">&nbsp;&nbsp;所属园区</i></div>
                        <select name='ssyq' id='selId' class="form-control">
                          <option value='一园区'>一园区</option>
                          <option value='二园区'>二园区</option>
                          <option value='三园区'>三园区</option>
                        </select>
                        <input type="hidden" id='vaId' value='{{$bqjzdc_data['ssyq']}}'>
                    </div>
                  </div>
              </td>
              <td>
                  <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">调查人</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true">&nbsp;&nbsp;调查人</i></div>
                              <input type="text" name='users_name' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['users_name'] }}' maxlength='13'>
                          </div>
                      </div>
                </td>
                <td>
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">时间</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;调查时间</i></div>
                          
                              <input type="text" name='dc_time' id='sandbox-bqjzdc' class='form-control' data-date-format='yyyy-mm-dd' value="{{ $bqjzdc_data['dc_time'] }}">
                          
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="5" rowspan='2' style='width:500px;height:80px;'>
                    <textarea name='dc_yijian' style='width:100%;height:100%;'>{{ $bqjzdc_data['dc_yijian'] }}</textarea>
                </td>
              </tr>
            </table>
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                取消
                </button> 
                <a href="#fdbwr" class="btn btn-primary" style='background-color:'';' role="tab" onclick="next(this)" data-toggle="tab">
                下一步
                </a>                        
            </div>
   
    </div>
    <hr>
  </div>
  {{-- 反担保物人 --}}
  <div role="tabpanel" class="tab-pane" id="fdbwr">
    <div class="form-group">
     
         <textarea name='remark' style='width:95%;height:300px;margin:15px 2.5%;'>{{ $bqjzdc_data['remark'] }}</textarea>
			<table class="table table-striped table-bordered table-hover">
                       <tr id="all_box2" style="display:none;" >
                          <th colspan="5" style='text-align: center'>已上传附件列表</th>
                        </tr>
                        <tr id="img_box2" style="display:none;" >
                          <td colspan="5">
                            <div class="boss">
                              <div class="bigimg">
                                <img src="" height="350" width="350" id="spic2"> 
                              </div>
                              <div class="xia"> <a class="prev"><</a> <a class="next">></a>
                                <div class="items2">
                                  <ul >
								  <?php $isshow_img = false;$isshow_doc = false; ?>
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 2)
                                        @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'jpg' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'png')
                                          <li>
                                            <a target="_blank"  href="{{ $uv->site_url }}">
                                              <img src="{{ $uv->site_url }}" id='imgsrc2' height="56" width="56">
                                            </a>
                                            <br>
                                            <span>{{ $uv->file_name }}</span>
                                            <br> 
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->file_name }}" >下载</a>
											</li>
											@if(!$isshow_img)
											<script type="text/javascript" >
												document.getElementById("all_box2").style.display="";
												document.getElementById("img_box2").style.display="";
											</script>
											<?php $isshow_img = true; ?>
											@endif
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                              <script>
                                var src = document.getElementById('imgsrc2').src;
                                document.getElementById("spic2").src=src;
                              </script>
                          </td>
                        </tr>
                        <tr id="docx_box2" style="display:none;" >
                          <td colspan="5">
                            <div class="boss">
                              <div class="xia" style='width:1100px;'> 
                                <a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
                                <a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
                                <div class="items" style='height:120px;width:95%;'>
                                  <ul style="height:68px;top:50%;margin-top:-34px;">
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 2)
                                        @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'doc' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'docx')
                                          <li style='width:150px;float:left;'>
                                            <a href="#" onClick="doword('{{ URL('') . $uv->site_url }}')">
                                              <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <br>
                                            <span>{{ $uv->file_name }}</span>
                                            <br>
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->file_name }}" >下载</a>
                                          </li>
											@if(!$isshow_doc)
											<script type="text/javascript" >
												document.getElementById("all_box2").style.display="";
												document.getElementById("docx_box2").style.display="";
											</script>
											<?php $isshow_doc = true; ?>
											@endif
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                          </td>
                        </tr>
				<tr>
				  <th colspan="5" style='text-align: center'>可打印模板</th>
				</tr>
				<tr>
				  <td colspan="5">
					<div class="boss">
					  <div class="xia" style='width:1100px;'> 
						<a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
						<a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
						<div class="items" style='height:120px;width:95%; '>
						  <ul style="height:68px;top:50%;margin-top:-34px;" >
							@foreach($mb_words as $uv)
							  @if($uv->phase_id == 2)
								@if(substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'doc' || substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'docx')
								  <li style='width:150px;float:left;'>
									<a href="#" onClick="doword('{{ URL(''). '/' . $uv->site_url }}')">
									  <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
									</a>
									<br>
									<span>{{ $uv->mb_name }}</span>
									<br>
									  <a href="{{ '/' . $uv->site_url }}" download="{{ $uv->mb_name }}" >下载</a>
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
                      <tr>
                        <th colspan="5" style='text-align: center'>
                          <h3>附件上传</h3>
                          <span style='color:red;font-size:12px;'>一次只能上传一个格式</span>
                        </th>
                      </tr>
                      <tr>
                        <td colspan="5">
                          <div class="file-loading">
                              <input id="file-1" name='business_license[]' multiple="multiple"  type="file" class="file" data-upload-url="#">
                          </div>
                        </td>
                      </tr>
			</table>
  
          <div class="modal-footer">
              <a href="#rzdbyewspb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
			   上一步
              </a>
              <button type="submit" class="btn btn-primary" onclick="save(this)">
               更新
              </button>
              <span style='color:red;font-size:14px;'>(更数据可修改)</span> 
              <button type="submit" class="btn btn-success" onclick="ok(this)">
                完成
              </button>
              <span style='color:red;font-size:14px;'>(进入下一阶段)</span>
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
</form>
@elseif($bqjzdc_data['table_status'] == 1)
<form action="" method='POST' enctype="multipart/form-data">
      {{ csrf_field() }}   
       <input type="hidden" name='btn_type' value='bqjzdc'/>     
{{-- 面板区 --}}
<div class="tab-content">

    {{-- 融资担保业务审批表 --}}
    <div role="tabpanel" class="tab-pane active" id="rzdbyewspb">
      <div class="form-group">
          
           <div class="modal-body">           
          <table class="table table-striped table-bordered table-hover">
            <tr>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">客户名称</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-building" aria-hidden="true">&nbsp;&nbsp;客户</i></div>
                          <input type="text" name='company_name' class="form-control" id="exampleInputAmount" value='{{ $company->company_name }}'maxlength="20">
                      </div>
                  </div>
                </fieldset>
              </td>
              <td style='width:180px;'>
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
              <td style='width:240px;'>
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
                        <label class="sr-only" for="exampleInputAmount">经营范围</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-star-o" aria-hidden="true">&nbsp;&nbsp;经营范围</i></div>
                            <input type="text" name='registered_address' class="form-control" id="exampleInputAmount" value='{{ $company->frame }}' maxlength='50'>
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
                          <div class="input-group-addon"><i class="fa fa-location-arrow" aria-hidden="true">&nbsp;&nbsp;用途</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount"  value='{{ $phasetable['loans_use'] }}' maxlength='50'>
                      </div>
                  </div>
                </fieldset>
              </td>    
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">贷款人</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true">&nbsp;&nbsp;贷款人</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $company->legal_person }}' maxlength='50'>
                      </div>
                  </div>
                </fieldset>
              </td>    
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">担保期限</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true">&nbsp;&nbsp;担保期限</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['deadline'] }}' maxlength='2'>
                      </div>
                  </div>
                </fieldset>
              </td>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">担保费率</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-percent" aria-hidden="true">&nbsp;&nbsp;担保费率</i></div>
                          <input type="text" name='business_address' class="form-control" id="exampleInputAmount" value='{{ $phasetable['rate'] }}' maxlength='3'>
                      </div>
                  </div>
                </fieldset>
              </td>
            </tr>
            <tr>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">成立时间</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;成立时间</i></div>
                            <input type="text" name='company_machin' class="form-control" id="exampleInputAmount" value='{{ $company->establish_time }}' maxlength='13'>
                        </div>
                    </div>
                </fieldset>
              </td>
              <td colspan="2" style='width:500px;'>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">企业划型</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-map" aria-hidden="true">&nbsp;&nbsp;企业划型</i></div>
                          <input type="text" name='company_machin' class="form-control" id="exampleInputAmount" value='{{ $company->company_type }}' maxlength='13'>
                      </div>
                  </div>
                </fieldset>
              </td>
              <td>
                <fieldset disabled>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputAmount">所属行业</label>
                  <div class="input-group">
                      <div class="input-group-addon"><i class="fa fa-share" aria-hidden="true">&nbsp;&nbsp;所属行业</i></div>
                      <select name='sshy' class="form-control">
                        <option value='机构组织'>机构组织</option>
                        <option value='农林牧渔'>农林牧渔</option>
                        <option value='医药卫生'>医药卫生</option>
                        <option value='建筑建材'>建筑建材</option>
                        <option value='冶金矿产'>冶金矿产</option>
                      </select>
                  </div>
                </div>
              </fieldset>
              </td>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">担保金额</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;担保金额</i></div>
                          <input type="text" name='company_machin' class="form-control" id="exampleInputAmount" value='{{ $phasetable['loans_money'] }}' maxlength='13'>
                      </div>
                  </div>
              </fieldset>
              </td>
            </tr>
            <tr>
              <td colspan="2" style='width:500px;'>
                <fieldset disabled>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">金融机构</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-building-o" aria-hidden="true">&nbsp;&nbsp;金融机构</i></div>
                            <input type="text" name='jrjg_name' class="form-control" id="exampleInputAmount" placeholder="金融机构名称" value='{{ $bqjzdc_data['jrjg_name'] }}' maxlength='50'>
                        </div>
                    </div>
                </fieldset>
              </td>
              <td>
                <fieldset disabled>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">贷款种类</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true">&nbsp;&nbsp;贷款种类</i></div>
                        <select name='dklx' class="form-control">
                          <option value='RMB'>RMB</option>
                          <option value='美元'>美元</option>
                          <option value='日元'>日元</option>
                        </select>
                        <input type="hidden" id='hbIdval' value='{{ $bqjzdc_data['dklx'] }}'>

                    </div>
                  </div>
                </fieldset>
              </td>
              <td>
                <fieldset disabled>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">负债总额</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;负债总额</i></div>
                            <input type="text" name='fzze' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['fzze'] }}' maxlength='50'>
                        </div>
                    </div>
                </fieldset>
              </td>
              <td>
                <fieldset disabled>
                    <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">本公司在保余额</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-jpy" aria-hidden="true">&nbsp;&nbsp;在保余额</i></div>
                            <input type="text" name='dbye' class="form-control" id="exampleInputAmount"  value='{{ $bqjzdc_data['dbye'] }}' maxlength='50'>
                        </div>
                    </div>
                </fieldset>
              </td>
            </tr>
            <tr>
              <td>
                <fieldset disabled>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">贷款利率</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-percent" aria-hidden="true">&nbsp;&nbsp;贷款利率</i></div>
                            <input type="text" name='dkln' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['dkln'] }}' maxlength='50'>
                        </div>
                    </div>
                </fieldset>
              </td>
              <td>
                <fieldset disabled>
                <div class="form-group">
                        <label class="sr-only" for="exampleInputAmount">贷款期限</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true">&nbsp;&nbsp;贷款期限</i></div>
                            <input type="text" name='dkqx' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['dkqx'] }}' maxlength='50'>
                        </div>
                    </div>
                </fieldset>
              </td>
              <td>
                <fieldset disabled>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">所属园区</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-bars" aria-hidden="true">&nbsp;&nbsp;所属园区</i></div>
                        <select name='ssyq' class="form-control">
                          <option value='一园区'>一园区</option>
                          <option value='二园区'>二园区</option>
                          <option value='三园区'>三园区</option>
                        </select>
                        <input type="hidden" id='vaId' value='{{$bqjzdc_data['ssyq']}}'>
                    </div>
                  </div>
                </fieldset>
              </td>
              <td>
                <fieldset disabled>
                  <div class="form-group">
                          <label class="sr-only" for="exampleInputAmount">调查人</label>
                          <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-male" aria-hidden="true">&nbsp;&nbsp;调查人</i></div>
                              <input type="text" name='users_name' class="form-control" id="exampleInputAmount" value='{{ $bqjzdc_data['users_name'] }}' maxlength='13'>
                          </div>
                      </div>
                </fieldset>
                </td>
                <td>
                  <fieldset disabled>
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputAmount">时间</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true">&nbsp;&nbsp;调查时间</i></div>
                          
                              <input type="text" name='dc_time' id='sandbox-container' class='form-control' data-date-format='yyyy-mm-dd' value="{{ $bqjzdc_data['dc_time'] }}">
                          
                    </div>
                  </div>
                </fieldset>
                </td>
              </tr>
              <tr>
                <td colspan="5" rowspan='2' style='width:500px;height:80px;'>
                  <fieldset disabled>
                    <textarea name='dc_yijian' style='width:100%;height:100%;'>{{ $bqjzdc_data['dc_yijian'] }}</textarea>
                  </fieldset>
                </td>
              </tr>
            </table>
          </div>
            <div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">
			  取消
			  </button> 
			  <a href="#fdbwr" class="btn btn-primary" style='background-color:'';' role="tab" onclick="next(this)" data-toggle="tab">
			  下一步
			  </a>                        
            </div>
   
    </div>
    <hr>
  </div>
  {{-- 反担保物人 --}}
  <div role="tabpanel" class="tab-pane" id="fdbwr">
    <div class="form-group">
         <fieldset disabled><textarea name='remark'  style='width:95%;height:300px;margin:15px 2.5%;'>{{ $bqjzdc_data['remark'] }}</textarea></fieldset>
			<table class="table table-striped table-bordered table-hover">
                       <tr id="all_box2" style="display:none;" >
                          <th colspan="5" style='text-align: center'>已上传附件列表</th>
                        </tr>
                        <tr id="img_box2" style="display:none;" >
                          <td colspan="5">
                            <div class="boss">
                              <div class="bigimg">
                                <img src="" height="350" width="350" id="spic2"> 
                              </div>
                              <div class="xia"> <a class="prev"><</a> <a class="next">></a>
                                <div class="items2">
                                  <ul >
								  <?php $isshow_img = false;$isshow_doc = false; ?>
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 2)
                                        @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'jpg' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'png')
                                          <li>
                                            <a target="_blank"  href="{{ $uv->site_url }}">
                                              <img src="{{ $uv->site_url }}" id='imgsrc2' height="56" width="56">
                                            </a>
                                            <br>
                                            <span>{{ $uv->file_name }}</span>
                                            <br> 
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->file_name }}" >下载</a>
											</li>
											@if(!$isshow_img)
											<script type="text/javascript" >
												document.getElementById("all_box2").style.display="";
												document.getElementById("img_box2").style.display="";
											</script>
											<?php $isshow_img = true; ?>
											@endif
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                              <script>
                                var src = document.getElementById('imgsrc2').src;
                                document.getElementById("spic2").src=src;
                              </script>
                          </td>
                        </tr>
                        <tr id="docx_box2" style="display:none;" >
                          <td colspan="5">
                            <div class="boss">
                              <div class="xia" style='width:1100px;'> 
                                <a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
                                <a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
                                <div class="items" style='height:120px;width:95%;'>
                                  <ul style="height:68px;top:50%;margin-top:-34px;">
                                    @foreach($url as $uv)
                                      @if($uv->phases_id == 2)
                                        @if(substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'doc' || substr($uv->file_name,strpos($uv->file_name,'.')+1) == 'docx')
                                          <li style='width:150px;float:left;'>
                                            <a href="#" onClick="doword('{{ URL('') . $uv->site_url }}')">
                                              <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                            <br>
                                            <span>{{ $uv->file_name }}</span>
                                            <br>
                                              <a href="{{ $uv->site_url }}" download="{{ $uv->file_name }}" >下载</a>
                                          </li>
											@if(!$isshow_doc)
											<script type="text/javascript" >
												document.getElementById("all_box2").style.display="";
												document.getElementById("docx_box2").style.display="";
											</script>
											<?php $isshow_doc = true; ?>
											@endif
                                        @endif
                                      @endif
                                    @endforeach
                                  </ul>
                                </div>
                                </div>
                              </div>
                          </td>
                        </tr>
				<tr>
				  <th colspan="5" style='text-align: center'>可打印模板</th>
				</tr>
				<tr>
				  <td colspan="5">
					<div class="boss">
					  <div class="xia" style='width:1100px;'> 
						<a class="prev" style='width:20px;height:120px;line-height: 120px;'><</a> 
						<a class="next" style='width:20px;height:120px;line-height: 120px;'>></a>
						<div class="items" style='height:120px;width:95%; style="display:relative;'>
						  <ul style="display:absolute;height:68px;top:50%;margin-top:-34px;" >
							@foreach($mb_words as $uv)
							  @if($uv->phase_id == 2)
								@if(substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'doc' || substr($uv->site_url,strpos($uv->site_url,'.')+1) == 'docx')
								  <li style='width:150px;float:left;'>
									<a href="#" onClick="doword('{{ URL('') . '/'. $uv->site_url }}')">
									  <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i>
									</a>
									<br>
									<span>{{ $uv->mb_name }}</span>
									<br>
									  <a href="{{ '/' . $uv->site_url }}" download="{{ $uv->mb_name }}" >下载</a>
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
              <a href="#rzdbyewspb" class="btn btn-primary" style='background-color:'';' role="tab" onclick="last(this)" data-toggle="tab">
                        上一步
              </a>
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
</form>     
@endif     
  {{-- 模态框结束--}}
    </div>
  </div>
</div>
<script>
    // 日期选择器设置
    $('#sandbox-bqjzdc').datepicker({ 
									  language: "zh-CN",
									  orientation: "top right",
									  autoclose: true,
									  startview: 2,
									  todayHighlight: true
									});
</script>