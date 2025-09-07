<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novatech | Project 2 - Traffic Lights with Button (Arduino)</title>
  <link rel="icon" type="image/x-icon" href="img/image1.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /* Reuse RESET and HEADER styles */
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Segoe UI", Arial, sans-serif; }
    body { background: #f9fafc; color: #333; padding-top: 80px; }

    a { text-decoration: none; color: inherit; display: flex; align-items: center; gap: 6px; }

    header {
      background: #03009dff;
      color: white;
      padding: 15px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      position: fixed;
      top: 0; left: 0;
      width: 100%; z-index: 1000;
    }

    .logo-container { display: flex; align-items: center; gap: 10px; }
    .logo-container img { height: 40px; width: 40px; object-fit: contain; }
    .logo-container .logo-text { font-size: 1.5rem; font-weight: bold; }
    .logo-container .tagline { font-size: 0.8rem; color: #e6f9f9; }

    nav { display: flex; gap: 20px; }
    nav a { font-weight: 500; transition: 0.3s; font-size: 0.95rem; }
    nav a:hover { color: #d9f7f8; transform: translateY(-2px); }

    .hamburger { display: none; font-size: 1.5rem; cursor: pointer; }
    @media (max-width: 768px) {
      nav { display: none; position: absolute; top: 65px; right: 20px; background: #00979D;
            flex-direction: column; gap: 15px; padding: 15px 20px; border-radius: 8px; }
      nav.active { display: flex; }
      .hamburger { display: block; color: white; }
    }
    /* Icon colors */
    nav a:nth-child(1) i { color: #FFD700; }
    nav a:nth-child(2) i { color: #00FFB3; }
    nav a:nth-child(3) i { color: #1E90FF; }
    nav a:nth-child(4) i { color: #FF6347; }

    nav a:hover i { transform: scale(1.2); color: #ffffff; }
    nav a:hover { color: #d9f7f8; transform: translateY(-2px); }

    main { padding: 40px 10%; max-width: 1000px; margin: auto; }
    h1 { text-align: center; margin-bottom: 30px; color: #00979D; }

    /* Video Section */
    .video-container {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      margin-bottom: 40px;
    }
    .video-container iframe {
      position: absolute; top: 0; left: 0;
      width: 100%; height: 100%;
      border: 0;
      border-radius: 12px;
    }

    /* Steps */
    .steps {
      margin-bottom: 40px;
    }
    .steps h2 {
      margin-bottom: 15px;
      color: #03009dff;
    }
    .steps ol {
      padding-left: 20px;
    }
    .steps li {
      margin-bottom: 12px;
      font-size: 1rem;
      line-height: 1.5;
    }

    /* Code Block */
    .code-block {
      background: #1e1e1e;
      color: #f5f5f5;
      padding: 20px;
      border-radius: 10px;
      font-family: monospace;
      overflow-x: auto;
      margin-bottom: 20px;
      position: relative;
    }
    .code-buttons {
      display: flex;
      gap: 10px;
      margin-bottom: 15px;
    }
    .code-buttons button {
      padding: 6px 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 0.9rem;
      font-weight: 500;
      background: #00979D;
      color: white;
      transition: background 0.3s;
    }
    .code-buttons button:hover { background: #007c82; }

    /* Final Notes */
    .notes {
      background: #e6f9f9;
      border-left: 5px solid #00979D;
      padding: 20px;
      border-radius: 8px;
      font-size: 1rem;
      line-height: 1.6;
      margin-top: 30px;
    }

    /* Footer */
    footer {
      background: #222;
      color: #aaa;
      padding: 30px 20px;
      font-size: 0.9rem;
      margin-top: 50px;
      min-height: 70px;
    }
    .footer-content {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }
    .footer-content a {
      color: #4CAF50;
      text-decoration: none;
      font-weight: 500;
    }
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

  <!-- MAIN CONTENT -->
  <main>
    <h1>Project 2: Traffic Lights with Button (Arduino)</h1>

    <!-- Video -->
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/VIDEO_ID" allowfullscreen></iframe>
    </div>

    <!-- Steps -->
    <section class="steps">
      <h2>Step-by-step Guide</h2>
      <ol>
        <li>Gather components: Arduino board, red/yellow/green LEDs, resistors, push button, and wires.</li>
        <li>Connect the LEDs to pins 2, 3, and 4 through resistors.</li>
        <li>Connect the push button to pin 7 with pull-down configuration.</li>
        <li>Write and upload the Arduino code provided below.</li>
        <li>Press the button to change the traffic light sequence.</li>
        <li>Test and adjust timing if necessary.</li>
      </ol>
    </section>

    <!-- Code Block -->
    <section>
      <h2>Arduino Code</h2>
      <div class="code-buttons">
        <button onclick="copyCode()">Copy</button>
        <button onclick="downloadCode()">Download</button>
      </div>
      <pre class="code-block" id="code">
int red = 2;
int yellow = 3;
int green = 4;
int button = 7;
int buttonState = 0;

void setup() {
  pinMode(red, OUTPUT);
  pinMode(yellow, OUTPUT);
  pinMode(green, OUTPUT);
  pinMode(button, INPUT);
}

void loop() {
  buttonState = digitalRead(button);

  if (buttonState == HIGH) {
    digitalWrite(red, HIGH);
    delay(2000);
    digitalWrite(red, LOW);

    digitalWrite(yellow, HIGH);
    delay(1000);
    digitalWrite(yellow, LOW);

    digitalWrite(green, HIGH);
    delay(2000);
    digitalWrite(green, LOW);
  }
}
      </pre>
    </section>

    <!-- Final Notes -->
    <div class="notes">
      <strong>Note:</strong> This project simulates a simple traffic light system using LEDs and a push button.  
      You can extend it by adding a pedestrian crossing signal or adjusting timings to mimic real-world traffic lights!
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

  <script>
    // Hamburger menu toggle
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector("nav");
    hamburger.addEventListener("click", e => {
      e.stopPropagation(); nav.classList.toggle("active");
    });
    document.addEventListener("click", e => {
      if(nav.classList.contains("active") && !nav.contains(e.target) && !hamburger.contains(e.target)) {
        nav.classList.remove("active");
      }
    });

    // Code copy
    function copyCode() {
      const code = document.getElementById("code").innerText;
      navigator.clipboard.writeText(code).then(() => {
        alert("Code copied to clipboard!");
      });
    }

    // Code download
    function downloadCode() {
      const code = document.getElementById("code").innerText;
      const blob = new Blob([code], { type: "text/plain" });
      const link = document.createElement("a");
      link.href = URL.createObjectURL(blob);
      link.download = "project2_code.ino";
      link.click();
    }
  </script>
</body>
</html>
