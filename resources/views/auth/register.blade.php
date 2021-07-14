@extends('layouts.app')

@section('content')
    <div class="div-center bg-menu  ">
        <form action="{{ route('register')}}" method="post" class="form-width">
            @csrf
            <div class="div">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Votre nom" 
                class="class_name user_information @error('name') classe_name_error @enderror"
                value="{{ old('name') }}">

                @error('name')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror


            </div>

            <div class="div">
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Nom d'utilisateur"
                class="class_username user_information @error('username') classe_username_error @enderror"
                value="{{ old('username') }}">

                @error('username')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="div">
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Email"
                class="class_email user_information @error('email') classe_email_error @enderror"
                value="{{ old('email') }}">

                @error('email')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="div">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Choisissez un mot de passe"
                class="class_password user_information @error('password') classe_password_error @enderror"
                value="">

                @error('password')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="div">
                <label for="password_confirmation" class="sr-only">Password again</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmez votre mot de passe"
                class="class_password_confirmation user_information @error('password_confirmation') classe_password_confirmation_error @enderror"
                value="">

                @error('password_confirmation')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="div flex-center">
                <button type="submit" class="bouton-register">Register</button>
            </div>
        </form>
    </div>
@endsection
<style>
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
</style>