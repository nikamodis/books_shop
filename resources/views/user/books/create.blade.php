@extends('layouts.app')

@section('content')
    <div class="container card my-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            {!! Form::open(['url' => 'user/books/index']) !!}
            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', '', ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('author', 'Author') }}
                {{ Form::text('author', '', ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('genres', 'Genres') }}
                <br />
                @foreach ($genres as $genre)
                    {{ Form::checkbox('genres[]', '$genres->id', ['class' => 'form-check-input']) }}
                    {{ $genre->name }}
                    <br />
                @endforeach
            </div>
            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', '', ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Price') }}
                {{ Form::text('price', '', ['class' => 'form-control', 'required' => 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('cover', 'Cover Photo') }}
                {{ Form::file('image', ['class' => 'form-control-file']) }}
            </div>
            <div>
                {{ Form::submit('Submit', ['class' => 'btn btn-primary mb-5']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
