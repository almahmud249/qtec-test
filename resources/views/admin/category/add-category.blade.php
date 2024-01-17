@extends('layouts.app')

@section('content')
    <div style="height: 100vh;" class="body_wraper p-md-5 p-3 ">
            <div class="login_box cm_box col-md-6">
                <form action="{{route('admin.category.store')}}">
                    <div class="common_input mb-5">
                        <label for>Category Name</label>
                        <input class="nn_input"
                               placeholder="Enter category name..."
                               type="text" name="name">
                    </div>
                    <div class="common_input mb-5">
                        <label for>Description</label>
                        <textarea class="form-control" name="description" rows="5" placeholder="description"></textarea>
                    </div>
                    <div class="common_input mb-5">
                        <button type="submit" class="py-4">Submit</button>
                    </div>
                </form>
            </div>
        <div class="table_responsive">
            <table>
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $key => $cat)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>
                            <span class="d-block">{{$cat->name}}</span>
                        </td>
                        <td>
                            <span class="d-block">{{$cat->description}}</span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
