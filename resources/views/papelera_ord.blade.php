@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                <b>PAPELERA-ORDEN DE COMPRA</b>
            </h1>
        </div>

        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="table-responsive">
                                <div class=" col-md-12">
                                    <div class="row">
                                        <div class="btn-group col-md-2 right">
                                            <a href="{{ route('orden') }}" class="btn btn-warning">
                                                <i class="material-icons left">arrow_back</i>REGRESAR
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="dataTables_length" id="dataTables-example_length">
                                                <label>
                                                    Registros por página
                                                    <select name="dataTables-example_length"
                                                        aria-controls="dataTables-example" class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 right">
                                            <div class="dataTables_length" id="dataTables-example_length">
                                                <label>
                                                    Buscar
                                                    <input type="search" class="form-control input-sm"
                                                        aria-controls="dataTables-example">
                                                </label>
                                                <button type="submit" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">No. Orden</th>
                                            <th class="center">Fecha</th>
                                            <th class="center">Usuario</th>
                                            <th class="center">Proveedor</th>
                                            <th class="center">Lugar de entrega</th>
                                            <th class="center">Entrega de factura</th>
                                            <th class="center">Área solicitante</th>
                                            <th class="center">Prioridad</th>
                                            <th class="center">Comentarios</th>
                                            <th class="center">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="center">1100</td>
                                            <td class="center">2 de Junio de 2021</td>
                                            <td class="center">Mjo26</td>
                                            <td class="center">José Reyes Mendez</td>
                                            <td class="center">Boca del Rio - Córdoba 21, El Pedregal, Yanga, Ver.</td>
                                            <td class="center">mjromero@gmail.com</td>
                                            <td class="center">Almacén</td>
                                            <td class="center">No urgente</td>
                                            <td class="center">NA</td>
                                            <td class="center">
                                                <a onclick="Alertabtn()">
                                                    <button onclick="location.href='{{ route('orden') }}'" type="submit"
                                                        class="btn-primary dropdown-toggle btn"><i
                                                            class="fa fa-repeat"></i></button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_info" id="dataTables-example_info" role="alert"
                                            aria-live="polite" aria-relevant="all">
                                            Mostrando 1 a 4 de 4 entradas
                                        </div>
                                    </div>

                                    <div class="col-sm-3 right">
                                        <div>
                                            <ul class="pagination">
                                                <li class="paginate_button previous disabled">
                                                    <a href="#">Anterior</a>
                                                </li>
                                                <li class="paginate_button previous disabled"
                                                    aria-controls="dataTables-example" tabindex="0">
                                                    <a href="#">1</a>
                                                </li>
                                                <li class="paginate_button previous disabled"
                                                    aria-controls="dataTables-example" tabindex="0">
                                                    <a href="#">2</a>
                                                </li>
                                                <li class="paginate_button previous disabled">
                                                    <a href="#">Siguiente</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
