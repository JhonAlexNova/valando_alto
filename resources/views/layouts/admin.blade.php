<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('lib/font-awesome-4.7.0/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
<body>
    <div class="">
        <div class="ro">
            <div class="wrapper">
                <div class="side-bar">
                    <ul>
                        <li class="menu-head">
                            VOLANDO ALTO <a href="{{ url('/') }}" class="push_menu"><span class="fa fa-bars pull-right"></span></a>
                        </li>
                        <div class="menu">
                            <li>
                                <a href="{{ url('app/vuelos') }}" class="active">Vuelos <span class="glyphicon glyphicon-dashboard pull-right"></span></a>
                            </li>
                            <li>
                                <a href="{{ url('app/usuarios') }}">Empleados<span class="glyphicon glyphicon-heart pull-right"></span></a>
                            </li>
                             <li>
                                <a href="{{ url('/') }}">Pagina principal<span class="glyphicon glyphicon-heart pull-right"></span></a>
                            <li>

                        </div>
                        
                    </ul>
                </div>   
                <div class="content">
                    <div class="container">
                        <div class="content-body">
                            @yield('content') 
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $(".push_menu").click(function(){
             $(".wrapper").toggleClass("active");
        });
    });
</script>
</body>
</html>


<!------ Include the above in your HEAD tag ---------->

    




