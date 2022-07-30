@extends('layouts.app')
{{--  @extends('layouts.menu')  --}}
@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                  {{ __('Autor: ') }}{{ $book->author }}
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $book->title }}</h5>
                  <p class="card-text">{{ $book->description }}</p>
                  <br/>
                  <p class="card-text ">{{ __('Género: ') }}{{ $book->literary_engre }}</p>
                </div>
                <div class="card-footer text-muted float-right">
                  {{ $book->created_at }}
                </div>
              </div>
        </div>
    </div>
    <a href="{{ route('book.index') }}" title="Volver" style="padding-left: 17%"><i class="fas fa-arrow-left" style="font-size: 1.5rem;"></i></a>
</div>
@endsection