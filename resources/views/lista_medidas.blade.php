@extends('layouts.app')

@section('content')

<div id="page-wrapper" >
          <div class="header"> 
            <h1 class="page-header">
              <b>TIPOS DE MEDIDAS</b>
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
                            <a href="{{ route('medida.pap') }}" class="btn btn-warning">
                              <i class="material-icons left">delete_sweep</i>PAPELERA
                            </a>
                          </div>
                          <div class="btn-group col-md-2 right">
                            <a href="{{ route('medida.reg') }}" class="btn btn-success">
                              <i class="material-icons left">queue</i>REGISTRAR
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
                              <th class="center">#</th>
                              <th class="center">Unidad de medida</th>
                              <th class="center">Simbolo</th>
                              <th class="center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr class="odd gradeX">
                            <td class="center">1</td>
                            <td class="center">Kilogramos</td>
                            <td class="center">kg</td>
                            <td class="center">
                              <button  onclick="location.href='{{ route('medida.act') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o"></i></button>
                            </td>
                          </tr>  
                          <tr class="even gradeC">
                            <td class="center">2</td>
                            <td class="center">Gramos</td>
                            <td class="center">g</td>
                            <td class="center">
                              <button  onclick="location.href='{{ url('/actualizar_cli') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o"></i></button>
                            </td>
                          </tr>  
                          <tr class="odd gradeA">
                            <td class="center">3</td>
                            <td class="center">Metros</td>
                            <td class="center">m</td>
                            <td class="center">
                              <button  onclick="location.href='{{ url('/actualizar_cli') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o"></i></button>
                            </td>
                          </tr> 
                          <tr class="odd gradeA">
                            <td class="center">4</td>
                            <td class="center">Pieza</td>
                            <td class="center">pz</td>
                            <td class="center">
                              <button  onclick="location.href='{{ route('proveedor.act') }}'" type="submit" class="btn-primary dropdown-toggle btn"><i class="fa fa-pencil-square"></i></button>
                              <button type="submit" class="btn btn-danger" onclick="AlertaEliminar()" ><i class="fa fa-trash-o"></i></button>
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