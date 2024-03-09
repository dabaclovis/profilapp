@extends('layouts.users')


@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Article Detail</h1>
        </div>
        <div class="card-body">
            <div class=" form-group">
                <h3>{{ Str::ucfirst($article->title) }}</h3>
            </div>
            <div class="form-group" id="styled">
              <p>{{ Str::ucfirst($article->body) }}</p>
            </div>
        </div>
    </div>
    <div class="form-group mt-1">
        <a href="{{ route('articles.index') }}" class=" btn btn-secondary"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
    </div>
    <style>
        #styled{
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.45em;
        }
    </style>
@endsection
