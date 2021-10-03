@extends('layout.mainlayout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Fecha</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($datos)
                            @foreach ($datos as $k => $item)
                                <tr>
                                    <th scope="row">{{ $item['date'] }}</th>
                                    <th scope="row">{{ $item['title'] }}</th>
                                    <th scope="row">
                                        <a href="{!! url('/'. $item['title'].'/'. $k) !!}" class="btn btn-primary">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </th>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<b></b>
