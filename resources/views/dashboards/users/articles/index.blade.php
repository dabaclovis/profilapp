@extends('layouts.users')

@section('content')
    <div class="card" id="landed">
        <div class="card-header w3-teal w3-padding-16">
            <h3>Articles</h3>
        </div>
        <div class="card-body w3-xlarge w3-center">
            <a href="" id="hided">Create Article</a>
        </div>
    </div>
    <div class="card" id="formed">
            <div class="card-body">
                <div class="card">
                        <div class="card-header w3-teal w3-center w3-padding-24 w3-xlarge mt-2">
                            Create Article
                        </div>
                        <div class="card-body">
                            {!! Form::open(['route' => 'articles.store','method' => 'post','enctype' => 'multipart/form-data']) !!}
                            <div class=" form-group">
                                {!! Form::label('title', 'Title:', ['class' => 'w3-xlarge']) !!}
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                @error('title')
                                <div class=" alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class=" form-group">
                                {!! Form::label('body', 'Content:', ['class' => 'w3-xlarge']) !!}
                                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                                @error('body')
                                <div class=" alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class=" form-group">
                                {!! Form::file('image') !!}
                            </div>
                            <div class=" d-flex justify-content-end form-group">
                                {!! Form::submit('Create', ['class' => 'btn w3-teal']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
