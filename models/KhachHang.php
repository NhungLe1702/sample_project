<?php
session_start();
require_once('models/db.php');



// Lấy danh sách
function layDSKhachHang()
{
    $sql = "SELECT * FROM khach_hang";
    $khach_hang = getData($sql, FETCH_ALL);
    return $khach_hang;
}

function themMoiKhachHang()
{
    $error = [];
    if (isset($_POST["btn_save"])) {
        $mat_khau = $_POST['mat_khau'];
        $ten_kh = $_POST['name'];

        $kich_hoat = $_POST['kich_hoat'];
        $img = $_FILES['img_upload']['name'];
        $email = $_POST['email'];
        $vai_tro = $_POST['vai_tro'];


        if (isset($_FILES["img_upload"])) {
            $target_dir = "views/template/images/khach_hang/";

            $file_name = $_FILES["img_upload"]["name"];
            $target_file = $target_dir . $file_name;

            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            $arr_type = ["jpg", "png", "jpeg", "gif"];
            $allowUpload = true;

            if (!in_array($file_type, $arr_type)) {
                $error["type_error"] = "Không được upload file khác định dạng jpg, jpeg, png, gif";
                $allowUpload = false;
            }

            if ($allowUpload == true) {
                move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file);
            }
        }

        if (!$error) {
            $sql = "INSERT INTO khach_hang(mat_khau, ho_ten, kich_hoat, hinh, email, vai_tro )
                    VALUES($mat_khau, '$ten_kh', $kich_hoat, '$img', '$email', $vai_tro)";
            $add_kh = pdo_execute($sql);
        }
    }
}

function xoaKhachHang($id)
{
    $sql = "DELETE FROM khach_hang WHERE ma_kh = '$id'";
    $xoa_sp = pdo_execute($sql);
}

function login()
{
    if (isset($_POST['login'])) {
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM khach_hang WHERE ma_kh = '$user_name'";
        
        //lấy dữ liệu
        $user = getData($sql, FETCH_ONE);
        // var_dump($user);
        if ($user) {
            //kiểm tra mật khẩu
            if ($user['mat_khau'] === $password) {
                //tạo session
                $_SESSION['user'] = $user;
                header("location: index.php?url=trang_chu");
                exit();
            } else {
                $error = "Tài khoản hoặc mật khẩu không đúng";
            }
        } else {
            $error = "Tài khoản hoặc mật khẩu không đúng";
        }
    }
}

function logout()
{
    session_unset();
}

function getUser($user_id)
{
    $sql = "SELECT * FROM khach_hang WHERE ma_kh = '$user_id'";
    $user = getData($sql, FETCH_ONE);
    return $user;
}

function updateUser()
{
    if (isset($_POST['update'])) {
        $ma_kh = $_POST["ma_kh"];
        $full_name = $_POST["full_name"];
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $sql = "UPDATE user SET ma_kh = '$user_name', mat_khau = '$password', ho_ten = '$full_name', email = '$email' WHERE ma_kh = '$ma_kh";
        pdo_execute($sql);
        // $alert = "Đăng ký thành công, vui lòng đăng nhập";

    }
}

function register()
{
    // $error = [];
    if (isset($_POST["register"])) {
        $full_name = $_POST["full_name"];
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        
        $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, email) VALUES('$user_name', '$password', '$full_name', '$email')";
        $add = pdo_execute($sql);
        // $alert = "Đăng ký thành công, vui lòng đăng nhập";
    }
}


