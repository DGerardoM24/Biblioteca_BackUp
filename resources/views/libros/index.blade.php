@extends('layouts.app')
@section('content')
<style> .div-1{
    background-color: #151515;
}
</style>
    <div class="py-2" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center" contenteditable="true"><strong>Biblioteca Digital</strong></h1>
                    <h5 class="text-center"><strong>La mejor Biblioteca Digital del Mundo</strong></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container card shadow">
        @if (Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible " role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <hr>
        <a href="{{ url('libros/create') }}" class="btn btn-success" style="width: 4cm">Nuevo Registro</a>
        <hr>
        <br>
        <br>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Clasifiación</th>
                    <th>Editorial</th>
                    <th>Año de Publicación</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->id_libro }}</td>
                        <td>{{ $libro->nombre_libro }}</td>
                        <td>{{ $libro->codigo }}</td>
                        <td>{{ $libro->id_clasificacion }}</td>
                        <td>{{ $libro->id_editorial }}</td>
                        <td>{{ $libro->anio_publicacion }}</td>
                        <td>

                            <a href="{{ url('/libros/' . $libro->id_libro . '/edit') }}" class="btn btn-warning">Editar</a>


                            <form action="{{ url('/libros/' . $libro->id_libro) }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('Quieres Borrar?')" value="Borrar"
                                    class="btn btn-danger">
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $libros->links() }}
    </div>
    <br>
    <br>
    <div class="py-3 div-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6 p-3">
                    <h5 class="text-white">Principal</h5>
                    <ul class="list-unstyled">
                        <li> <a href="#">Inicio</a> </li>
                        <li> <a href="#">Informacion<br></a> </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 p-3">
                    <h5 class="text-white">Llamenos</h5>
                    <ul class="list-unstyled text-white">
                        <li> +0 (000) 722 0000 000 </li>
                        <li> +0 (000) 722 0000 000 </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 p-3">
                    <p class="mb-0 text-white"> Biblioteca Digital desde 2022</p>
                    <p class="mb-0 text-white"><a href="#"> ¿Has encontrado un error?</a></p>
                </div>
                <div class="col-lg-3 col-md-6 p-3 text-white">
                    <h5> <b>Siguenos</b></h5>
                    <div class="row">
                        <div class="col-md-12 d-flex align-items-center justify-content-between my-2"> <a href="#">
                                <i class="d-block fa fa-facebook-official text-muted fa-lg mr-2"></i>
                            </a> <a href="#">
                                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
                            </a> <a href="#">
                                <i class="d-block fa fa-google-plus-official text-muted fa-lg mx-2"></i>
                            </a> <a href="#">
                                <i class="d-block fa fa-pinterest-p text-muted fa-lg mx-2"></i>
                            </a> <a href="#">
                                <i class="d-block fa fa-reddit text-muted fa-lg mx-2"></i>
                            </a> <a href="#">
                                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
                            </a> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0 mt-2 text-white">© 2014-2018 . All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
@endsection
