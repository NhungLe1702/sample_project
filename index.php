<?php

require('controllers/SanPham.php');
require('controllers/KhachHang.php');
require('controllers/DanhMuc.php');
require('controllers/BinhLuan.php');
require('controllers/account.php');
include('views/template/header_admin.php');

// Chỉ dùng để quản lý đường dẫn và điều hướng đến màn hình phù hợp
$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        hienThiTrangChu();
        break;

    case 'trang_chu':
        hienThiTrangChu();
        break;

    case 'san_pham':
        sanPham();
        break;

    case 'gioi_thieu':
        GioiThieu();
        break;

    case 'lien_he':
        lienHe();
        break;

    case 'hoi_dap':
        hoiDap();
        break;

    // Sản phẩm

    case 'ds_san_pham':
        hienThiSanPham();
        break;
    case 'them_san_pham':
        formTaoSanPham();
        break;
    case 'xoa_san_pham':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            xoaSanPham($id);
        }
        hienThiSanPham();
        break;
    case 'update_san_pham':
        SuaSanPham();
        break;

    case 'form_sua_san_pham':
        formSuaSanPham();
        break;
    
    case 'ds_san_pham_theo_dm':
        laySPtheoMaLoai();
        break;    
    
    case 'loc_san_pham_theo_dm':
        locSPtheoMaLoai();
        break;  

    case 'chi_tiet_sp' :
        chiTietSanPham();
        break;

    case 'tim_kiem_san_pham':
        timKiemSanPham();
        break; 

    // Khách hàng

    case 'ds_khach_hang':
        hienThiKhachHang();
        break;
    case 'them_khach_hang':
        formTaoKhachHang();
        break;
    case 'sua_khach_hang':

        break;
    case 'xoa_khach_hang':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            xoaKhachHang($id);
        }
        hienThiKhachHang();
        break;

    // Danh mục

    case 'ds_danh_muc':
        hienThiDanhMuc();
        break;
    case 'them_danh_muc':
        formTaoDanhMuc();
        break;
    case 'xoa_danh_muc':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            xoaDanhMuc($id);
        }
        hienThiDanhMuc();
        break;
    case 'form_sua_danh_muc':
        formSuaDanhMuc();
        break;
    case 'update_danh_muc':
        suaDanhMuc();
        break;
    // Bình luận


    // Thống kê
    case 'thong_ke':
        thongKe();
        break;

    case 'bieu_do_thong_ke':
        bieu_do();
        break;

    case 'dang_ky':
        registerForm();
        break;
        
    case 'dang_nhap':
        loginForm();
        break;
    
    case 'logout':
        logoutUser();
        break;
    
    case 'update_user':
        updateFormUser();
        break;

    

    default:
        echo 'Đường dẫn không tồn tại';
        break;

}

include('views/template/footer.php');
