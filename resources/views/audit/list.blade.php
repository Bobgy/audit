<div class="column8">
  <div id="unprocessed_check" class="tab">
    <div class="title">
      <div class="head"></div>
      <div class="text">
        账单列表
      </div>
    </div>
    <div class="crossLine"></div>
    <div class="subrow">
      @foreach ($bills as $bill)
      <!-- one record -->
      <form class="record">
        <div class="column_8_noborder">
          <div class="content_full">
            <div class="content_full_row blue_context">
              订单号: {{ $bill->bill_id }}
            </div>
            <div class="crossLine"></div>
            <div class="content_row">
              买家: {{ $bill->buyer_id }}
            </div>
            <div class="content_row">
              卖家: {{ $bill->seller_id }}
            </div>
            <div class="content_row blue_context">
              交易时间: {{ $bill->date }}
            </div>
            <div class="crossLine"></div>
            <div class="content_row blue_context">
              总价: {{ $bill->amount }}
            </div>
            <div class="content_row blue_context">
              状态: {{ $bill->formatState($bill->audit_state) }}
            </div>
          </div>
        </div>
        <div class="column_2_noborder">
          <div class="big_btn">
            <a href="/audit/check/{{ $bill->bill_id }}"> 查看 </a>
          </div>
        </div>
      </form>
      <div class="crossLine"></div>
      <!-- one record end-->
      @endforeach

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

</div>
