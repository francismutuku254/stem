<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Novatech | Projects</title>
  <link rel="icon" type="image/x-icon" href="img/image1.png" />
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /* ====== RESET ====== */
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: "Segoe UI", Arial, sans-serif; }
    body { background: #f9fafc; color: #333; line-height: 1.6; }
    a { text-decoration: none; color: inherit; }

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

    /* Hamburger */
    .hamburger { display: none; font-size: 1.5rem; cursor: pointer; color: #fff; }

    /* Mobile nav */
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

    /* ====== MAIN ====== */
    main { padding: 120px 10% 40px; }
    h1 { text-align: center; margin-bottom: 20px; font-size: 2rem; color: #00979D; }

    /* Search + Filter */
    .search-filter {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 15px;
      margin-bottom: 40px;
      flex-wrap: wrap;
    }
    .search-filter input, .search-filter select {
      padding: 10px 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 0.95rem;
      outline: none;
    }
    .search-filter input:focus, .search-filter select:focus {
      border-color: #00979D;
    }

    /* ====== PROJECTS ====== */
    .project-card {
      display: flex;
      justify-content: space-between;
      margin-bottom: 60px;
      gap: 30px;
      flex-wrap: wrap;
    }
    .project-card:nth-child(even) { flex-direction: row-reverse; }
    .project-image {
      flex: 1;
      min-width: 280px;
      max-width: 450px;
    }
    .project-image img {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .project-info {
      flex: 1;
      min-width: 280px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
    }
    .project-info h2 {
      color: #007c82;
      font-size: 1.5rem;
      margin-bottom: 15px;
    }
    .project-info p { color: #555; margin-bottom: 20px; text-align: justify; }
    .project-info a {
      align-self: flex-start;
      padding: 10px 20px;
      background: #00979D;
      color: white;
      border-radius: 8px;
      font-size: 0.95rem;
      transition: 0.3s;
    }
    .project-info a:hover { background: #007c82; }

    /* ====== FOOTER ====== */
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
    <h1>Projects Dashboard</h1>

    <!-- Search & Filter -->
    <div class="search-filter">
      <input type="text" id="searchInput" placeholder="Search projects...">

      <!-- Kit Type -->
      <select id="kitFilter">
        <option value="all">All Kits</option>
        <option value="lego">LEGO</option>
        <option value="arduino">Arduino</option>
      </select>

      <!-- Age -->
      <select id="ageFilter">
        <option value="all">All Ages</option>
        <option value="7-9">7–9</option>
        <option value="10-12">10–12</option>
        <option value="13+">13+</option>
      </select>

      <!-- Difficulty -->
      <select id="difficultyFilter">
        <option value="all">All Difficulty</option>
        <option value="easy">Easy</option>
        <option value="medium">Medium</option>
        <option value="hard">Hard</option>
      </select>
    </div>

    <!-- ====== PROJECTS ====== -->
    <div class="project-card" data-kit="lego" data-age="10-12" data-difficulty="medium">
      <div class="project-image"><img src="public/steps/oildrill.jpg" alt="Oil Production Rig"></div>
      <div class="project-info">
        <h2>Oil Production Rig</h2>
        <p>Construct a sophisticated drilling robot that simulates the complex process of subterranean oil extraction. Using LEGO components, you will design mechanisms to mimic drilling, pumping, and transporting oil while exploring real-world engineering principles.</p> 
         <p>This project provides hands-on experience in mechanical design and automation, helping learners understand how robotics is applied in energy industries while enhancing problem-solving and teamwork skills.</p>
        <a href="public/oilproduction_intro.html">LEARN MORE</a>
      </div>
    </div>

    <div class="project-card" data-kit="arduino" data-age="13+" data-difficulty="hard">
      <div class="project-image"><img src="public/images/complete.png" alt="Acebott SmartCar Robot"></div>
      <div class="project-info">
        <h2>Acebott SmartCar Robot</h2>
        <p>Build and program the Acebott SmartCar Robot to explore autonomous driving and sensor-based navigation. Learn how ultrasonic sensors, line-following modules, and motor control come together to create a self-driving robotic car.</p> 
        <p>This project introduces learners to real-world applications of robotics such as obstacle avoidance and automated transport, strengthening their coding, electronics, and logical reasoning skills in an engaging way.</p>
        <a href="public/acebott.html">EXPLORE MORE</a>
      </div>
    </div>

    <div class="project-card" data-kit="lego" data-age="10-12" data-difficulty="medium">
      <div class="project-image"><img src="public/steps/fork.jpg" alt="Automated Forklift"></div>
      <div class="project-info">
        <h2>Automated Forklift</h2>
        <p>Design a LEGO forklift that can lift and transport objects using motorized arms. This project introduces learners to load balance, lifting mechanisms, and simple automation.</p> 
        <p>It enhances understanding of real-world logistics and warehouse robotics while improving problem-solving and teamwork.</p>
        <a href="public/forklift_intro.html">LEARN MORE</a>
      </div>
    </div>

    <div class="project-card" data-kit="lego" data-age="7-9" data-difficulty="easy">
      <div class="project-image"><img src="public/steps/cul20.jpg" alt="Culinary Bot"></div>
      <div class="project-info">
        <h2>Culinary Bot</h2>
        <p>Create a fun LEGO robot that mimics simple kitchen tasks such as mixing or moving utensils. The Culinary Bot introduces learners to creative robotics and motion control.</p> 
        <p>It encourages imagination and hands-on learning while showing how robots can assist in everyday life activities.</p>
        <a href="public/culinary_intro.html">EXPLORE MORE</a>
      </div>
    </div>

    <div class="project-card" data-kit="lego" data-age="10-12" data-difficulty="easy">
      <div class="project-image"><img src="public/steps/bin14.jpg" alt="Smart Bin"></div>
      <div class="project-info">
        <h2>Smart Bin</h2>
        <p>Build a LEGO-powered smart trash bin that opens automatically using a motor and sensors. This project introduces basic automation and environmental responsibility.</p> 
        <p>It helps learners understand how robotics can be applied to smart cities and waste management solutions.</p>
        <a href="public/trashcan_intro.html">LEARN MORE</a>
      </div>
    </div>

    <div class="project-card" data-kit="lego" data-age="7-9" data-difficulty="easy">
      <div class="project-image"><img src="public/steps/aut20.jpg" alt="Automatic Door"></div>
      <div class="project-info">
        <h2>Automatic Door</h2>
        <p>Construct an automatic sliding door system using LEGO beams, gears, and motors. The project demonstrates how automation is applied in homes, offices, and malls.</p> 
        <p>Learners gain hands-on experience with mechanical design, sensor activation, and everyday robotics applications.</p>
        <a href="public/automaticdoor_intro.html">EXPLORE MORE</a>
      </div>
    </div>

    <div class="project-card" data-kit="lego" data-age="7-9" data-difficulty="medium">
      <div class="project-image"><img src="public/steps/dolph17.jpg" alt="Biometric Dolphin"></div>
      <div class="project-info">
        <h2>Biometric Dolphin</h2>
        <p>Bring marine life to life with LEGO by building a dolphin robot that moves and responds. This project mixes creativity with robotics to explore animal-inspired design.</p> 
        <p>It develops learners’ interest in biomimicry, programming, and how technology can mimic nature’s motion.</p>
        <a href="public/dolphin.html">LEARN MORE</a>
      </div>
    </div>

    <div class="project-card" data-kit="lego" data-age="13+" data-difficulty="hard">
      <div class="project-image"><img src="public/steps/brake16.jpg" alt="Kinetic Braking System"></div>
      <div class="project-info">
        <h2>Kinetic Braking System</h2>
        <p>Experiment with a LEGO-based braking system that uses gears and axles to slow motion. This project introduces the concept of kinetic energy conversion and safety engineering.</p> 
        <p>It allows learners to explore physics principles and how they apply to real-world transportation systems.</p>
        <a href="public/braking_intro.html">EXPLORE MORE</a>
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
    hamburger.addEventListener("click", () => nav.classList.toggle("active"));
    document.addEventListener("click", (e) => {
      if (!nav.contains(e.target) && !hamburger.contains(e.target)) {
        nav.classList.remove("active");
      }
    });

    // Search & Filter
    const searchInput = document.getElementById("searchInput");
    const kitFilter = document.getElementById("kitFilter");
    const ageFilter = document.getElementById("ageFilter");
    const difficultyFilter = document.getElementById("difficultyFilter");
    const projects = document.querySelectorAll(".project-card");

    function filterProjects() {
      const searchText = searchInput.value.toLowerCase();
      const kit = kitFilter.value;
      const age = ageFilter.value;
      const difficulty = difficultyFilter.value;

      projects.forEach(project => {
        const title = project.querySelector("h2").textContent.toLowerCase();
        const desc = project.querySelector("p").textContent.toLowerCase();
        const projectKit = project.getAttribute("data-kit");
        const projectAge = project.getAttribute("data-age");
        const projectDifficulty = project.getAttribute("data-difficulty");

        const matchesSearch = title.includes(searchText) || desc.includes(searchText);
        const matchesKit = kit === "all" || projectKit === kit;
        const matchesAge = age === "all" || projectAge === age;
        const matchesDifficulty = difficulty === "all" || projectDifficulty === difficulty;

        if (matchesSearch && matchesKit && matchesAge && matchesDifficulty) {
          project.style.display = "flex";
        } else {
          project.style.display = "none";
        }
      });
    }

    searchInput.addEventListener("input", filterProjects);
    kitFilter.addEventListener("change", filterProjects);
    ageFilter.addEventListener("change", filterProjects);
    difficultyFilter.addEventListener("change", filterProjects);
  </script>
</body>
</html>
