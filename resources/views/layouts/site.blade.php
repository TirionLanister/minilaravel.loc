<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title> Nigh club True </title>


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">

  </head>

  <body background="images/fon.jpg">
  <header>

  </header>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="#">{{$header}}</a>
        </div>

        <ul id="navbar" class="menu">
<a  href="#"><img src="logotyp/5_White_logo.png"></a>
                    <li><a href="/">Home</a></li>
                    <li><a href="page/add">News</a></li>
					          <li><a href="page/gallery">Gallery</a></li>
                     <li><a href="page/TableService">Table Service</a></li>
					          <li><a href="/">Contact</a></li>




        </ul><!--/.navbar-collapse -->
      </div>
    </nav>

      @if(count($errors) > 0)

       <div class="alert alert-danger">

         <ul>

            @foreach ($errors->all() as $errors )

             @endforeach

         </ul>
       </div>

      @endif

     @yield('content')

  </body>
</html>
