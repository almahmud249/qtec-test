@extends('layouts.user.master')
@section('user-content')
    <img src="./assets/images/gallery_cover.jpg" class="w-100 img-fluid" alt=""/>
    <div class="gallery">
        <h1 class="font-effect-outline">Gallery</h1>
    </div>
    <div class="container">
        <div class="img-list">
            @foreach($galleries as $key => $gallery)
                <div class="img-content{{$key+1}}">
                    <img
                        src="{{url('/')}}/images/{{$gallery->value}}"
                        alt="Gallery img-{{$key+1}}"
                        class="img-fluid"
                    />
                </div>
            @endforeach
        </div>
    </div>
@endsection
