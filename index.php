<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novatech | STEM Portal</title>
  <link rel="icon" type="image/x-icon" href="img/image1.png">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /* ====== RESET ====== */
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Segoe UI", Arial, sans-serif; }

    body { background: #f9fafc; color: #333; padding-top: 80px; }

    a { text-decoration: none; color: inherit; display: flex; align-items: center; gap: 6px; }

    /* ====== HEADER ====== */
    header {
      background: #03009dff;
      color: white;
      padding: 15px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
    }

    .logo-container { display: flex; align-items: center; gap: 10px; }

    .logo-container img { height: 40px; width: 40px; object-fit: contain; }

    .logo-container .logo-text {
      font-size: 1.5rem; font-weight: bold; letter-spacing: 1px; line-height: 1.2;
    }
    .logo-container .tagline { font-size: 0.8rem; font-weight: 400; margin-top: 2px; color: #e6f9f9; }

    nav { display: flex; gap: 20px; }
    nav a {
      font-weight: 500; font-size: 0.95rem; display: flex; align-items: center; gap: 6px;
      transition: 0.3s;
    }
    nav a:hover { color: #d9f7f8; transform: translateY(-2px); }
    nav a i { font-size: 1rem; }

    /* Icon colors */
    nav a:nth-child(1) i { color: #FFD700; }
    nav a:nth-child(2) i { color: #00FFB3; }
    nav a:nth-child(3) i { color: #1E90FF; }
    nav a:nth-child(4) i { color: #FF6347; }
    nav a:hover i { transform: scale(1.2); color: #ffffff; }

    /* ====== HAMBURGER ====== */
    .hamburger { display: none; font-size: 1.5rem; cursor: pointer; }

    @media (max-width: 768px) {
      nav {
        position: absolute; top: 60px; right: 0;
        background: #00979D; flex-direction: column; gap: 15px;
        width: 200px; padding: 20px; display: none;
      }
      nav.active { display: flex; }
      .hamburger { display: block; color: white; }
    }

    /* ====== AUTO TYPE BANNER ====== */
    .banner {
      width: 100%; background: linear-gradient(to right, #3498db, #2ecc71);
      color: white; text-align: center;
      padding: 40px 20px; font-size: 1.5rem; font-weight: bold; line-height: 1.5;
      display: flex; align-items: center; justify-content: center; min-height: 80px;
    }
    .banner span {
      display: inline-block; min-height: 1.5em; white-space: nowrap;
      border-right: 3px solid white; animation: blink 0.7s infinite; overflow: hidden;
    }
    @keyframes blink { 50% { border-color: transparent; } }
    @media (max-width: 768px) { .banner { font-size: 1.2rem; min-height: 70px; padding: 30px 15px; } }
    @media (max-width: 480px) { .banner { font-size: 1rem; min-height: 60px; padding: 25px 10px; } }

    /* ====== MAIN ====== */
    main { padding: 40px 10%; }
    h1 { text-align: center; margin-bottom: 30px; font-size: 2rem; color: #00979D; }

    /* ====== CARDS GRID ====== */
    .card-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
  align-items: stretch; /* equal card heights */
}

    @media (max-width: 768px) {
      .card-grid { grid-template-columns: 1fr; } /* stack on small screens */
    }

    .card {
  background: white;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
  transition: transform 0.3s;
  display: flex;
  flex-direction: column;
}
    .card:hover { transform: translateY(-5px); }

   
    /* Equal image height on large screens */
.card img {
  width: 100%;
  height: auto;       /* allow responsive height */
  object-fit: cover;  /* fill width, no white gaps */
  display: block;
}



    /* Equalize content */
    .card-content {
      padding: 15px;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .card-content h3 { font-size: 1.2rem; margin-bottom: 10px; color: #333; }
    .card-content p { flex: 1; font-size: 0.95rem; margin-bottom: 15px; color: #555; }
    .card-content a {
      background: #00979D; color: white; padding: 10px 15px;
      border-radius: 8px; text-align: center; transition: background 0.3s;
      font-weight: 500;
    }
    .card-content a:hover { background: #007c82; }

    /* ====== FOOTER ====== */
    footer {
      background: #222; color: white; text-align: center;
      padding: 25px; font-size: 0.9rem; margin-top: 50px;
    }
    .footer-content {
      display: flex; justify-content: center; align-items: center; gap: 8px;
      flex-wrap: nowrap; white-space: nowrap; overflow-x: auto; font-size: 0.85rem;
    }
    .footer-content a { color: #4CAF50; text-decoration: none; font-weight: 500; }
    .footer-content a:hover { text-decoration: underline; }
    @media (max-width: 480px) { .footer-content { font-size: 0.75rem; gap: 4px; } }
  </style>
</head>
<body>

  <!-- ====== HEADER ====== -->
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

  <!-- ====== AUTO TYPE BANNER ====== -->
  <section class="banner"><span id="autoText"></span></section>

  <!-- ====== MAIN CONTENT ====== -->
  <main>
    <h1>Explore our learning solutions</h1>
    <div class="card-grid">
      
      <div class="card">
        <img src="img/image2.jpg" alt="WeDo Project">
        <div class="card-content">
          <h3>LEGO WeDo</h3>
          <p>Explore beginner-friendly LEGO WeDo projects that bring concepts of mechanics and programming to life.</p>
          <a href="public/index.html">View Projects</a>
        </div>
      </div>

      <div class="card">
        <img src="img/image3.jpg" alt="Arduino Project">
        <div class="card-content">
          <h3>Arduino</h3>
          <p>Dive into Arduino projects that blend electronics and coding.</p>
          <a href="#">View Projects</a>
        </div>
      </div>

      <div class="card">
        <img src="img/acebott3.jpg" alt="Acebott Project">
        <div class="card-content">
          <h3>Acebott</h3>
          <p>Build and program smart robotic kits with Acebott, designed to make STEM learning fun and hands-on.</p>
          <a href="public/arduino.html">View Projects</a>
        </div>
      </div>

      <div class="card">
        <img src="img/esp.jpg" alt="ESP Project">
        <div class="card-content">
          <h3>ESP</h3>
          <p>Create powerful IoT solutions with ESP boards, combining Wi-Fi, sensors, and automation in one platform.</p>
          <a href="#">View Projects</a>
        </div>
      </div>

    </div>
  </main>

  <!-- ====== FOOTER ====== -->
  <footer>
    <div class="footer-content">
      <span>© <script>document.write(new Date().getFullYear());</script></span>
      <a href="https://novatech.co.ke/" target="_blank">Novatech</a>
      <span>STEM Portal. All rights reserved.</span>
    </div>
  </footer>

  <!-- ====== JS ====== -->
  <script>
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector("nav");
    hamburger.addEventListener("click", (e) => {
      e.stopPropagation(); nav.classList.toggle("active");
    });
    document.addEventListener("click", (e) => {
      if (nav.classList.contains("active") && !nav.contains(e.target) && !hamburger.contains(e.target)) {
        nav.classList.remove("active");
      }
    });
    nav.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => nav.classList.remove("active"));
    });

    // Auto typing banner
    const messages = [
      "Welcome to Novatech STEM Portal",
      "Empowering learners with hands-on projects!",
      "Inspiring future innovators!"
    ];
    let part = 0, i = 0, deleting = false;
    const speed = 130, pause = 2000;
    const autoText = document.getElementById("autoText");

    function typeEffect() {
      const message = messages[part];
      if (!deleting) {
        i++;
        autoText.textContent = message.substring(0, i);
        if (i === message.length) { deleting = true; setTimeout(typeEffect, pause); return; }
      } else {
        i--;
        autoText.textContent = message.substring(0, i);
        if (i === 0) { deleting = false; part = (part + 1) % messages.length; }
      }
      setTimeout(typeEffect, deleting ? speed / 2 : speed);
    }
    typeEffect();
  </script>
</body>
</html>
