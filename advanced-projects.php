<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Novatech | Advanced Projects</title>
  <link rel="icon" type="image/x-icon" href="img/image1.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Segoe UI", Arial, sans-serif; }
    body { background: #f9fafc; color: #333; line-height: 1.6; }
    a { text-decoration: none; color: inherit; }

    /* HEADER */
    header {
      background: #03009dff; color: white;
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

    /* MAIN */
    main { padding: 120px 10% 50px; }
    h1 { text-align: center; margin-bottom: 30px; color: #00979D; }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
    }
    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      overflow: hidden;
      display: flex; flex-direction: column;
      transition: transform 0.3s ease;
    }
    .card:hover { transform: translateY(-5px); }
    .card img {
      width: 100%; height: 200px; object-fit: contain; background: #f0f0f0;
    }
    .card-content {
      padding: 20px;
      flex: 1;
      display: flex; flex-direction: column; justify-content: space-between;
    }
    .card-content h3 { color: #03009dff; margin-bottom: 10px; }
    .card-content p { flex: 1; margin-bottom: 15px; }
    .btn {
      display: inline-block;
      background: #00979D;
      color: #fff;
      padding: 10px 15px;
      border-radius: 6px;
      text-align: center;
      transition: 0.3s;
    }
    .btn:hover { background: #007c82; }

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
      <a href="https://novatech.co.ke/" target="_blank"><i class="fas fa-store"></i> Shop</a>
      <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </nav>
  </header>

  <!-- MAIN CONTENT -->
  <main>
    <h1>Advanced Projects</h1>
    <div class="projects-grid">
      <div class="card">
        <img src="img/smarthome.jpg" alt="Home Automation System">
        <div class="card-content">
          <h3>Smart Home Automation</h3>
          <p>Control home appliances remotely using WiFi-enabled microcontrollers like ESP32/ESP8266.</p>
        </div>
      </div>

      <div class="card">
        <img src="img/robotic.jpg" alt="Robotic Arm">
        <div class="card-content">
          <h3>Robotic Arm</h3>
          <p>Build a robotic arm with servo motors, controlled via joystick or pre-programmed movements.</p>
        </div>
      </div>

      <div class="card">
        <img src="img/weather.jpg" alt="IoT Weather Station">
        <div class="card-content">
          <h3>IoT Weather Station</h3>
          <p>Measure and upload real-time weather data (temperature, humidity, pressure) to the cloud.</p>
        </div>
      </div>

      <div class="card">
        <img src="img/line.jpg" alt="Line Follower Robot">
        <div class="card-content">
          <h3>Line Follower Robot</h3>
          <p>Design a robot that follows a track using infrared sensors and motor control algorithms.</p>
        </div>
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

  <!-- SCRIPT -->
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
