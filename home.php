<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/home.css" />
    <title>Home</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="images/logo.png" alt="logo" class="logo_img" />
      </div>
      <h1>University of Boumerdes</h1>
    </header>
    <nav class="nav">
      <script src="/js/index.js"></script>
      <ul class="nav_list">
        <li>
          <button id="button-main" onclick="onClick('home.php')">Home</button>
        </li>
        <hr />
        <li>
          <div class="dropdown-content">
            <dropdown class="dropdown-nav">
              <button href="#" class="nav-button" onclick="toggleDropdown()">
                Exam
              </button>

              <div class="dropdown-content-nav">
                <button class="nav-button">DAW</button>
                <hr />
                <button class="nav-button">THL</button>
                <hr />
                <button class="nav-button">OOP</button>
              </div>
            </dropdown>
          </div>
        </li>
        <hr />
      </ul>
    </nav>
    <section class="main_section">
      <script src="/js/home.js"></script>
      <div class="content">
        <h1><u>Online Exam</u></h1>
      </div>
      <div class="card-stack">
        <div class="card card-1 active" data-card="1">
          <p class="title">Exam Description</p>
          <div class="card-content">
            <div class="button-desc">
              <button onclick="onClickDesc('DAW')">DAW</button>
              <button onclick="onClickDesc('THL')">THL</button>
              <button onclick="onClickDesc('OOP')">OOP</button>
            </div>
            <article class="desc-articl" id="desc-article">
              DAW is a course that focuses on the principles and practices of
              web development. It covers topics such as HTML, CSS, JavaScript,
              and responsive design. Students learn to create dynamic and
              interactive web applications using modern frameworks and tools.
              The course emphasizes best practices in coding, debugging, and
              version control. By the end of the course, students will have a
              solid foundation in web development and be able to build their own
              websites and applications.
            </article>
          </div>
        </div>
        <div class="card card-2 active" data-card="2">
          <p class="title">zeffez Description</p>
          <div class="card-content">
            <article>
              Scope: Tests knowledge of linguistic concepts like phonetics,
              syntax, semantics, and sociolinguistics. Format: Often includes
              essays, analysis of language structures, and applied theory
              questions. Goal: Evaluates understanding of how languages
              function, evolve, and are acquired (e.g., Chomsky vs. Skinner).
              Use: Common in university linguistics programs or teacher training
              (TESOL, etc.).
            </article>
          </div>
        </div>
        <!-- <div class="card card-3 active" data-card="3">
          <p class="title">Exhtrhrtam Description</p>
          <div class="card-content">
            <div class="button-desc">
              <button>DAW</button>
              <button>THL</button>
              <button>OOP</button>
            </div>
            <article>
              Scope: Tests knowledge of linguistic concepts like phonetics,
              syntax, semantics, and sociolinguistics. Format: Often includes
              essays, analysis of language structures, and applied theory
              questions. Goal: Evaluates understanding of how languages
              function, evolve, and are acquired (e.g., Chomsky vs. Skinner).
              Use: Common in university linguistics programs or teacher training
              (TESOL, etc.).
            </article>
          </div>
        </div> -->
      </div>
      <div class="card-footer">
        <p>Go To pass the Exam</p>
        <div class="button-desc">
          <button>DAW</button>
          <button>THL</button>
          <button>OOP</button>
        </div>
      </div>
    </section>
  </body>
  <footer class="footer">
    <div class="footer-content">
      <div class="dropdown-footer">
        <button class="dropdown-btn" onclick="toggleDropdown_footer()">
          participating student
        </button>
        <div
          class="dropdown-content-footer horizontal-list"
          id="personDropdown"
        >
          <div class="people-container">
            <ul class="people-list">
              <!-- Person 1 -->
              <li class="person-item">
                <ul class="person-list">
                  <li class="person-info">
                    <i class="material-icons">person</i>
                    <p>Manini</p>
                  </li>
                  <li class="person-info">
                    <i class="material-icons">email</i>
                    <p>Alidazda@gmail.com</p>
                  </li>
                  <li class="person-info">
                    <p>S:1 G:06</p>
                  </li>
                </ul>
              </li>

              <!-- Person 2 -->
              <li class="person-item">
                <ul class="person-list">
                  <li class="person-info">
                    <i class="material-icons">person</i>
                    <p>Hafozli9</p>
                  </li>
                  <li class="person-info">
                    <i class="material-icons">email</i>
                    <p>Mohamed@example.com</p>
                  </li>
                  <li class="person-info">
                    <p>S:2 G:04</p>
                  </li>
                </ul>
              </li>

              <!-- Person 3 -->
              <li class="person-item">
                <ul class="person-list">
                  <li class="person-info">
                    <i class="material-icons">person</i>
                    <p>El Gherba3</p>
                  </li>
                  <li class="person-info">
                    <i class="material-icons">email</i>
                    <p>Fatima@example.com</p>
                  </li>
                  <li class="person-info">
                    <p>S:3 G:02</p>
                  </li>
                </ul>
              </li>
              <li class="person-item">
                <ul class="person-list">
                  <li class="person-info">
                    <i class="material-icons">person</i>
                    <p>AbdeRaouf</p>
                  </li>
                  <li class="person-info">
                    <i class="material-icons">email</i>
                    <p>Alidazda@gmail.com</p>
                  </li>
                  <li class="person-info">
                    <p>S:1 G:06</p>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <p class="copyright">
        &copy; 2023 University of Boumerdes. All rights reserved.
      </p>
    </div>
  </footer>
</html>
