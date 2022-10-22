<?php

require_once('models/db.php');

// Lấy danh sách
function layDSDanhMuc()
{
    $sql = "SELECT * FROM loai";
    $loai = getData($sql, FETCH_ALL);
    return $loai;
}

function themDanhMuc()
{
    if (isset($_POST["btn_save"])) {
        $ten_loai = $_POST["name"];
        $sql = "INSERT INTO loai(ten_loai) VALUES('$ten_loai')";
        $add = pdo_execute($sql);
        $thong_bao = 'Thêm thành công';
    }
    if (isset($thong_bao))  echo $thong_bao;
}

function xoaDanhMuc($id)
{
    $sql = "DELETE FROM loai WHERE ma_loai = '$id'";
    $xoa_sp = pdo_execute($sql);
}

function layMotDanhMuc($id)
{
    $sql = "SELECT * FROM loai WHERE ma_loai = '$id'";
    $lay_mot = getData($sql, FETCH_ONE);
    return $lay_mot;
}

function suaDanhMuc()
{
    if (isset($_POST["btn_save"])) {
        $ma_loai = $_POST["ma_loai"];
        $ten_loai = $_POST["name"];
        $sql = "UPDATE loai SET ten_loai = '$ten_loai' WHERE ma_loai = '$ma_loai' ";
        $add = pdo_execute($sql);
        $thong_bao = 'Cập nhật thành công';
    }

    if (isset($thong_bao))  echo $thong_bao;
}


// Cập nhật
// Xoá
