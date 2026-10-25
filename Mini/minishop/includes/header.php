<?php
$page_title = $page_title ?? 'Trang chủ';
$current_page = basename($_SERVER['SCRIPT_NAME']);
if ($current_page === 'product.php') {
    $current_page = 'index.php'; 
}

$nav_items = [
    'index.php'    => 'Trang chủ',
    'about.php'    => 'Giới thiệu',
    'register.php' => 'Đăng ký',
    'login.php'    => 'Đăng nhập',
    'cart.php'     => 'Giỏ hàng',
    'contact.php'  => 'Liên hệ',
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniShop - <?= e($page_title) ?></title>
    <link rel="stylesheet" href="<?= e(url('css/style.css')) ?>">
</head>
<body>
    <header>
        <h1>MiniShop</h1>
        <p><em>Cửa hàng công nghệ dành cho sinh viên</em></p>
        <nav class="main-nav">
            <?php foreach ($nav_items as $file => $label): ?>
                <a href="<?= e(url($file)) ?>"<?= $file === $current_page ? ' class="active"' : '' ?>>
                    <?= e($label) ?>
                    <?php if ($file === 'cart.php'): ?>(<span id="cart-count">0</span>)<?php endif; ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </header>

    <hr>

    <main>
