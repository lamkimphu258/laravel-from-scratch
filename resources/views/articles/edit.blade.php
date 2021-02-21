@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="title is-1">Update Article</h1>

            <form method="post" action="/articles/{{ $article->id }}">
                @csrf
                @method('put')

                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input type="text" class="input" name="title" id="title" value="{{ $article->title }}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                    <div class="control">
                        <textarea name="excerpt" id="excerpt" cols="30" rows="10"
                                  class="textarea">{{ $article->excerpt }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>
                    <div class="control">
                        <textarea name="body" id="body" cols="30" rows="10"
                                  class="textarea">{{ $article->body }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
