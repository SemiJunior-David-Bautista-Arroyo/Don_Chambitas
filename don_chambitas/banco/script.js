const cardNumberElement = document.getElementById('cardNumber');
const cardHolderElement = document.getElementById('cardHolder');
const cardExpiryElement = document.getElementById('cardExpiry');

const cardNumberInput = document.getElementById('card-number');
const cardHolderInput = document.getElementById('card-holder');
const expiryInput = document.getElementById('expiry');

cardNumberInput.addEventListener('input', updateCardNumber);
cardHolderInput.addEventListener('input', updateCardHolder);
expiryInput.addEventListener('input', updateCardExpiry);

function updateCardNumber(event) {
    cardNumberElement.textContent = formatCardNumber(event.target.value);
}

function updateCardHolder(event) {
    cardHolderElement.textContent = event.target.value.toUpperCase();
}

function updateCardExpiry(event) {
    const value = event.target.value;
    const formattedValue = formatExpiry(value);
    cardExpiryElement.textContent = formattedValue;
}

function formatCardNumber(cardNumber) {
    // Format the card number (e.g., add spaces every 4 digits)
    const cleanedNumber = cardNumber.replace(/\s+/g, '');
    const chunks = cleanedNumber.match(/.{1,4}/g);
    if (chunks) {
        return chunks.join(' ');
    }
    return cardNumber;
}

function formatExpiry(expiry) {
    // Format the expiry date (e.g., add a '/' after 2 digits)
    const cleanedExpiry = expiry.replace(/\s+/g, '');
    if (cleanedExpiry.length > 2) {
        return cleanedExpiry.slice(0, 2) + '/' + cleanedExpiry.slice(2);
    }
    return cleanedExpiry;
}
