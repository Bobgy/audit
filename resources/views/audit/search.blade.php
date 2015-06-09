@extends('audit.navbar')
@section('content')

    <div style="height:80px"></div>

    <!-- Main container Begin-->
    <div class="container">
      <div class="row">
        <div class="flowColumn2">
          <div class="select">
            <form>
              <div id="unprocessed_check" class="tab">
                <div class="title">
                  <div class="head"></div>
                  <div class="text">
                    搜索条件
                  </div>
                </div>
                <div class="crossLine"></div>
                <div class="subrow">
                  <input type="text" value="" placeholder="订单号" class="form-control" style="border:none; background-color:#D4F3C6">
                  <div class="crossLine"></div>
                  <input type="text" value="" placeholder="买家ID" class="form-control" style="border:none;">
                  <div class="crossLine"></div>
                  <input type="text" value="" placeholder="卖家ID" class="form-control" style="border:none; background-color:#D4F3C6">
                  <div class="crossLine"></div>
                  <input type="text" value="" placeholder="起始时间" class="form-control" style="border:none;">
                  <div class="crossLine"></div>
                  <input type="text" value="" placeholder="终止时间" class="form-control" style="border:none; background-color:#D4F3C6">
                </div>
                <div class="crossLine"></div>
                <div class="long_btn">
                  <input type="submit" value="搜索"></input>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- 显示内容 -->
        <div class="column8">
          <!-- 搜索结果 -->
          <div id="unprocessed_check" class="tab">
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
                      卖家: 100000000
                    </div>
                    <div class="content_row blue_context">
                      交易时间: 100000000
                    </div>
                    <div class="crossLine"></div>
                    <div class="content_row blue_context">
                      单价: 100.00
                    </div>
                    <div class="content_row blue_context">
                      数量: 2
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
                      卖家: 100000000
                    </div>
                    <div class="content_row blue_context">
                      交易时间: 100000000
                    </div>
                    <div class="crossLine"></div>
                    <div class="content_row blue_context">
                      单价: 100.00
                    </div>
                    <div class="content_row blue_context">
                      数量: 2
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
          <!-- 搜索结果 End -->
        </div>
        <!-- 显示内容 结束 -->
      </div>
    </div>
    <!-- Main container End-->

@endsection
