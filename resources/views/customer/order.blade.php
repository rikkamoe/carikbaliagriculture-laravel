@extends('layouts.customer')

@section('content')
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">PEMESANAN SAYA</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/customer/dashboard') }}">Home</a>
                            </li>
                            <li>Pemesanan Saya</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="account-page-area section-space-y-axis-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="myaccount-orders">
                        <h4 class="small-title">MY ORDERS</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th>ORDER</th>
                                        <th>DATE</th>
                                        <th>STATUS</th>
                                        <th>TOTAL</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td><a class="account-order-id" href="#">#5364</a></td>
                                        <td>Mar 27, 2019</td>
                                        <td>On Hold</td>
                                        <td>$162.00 for 2 items</td>
                                        <td><a href="#" class="btn btn-dark"><span>View</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a class="account-order-id" href="#">#5356</a></td>
                                        <td>Mar 27, 2019</td>
                                        <td>On Hold</td>
                                        <td>$162.00 for 2 items</td>
                                        <td><a href="#" class="btn btn-dark"><span>View</span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
