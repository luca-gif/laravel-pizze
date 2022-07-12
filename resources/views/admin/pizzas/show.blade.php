@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-6 offset-3 p-4">
                <ul>
                    <li><strong>Nome Pizza</strong>: {{ $pizza->name }}</li>
                    <li><strong>Ingredienti</strong>:
                        @foreach($pizza->ingredients as $ingredient){{$ingredient->name}} @endforeach
                    </li>
                    <li><strong>Prezzo</strong>: € {{ $pizza->price }}</li>

                    @if ($pizza->isVegetarian)
                        <li>
                            <strong>Questa pizza è vegetariana</strong>
                        </li>
                    @endif

                    @if ($pizza->popularity)
                        <li>
                            <strong>Popolarità</strong>: {{ $pizza->popularity }}
                        </li>
                    @endif
                </ul>

                <a class="btn btn-dark" href="{{ route('admin.pizze.index') }}">Back</a>
            </div>
        </div>

    </div>
@endsection
