<?php
session_start();

if (isset($_SESSION['user_id'])) {
    echo "Welcome, " . $_SESSION['username'];
} else {
    echo "Please log in.";
}
?>