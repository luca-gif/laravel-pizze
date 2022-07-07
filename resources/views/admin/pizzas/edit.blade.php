@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.pizze.update', $pizza) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" value="{{ $pizza->name }}" class="form-control" id="name" name="name"
                    placeholder="nome pizza">

            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" value="{{ $pizza->price }}" class="form-control" id="price" name="price"
                    placeholder="prezzo della pizza">
            </div>

            <div class="form-group">
                <label for="popularity">Popolarità</label>
                <input type="number" value="{{ $pizza->popularity }}" class="form-control" id="popularity"
                    name="popularity" placeholder="Voto pizza">
            </div>

            <label for="description">Ingredienti</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $pizza->description }}</textarea>

            <div class="form-group">
                <p class="mt-2">Vegetariano?</p>
                <label for="vegetarian">Si</label>
                <input type="radio" name="isVegetarian" value="1" @if ($pizza->isVegetarian) checked @endif
                    id="vegetarian">
                <label for="notVegetarian">No</label>
                <input type="radio" name="isVegetarian" value="0" @if (!$pizza->isVegetarian) checked @endif
                    id="notVegetarian">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
