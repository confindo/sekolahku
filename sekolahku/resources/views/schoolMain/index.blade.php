@extends('applicationMain/index')

@section('optionalHeader')
    <link rel="stylesheet" href="{{ secure_asset('schoolassets/css') }}/{{ $data->css }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ secure_asset('schoolassets/js') }}/{{ $data->js }}"></script>
@endsection

@section('title')
    {{ $data->title }}
@endsection

@section('topTopic')
    <div class="container-fluid" id="topTopic">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <img src="{{ secure_asset('schoolassets/images') }}/{{ $data->schoolLogo }}" class="img-responsive" id="schoolLogo">
            </div>
            <div class="col-md-6" id="slogan">
                <h4><b>{{ $data->schoolName }}</b></h4>
                <h6><i>{{ $data->caption }}</i></h6>
            </div>
            <div class="col-md-2" id="language">
                <label class="btn btn-success"><i class="fas fa-language"></i>{{ $data->languageChoose }}</label>
                <select class="form-control" name="language" id="language">
                    <option value="en">English</option>
                    <option value="id">Indonesia</option>
                </select>
            </div>
            <div class="col-md-1">
                <img src="{{ secure_asset('schoolassets/images') }}/{{ $data->optImage }}" class="img-responsive" id="ribbonLogo">
            </div>
        </div>
    </div>
    @include('template/navigation')
    <div class="hero-image">
        <div class="hero-text">
            <h1>{{ $data->imageWord }}</h1>
            <h6 style="text-align:center;">
               {{ $data->imageCaption }}
            </h6>
        </div>
    </div> 
    @include('template/footer')
@endsection