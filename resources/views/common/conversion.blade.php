@extends((Auth::user()->role_id==1?'layouts.admin':'layouts.client'))



@section('content')
    <div id="Spinner" class="row">
        <div class="col-md-12 text-center">
            <i class="fa fa-spinner fa-spin fa-4x"></i>
        </div>
    </div>

    <div id="content" style="display: none;" class="row">
        <div class="col-md-12">
            <h4>To USD</h4>
        </div>
        <div class="col-md-8">
            <input id="amount" placeholder="Amount" class="form-control" type="number">
        </div>

        <div style="margin-top: 16px;" class="col-md-4">
            <select  class="form-control" id="currency">
                <option value="BTC" selected>BTC</option>
                <option value="LTC">LTC</option>
                <option value="ETH">ETH</option>
            </select>
        </div>
        <br>

        <div class="col-md-6">
            <input readonly id="amountInUSD" placeholder="Amount in $" class="form-control" type="text">
        </div>
        <hr>
        <br>

        <div class="col-md-12">
            <h4>From USD To SCR</h4>
        </div>

        <div class="col-md-6">
            <input id="amountUSD" placeholder="Amount in $" class="form-control" type="number">
        </div>
        <div class="col-md-6">
            <input readonly id="amountSCR" placeholder="Amount in SCR" class="form-control" type="text">
        </div>


    </div>

    <style>
        .form-control{
            border: 2px solid #d3e0f3;
            height: 44px;
            margin-top: 16px;
        }
    </style>

@endsection



@section('scripts')
    <script>
        $(document).ready(function () {
           /* var btcResult;
            var ethResult;
            var ltcResult;

           var BTC =$.ajax({
               method:"GET",
               url:"https://rest.coinapi.io/v1/exchangerate/BTC/USD",
               beforeSend: function(xhr){xhr.setRequestHeader('X-CoinAPI-Key', '67D7302A-FA56-47C9-8453-459DB8C1F712');}
           }) ;

           BTC.done(function (msg) {
               btcResult=msg;
           });

            var ELT =$.ajax({
                method:"GET",
                url:"https://rest.coinapi.io/v1/exchangerate/ETH/USD",
                beforeSend: function(xhr){xhr.setRequestHeader('X-CoinAPI-Key', '67D7302A-FA56-47C9-8453-459DB8C1F712');}
            }) ;

            ELT.done(function (msg) {
                ethResult=msg;
            });

            var LTC =$.ajax({
                method:"GET",
                url:"https://rest.coinapi.io/v1/exchangerate/LTC/USD",
                beforeSend: function(xhr){xhr.setRequestHeader('X-CoinAPI-Key', '67D7302A-FA56-47C9-8453-459DB8C1F712');}
            }) ;

            LTC.done(function (msg) {
                console.log(msg);
                ltcResult=msg;

                $('#content').show();
                $('#Spinner').hide();
            });*/
           var data ={};

            var call =$.ajax({
                method:"GET",
                url:"https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LTC&tsyms=BTC,USD,EUR&api_key=0d2d9cf10b49288acc3eb3ea183762943e7c38801b822356cea92eeb3907fed8",

            }) ;

            call.done(function (msg) {
                data=msg;
                console.log(data);
                $('#content').show();
                $('#Spinner').hide();
            });



            $('#amountUSD').on('keyup',function () {
               if($(this).val()!=''){
                   var amount=parseInt($(this).val());
                   var result=amount*100;
                   $('#amountSCR').val(result);
               }
               else $('#amountSCR').val(0);

            });


            $('#amount').on('keyup',function () {
                if($(this).val()!=''){
                    var amount=parseInt($(this).val());
                    var exchange=0;
                    if($('#currency').val()==='BTC')
                        //exchange=btcResult.rate;
                        exchange=data.BTC.USD;
                    if($('#currency').val()==='ETH')
                        //exchange=ethResult.rate;
                        exchange=data.ETH.USD;
                    if($('#currency').val()==='LTC')
                        //exchange=ltcResult.rate;
                        exchange=data.LTC.USD;
                    var result=amount*exchange;
                    $('#amountInUSD').val('$'+parseFloat(result).toFixed(2));
                }
                else $('#amountInUSD').val(0);

            });


            $('#currency').change(function () {
                if($('#amount').val()!=''){
                    var amount=parseInt($('#amount').val());
                    var exchange=0;
                    if($('#currency').val()==='BTC')
                    //exchange=btcResult.rate;
                        exchange=data.BTC.USD;
                    if($('#currency').val()==='ETH')
                    //exchange=ethResult.rate;
                        exchange=data.ETH.USD;
                    if($('#currency').val()==='LTC')
                    //exchange=ltcResult.rate;
                        exchange=data.LTC.USD;
                    var result=amount*exchange;
                    $('#amountInUSD').val('$'+parseFloat(result).toFixed(2));
                }
                else $('#amountInUSD').val(0);

            });
        });
    </script>
@endsection