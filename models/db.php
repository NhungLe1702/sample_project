<?php

// Định nghĩa ra các tình huống lấy dữ liệu
define('FETCH_ALL', 2);
define('FETCH_ONE', 1);
define('NOT_FETCH', 0);

function getConnect() {
    $connect = new PDO(
        'mysql:host=localhost;dbname=xshop_web2041;',
        'nhunglt',
        '123456'
    );
    return $connect;
}

// Nhận vào tham số là câu truy vấn, tham số thứ 2 là cách lấy dũ liệu
function getData($sql, $fetchType) {
    $conn = getConnect();
    $statement = $conn->prepare($sql);
    $statement->execute();

    // Cần biết bên kia muốn lấy dl theo kiểu gì : $fetchType
    switch ($fetchType) {
        case FETCH_ALL:
            return $statement->fetchAll();
        case FETCH_ONE:
            return $statement->fetch();
        default:
            return true;
    }
}

function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
} 
