@extends('layouts.app')

@section('content')
    <div class="content container-fluid main-card" style="font-size: 20px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body card-body-paddding">
                    <div class="table_responsive">
                        <table>
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $key => $contact)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>
                                        <span class="d-block">{{$contact->email}}</span>
                                    </td>
                                    <td>
                                        <span class="d-block">{{$contact->phone}}</span>
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
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            let rowNumber = 1;

            $('#add-row-btn').click(function() {
                var rowCount = $('.invoice_based_tbody tr').length;
                rowNumber = rowNumber + rowCount;
                var newRowHtml = '<tr>' +
                    '<td>' +
                    '<input type="text" class="form-control" name="fields[' + rowNumber + '][label]" placeholder="Label" value="" required>' +
                    '</td>' +
                    '<td>' +
                    '<input type="text" class="form-control" name="fields[' + rowNumber + '][type]" placeholder="Type" value="" required>' +
                    '</td>' +
                    '<td>' +
                    '<button type="button" class="btn btn-outline-danger delete-row-btn">Delete</button>' +
                    '</td>' +
                    '</tr>';
                $('.invoice_based_tbody').append(newRowHtml);
                rowNumber++;
            });

            $('.invoice_based_tbody').on('click', '.delete-row-btn', function() {
                $(this).closest('tr').remove();
            });

        });

        function getRate() {
            var form_template = JSON.parse($('#form_template').val());
            $('.invoice_based_tbody').html(null);
            let rowNumber = 0;

            if (form_template && form_template.template) {
                $.each(form_template.template.form_data, function(index, order) {
                    var newRowHtml = '<tr>' +
                        '<td>' +
                        '<input type="text" class="form-control" name="fields[' + rowNumber + '][label]" placeholder="Label" value="'+ order.label +'" required>' +
                        '</td>' +
                        '<td>' +
                        '<input type="text" class="form-control" name="fields[' + rowNumber + '][type]" placeholder="Type" value="'+ order.type +'" required>' +
                        '</td>' +
                        '<td>' +
                        '<button type="button" class="btn btn-outline-danger delete-row-btn">Delete</button>' +
                        '</td>' +
                        '</tr>';

                    $('.invoice_based_tbody').append(newRowHtml);
                    rowNumber++;
                });
            }
        }
    </script>
@endpush
