<?php

function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function format_price($amount): string
{
    return number_format((float) $amount, 0, ',', '.') . 'đ';
}
function url(string $path = ''): string
{
    return BASE_URL . ltrim($path, '/');
}
function render_product_card(array $p): void
{
    ?>
    <article>
        <h3><?= e($p['name']) ?></h3>
        <img src="<?= e(url('images/' . $p['image'])) ?>" alt="<?= e($p['name']) ?>" width="200">
        <p><strong><?= e(format_price($p['price'])) ?></strong></p>
        <a href="<?= e(url('product.php?id=' . (int) $p['id'])) ?>">Xem chi tiết</a>
    </article>
    <?php
}
