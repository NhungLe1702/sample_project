<?php

require_once('models/db.php');

// $table = 'loai';

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


// Cập nhật
// Xoá
