<?php
include "connection.php";

$reqid = $_GET['reqid'];
$currentStatusQuery = "SELECT status FROM bloodrequest WHERE reqid = '$reqid'";
$result = mysqli_query($conn, $currentStatusQuery);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $currentStatus = $row['status'];

    // Check if the current status is 'Pending'
    if ($currentStatus == 'Pending') {
        $status = "Rejected";
        $sql = "UPDATE bloodrequest SET status = '$status' WHERE reqid = '$reqid'";

        if (mysqli_query($conn, $sql)) {
            $msg = "You have rejected the request.";
            header("location:../bloodrequest.php?msg=" . $msg);
        } else {
            $error = "Error changing status: " . mysqli_error($conn);
            header("location:../bloodrequest.php?error=" . $error);
        }
    } else {
        // If the current status is not 'Pending', handle accordingly
        $msg = "Cannot change status. The request is already " . $currentStatus;
       header("location:../bloodrequest.php?msg=" . urlencode("<span style='color:red;'>" . $msg . "</span>"));
    }
} else {
    $error = "Error retrieving current status: " . mysqli_error($conn);
    header("location:../bloodrequest.php?error=" . $error);
}

mysqli_close($conn);
?>
