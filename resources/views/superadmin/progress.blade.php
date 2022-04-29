@extends('layouts.superadmin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Transaction Progress</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Order</th>
                            <th>Date Order</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Quantity</th>
                            <th>Type Order</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID Order</th>
                            <th>Date Order</th>
                            <th>Customer</th>
                            <th>Items</th>
                            <th>Quantity</th>
                            <th>Type Order</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id_order }}</td>
                            <td>{{ $item->date_order }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->name_product }}</td>
                            <td>{{ $item->quantity_order }}</td>
                            <td>
                                @if ($item->type_order == '1')
                                    Payment Gateway
                                @else
                                    COD
                                @endif
                            </td>
                            <td>{{ $item->total_order }}</td>
                            <td>
                                <a href="{{ url('superadmin/product/image') }}/{{ $item->id }}" class="btn btn-info">Detail</a>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2{{ $item->id }}">Confirm</button>


                                <form action="{{ url('superadmin/product/delete') }}/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
