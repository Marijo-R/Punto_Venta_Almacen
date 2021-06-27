@extends('layouts.app')

@section('content')  
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    <b>NUEVO PROVEEDOR</b>
                </h1>
            </div>
            <script>
            function fisico() {
                document.querySelector(".fisico").style.display = "block";
                document.getElementById("fisico").style.display = "block";
                document.querySelector(".fisico_cr").style.display = "block";
                document.querySelector(".moral").style.display = "none";
                document.getElementById("moral").style.display = "none";
            }

            function moral() {
                document.querySelector(".moral").style.display = "block";
                document.getElementById("moral").style.display = "block";
                document.querySelector(".fisico").style.display = "none";
                document.getElementById("fisico").style.display = "none";
                document.querySelector(".fisico_cr").style.display = "none";
            }
            </script>
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <form class="col s12">
                                    <div><label><strong>TIPO DE CLIENTE</strong></label></div>
                                    <div class="row">
                                        <form action="#">
                                            <p>
                                                <input onclick="fisico()" name="group1" type="radio" id="check1"/>
                                                <label for="check1">Físico</label>
                                                <input onclick="moral()" name="group1" type="radio" id="check2" />
                                                <label for="check2">Moral</label>
                                            </p>
                                        </form>
                                    </div>
                                    <div id="fisico" style="display: none;"><label><strong>DATOS PERSONALES</strong></label></div>
                                    <div class="row fisico" style="display: none;">
                                        <div class="col s12 m4 ">
                                            <label for="nombre" class="form-label">Nombre</label>
                                            <input type="varchar" class="form-control" name="nombre" id="fisico" class="validate" placeholder="Nombre">
                                        </div>
                                        <div class="col s12 m4 ">
                                            <label for="apellido_ap" class="form-label">Primer apellido</label>
                                            <input type="varchar" class="form-control" id="apellido" class="validate" placeholder="Primero apellido">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="segundo_ap" class="form-label">Segundo apellido</label>
                                            <input type="varchar" class="form-control" id="segundo_ap" class="validate" placeholder="Segundo apellido">
                                        </div>
                                    </div>
                                    <div class="row fisico_cr" style="display: none;">
                                        <div class="col s12 m6">
                                            <label for="clave"> Clave Única de Registro de Población (CURP)</label>
                                            <input id="clave" class="form-control" type="varchar" class="validate" placeholder="0000000000000">
                                        </div>
                                        <div class="col s12 m6">
                                            <label for="alias" class="form-label">Registro Federal de Contribuyentes (RFC)</label>
                                            <input type="varchar" class="form-control" id="alias" class="validate" placeholder="00000000000000">
                                        </div>
                                    </div>
                                    <div id="moral" style="display: none;"><label><strong>DATOS DE LA EMPRESA</strong></label></div>
                                    <div class="row moral" style="display: none;">
                                        <div class="col s12 m6">
                                            <label for="fecha_nac">Razón social</label>
                                            <input id="fecha_nac" class="form-control" type="varchar" class="validate" placeholder="Razón social">
                                        </div>
                                        <div class="col s12 m6">
                                            <label for="alias" class="form-label">Registro Federal de Contribuyentes (RFC)</label>
                                            <input type="varchar" class="form-control" id="alias" class="validate" placeholder="00000000000000">
                                        </div>
                                    </div>
                                    <div><label><strong>DATOS DE CONTACTO</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="varchar" class="form-control" id="email" class="validate" placeholder="ejemplo@gmail.com">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="tipo_num" class="form-label">Tipo</label>
                                            <select  type="varchar" class="form-control">
                                                <option value="" disabled selected >Desplega la lista...</option>
                                                <option value="1">Teléfono</option>
                                                <option value="2">Celular</option>
                                            </select>
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="tel">Número</label>
                                            <input id="tel" class="form-control" type="varchar" class="validate" placeholder="0000000000">
                                        </div>
                                    </div>
                                    <div><label><strong>DIRECCIÓN</strong></label></div>
                                    <div class="row">
                                        <div class="col s12 m3">
                                            <label for="calle" class="form-label">Calle</label>
                                            <input type="varchar" class="form-control" id="calle" class="validate" placeholder="Calle">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="entre_cal">Entre calles</label>
                                            <input id="entre_cal" class="form-control" type="varchar" class="validate" placeholder="Entre calles">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="no_int">Número interior</label>
                                            <input id="no_int" class="form-control" type="varchar" class="validate" placeholder="00">
                                        </div>
                                        <div class="col s12 m3">
                                            <label for="no_ext">Número exterior</label>
                                            <input id="no_ext" class="form-control" type="varchar" class="validate" placeholder="00">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="cod_pos" class="form-label">Código Postal (C.P.)</label>
                                            <input type="varchar" class="form-control" id="cod_pos" class="validate" placeholder="00000">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="colonia">Colonia</label>
                                            <input type="varchar" id="colonia" class="form-control" class="validate" placeholder="Colonia">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="local">Localidad</label>
                                            <input type="varchar" id="local" class="form-control" class="validate" placeholder="Localidad">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m4">
                                            <label for="ciudad" class="form-label">Ciudad</label>
                                            <input type="varchar" class="form-control" id="ciudad" class="validate" placeholder="Ciudad">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="estado">Entidad Federativa (estado)</label>
                                            <input type="varchar" id="estado" class="form-control" class="validate" placeholder="Estado">
                                        </div>
                                        <div class="col s12 m4">
                                            <label for="pais">País</label>
                                            <input type="varchar" id="pais" class="form-control" class="validate" placeholder="País">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m12">
                                            <label for="textarea" class="form-label">Comentarios</label>
                                            <textarea type="varchar" id="textarea" class="form-control validate" placeholder="Comentarios..." data-length="255"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12 m11 offset-m1 xl7 offset-xl1 ">
                                            <div class="btn-group right">
                                                <a href="{{ route('proveedor') }}" class="btn-danger dropdown-toggle btn">
                                                    <i class="material-icons left">cancel</i>CANCELAR
                                                </a>
                                            </div>
                                            <div class="btn-group col-sm-2 right">
                                                <a onclick="Alertabtn()" href="{{ route('proveedor') }}" class="btn btn-success">
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
        
@endsection