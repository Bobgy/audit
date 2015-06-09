@extends('audit.navbar')

@section('content')

    <div style="height:80px"></div>

    <!-- Main container Begin-->
    <div class="container">
      <div class="row">
        <div class="flowColumn2">
          <div class="select">
            <a id="pass_btn"> 通过 </a>
            <div class="crossLine"></div>
            <a id="error_btn"> 报错 </a>
            <div class="crossLine"></div>
            <a id="back_btn"> 返回 </a>
          </div>
        </div>
        <!-- 显示内容 -->
        <div class="column4">
          <div class="tab">
            <!-- 订单 -->
            <div class="title">
              <div class="head"></div>
              <div class="text">
                订单号
              </div>
            </div>
            <div class="crossLine9"></div>
            <div class="subrow">
              <div class="content_row">
                10000
              </div>
            </div>
            <div class="crossLine"></div>

            <!-- 物品ID -->
            <div class="title">
              <div class="head"></div>
              <div class="text">
                物品ID
              </div>
            </div>
            <div class="crossLine9"></div>
            <div class="subrow">
              <div class="content_row">
                10001
              </div>
            </div>
            <div class="crossLine"></div>

            <!-- 物品单价 -->
            <div class="title">
              <div class="head"></div>
              <div class="text">
                物品单价
              </div>
            </div>
            <div class="crossLine9"></div>
            <div class="subrow">
              <div class="content_row">
                998.00
              </div>
            </div>
            <div class="crossLine"></div>

            <!-- 个数 -->
            <div class="title">
              <div class="head"></div>
              <div class="text">
                交易个数
              </div>
            </div>
            <div class="crossLine9"></div>
            <div class="subrow">
              <div class="content_row">
                1
              </div>
            </div>

          </div>

        </div>

        <div class="column4r">
          <div class="tab">
             <!-- 买家ID -->
            <div class="title">
              <div class="head"></div>
              <div class="text">
                买家ID
              </div>
            </div>
            <div class="crossLine9"></div>
            <div class="subrow">
              <div class="content_row">
                10000
              </div>
            </div>
            <div class="crossLine"></div>

            <!-- 卖家ID -->
            <div class="title">
              <div class="head"></div>
              <div class="text">
                卖家ID
              </div>
            </div>
            <div class="crossLine9"></div>
            <div class="subrow">
              <div class="content_row">
                10001
              </div>
            </div>
            <div class="crossLine"></div>

            <!-- 交易时间 -->
            <div class="title">
              <div class="head"></div>
              <div class="text">
                交易时间
              </div>
            </div>
            <div class="crossLine9"></div>
            <div class="subrow">
              <div class="content_row">
                2015.6.6
              </div>
            </div>
            <div class="crossLine"></div>

            <!-- 总金额 -->
            <div class="title">
              <div class="head"></div>
              <div class="text">
                总金额
              </div>
            </div>
            <div class="crossLine9"></div>
            <div class="subrow">
              <div class="content_row">
                998.00
              </div>
            </div>

          </div>
        </div>
        <!-- 显示内容 结束 -->
      </div>
    </div>
    <!-- Main container End-->

@endsection
