@extends('layouts.app')

@section('content')

    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                <b>ORDEN DE COMPRA</b>
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
                                            <a href="{{ route('orden.pap') }}" class="btn btn-warning">
                                                <i class="material-icons left">delete_sweep</i>PAPELERA
                                            </a>
                                        </div>
                                        <div class="btn-group col-md-2 right">
                                            <a href="{{ route('orden.reg') }}" class="btn btn-success">
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
                                            <td class="center">1101</td>
                                            <td class="center">25 de Junio de 2021</td>
                                            <td class="center">Mjo26</td>
                                            <td class="center">José Reyes Mendez</td>
                                            <td class="center">Boca del Rio - Córdoba 21, El Pedregal, Yanga, Ver.</td>
                                            <td class="center">mjromero@gmail.com</td>
                                            <td class="center">Almacén</td>
                                            <td class="center">Urgente</td>
                                            <td class="center">NA</td>
                                            <td class="center">
                                                <button data-toggle="modal" data-target="#modalempleado" type="submit"
                                                    class="btn btn-info"><i class="fa fa-eye"></i></button>
                                                <button onclick="location.href='{{ route('orden.act') }}'" type="submit"
                                                    class="btn-primary dropdown-toggle btn"><i
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
                                            <table class="table-responsive-sm table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                    <th class="center">No.</th>
                                                    <th class="center">Código</th>
                                                    <th class="center">Código alterno</th>
                                                    <th class="center">Nombre</th>
                                                    <th class="center">Descripción</th>
                                                    <th class="center">Marca</th>
                                                    <th class="center">Cantidad</th>
                                                    <th class="center">Precio</th>
                                                    <th class="center">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="odd gradeX">
                                                    <td class="center"></td>
                                                    <td class="center"></td>
                                                    <td class="center"></td>
                                                    <td class="center"></td>
                                                    <td class="center"></td>
                                                    <td class="center"></td>
                                                    <td class="center">
                                                        <textarea cols="5"></textarea>
                                                    </td>
                                                    <td class="center"></td>
                                                    <td class="center"></td>
                                                </tr> 
                                            </table>
                                        </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="no_ext">Subtotal</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="no_ext" class="form-control validate"
                                                        disabled="disabled" placeholder="$0.00">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="cod_pos" class="form-label">Descuento</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" class="form-control validate" id="cod_pos"
                                                        disabled="disabled" placeholder="%">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="colonia">IVA</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="colonia" class="form-control validate"
                                                        disabled="disabled" placeholder="$0.00">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="local">Retención</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="local" class="form-control validate"
                                                        disabled="disabled" placeholder="$0.00">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="ciudad" class="form-label">Total</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" class="form-control validate" id="ciudad"
                                                        disabled="disabled" placeholder="$0.00">
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
