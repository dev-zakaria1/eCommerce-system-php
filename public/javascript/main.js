window.addEventListener("pageshow", function (event) {
    if (event.persisted) {
        location.reload();
    }
});

let navbar = document.querySelector('.navbar');
document.querySelector('#menu-icon').onclick = () => {
    navbar.classList.toggle('active');
    search.classList.remove('active');
}
let currentCount = document.querySelector('#currentCount');

function plus(id) {
    increaseBtn = document.querySelector('#' + id);
    numberInput = increaseBtn.nextElementSibling;

    let count = parseInt(numberInput.value);
    count++;
    numberInput.value = count;
    count = (count >= 10) ? 0 : count;
    numberInput.value = count;

}

function minus(id) {
    decreaseBtn = document.querySelector('#' + id);
    numberInput = decreaseBtn.previousElementSibling;

    let count = parseInt(numberInput.value);
    count = count - 1;
    numberInput.value = count;
    count = (count > 1) ? count : 9;
    numberInput.value = count;
}
let imgCard = document.querySelector('#imgCard');
let category = document.querySelector('.category');
let product = document.querySelector('.product');
let price = document.querySelector('.price');
let card = document.querySelectorAll('.card');
let numberInput = document.querySelectorAll('.numberValue');
let MakeCart = document.querySelectorAll('.subCart')
let input_group = document.querySelector('.input_group')
let dataPro;
if (localStorage.product != null) {
    dataPro = JSON.parse(localStorage.product)


} else {
    dataPro = [];
}
function isEmpty(value) {
    return (value.length > 0) ? false : true;
}
function create(id) {
    let MakeCart = document.querySelector('#' + id);
    let input_group = MakeCart.previousElementSibling;
    let numberInput = input_group.children[1];
    let cardPro = MakeCart.parentElement;
    let newPro = {
        id: parseInt(cardPro.querySelector('#id').innerHTML),
        imgCard: cardPro.querySelector('img').src,
        category: cardPro.querySelector('.category').innerHTML,
        product: cardPro.querySelector('.product').innerHTML,
        price: parseInt(cardPro.querySelector('.price').innerHTML),
        numberInput: numberInput.value,
    }

    let numberData;
    let res = '';
    if (isEmpty(dataPro)) {
        dataPro.push(newPro);
    } else {
        numberData = dataPro.length;
        for (let i = 0; i < numberData; i++) {
            if (dataPro[i].id != newPro.id) {
                res = "positive";
            } else {
                res = "negative"
                break;
            }
        }
        if (res == 'positive') {
            dataPro.push(newPro);
        }

    }
    localStorage.setItem('product', JSON.stringify(dataPro));
}

