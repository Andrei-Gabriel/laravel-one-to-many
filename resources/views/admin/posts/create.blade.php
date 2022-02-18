@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Nuovo post</h2>

        <form action="{{route("posts.store")}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo" value="{{old("title")}}">
                @error("title")
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Descrizione</label>
                <textarea rows="5" type="text" class="form-control @error("content") is-invalid @enderror" id="content" name="content" placeholder="Descrivi il post">{{old("content")}}</textarea>
                @error("content")
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input @error("published") is-invalid @enderror" id="published" name="published" {{old("published") ? "checked" : ""}}>
                <label class="form-check-label" for="published">Pubblica</label>
                @error("published")
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection