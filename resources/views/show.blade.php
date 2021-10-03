@extends('layout.mainlayout')
@section('content')
    <div class="album text-muted">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" >
                        <img src="{{ $datos['url'] }}" class="card-img-top" alt="{{ $datos['title'] }}">
                        <div class="card-body">
                        <h5 class="card-title">{{ $datos['title'] }}</h5>
                        <small class="card-text">{{ $datos['date'] }}</small>
                        <p class="card-text">{{ $datos['explanation'] }}</p>
                        <a href="javascript:history.back()" class="btn btn-primary"><i class="far fa-arrow-alt-circle-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<b></b>
