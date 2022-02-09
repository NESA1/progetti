<?php
include "navbar.php";
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO utenti1 (id, username, avatar, discriminator, public_flags, flags, banner, banner_color, accent_color, locale, mfa_enabled, ip)
VALUES ('$user->id', '$user->username', '$user->avatar', '$user->discriminator', '$user->public_flags', '$user->flags', '$user->banner', '$user->banner_color', '$user->accent_color', '$user->locale', '$user->mfa_enabled', '$ip')";
$result = mysqli_query($conn, $sql);
header('location: index.php');
?>