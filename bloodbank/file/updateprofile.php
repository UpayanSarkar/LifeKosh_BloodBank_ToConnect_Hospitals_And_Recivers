<?php
session_start();
require 'connection.php';

if (isset($_SESSION['rid'])) {
    if (isset($_POST['update'])) {
        $id = $_SESSION['rid'];
        $rname = $_POST['rname'];
        $remail = $_POST['remail'];
        $rphone = $_POST['rphone'];
        $bg = $_POST['bg'];
        $rcity = $_POST['rcity'];
        $rpassword = $_POST['rpassword'];

        // Check if the email already exists for another receiver
        $checkEmailQuery = "SELECT id FROM receivers WHERE remail = '$remail' AND id != '$id'";
        $result = $conn->query($checkEmailQuery);

        if ($result->num_rows > 0) {
            // Email already exists for another receiver, set an error message
            $error = "Error: Email already exists!";
            header("location:../rprofile.php?error=" . $error);
        } else {
            $update = "UPDATE receivers SET rname='$rname', remail='$remail', rpassword='$rpassword', rphone='$rphone', rbg='$bg',rcity='$rcity' WHERE id='$id'";
            if ($conn->query($update) === TRUE) {
                $msg = "Your profile is updated successfully.";
                header("location:../rprofile.php?msg=" . $msg);
            } else {
                $error = "Error: " . $update . "<br>" . $conn->error;
                header("location:../rprofile.php?error=" . $error);
            }
        }
        $conn->close();
    }
} elseif (isset($_SESSION['hid'])) {
    if (isset($_POST['update'])) {
        $id = $_SESSION['hid'];
        $hname = $_POST['hname'];
        $hemail = $_POST['hemail'];
        $hphone = $_POST['hphone'];
        $hcity = $_POST['hcity'];
        $hpassword = $_POST['hpassword'];

        // Check if the email already exists for another hospital
        $checkEmailQuery = "SELECT id FROM hospitals WHERE hemail = '$hemail' AND id != '$id'";
        $result = $conn->query($checkEmailQuery);

        if ($result->num_rows > 0) {
            // Email already exists for another hospital, set an error message
            $error = "Error: Email already exists!";
            header("location:../hprofile.php?error=" . $error);
        } else {
            $update = "UPDATE hospitals SET hname='$hname', hemail='$hemail', hpassword='$hpassword', hphone='$hphone', hcity='$hcity' WHERE id='$id'";
            if ($conn->query($update) === TRUE) {
                $msg = "Your profile is updated successfully.";
                header("location:../hprofile.php?msg=" . $msg);
            } else {
                $error = "Error: " . $update . "<br>" . $conn->error;
                header("location:../hprofile.php?error=" . $error);
            }
        }
        $conn->close();
    }
} else {
    header("location:../login.php");
}
?>
