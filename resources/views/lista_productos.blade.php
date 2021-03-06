@extends('layouts.app')

@section('content')

    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                <b>PRODUCTOS</b>
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
                                            <a href="{{ route('producto.pap') }}" class="btn btn-warning">
                                                <i class="material-icons left">delete_sweep</i>PAPELERA
                                            </a>
                                        </div>
                                        <div class="btn-group col-md-2 right">
                                            <a href="{{ route('producto.reg') }}" class="btn btn-success">
                                                <i class="material-icons left">queue</i>REGISTRAR
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
                                            <th class="center">Código</th>
                                            <th class="center">Código alterno</th>
                                            <th class="center">Nombre</th>
                                            <th class="center">Descripción</th>
                                            <th class="center">Marca</th>
                                            <th class="center">Stock</th>
                                            <th class="center">Precio mayoreo</th>
                                            <th class="center">Precio menudeo</th>
                                            <th class="center">Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="center">1201</td>
                                            <td class="center">PARDIC26</td>
                                            <td class="center">Par Direccional</td>
                                            <td class="center">Par Direccional Cuadrada Trailer</td>
                                            <td class="center">Kenworth Gel</td>
                                            <td class="center">16</td>
                                            <td class="center">$1100.00</td>
                                            <td class="center">$999.00</td>
                                            <td class="center">
                                                <button data-toggle="modal" data-target="#modalempleado" type="submit"
                                                    class="btn btn-info"><i class="fa fa-eye"></i></button>
                                                <button onclick="location.href='{{ route('producto.act') }}'"
                                                    type="submit" class="btn-primary dropdown-toggle btn"><i
                                                        class="fa fa-pencil-square"></i></button>
                                                <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()"><i
                                                        class="fa fa-trash-o"></i></button>

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
    <!-- Modal de empleados-->
    <div class="modal fade" id="modalempleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-content">
                                        <form class="col s12">
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="email" class="form-label">Tipo de medida</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" class="form-control validate" id="email"
                                                        disabled="disabled" placeholder="" value="pz">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="tel">Stock</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="tel" class="form-control validate"
                                                        disabled="disabled" placeholder="" value="16">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="calle" class="form-label">Stock máximo</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" class="form-control validate" id="calle"
                                                        disabled="disabled" placeholder="" value="30">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="entre_cal">Stock mínimo</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="entre_cal" class="form-control validate"
                                                        disabled="disabled" placeholder="" value="10">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="no_ext">Precio menudeo</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="no_ext" class="form-control validate"
                                                        disabled="disabled" placeholder="" value="$1100.00">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="cod_pos" class="form-label">Precio mayoreo</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" class="form-control validate" id="cod_pos"
                                                        disabled="disabled" placeholder="" value="$999.90">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="no_int">Utilidad (%)</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="no_int" class="form-control validate"
                                                        disabled="disabled" placeholder="" value="5">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="colonia">Comisión (%)</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="colonia" class="form-control validate"
                                                        disabled="disabled" placeholder="" value="2">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="local">Código del SAT</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="local" class="form-control validate"
                                                        disabled="disabled" placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="ciudad" class="form-label">Unidad del SAT</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" class="form-control validate" id="ciudad"
                                                        disabled="disabled" placeholder="" value="">
                                                </div>
                                            </div>
                                        </form>
                                        <div class="clearBoth">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cerrar</button>
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
    </div>
@endsection
