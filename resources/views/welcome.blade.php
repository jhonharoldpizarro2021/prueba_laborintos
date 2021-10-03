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

                        {{-- al momennto de realizar el desarrollo, el response de la api solo trae 1 registro, por eso no se reecorre ne ningun bucle --}}
                        <tr>
                            @if ($datos)
                                <th scope="row">{{ $datos['date'] }}</th>
                                <th scope="row">{{ $datos['title'] }}</th>
                                <th scope="row">
                                    <button type="button" class="btn btn-primary">
                                        <a href="{!! url('/' . $datos['title']) !!}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </button>
                                </th>
                            @endif
                            {{-- @if ($datos)
                            @foreach ($datos as $item)
                                <th scope="row">{{ $item['date'] }}</th>
                                <th scope="row">{{ $item['title'] }}</th>
                                <th scope="row">
                                    <a href="{!! url('/'. $item['title']) !!}" class="btn btn-primary">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </th>
                            @endforeach
                        @endif --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<b></b>
