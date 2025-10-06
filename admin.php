<?php
// Show all errors for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['role'])) {
    // Not logged in
    header("Location: login.html");
    exit;
}
if (strtolower($_SESSION['role']) !== 'admin') {
    // Logged in but not admin
    header("Location: index.php");
    exit;
} 

$host = 'localhost';
$user = 'root';
$pass = "";
$dbname = 'novatech_portal';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Fetch distinct schools for dropdown
$schools = $conn->query("SELECT DISTINCT school FROM users WHERE school IS NOT NULL AND school <> '' ORDER BY school ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Novatech | Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon" type="image/x-icon" href="img/image1.png">
  <style>
    body {
      background: #f8f9fa;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .navbar {
      background: #03009dff;
      color:white;
      align-items: center;
      text-align: center;
    }
    .navbar-brand {
      font-weight: bold;
      color: #fff !important;
    }
    .table-container {
      margin-top: 20px;
      flex: 1;
    }
    .status-badge {
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 0.8rem;
    }
    .status-pending {
      background: #ffc107;
      color: #000;
    }
    .status-approved {
      background: #28a745;
      color: #fff;
    }
    footer {
      padding: 15px;
      text-align: center;
      background: #222;
      color: white;
      font-size: 0.9rem;
      margin-top: auto;
    }
    /* Responsive improvements */
    @media (max-width: 768px) {
      h2 {
        font-size: 1.3rem;
      }
      .filters-row {
        flex-direction: column !important;
        align-items: stretch;
        gap: 10px;
      }
      .filters-row .col-md-4 {
        width: 100%;
      }
    }
    @media (max-width: 576px) {
      table {
        font-size: 0.8rem;
      }
      .navbar h3 {
        font-size: 1.2rem;
      }
      footer {
        font-size: 0.8rem;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark px-4">
    <h3>Novatech Admin Panel</h3>
  </nav>

  <!-- Container -->
  <div class="container-fluid table-container">
    <h2 class="mb-4 text-center">User Management</h2>

    <!-- Filters and Bulk Actions -->
    <div class="row mb-3 filters-row d-flex align-items-center">
      <div class="col-md-4">
        <select id="schoolFilter" class="form-select">
          <option value="">All Schools</option>
          <?php while ($row = $schools->fetch_assoc()) {
              echo "<option value='".htmlspecialchars($row['school'])."'>".htmlspecialchars($row['school'])."</option>";
          } ?>
        </select>
      </div>
      <div class="col-md-4">
        <button class="btn btn-danger w-100" onclick="bulkDelete()">Delete Selected</button>
      </div>
    </div>

    <!-- Full-width responsive table -->
    <div class="table-responsive" id="userTable">
      <!-- Table will be loaded here via AJAX -->
    </div>
  </div>

  <footer>
    © <script>document.write(new Date().getFullYear());</script> Novatech STEM Portal. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  let selectedIds = new Set(); // store checked user IDs

  function loadUsers() {
    const school = document.getElementById("schoolFilter").value;

    selectedIds = new Set(
      Array.from(document.querySelectorAll(".user-checkbox:checked")).map(cb => cb.value)
    );

    fetch("fetch_users.php?school=" + encodeURIComponent(school))
      .then(response => response.text())
      .then(data => {
        document.getElementById("userTable").innerHTML = data;

        selectedIds.forEach(id => {
          const cb = document.querySelector(`.user-checkbox[value='${id}']`);
          if (cb) cb.checked = true;
        });

        const selectAll = document.getElementById("selectAll");
        if (selectAll) {
          selectAll.addEventListener("change", function() {
            document.querySelectorAll(".user-checkbox").forEach(cb => {
              cb.checked = this.checked;
              if (this.checked) {
                selectedIds.add(cb.value);
              } else {
                selectedIds.delete(cb.value);
              }
            });
          });
        }

        document.querySelectorAll(".user-checkbox").forEach(cb => {
          cb.addEventListener("change", function() {
            if (this.checked) {
              selectedIds.add(this.value);
            } else {
              selectedIds.delete(this.value);
            }
          });
        });
      });
  }

  function approveUser(id) {
    fetch("user_action.php?action=approve&id=" + id)
      .then(() => loadUsers());
  }

  function deleteUser(id) {
    if (confirm("Delete this user?")) {
      fetch("user_action.php?action=delete&id=" + id)
        .then(() => loadUsers());
    }
  }

  function promoteUser(id) {
    if (confirm("Are you sure you want to promote this user to Admin?")) {
      fetch("user_action.php?action=promote&id=" + id)
        .then(() => loadUsers());
    }
  }

  function bulkDelete() {
    const selected = Array.from(selectedIds);
    if (selected.length === 0) {
      alert("Please select at least one user to delete.");
      return;
    }
    if (!confirm("Are you sure you want to delete the selected users?")) return;

    fetch("user_action.php?action=bulk_delete", {
      method: "POST",
      headers: {"Content-Type": "application/json"},
      body: JSON.stringify({ids: selected})
    }).then(() => {
      selectedIds.clear();
      loadUsers();
    });
  }

  setInterval(loadUsers, 5000);
  document.getElementById("schoolFilter").addEventListener("change", loadUsers);
  loadUsers();
  </script>
</body>
</html>
