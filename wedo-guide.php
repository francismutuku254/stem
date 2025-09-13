<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Novatech | LEGO WeDo Guide</title>
  <link rel="icon" type="image/x-icon" href="img/image1.png" />
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
      position: fixed; width: 100%; top: 0; z-index: 1000;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .logo-container { display: flex; align-items: center; gap: 10px; }
    .logo-container img { height: 40px; width: 40px; object-fit: contain; }
    .logo-text { font-size: 1.5rem; font-weight: bold; }
    .tagline { font-size: 0.8rem; color: #e6f9f9; }
    nav { display: flex; gap: 20px; }
    nav a { display: flex; align-items: center; gap: 6px; font-size: 0.95rem; transition: 0.3s; }
    nav a:hover { color: #d9f7f8; transform: translateY(-2px); }
    nav a i { font-size: 1rem; }
    .hamburger { display: none; font-size: 1.5rem; cursor: pointer; color: #fff; }

    @media (max-width: 768px) {
      nav { position: absolute; top: 60px; right: 0; background: #00979D;
            flex-direction: column; gap: 15px; width: 200px; padding: 20px; display: none; }
      nav.active { display: flex; }
      .hamburger { display: block; }
    }
    /* Icon colors */
    nav a:nth-child(1) i { color: #FFD700; }
    nav a:nth-child(2) i { color: #00FFB3; }
    nav a:nth-child(3) i { color: #1E90FF; }
    nav a:nth-child(4) i { color: #FF6347; }
    nav a:nth-child(5) i { color: #FF8C00; }   /* Shop */
    nav a:nth-child(6) i { color: #DC143C; }   /* Logout */
    nav a:hover i { transform: scale(1.2); color: #ffffff; }
    nav a:hover { color: #d9f7f8; transform: translateY(-2px); }

    /* MAIN CONTENT */
    main { padding: 120px 10% 40px; }
    h1 { text-align: center; margin-bottom: 20px; color: #00979D; }
    .intro { text-align: center; margin-bottom: 40px; }
    .steps { display: grid; gap: 20px; }
    .step {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }
    .step h3 { margin-bottom: 10px; color: #03009dff; }

    .video-container { text-align: center; margin: 40px 0; }
    .video-container iframe {
      width: 100%;
      max-width: 720px;
      height: 400px;
      border-radius: 12px;
      border: none;
    }

    .code-section {
      background: #272822;
      color: #f8f8f2;
      padding: 20px;
      border-radius: 8px;
      position: relative;
      margin: 40px 0;
    }
    .code-section pre { overflow-x: auto; }
    .copy-btn {
      position: absolute; top: 10px; right: 10px;
      background: #00979D; border: none; color: #fff;
      padding: 5px 10px; border-radius: 5px; cursor: pointer;
    }
    .copy-btn:hover { background: #007c82; }

    .final-notes {
      background: #e6f9f9;
      padding: 20px;
      border-left: 6px solid #00979D;
      border-radius: 8px;
    }

    /* FOOTER */
    footer {
      background: #222; color: #aaa;
      padding: 25px; font-size: 0.9rem; margin-top: 50px;
    }
    .footer-content {
      display: flex; justify-content: center; align-items: center;
      gap: 8px; flex-wrap: wrap;
    }
    .footer-content a { color: #4CAF50; font-weight: 500; }
  </style>
</head>
<body>
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
      <a href="https://novatech.co.ke/" target="_blank"><i class="fas fa-store"></i> Shop</a>
      <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </nav>
  </header>

  <main>
    <h1>Basics of LEGO WeDo</h1>
    <div class="intro">
      <p>LEGO WeDo introduces young learners to coding and robotics in a fun, visual way. This guide helps you set up your kit and create your first project.</p>
    </div>

    <div class="steps">
      <div class="step">
        <h3>Step 1: Unbox Your LEGO WeDo Kit</h3>
        <p>Make sure you have the SmartHub, motor, sensors, and all LEGO parts included in the box.</p>
      </div>
      <div class="step">
        <h3>Step 2: Install the WeDo Software</h3>
        <p>Download the LEGO WeDo 2.0 software or WeDo Education app on your device.</p>
      </div>
      <div class="step">
        <h3>Step 3: Connect the SmartHub</h3>
        <p>Insert batteries, turn on the SmartHub, and pair via Bluetooth in the app.</p>
      </div>
      <div class="step">
        <h3>Step 4: Build Your First Model</h3>
        <p>Follow the in-app instructions to construct a basic motor-powered model.</p>
      </div>
    </div>

    <div class="video-container">
      <h2>Watch the Tutorial</h2>
      <iframe src="https://www.youtube.com/embed/pW9qNiZT6U8" allowfullscreen></iframe>
    </div>

    <h2>Sample WeDo Program (Visual Blocks)</h2>
    <div class="code-section">
      <button class="copy-btn" onclick="copyCode()">Copy</button>
      <pre><code>
When program starts:
  Turn motor ON (clockwise)
  Wait 2 seconds
  Turn motor OFF
      </code></pre>
    </div>

    <div class="final-notes">
      <h2>Final Notes</h2>
      <p>WeDo is a fantastic entry point for children to learn programming logic and engineering. Encourage learners to experiment with sensors and motors to build interactive projects.</p>
    </div>
  </main>

  <footer>
    <div class="footer-content">
      <span>© <script>document.write(new Date().getFullYear());</script></span>
      <a href="https://novatech.co.ke/" target="_blank">Novatech</a>
      <span>STEM Portal. All rights reserved.</span>
    </div>
  </footer>

  <script>
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector("nav");
    hamburger.addEventListener("click", () => nav.classList.toggle("active"));
    document.addEventListener("click", (e) => {
      if (!nav.contains(e.target) && !hamburger.contains(e.target)) {
        nav.classList.remove("active");
      }
    });

    function copyCode() {
      const code = document.querySelector(".code-section pre code").innerText;
      navigator.clipboard.writeText(code);
      alert("Code copied to clipboard!");
    }
  </script>
</body>
</html>
