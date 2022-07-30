@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" action="{{ route('book.store') }}" id="form-create">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="form-group  mb-3">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" id="title" required name="title" />
                        </div>
                        
                        <div class="form-group  mb-3">
                            <label for="description">Autor</label>
                            <input type="text" class="form-control" id="author" required name="author"
                            />
                        </div>
                        <div class="form-group  mb-3">
                            <label for="description">Género literario</label>
                            <input type="text" class="form-control" id="literary_engre" required name="literary_engre"
                            />
                        </div>
    
                        <div class="form-group mb-3">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div> 
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="form-group col-sm-6">
                            <a href="{{ route('book.index') }}" title="Volver"><i class="fas fa-arrow-left" style="font-size: 1.5rem;"></i></a>
                        </div>
                        <div class="form-group col-sm-6">
                            <button class="btn btn-success btn-md w-100" type="submit" >Guardar</button>
                        </div>  
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection