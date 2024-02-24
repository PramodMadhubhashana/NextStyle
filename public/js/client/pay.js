
document.getElementById('card-number').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
    let formattedValue = '';
    for (let i = 0; i < value.length && i < 16; i++) {
        if (i > 0 && i % 4 === 0) {
            formattedValue += ' ';
        }
        formattedValue += value[i];
    }
    e.target.value = formattedValue.trim();
});

document.getElementById('expiry-date').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
    let formattedValue = '';
    for (let i = 0; i < value.length && i < 4; i++) {
        if (i === 2 && value.length > 2) {
            formattedValue += '/';
        }
        formattedValue += value[i];
    }
    e.target.value = formattedValue.trim();
});

document.getElementById('cvv').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
    let formattedValue = '';
    for (let i = 0; i < value.length && i < 3; i++) {
        formattedValue += value[i];
    }
    e.target.value = formattedValue.trim();
});


