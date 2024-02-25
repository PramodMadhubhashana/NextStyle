
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



const codOption = document.querySelector('input[value="cod"]');
const cardOption = document.querySelector('input[value="card"]');
const cardDetails = document.querySelector('.card-details');


document.querySelectorAll('input[name="payment"]').forEach((input) => {
    input.addEventListener('change', function () {
        if (this.value === 'card') {
            cardDetails.style.display = 'block';
        } else {
            cardDetails.style.display = 'none';
        }
    });
});


document.getElementById('pay-button').addEventListener('click', function () {
    const selectedPaymentMethod = document.querySelector('input[name="payment"]:checked').value;
    if (selectedPaymentMethod === 'card') {
        
        const cardHolder = document.getElementById('card-holder').value.trim();
        const cardNumber = document.getElementById('card-number').value.trim();
        const expiryDate = document.getElementById('expiry-date').value.trim();
        const cvv = document.getElementById('cvv').value.trim();

        if (!cardHolder || !cardNumber || !expiryDate || !cvv) {
            //alert('Please fill in all card details.');
            return;
        }
        else{
            alert('Your order will be placed using Card.');
        }

        
    } else {
        
        alert('Your order will be placed using Cash on Delivery.');
    }
});
