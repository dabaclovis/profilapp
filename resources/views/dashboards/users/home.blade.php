@extends('layouts.users')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header w3-padding-24 w3-xlarge">{{ __('Dashboard') }}</div>
                <div class="card-body">


                   @if (count($articles) > 0)
                        <div class=" w3-xlarge w3-center w3-padding-16 w3-hover-teal">
                                <p>Your Create Articles</p>
                        </div>
                        @foreach ($articles as $article)
                            <div class="list-group">
                                <a href="{{ route('articles.show',$article->id) }}" class="list-group-item list-group-item-action flex-column align-items-start mb-1">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h3 class="mb-1">{{ Str::ucfirst($article->title) }}</h3>
                                        <small>{{ $article->created_at->diffForHumans() }}</small>
                                    </div>
                                    <blockquote class=" blockquote">
                                        <p class="mb-1">{{ Str::limit(Str::ucfirst($article->body), 250, '...') }}</p>
                                    </blockquote>
                                    <small>{{ Str::ucfirst($article->user->fname) }}</small>
                                </a>
                            </div>
                        @endforeach
                   @else
                        <div class="">
                            <p>You don't have any Article Created</p>
                        </div>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
