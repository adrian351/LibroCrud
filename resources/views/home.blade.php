@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center mb-3">
    <div class="col-md">
      <div class="card">
        <div class="card-body">
          <div class="card-body table-responsive p-0" id="div-tabla-scrollbar" style="height: 40em;">
            <table class="table table-head-fixed table-hover table-striped table-sm table-bordered" id="table-api">
              <thead>
                <tr>
                  <th scope="col">userId</th>
                  <th scope="col">Id</th>
                  <th scope="col">Title</th>
                  <th scope="col">Completado</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{--  <a href="{{ route('book.index') }}" title="Volver"><i class="fas fa-arrow-left" style="font-size: 1.5rem;"></i></a>  --}}
</div>
@endsection
