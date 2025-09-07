<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Novatech | About Us</title>
  <link rel="icon" type="image/x-icon" href="img/image1.png" />
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /* ====== RESET ====== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Segoe UI", Arial, sans-serif;
    }
    body {
      background: #f9fafc;
      color: #333;
      line-height: 1.6;
    }
    a {
      text-decoration: none;
      color: inherit;
    }

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
      width: 100%;
      top: 0;
      z-index: 1000;
    }
    .logo-container {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .logo-container img {
      height: 40px;
      width: 40px;
      object-fit: contain;
    }
    .logo-container .logo-text {
      font-size: 1.5rem;
      font-weight: bold;
      line-height: 1.2;
    }
    .logo-container .tagline {
      font-size: 0.8rem;
      font-weight: 400;
      margin-top: 2px;
      color: #e6f9f9;
    }
    nav {
      display: flex;
      gap: 20px;
    }
    nav a {
      font-weight: 500;
      font-size: 0.95rem;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: 0.3s;
    }
    nav a:hover {
      color: #d9f7f8;
      transform: translateY(-2px);
    }
    nav a i {
      font-size: 1rem;
    }

    /* Hamburger */
    .hamburger {
      display: none;
      font-size: 1.5rem;
      cursor: pointer;
      color: #fff;
    }

    /* Mobile nav */
    @media (max-width: 768px) {
      nav {
        position: absolute;
        top: 60px;
        right: 0;
        background: #00979D;
        flex-direction: column;
        gap: 15px;
        width: 200px;
        padding: 20px;
        display: none;
      }
      nav.active {
        display: flex;
      }
      .hamburger {
        display: block;
      }
    }
    /* Icon colors */
    nav a:nth-child(1) i { color: #FFD700; }
    nav a:nth-child(2) i { color: #00FFB3; }
    nav a:nth-child(3) i { color: #1E90FF; }
    nav a:nth-child(4) i { color: #FF6347; }

    nav a:hover i { transform: scale(1.2); color: #ffffff; }
    nav a:hover { color: #d9f7f8; transform: translateY(-2px); }

    /* ====== MAIN ====== */
    main {
      padding: 120px 10% 40px; /* offset for fixed header */
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 2rem;
      color: #00979D;
    }
    section {
      margin-bottom: 50px;
    }
    section h2 {
      margin-bottom: 15px;
      font-size: 1.5rem;
      color: #007c82;
      text-align: center;
    }
    section p {
      max-width: 800px;
      margin: 0 auto;
      text-align: center;
      color: #555;
    }

    /* ====== TEAM ====== */
    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }
    .team-member {
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      text-align: center;
    }
    .team-avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background: #00979D;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      font-weight: bold;
      margin: 0 auto 10px;
    }
    .team-member h3 {
      font-size: 1.1rem;
      color: #00979D;
      margin-bottom: 5px;
    }
    .team-member span {
      font-size: 0.9rem;
      color: #666;
    }

    /* ====== CONTACT ====== */
    .contact {
      text-align: center;
    }
    .contact-info {
      margin: 20px auto;
      max-width: 400px;
      display: flex;
      flex-direction: column;
      gap: 12px;
      text-align: left;
    }
    .contact-info .info-item {
      display: flex;
      align-items: center;
      font-size: 1rem;
      color: #444;
    }
    .contact-info i {
      color: #00979D;
      margin-right: 10px;
      min-width: 20px; /* ensures all icons align */
      text-align: center;
    }

    /* Social logos aligned with contact */
    .social-logos {
      margin-top: 20px;
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      justify-content: flex-start;
      max-width: 400px;
      margin-left: auto;
      margin-right: auto;
    }
    .social-logos a img {
      width: 40px;
      height: 40px;
      object-fit: contain;
      transition: transform 0.3s ease;
    }
    .social-logos a img:hover {
      transform: scale(1.1);
    }

    /* ====== FOOTER ====== */
    footer {
      background: #222;
      color: #aaa;
      padding: 25px;
      font-size: 0.9rem;
      margin-top: 50px;
    }
    .footer-content {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }
    .footer-content a {
      color: #4CAF50;
      text-decoration: none;
      font-weight: 500;
    }
    .footer-content a:hover {
      text-decoration: underline;
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
    </nav>
  </header>

  <!-- ====== MAIN ====== -->
  <main>
    <h1>About Us</h1>

    <!-- Our Story -->
    <section>
      <h2>Our Story</h2>
      <p>Novatech STEM was founded to empower learners with hands-on STEM projects, bridging theory and practice through robotics, electronics, and coding. Our passion is to nurture creativity and innovation among young engineers and enthusiasts.</p>
    </section>

    <!-- Mission & Vision -->
    <section>
      <h2>Mission & Vision</h2>
      <p><strong>Mission:</strong> To inspire and equip learners with practical STEM skills for problem solving and innovation.<br><br>
         <strong>Vision:</strong> To be a leading hub of STEM learning and engineering solutions across Africa and beyond.</p>
    </section>

    <!-- Team -->
    <section>
      <h2>Meet Our Team</h2>
      <div class="team-grid">
        <div class="team-member">
          <div class="team-avatar">MN</div>
          <h3>Martin Njuguna</h3>
          <span>Engineer</span>
        </div>
        <div class="team-member">
          <div class="team-avatar">NW</div>
          <h3>Nashon Wigina</h3>
          <span>Engineer</span>
        </div>
        <!-- <div class="team-member">
          <div class="team-avatar">FB</div>
          <h3>Fundi Brian</h3>
          <span>IoT Expert</span>
        </div>
        <div class="team-member">
          <div class="team-avatar">NK</div>
          <h3>Nathan Kingori</h3>
          <span>IoT Expert</span>
        </div>
        <div class="team-member">
          <div class="team-avatar">MF</div>
          <h3>Mutuku Franc</h3>
          <span>IoT Expert</span>
        </div> -->
      </div>
    </section>

    <!-- Contact Us -->
    <section class="contact">
      <h2>Contact Us</h2>
      <p>You can reach us through the following details or connect with us on social platforms.</p>
      
      <div class="contact-info">
        <div class="info-item"><i class="fas fa-phone"></i> <a href="tel:+254712345678">+254795952128</a></div>
        <div class="info-item"><i class="fas fa-envelope"></i> <a href="mailto:info@novatech.co.ke">support@novatech.co.ke</a></div>
        <div class="info-item"><i class="fas fa-map-marker-alt"></i> Nairobi, Kenya</div>
      </div>

      <div class="social-logos">
        <a href="#"><img src="img/whatsapp1.jpg" alt="WhatsApp"></a>
        <a href="#"><img src="img/facebook1.jpg" alt="Facebook"></a>
        <a href="#"><img src="img/twitter.png" alt="Twitter"></a>
        <a href="#"><img src="img/instagram1.jpg" alt="Instagram"></a>
      </div>
    </section>
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
    // Hamburger toggle
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector("nav");

    hamburger.addEventListener("click", () => {
      nav.classList.toggle("active");
    });

    // Close nav when clicking outside
    document.addEventListener("click", (e) => {
      if (!nav.contains(e.target) && !hamburger.contains(e.target)) {
        nav.classList.remove("active");
      }
    });
  </script>
</body>
</html>
