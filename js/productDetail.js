// Product Details
var addBtn = document.querySelector('.btn-plus');
var minusBtn = document.querySelector('.btn-minus');
var quantity = document.querySelector('#qty');
var test = 7;
// increases the qty of product
function addOne(e) {
    e.preventDefault()
    let newQty = parseInt(quantity.value) + 1;
    return quantity.value = newQty
}
// decreases the qty of product
function removeOne(e) {
    e.preventDefault()
    console.log("hello")
    var newQty = parseInt(quantity.value)
    newQty = newQty > 1 ? newQty - 1 : 1;
    quantity.value = newQty
    return quantity.value;
    
}

addBtn.addEventListener('click', addOne);
minusBtn.addEventListener('click', removeOne);

