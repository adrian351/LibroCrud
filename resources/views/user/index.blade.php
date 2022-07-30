@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                  <i class="fas fa-user" style="font-size: 3rem;"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $user->name }}</h5>
                  <p class="card-text">{{ $user->email }}</p>
                  <br/>
                  <p> {{ $user->created_at }}</p>
                </div>
              </div>
        </div>
    </div>
    <a href="{{ route('book.index') }}" title="Volver" style="padding-left: 34%"><i class="fas fa-arrow-left" style="font-size: 1.5rem;"></i></a>
</div>
@endsection