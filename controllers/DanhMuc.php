<?php

require('models/DanhMuc.php');


function hienThiDanhMuc()
{
    $ds_dm = layDSDanhMuc();
    include('views/danh_muc/danh_sach.php');
}

function formTaoDanhMuc()
{
    $them_dm = themDanhMuc();
    include('views/danh_muc/tao_moi.php');
}


function formSuaDanhMuc()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $lay_dm = layMotDanhMuc($id);
    }
    include('views/danh_muc/chinh_sua.php');
}

// function suaDanhMuc()
// {
//     hamSuaSanPham();
//     include('views/danh_muc/danh_sach.php');
// }
