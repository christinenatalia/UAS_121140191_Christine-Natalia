const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const type = document.getElementById('type');
const series = document.getElementById('series');
const price = document.getElementById('price');

form.addEventListener('submit', e => {
    e.preventDefault();
    if (checkFormValidity()) {
        form.submit();
    }
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const checkFormValidity = () => {
    let isValid = true;

    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const typeValue = type.value.trim();
    const seriesValue = series.value.trim();
    const priceValue = price.value.trim();

    if (usernameValue === '') {
        setError(username, 'Product Name is required');
        isValid = false;
    } else {
        setSuccess(username);
    }

    if (emailValue === '') {
        setError(email, 'Email is required');
        isValid = false;
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
        isValid = false;
    } else {
        setSuccess(email);
    }

    if (typeValue === '') {
        setError(type, 'Product Type is required');
        isValid = false;
    } else {
        setSuccess(type);
    }

    if (seriesValue === '') {
        setError(series, 'Product Series is required');
        isValid = false;
    } else {
        setSuccess(series);
    }

    if (priceValue === '') {
        setError(price, 'Product Price is required');
        isValid = false;
    } else {
        setSuccess(price);
    }

    return isValid;
};
