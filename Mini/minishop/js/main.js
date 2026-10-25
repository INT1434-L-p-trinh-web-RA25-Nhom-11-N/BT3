const CART_KEY = "minishop_cart";
const SEED_KEY = "minishop_cart_seeded";
function seedDemoCart() {
    if (localStorage.getItem(SEED_KEY) === null) {
        const demo = [
            { name: "Chuột Logitech", price: 499000, qty: 1 },
            { name: "Bàn phím cơ", price: 899000, qty: 1 }
        ];
        localStorage.setItem(CART_KEY, JSON.stringify(demo));
        localStorage.setItem(SEED_KEY, "1");
    }
}

function getCart() {
    try {
        const data = JSON.parse(localStorage.getItem(CART_KEY));
        return Array.isArray(data) ? data : [];
    } catch (e) {
        return [];
    }
}

function updateCartCount() {
    const badge = document.getElementById("cart-count");
    if (!badge) return;
    const total = getCart().reduce(function (sum, item) {
        return sum + item.qty;
    }, 0);
    badge.textContent = total;
}

function initClearCart() {
    const btn = document.getElementById("clear-cart");
    if (!btn) return;

    btn.addEventListener("click", function () {
        if (!confirm("Xóa toàn bộ giỏ hàng?")) return;

        localStorage.removeItem(CART_KEY);
        updateCartCount();

        const tbody = document.querySelector(".cart-table tbody");
        if (tbody) {
            tbody.innerHTML =
                '<tr><td colspan="4">Giỏ hàng trống.</td></tr>';
        }
        const totalCell = document.querySelector(".cart-table tfoot th:last-child");
        if (totalCell) totalCell.textContent = "0đ";
    });
}

function initContactForm() {
    const form = document.getElementById("contact-form");
    if (!form) return;

    const content = document.getElementById("content");
    const error = document.getElementById("content-error");

    form.addEventListener("submit", function (event) {
        if (content.value.trim().length < 10) {
            event.preventDefault();
            error.textContent = "Nội dung tin nhắn phải có ít nhất 10 ký tự.";
            content.focus();
        } else {
            error.textContent = "";
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    seedDemoCart();
    updateCartCount();
    initClearCart();
    initContactForm();
});
