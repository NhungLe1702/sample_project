<?php

require('models/KhachHang.php');


function hienThiKhachHang() {
    $ds_kh = layDSKhachHang();
    include('views/khach_hang/danh_sach.php');
}

function formTaoKhachHang() {
    $them_kh = themMoiKhachHang();
    include('views/khach_hang/tao_moi.php');
}




