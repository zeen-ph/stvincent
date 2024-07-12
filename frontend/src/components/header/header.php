<section class="header">
    <div class="navbar">

        <!-- SCHOOL LOGO AND NAME -->
        <div class="nav-logo">
            <picture>
                <source type="image/webp" srcset="/stvincent/frontend/public/images/sc_logo.webp">
                <img src="/stvincent/frontend/public/images/sc_logo.png" alt="school-logo">
            </picture>
            <p>St. Vincent Institute of Technology</p>
        </div>

        <!-- NAVIGATION MENU -->
        <ul class="nav-menu">
            <li class="nav-item active" goto="page_home">Home</li>
            <li class="nav-item" goto="page_about">About</li>
            <li class="nav-item" goto="page_admissions">Admissions</li>
        </ul>

        <div class="nav-main">
            <div class="nav-item btn-main" goto="page_login">Login</div>
            <div class="nav-item btn-main" goto="page_enroll" id="btn-enroll">Enroll Now</div>
            <div class="bx bx-x" id="menu-icon"><i class="fas fa-bars"></i></div>
        </div>

    </div>
</section>

<!-- HEADER JS -->
<script src="frontend/src/components/header/header.js"></script>