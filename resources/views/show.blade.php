@extends('layout.mainlayout')
@section('content')
<div class="container-fluid text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @php
            /* if($key == 0){
                dd($item);
            } else{
                dd($item[$key]);
            }; */

            //dd($item[$key]);


               
            @endphp
            <div class="card ">
                <div class="has-animation animation-rtl" data-delay="2000">
                    <img src="{{ $item[$key]['url'] }}" class="card-img-top" alt="{{ $item[$key]['title'] }}">
                </div>
                <div class="card-body">
                    <div class="has-animation animation-ltr" data-delay="10">
                        <h3 class="card-title">{{ $item[$key]['title'] }}</h3>
                    </div>
                    <small class="card-text">{{ $item[$key]['date'] }}</small>
                    <div class="has-animation animation-rtl" data-delay="1000">
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
