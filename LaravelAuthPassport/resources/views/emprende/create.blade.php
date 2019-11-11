@extends('layouts.backend')
@section('css_before')

<link href="https://rawgit.com/tempusdominus/bootstrap-4/master/build/css/tempusdominus-bootstrap-4.css" rel="stylesheet"/>
@endsection
@section('content')

                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Nuevo emprendedor</h1>
                         <!--   <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Forms</li>
                                    <li class="breadcrumb-item active" aria-current="page">Elements</li>
                                </ol>
                            </nav>-->
                        </div>
                    </div>
                </div>
                <!-- END Hero -->
                
                 <!-- Page Content -->
                <div class="content">
                      
                    <!-- Elements -->
                    <div class="block block-rounded block-bordered">
                       
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Crear un nuevo emprendedor</h3>
                        </div>
                        <!-- Block Tabs Default Style -->
                            <div class="block block-rounded block-bordered">
                                
                                
                                <div class="block-content tab-content">
                                    
                                           <form action="{{route('emprende.store')}}" method="POST" enctype="multipart/form-data">
                               @csrf
                                <!-- Basic Elements -->
                                  @include('emprende.form.info')
                                <h2 class="content-heading pt-0">Ingreso de información</h2>
                                <div class="row push">
                                    <div class="col-lg-4">

                                        <p class="text-muted">
                                            Complete la siguiente información
                                        </p>

                                    </div>
                                    <div class="col-lg-8 col-xl-5">
                                        <div class="form-group">
                                            <label for="example-text-input">Nombre servicio*</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre servicio">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input">Dirección*</label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección del servicio">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-password-input">Télefono*</label>
                                            <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Télefono contacto">
                                        </div>
                                          <div class="form-group">
                                            <label for="example-password-input">Correo*</label>
                                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo">
                                        </div>
                                          <div class="form-group row">
                                          <label for="example-password-input" class="col-lg-12">Atención*</label>
                                          <br>
                                          <br>
                                          <div class="col-lg-3 col-xl-3">
                                          <span>Días</span>
                                             
                                          </div>
                                          <div class="col-lg-4 col-xl-4">
                                              <select class="form-control" id="dia_inicio" name="dia_inicio">
                                                <option>Seleccionar</option>
                                                <option value="Lunes">Lunes</option>
                                                <option value="Martes">Martes</option>
                                                <option value="Miercoles">Miercoles</option>
                                                <option value="Jueves">Jueves</option>
                                                <option value="Viernes">Viernes</option>
                                                <option value="Sabado">Sabado</option>
                                                <option value="Domingo">Domingo</option>
                                              </select>
                                          </div>
                                          <div class="col-lg-1 col-xl-1">
                                              <span>a</span>
                                          </div>
                                           <div class="col-lg-4 col-xl-4">
                                               <select class="form-control" id="dia_termino" name="dia_termino">
                                                <option>Seleccionar</option>
                                                <option value="Lunes">Lunes</option>
                                                <option value="Martes">Martes</option>
                                                <option value="Miercoles">Miercoles</option>
                                                <option value="Jueves">Jueves</option>
                                                <option value="Viernes">Viernes</option>
                                                <option value="Sabado">Sabado</option>
                                                <option value="Domingo">Domingo</option>
                                              </select>
                                          </div>
                                           <div class="col-lg-3 col-xl-3">
                                           <br>
                                           
                                          <span>Horario</span>
                                             
                                          </div>
                                          <div class="col-lg-4 col-xl-4">
                                                 <br>
                                                 <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                                       <input type="text" class="form-control datetimepicker-input" id="datetimepicker3" name="horario_apertura" data-toggle="datetimepicker" data-target="#datetimepicker3" placeholder="Apertura" autocomplete="off"/>
                                                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                    </div>
                                                </div>
                                             
                                          </div>
                                          <div class="col-lg-1 col-xl-1">
                                              <br>
                                              <span>a</span>
                                          </div>
                                        <div class="col-lg-4 col-xl-4">
                                              <br>
                                                  <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                                       <input type="text" class="form-control datetimepicker-input" id="datetimepicker2" name="horario_cierre" data-toggle="datetimepicker" data-target="#datetimepicker2" placeholder="Cierre" autocomplete="off"/>
                                                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                    </div>
                                                </div>
                                            
                                          </div>
                                           
                                            <!--<div class="col-lg-12 col-xl-12">
                                         <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3" id="horarioapertura" name="horarioapertura" placeholder="Horario apertura" >
                                        <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                        </div>
                                              </div>--> 
                                      <!--      <label for="example-password-input" class="col-lg-8">Horario apertura</label>
                                            <div class="col-lg-8 col-xl-7">
                                            <input type="number" class="form-control" id="horarioapertura" name="horarioapertura" placeholder="Horario apertura">
                                            </div>
                                            <div class="col-lg-8 col-xl-5">
                                                <select class="form-control" id="tipohorario" name="tipohorario">
                                                <option>Seleccionar</option>
                                                <option value="Am">Am</option>
                                                <option value="Pm">Pm</option>
                                               
                                            </select>
                                            </div>-->
                                        </div>
                                            
                                             
                                          <!--  <div class="col-lg-12 col-xl-12">
                                         <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2" id="horariocierre" name="horariocierre" placeholder="Horario cierre"/>
                                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                        </div>
                                              </div> -->
                                            <!--<label for="example-password-input" class="col-lg-8">Horario cierre</label>
                                            <div class="col-lg-8 col-xl-7">
                                            <input type="number" class="form-control" id="horariocierre" name="horariocierre" placeholder="Horario cierre">
                                            </div>
                                            <div class="col-lg-8 col-xl-5">
                                                <select class="form-control" id="tipohorario2" name="tipohorario2">
                                                <option>Seleccionar</option>
                                                <option value="Am">Am</option>
                                                <option value="Pm">Pm</option>
                                               
                                            </select>
                                            </div>-->
                                      
                                        <div class="form-group">
                                            <label for="example-textarea-input">Descripción*</label>
                                            <textarea class="form-control" id="descripcion_servicio" name="descripcion_servicio" rows="4" placeholder="Descripción servicio"></textarea>
                                        </div>
                                    
                                         <button type="submit" class="btn btn-sm btn-outline-danger btn-block">Guardar emprendedor</button>
                                          <!--<button type="submit" class="btn btn-block btn-hero-primary btn-block btn-hero-sm">
                                              Guardar emprendedor
                                          </button>-->
                                    </div>
                                </div>
                            </form>
                                 
                                </div>
                            </div>
                            <!-- END Block Tabs Default Style -->
                      <!--  <div class="block-content">
                          
                        </div>-->
                        
                    </div>
</div>


@endsection
@section('js_after') 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment-with-locales.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
 <script src="https://rawgit.com/tempusdominus/bootstrap-4/master/build/js/tempusdominus-bootstrap-4.js"></script>
 <script type="text/javascript">
           $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT',
                    locale: 'es',
                    sideBySide: true
                });
            });
  
        </script>
        
    <script>

      $(function () {
                $('#datetimepicker2').datetimepicker({
                    format: 'LT',
                    locale: 'es',
                    sideBySide: true
                });
            });
</script>

@endsection