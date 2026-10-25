<?php
// Kết nối CSDL bằng PDO, tạo biến $pdo cho các trang dùng

$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (PDOException $ex) {
    // Không in chi tiết lỗi ra màn hình để tránh lộ thông tin hệ thống
    http_response_code(500);
    exit('Không kết nối được cơ sở dữ liệu. Hãy kiểm tra MySQL và config/config.php.');
}
