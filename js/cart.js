// Cart Section
var productQty = document.getElementById('quantity');
var productQtyAmount = document.querySelector('.qtyPrice');
var hiddenQty = document.querySelector('.chest');
var subtotal = document.querySelector('.subtotal');
var total = document.querySelector('.total');

// Function to multiply the qty with the product price
function qtyPrice() {
    console.log('total')
    switch(parseInt(productQty.value)) {
        case 1:
            return productQtyAmount.innerHTML = parseInt(hiddenQty.value) * 1;  
        case 2:  
            return productQtyAmount.innerHTML = parseInt(hiddenQty.value) * 2;
        case 3:  
            return productQtyAmount.innerHTML = parseInt(hiddenQty.value) * 3;
        case 4:  
            return productQtyAmount.innerHTML = parseInt(hiddenQty.value) * 4;
        case 5:  
            return productQtyAmount.innerHTML = parseInt(hiddenQty.value) * 5;
        case 6:  
            return productQtyAmount.innerHTML = parseInt(hiddenQty.value) * 6;
        case 7:  
            return productQtyAmount.innerHTML = parseInt(hiddenQty.value) * 7;
        case 8:  
            return productQtyAmount.innerHTML = parseInt(hiddenQty.value) * 8;
        case 9:  
            return productQtyAmount.innerHTML = parseInt(hiddenQty.value) * 9;
        case 10:  
            return productQtyAmount.innerHTML = parseInt(hiddenQty.value) * 10;
        default:
            return productQtyAmount.innerHTML;
    }
        
    total = productQtyAmount.innerHTML
};

function calcTotal() {
    total.innerHTML = productQtyAmount.innerHTML;
    return total.innerHTML
}
function calcSubTotal() {
    subtotal.innerHTML = productQtyAmount.innerHTML;
    return subtotal.innerHTML
}

