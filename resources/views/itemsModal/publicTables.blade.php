    {{-- 客户名称 --}}
    <input type="hidden" name='company_name' value='{{ $company->company_name }}'>
    {{-- 反担保措施 --}}
    <input type="hidden" name='measure' value='{{ $phasetable['measure'] }}'>
    {{-- 法人 --}}
    <input type="hidden"  name='legal_person' value='{{ $company->legal_person }}'>
    {{-- 注册资本 --}}
    <input type="hidden" name='registered_capital' value="{{ $company->registered_capital }}">
    {{-- 经营场所 --}}
    <input type="hidden" name='business_address'  value='{{ $company->business_address}}'>
    {{-- 经营情况 --}}
    <input type="hidden" name='state_operation' value='{{ $company->state_operation }}'>
    {{-- 经营项目 --}}
     <input type="hidden" name='frame' value='{{ $company->frame }}'>
    {{-- 成立时间 --}}
    <input type="hidden" name='establish_time' value='{{ $company->establish_time }}'>
    {{-- 金融机构负债总额 --}}
     <input type="hidden" name='fzze' value='{{ $bqjzdc_data['fzze'] }}'>
     {{-- 金融机构名称 --}}
     <input type="hidden" name='jrjg_name' value='{{ $bqjzdc_data['jrjg_name'] }}'>
    {{-- 本公司在保余额 --}}
    <input type="hidden" name='dbye' value='{{ $bqjzdc_data['dbye'] }}'>
    {{-- 贷款利率 --}}
    <input type="hidden" name='dkln' value='{{ $bqjzdc_data['dkln'] }}'>
    {{-- 贷款人 --}}
    <input type="hidden" name='borrower'  value='{{ $company->legal_person }}' >
    {{-- 贷款期限 --}}
     <input type="hidden" name='dkqx' value='{{ $bqjzdc_data['dkqx'] }}'>
     {{-- 担保金额 --}}
     <input type="hidden" name='loans_money' value='{{ $phasetable['loans_money'] }}'>
     {{-- 担保利率 --}}
     <input type="hidden" name='rate' value='{{ $phasetable['rate'] }}'>
     {{-- 担保期限 --}}
     <input type="hidden" name='deadline' value='{{ $phasetable['deadline'] }}'>
    {{-- 贷款种类 --}}
    <input type="hidden" name='dklx' value='{{ $bqjzdc_data['dklx'] }}'>
    {{-- 所属园区 --}}
    <input type="hidden" name="ssyq" value='{{$bqjzdc_data['ssyq']}}'>
    {{-- 所属行业 --}}
    <input type="hidden" name='sshy' value='{{ $bqjzdc_data['sshy'] }}'>
    {{-- 企业划型 --}}
    <input type="hidden" name='company_machin' value='{{ $company->company_type }}'>
    {{-- 担保人意见 --}}
    <input type="hidden"  name='dc_yijian' value='{{ $bqjzdc_data['dc_yijian'] }}'>
    {{-- 调查人 --}}
    <input type="hidden" name='users_name' value='{{ $bqjzdc_data['users_name'] }}'>
    {{-- 调查时间 --}}
    <input type="hidden" name='dc_time' value='{{ $bqjzdc_data['dc_time'] }}'> 