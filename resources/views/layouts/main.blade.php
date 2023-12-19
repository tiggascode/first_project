<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larevel</title>
    <link rel="stylesheet" href="{{asset ('style.css')}}">
</head>
<body> 
<header>
    <nav >
        <ul >

            <a class="header-link" href="{{ route ('main.index') }}">Main</a>
                    
            <a class="header-link" href="{{ route ('post.index') }}">Posts</a>
                    
            <a class="header-link" href="{{ route ('about.index') }}">About</a>

            <a class="header-link" href="{{ route ('contact.index') }}">Contacts</a>

            <?php if( isset($user['name']) && !empty($user['name']) )
            {
            ?>
                <form method="post" class="logout-button" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Logout">
                </form>
                
            <?php }else{ ?>            
                <a  class="login-link" href="{{ route('login') }}">Login</a>
                <button id="login-button">Login</button>
                <a class="register-link" href="{{ route('register') }}">Register</a>

            <?php } ?>




        </ul>
    </nav>
</header>
    <article>
    <div id="login-popup">
    <form method="POST" action="{{ route('login') }}">
    @csrf
        <div>Login</div>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div>Password</div>
        <div><input id="password" type="password" class="password-input " name="password" required="" autocomplete="current-password"></div>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
        <button type="submit"  onclick="SubmitFormData();" class="btn btn-primary">Login</button>
        <div id="close-button">Close</div>

    </form>
    </div>

    @yield('content')
    </article>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#login-button").click(function(){
                $("#login-popup").show();
            })
            $("#close-button").click(function(){
                $("#login-popup").hide();
            })
        })


        
</script>
    

</body>
</html>