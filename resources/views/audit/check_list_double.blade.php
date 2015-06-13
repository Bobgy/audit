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
            <a href="check_list_history" id="history_btn"> 历史 </a>
          </div>
        </div>

        <!-- 显示内容 -->
        <div class="column8">
         

          <!-- 二次审核 -->
          <div id="double_check" class="tab">
            <div class="title">
              <div class="head"></div>
              <div class="text">
                账单列表
              </div>
            </div>
            <div class="crossLine"></div>
            <div class="subrow">
              <!-- one record -->
              <form class="record">
                <div class="column_8_noborder">
                  <div class="content_full">
                    <div class="content_full_row blue_context">
                      订单号: 100000
                    </div>
                    <div class="crossLine"></div>
                    <div class="content_row">
                      买家: 100000000
                    </div>
                    <div class="content_row">
                      卖家: 100001000
                    </div>
                    <div class="content_row blue_context">
                      交易时间: 100000000
                    </div>
                    <div class="crossLine"></div>
                    <div class="content_row blue_context">
                      单价: 100.00
                    </div>
                    <div class="content_row blue_context">
                      数量: 2123123
                    </div>
                  </div>
                </div>
                <div class="column_2_noborder">
                  <div class="big_btn">
                    <input type="submit" value="审核"></input>
                  </div>
                </div>
              </form>
              <div class="crossLine"></div>
              <!-- one record end-->
              <!-- Page -->
              <ul id="pagination-flickr">
                <li class="previous-off">«Previous</li>
                <li class="active">1</li>
                <li><a href="?page=2">2</a></li>
                <li><a href="?page=3">3</a></li>
                <li><a href="?page=4">4</a></li>
                <li><a href="?page=5">5</a></li>
                <li><a href="?page=6">6</a></li>
                <li><a href="?page=7">7</a></li>
                <li class="next"><a href="?page=2">Next »</a></li>
              </ul>
              <!-- Page end -->
            </div>
          </div>
          <!-- 二次审核  -->

          

        </div>
        <!-- 显示内容 结束 -->
      </div>
    </div>
    <!-- Main container End-->

@endsection

