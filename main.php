<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/index.css" />
    <title>main</title>
  </head>
  <body>
    <script src="/js/main.js"></script>
    <script src="/js/index.js"></script>
    <header>
      <div class="logo">
        <img src="images/logo.png" alt="logo" class="logo_img" />
      </div>
      <h1>university of Boumerdes</h1>
    </header>
    <nav class="nav">
      <ul class="nav_list">
        <li>
          <button type="button" onclick="onClick('home.php')">Home</button>
        </li>
        <hr />
        <li>
          <dropdown class="dropdown">
            <li>
              <button type="button" onclick="onClick('main.html')">Exam</button>
            </li>
            <div class="dropdown-content">
              <dropdown class="dropdown-nav" id="dropdown-nav">
                <button href="#" class="nav-button" onclick="toggleDropdown()">
                  DAW
                </button>
                <div class="dropdown-content-nav" id="questionLinks"></div>
              </dropdown>
              <hr />
              <div class="dropdown-nav">
                <button href="#" class="nav-button">POO</button>
                <div class="dropdown-content-nav">
                  <div class="question-links" id="questionLinks"></div>
                </div>
              </div>
              <hr />
              <div class="dropdown-nav">
                <button href="#" class="nav-button">THL</button>
                <div class="dropdown-content-nav">
                  <div class="question-links" id="questionLinks"></div>
                </div>
              </div>
            </div>
          </dropdown>
        </li>
        <hr />
      </ul>
    </nav>

    <section class="main_section">
      <aside class="timer-aside">
        <div class="timer-display" id="timer">01:00:00</div>
      </aside>
      <aside class="guidelines-aside">
        <h2>Exam Guidelines</h2>
        <div class="guidelines-container">
          <div class="auto-scroll">
            <h3>Important Rules:</h3>
            <ul>
              <li>No talking during the exam</li>
              <li>No sharing of answers</li>
              <li>Keep your eyes on your own screen</li>
              <li>Raise your hand if you need assistance</li>
            </ul>

            <h3>Technical Guidelines:</h3>
            <ul>
              <li>Save your answers frequently</li>
              <li>Don't refresh the page</li>
              <li>Internet connection must remain stable</li>
            </ul>

            <h3>Time Management:</h3>
            <ul>
              <li>Allocate time wisely</li>
              <li>Answer easy questions first</li>
              <li>Review your answers if time permits</li>
            </ul>

            <h3>Submission:</h3>
            <ul>
              <li>Answers auto-submit when time expires</li>
              <li>Don't close the browser until confirmation</li>
            </ul>
          </div>
        </div>
      </aside>
      <div class="content">
        <h1><u>Online Exam</u></h1>
      </div>
      <div class="QtSection">
        <div class="card" id="card-templateQSM" style="display: none">
          <u
            ><h2 class="title"><u>title :</u></h2></u
          >
          <p class="QT">je siyr donne dela la bib libzad lk,daz ml,dmaz, ?</p>
          <div class="row">
            <div class="column">
              <input type="checkbox" id="q1" name="q1" value="q1" />
              <label for="q1" class="Q1">ahmed</label><br />
              <div class="spacer"></div>
              <input type="checkbox" id="q2" name="q2" value="q2" />
              <label for="q2" class="Q2">el Beghl</label><br />
            </div>
            <div class="column">
              <input type="checkbox" id="q3" name="q3" value="q3" />
              <label for="q3" class="Q3">Fooud</label><br />
              <div class="spacer"></div>
              <input type="checkbox" id="q4" name="q4" value="q4" />
              <label for="q4" class="Q4">begra</label><br />
            </div>
          </div>
        </div>
        <hr />
        <div id="cards-container"></div>
        <div class="card" id="card-templateTorF" style="display: none">
          <h2 class="title"></h2>
          <p class="QT"></p>
          <div class="options">
            <div>
              <input type="radio" id="torf-true" class="q1" />
              <label for="torf-true" class="Q1">True</label>
            </div>
            <div>
              <input type="radio" id="torf-false" class="q2" />
              <label for="torf-false" class="Q2">False</label>
            </div>
          </div>
        </div>
        <hr />
      </div>
      <button id="submit-button" onclick="submitAnswers()">Submit</button>
    </section>
  </body>
  <footer class="footer">
    <div class="score">
      <p>Score:</p>
      <p id="score"></p>
    </div>
    <div class="footer-content">
      <p>&copy; 2023 University of Boumerdes. All rights reserved.</p>
    </div>
  </footer>
</html>
