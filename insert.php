<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $asset_type         = $_POST['asset_type'];
    $type_specification = $_POST['type_specification'];
    $model              = $_POST['model'];
    $asset_name         = $_POST['asset_name'];
    $brand              = $_POST['brand'];
    $serial_no          = $_POST['serial_no'];
    $warranty           = $_POST['warranty'];
    $value              = $_POST['value']; 
    // $asset_status       = "Available";
        if (strtolower($brand) === 'dxc') {
        $asset_status = "Not Available";
    } else {
        $asset_status = "Available";
    }


    $sql = "INSERT INTO assets (`asset name`, `serial no`, specifications, type, warranty, model, brand, `asset status`)
            VALUES ('$asset_name', '$serial_no', '$type_specification', '$asset_type', '$warranty', '$model', '$brand', '$asset_status')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Asset added successfully'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
