<?php
require_once __DIR__ . '/includes/init.php';

$page_title = 'Giỏ hàng';
require __DIR__ . '/includes/header.php';
?>
    <h2>Giỏ hàng của bạn</h2>

    <table class="cart-table" border="1">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Chuột Logitech</td>
                <td>499.000đ</td>
                <td><input type="number" name="qty1" min="1" value="1" aria-label="Số lượng chuột Logitech"></td>
                <td>499.000đ</td>
            </tr>
            <tr>
                <td>Bàn phím cơ</td>
                <td>899.000đ</td>
                <td><input type="number" name="qty2" min="1" value="1" aria-label="Số lượng bàn phím cơ"></td>
                <td>899.000đ</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Tổng tiền</th>
                <th>1.398.000đ</th>
            </tr>
        </tfoot>
    </table>

    <p>
        <button type="button">Đặt hàng</button>
        <button type="button" id="clear-cart">Xóa giỏ hàng</button>
    </p>
<?php require __DIR__ . '/includes/footer.php'; ?>
