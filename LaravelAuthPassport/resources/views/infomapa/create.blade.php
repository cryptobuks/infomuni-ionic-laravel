@extends('layouts.maps')
@section('css_before')

<link href="https://rawgit.com/tempusdominus/bootstrap-4/master/build/css/tempusdominus-bootstrap-4.css" rel="stylesheet"/>
@endsection
@section('content')

<script src="{{asset('js/plugins/jquery/jquery.min.js')}}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBc41gxjt-3ulYIBUekMCL4kKAgkhn6JYM&callback=initMap4&libraries=places"></script>
     
              <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Nuevo lugar</h1>
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
              <div class="content">
              <div class="block block-rounded block-bordered">
      <div class="block-header block-header-default">
         <h3 class="block-title">Crear un nuevo lugar</h3>
           <br>
            @include('infomapa.form.info')
      </div> 
      <div class="block-content">
       <h2 class="content-heading pt-0">Ingreso de información</h2>
       <div class="row push">
                                    <div class="col-lg-4">

                                        <p class="text-muted">
                                            Complete la siguiente información
                                        </p>

                                    </div>
                                    <div class="col-lg-8 col-xl-5">  
      <form action="{{route('infomapa.store')}}" method="POST">
            @csrf
       
            <div class="form-group">
               <label for="">Nombre</label>
               <input type="text" name="title" class="form-control input-sm @error('title') is-invalid @enderror" placeholder="Nombre lugar">
                 @if ($errors->has('title'))
                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                        @endif
            </div>
                        <div class="form-group row">
                                          <label for="example-password-input" class="col-lg-12">Atención</label>
                                          <br>
                                          <br>
                                          <div class="col-lg-3 col-xl-3">
                                          <span>Días</span>
                                             
                                          </div>
                                          <div class="col-lg-4 col-xl-4">
                                              <select class="form-control @error('dias1') is-invalid @enderror" id="dias1" name="dias1">
                                                <option value="0">Seleccionar</option>
                                                <option value="Lunes">Lunes</option>
                                                <option value="Martes">Martes</option>
                                                <option value="Miercoles">Miercoles</option>
                                                <option value="Jueves">Jueves</option>
                                                <option value="Viernes">Viernes</option>
                                                <option value="Sabado">Sabado</option>
                                                <option value="Domingo">Domingo</option>
                                              </select>
                                              @if ($errors->has('dias1'))
                                             <div class="invalid-feedback">{{ $errors->first('dias1') }}</div>
                                             @endif
                                          </div>
                                          <div class="col-lg-1 col-xl-1">
                                              <span>a</span>
                                          </div>
                                           <div class="col-lg-4 col-xl-4">
                                               <select class="form-control @error('dias2') is-invalid @enderror" id="dias2" name="dias2">
                                                <option value="0">Seleccionar</option>
                                                <option value="Lunes">Lunes</option>
                                                <option value="Martes">Martes</option>
                                                <option value="Miercoles">Miercoles</option>
                                                <option value="Jueves">Jueves</option>
                                                <option value="Viernes">Viernes</option>
                                                <option value="Sabado">Sabado</option>
                                                <option value="Domingo">Domingo</option>
                                              </select>
                                            @if ($errors->has('dias2'))
                                            <div class="invalid-feedback">{{ $errors->first('dias2') }}</div>
                                            @endif
                                          </div>
                                           <div class="col-lg-3 col-xl-3">
                                           <br>
                                           
                                          <span>Horario</span>
                                             
                                          </div>
                                          <div class="col-lg-4 col-xl-4">
                                                 <br>
                                                 <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                                       <input type="text" class="form-control datetimepicker-input @error('horarioapertura') is-invalid @enderror" id="datetimepicker3" name="horarioapertura" data-toggle="datetimepicker" data-target="#datetimepicker3" placeholder="Apertura" autocomplete="off"/>
                                                    <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                    </div>
                                                    
                                        @if ($errors->has('horarioapertura'))
                                        <div class="invalid-feedback">{{ $errors->first('horarioapertura') }}</div>
                                        @endif
                                                </div>
                                             
                                          </div>
                                          <div class="col-lg-1 col-xl-1">
                                              <br>
                                              <span>a</span>
                                          </div>
                                        <div class="col-lg-4 col-xl-4">
                                              <br>
                                                  <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                                       <input type="text" class="form-control datetimepicker-input @error('horariocierre') is-invalid @enderror" id="datetimepicker2" name="horariocierre" data-toggle="datetimepicker" data-target="#datetimepicker2" placeholder="Cierre" autocomplete="off"/>
                                                    <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                    </div>
                                            @if ($errors->has('horariocierre'))
                                        <div class="invalid-feedback">{{ $errors->first('horariocierre') }}</div>
                                        @endif
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
   <!--         <div class="form-group">
               <label for="example-password-input">Horario apertura</label>
               <input type="text" class="form-control datetimepicker-input" id="datetimepicker3" name="horarioapertura" data-toggle="datetimepicker" data-target="#datetimepicker3" placeholder="Horario apertura" autocomplete="off"/>
                
            </div>
             <div class="form-group">
            <label for="example-password-input">Horario cierre</label>
            <input type="text" class="form-control datetimepicker-input" id="datetimepicker2" name="horariocierre" data-toggle="datetimepicker" data-target="#datetimepicker2" placeholder="Horario cierre" autocomplete="off"/>
          </div>-->
            <div class="form-group">
               <label for="">Contacto</label>
               <input type="text" name="contacto" class="form-control input-sm @error('contacto') is-invalid @enderror" placeholder="Número de contacto" value="{{old('contacto')}}">
                 @if ($errors->has('contacto'))
                        <div class="invalid-feedback">{{ $errors->first('contacto') }}</div>
                        @endif
            </div>
            <div class="form-group">
               <label for="">Pagina web</label>
               <input type="text" name="paginaweb" class="form-control input-sm @error('paginaweb') is-invalid @enderror" placeholder="Página web" value="{{old('paginaweb')}}">
                 @if ($errors->has('paginaweb'))
                        <div class="invalid-feedback">{{ $errors->first('paginaweb') }}</div>
                        @endif
            </div>
            <div class="form-group">
                <label for="">Tipo</label>
                <select class="form-control @error('tipo') is-invalid @enderror" id="tipo" name="tipo">
                    <option value="0">Seleccionar</option>
                    <option value="municipales">Servicios municipales</option>
                    <option value="emergencias">Servicios de emergencias</option>
                    <option value="turisticos">Lugares turisticos</option>
                   
                </select>
                  @if ($errors->has('tipo'))
                        <div class="invalid-feedback">{{ $errors->first('tipo') }}</div>
                        @endif
            </div>
            
            <div class="form-group">
               <label for="">Buscar tu lugar aquí o arrastra el marcador:</label>
               <input type="text" class="form-control input-sm @error('searchmap') is-invalid @enderror" id="searchmap" name="searchmap">
                @if ($errors->has('searchmap'))
                        <div class="invalid-feedback">{{ $errors->first('searchmap') }}</div>
                        @endif
               <br>
              
               <div id="map-canvas" style="width:560px;height:250px">
                   
               </div>
                
            </div>
            <div class="form-group" style="display:none">
               <label for="">Lat</label>
               <input type="text" name="lat" id="lat" class="form-control input-sm">
                
            </div>
            <div class="form-group" style="display:none">
               <label for="">Lng</label>
               <input type="text" name="lng" id="lng" class="form-control input-sm">
                
            </div>
             <button type="submit" class="btn btn-sm btn-outline-danger btn-block">Guardar lugar</button>
        </form>
           </div>
          </div>
                  </div>
          </div>
</div>


@endsection
@section('js_after')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment-with-locales.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
 <script src="https://rawgit.com/tempusdominus/bootstrap-4/master/build/js/tempusdominus-bootstrap-4.js"></script>
   <script>

       function initMap4() {
        
           var map = new google.maps.Map(document.getElementById('map-canvas'), {
             zoom: 15,
             center: {lat: -36.786790, lng: -73.106538} //centro del mapa al cargar
           });
             
           var marker = new google.maps.Marker({
             position:{
                lat: -36.786790,
                lng:  -73.106538
             },
             map:map,
             draggable:true
           });
             
            var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
  
            google.maps.event.addListener(searchBox, 'places_changed', function(){
                
                var places = searchBox.getPlaces();
                var bounds = new google.maps.LatLngBounds();
                var i, place;
                
                for(i=0; place=places[i];i++){
                    bounds.extend(place.geometry.location);
                    marker.setPosition(place.geometry.location);
                }
                
                map.fitBounds(bounds);
                map.setZoom(15);
            });
             
            google.maps.event.addListener(marker, 'position_changed', function(){
               
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();
                
                $('#lat').val(lat);
                $('#lng').val(lng);
            });
         }
       
       window.onload = () => {
    initMap4()
}

</script>
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


        
