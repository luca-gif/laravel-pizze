@extends('layouts.app')

@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.pizze.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                    id="name" name="name" placeholder="nome pizza">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"
                    id="price" name="price" placeholder="prezzo della pizza">
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="popularity">Popolarità</label>
                <input type="text" class="form-control @error('popularity') is-invalid @enderror"
                    value="{{ old('popularity') }}" id="popularity" name="popularity" placeholder="Voto pizza">
                @error('popularity')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <p class="mt-2">Ingredienti:</p>
            @foreach ($ingredients as $ingredient)
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value="{{$ingredient->id}}"
                        id="ingredient{{$loop->iteration}}"
                        name="ingredients[]"
                        @if(in_array($ingredient->id, old("ingredients", []))) checked @endif>
                    <label class="form-check-label mr-3" for="ingredient{{$loop->iteration}}">
                        {{$ingredient->name}}
                    </label>
                </div>
            @endforeach
            @error('ingredients')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group">
                <p class="mt-2">Vegetariano?</p>
                <label for="vegetarian">Si</label>
                <input type="radio" name="isVegetarian" value="1" id="vegetarian">
                <label for="notVegetarian">No</label>
                <input type="radio" name="isVegetarian" value="0" id="notVegetarian">
            </div>


            <button type="submit" class="btn btn-primary mt-3">Crea!</button>
        </form>
    </div>
@endsection
