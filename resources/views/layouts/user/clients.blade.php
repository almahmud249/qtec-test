@extends('layouts.user.master')

@section('user-content')
    <div style="width: 80%;margin: auto">
        <article class="table-responsive">
            <table class="table table-striped table-bordered">
                <tbody>
                <tr>
                    <td><strong>Name of the Company &amp; Origin</strong></td>
                    <td colspan="2"><strong>Period</strong></td>
                    <td align="left"><strong>Location</strong></td>
                    <td align="left"><strong>Nature of Contract</strong></td>
                    <td align="left"><strong>Type of Project </strong></td>
                    <td align="left"><strong>No. of Workers </strong></td>
                </tr>
                @foreach($clients as $key=> $client)
                    <tr>
                        <td>{{$client->name}}</td>
                        <td colspan="2">{{$client->period}}</td>
                        <td>{{$client->location}}</td>
                        <td>{{$client->nature_of_contract}}</td>
                        <td>{{$client->type_of_project}}</td>
                        <td>{{$client->no_of_workers}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </article>
    </div>
@endsection
