<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laravel-project</title>
</head>
<body class="background">
    <nav class=" d-flex justify-content-between bg-menu nav-menu">
        <ul class="d-flex style-none">
            
            <li class=" align-self-center">
                <a href="{{ route('dashboard') }}" class=" margin-right-left text-secondary h6">Tableau de bord</a>

            </li>
            <li class=" align-self-center">
                <a href="{{ route('posts') }}" class=" margin-right-left text-secondary h6">Posts</a>

            </li>
            <li class=" align-self-center">
                <a href="{{ route('products') }}" class=" margin-right-left text-secondary h6">nos produits</a>

            </li>
        </ul>
        <ul class="d-flex style-none">
            @auth

                <li class=" align-self-center d-flex">
                    <a href=" {{ route('displaycart') }}" class=" margin-right-left text-secondary h6">Votre panier</a><div class="contour-compteur">{{$wordCount}}</div>

                </li>

                <li class=" align-self-center vertical-align">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="button_disconnect mt-3 mr-4">Se déconnecter</button>
                    </form>
                    
    
                </li>
            @endauth
            @guest
                <li class=" align-self-center">
                    <a href="{{ route('login') }}" class=" margin-right-left text-secondary h6">Se connecter</a>

                </li>
                <li class=" align-self-center">
                    <a href="{{ route('register') }}" class=" margin-right-left text-secondary h6">S'enregistrer</a>

                </li>
            @endguest
           
        </ul>
    </nav>
    @yield('content')
</body>
</html>
<style>
    .contour-compteur{
        background-color:rgb(172, 181, 255);
        position:relative;
        top:22px;
        right:14px;
        width:20px;
        height:20px;
        font-size:80% ;
        text-align: center;
        border-radius:15px;
    }
    .style-none{
        list-style: none;
    }
    .margin-right-left{
        margin:10px 10px 10px 10px;
    }
    
    .div-center{
        
        margin-top:50px;
        margin-left: auto;
        margin-right:auto;
        width:23em;
        /* height:25em; */
        display:flex;
        justify-content: center;
        align-items: center;
        border-radius: 3%;
       
    }
    
    .user_information{
       background:rgb(255, 255, 255); 
       width:20em;
       height:3em;
       margin-top:20px;
       border-radius:3px;
       border:1px solid rgb(163, 163, 163);
       padding:10px;
       opacity:0.7;
    
    }
    
    .nav-menu{
        height:5em;
    }
    .background{
        background:rgb(224, 228, 255);
    }
    .bg-menu{
        background:rgb(255, 255, 255);
    }
    .flex-center{
        display:flex;
        justify-content: center;
    }
    .bouton-register{
        color:white;
        font-weight:bold;
        margin-top:1.6em;
        background:rgb(75, 148, 207);
        border-radius:3px;
        width:20em;
        height:3em;
        margin-bottom:20px;
        border:0px;
    }
    .classe_name_error, .classe_username_error, .classe_email_error, .classe_password_error{
        
        border:1px solid red;
    }
    .button_disconnect{
        color:#494f54;
        border:none;
        background:rgb(255, 255, 255);
        font-weight:bold;
    }
    .vertical-align{
        vertical-align: middle;
    }
    </style>