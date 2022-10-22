<?php
// Model này đại diện cho bảng san_pham trong DB và sẽ thực hiện các hàm
// tương tác với bảng đó

// Lấy hàm getData từ db
require_once('models/db.php');

function layDSSanPham() 
{
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC ";
    $hang_hoa = getData($sql, FETCH_ALL);
    return $hang_hoa;
}

function loadSPTrangChu() {
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC LIMIT 9 ";
    $hang_hoa = getData($sql, FETCH_ALL);
    return $hang_hoa;
}

// Thêm mới
function themMoiSanPham()
{
    $error = [];
    if (isset($_POST["btn_save"])) {
        $ten_hh = $_POST['name'];
        $don_gia = $_POST['don_gia'];
        $giam_gia = $_POST['giam_gia'];
        $img = $_FILES['img_upload']['name'];
        $ngay_nhap = $_POST['ngay_nhap'];
        $mo_ta = $_POST['mo_ta'];
        $dac_biet = $_POST['dac_biet'];
        $luot_xem = $_POST['luot_xem'];
        $ma_loai = $_POST['ma_loai'];

        if (isset($_FILES["img_upload"])) {
            $target_dir = "views/template/images/san_pham/";

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
            $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ngay_nhap, mo_ta, dac_biet, so_luot_xem, ma_loai) 
                    VALUES('$ten_hh', $don_gia, $giam_gia, '$img', '$ngay_nhap', '$mo_ta', $dac_biet, $luot_xem, $ma_loai)";
            $add_sp = pdo_execute($sql);
            $thong_bao = 'Thêm thành công';
        }
    }
    if (isset($thong_bao))  echo $thong_bao;
}

function xoaSanPham($id)
{
    $sql = "DELETE FROM hang_hoa WHERE ma_hh = '$id'";
    $xoa_sp = pdo_execute($sql);
}

function layMotSanPham($id)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh = '$id'";
    $lay_mot = getData($sql, FETCH_ONE);
    return $lay_mot;
}

function laySanPhamCungLoai($id, $id_loai)
{
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh <> '$id' AND ma_loai = '$id_loai' LIMIT 4";
    $lay_cung_loai = getData($sql, FETCH_ALL);
    return $lay_cung_loai;
}

function hamSuaSanPham()
{
    $error = [];
    if (isset($_POST["btn_save"])) {
        $id = $_POST['ma_hh'];
        $ten_hh = $_POST['name'];
        $don_gia = $_POST['don_gia'];
        $giam_gia = $_POST['giam_gia'];
        $img = $_FILES['img_upload']['name'];
        $ngay_nhap = $_POST['ngay_nhap'];
        $mo_ta = $_POST['mo_ta'];
        $dac_biet = $_POST['dac_biet'];
        $luot_xem = $_POST['luot_xem'];
        $ma_loai = $_POST['ma_loai'];

        if (isset($_FILES["img_upload"])) {
            $target_dir = "views/template/images/san_pham/";

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
            $sql = "UPDATE hang_hoa SET ten_hh = '$ten_hh', don_gia = $don_gia, giam_gia = $giam_gia, hinh = '$img', ngay_nhap = '$ngay_nhap', mo_ta = '$mo_ta', dac_biet = '$dac_biet', so_luot_xem = '$luot_xem', ma_loai = '$ma_loai' WHERE ma_hh = '$id' ";
            $edit_sp = pdo_execute($sql);
            $thong_bao = 'Cập nhật thành công';
        }
    }
    if (isset($thong_bao))  echo $thong_bao;
}

function laySPTheoLoai($id) {
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai = '$id'";
    $product = getData($sql, FETCH_ALL);
    return $product;
}

function locSPtheoLoai($kw_loai, $id_loai) {

    $sql = "SELECT * FROM hang_hoa WHERE 1";
    if($kw_loai != "") {
        $sql.= " AND ten_hh LIKE '%".$kw_loai."%'";
    }
    if($id_loai > 0) {
        $sql= "SELECT * FROM hang_hoa WHERE ma_loai = '$id_loai'";
    }

    // if($kw_loai != "") {
    //     $sql= "SELECT * FROM hang_hoa WHERE ten_hh LIKE '$kw_loai'";
    // }
    // if($id_loai > 0) {
    //     $sql= "SELECT * FROM hang_hoa WHERE ma_loai = '$id_loai'";
    // }

    $product = getData($sql, FETCH_ALL);
    return $product;
}

function timKiem($kw_sp) {
    $sql = "SELECT * FROM hang_hoa WHERE 1";
    if($kw_sp != "") {
        $sql.= " AND ten_hh LIKE '%".$kw_sp."%'";
    }
    $product = getData($sql, FETCH_ALL);
    return $product;
}

function top10SanPham() {
    $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 2 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    $top10 = getData($sql, FETCH_ALL);
    return $top10;
}

function thongKeSanPhamLoaiHang() {
    $sql = " SELECT lo.ma_loai as ma_loai , lo.ten_loai as ten_loai, COUNT(hh.ma_hh) as so_luong, MIN(hh.don_gia) gia_min, MAX(hh.don_gia) gia_max, AVG(hh.don_gia) gia_avg
    FROM hang_hoa hh
    JOIN loai lo ON lo.ma_loai=hh.ma_loai
    GROUP BY lo.ma_loai, lo.ten_loai ";
    $thong_ke_sp = getData($sql, FETCH_ALL);
    return $thong_ke_sp;
}


