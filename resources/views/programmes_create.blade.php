<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>No Sidebar - Landed by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" >
    <noscript><link rel="stylesheet" href="{{asset('assets/css/noscript.css')}}" /></noscript>
</head>
<body class="is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1 id="logo"><a href="index.php"><img src="{{asset('images/logo2.png')}}"/></a></h1>
        <nav id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="#">Programme Offered</a>
                    <ul>
                        <li><a href="">Postgraduate Programme</a></li>
                        <li><a href="">Undergraduate Programme</a></li>
                        <li><a href="">Pre-University Programme</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#">Campuses</a>
                    <ul>
                        <li><a href="">Kuala Lumpur Main Campus</a></li>
                        <li><a href="">Penang Branch Campus</a></li>
                        <li><a href="">Perak Branch Campus</a></li>
                        <li><a href="">Johor Branch Campus</a></li>
                        <li><a href="">Pahang Branch</a></li>
                        <li><a href="">Sabah Branch</a></li>


                    </ul>

                </li>
                <li><a href="#" class="button primary">Staff Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Create New Programme</h2>

            </header>

            <!-- Content -->
            <section id="content">
                <form method="post" action="{{url('programmes')}}">
                    @csrf
                    <p>

                        @if(\Session::has('success'))
                            <div class="alert alert-success">
                    <p> {{\Session::get('success')}}</p>
                            </div><br/>
                        @endif
                        <label for="programme_name">Programme Name</label>
                        <input type="text"  name="programme_name" required autofocus/>
                        <label for="programme_code">Programme Code</label>
                        <input type="text" name="programme_code" required/>
                        <label for="fduration">Duration Of Study</label>
                        <input type="number" name="fduration" min="1" max="10" required/>
                        <label for="pduration">Duration Of Study</label>
                        <input type="number" name="pduration" min="1" max="10" required/>
                        <label for="faculty_id">Faculty</label>
        <select name="faculty">
            <option value="">Select Option</option>
            <?php $xmlfaculty = simplexml_load_file("/xampp/htdocs/TARUCsystem/resources/views/XML/faculty.xml") or die("Failed to load");
            foreach($xmlfaculty as $faculty){
            ?>
            <option value="1"><?php echo $faculty->FacultyName; ?></option>
            <?php } ?>
        </select>

                        <label for="professional_certification">Professional Certification</label>
                        <input type="text" name="professional_certification"  required/>
        <label for="MER_SPM">Minimum Entry Requirement(SPM)</label>
        <input type="number" name="MER_SPM" min="1" max="10" required/>
        <label for="MER_STPM">Minimum Entry Requirement(STPM)</label>
        <input type="number" name="MER_STPM" min="1" max="10" required/>
        <label for="MER_UEC">Minimum Entry Requirement(UEC)</label>
        <input type="number" name="MER_UEC" min="1" max="10" required/>
                    </p>
                    <input type="submit" value="Submit" class="primary"/>
                </form>
            </section>

        </div>
    </div>

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
