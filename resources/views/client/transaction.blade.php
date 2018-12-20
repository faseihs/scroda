@extends('layouts.client')



@section('content')
    @include('includes.flash')
    <h2 class="user-panel-title">Transactions</h2>

    <!-- if there is no transaction you can use this code -->
    <!-- <div class="status status-empty">
        <div class="status-icon">
            <em class="ti ti-files"></em>
            <div class="status-icon-sm">
                <em class="ti ti-close"></em>
            </div>
        </div>
        <span class="status-text">You have not contributed yet! You should make some.</span>
        <a href="tokens.html" class="btn btn-primary">Contribute Now</a>
    </div> -->

    <table class="data-table tranx-table">
        <thead>
        <tr>
            <th class="tranx-status"></th>
            <th class="tranx-no"><span>TNX NO</span></th>
            <th class="tranx-token"><span>Tokens</span></th>
            <th class="tranx-amount"><span>Amount</span></th>
            <th class="tranx-from"><span>From</span></th>
            <th class="tranx-action"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="tranx-status tranx-status-approved"><span class="d-none">Approved</span><em class="ti ti-check"></em></td>
            <td class="tranx-no"><span>ICIYOW0102</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-token"><span>+5,600</span>ICOX</td>
            <td class="tranx-amount"><span>56.00</span>ETH <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 ICOX"></em></td>
            <td class="tranx-from"><span>1F1t....4xqX</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-action">
                <a href="#" data-toggle="modal" data-target="#tranxApproved"><em class="ti ti-more-alt"></em></a>
            </td>
        </tr>
        <tr>
            <td class="tranx-status tranx-status-pending"><span class="d-none">Pending</span><em class="ti ti-alert"></em></td>
            <td class="tranx-no"><span>ICIYOW0102</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-token"><span>+5,600</span>ICOX</td>
            <td class="tranx-amount"><span>56.00</span>ETH <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 ICOX"></em></td>
            <td class="tranx-from"><span>1F1t....4xqX</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-action">
                <a href="#" data-toggle="modal" data-target="#tranxPending"><em class="ti ti-more-alt"></em></a>
            </td>
        </tr>
        <tr>
            <td class="tranx-status tranx-status-cancled"><span class="d-none">Canceled</span><em class="ti ti-close"></em></td>
            <td class="tranx-no"><span>ICIYOW0102</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-token"><span>+5,600</span>ICOX</td>
            <td class="tranx-amount"><span>56.00</span>ETH <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 ICOX"></em></td>
            <td class="tranx-from"><span>1F1t....4xqX</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-action">
                <a href="#" data-toggle="modal" data-target="#tranxApproved"><em class="ti ti-more-alt"></em></a>
            </td>
        </tr>
        <tr>
            <td class="tranx-status tranx-status-approved"><span class="d-none">Approved</span><em class="ti ti-check"></em></td>
            <td class="tranx-no"><span>ICIYOW0102</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-token"><span>+5,600</span>ICOX</td>
            <td class="tranx-amount"><span>56.00</span>ETH <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 ICOX"></em></td>
            <td class="tranx-from"><span>1F1t....4xqX</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-action">
                <a href="#" data-toggle="modal" data-target="#tranxApproved"><em class="ti ti-more-alt"></em></a>
            </td>
        </tr>
        <tr>
            <td class="tranx-status tranx-status-approved"><span class="d-none">Approved</span><em class="ti ti-check"></em></td>
            <td class="tranx-no"><span>ICIYOW0102</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-token"><span>+5,600</span>ICOX</td>
            <td class="tranx-amount"><span>56.00</span>ETH <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 ICOX"></em></td>
            <td class="tranx-from"><span>1F1t....4xqX</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-action">
                <a href="#" data-toggle="modal" data-target="#tranxApproved"><em class="ti ti-more-alt"></em></a>
            </td>
        </tr>
        <tr>
            <td class="tranx-status tranx-status-approved"><span class="d-none">Approved</span><em class="ti ti-check"></em></td>
            <td class="tranx-no"><span>ICIYOW0102</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-token"><span>+5,600</span>ICOX</td>
            <td class="tranx-amount"><span>56.00</span>ETH <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 ICOX"></em></td>
            <td class="tranx-from"><span>1F1t....4xqX</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-action">
                <a href="#" data-toggle="modal" data-target="#tranxApproved"><em class="ti ti-more-alt"></em></a>
            </td>
        </tr>
        <tr>
            <td class="tranx-status tranx-status-approved"><span class="d-none">Approved</span><em class="ti ti-check"></em></td>
            <td class="tranx-no"><span>ICIYOW0102</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-token"><span>+5,600</span>ICOX</td>
            <td class="tranx-amount"><span>56.00</span>ETH <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 ICOX"></em></td>
            <td class="tranx-from"><span>1F1t....4xqX</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-action">
                <a href="#" data-toggle="modal" data-target="#tranxApproved"><em class="ti ti-more-alt"></em></a>
            </td>
        </tr>
        <tr>
            <td class="tranx-status tranx-status-approved"><span class="d-none">Approved</span><em class="ti ti-check"></em></td>
            <td class="tranx-no"><span>ICIYOW0102</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-token"><span>+5,600</span>ICOX</td>
            <td class="tranx-amount"><span>56.00</span>ETH <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 ICOX"></em></td>
            <td class="tranx-from"><span>1F1t....4xqX</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-action">
                <a href="#" data-toggle="modal" data-target="#tranxApproved"><em class="ti ti-more-alt"></em></a>
            </td>
        </tr>
        <tr>
            <td class="tranx-status tranx-status-approved"><span class="d-none">Approved</span><em class="ti ti-check"></em></td>
            <td class="tranx-no"><span>ICIYOW0102</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-token"><span>+5,600</span>ICOX</td>
            <td class="tranx-amount"><span>56.00</span>ETH <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 ICOX"></em></td>
            <td class="tranx-from"><span>1F1t....4xqX</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-action">
                <a href="#" data-toggle="modal" data-target="#tranxApproved"><em class="ti ti-more-alt"></em></a>
            </td>
        </tr>
        <tr>
            <td class="tranx-status tranx-status-approved"><span class="d-none">Approved</span><em class="ti ti-check"></em></td>
            <td class="tranx-no"><span>ICIYOW0102</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-token"><span>+5,600</span>ICOX</td>
            <td class="tranx-amount"><span>56.00</span>ETH <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 100 ICOX"></em></td>
            <td class="tranx-from"><span>1F1t....4xqX</span>08 Jul, 18  10:20PM</td>
            <td class="tranx-action">
                <a href="#" data-toggle="modal" data-target="#tranxApproved"><em class="ti ti-more-alt"></em></a>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- Modal End -->


@endsection