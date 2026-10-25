<?php
require_once __DIR__ . '/includes/init.php';

$page_title = 'Đăng nhập';
require __DIR__ . '/includes/header.php';
?>
    <h2>Đăng nhập tài khoản</h2>
    <form class="form" method="post">
        <p>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </p>

        <p>
            <label for="password">Mật khẩu:</label><br>
            <input type="password" id="password" name="password" required>
        </p>

        <p>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Ghi nhớ đăng nhập</label>
        </p>

        <button type="submit">Đăng nhập</button>
    </form>

    <p>Chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
<?php require __DIR__ . '/includes/footer.php'; ?>
