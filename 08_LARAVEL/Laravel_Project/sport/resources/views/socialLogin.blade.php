# resources/views/socialLogin.blade.php

<!DOCTYPE html>

 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ __('Unicorn bet Social Login') }}</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Styles -->
  <link href="{{ asset('css/social.css') }}" rel="stylesheet">
    {{-- <style>
      
          
    </style> --}}
 </head>
 <body>  
    <div class="social-login">
        <h2>{{ __('Unicorn bet Social Login') }}</h2>

        <a href="{{ url('/auth/social/google') }}" class="social-button--google">
            <i class="social-icon--google fa fa-google"></i>
            <span class="social-text">
                {{ __('Sign in with google') }}
            </span>
        </a>
        <a href="{{ url('/auth/social/facebook') }}" class="social-button--facebook">
          <i class="social-icon--facebook fa fa-facebook"></i>
          <span class="social-text">
            {{ __('Sign in with facebook') }}
          </span>
        </a>
      
      </div>  
 </body>
</html>