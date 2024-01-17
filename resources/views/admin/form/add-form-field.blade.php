@extends('layouts.app')


@section('content')
    <div class="content container-fluid main-card" style="font-size: 20px">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header input-title">
                    <h4>Shipping Configuration</h4>
                </div>
                <div class="card-body card-body-paddding">
                    <form method="POST" action="{{route('admin.form.field.store')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="shipping_fee_invoice_based">
                            <div class="d-flex justify-content-between mb-2">
                                <p class="mb-0">Price Range</p>
                                <div class="col-lg-4 mb-4 mb-lg-0">
                                    <div class="form-group suplr">
                                        <select class="js-example-theme-single js-states mb-2 form-control district"
                                                id="district" name="district" onchange="getRate()" required>
                                            <option value="{{ null }}" selected disabled></option>
                                            @foreach ($forms as $item)
                                                <option value="{{ $item }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="button" id="add-row-btn"
                                        class="btn btn-icon btn-sm btn-outline-primary add_row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                              d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                    </svg>
                                </button>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td>Label</td>
                                    <td>Type</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody class="invoice_based_tbody">
                                <tr>
                                    <td>
                                        <input type="text" class="form-control"
                                               name="invoice_based_shipping_fee[min_amount][]" id="min_amount"
                                               placeholder="label" value="" required>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control"
                                               name="invoice_based_shipping_fee[max_amount][]" id="max_amount"
                                               placeholder="type" value="" required>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-outline-primary" tabindex="4">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#add-row-btn').click(function() {
                var newRowHtml = '<tr>' +
                    '<td>' +
                    '<input type="text" class="form-control" name="invoice_based_shipping_fee[min_amount][]" placeholder="label" value="" required>' +
                    '</td>' +
                    '<td>' +
                    '<input type="text" class="form-control" name="invoice_based_shipping_fee[max_amount][]" placeholder="type" value="" required>' +
                    '</td>' +
                    '<td>' +
                    '<td>' +
                    '<button type="button" class="btn btn-outline-danger delete-row-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/></svg></button>' +
                    '</td>' +
                    '</tr>';
                $('.invoice_based_tbody').append(newRowHtml);
            });

            $('.invoice_based_tbody').on('click', '.delete-row-btn', function() {
                $(this).closest('tr').remove();
            });
        });

        function getRate() {
            var selectedDistrict = JSON.parse($('#district').val());
            // console.log(selectedDistrict);
            $('.invoice_based_tbody').html(null);
            if (selectedDistrict) {
                var newRowHtml = '<tr>' +
                    '<td>' +
                    '<input type="text" class="form-control" name="invoice_based_shipping_fee[min_amount][]" placeholder="label" value="" required>' +
                    '</td>' +
                    '<td>' +
                    '<input type="text" class="form-control" name="invoice_based_shipping_fee[max_amount][]" placeholder="type" value="" required>' +
                    '</td>' +
                    '</tr>';
                $('.invoice_based_tbody').append(newRowHtml);
                var rate = selectedDistrict.home_delivery;
                // console.log(rate);
                $('#shipping_fee_default_rate').val(rate);
            }
        }
    </script>
@endpush
