<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page</title>
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

            footer {
                padding: 5px 0;
            }
        }

        footer {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            bottom: 0;
            width: 100%;
        }
        .potato {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgb(57, 53, 53);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: whitesmoke;
        }
        .name {
            font-size: 24px;
            font-weight: bold;
            color: bisque;
        }
        .details {
            margin-top: 20px;
            color: #777;
        }
        .fruit{
            overflow:hidden;
        }
        .banana img{
            width: 100%;
            height:100vh;
            border-color:blue;
            border-radius:20px;
            text-align:center;
            padding:5px;
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

    <div class="slider-container">
        <div class="slider">
            <div class="slide" style="background-color: rgb(81, 12, 12); color:#fff;text-align: center;">Trainer</div>
            <div class="slide" style="background-color: rgb(23, 23, 72);color:#fff;text-align: center;">Instructor 2</div>
            <div class="slide" style="background-color: rgb(20, 63, 20);color:#fff;text-align: center;">Classes</div>
        </div>
    </div>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="./Image/17.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="./Image/17.webp" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="potato">
        <h1>Trainer</h1>
        <div class="name">Sabin Bist</div>
        <div class="details">
            <p>Age: 30</p>
            <p>Experience:10years</p>
            <p>Rating:8.5</p>
        </div>
        <div class="name">Abinish Jaiswal</div>
        <div class="details">
            <p>Age: 44</p>
            <p>Experience:10years</p>
            <p>Rating:7</p>
        </div>
        <h1>Instructor</h1>
        <div class="name">Sugam Singh</div>
        <div class="details">
            <p>Age: 30</p>
            <p>Experience:8years</p>
            <p>Rating:10</p>
        </div>
        <div class="name">Khagendra Oli</div>
        <div class="details">
            <p>Age: 33</p>
            <p>Experience:13years</p>
            <p>Rating:10</p>
        </div>
        <div class="name">Sujan Maharjan</div>
        <div class="details">
            <p>Age: 28</p>
            <p>Experience:6years</p>
            <p>Rating:6</p>
        </div>
    </div>
    <div class="fruit">
  <div class="banana">
        <img src="../bootstrapproject/Image/9.webp" alt="Image 1">
        <img src="../bootstrapproject/Image/OIG3.jpeg" alt="Image 2">
  </div>
</div>
<script src="script.js"></script>
    <footer>
        <p>&copy; 2024 Fitness Zilla.</p>
    </footer>
</body>

</html>
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
<script>

const slider = document.querySelector('.slider');
let count = 0;
function slide() {
  count++;
  if (count >= slider.children.length) {
    count = 0;
  }
  slider.style.transform = `translateX(-${count * 100}%)`;
}

setInterval(slide,300);
</script>

</html>