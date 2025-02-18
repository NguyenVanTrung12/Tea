const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
})

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
})

//Tìm sản phẩm theo giá tiền
function increaseValue(inputId) {
    var input = document.getElementById(inputId);
    input.value = parseInt(input.value) + 1;
    submitForm();
}

// Giảm giá trị của input
function decreaseValue(inputId) {
    var input = document.getElementById(inputId);
    input.value = parseInt(input.value) - 1;
    submitForm();
}

// Hàm tự động gửi form khi thay đổi giá trị
function submitForm() {
    var form = document.getElementById('price-filter-form');
    form.submit();
}

//Tìm sản phẩm theo category và brand
document.querySelectorAll('.checkbox-filter input').forEach(function (input) {
    input.addEventListener('change', function () {
        // Tự động gửi form khi có sự thay đổi
        var form = this.closest('form');
        form.submit();
    });
});