@extends('audit.navbar')
@section('content')
    <div style="height:80px"></div>

    <!-- Main container Begin-->
    <div class="container">
      <div class="row">
        <div class="flowColumn2">
          <div class="select">
            <a id="profile_btn"> 个人主页 </a>
            <div class="crossLine"></div>
            <a id="change_pwd_btn"> 修改密码 </a>
          </div>
        </div>
        <!-- 显示内容 -->
        <div class="column8">
          <!-- 个人信息 -->
          <div id="profile" class="tab">
            <div class="title">
              <div class="head"></div>
              <div class="text">
                个人信息
              </div>
            </div>
            <div class="crossLine"></div>
            <div class="row">
              <div class="column_4">
                <div class="avatar"></div>
                <div class="content">
                  <div id="user_real_name" class="content_row">

                  </div>
                  <div id="user_id" class="content_row">

                  </div>
                  <div class="crossLine"></div>
                  <div id="user_kpi" class="content_row" style="color: #FF0000">
                    绩效:
                  </div>
                </div>
              </div>

              <div class="column_6">
                <div class="content">
                  <div id="processed" class="content_row">
                    处理订单数：1000
                  </div>
                  <div class="crossLine"></div>
                  <div id="unprocessed" class="content_row">
                    待处理订单数：200
                  </div>
                  <div class="crossLine"></div>
                  <div id="need_double" class="content_row">
                    需二次审核：200
                  </div>
                </div>
                <div class="content">
                  <div id="processed_month" class="content_row">
                    本月处理订单数：1000
                  </div>
                  <div class="crossLine"></div>
                  <div id="processed_day" class="content_row">
                    今日处理订单数：100
                  </div>
                  <div class="crossLine"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- 个人信息结束 -->

          <!-- 修改密码 -->
          <div id="change_pwd" class="tab">
            <div class="title">
              <div class="head">
              </div>
              <div class="text">
                修改密码
              </div>
            </div>
            <div class="crossLine"></div>
            <div class="row">
              <div class="column4"></div>
              <div class="column6"></div>
            </div>
          </div>
          <!-- 修改密码结束　-->
        </div>
        <!-- 显示内容 结束 -->
      </div>
    </div>
    <!-- Main container End-->

@section('script')

<script>
  $('#profile').show();
  $('#change_pwd').hide();
  $('#profile_btn').click(function () {
    $('#profile').show();
    $('#change_pwd').hide();
  });
  $('#change_pwd_btn').click(function () {
    self.location = '/audit/fetch'
  });
</script>

<!-- 以下请添加后端得到的数据 -->

<script>
  $("#user_real_name").html("{{$real_name}}");
  $("#user_id").html("{{$user_id}}");
  $("#user_kpi").html("绩效: 5.0");

  $("#processed").html("处理订单: 1200");
  $("#unprocessed").html("未处理订单: 1200");
  $("#need_double").html("需二次审核: 1200");
  $("#processed_month").html("本月处理订单: 1200");
  $("#processed_day").html("本日处理订单: 1200");

</script>

@endsection
