@extends('applicationMain/index')

@section('optionalHeader')
    <link rel="stylesheet" type="text/css" href="{{ asset('schoolassets/css') }}/{{ $data->css }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('title')
    {{ $data->title }}
@endsection

@section('topTopic')
    <div class="container-fluid" id="topTopic">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <img src="{{ asset('schoolassets/images') }}/{{ $data->schoolLogo }}" class="img-responsive" id="schoolLogo">
            </div>
            <div class="col-md-6" id="slogan">
                <h4><b>{{ $data->schoolName }}</b></h4>
                <h6><i>{{ $data->caption }}</i></h6>
            </div>
            <div class="col-md-2" id="language">
                <label class="btn btn-success"><i class="fas fa-language"></i> Language</label>
                <select class="form-control" name="language">
                    <option value="en">English</option>
                    <option value="id">Indonesia</option>
                </select>
            </div>
            <div class="col-md-1">
                <img src="{{ asset('schoolassets/images') }}/{{ $data->optImage }}" class="img-responsive" id="ribbonLogo">
            </div>
        </div>
    </div>
    @include('template/navigation')
@endsection

@section('mainTopic')
    <div class="hero-image">
        <div class="hero-text">
            <h1>BETA SCHOOL MANAGEMENT SYSTEM</h1>
            <h6 style="text-align:center;">
                - Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus amet eveniet architecto tempore odio facilis
                adipisicing elit -
            </h6>
        </div>
    </div> 
@endsection 