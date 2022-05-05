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

                                <div class="modal fade" id="staticBackdrop2{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Confirm Order</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ url('superadmin/progress/confirm') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <input type="hidden" value="085739346311" name="from_input">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlInput1" class="form-label">Name Customer</label>
                                                            <input type="text" name="img_input" value="{{  $item->name }}" class="form-control" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Number Phone</label>
                                                            <input type="text" class="form-control" value="{{ $item->number_phone }}" name="to_input" value="{{ $item->number_phone }}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1" class="form-label">Description Order</label>
                                                            <textarea class="form-control" name="description_input" rows="3" placeholder="Description Order ..." required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                </div>

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
