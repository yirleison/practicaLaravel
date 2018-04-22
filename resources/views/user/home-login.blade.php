
 <meta name="csrf-token" content="{{ csrf_token() }}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('css/pnotify.custom.min.css') }}">


<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">

        <!-- Mixins-->
        <!-- Pen Title-->
        <div class="pen-title">
            <h1>Material Login Form</h1>
        </div>
        <div class="container">
            <div class="card"></div>
            <div class="card">
                <h1 class="title">Login</h1>
                <form>
                    <div class="input-container">
                        <input type="text" id="Username" required="required" />
                        <label for="Username">Username</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="Password" required="required" />
                        <label for="Password">Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button>
                            <span>Go</span>
                        </button>
                    </div>
                    <div class="footer">
                        <a href="#">Forgot your password?</a>
                    </div>
                </form>
            </div>
            <div class="card alt">
                <div class="toggle"></div>
                <h1 class="title">Register
                    <div class="close"></div>
                </h1>
                <form>
                    <div class="input-container">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" id="r-nombre" required="required" />
                        <label for="Username">Usuario</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="r-pass" required="required" />
                        <label for="Password">Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="r-repeat-pass" required="required" />
                        <label for="Repeat Password">Repetir Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button type="button" onclick="user.saveUser()">
                            <span>Registrar</span>
                        </button>       
                    </div>
                </form>
            </div>
        </div>
        <!-- Portfolio-->
        <a id="portfolio" href="http://pkshopy.com/farooqshad/" title="View my portfolio!">
            <i class="fa fa-link"></i>
        </a>
    </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{ asset('js/login/login.js') }}"></script>
<script src="{{ asset('js/pnotify.custom.min.js') }}"></script>

<script>
    $(document).ready(function () {
        $('.toggle').on('click', function () {
            $('.container').stop().addClass('active');
        });

        $('.close').on('click', function () {
            $('.container').stop().removeClass('active');
        });

    });

</script>