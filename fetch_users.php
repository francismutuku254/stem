<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = "";
$dbname = 'novatech_portal';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$schoolFilter = isset($_GET['school']) ? trim($_GET['school']) : '';
$sql = "SELECT * FROM users";
if ($schoolFilter !== '') {
    $stmt = $conn->prepare("SELECT * FROM users WHERE school = ? ORDER BY created_at DESC");
    $stmt->bind_param("s", $schoolFilter);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = $conn->query("SELECT * FROM users ORDER BY created_at DESC");
}

echo '<table class="table table-hover table-bordered align-middle">';
echo '<thead class="table-dark">
        <tr>
          <th><input type="checkbox" id="selectAll"></th>
          <th>ID</th>
          <th>Username</th>
          <th>Phone</th>
          <th>Role</th>
          <th>School</th>
          <th>Status</th>
          <th>Registered On</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>';

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td><input type='checkbox' class='user-checkbox' value='{$row['id']}'></td>
            <td>{$row['id']}</td>
            <td>" . htmlspecialchars($row['username']) . "</td>
            <td>" . htmlspecialchars($row['phone']) . "</td>
            <td>" . htmlspecialchars($row['role']) . "</td>
            <td>" . (!empty($row['school']) ? htmlspecialchars($row['school']) : 'N/A') . "</td>
            <td>";
    if ($row['status'] == 'pending') {
        echo "<span class='status-badge status-pending'>Pending</span>";
    } else {
        echo "<span class='status-badge status-approved'>Approved</span>";
    }
    echo "</td>
          <td>{$row['created_at']}</td>
          <td>";

    // Approve button
    if ($row['status'] == 'pending') {
        echo "<button class='btn btn-sm btn-success' onclick='approveUser({$row['id']})'>
                <i class=\"bx bx-check\"></i> Approve
              </button> ";
    }

    // Promote to Admin button (if not already admin)
    if (strtolower($row['role']) !== 'admin') {
        echo "<button class='btn btn-sm btn-primary' onclick='promoteUser({$row['id']})'>
                <i class=\"bx bx-up-arrow-alt\"></i> Promote to Admin
              </button> ";
    }

    // Delete button
    echo "<button class='btn btn-sm btn-danger' onclick='deleteUser({$row['id']})'>
            <i class=\"bx bx-trash\"></i> Delete
          </button>
          </td>
        </tr>";
}

echo "</tbody></table>";

// Checkbox select all
echo "<script>
document.getElementById('selectAll').addEventListener('change', function() {
  const checkboxes = document.querySelectorAll('.user-checkbox');
  checkboxes.forEach(cb => cb.checked = this.checked);
});
</script>";
