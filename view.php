<?php
include 'db.php'; 

$sql = "SELECT * FROM assets";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Assets</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f7f7f7;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #2c3e50;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .center {
      text-align: center;
    }
  </style>
</head>
<body>

  <h2>Asset Detials</h2>

  <table>
    <tr>
      <th>Sl No</th>
      <th>Asset Name</th>
      <th>Serial No</th>
      <th>Specification</th>
      <th>Type</th>
      <th>Warranty</th>
      <th>Model</th>
      <th>Brand</th>
      <th>Asset Status</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['slno']}</td>
                    <td>{$row['asset name']}</td>
                    <td>{$row['serial no']}</td>
                    <td>{$row['specifications']}</td>
                    <td>{$row['type']}</td>
                    <td>{$row['warranty']}</td>
                    <td>{$row['model']}</td>
                    <td>{$row['brand']}</td>
                    <td>{$row['asset status']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td class='center' colspan='9'>No assets found.</td></tr>";
    }

    $conn->close();
    ?>
  </table>

</body>
</html>
