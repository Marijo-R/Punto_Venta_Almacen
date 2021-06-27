@extends('layouts.app')

@section('content') 
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>ACTUALIZAR PRODUCTO</b>
                </h1>
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="col s12 m2 ">
                                            <label for="codigo" class="form-label">Código</label>
                                            <input type="varchar" class="form-control" id="codigo" class="validate" placeholder="Código" value="1201">
                                        </div>
                                        <div class="col s12 m3 ">
                                            <label for="codigo_alterno" class="form-label">Código alterno</label>
                                            <input type="varchar" class="form-control" id="codigo_alterno" class="validate" placeholder="Código alterno" value="PARDIC26">
                                        </div>
                                        <div class="col s12 m7">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="varchar" class="form-control" id="nombre" class="validate" placeholder="Nombre" value="Par Direccional">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m7">
                                            <label for="textarea" class="form-label">Descripción</label>
                                            <input type="varchar" id="textarea" class="form-control validate" placeholder="Descripción..." data-length="255" value="Par direccional cuadrada trailer"/>
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="marca">Marca</label>
                                            <input id="marca" class="form-control" type="varchar" class="validate" placeholder="Marca" value="Kenworth Gel">
                                        </div>
                                        <div class="col s12 m2">
                                            <label for="marca">Tipo de medida</label>
                                            <select  type="varchar" class="form-control">
                                                <option value="" disabled>Desplega la lista...</option>
                                                <option value="1">kg</option>
                                                <option value="2">g</option>
                                                <option value="3">m</option>
                                                <option value="4" selected>pz</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="marca">Stock</label>
                                            <input id="marca" class="form-control" type="varchar" class="validate" placeholder="00" value="15">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="marca">Stock máximo</label>
                                            <input id="marca" class="form-control" type="varchar" class="validate" placeholder="00" value="5">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="marca">Stock mínimo</label>
                                            <input id="marca" class="form-control" type="varchar" class="validate" placeholder="00" value="50">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="marca">Fecha de actualización</label>
                                            <input id="marca" class="form-control" type="date" class="validate" placeholder="%" value="22/06/2021">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="marca">Precio menudeo</label>
                                            <input id="marca" class="form-control" type="varchar" class="validate" placeholder="00" value="999.00">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="marca">Precio mayoreo</label>
                                            <input id="marca" class="form-control" type="varchar" class="validate" placeholder="00" value="1100.00">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m2">
                                            <label for="marca">Comisión (%)</label>
                                            <input id="marca" class="form-control" type="varchar" class="validate" placeholder="00" value="3">
                                        </div>
                                        <div class="col s12 m2">
                                            <label for="marca">Utilidad (%)</label>
                                            <input id="marca" class="form-control" type="varchar" class="validate" placeholder="%" value="5">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="marca">Código del SAT</label>
                                            <input id="marca" class="form-control" type="varchar" class="validate" placeholder="Código SAT">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="marca">Unidad del SAT</label>
                                            <input id="marca" class="form-control" type="varchar" class="validate" placeholder="Unidad del SAT">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                            <div class="btn-group right">
                                                <a href="{{ route('producto') }}" class="btn-danger dropdown-toggle btn">
                                                    <i class="material-icons left">cancel</i>CANCELAR
                                                </a>
                                            </div>
                                            <div class="btn-group col-sm-2 right">
                                                <a onclick="Alertabtn()" href="{{ route('producto') }}" class="btn btn-success">
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
        </div>

@endsection