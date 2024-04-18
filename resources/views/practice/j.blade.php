<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITLE -->
    <title>DRDSNHS Official Website</title>

    <!-- CSS & OTHER STYLING -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
</head>

<body>

    <!-- END OF HEADER -->
    <header>
        <input type="checkbox" name="" id="chk1"></input>
        <div class="logo">
            <img src="{{ asset('images/bglogo.jpg') }}" alt="School Logo" width="60px" height="auto" class="logo">
        </div>

        <ul>
            <li>
                <a href="/">HOME</a>
            </li>
            <li class="about">
                <a href="/about">ABOUT</a>
                <!-- DROPDOWN WHEN HOVER -->
                <ul>
                    <li><a href="#">AWARDS</a></li>
                    <li><a href="#">VISION & MISSION</a></li>
                    <li><a href="#">SCHOOL STAFFS</a></li>
                    <li><a href="#">sCHOOLS' MAP</a></li>
                </ul>
            </li>
            <li>
                <a href="/academics">ACADEMICS</a>
                <!-- DROPDOWN WHEN HOVER -->
                <ul class="dropdown academics">
                    <li><a href="#">JUNIOR HIGH SCHOOL</a></li>
                    <li><a href="#">SENIOR HIGH SCHOOL</a></li>
                </ul>
            </li>
            <li>
                <a href="/events">EVENTS</a>
                <!-- DROPDOWN WHEN HOVER -->
                <ul class="dropdown events">
                    <li><a href="#">PAST EVENTS</a></li>
                    <li><a href="#">UPCOMING EVENTS</a></li>
                </ul>
            </li>
            <li>
                <a href="/enrollment">ENROLLMENT</a>
            </li>
            <li>
                <a href="/contacts">CONTACTS</a>
                <!-- DROPDOWN WHEN HOVER -->
                <ul class="dropdown contacts">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </li>
            <li>
                <a href="/login" class="login">LOGIN</a>
            </li>
            <!-- <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li> -->
        </ul>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button><i class="fa fa-search"></i></button>
                </input>
            </form>
        </div>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>

    </header>
    <!-- END OF HEADER -->

    <!-- BODY -->
    <main>
        <div class="f-body">
            <div class="f-body-title">
                <ul>
                    <li>
                        <h1>EMPOWERING MINDS,</h1>
                    </li>
                    <li>
                        <h1>SHAPING FUTURES</h1>
                    </li>
                </ul>
                <h5>Welcome to <span>
                        DR. RAMON DE SANTOS NATIONAL HIGH SCHOOL
                    </span></h5>
                <button class="enroll">Enroll Now!</button>
            </div>
        </div>
    </main>

    <!-- END OF BODY -->

</body>

</html>