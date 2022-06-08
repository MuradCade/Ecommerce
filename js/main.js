let range = document.querySelector('.range');
let current_price = document.querySelector('.current-price');
let filter_btn = document.querySelector('#filter-btn');
current_price.innerHTML = " $"+range.value;

range.oninput = function(){
    current_price.innerHTML = " $" + this.value;
}



filter_btn.addEventListener('click',function(){
    window.location = 'shop.html';
        
})


