@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            <li>Nome Pizza: {{ $pizza->name }}</li>
            <li>Ingredienti: {{ $pizza->description }}</li>
            <li>Prezzo: € {{ $pizza->price }}</li>

            @if ($pizza->isVegetarian)
                <li>
                    Questa pizza è vegetariana
                </li>
            @endif

            @if ($pizza->popularity)
                <li>
                    Popolarità: {{ $pizza->popularity }}
                </li>
            @endif
        </ul>

        <a class="btn btn-dark" href="{{ route('admin.pizze.index') }}">Back</a>

    </div>
@endsection
