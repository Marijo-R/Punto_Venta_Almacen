@extends('layouts.app')

@section('content') 
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>ACTUALIZAR TIPO DE MEDIDA</b>
                </h1>
            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="col s12 m6 ">
                                            <label for="codigo" class="form-label">Unidad de medida</label>
                                            <input type="varchar" class="form-control" id="codigo" class="validate" placeholder="Unidad de medida" value="Kilogramo">
                                        </div>
                                        <div class="col s12 m6 ">
                                            <label for="codigo_alterno" class="form-label">Simbolo</label>
                                            <input type="varchar" class="form-control" id="codigo_alterno" class="validate" placeholder="Simbolo" value="kg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                            <div class="btn-group right">
                                                <a href="{{ route('medida') }}" class="btn-danger dropdown-toggle btn">
                                                    <i class="material-icons left">cancel</i>CANCELAR
                                                </a>
                                            </div>
                                            <div class="btn-group col-sm-2 right">
                                                <a onclick="Alertabtn()" href="{{ route('medida') }}" class="btn btn-success">
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