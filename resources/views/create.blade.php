
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset ('css/app.css')}}">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a{
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .box {
                text-align: left;
            }
        </style>
        
    </head>
    <body>

            <div class="flex-center position-ref ">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
    
                <div class="content">
                    <div class="title m-b-md">
                        Spotted Opole
                    </div>
    
    
                    <div class="links">
    
                        <?php
                        //$create = action(PagesController::class, 'create']);
                        ?>
                        <a href="{{ url('show') }}">Posty</a>
                        <a href="{{ url('create') }}">Dodaj post</a>
                        <a href="{{ url('categories') }}">Kategorie</a>
                       
                    </div>
        <style>
            div.box 
            {  
            width: 75%; 
            margin: auto;
            text-align: center;
            }
         </style>
     
     <div class="links">
        
        

        <form action="/laravel/blog/public/create" method="POST"> @csrf <br>
        <div class="links"> Tytuł </div>
        <input type="text" class='form-control' name="title"> <br>
        <!-- <input type="text" class='form-control' name="slug"> <br> -->
        <div class="links"> Kategoria </div>
        <select id="category" class='form-control' name="slug"> 
            <!--
            <option value="Szukam osoby">Szukam osoby</option>
            <option value="Pozdrawiam">Pozdrawiam</option>
            <option value="Nie pozdrawiam">Nie pozdrawiam</option>
            <option value="Zagubiono">Zagubiono</option>
            -->
            @foreach ($categories as $cat) 
            <option value=" {{$cat -> category}} "> {{$cat -> category}}</option>
            @endforeach 

        </select> <br>
        <div class="links"> Treść </div>
        <textarea name="content" class="form-control"></textarea> <br>
        <button> Dodaj </button>
        </form>
    
      
       
     

    </body>
</html>