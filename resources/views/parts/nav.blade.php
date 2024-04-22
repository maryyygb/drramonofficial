<nav>
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
            <!-- <ul class="dropdown about">
                    <li><a href="#">AWARDS</a></li>
                    <li><a href="#">VISION & MISSION</a></li>
                    <li><a href="#">SCHOOL STAFFS</a></li>
                    <li><a href="#">SCHOOLS' MAP</a></li>
                </ul> -->
        </li>
        <li>
            <a href="/academics">ACADEMICS</a>
            <!-- DROPDOWN WHEN HOVER -->
            <!-- <ul class="dropdown academics">
                    <li><a href="#">JUNIOR HIGH SCHOOL</a></li>
                    <li><a href="#">SENIOR HIGH SCHOOL</a></li>
                </ul> -->
        </li>
        <li>
            <a href="/events">EVENTS</a>
            <!-- DROPDOWN WHEN HOVER -->
            <!-- <ul class="dropdown events">
                    <li><a href="/latest-events">LATEST EVENTS</a></li>
                    <li><a href="/upcoming-events">UPCOMING EVENTS</a></li>
                    <li><a href="/past-events">PAST EVENTS</a></li>
                </ul> -->
        </li>
        <li>
            <a href="/enrollment/create">ENROLLMENT</a>
        </li>
        <!-- <li>
            <a href="/login" class="login">LOGIN</a>
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
</nav>