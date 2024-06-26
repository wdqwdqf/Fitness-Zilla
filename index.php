<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitness Zilla</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./Css/style.css">
  <link rel="stylesheet" href="./Js/script.js">
</head>

<body>
  <header>
    <nav class="navbar">
      <span class="menu-icon" onclick="toggleMenu()">☰</span>
      <div class="logo">Fitness Zilla®</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Services.php">Services</a></li>
        <li><a href="Contactus.php">Contact</a></li>
        <li><a href="RegistrationForm.php">Register</a></li>
        <li><a href="LoginForm.php">Login Form</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Membership</a>
          
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Membership.php">Membership Plan</a></li>
            <li><a class="dropdown-item" href="Booking.php">Trainer Booking</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
          </ul>
      </ul>
      </ul>

      <div class="bar">
        <form action="#" method="get" class="searchbar">
          <input type="text" placeholder="search...">
          <button type="submit"><img src="./Image/icons8-google-web-search-50.png"></button>
        </form>
      </div>

    </nav>
  </header>
  <div class="project1">
    <marquee direction="right" scroll amount="4000" onMouseOver="this.stop();" onMouseOut="this.start();">
      <a href="RegistrationForm.php"
        target="_blank">!!!!!!!!!!!!!!!!!!!!!!!Register!!!!!!!!!!!!!!!!!!!!!!!!!!!!!...................................................................................................................................!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Register!!!!!!!!!!!!!!!!!!!!!!!!!!!</a>
    </marquee>
  </div>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./Image/wp2639533.jpg" class="d-block w-100" alt="First Image">
        <div class="carousel-caption d-none d-md-block">
          <h5>Hello Followers</h5>
          <p>The ultimate Gym of the nation is HERE!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Image/8.jpg" class="d-block w-100" alt="Second Image">
        <div class="carousel-caption d-none d-md-block">
          <h5>GYM</h5>
          <p>Fitness Zilla is a state of the art GYM, complete with equipment for cardio and strength training. In
            addition, they also provide Zumba and yoga classes in mornings and evenings. The gym has a
            large hall for zumba and yoga, a fully equipped gym, a sauna, steam room and changing and
            shower facilities.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Image/desktop-wallpaper-20-workout-motivation-workout.jpg" class="d-block w-100" alt="Third Image">
        <div class="carousel-caption d-none d-md-block">
          <h5>Gym Exploration</h5>
          <p>Exercise doesnt depend on age. People can exercise at any age but have to follow the gym
            restrictions.
            Age restrictions in gyms are not to stop you from exercising.
            These restrictions are to save you from any injury and then be checked by an online doctor at an
            early age.
            Go to the gym whether you are a teenager or an old one. The ideal age to join a gym is still
            17-18 years.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./Image/3.jpg" class="d-block w-100" alt="Fourth Image">
        <div class="carousel-caption d-none d-md-block">
          <h5>GYM</h5>
          <p>A gym is a large room, usually containing special equipment, where people go to do physical exercise
            and
            get fit.
            The gym has exercise bikes and running machines. While some guests play golf, others work out in
            the hotel
            gym.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="project">
    <marquee direction="left" scroll amount="2000" onMouseOver="this.stop();" onMouseOut="this.start();">
      <a href="About.php" target="_blank">Regular physical activity is one of the most important things you can
        do for your health. Being physically active can improve your brain health, help manage weight, reduce the risk
        of disease, strengthen bones and muscles & improve your ability to do everyday activities.</a>
    </marquee>
  </div>
  <section class="aalu">
    <div class="para-wrap">
      <p style="display:flex; justify-content:center; align-items: center;">
        Gym Center is not for the faint-hearted. It’s for those who are willing to push themselves to the limit,
        to sweat, to grind, to feel the burn, and to emerge stronger than ever before. It’s for those who are tired of
        mediocrity and are ready to take their fitness journey to the next level. At Gym Center, we don’t believe in
        excuses,we believe in results. We don’t believe in taking it easy, we believe in pushing yourself to the brink
        of
        exhaustion and beyond.We don’t believe in giving up, we believe in fighting through the pain and coming out on
        top. So if you’re ready to unleash your inner beast, to break down barriers, and to achieve greatness,then Gym
        Center
        is the place for you. Come join us and let’s get shredded!
      </p>
    </div>
  </section>
  </div>
  </div>
  <div aria-label="Page navigation example">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="Membership.php">Join our Membership Programmes</a></li>
    </ul>
  </div>
  <iframe src="https://www.youtube.com/embed/_xwJoKW3OU8?si=nK6DuxWj2kego4Pw" title="YouTube video player"
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    allowfullscreen></iframe>
    <button id="toggle-btn" onclick="toggleChatbox()">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXD4VUSv9lNPZrSXq4Kq05mwsaTiazVVqUeZsZzVCe5Q&s" alt="Chatbot Logo">
  </button>
  <div id="chat-container">
      <div class="rdr">
          <h2>Chatbot<h2>
          <button class="close-btn" onclick="toggleChatbox()">X</button>
      </div>
      <div class="chat-content">
          <div id="chat-messages"></div>
          <div id="suggestion-box" class="suggestion-box"></div>
          <div id="user-input">
              <input type="text" id="user-message" placeholder="Type your message..." onkeydown="sendMessageOnEnter(event)">
              <button id="send-btn" onclick="sendMessage()">Send</button>
          </div>
      </div>
  </div>
  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
  function toggleMenu() {
      var links = document.querySelectorAll('.navbar a, .navbar .login-btn');
      links.forEach(function(link) {
          link.style.display = link.style.display === 'none' ? 'block' : 'none';
           });
  }
  </script>
  <script src="./Js/script.js"></script>
  <footer>
    <p>2024 Fitness Zilla &copy;</p>
  </footer>

</body>
</html>