@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="title is-1">New Article</h1>

            <form method="post" action="/articles">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input type="text" class="input @error('title') is-danger @enderror" name="title" id="title">
                    </div>

                    @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>
                    <div class="control">
                        <textarea name="excerpt" id="excerpt" cols="30" rows="10"
                                  class="textarea @error('excerpt') is-danger @enderror"></textarea>
                    </div>

                    @error('excerpt')
                    <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>
                    <div class="control">
                        <textarea name="body" id="body" cols="30" rows="10"
                                  class="textarea @error('body') is-danger @enderror"></textarea>
                    </div>

                    @error('body')
                    <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>

                <div class="field">
                    <label for="tags" class="label">Tags</label>

                    <div class="control">
                        <select name="tags[]" id="">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @error('tags')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
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
