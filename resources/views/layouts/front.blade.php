<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITLE -->
    <title>DRDSNHS Official Website</title>

    <!-- CSS & OTHER STYLING -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('css')

    <link rel="stylesheet" href="{{ asset('css/a/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/a/a-front.css') }}">

    <!-- ABOUT CSS -->
    <link rel="stylesheet" href="{{ asset('css/a/about.css') }}">
    <!-- ACADEMIC SS -->
    <link rel="stylesheet" href="{{ asset('css/a/acad.css') }}">
    <!-- EVENTS -->
    <link rel="stylesheet" href="{{ asset('css/a/events.css') }}">
    <!-- ENROLLMENT -->
    <link rel="stylesheet" href="{{ asset('css/a/enrollment.css') }}">


    <!-- SCHOOL AWARDS -->
    <link rel="stylesheet" href="{{ asset('css/school_awards/create.css') }}">

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('images/logoback.jpg') }}">

    <!-- JS -->
    <script defer src="{{ asset('js/front.js') }}"></script>

    <!-- bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

</head>

<body>

    <!-- NAVBAR -->
    @include('parts.nav')

    <!-- BODY -->

    @yield('seca')


    <!-- FOOTER -->
    <footer>
        <div class="foot-con fc-a">
            <div class="foot-f-box">
                <img src="{{ asset('images/logo.png') }}" alt="logo" width="80">
                <h3 class="foot-mau">Dr. Ramon de Santos National High School</h3>
                <h5>Integrated Public School</h5>
            </div>
            <div class="foot-f-box">
                <div class="foot-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="foot-item-contacts">San Antonio, Cuyapo, Nueva Ecija</p>
                </div>
                <div class="foot-item">
                    <i class="fa-solid fa-phone"></i>
                    <p class="foot-item-contacts">+639*********</p>
                </div>
                <div class="foot-item">
                    <i class="fa-solid fa-envelope"></i>
                    <p class="foot-item-contacts">drrdsnhs@service.com</p>
                </div>
            </div>
        </div>
        <div class="foot-con fc-b">
            <h2 class="foot-mau">More About Us</h2>
            <a href="/about#tourmap" class="footer-a">School Tour Video</a>
            <a href="/about#awards" class="footer-a">Awards</a>
            <a href="/about#events" class="footer-a">Activities</a>
            <a href="/about#staff" class="footer-a">School Staff</a>
        </div>
        <div class="foot-con fc-c">
            <h2 class="foot-mau">Take Action</h2>
            <a href="/enrollment/create" class="enroll-bt fen-bt">Enroll Now</a>
            <a href="/register" class="footer-a">Create an Account</a>
            <a href="#" class="footer-a">Write a Review</a>
            <h2 class="foot-mau">Explore More</h2>
            <a href="/events" class="footer-a">Events</a>
            <a href="/newsblogs" class="footer-a">News & Blogs</a>
        </div>
        <div class="foot-con fc-d">
            <h2 class="foot-mau">Join Us</h2>
            <a href="#" class="footer-a">School Hub</a>
            <a href="https://www.facebook.com/IloveDRDSNHS" class="footer-a">Facebook Page</a>
            <a href="#" class="footer-a">Messenger Chat Room</a>
            <a href="#" class="footer-a">Twitter Talks</a>
            <div class="foot-f-box">
                <h3>Follow us on our Social Media Accounts:</h3>
                <div class="foot-socmed">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </div>
    </footer>


    <!-- mgeb creation mark -->

    <div class="mgeb">
        <p>All Rights Reserved, 2024. Made by MGEB CREATION (Ms. Mary Grace Basilio)</p>
    </div>

    <!-- bootstrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

    <script src="{{ asset('js/slider.js') }}"></script>
</body>

</html>