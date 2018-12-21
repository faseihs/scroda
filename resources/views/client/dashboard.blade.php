@extends('layouts.client')



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





        @if(Auth::user()->address)
            <div style="margin-top: 16px;" class="col-md-12">
            <div class="alert alert-primary">
                <strong>Address :</strong> {{Auth::user()->address->name}}
            </div>
            </div>
        @endif


    </div>

    <div style="margin-top: 16px;" class="row">
        <div class="col-md-6">
            <div class="tile-item tile-primary">
                <div class="tile-bubbles"></div>
                <h6 class="tile-title">ICO TOKEN BALANCE</h6>
                <h1 class="tile-info">120,000,000 IC0X</h1>
                <ul class="tile-list-inline">
                    <li>1.240 BTC</li>
                    <li>19.043 ETH</li>
                    <li>6,500.13 USD</li>
                </ul>
            </div>
        </div><!-- .col -->
        <div class="col-md-6">
            <div class="tile-item tile-light">
                <div class="tile-bubbles"></div>
                <h6 class="tile-title">YOUR CONTRIBUTION</h6>
                <ul class="tile-info-list">
                    <li><span>1.646</span>ETH</li>
                    <li><span>~</span>BTC</li>
                    <li><span>5,940</span>USD</li>
                </ul>
            </div>
        </div><!-- .col -->
    </div><!-- .row -->
    <div class="col-xs-12 dashboard-token"><!-- Tokens -->
        <h2 class="user-panel-title">Buy Tokens</h2>
        <form action="#">
            <h5 class="user-panel-subtitle">01. Select the payment method and calculate token price</h5>
            <div class="gaps-1x"></div>
            <div class="payment-list">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="payment-item">
                            <input class="payment-check" type="radio" id="payeth" name="payOption" value="tranxETH" checked>
                            <label for="payeth">
                                <div class="payment-icon payment-icon-eth"><img src="{{asset('dashboard/images/icon-ethereum.png')}}" alt="icon"></div>
                                <span class="payment-cur">Ethereum</span>
                            </label>
                            <span>@ 0.1 ETH</span>
                        </div>
                    </div><!-- .col -->
                    <div class="col-md-3 col-sm-6">
                        <div class="payment-item">
                            <input class="payment-check" type="radio" id="paylightcoin" name="payOption" value="tranxLTC">
                            <label for="paylightcoin">
                                <div class="payment-icon payment-icon-ltc"><img class="payment-icon" src="{{asset('dashboard/images/icon-lightcoin.png')}}" alt="icon"></div>
                                <span class="payment-cur">Litecoin</span>
                            </label>
                            <span>@ 0.1 LTC</span>
                        </div>
                    </div><!-- .col -->
                    <div class="col-md-3 col-sm-6">
                        <div class="payment-item">
                            <input class="payment-check" type="radio" id="paybtc" name="payOption" value="tranxBTC">
                            <label for="paybtc">
                                <div class="payment-icon payment-icon-btc"><em class="payment-icon fab fa-btc"></em></div>
                                <span class="payment-cur">Bitcoin</span>
                            </label>
                            <span>@ 0.05 BTC</span>
                        </div>
                    </div><!-- .col -->
                    <div class="col-md-3 col-sm-6">
                        <div class="payment-item">
                            <input class="payment-check" type="radio" id="payusd" name="payOption" value="tranxUSD">
                            <label for="payusd">
                                <div class="payment-icon payment-icon-usd"><em class="payment-icon fas fa-credit-card"></em></div>
                                <span class="payment-cur">US Dollar</span>
                            </label>
                            <span>@ 0.5 USD</span>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .payment-list -->
            <div class="gaps-1x"></div>
            <h5 class="user-panel-subtitle">02. Set amount of ICOX tokens you would like to purchase</h5>
            <p>To become a part of the ICO Crypto project and purchase of ICOX token will only be possible after payment made and receving an approval.  As you like to participate our project, please select payment method and enter the amount of ICOX tokens you wish to purchase. You can buy ICOX tokens using ETH, BTC, LTC or USD. </p>
            <div class="gaps-1x"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="payment-calculator">
                        <div class="payment-get">
                            <label for="paymentGet">Tokens to Purchase</label>
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
                    <div class="payment-bonus">
                        <h6 class="payment-bonus-title">Current Bonus</h6>
                        <span class="payment-bonus-amount">20% <span>on pre-sales</span></span>
                        <span class="payment-bonus-time">End at - 09 Jul, 2018</span>
                    </div>
                    <div class="gaps-1x d-md-none"></div>
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="gaps-1x"></div>
            <div class="payment-calculator-note"><i class="fas fa-info-circle"></i>The calculator helps you to convert required currency to ICOX tokens.</div>
            <div class="gaps-3x"></div>
            <div class="payment-summary">
                <div class="row">
                    <div class="col-md-4">
                        <div class="payment-summary-item payment-summary-final">
                            <h6 class="payment-summary-title">Final Payment</h6>
                            <div class="payment-summary-info">
                                <span class="payment-summary-amount">600.00</span> <span>usd</span>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-md-4">
                        <div class="payment-summary-item payment-summary-bonus">
                            <h6 class="payment-summary-title">Received Bonus</h6>
                            <div class="payment-summary-info">
                                <span>+</span> <span class="payment-summary-amount">600.00</span> <span>icox</span>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-md-4">
                        <div class="payment-summary-item payment-summary-tokens">
                            <h6 class="payment-summary-title">Tokens Received</h6>
                            <div class="payment-summary-info">
                                <span class="payment-summary-amount">12,200</span> <span>icox</span>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .payment-summary -->
            <a href="#" class="btn btn-primary payment-btn" data-toggle="modal" data-target="#tranxETH">Purchase Tokens</a>
        </form><!-- form -->
    </div><!-- End Tokens -->
    <div class="token-card">
        <div class="token-info">
            <span class="token-smartag">ICO Phase 2</span>
            <h2 class="token-bonus">20% <span>Current Bonus</span></h2>
            <ul class="token-timeline">
                <li><span>START DATE</span>14 Jul 2018</li>
                <li><span>END DATE</span>25 Aug 2018</li>
            </ul>
        </div>
        <div class="token-countdown">
            <span class="token-countdown-title">THE BONUS END IN</span>
            <div class="token-countdown-clock" data-date="2018/09/05"></div>
        </div>
    </div><!-- .token-card -->
    <div class="progress-card">
        <h4>Token Sale Progress</h4>
        <ul class="progress-info">
            <li><span>Raised -</span> 2,758 ICOX</li>
            <li><span>TOTAL -</span> 1,500,000 ICOX</li>
        </ul>
        <div class="progress-bar">
            <div class="progress-hcap" style="width:90%">
                <div>Hard cap <span>1,400,000</span></div>
            </div>
            <div class="progress-scap" style="width:34%">
                <div>Soft cap <span>40,000</span></div>
            </div>
            <div class="progress-psale" style="width:12%">
                <div>Pre Sale <span>10,000</span></div>
            </div>
            <div class="progress-percent" style="width:25%"></div>
        </div>
    </div>
    <div class="gaps-3x"></div>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>PreSale</th>
                <th>Sale Stage 1</th>
                <th>Sale Stage 2</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><span>Start Date</span>03 July 2018</td>
                <td><span>Start Date</span>15 August 2018</td>
                <td><span>Start Date</span>28 October 2018</td>
            </tr>
            <tr>
                <td><span>End Date</span>19 July 2018</td>
                <td><span>End Date</span>02 September 2018</td>
                <td><span>End Date</span>16 November 2018</td>
            </tr>
            <tr>
                <td><span>Bonus</span>30%</td>
                <td><span>Bonus</span>20%</td>
                <td><span>Bonus</span>10%</td>
            </tr>
            <tr>
                <td><span>Soft Cap</span>$ 20M</td>
                <td><span>Hard Cap</span>$ 50M</td>
                <td><span>Hard Cap</span>$ 30M</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="tranxETH" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="tranx-popup">
                    <h5>Purchase Details ETH</h5>
                    <div class="tranx-payment-details">
                        <p>Hi, Your transaction <strong>ICIYOW0102</strong> is <strong>Pending Payment</strong><br> You will receive <strong>5,470 ICOX</strong> tokens (incl. bonus of 450 ICOX) once paid.</p>
                        <h6>Please make your Payment to the bellow Address</h6>
                        @if(!Auth::user()->address && !Auth::user()->addressRequest)

                            <div style="margin-top: 16px;" class="col-md-12 text-center">
                                <a class="btn btn-secondary btn-block" href="/client/address-request"><i class="ti ti-envelope"></i> Request for Address </a>
                            </div>
                            <hr>
                        @endif
                        @if(Auth::user()->address)

                            <div class="tranx-payment-info">
                                <span class="tranx-copy-feedback copy-feedback"></span>
                                <em class="fab fa-ethereum"></em>
                                <input type="text" class="tranx-payment-address copy-address" value="{{Auth::user()->address->name}}" disabled>
                                <a href="#" class="tranx-payment-copy copy-trigger"><em class="ti ti-files"></em></a>
                            </div><!-- .tranx-payment-info -->
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
                    $('#paymentFrom').val(parseFloat(result).toPrecision(2));
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

            });
        });
    </script>

@endsection