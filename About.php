<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/js/bootstrap.min.js">
    <style>
        body {
            font-family: cursive;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color: #062939;
        }
        .navbar {
            background-image: url("Image/10.jpg");
            background-position: center;
            background-size: cover;
            height: 20vh;
        }

        .container-fluid {
            font-family: cursive;
            font-weight: bolder;
            font-size: large;
        }

        .navbar-brand {
            color: red;
            font-size: xx-large;
            font-weight: bolder;
            font-family: cursive;
        }

        .nav-item a {
            color: whitesmoke;
            font-family: cursive;
            font-weight: bold;
            font-size: larger;
        }

        .nav-item a:hover {
            background-color: rgb(146, 98, 8);
            border-radius: 40px;
        }

        .dropdown-menu {
            background-color: rgba(35, 35, 108, 0.821);
        }

        .text {
            backdrop-filter: blur(4%) saturate(180%);
            border-radius: 40px;
            background: transparent;
            border-color: #45a049;
            border-width: 3px;
            height: 8vh;
            color: bisque;
        }

        ::placeholder {
            color: #a94dcb;
            font-size: large;
        }

        .btn {
            background-color: #0d1c2c;
            color: bisque;
            border-radius: 50%;
            height: 8vh;
        }

        .btn:hover {
            color: red;
            background-color: black;
        }
    .about-image {
    margin-top: 13%;
    display: block; 
    margin-left: auto;
    margin-right: auto;
} 
        @media(max-width:600px) {
            .navbar {
                height: auto;
                text-align: center;
            }

            .navbar-toggler-icon {
                background-color: rgb(43, 43, 144);
            }

            .nav-item a:hover {
                background-color: rgb(146, 98, 8);
                border-radius: 25px;
            }
            .about-image {
              margin-top: 100%;
              width: 300px;
              height:50vh;
               display: block; 
               margin-left: auto;
                margin-right: auto;
            }
            footer {
                padding: 5px 0;
            }
        }
        .text h1 {
            color: #743600;
            padding: 20px;
        }

        .text {
            padding: 40px;
            text-align: center;
            font-family: 'cursive';
            font-size: medium;
            font-weight: 300;
            color: #007260;
        }

        #instructors h1 {
            margin-top: 0%;
            font-family: 'cursive';
            font-size: xx-large;
            font-weight: bolder;
            color: rgb(208, 206, 203);
        }

        #instructors h2 {
            margin-top: 5%;
            font-family: cursive;
            font-size: x-large;
            font-weight: bolder;
            color: #743600;
            padding: 20px;
        }

        .instructor {
            margin top:5%;
            margin-bottom: 20px;
            text-align: center;
            font-family: "cursive";
        }

        .instructor img {
            width: 45%;
            border-radius: 40%;
            height: 50vh;
        }

        .instructor p {
            font-family: 'cursive';
            font-size: large;
            font-weight: 700;
            color: #007260;
        }

        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Fitness Zilla®</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contactus.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Services.php">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="LoginForm.php">Login Form</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="RegistrationForm.php">Register</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Membership
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Membership.php">Membership Plan</a></li>
                                <li><a class="dropdown-item" href="member.php">Trainer Booking Form</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="code" role="search">
                        <input class="text" type="search" placeholder="Search..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div class="text">
        <h1> INFORMATION </h1>
        Welcome to Fitness Zilla's awesome website! Here, we're all about making fitness fun and accessible. Check out
        our different Zumba and yoga classes we've got something for everyone! Wondering about prices? No worries!
        We've got a handy section that breaks down all the classes and their monthly prices, so you know exactly what to
        expect. Plus, you can create your own account to easily manage your membership and keep track of your fitness
        journey. But that's not all we're all about building a fitness community. Connect with others through our
        forums and social media integration. Let's make fitness a blast together! Join Fitness Zilla and let's get
        moving!
    </div>
    <img src="./Image/16.jpeg" alt="About us" class="about-image">

    <section id="instructors">
        <h1>Instructor</h1>

        <div class="instructor">
            <h2>Sugam Singh</h2>
            <p>
                Sugam Singh is not just a fitness trainer; he is a beacon of inspiration and transformation in the world
                of health and wellness.
                With an unwavering commitment to helping others achieve their fitness goals, Sugam has established
                himself as a true fitness guru.
                His training approach goes beyond physical exercise, encompassing a holistic view of well-being that
                includes mental and emotional
                aspects. Sugam's personalized and innovative workout routines cater to individual needs, making fitness
                enjoyable and accessible for
                everyone. His motivational coaching style instills confidence and determination in his clients,
                propelling them to surpass their limits.
                Sugam is not only a master of various fitness disciplines but also a compassionate mentor who fosters a
                sense of community among his clients. Under
                Sugam Singh's guidance, fitness becomes a transformative journey, empowering individuals to embrace a
                healthier, happier lifestyle.
            </p>
            <img src="./Image/sugam.jpg" alt="Instructor 1">
        </div>

        <div class="instructor">
            <h2>Khagendra Oli</h2>
            <p>Meet Khagendra Oli, our dedicated and experienced yoga instructor at Fitness Zilla.
                With a passion for promoting holistic well-being, Khagendra brings a wealth of knowledge and a calming
                presence to his
                yoga classes. His classes focus on a blend of traditional yoga postures, mindfulness, and breathwork.
                Khagendra's
                schedule includes morning and evening sessions throughout the week, catering to both early risers and
                those seeking
                relaxation after a busy day. Whether you are a beginner or an experienced yogi, Khagendra's classes are
                designed to
                accommodate all levels. To book a session with Khagendra Oli, please check our class schedule for his
                availability
                and use our online booking system to secure your spot on the mat.
                Immerse yourself in the transformative journey of yoga with Khagendra's guidance.</p>
            <img src="./Image/ko.jpg" alt="Instructor 2">
        </div>

        <div class="instructor">
            <h2>Sujan Maharjan</h2>
            <p>Zumba expert with high-energy dance routines.Introducing Sujan Maharjan who is our vibrant and energetic
                Zumba instructor at Fitness Zilla.
                Sujan brings a enthusiasm to every class combining high-energy dance routines with a passion for
                fitness. With a background in dance and fitness instruction,
                Sujan creates an hot atmosphere that makes Zumba an exciting workout experience for all participants.
                Sujan's schedule features dynamic Zumba sessions throughout the week,
                offering a fantastic opportunity for fitness enthusiasts to burn calories in a fun-filled environment.
                Sujan's classes are designed to cater to all skill levels. To secure your spot in one of Sujan
                Maharjan's lively Zumba classes,
                please refer to our class schedule and make use of our convenient online booking system. Join Sujan on
                the dance floor and let the beats inspire your fitness journey.</p>
            <img src="./Image/sujan.jpg" alt="Instructor 3">
        </div>

        <h1>Private Trainer</h1>

        <div class="instructor">
            <h2>Sabin Bist</h2>
            <p> This guy is a Motherfucking thing, if found please contact us immediately to fuck him at same duration.
                I suggest not
                to make him as your personal trainer as he might keep you unaware about the body health rather he
                encourages you to
                spend an unusual time with you. </p>
            <img src="./Image/sabin.jpg" alt="Trainer 1">
        </div>

        <div class="instructor">
            <h2>Abinish Jaiswal</h2>
            <p>Zumba expert with high-energy dance routines.Abinish is an exceptional Zumba expert trainer known for
                infusing energy
                and passion into fitness. His dynamic classes are lively dance parties, blending Latin and international
                moves with pulsating beats.
                Abinish's expertise lies in creating a welcoming atmosphere for all fitness levels. Beyond
                choreography,he connects with participants
                on a personal level, motivating them to surpass their limits. Abinish stays current with fitness trends,
                ensuring his classes remain fresh and invigorating.
                He fosters a sense of community through social events and workshops, turning workouts into celebrations
                of movement and self-expression.
                Abinish is not just a trainer; he's a motivational force that inspires a commitment to a healthier
                lifestyle.
            </p>
            <img src="./Image/Screenshot (667).png" alt="Trainer 2">
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Fitness Zilla.</p>
    </footer>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>