@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center mb-3">
    <div class="col-md">
      <div class="card">
        <div class="card-body">
          <div class="card-body table-responsive p-0" id="div-tabla-scrollbar" style="height: 40em;">
            <table class="table table-head-fixed table-hover table-striped table-sm table-bordered">
              <thead style=" position: sticky; top: 0; z-index: 10; background-color:rgb(158, 186, 190)">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Título</th>
                  <th scope="col">Author</th>
                  <th scope="col">Descrpción</th>
                  <th scope="col">Género literario</th>
                  <th colspan="3"></th>
                </tr>
              </thead>
              <tbody> 
                @foreach($books as $book)
                  <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->description}}</td>
                    <td>{{ $book->literary_engre }}</td>
                    <td>
                      <a class="btn btn-sm btn-outline-primary" href="{{ route('book.show',$book->id) }}"><i class="fas fa-eye"></i></a>
                    </td>
                    <td>
                      <a class="btn btn-sm btn-outline-info" href="{{ route('book.edit', $book->id) }}"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                      <form method="post" action="{{ route('book.destroy', $book->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <a class="btn btn-info w-100" href="{{ route('book.create') }}">
        {{ __('Nuevo libro') }}
      </a>
    </div>
  </div>
</div>
@endsection
