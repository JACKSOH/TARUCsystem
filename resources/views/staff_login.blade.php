-->
<html>
<head>
    <title>TAR UC Academic</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" >
    <noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
</head>
<body class="is-preload landing">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1 id="logo"><a href="index.php"><img src="images/logo2.png" alt="" /></a></h1>
        <nav id="nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>
                    <a href="../../../app/Http/Controllers/DepartmentController.php">Manage Programme</a>
                    <ul>

                        <li><a href="#">Postgraduate Programme</a></li>
                        <li><a href="# ">Undergraduate Programme</a></li>
                        <li><a href="#">Pre-University Programme</a></li>
                        <li>
                            <a href="#">Submenu</a>
                            <ul>
                                <li><a href="#">Option 1</a></li>
                                <li><a href="#">Option 2</a></li>
                                <li><a href="#">Option 3</a></li>
                                <li><a href="#">Option 4</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Campuses</a>
                    <ul>
                        <li><a href="#">Postgraduate Programme</a></li>
                        <li><a href="#">Undergraduate Programme</a></li>
                        <li><a href="#">Pre-University Programme</a></li></li>


                        <li><a href="#" class="button primary">Staff Login</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Login</h2>

            </header>
    <!-- Banner -->
    <section id="content">
        <form method="post" action="{{url('programmes')}}">
            @csrf
            <p>

                @if(\Session::has('success'))
                    <div class="alert alert-success">
            <p> {{\Session::get('success')}}</p>
        </div><br/>
            @endif
            <label for="staff_email">Your staff email</label>
            <input type="text"  name="staff_email" required autofocus/>
            <label for="password">Password</label>
            <input type="text" name="password" required/>


            </p>
            <input type="submit" value="Login" class="primary"/>
    </div>
</div>
        </form>
    </section>



    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.dropotron.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.scrollex.min.js')}}"></script>
<script src="{{asset('assets/js/browser.min.js')}}"></script>
<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
