<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Highlights | Novatech STEM</title>
  <link rel="icon" type="image/x-icon" href="img/image1.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Segoe UI", Arial, sans-serif; }

    body {
      background: #f4f7fb;
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      padding-top: 80px; /* leave space for fixed header */
    }

    a { text-decoration: none; color: inherit; display: flex; align-items: center; gap: 6px; }

    /* ====== HEADER (from second code) ====== */
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
    .logo-container .logo-text { font-size: 1.5rem; font-weight: bold; letter-spacing: 1px; line-height: 1.2; }
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
    nav a:nth-child(5) i { color: #FF8C00; }
    nav a:nth-child(6) i { color: #DC143C; }
    nav a:hover i { transform: scale(1.2); color: #ffffff; }

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

    /* ===== MAIN ===== */
    main {
      flex: 1;
      padding: 30px 8%;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #00979D;
    }
    p.subtitle {
      text-align: center;
      font-size: 1rem;
      color: #555;
      margin-bottom: 40px;
    }

    /* ===== GALLERY ===== */
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }
    .gallery-item {
      background: white;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      cursor: pointer;
    }
    .gallery-item:hover {
      transform: translateY(-8px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    }
    .gallery-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    .gallery-item .info {
      padding: 15px;
    }
    .gallery-item .info h3 {
      font-size: 1.1rem;
      margin-bottom: 8px;
      color: #333;
    }
    .gallery-item .info p {
      font-size: 0.9rem;
      color: #666;
    }

    /* Footer */
    footer {
      background: #222;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
    }
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
      <a href="https://novatech.co.ke/" target="_blank"><i class="fas fa-store"></i> Shop</a>
      <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </nav>
  </header>

  <!-- MAIN -->
  <main>
    <h1>Our Highlights</h1>
    <p class="subtitle">Celebrating our achievements, trophies, and schools we’ve proudly worked with.</p>

    <div class="gallery">
      <div class="gallery-item">
        <img src="img/trophy1.jpg" alt="Trophy 1">
        <div class="info">
          <h3>Kenya National Science Fair</h3>
          <p>🏆 1st Place .</p>
        </div>
      </div>

      <div class="gallery-item">
        <img src="img/school1.jpg" alt="School visit">
        <div class="info">
          <h3>St. Mary’s High School</h3>
          <p>STEM training workshops and robotics showcase.</p>
        </div>
      </div>

      <div class="gallery-item">
        <img src="img/trophy2.jpg" alt="Trophy 2">
        <div class="info">
          <h3>Kenya Science Fair</h3>
          <p>🏅 Limuru Girls High School.</p>
        </div>
      </div>

      <div class="gallery-item">
        <img src="img/school2.jpg" alt="School visit 2">
        <div class="info">
          <h3>RHS Cambridge Home Schooling</h3>
          <p>Robotics mentorship and hands-on programming labs.</p>
        </div>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    © <script>document.write(new Date().getFullYear());</script> Novatech STEM Portal. All rights reserved.
  </footer>

  <!-- ===== JS for mobile nav ===== -->
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
  </script>
</body>
</html>
