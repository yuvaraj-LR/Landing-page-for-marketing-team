<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
    font-family: "Open sans", sans-serif;
    color: #000000;
}

a {
    color: #5c9f24;
    text-decoration: none;
}

a:hover {
    color: #74c92d;
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Roboto", sans-serif;
}

#header {
    background: #000000;
    padding: 15px;
}

#header .logo {
    font-size: 28px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-weight: 700;
    text-transform: uppercase;
}

#header .logo a {
    color: #fff;
}

#header .logo span {
    color: #71e215;
}

#header .logo a:hover {
    color: aqua;
}


/* Navigation Menu */

.nav-menu ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.nav-menu>ul {
    display: flex;
}

.nav-menu>ul>li {
    position: relative;
    white-space: nowrap;
    padding: 10px 0 10px 22px;
}

.nav-menu a {
    display: block;
    position: relative;
    color: rgba(255, 255, 255, 0.7);
    transition: 0.3s;
    font-size: 14px;
    font-weight: 500;
    font-family: "Roboto", sans-serif;
    padding: 0 4px;
    text-transform: uppercase;
}

.nav-menu>ul>li a::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: -6px;
    left: 0;
    background: #71e215;
    visibility: hidden;
    width: 0px;
    transition: all 0.3s ease-in-out;
}

.nav-menu a:hover::before,
.nav-menu li:hover>a::before,
.nav-menu .active>a::before {
    visibility: visible;
    width: 100%;
}

.nav-menu a:hover,
.nav-menu .active>a,
.nav-menu li:hover>a {
    color: #fff;
}


/* Admin Button */

.get-started-btn {
    margin-left: 25px;
    color: #fff;
    border-radius: 4px;
    padding: 6px 25px 8px 25px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 13px;
    display: inline-block;
    text-transform: uppercase;
    font-weight: 400;
    font-family: "Poppins", sans-serif;
    border: 2px solid #7ae721;
}

.get-started-btn:hover {
    background: #79e71f;
    color: #fff;
}


/* Responsive Button */

@media (max-width: 756px) {
    .get-started-btn {
        margin: 0 48px 0 0;
        padding: 6px 18px;
    }
}


/* Mobile Navigation Menu */

.mobile-nav-toggle {
    position: fixed;
    top: 18px;
    right: 15px;
    z-index: 9998;
    border: 0;
    background: none;
    font-size: 24px;
    transition: all 0.4s;
    outline: none !important;
    line-height: 1;
    cursor: pointer;
    text-align: right;
}

.mobile-nav-toggle i {
    color: #fff;
}

.mobile-nav {
    position: fixed;
    top: 55px;
    right: 15px;
    left: 15px;
    bottom: 15px;
    z-index: 9999;
    overflow-y: auto;
    background: #fff;
    transition: ease-in-out 0.2s;
    opacity: 0;
    visibility: hidden;
    border-radius: 10px;
    padding: 10px 0;
}

.mobile-nav-overly {
    width: 100%;
    height: 100%;
    z-index: 9997;
    top: 0;
    left: 0;
    position: fixed;
    background: rgba(17, 17, 17, 0.6);
    overflow: hidden;
    display: none;
    transition: ease-in-out 0.2s;
}

.mobile-nav-active {
    overflow: hidden;
}

.mobile-nav-active .mobile-nav {
    opacity: 1;
    visibility: visible;
}

.mobile-nav * {
    margin: 0;
    padding: 0;
    list-style: none;
}

.mobile-nav a {
    display: block;
    position: relative;
    color: #2a2a2a;
    padding: 10px 20px;
    font-weight: 500;
    outline: none;
    font-size: 15px;
}

.mobile-nav a:hover,
.mobile-nav .active>a,
.mobile-nav li:hover>a {
    color: #5c9f24;
    text-decoration: none;
}

.mobile-nav a:hover {
    background: #000;
    border: 2px solid #000;
    font-size: 19px;
}
    </style>

</head>
<body>
    <!-- Navbar -->
    <header id="header">
        <div class="container d-flex align-items-center">
            <h1 class="logo mr-auto"><a href="#"><span>Kothur</span> Application</a></h1>

            <!-- Navigation Elements -->
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Travel Details</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>

            <a href="login.php" class="get-started-btn scrollto">Admin</a>
        </div>
    </header>
</body>
</html>