<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        body {
            background: #673ab7;
            color: white;
            text-align: center;
        }

        a {
            color: inherit;
        }

        h1, h2, h3, h4 {
            margin: 0;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        h1 {
            font-size: 3em;
        }

        .menu {
            -webkit-filter: url("#shadowed-goo");
            filter: url("#shadowed-goo");
        }

        .menu-item, .menu-open-button {
            background: #00bcd4;
            border-radius: 100%;
            width: 50px;
            height: 50px;
            margin-left: -40px;
            position: absolute;
            top: 20px;
            color: white;
            text-align: center;
            line-height: 80px;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: -webkit-transform ease-out 200ms;
            transition: -webkit-transform ease-out 200ms;
            transition: transform ease-out 200ms;
            transition: transform ease-out 200ms, -webkit-transform ease-out 200ms;
        }

        .menu-open {
            display: none;
        }

        .hamburger {
            width: 25px;
            height: 3px;
            background: white;
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -12.5px;
            margin-top: -1.5px;
            -webkit-transition: -webkit-transform 200ms;
            transition: -webkit-transform 200ms;
            transition: transform 200ms;
            transition: transform 200ms, -webkit-transform 200ms;
        }

        .hamburger-1 {
            -webkit-transform: translate3d(0, -8px, 0);
            transform: translate3d(0, -8px, 0);
        }

        .hamburger-2 {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .hamburger-3 {
            -webkit-transform: translate3d(0, 8px, 0);
            transform: translate3d(0, 8px, 0);
        }

        .menu-open:checked + .menu-open-button .hamburger-1 {
            -webkit-transform: translate3d(0, 0, 0) rotate(45deg);
            transform: translate3d(0, 0, 0) rotate(45deg);
        }
        .menu-open:checked + .menu-open-button .hamburger-2 {
            -webkit-transform: translate3d(0, 0, 0) scale(0.1, 1);
            transform: translate3d(0, 0, 0) scale(0.1, 1);
        }
        .menu-open:checked + .menu-open-button .hamburger-3 {
            -webkit-transform: translate3d(0, 0, 0) rotate(-45deg);
            transform: translate3d(0, 0, 0) rotate(-45deg);
        }

        .menu {
            position: absolute;
            left: 50%;
            margin-left: -80px;
            padding-top: 20px;
            padding-left: 80px;
            width: 650px;
            height: 150px;
            box-sizing: border-box;
            font-size: 20px;
            text-align: left;
        }

        .menu-item:hover {
            background: white;
            color: #00bcd4;
        }
        .menu-item:nth-child(3) {
            -webkit-transition-duration: 180ms;
            transition-duration: 180ms;
        }
        .menu-item:nth-child(4) {
            -webkit-transition-duration: 180ms;
            transition-duration: 180ms;
        }
        .menu-item:nth-child(5) {
            -webkit-transition-duration: 180ms;
            transition-duration: 180ms;
        }
        .menu-item:nth-child(6) {
            -webkit-transition-duration: 180ms;
            transition-duration: 180ms;
        }

        .menu-open-button {
            z-index: 2;
            -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
            -webkit-transition-duration: 400ms;
            transition-duration: 400ms;
            -webkit-transform: scale(1.1, 1.1) translate3d(0, 0, 0);
            transform: scale(1.1, 1.1) translate3d(0, 0, 0);
            cursor: pointer;
        }

        .menu-open-button:hover {
            -webkit-transform: scale(1.2, 1.2) translate3d(0, 0, 0);
            transform: scale(1.2, 1.2) translate3d(0, 0, 0);
        }

        .menu-open:checked + .menu-open-button {
            -webkit-transition-timing-function: linear;
            transition-timing-function: linear;
            -webkit-transition-duration: 200ms;
            transition-duration: 200ms;
            -webkit-transform: scale(0.8, 0.8) translate3d(0, 0, 0);
            transform: scale(0.8, 0.8) translate3d(0, 0, 0);
        }

        .menu-open:checked ~ .menu-item {
            -webkit-transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
            transition-timing-function: cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        .menu-open:checked ~ .menu-item:nth-child(3) {
            -webkit-transition-duration: 190ms;
            transition-duration: 190ms;
            -webkit-transform: translate3d(110px, 0, 0);
            transform: translate3d(60px, 0, 0);
        }
        .menu-open:checked ~ .menu-item:nth-child(4) {
            -webkit-transition-duration: 290ms;
            transition-duration: 290ms;
            -webkit-transform: translate3d(220px, 0, 0);
            transform: translate3d(120px, 0, 0);
        }
        .menu-open:checked ~ .menu-item:nth-child(5) {
            -webkit-transition-duration: 390ms;
            transition-duration: 390ms;
            -webkit-transform: translate3d(330px, 0, 0);
            transform: translate3d(180px, 0, 0);
        }
        .menu-open:checked ~ .menu-item:nth-child(6) {
            -webkit-transition-duration: 490ms;
            transition-duration: 490ms;
            -webkit-transform: translate3d(440px, 0, 0);
            transform: translate3d(240px, 0, 0);
        }

        .black-ribbon {
            position: fixed;
            z-index: 9999;
            /*width: 70px;*/
            bottom: 90px;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <nav class="black-ribbon">
        <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open"/>
        <label class="menu-open-button" for="menu-open">
            <span class="hamburger hamburger-1"></span>
            <span class="hamburger hamburger-2"></span>
            <span class="hamburger hamburger-3"></span>
        </label>

        <a href="#" class="menu-item"> <i class="fa fa-bar-chart"></i> </a>
        <a href="#" class="menu-item"> <i class="fa fa-plus"></i> </a>
        <a href="#" class="menu-item"> <i class="fa fa-heart"></i> </a>
        <a href="#" class="menu-item"> <i class="fa fa-envelope"></i> </a>
    </nav>

    <!-- filters -->
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="shadowed-goo">

                <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
                <feColorMatrix in="shadow" mode="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
                <feOffset in="shadow" dx="1" dy="1" result="shadow" />
                <feComposite in2="shadow" in="goo" result="goo" />
                <feComposite in2="goo" in="SourceGraphic" result="mix" />
            </filter>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                <feComposite in2="goo" in="SourceGraphic" result="mix" />
            </filter>
        </defs>
    </svg>
</body>
</html>