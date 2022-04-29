@extends('layouts.customer')

@section('content')
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h2 class="breadcrumb-heading">PEMESANAN KAMU</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/customer/dashboard') }}">Home</a>
                            </li>
                            <li>Pemesanan Kamu</li>
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
                        <h4 class="small-title">PESANAN KAMU</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th>ORDER</th>
                                        <th>TANGGAL</th>
                                        <th>STATUS</th>
                                        <th>TOTAL</th>
                                        <th></th>
                                    </tr>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td><a class="account-order-id" href="#">{{ $item->id_order }}</a></td>
                                        <td>{{ $item->date_order }}</td>
                                        <td>
                                            @if ($item->status_order == '0')
                                                Pesanan Dikemas
                                            @elseif ($item->status_order == '1')
                                                Pesanan Dikirim
                                            @elseif ($item->status_order == '2')
                                                Pesanan Selesai
                                            @else
                                                Pesanan Dibatalkan
                                            @endif
                                        </td>
                                        <td>Rp {{ number_format($item->total_order) }} untuk {{ $item->quantity_order }} items</td>
                                        <td><a href="#" class="btn btn-dark"><span>View</span></a>
                                        </td>
                                    </tr>
                                    @endforeach
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
