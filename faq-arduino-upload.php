<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Novatech | FAQ: Arduino Not Uploading?</title>
  <link rel="icon" type="image/x-icon" href="img/image1.png">
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
    .hamburger { display: none; font-size: 1.5rem; cursor: pointer; color: #fff; }

    @media (max-width: 768px) {
      nav { position: absolute; top: 60px; right: 0; background: #00979D;
        flex-direction: column; gap: 15px; width: 200px; padding: 20px; display: none; }
      nav.active { display: flex; }
      .hamburger { display: block; }
    }

    nav a:nth-child(1) i { color: #FFD700; }
    nav a:nth-child(2) i { color: #00FFB3; }
    nav a:nth-child(3) i { color: #1E90FF; }
    nav a:nth-child(4) i { color: #FF6347; }

    /* MAIN CONTENT */
    main { padding: 120px 10% 50px; }
    h1 { text-align: center; color: #00979D; margin-bottom: 20px; }
    .faq-container {
      background: #fff;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .faq-section { margin-bottom: 20px; }
    h2 { color: #03009dff; margin-bottom: 10px; }
    ul { margin-left: 20px; margin-top: 8px; }
    ul li { margin-bottom: 8px; }
    .note {
      margin-top: 20px;
      background: #e6f7f8;
      border-left: 5px solid #00979D;
      padding: 15px;
      border-radius: 6px;
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
    <h1>FAQ: Arduino Not Uploading?</h1>
    <div class="faq-container">
      <div class="faq-section">
        <h2>Possible Causes</h2>
        <ul>
          <li>Wrong board selected in Arduino IDE.</li>
          <li>Incorrect COM/Serial port chosen.</li>
          <li>Missing or corrupted USB drivers.</li>
          <li>Bad USB cable (power-only cable without data lines).</li>
          <li>Bootloader issue on Arduino board.</li>
        </ul>
      </div>

      <div class="faq-section">
        <h2>Solutions</h2>
        <ul>
          <li>Go to <strong>Tools → Board</strong> and select the correct Arduino model.</li>
          <li>Check <strong>Tools → Port</strong> and ensure the right COM port is selected.</li>
          <li>Reinstall USB drivers (CH340 or FTDI depending on your board).</li>
          <li>Try a different USB cable (make sure it supports data transfer).</li>
          <li>Press the <strong>Reset button</strong> on the board before upload.</li>
          <li>If still not working, re-burn the bootloader using another Arduino as ISP.</li>
        </ul>
      </div>

      <div class="note">
        💡 <strong>Tip:</strong> Always start by checking cables and drivers. These cause 80% of upload errors.
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
