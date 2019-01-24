@extends('layouts.client_new')



@section('content')
    @include('includes.flash')
    <div class="row">

        {{-- @if(Auth::user()->subscribed==0)
         <div class="col-md-12 text-center">
             <a class="btn btn-primary btn-block" href="/client/subscribe"><i class="ti ti-check"></i> Subscribe To Notifications </a>
         </div>

             @else

             <div class="col-md-12 text-center">
                 <a class="btn btn-danger btn-block" href="/client/unsubscribe"><i class="ti ti-face-sad"></i> Unsubscribe To Notifications </a>
             </div>


         @endif--}}





        {{--@if(Auth::user()->address)
            <div style="margin-top: 16px;" class="col-md-12">
            <div class="alert alert-primary">
                <strong>Address :</strong> {{Auth::user()->address->name}}
            </div>
            </div>
        @endif--}}


    </div>

    <div style="margin-top: 16px;" class="row">
        <div class="col-md-6">
            <div class="tile-item tile-primary">
                <div class="tile-bubbles"></div>
                <h6 class="tile-title">SCR BALANCE</h6>
                <h1 class="tile-info">0 SCR</h1>
                <ul class="tile-list-inline">
                    <li>~ ETH</li>
                    <li>~ BTC</li>
                    <li>~ LTC</li>
                    <li>~ XMR</li>
                    <li>~ DASH</li>
                </ul>
            </div>
        </div><!-- .col -->
        <div class="col-md-6">
            <div class="tile-item tile-light">
                <div class="tile-bubbles"></div>
                <h6 class="tile-title">YOUR CONTRIBUTION</h6>
                <ul class="tile-info-list">
                    <li><span>~</span>ETH</li>
                    <li><span>~</span>BTC</li>
                    <li><span>~</span>LTC</li>
                    <li><span>~</span>XMR</li>
                    <li><span>~</span>DASH</li>
                </ul>
            </div>
        </div><!-- .col -->
    </div><!-- .row -->
    <div class="col-xs-12 dashboard-token"><!-- Tokens -->
        <h2 class="user-panel-title">Buy SCR</h2>
        <form action="#">
            <h5 class="user-panel-subtitle">01. Select your payment method</h5>
            <div class="gaps-1x"></div>
            <div class="payment-list token-price">
                <div class="row">
                    <div class="token-price-item">
                        <div class="payment-item">
                            <input class="payment-check" type="radio" id="payeth" name="payOption" value="ETH" checked>
                            <label for="payeth">
                                <div class="payment-icon payment-icon-eth"><img src="{{asset('dashboard/images/icon-ethereum.png')}}" alt="icon"></div>
                                <span class="payment-cur">Ethereum</span>
                            </label>
                            <span></span>
                        </div>
                    </div><!-- .col -->
                    <div class="token-price-item">
                        <div class="payment-item">
                            <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="LTC">
                            <label for="paylightcoin">
                                <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="{{asset('dashboard/images/icon-lightcoin.png')}}" alt="icon"></div>
                                <span class="payment-cur">Litecoin</span>
                            </label>
                            <span></span>
                        </div>
                    </div><!-- .col -->
                    <div class="token-price-item">
                        <div class="payment-item">
                            <input class="payment-check" type="radio" id="paybtc" name="payOption" value="BTC">
                            <label for="paybtc">
                                <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-btc"></em></div>
                                <span class="payment-cur">Bitcoin</span>
                            </label>
                            <span></span>
                        </div>
                    </div><!-- .col -->
                    {{--<div class="col-md-3 col-sm-6">
                        <div class="payment-item">
                            <input class="payment-check" type="radio" id="payusd" name="payOption" value="USD">
                            <label for="payusd">
                                <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                <span class="payment-cur">US Dollar</span>
                            </label>
                            <span></span>
                        </div>
                    </div><!-- .col -->--}}
                    <div class="token-price-item">
                        <div class="payment-item">
                            <input class="payment-check" type="radio" id="paymonero" name="payOption" value="MON">
                            <label for="paymonero">
                                <div class="payment-icon payment-icon-usd"><em class="payment-icon pay-custom-icon pay-monero-icon"></em></div>
                                <span class="payment-cur">Monero</span>
                            </label>
                            <span></span>
                        </div>
                    </div><!-- .col -->
                    <div class="token-price-item">
                        <div class="payment-item">
                            <input class="payment-check" type="radio" id="paydash" name="payOption" value="DAS">
                            <label for="paydash">
                                <div class="payment-icon payment-icon-usd"><em class="payment-icon pay-custom-icon pay-dash-icon"></em></div>
                                <span class="payment-cur">Dash</span>
                            </label>
                            <span></span>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .payment-list -->
            <div class="gaps-1x"></div>
            <h5 class="user-panel-subtitle">02. Calculate the price of the amount of SCR you would like to purchase</h5>
            <p></p>
            <div class="gaps-1x"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="payment-calculator">
                        <div class="payment-get">
                            <label for="paymentGet">SCR to Purchase</label>
                            <div class="payment-input">
                                <input class="input-bordered" type="text" id="paymentGet" value="0">
                                <span class="payment-get-cur payment-cal-cur">SCR</span>
                            </div>
                        </div>
                        <em class="ti ti-exchange-vertical"></em>
                        <div class="payment-from">
                            <label for="paymentFrom">Payment Amount</label>
                            <div class="payment-input">
                                <input class="input-bordered" type="text" id="paymentFrom" value="0">
                                <span class="payment-from-cur payment-cal-cur">usd</span>
                            </div>
                        </div>
                    </div>
                    <div class="gaps-2x d-md-none"></div>
                </div><!-- .col -->
                <div class="col-md-4">

                </div>
                <div class="gaps-1x d-md-none"></div>
            </div><!-- .col -->
            <!--</div> .row -->
    <div class="gaps-1x"></div>
    <div class="payment-calculator-note"><i class="fas fa-info-circle"></i>The calculator helps you to convert required currency to SCR.</div>
    <div class="gaps-3x"></div>

    <a href="#" class="btn btn-primary payment-btn" data-toggle="modal" data-target="#ETH">Purchase SCR</a>
    </form><!-- form -->
    </div><!-- End Tokens -->
    <div class="token-card">
        <div class="token-info">
            <span class="token-smartag">Phase 1</span>

            <ul class="token-timeline">
                <li><span>BATCH AMOUNT</span>20,000,000 SCR</li>
                <li><span>BATCH PRICE</span>0.50 USD</li>
            </ul>
        </div>
        <div class="token-countdown">
            <span class="token-countdown-title">PHASE ENDS IN</span>
            <div class="token-countdown-clock" data-date="2019/02/14"></div>
        </div>
    </div><!-- .token-card -->
    <div class="progress-card">
        <h4>SCR Sale Progress</h4>
        <ul class="progress-info">
            <li><span>Raised -</span> 0 SCR</li>
            <li><span>TOTAL -</span> 96,111,096 SCR</li>
        </ul>
        <div class="progress-bar">
            <div class="progress-hcap" style="width:98%">
                <div>Hard cap <span>96,111,096</span></div>
            </div>
            <div class="progress-scap" style="width:20%">
                <div>Phase 2<span>23,888,888</span></div>
            </div>
            <div class="progress-psale" style="width:5%">
                <div>Phase 1<span>20,000,000</span></div>
            </div>
            <div class="progress-percent" style="width:0%"></div>
        </div>
    </div>
    <div class="gaps-3x"></div>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Stage</th>
                <th>Batch Amount</th>
                <th>Batch Pricing</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Phase 1</td>
                <td>20,000,000</td>
                <td>0.50 USD</td>
            </tr>
            <tr>
                <td>Phase 2</td>
                <td>3,888,888</td>
                <td>0.75 USD</td>
            </tr>
            <tr>
                <td>Phase 3</td>
                <td>3,888,888</td>
                <td>1.00 USD</td>
            </tr>
            <tr>
                <td>Phase 4</td>
                <td>3,888,888</td>
                <td>1.25 USD</td>
            </tr>
            <tr>
                <td>Phase 5</td>
                <td>3,888,888</td>
                <td>1.50 USD</td>
            </tr>
            <tr>
                <td>Phase 6</td>
                <td>3,888,888</td>
                <td>1.75 USD</td>
            </tr>
            <tr>
                <td>Phase 7</td>
                <td>3,888,888</td>
                <td>2.00 USD</td>
            </tr>
            <tr>
                <td>Phase 8</td>
                <td>3,888,888</td>
                <td>2.25 USD</td>
            </tr>
            <tr>
                <td>Phase 9</td>
                <td>3,888,888</td>
                <td>2.50 USD</td>
            </tr>
            <tr>
                <td>Phase 10</td>
                <td>3,888,888</td>
                <td>2.75 USD</td>
            </tr>
            <tr>
                <td>Phase 11</td>
                <td>3,888,888</td>
                <td>3.00 USD</td>
            </tr>
            <tr>
                <td>Phase 12</td>
                <td>3,888,888</td>
                <td>3.25 USD</td>
            </tr>
            <tr>
                <td>Phase 13</td>
                <td>3,888,888</td>
                <td>3.50 USD</td>
            </tr>
            <tr>
                <td>Phase 14</td>
                <td>3,888,888</td>
                <td>3.75 USD</td>
            </tr>
            <tr>
                <td>Phase 15</td>
                <td>3,888,888</td>
                <td>4.00 USD</td>
            </tr>
            <tr>
                <td>Phase 16</td>
                <td>3,888,888</td>
                <td>4.25 USD</td>
            </tr>
            <tr>
                <td>Phase 17</td>
                <td>3,888,888</td>
                <td>4.50 USD</td>
            </tr>
            <tr>
                <td>Phase 18</td>
                <td>3,888,888</td>
                <td>4.75 USD</td>
            </tr>
            <tr>
                <td>Phase 19</td>
                <td>10,000,000</td>
                <td>5.00 USD</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="ETH" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details ETH</h5>
                    <form action="">
                        <input id="selectedCC" name="selectedCC" value="" type="hidden">
                        <div class="tranx-payment-details">
                            <p>Hi, please click below in order to request a unique Ethereum address in which you can send your payment to.</p>
                            {{--@if(!Auth::user()->address && !Auth::user()->addressRequest)--}}
                            @if(! Auth::user()->findAddress(Auth::user()->id,'ETH'))
                                <div style="margin-top: 16px;" class="col-md-12 text-center ETH">
                                    <a class="btn btn-secondary btn-block" href="/client/address-request/ETH"><i class="ti ti-envelope"></i> Request your Address </a>
                                </div>
                                <hr>
                            @endif
                            @if($address=Auth::user()->findAddress(Auth::user()->id,'ETH'))
                                @if($address->status==0)
                                    <div class="alert alert-warning">Awaiting assignment of address.</div>
                                @else
                                    <div class="tranx-payment-info ETH">
                                        <span class="tranx-copy-feedback copy-feedback"></span>
                                        <em class="fab fa-ethereum"></em>
                                        <input type="text" class="tranx-payment-address copy-address" value="{{$address->name}}" disabled>
                                        <a href="#" class="tranx-payment-copy copy-trigger"><em class="ti ti-files"></em></a>
                                    </div><!-- .tranx-payment-info -->
                                @endif
                            @endif




                        </div><!-- .tranx-payment-details -->
                    </form>
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->


    <div class="modal fade" id="LTC" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details LTC</h5>
                    <form action="">

                        <div class="tranx-payment-details">
                            <p>Hi, please click below in order to request a unique Litecoin address in which you can send your payment to.</p>
                            {{--@if(!Auth::user()->address && !Auth::user()->addressRequest)--}}
                            @if(! Auth::user()->findAddress(Auth::user()->id,'LTC'))
                                <div style="margin-top: 16px;" class="col-md-12 text-center ETH">
                                    <a class="btn btn-secondary btn-block" href="/client/address-request/LTC"><i class="ti ti-envelope"></i> Request your Address </a>
                                </div>
                                <hr>
                            @endif
                            @if($address=Auth::user()->findAddress(Auth::user()->id,'LTC'))
                                @if($address->status==0)
                                    <div class="alert alert-warning">Awaiting assignment of address.</div>
                                @else
                                    <div class="tranx-payment-info ETH">
                                        <span class="tranx-copy-feedback copy-feedback"></span>
                                        <em class="fab fa-ethereum"></em>
                                        <input type="text" class="tranx-payment-address copy-address" value="{{$address->name}}" disabled>
                                        <a href="#" class="tranx-payment-copy copy-trigger"><em class="ti ti-files"></em></a>
                                    </div><!-- .tranx-payment-info -->
                                @endif
                            @endif




                        </div><!-- .tranx-payment-details -->
                    </form>
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    <div class="modal fade" id="BTC" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details BTC</h5>
                    <form action="">

                        <div class="tranx-payment-details">
                            <p>Hi, please click below in order to request a unique Bitcoin address in which you can send your payment to.</p>
                            {{--@if(!Auth::user()->address && !Auth::user()->addressRequest)--}}
                            @if(! Auth::user()->findAddress(Auth::user()->id,'BTC'))
                                <div style="margin-top: 16px;" class="col-md-12 text-center ETH">
                                    <a class="btn btn-secondary btn-block" href="/client/address-request/BTC"><i class="ti ti-envelope"></i> Request your Address </a>
                                </div>
                                <hr>
                            @endif
                            @if($address=Auth::user()->findAddress(Auth::user()->id,'BTC'))
                                @if($address->status==0)
                                    <div class="alert alert-warning">Awaiting assignment of address.</div>
                                @else
                                    <div class="tranx-payment-info ETH">
                                        <span class="tranx-copy-feedback copy-feedback"></span>
                                        <em class="fab fa-ethereum"></em>
                                        <input type="text" class="tranx-payment-address copy-address" value="{{$address->name}}" disabled>
                                        <a href="#" class="tranx-payment-copy copy-trigger"><em class="ti ti-files"></em></a>
                                    </div><!-- .tranx-payment-info -->
                                @endif
                            @endif




                        </div><!-- .tranx-payment-details -->
                    </form>
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    <div class="modal fade" id="USD" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details USD</h5>
                    <form action="">
                        <input id="selectedCC" name="selectedCC" value="" type="hidden">
                        <div class="tranx-payment-details">
                            <p>Hi, Your transaction <strong>ICIYOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>5,470 ICOX</strong> tokens (incl. bonus of 450 ICOX) once paid.</p>
                            <h6>Please make your Payment to the bellow Address</h6>
                            {{--@if(!Auth::user()->address && !Auth::user()->addressRequest)--}}
                            @if(! Auth::user()->findAddress(Auth::user()->id,'USD'))
                                <div style="margin-top: 16px;" class="col-md-12 text-center ETH">
                                    <a class="btn btn-secondary btn-block" href="/client/address-request/USD"><i class="ti ti-envelope"></i> Request for Address </a>
                                </div>
                                <hr>
                            @endif
                            @if($address=Auth::user()->findAddress(Auth::user()->id,'USD'))
                                @if($address->status==0)
                                    <div class="alert alert-warning">Address Request Waiting for Approval</div>
                                @else
                                    <div class="tranx-payment-info ETH">
                                        <span class="tranx-copy-feedback copy-feedback"></span>
                                        <em class="fab fa-ethereum"></em>
                                        <input type="text" class="tranx-payment-address copy-address" value="{{$address->name}}" disabled>
                                        <a href="#" class="tranx-payment-copy copy-trigger"><em class="ti ti-files"></em></a>
                                    </div><!-- .tranx-payment-info -->
                                @endif
                            @endif



                            <ul class="tranx-info-list">
                                <li><span>SET GAS LIMIT:</span> 120 000</li>
                                <li><span>SET GAS PRICE:</span> 95 Gwei</li>
                            </ul><!-- .tranx-info-list -->
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="tranx-info-qr">
                                        <span>OR Scan bellow QR Code to pay</span>
                                        <img class="tranx-info-qrimg" src="images/eth-qr.png" alt="qr">
                                        <div class="gaps-4x"></div>
                                        <ul class="btn-grp guttar-20px">
                                            <li><a href="#" class="btn btn-primary pay-done">I want this token</a></li>
                                            <li><a href="#" class="btn btn-xs btn-uline btn-uline-danger" data-dismiss="modal">I Don't Want This</a></li>
                                        </ul>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-sm-7">
                                    <div class="note note-info">
                                        <em class="fas fa-info-circle"></em>
                                        <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MetaMask, MayEtherWallet, Mist wallets etc.</p>
                                    </div>
                                    <div class="gaps-1x"></div>
                                    <div class="note note-danger">
                                        <em class="fas fa-info-circle"></em>
                                        <p>In case you send a different amount ETH, the number of ICOX tokens will update accordingly.</p>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .tranx-payment-details -->
                    </form>
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->
    <!-- Modal Start MON-->
    <div class="modal fade" id="MON" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details Monero</h5>
                    <form action="">
                        <input id="selectedCC" name="selectedCC" value="" type="hidden">
                        <div class="tranx-payment-details">
                            <p>Hi, please click below in order to request a unique Monero address in which you can send your payment to.</p>
                            {{--@if(!Auth::user()->address && !Auth::user()->addressRequest)--}}
                            @if(! Auth::user()->findAddress(Auth::user()->id,'MON'))
                                <div style="margin-top: 16px;" class="col-md-12 text-center MON">
                                    <a class="btn btn-secondary btn-block" href="/client/address-request/MON"><i class="ti ti-envelope"></i> Request your Address </a>
                                </div>
                                <hr>
                            @endif
                            @if($address=Auth::user()->findAddress(Auth::user()->id,'MON'))
                                @if($address->status==0)
                                    <div class="alert alert-warning">Awaiting assignment of address.</div>
                                @else
                                    <div class="tranx-payment-info ETH">
                                        <span class="tranx-copy-feedback copy-feedback"></span>
                                        <em class="fab fa-ethereum"></em>
                                        <input type="text" class="tranx-payment-address copy-address" value="{{$address->name}}" disabled>
                                        <a href="#" class="tranx-payment-copy copy-trigger"><em class="ti ti-files"></em></a>
                                    </div><!-- .tranx-payment-info -->
                                @endif
                            @endif




                        </div><!-- .tranx-payment-details -->
                    </form>
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->


    <!-- Modal End  DAS -->
    <div class="modal fade" id="DAS" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details DASH</h5>
                    <form action="">
                        <input id="selectedCC" name="selectedCC" value="" type="hidden">
                        <div class="tranx-payment-details">
                            <p>Hi, please click below in order to request a unique Dash address in which you can send your payment to.</p>
                            {{--@if(!Auth::user()->address && !Auth::user()->addressRequest)--}}
                            @if(! Auth::user()->findAddress(Auth::user()->id,'DAS'))
                                <div style="margin-top: 16px;" class="col-md-12 text-center DAS">
                                    <a class="btn btn-secondary btn-block" href="/client/address-request/DAS"><i class="ti ti-envelope"></i> Request your Address </a>
                                </div>
                                <hr>
                            @endif
                            @if($address=Auth::user()->findAddress(Auth::user()->id,'DAS'))
                                @if($address->status==0)
                                    <div class="alert alert-warning">Awaiting assignment of address.</div>
                                @else
                                    <div class="tranx-payment-info ETH">
                                        <span class="tranx-copy-feedback copy-feedback"></span>
                                        <em class="fab fa-ethereum"></em>
                                        <input type="text" class="tranx-payment-address copy-address" value="{{$address->name}}" disabled>
                                        <a href="#" class="tranx-payment-copy copy-trigger"><em class="ti ti-files"></em></a>
                                    </div><!-- .tranx-payment-info -->
                                @endif
                            @endif




                        </div><!-- .tranx-payment-details -->
                    </form>
                </div><!-- .tranx-popup -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- Modal End -->



@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            $('#paymentGet').on('keyup',function () {
                if($(this).val()!='') {
                    var amount = parseInt($(this).val());
                    var result = amount / 2;
                    //console.log(result);
                    $('#paymentFrom').val(result);
                }
                else{
                    $('#paymentFrom').val(0);
                }

            });
        });


        $(document).ready(function () {
            $('#paymentFrom').on('keyup',function () {
                if($(this).val()!='') {
                    var amount = parseInt($(this).val());
                    var result = amount * 2;
                    $('#paymentGet').val(result);

                }
                else {
                    $('#paymentGet').val(0);
                }

            });

            /* $('.payment-item').click(function () {
                 //var arr =['ETH','LTC','BTC','USD'];
               var val = $(this).find('.payment-check').val();
               //$('#selectedCC').val(val);
               //$(`.${val}`).show();
               /!*for (i in arr){
                   if(arr[i]!==val)
                       $('.'+arr[i]).hide();
               }*!/
             });*/
        });
    </script>

@endsection