@extends('layouts.app')

@section('content')
    <div style="height: 100vh;" class="body_wraper p-md-5 p-3 ">
            <div class="login_box cm_box">
                <form action="{{route('admin.category.store')}}">
                    <div class="row">
                        <div class="common_input mb-5 col-md-6">
                            <label for>Name of the Company & Origin</label>
                            <input class="nn_input"
                                   placeholder="Name of the Company & Origin..."
                                   type="text" name="name">
                        </div>
                        <div class="common_input mb-5 col-md-6">
                            <label for>Period</label>
                            <input class="nn_input"
                                   placeholder="period..."
                                   type="text" name="period">
                        </div>
                        <div class="common_input mb-5 col-md-6">
                            <label for>Location</label>
                            <input class="nn_input"
                                   placeholder="location..."
                                   type="text" name="location">
                        </div>
                        <div class="common_input mb-5 col-md-6">
                            <label for>Nature of Contract</label>
                            <input class="nn_input"
                                   placeholder="name of contract..."
                                   type="text" name="nature_of_contract">
                        </div>
                        <div class="common_input mb-5 col-md-6">
                            <label for>Type of Project</label>
                            <input class="nn_input"
                                   placeholder="Enter category name..."
                                   type="text" name="type_of_project">
                        </div>
                        <div class="common_input mb-5 col-md-6">
                            <label for>No. of Workers</label>
                            <input class="nn_input"
                                   placeholder="No. of Workerse..."
                                   type="text" name="no_of_workers">
                        </div>
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
                    <th>Period</th>
                    <th>Location</th>
                    <th>Nature of contract</th>
                    <th>Type of project</th>
                    <th>No of workers</th>
                    <th>Action</th>
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
                            <span class="d-block">{{$cat->period}}</span>
                        </td>
                        <td>
                            <span class="d-block">{{$cat->location}}</span>
                        </td>
                        <td>
                            <span class="d-block">{{$cat->nature_of_contract}}</span>
                        </td>
                        <td>
                            <span class="d-block">{{$cat->type_of_project}}</span>
                        </td>
                        <td>
                            <span class="d-block">{{$cat->no_of_workers}}</span>
                        </td>
                        <td>
                            <a href="{{route('admin.category.delete', $cat->id)}}" method="get">
                                <i class="fa-solid fa-trash"></i>                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
