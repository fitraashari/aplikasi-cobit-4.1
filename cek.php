<?php
session_start();
//jika session kd_user belum dibuat, atau session kd_user kosong
if (!isset($_SESSION['kd_user']) || empty($_SESSION['kd_user'])) {
//redirect ke halaman login
    header('location:login.php');
}
