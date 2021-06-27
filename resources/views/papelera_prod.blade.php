@extends('layouts.app')

@section('content') 
        <div id="page-wrapper" >
          <div class="header"> 
            <h1 class="page-header">
              <b>PAPELERA-PRODUCTOS</b>
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
                            <a href="{{ route('producto') }}" class="btn btn-warning">
                              <i class="material-icons left">arrow_back</i>REGRESAR
                            </a>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="dataTables_length" id="dataTables-example_length">
                              <label>
                                Registros por página
                                <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
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
                                <input type="search" class="form-control input-sm" aria-controls="dataTables-example">
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
                              <th class="center">ID</th>
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
                            <td class="center">1</td>
                            <td class="center">1201</td>
                            <td class="center">PARDIC26</td>
                            <td class="center">Par Direccional</td>
                            <td class="center">Par Direccional Cuadrada Trailer</td>
                            <td class="center">Kenworth Gel</td>
                            <td class="center">15</td>
                            <td class="center">$1100.00</td>
                            <td class="center">$999.00</td>
                            <td class="center">
                              <a onclick="Alertabtn()">
                                <button onclick="location.href='{{ route('producto') }}'"  type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-repeat"></i></button>
                              </a>
                            </td>
                          </tr>  
                          <tr class="even gradeC">
                            <td class="center">2</td>
                            <td class="center">1202</td>
                            <td class="center"></td>
                            <td class="center">Capuchones Cromados</td>
                            <td class="center">Capuchones Cromados Lisos</td>
                            <td class="center"></td>
                            <td class="center">45</td>
                            <td class="center">$159.99</td>
                            <td class="center">$129.90</td>
                            <td class="center">
                              <a onclick="Alertabtn()">
                                <button onclick="location.href='{{ route('producto') }}'"  type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-repeat"></i></button>
                              </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>  

                      <div class="row">
                        <div class="col-sm-6">
                          <div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">
                            Mostrando 1 a 4 de 4 entradas
                          </div>
                        </div>

                        <div class="col-sm-3 right">
                          <div>
                            <ul class="pagination">
                              <li class="paginate_button previous disabled" >
                                <a href="#">Anterior</a>
                              </li>
                              <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0">
                                <a href="#">1</a>
                              </li>
                              <li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0">
                                <a href="#">2</a>
                              </li>
                              <li class="paginate_button previous disabled"  >
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
