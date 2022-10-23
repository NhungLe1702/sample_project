<?php
require_once('models/KhachHang.php');

function registerForm()
{
    register();
    include('views/user/register.php');
}

function loginForm()
{
    login();
    include('views/user/login.php');
}

function logoutUser()
{
    logout();
    header('location: index.php');
}

function updateFormUser()
{
    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
        $user = getUser($user_id);
    }
    include('views/user/update.php');
}

function updateUserInfo()
{
    updateUser();
    header('location: index.php?url=/');
}