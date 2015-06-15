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
                  <input type="text" name="bill_id" value="" placeholder="订单号" class="form-control" style="border:none; background-color:#D4F3C6">
                  <div class="crossLine"></div>
                  <input type="text" name="buyer_id" value="" placeholder="买家ID" class="form-control" style="border:none;">
                  <div class="crossLine"></div>
                  <input type="text" name="seller_id" value="" placeholder="卖家ID" class="form-control" style="border:none; background-color:#D4F3C6">
                  <div class="crossLine"></div>
                  <input type="text" name="begin_date" value="" placeholder="起始时间" class="form-control" style="border:none;">
                  <div class="crossLine"></div>
                  <input type="text" name="end_date" value="" placeholder="终止时间" class="form-control" style="border:none; background-color:#D4F3C6">
                </div>
                <div class="crossLine"></div>
                <div class="long_btn">
                  <input type="submit" value="搜索"></input>
                </div>
              </div>
            </form>
          </div>
        </div>

        @include('audit.list');

      </div>
    </div>
    <!-- Main container End-->

@endsection
