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
              状态: {{ App\Bill::formatState($bill->audit_state) }}
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
        <li id="start" class="previous"><a href="?page=1"> <<< </a></li>
        <li id="pre" class="previous-off"> < Previous </li>
        <li id="p1" class="active">1</li>
        <li id="p2"><a href="?page=2">2</a></li>
        <li id="p3"><a href="?page=3">3</a></li>
        <li id="p4"><a href="?page=4">4</a></li>
        <li id="p5"><a href="?page=5">5</a></li>
        <li id="p6"><a href="?page=6">6</a></li>
        <li id="p7"><a href="?page=7">7</a></li>
        <li id="next" class="next"><a href="?page=2"> Next > </a></li>
        <li id="end" class="next"><a href="?page=1"> >>> </a></li>
      </ul>
      <!-- Page end -->
      <script src="{{ asset('/lib/Flat-UI-master/dist/js/vendor/jquery.min.js') }}"></script>
      <script>
        var P = {{ $page }};
        var PT = {{ $pageTotal }};
        var base = Div(P, 7) * 7;
        $("#start").html("<a href='?page=" + 1 + "'>  <<< </a>");
        $("#end").html("<a href='?page=" + PT + "'> >>> </a>");
        for (var i = 1; i < 8; i++) {
          var the_id = "#p" + i;
          if (base + i <= PT) {
            $(the_id).removeClass("active");
            $(the_id).html("<a href='?page=" + (base + i) + "'>" + (base + i) + "</a>");
          } else {
            $(the_id).removeClass("active");
            $(the_id).html("");
          }
        }
        var now_id = "#p" + (P + 1 - base);
        $(now_id).addClass("active");
        $(now_id).html(P + 1);

        if (P > 0) {
          $("#pre").removeClass("previous-off");
          $("#pre").addClass("previous");
          $("#pre").html("<a href='?page=" + P + "'> < Previous </a>");
        } else {
          $("#pre").removeClass("previous");
          $("#pre").addClass("previous-off");
          $("#pre").html("< Previous");
        }
        if (P < PT - 1) {
          $("#next").removeClass("next-off");
          $("#next").addClass("next");
          $("#next").html("<a href='?page=" + (P + 2) + "'>Next ></a>");
        } else {
          $("#next").removeClass("next");
          $("#next").addClass("next-off");
          $("#next").html("Next >");
        }
        function Div(exp1, exp2) {
            var n1 = Math.round(exp1); //四舍五入
            var n2 = Math.round(exp2); //四舍五入

            var rslt = n1 / n2; //除

            if (rslt >= 0) {
                rslt = Math.floor(rslt); //返回小于等于原rslt的最大整数。
            }
            else {
                rslt = Math.ceil(rslt); //返回大于等于原rslt的最小整数。
            }

            return rslt;
        }
      </script>
    </div>
  </div>

</div>
