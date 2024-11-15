<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
  <!--  favicol -->
    <!-- estilos -->
    <style>

      body {
        text-align: center;
        background-color:aliceblue;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      margin:5%;
    


        
      }
      .active {
        color:rgb(10, 10, 12);
        font-weight:bold;
        
      }
      nav{
        background-color: rgb(106, 174, 247);
        

        ul{
        list-style: none;
        margin: 0%;
        padding: 1% 8%;
         display: inline-block;
       
      
      }
      ul li{
        display: block;
       

      }
      ul li a{
        text-decoration: none;
        display: block;

      }  
      }

      
    </style>
</head>
<body>

  <header>
    <h1 style="color:rgb(163, 7, 64)">SISTEMA IG</h1>
    <nav>
      <ul><a href="{{route('home')}}" class="{{request()->routeis('home') ? 'active' : ''}}">Home</a></ul> 
      <ul><a href="{{route('ingresos.index')}}" class="{{request()->routeis('ingresos.*') ? 'active' : ''}}">Ingresos</a></ul>
      <ul><a href="{{route('gastos.index')}}"class="{{request()->routeis('gastos.*') ? 'active' : ''}}">Gastos</a></ul>
      <ul><a href="{{route('transacciones.index')}}"class="{{request()->routeis('transacciones.*') ? 'active' : ''}}">Transacciones</a></ul>
    
    </nav>
  </header>

      <!-- header -->
    <!-- nav-->

    @yield('content')
      <!--footer -->
    <!-- script-->


</body>
</html>