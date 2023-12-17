window.onload = function () {
    const formData = JSON.parse(localStorage.getItem('formData')) || {};
    document.getElementById('name').value = formData.name || '';
    document.getElementById('type').value = formData.type || '';
    document.getElementById('series').value = formData.series || '';
    document.getElementById('email').value = formData.email || '';
    document.getElementById('price').value = formData.price || '';
};

document.getElementById('form').addEventListener('submit', function () {
    const formData = {
        name: document.getElementById('name').value,
        type: document.getElementById('type').value,
        series: document.getElementById('series').value,
        email: document.getElementById('email').value,
        price: document.getElementById('price').value,
    };

    localStorage.setItem('formData', JSON.stringify(formData));
});