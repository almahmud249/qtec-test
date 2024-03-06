@extends('layouts.app')

@section('content')
    <div style="height: 100vh;" class="body_wraper p-md-5 p-3 ">
            <div class="login_box cm_box">
                <form action="{{route('admin.gallery.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="common_input mb-5 col-md-6">
                            <label for>Upload Gallery Image</label>
                            <input class="nn_input"
                                   type="file" name="image">
                        </div>

                    </div>
                    <div class="common_input mb-5 col-md-6">
                        <button type="submit" class="py-4">Submit</button>
                    </div>
                </form>
            </div>
        <div class="table_responsive">
            <table>
                <thead>
                <tr>
                    <th>SL</th>
                    <th>image</th>
                </tr>
                </thead>
                <tbody>
                @foreach($galleries as $key => $cat)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>
                            <img class="p_img" src="{{url('/')}}/images/{{$cat->value}}" alt="">
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
