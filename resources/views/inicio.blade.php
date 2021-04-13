<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
  <title>Cómo Activar y Desactivar Status con Switch (Checkbox) usando Laravel :: WebDeveloper Urian Viera</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/maquinawrite.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/switch.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cssGeneral.css') }} ">
</head>
<body>

<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #563d7c !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="{{ ('/') }}"> 
          <img src="{{ asset('img/logo-mywebsite-urian-viera.svg') }}" alt="Web Developer Urian Viera" width="120">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0" id="maquinaescribir">
      <h5 class="navbar-brand">Web Developer Urian Viera <span>&#160;</span></h5>
    </div>
</nav>


<div class="container mt-7">

<h3 class="text-center">
    Cómo Activar y Desactivar Status con Switch (Checkbox) usando Laravel
    <img src="{{ asset('img/laravel.png') }}" alt="Logo"  style="width: 120px;">
</h3>
<hr>

    <div class="table-responsive mt-5">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>#</th>
                <th>Titulo de la Noticia</th>
                <th>Contenido</th>
                <th>Portada</th>
                <th>Estado</th>
                <th>Acción</th>
            <tbody>
            </tr>
                @foreach($noticias as $id=>$noticia)
                    <tr>
                        <td> {{ $id }}</td>
                        <td>{{ $noticia->titulo }}</td>
                        <td>{{ substr($noticia->contenido,0,80) }} ....</td>
                        <td>
                            <img src="{{ asset('portadas/'.$noticia->portada) }}" alt="portada" id="portadaNoti">
                        </td>
                        <td id="resp{{ $noticia->id }}">
                          <br>
                            @if($noticia->estatus == 1)
                            <button type="button" class="btn btn-sm btn-success">Activa</button>
                                @else
                            <button type="button" class="btn btn-sm btn-danger">Inactiva</button>
                            @endif
                        
                        </td>
                        <td>
                            <br>
                            <label class="switch">
                                <input data-id="{{ $noticia->id }}" class="mi_checkbox" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $noticia->estatus ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </td>
                    </tr>
                </tbody>
                @endforeach
        </table>

    </div>


</div>



<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });


$('.mi_checkbox').change(function() {
    //Verifico el estado del checkbox, si esta seleccionado sera igual a 1 de lo contrario sera igual a 0
    var estatus = $(this).prop('checked') == true ? 1 : 0; 
    var id = $(this).data('id'); 
        console.log(estatus);

    $.ajax({
        type: "GET",
        dataType: "json",
        //url: '/StatusNoticia',
        url: '{{ route('UpdateStatusNoti') }}',
        data: {'estatus': estatus, 'id': id},
        success: function(data){
            $('#resp' + id).html(data.var); 
            console.log(data.var)
         
        }
    });
})
      
});
</script>

</body>
</html>