@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Price</th>
                    <th scope="col">Buttons</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pizzas as $pizza)
                    <tr>

                        <td>{{ $pizza->id }}</td>
                        <td>{{ $pizza->name }}</td>
                        <td>{{ $pizza->price }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.pizze.show', $pizza) }}">Show</a>
                            <a class="btn btn-success" href="{{ route('admin.pizze.edit', $pizza) }}">Edit</a>
                            <form class="d-inline"
                                onsubmit="return confirm('Sei sicuro di voler eliminare {{ $pizza->name }}?')"
                                action="{{ route('admin.pizze.destroy', $pizza) }}" method="POST">
                                @method('DELETE')
                                @csrf

                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
