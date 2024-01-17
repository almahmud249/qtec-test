@extends('layouts.app')

@section('content')
    <div>
        <div class="cm_box mb-5 p-0">
            <div class="cm_box px-5 py-2 pt-5">
                <div class="row row-cols-md-4 mb-4">
                    <div class="d-flex align-items-center">
                        <h1 class="box_title mb-0 me-3">Edit Shop Info</h1>
                        <!-- <span class="rounded-pill product_title_qty">4286</span> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="common_input mb-5 col-md-6">
                    <label for>Category</label>
                    <select name="category_id" id="category"
                            onchange="getRequest('{{ url('/') }}/user/get-form-template/'+this.value,'select')">
                        @foreach($categories as $key => $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="common_input mb-5 col-md-6">
                    <label for>Form Template</label>
                    <select name="category_id">
                        @foreach($templates as $key => $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('script')
    <script>
        function getRequest(route, id, type) {
            $.get({
                url: route,
                dataType: 'json',
                success: function (data) {
                    if (type == 'select') {
                        $('#' + id).empty().append(data.select_tag);
                    }
                },
            });
        }

        $(document).ready(function () {
            $('#category').click(function () {

            });
        });

    </script>
@endpush
