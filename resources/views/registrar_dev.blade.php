@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                <b>DEVOLUCIÓN</b>
            </h1>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-content">
                            <form class="col s12">
                                <div class="row">
                                    <div class="col s12 m4 ">
                                        <label for="nombre" class="form-label">No. Orden de Compra</label>
                                        <input type="varchar" class="form-control" id="id_orden" class="validate"
                                            placeholder="0">
                                    </div>
                                    <div class="col s12 m4 ">
                                        <label for="apellido_ap" class="form-label">Fecha</label>
                                        <input type="date" class="form-control" id="fecha_orden" class="validate">
                                    </div>
                                    <div class="col s12 m4">
                                        <label for="segundo_ap" class="form-label">Usuario</label>
                                        <input type="varchar" class="form-control" id="id_usuario" class="validate"
                                            placeholder="Usuario">
                                    </div>
                                </div>
                                <div><label><strong>DATOS DEL PROVEEDOR</strong></label></div>
                                <div class="row">
                                    <div class="col s12 m6">
                                        <label for="segundo_ap" class="form-label">Proveedor</label>
                                        <input type="varchar" class="form-control" id="segundo_ap" class="validate"
                                            placeholder="Nombre del proveedor">
                                    </div>
                                    <div class="col s12 m6">
                                        <label for="segundo_ap" class="form-label">Email</label>
                                        <input type="varchar" class="form-control" id="segundo_ap" class="validate"
                                            placeholder="ejemplo@gmail.com">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m8">
                                        <label for="segundo_ap" class="form-label">Dirección</label>
                                        <input type="varchar" class="form-control" id="segundo_ap" class="validate"
                                            placeholder="Dirección del proveedor">
                                    </div>
                                    <div class="col s12 m4">
                                        <label for="segundo_ap" class="form-label">Teléfono</label>
                                        <input type="varchar" class="form-control" id="segundo_ap" class="validate"
                                            placeholder="0000000000">
                                    </div>
                                </div>
                                <div><label><strong>DATOS DE FACTURACIÓN</strong></label></div>
                                <div class="row">
                                    <div class="col s12 m12">
                                        <label for="textarea" class="form-label">Lugar de entrega</label>
                                        <textarea type="varchar" id="textarea" class="form-control validate"
                                            placeholder="Dirección..." data-length="255"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m4">
                                        <label for="email" class="form-label">Entrega de factura</label>
                                        <input type="varchar" class="form-control" id="email" class="validate"
                                            placeholder="">
                                    </div>
                                    <div class="col s12 m4">
                                        <label for="tipo_num" class="form-label">Área solicitante</label>
                                        <select type="varchar" class="form-control">
                                            <option value="" disabled selected>Desplega la lista...</option>
                                            <option value="1">Tienda</option>
                                            <option value="2">Almacén</option>
                                        </select>
                                    </div>
                                    <div class="col s12 m4">
                                        <label for="email" class="form-label">Prioridad</label>
                                        <input type="varchar" class="form-control" id="email" class="validate"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12">
                                        <label for="textarea" class="form-label">Comentarios</label>
                                        <textarea type="varchar" id="textarea" class="form-control validate"
                                            placeholder="Comentarios..." data-length="255"></textarea>
                                    </div>
                                </div>
                                    <table class="table table-striped table-bordered table-hover">
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
                                                <th class="center">Opciones</th>
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
                                                <td class="center"></td>
                                                <td class="center"></td>
                                                <td class="center"></td>
                                                <td class="center">
                                                    <button data-toggle="modal" data-target="#modalempleado" type="submit"
                                                        class="btn btn-info"><i class="fa fa-eye"></i></button>
                                                </td>
                                            </tr>
                                    </table>
                                <div class="row">
                                    <div class="col s12 m2">
                                        <label for="email" class="form-label">Subtotal</label>
                                        <input type="varchar" class="form-control" id="subtotal" class="validate"
                                            placeholder="$0.00">
                                    </div>
                                    <div class="col s12 m2">
                                        <label for="email" class="form-label">Descuento</label>
                                        <input type="varchar" class="form-control" id="descuento" class="validate"
                                            placeholder="%">
                                    </div>
                                    <div class="col s12 m2">
                                        <label for="email" class="form-label">IVA</label>
                                        <input type="varchar" class="form-control" id="iva" class="validate"
                                            placeholder="$0.00">
                                    </div>
                                    <div class="col s12 m2">
                                        <label for="email" class="form-label">Retención</label>
                                        <input type="varchar" class="form-control" id="retencion" class="validate"
                                            placeholder="$0.00">
                                    </div>
                                    <div class="col s12 m2">
                                        <label for="email" class="form-label">Total</label>
                                        <input type="varchar" class="form-control" id="total" class="validate"
                                            placeholder="$0.00">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                        <div class="btn-group right">
                                            <a href="{{ route('orden') }}" class="btn-danger dropdown-toggle btn">
                                                <i class="material-icons left">cancel</i>CANCELAR
                                            </a>
                                        </div>
                                        <div class="btn-group col-sm-2 right">
                                            <a onclick="Alertabtn()" href="{{ route('orden') }}" class="btn btn-success">
                                                <i class="material-icons left">check_circle</i>GUARDAR
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="clearBoth"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                                    <label for="colonia">Cantidad</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="colonia" class="form-control validate"
                                                        disabled="disabled" placeholder="$0.00">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="local">Estado de devolución</label>
                                                </div>
                                                <div class="col s12 m6">
                                                    <input type="varchar" id="local" class="form-control validate"
                                                        disabled="disabled" placeholder="$0.00">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m6">
                                                    <label for="ciudad" class="form-label">Razón de devolución</label>
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
