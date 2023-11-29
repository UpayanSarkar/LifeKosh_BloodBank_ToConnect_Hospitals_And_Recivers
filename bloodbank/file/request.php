<?php
session_start();
require 'connection.php';

if (!isset($_SESSION['rid'])) {
    header('location:../login.php');
} else {
    if (isset($_POST['request'])) {
        $hid = $_POST['hid'];
        $rid = $_SESSION['rid'];
        $bg = $_POST['bg'];

        // Check if there is a previous request for the same blood type and hospital
        $checkData = mysqli_query($conn, "SELECT reqid, status FROM bloodrequest WHERE hid='$hid' AND rid='$rid' AND bg='$bg' ORDER BY reqid DESC LIMIT 1");

        if (mysqli_num_rows($checkData) > 0) {
            $row = mysqli_fetch_assoc($checkData);
            $status = $row['status'];

            if ($status == 'Accepted' || $status == 'Rejected') {
                // Proceed with the new request
                $sql = "INSERT INTO bloodrequest (bg, hid, rid) VALUES ('$bg', '$hid', '$rid')";
                if ($conn->query($sql) === TRUE) {
                    $msg = 'You have requested for blood group '.$bg.'. Our team will contact you soon.';
                    header("location:../sentrequest.php?msg=".$msg);
                } else {
                    $error = "Error: " . $sql . "<br>" . $conn->error;
                    header("location:../abs.php?error=".$error);
                }
            } else {
                $error = 'You cannot request the same blood type from this hospital until your previous request has been accepted or canceled.';
                header("location:../abs.php?error=".$error);
            }
        } else {
            // Proceed with the new request
            $sql = "INSERT INTO bloodrequest (bg, hid, rid) VALUES ('$bg', '$hid', '$rid')";
            if ($conn->query($sql) === TRUE) {
                $msg = 'You have requested for blood group '.$bg.'. Our team will contact you soon.';
                header("location:../sentrequest.php?msg=".$msg);
            } else {
                $error = "Error: " . $sql . "<br>" . $conn->error;
                header("location:../abs.php?error=".$error);
            }
        }
        $conn->close();
    }
}
?>
