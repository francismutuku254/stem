<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Novatech | Resources</title>
  <link rel="icon" type="image/x-icon" href="img/image1.png" />
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Segoe UI", Arial, sans-serif; }
    body { background: #f9fafc; color: #333; line-height: 1.6; }
    a { text-decoration: none; color: inherit; }

    /* HEADER */
    header {
      background: #03009dff;
      color: white;
      padding: 15px 40px;
      display: flex; align-items: center; justify-content: space-between;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      position: fixed; width: 100%; top: 0; z-index: 1000;
    }
    .logo-container { display: flex; align-items: center; gap: 10px; }
    .logo-container img { height: 40px; width: 40px; object-fit: contain; }
    .logo-container .logo-text { font-size: 1.5rem; font-weight: bold; line-height: 1.2; }
    .logo-container .tagline { font-size: 0.8rem; color: #e6f9f9; }

    nav { display: flex; gap: 20px; }
    nav a {
      font-weight: 500; font-size: 0.95rem;
      display: flex; align-items: center; gap: 6px;
      transition: 0.3s;
    }
    nav a:hover { color: #d9f7f8; transform: translateY(-2px); }
    nav a i { font-size: 1rem; }

    .hamburger { display: none; font-size: 1.5rem; cursor: pointer; color: #fff; }

    @media (max-width: 768px) {
      nav {
        position: absolute; top: 60px; right: 0;
        background: #00979D; flex-direction: column; gap: 15px;
        width: 200px; padding: 20px; display: none;
      }
      nav.active { display: flex; }
      .hamburger { display: block; }
    }
    nav a:nth-child(1) i { color: #FFD700; }
    nav a:nth-child(2) i { color: #00FFB3; }
    nav a:nth-child(3) i { color: #1E90FF; }
    nav a:nth-child(4) i { color: #FF6347; }
    nav a:hover i { transform: scale(1.2); color: #ffffff; }

    /* MAIN */
    main { padding: 120px 10% 40px; }
    h1 { text-align: center; margin-bottom: 40px; font-size: 2rem; color: #00979D; }

    .resources-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
    }
    .resource-card {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      transition: 0.3s;
    }
    .resource-card:hover { transform: translateY(-5px); }
    .resource-card h2 {
      font-size: 1.3rem;
      margin-bottom: 15px;
      color: #007c82;
    }
    .resource-card ul { list-style: none; }
    .resource-card ul li {
      margin-bottom: 10px;
      display: flex; align-items: center; gap: 8px;
    }
    .resource-card ul li a {
      color: #00979D;
      font-weight: 500;
      transition: 0.3s;
    }
    .resource-card ul li a:hover { color: #005f62; text-decoration: underline; }
    .resource-card ul li i { color: #00979D; }

    /* FOOTER */
    footer {
      background: #222; color: #aaa;
      padding: 25px; font-size: 0.9rem;
      margin-top: 50px;
    }
    .footer-content {
      display: flex; justify-content: center; align-items: center; gap: 8px; flex-wrap: wrap;
    }
    .footer-content a { color: #4CAF50; font-weight: 500; }
    .footer-content a:hover { text-decoration: underline; }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="logo-container">
      <img src="img/image1.png" alt="Novatech Logo">
      <div>
        <div class="logo-text">Novatech STEM</div>
        <div class="tagline">Electronic Engineering Solutions</div>
      </div>
    </div>
    <div class="hamburger"><i class="fas fa-bars"></i></div>
    <nav>
      <a href="index.php"><i class="fas fa-home"></i> Home</a>
      <a href="projects.php"><i class="fas fa-project-diagram"></i> Projects</a>
      <a href="resources.php"><i class="fas fa-book"></i> Resources</a>
      <a href="about.php"><i class="fas fa-info-circle"></i> About</a>
    </nav>
  </header>

  <!-- MAIN -->
  <main>
    <h1>STEM Resources</h1>

    <div class="resources-grid">

      <!-- Learning Guides -->
      <div class="resource-card">
        <h2><i class="fas fa-lightbulb"></i> Learning Guides</h2>
        <ul>
          <li><i class="fas fa-book-open"></i> <a href="arduino-guide.php" target="_blank">Getting Started with Arduino</a></li>
          <li><i class="fas fa-cogs"></i> <a href="wedo-guide.php" target="_blank">Basics of LEGO WeDo</a></li>
          <li><i class="fas fa-microchip"></i> <a href="sensors-actuators.php" target="_blank">Using Sensors & Actuators</a></li>
        </ul>
      </div>

      <!-- Downloads -->
      <!-- <div class="resource-card">
        <h2><i class="fas fa-download"></i> Downloads</h2>
        <ul>
          <li><i class="fas fa-file-pdf"></i> <a href="files/circuit-diagrams.pdf" target="_blank">Circuit Diagrams (PDF)</a></li>
          <li><i class="fas fa-file-code"></i> <a href="files/arduino-code.zip" download>Arduino Code Samples (ZIP)</a></li>
          <li><i class="fas fa-file-archive"></i> <a href="files/wedo-pack.zip" download>LEGO WeDo Projects Pack</a></li>
        </ul>
      </div> -->

      <!-- Tools -->
      <div class="resource-card">
        <h2><i class="fas fa-wrench"></i> Tools & References</h2>
        <ul>
          <li><i class="fas fa-laptop-code"></i> <a href="https://www.arduino.cc/en/software" target="_blank">Arduino IDE</a></li>
          <!-- <li><i class="fas fa-drafting-compass"></i> <a href="files/pinout-diagrams.pdf" target="_blank">Pinout Diagrams</a></li> -->
          <li><i class="fas fa-calculator"></i> <a href="https://www.allaboutcircuits.com/tools/" target="_blank">Electronics Calculators</a></li>
        </ul>
      </div>

      <!-- Project Ideas -->
      <div class="resource-card">
        <h2><i class="fas fa-lightbulb"></i> Project Ideas</h2>
        <ul>
          <li><i class="fas fa-child"></i> <a href="beginner-projects.php" target="_blank">Beginner Projects</a></li>
          <li><i class="fas fa-user-graduate"></i> <a href="intermediate-projects.php" target="_blank">Intermediate Projects</a></li>
          <li><i class="fas fa-rocket"></i> <a href="advanced-projects.php" target="_blank">Advanced Projects</a></li>
        </ul>
      </div>

      <!-- Videos -->
      <div class="resource-card">
        <h2><i class="fas fa-video"></i> Video Tutorials</h2>
        <ul>
          <li><i class="fab fa-youtube"></i> <a href="https://youtu.be/JnJIKX5J0Cc?si=z5SRj01Oz00vnuZl" target="_blank">Intro to Arduino</a></li>
          <li><i class="fab fa-youtube"></i> <a href="https://youtu.be/NwIwc2DF9Uk?si=E75IkIa3B-lRncdr" target="_blank">WeDo Motor Control</a></li>
        </ul>
      </div>

      <!-- FAQs -->
      <div class="resource-card">
        <h2><i class="fas fa-question-circle"></i> FAQs</h2>
        <ul>
          <li><i class="fas fa-bug"></i> <a href="faq-arduino-upload.php" target="_blank">Arduino Not Uploading?</a></li>
          <li><i class="fas fa-bluetooth"></i> <a href="faq-wedo-connection.php" target="_blank">WeDo Not Connecting?</a></li>
        </ul>
      </div>

      <!-- Useful Links -->
      <div class="resource-card">
        <h2><i class="fas fa-link"></i> Useful Links</h2>
        <ul>
          <li><i class="fas fa-external-link-alt"></i> <a href="https://docs.arduino.cc/" target="_blank">Arduino Docs</a></li>
          <li><i class="fas fa-external-link-alt"></i> <a href="https://education.lego.com/en-us" target="_blank">LEGO Education</a></li>
          <li><i class="fas fa-external-link-alt"></i> <a href="https://www.stem.org.uk/resources" target="_blank">STEM Communities</a></li>
        </ul>
      </div>

    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    <div class="footer-content">
      <span>© <script>document.write(new Date().getFullYear());</script></span>
      <a href="https://novatech.co.ke/" target="_blank">Novatech</a>
      <span>STEM Portal. All rights reserved.</span>
    </div>
  </footer>

  <!-- JS -->
  <script>
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector("nav");
    hamburger.addEventListener("click", () => nav.classList.toggle("active"));
    document.addEventListener("click", (e) => {
      if (!nav.contains(e.target) && !hamburger.contains(e.target)) {
        nav.classList.remove("active");
      }
    });
  </script>
</body>
</html>
