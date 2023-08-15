    <!DOCTYPE html>
    <!-- Coding by CodingNepal | www.codingnepalweb.com-->
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <title>page de connexion et d'inscription</title>
        <link rel="stylesheet" href="style.css">
        <!-- Fontawesome CDN Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/login_style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="container">
            <input type="checkbox" id="flip">
            <div class="cover">
                <div class="front">
                    <img src="img/carousel-1.jpg" alt="">
                    <div class="text">
                        <span class="text-1">Every new friend is a <br> new adventure</span>
                        <span class="text-2">Let's get connected</span>
                    </div>
                </div>
                <div class="back">
                    <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
                    <div class="text">
                        <span class="text-1">Complete miles of journey <br> with one step</span>
                        <span class="text-2">Let's get started</span>
                    </div>
                </div>
            </div>
            <div class="forms">
                <div class="form-content">
                    <div class="login-form">
                        <div class="title">Se Connecter</div>
                        <form method="POST" action="{{ route('login') }}">
                            @method('post')
                            @csrf
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-envelope"></i>
                                    <input name='email' type="text" placeholder="Enter your email" name="email"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input name='pass' type="password" placeholder="Enter your password"
                                        name="password" value="{{ old('password') }}" required>
                                    @error('password')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="text"><a href="{{ route('password.request') }}">Mot de Passe Oublié ?</a>
                                </div>
                                <div class="button input-box">
                                    <input name='soumettre' type="submit" value="Soumettre">
                                </div>
                                <div class="text sign-up-text">J'ai pas de Compte? <a
                                        href="{{ route('register') }}"><label for="flip">S'inscrire</label></a>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="signup-form">
                        <div class="title">S'inscrire</div>
                        <form action="{{ route('register') }}" method="POST">
                            @method('post')
                            @csrf
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-user"></i>
                                    <input name="name" type="text"
                                        placeholder="{{ old('password') ? old('password') : 'Entrez votre Nom' }}"
                                        required>
                                    @error('name')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="input-box">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" name="email"
                                        placeholder="{{ old('password') ? old('password') : 'Entrez votre mail' }}"
                                        required>
                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" name="password" placeholder="Mot de passe" required>
                                    @error('password')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" name="password_confirmation"
                                        placeholder="Confirmer le mot de passe" required>
                                    @error('password_confirmation')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="button input-box">
                                    <input name="submit" type="submit" value="Valider">
                                </div>
                                <div class="text sign-up-text">Vous avez déjà un compte ? <a
                                        href="{{ 'login' }}"><label for="flip">Se
                                            Connecter maintenant ?</label></a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
