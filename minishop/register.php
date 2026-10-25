<?php
require_once __DIR__ . '/includes/init.php';

$page_title = 'Đăng ký';
require __DIR__ . '/includes/header.php';
?>
    <h2>Đăng ký thành viên</h2>
    <form class="form" method="post">
        <p>
            <label for="name">Họ và tên:</label><br>
            <input type="text" id="name" name="name">
        </p>

        <p>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email">
        </p>

        <p>
            <label for="password">Mật khẩu:</label><br>
            <input type="password" id="password" name="password">
        </p>

        <p>
            <label for="phone">Số điện thoại:</label><br>
            <input type="tel" id="phone" name="phone">
        </p>

        <p>
            <label for="category">Sản phẩm quan tâm:</label><br>
            <select id="category" name="category">
                <option value="laptop">Laptop</option>
                <option value="mouse">Chuột</option>
                <option value="keyboard">Bàn phím</option>
                <option value="headphone">Tai nghe</option>
            </select>
        </p>

        <p>
            Giới tính:<br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Nam</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Nữ</label>
        </p>

        <p>
            <label for="note">Ghi chú:</label><br>
            <textarea id="note" name="note" rows="5" cols="40"></textarea>
        </p>

        <button type="submit">Đăng ký</button>
    </form>
<?php require __DIR__ . '/includes/footer.php'; ?>
