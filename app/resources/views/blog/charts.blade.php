@extends('layouts.app')
@section('content')
<div class="clearfix"></div>
<div class="parallax page_header"  data-parallax-bg-image="{{asset('assets/img/ex.jpg')}}" data-parallax-direction="left">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Cryto Exchange</h3>
            </div>
        </div>
    </div>
</div>
 <div class="page-content">
                <div class="container">
                    <div class="row">
                     <main class="col-xs-12 col-sm-12 col-md-12 content p_r_40">
  <div class="full table-responsive" id="coinstable">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>Symbol</th>
                              <th>Name</th>
                              <th>USD</th>
                              <th>Change 1h</th>
                              <th>Change 12h</th>
                              <th>Change 24h</th>
                           </tr>
                        </thead>
                        <tbody>
                        @foreach ($coins as $cc )
                           <tr class="active_table" >
                              <td>{{strtoupper($cc['symbol'])}}</td>
                              <td>{{$cc['name']}}</td> 
                              <td>{{number_format($cc['current_price'])}}</td>
                            @if($cc['price_change_percentage_24h'] > 0)  <td style="color:lightgreen">{{$cc['price_change_percentage_24h']}}%</td> @else
                            <td style="color:red">{{$cc['price_change_percentage_24h']}}%</td>
                            @endif

                             @if($cc['market_cap_change_percentage_24h'] > 0)  <td style="color:lightgreen">{{$cc['market_cap_change_percentage_24h']}}%</td> @else
                            <td style="color:red">{{$cc['market_cap_change_percentage_24h']}}%</td>
                            @endif

                             @if($cc['market_cap_change_percentage_24h'] > 0)  <td style="color:lightgreen">{{$cc['market_cap_change_percentage_24h']}}%</td> @else
                            <td style="color:red">{{$cc['market_cap_change_percentage_24h']}}%</td>
                            @endif
                           </tr>
                          @endforeach
                         
                        </tbody>
                     </table>
                  </div>
               </main>
    </div>
</div>
</div>
@endsection
@section('script')
<script>
setInterval(function(){
  $("#coinstable").load(location.href + " #coinstable");
}, 3000);
</script>
@endsection