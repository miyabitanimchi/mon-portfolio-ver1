<?php
  session_start();
  $error = [];

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    // check error when form is sent
  if ($post["name"] === "") {
    $error["name"] = "blank";
  }
  if ($post["email"] === "") {
    $error["email"] = "blank";
  } else if (!filter_var($post["email"], FILTER_VALIDATE_EMAIL)) {
    $error["email"] = "email";
  }
  if ($post["message"] === "") {
    $error["message"] = "blank";
  }

  if (count($error) === 0) {
    $_SESSION["form"] = $post;
    header("Location: confirm.php");
    exit();
  } else {
    if (isset($_SESSION["form"])) {
      $post = $_SESSION["form"];
    }
  }

  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./sass/main.css" />
    <title>Mia Miyabi Tanimichi</title>
  </head>
  <body id="modalActivated">
    <nav class="main-menu-nav">
      <ul>
        <li><a href="#contact-section">Contact</a></li>
        <li><a href="#about-section">About</a></li>
        <li><a href="#work-section">Work</a></li>
        <li><a href="#home-section">Home</a></li>
      </ul>
    </nav>
    <nav class="sns-nav">
      <ul>
        <li>
          <a
            href="https://www.linkedin.com/in/miyabi-tanimichi-71001a203/"
            target="_blank"
            ><i class="fab fa-linkedin"></i
          ></a>
        </li>
        <li>
          <a href="https://github.com/miyabitanimchi" target="_blank"
            ><i class="fab fa-github-alt"></i
          ></a>
        </li>
        <li>
          <a href="https://twitter.com/Miyabikmcnatto" target="_blank"
            ><i class="fab fa-twitter"></i
          ></a>
        </li>
        <li>
          <a href="https://mmyybb-mm.medium.com/about" tarrget="_blank"
            ><i class="fab fa-medium-m"></i
          ></a>
        </li>
        <li>
          <a href="mailto:miyabitanimichi@gmail.com" tarrget="_blank"
            ><i class="far fa-envelope"></i
          ></a>
        </li>
      </ul>
    </nav>
    <main>
      <section id="home-section">
        <div class="main-container">
          <div class="introduction-container">
            <div class="introduction">
              <p>Hi there!</p>
              <p>I am Miyabi Tanimichi</p>
              <p>A Frontend Developer</p>
              <p>Based in Vancouver</p>
            </div>
            <div class="img-blur">
              <div class="profile-img"></div>
            </div>
          </div>
          <a href="#work-section" class="link-to-work">View Works</a>
        </div>
      </section>
      <section id="work-section">
        <!-- Modal -->
        <div id="modalMask" class="hidden-mask"></div>
        <section id="modal" class="hidden-modal">
          <p>Details... Coming Soon!</p>
          <div class="link-to-app">
            <a href="#" id="viewApplicationBtn" target=”_blank”>View Application</a>
          </div>
          <div id="close">Close</div>
        </section>
        <div class="main-container">
          <h1>Works</h1>
          <div class="work-container">
            <div class="work-row1">
              <div class="work fade-in fade-in-up open" data-value="1">
                <p>Open Weather App</p>
                <img src="./img/weatherapp-darkmode.png" alt="weather app" />
                <div class="tech-container">
                  <div class="tech html">HTML</div>
                  <div class="tech css">CSS</div>
                  <div class="tech js">JavaScript</div>
                </div>
              </div>
              <div class="work fade-in fade-in-up open" data-value="2">
                <p>Movie Booking App</p>
                <img
                  src="./img/movie-booking-app.png"
                  alt="movie booking app"
                />
                <div class="tech-container">
                  <div class="tech html">HTML</div>
                  <div class="tech sass">Sass</div>
                  <div class="tech js">JavaScript</div>
                  <div class="tech bootstrap">Bootstrap</div>
                </div>
              </div>
              <div class="work fade-in fade-in-up open" data-value="3">
                <p>Flappy Buddy</p>
                <img src="./img/flappybuddy.png" alt="flappy buddy" />
                <div class="tech-container">
                  <div class="tech html">HTML</div>
                  <div class="tech css">CSS</div>
                  <div class="tech js">JavaScript</div>
                </div>
              </div>
            </div>
            <div class="work-row2">
              <div class="work fade-in fade-in-up open" data-value="4">
                <p>My portfolio</p>
                <img src="./img/myportfolio.png" alt="My portfolio" />
                <div class="tech-container">
                  <div class="tech html">HTML</div>
                  <div class="tech sass">Sass</div>
                  <div class="tech js">JavaScript</div>
                  <div class="tech php">PHP</div>
                </div>
              </div>
              <div class="work fade-in fade-in-up open" data-value="5">
                <p>React E-commerce Site</p>
                <img
                  src="./img/react-ecommerce-site.png"
                  alt="React E-commerce Site"
                />
                <div class="tech-container">
                  <div class="tech react-js">React.js</div>
                  <div class="tech sass">Sass</div>
                </div>
              </div>
              <div class="work fade-in fade-in-up open" data-value="6">
                <p>Copy of Instagram</p>
                <img
                  src="./img/ishigram.png"
                  alt="Ishigram"
                />
                <div class="tech-container">
                  <div class="tech react-js">React.js</div>
                  <div class="tech css">CSS</div>
                  <div class="tech material-ui">Material UI</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="about-section">
        <div class="main-container">
          <h1>About Me</h1>
          <div class="aboutme-container fade-in">
            <div class="what-i-love-container">
              <p id="caption-for-img" class="faded-in">test</p>
              <img
                class="faded-in"
                src="https://2.bp.blogspot.com/-VA8DS8XXYKw/WLEurNb7xVI/AAAAAAABCF4/8oFo3A3VlYkQWi6YV3AhaYh8ndqn_bPtgCLcB/s800/computer07_woman.png"
                alt="Me coding"
                id="slideImg"
                class="slider"
              />
            </div>
            <div class="aboutme-text-container">
              <div class="aboutme-text">
                <h3>About Me</h3>
                <p>
                  My name is Miyabi Tanimichi and you can call me Mia as well. I
                  am a frontend developer based in Vancouver and currently
                  studying web development at school. I am very enthusiastic
                  about building websites and getting new skills every single
                  day.
                </p>
                <br />
                <p>
                  I especially love thinking about how JavaScript code can be
                  implemented to make things happen dynamically and how I can
                  fix bugs.
                </p>
                <br />
                <p>
                  With my experience of working as a sales person and in a
                  customer support, I can well communicate and discuss with
                  cliants and coworkers as well.
                </p>
                <br />
              </div>
              <div class="skills-text">
                <h3>Skills</h3>
                <p>
                  HTML5, CSS3, Sass, JavaScript, jQuery, Git, Bootstrap,
                  React.js(currently learnig passionately)
                </p>
              </div>
            </div>
          </div>
          <a
            href="./img/resume_Miyabi_T_210607.pdf"
            download="miyabiT-resume.pdf"
            id="resume"
            class="fade-in"
            ><div>Download Resume</div></a
          >
        </div>
      </section>
      <section id="contact-section">
        <div class="main-container">
          <h1>Get in Touch</h1>
          <form action="./index.php#contact-section" method="POST" novalidate>
            <div class="name-mail-container">
              <div>
                <label for="name">Name: </label><br />
                <!-- htmlspecialchars... 項目未入力時に既に入力したものが消えないようにする -->
                <input class="input-font-size" type="text" name="name" id="name" value="<?php echo htmlspecialchars($post["name"]); ?>" required/>
                <?php if ($error["name"] === "blank"): ?>
                  <p class="form-alert">*Input your name</p>
                <?php endif; ?>
              </div>
              <div>
                <label for="email">E-mail</label><br />
                <input class="input-font-size" type="email" name="email" id="email" value="<?php echo htmlspecialchars($post["email"]); ?>"/>
                <?php if ($error["email"] === "blank"): ?>
                  <p class="form-alert">*Input your e-mail</p>
                <?php endif; ?>
              </div>
            </div>
            <div class="textarea-container">
              <label for="message" class="label-message">Message: </label><br />
              <textarea class="input-font-size" id="message" name="message" ><?php echo htmlspecialchars($post["message"]); ?></textarea>
              <?php if ($error["message"] === "blank"): ?>
                  <p class="form-alert">*Input your message</p>
                <?php endif; ?>
            </div>
            <button type="submit" class="form-btn">Confirm</button>
          </form>

          <footer>
            <span>&copy; 2021 Miyabi Tanimichi</span>
          </footer>
        </div>
      </section>
    </main>

    <script src="./main.js"></script>
  </body>
</html>
