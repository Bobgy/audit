@extends('audit.navbar')

@section('content')

<div style="height:80px"></div>

<!-- Main container Begin-->
<div class="container">
  <div class="row">
    <div class="flowColumn2">
      <div class="select">
        <a href="check_list" id="unprocessed_check_btn"> 未处理账单 </a>
        <div class="crossLine"></div>
        <a href="check_list_double" id="double_check_btn"> 二次审核 </a>
        <div class="crossLine"></div>
        <a href="check_list_error" id="error_btn"> 异常账单 </a>
        <div class="crossLine"></div>
        <a href="check_list_history" id="history_btn"> 历史 </a>
      </div>
    </div>

    @include('audit.list')
    
  </div>
</div>
<!-- Main container End-->

@endsection
