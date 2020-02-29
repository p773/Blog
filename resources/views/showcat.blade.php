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

                <br>
                <div class="box">
                        
                    
                    <!--$create = action(PagesController::class, 'create']); -->
                   
                   @if(count($pages)>0)
                   
                   @foreach ($pages as $page)
               
                   <div class="list-group">
                       <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                         <div class="d-flex w-100 justify-content-between">
                           <h5 class="mb-1"> #{{$page -> id}}  {{$page -> title}} </h5>
                           <small> {{$page -> created_at}} </small>
                         </div>
                  
                         <p class="mb-1"> {{$page -> content}} </p>
                         <small> {{$page -> slug}}  </small>
                       </a>
                    </div>


                   @endforeach

                    @else 
                    <p> No posts </p>
                   @endif


                 
                </div>
                <br>
                
            </div>
            
        </div>
        <div class="flex-center"> {{ $pages->links() }} </div>
    </body>
    
</html>
