<?php
require_once __DIR__ . '/includes/init.php';

$page_title = 'Liên hệ';
require __DIR__ . '/includes/header.php';
?>
    <h2>Liên hệ với MiniShop</h2>
    <p>Hãy để lại lời nhắn, chúng tôi sẽ phản hồi sớm nhất có thể.</p>

    <form class="form" id="contact-form" method="post">
        <p>
            <label for="fullname">Họ và tên:</label><br>
            <input type="text" id="fullname" name="fullname" required>
        </p>

        <p>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </p>

        <p>
            <label for="subject">Tiêu đề:</label><br>
            <input type="text" id="subject" name="subject" required>
        </p>

        <p>
            <label for="content">Nội dung:</label><br>
            <textarea id="content" name="content" rows="6" cols="40" required></textarea>
            <span id="content-error" class="error-message" role="alert"></span>
        </p>

        <button type="submit">Gửi</button>
    </form>
<?php require __DIR__ . '/includes/footer.php'; ?>
