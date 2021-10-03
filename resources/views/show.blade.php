@extends('layout.mainlayout')
@section('content')
<div class="container-fluid text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header">
                    <div class="has-animation animation-ltr" data-delay="10">
                        <h3 class="card-title">{{ $item[$key]['title'] }}</h3>
                        <small class="card-text">{{ $item[$key]['date'] }}</small>
                    </div>
                  </div>
                <div class="card-body">
                    <div class="has-animation animation-rtl img" data-delay="300">
                        <img loading="lazy" src="{{ $item[$key]['url'] }}" class="card-img-top img-fluid img-thumbnail" alt="{{ $item[$key]['title'] }}">
                    </div>
                </div>
                <div class="card-body">
                    <div class="has-animation animation-ltr" data-delay="600">
                        <p class="card-text">{{ $item[$key]['explanation'] }}</p>
                    </div>
                    <button type="button" class="btn btn-primary back">
                        <a href="javascript:history.back()"><i class="far fa-arrow-alt-circle-left"></i></a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<b></b>
