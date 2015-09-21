@extends('layout')

@section('title', 'Listado de mensajes')

@section('content')
            <div class="col-lg-12 text-center">
                <h2>Mensajes</h2>
                <hr class="star-primary">
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">

            <div class="col-sm-12 portfolio-item">
                {!! Form::open(array('url' => '/')) !!}
                {!! Form::token() !!}
                {!!
                    Form::text('title', null,
                                array(
                                    'class' => 'form-control input-lg',
                                    'placeholder' => 'Titulo de la nueva publicación'
                                    )
                                )
                !!}
                {!!
                    Form::text('body', null,
                                array(
                                    'class' => 'form-control input-lg',
                                    'rows' => 6,
                                    'placeholder' => 'Contenido'
                                    )
                                )
                !!}
                {!! Form::submit('Publicar', array ('class' => 'center-block btn btn-primary btn-lg center')) !!}
                {!! Form::close() !!}
            </div>
        </div>
        @forelse ($posts as $post)
        <div class="row">
            <div class="col-sm-12 portfolio-item">
                <h1>{{ $post->title }}</h1>
                <small>{{ $post->created_at }}</small>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        @empty
            <p>No hay nada por ahora...</p>
        @endforelse

@endsection
