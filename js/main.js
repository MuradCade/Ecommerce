let range = document.querySelector('.range');
let current_price = document.querySelector('.current-price');
let filter_btn = document.querySelector('#filter-btn');

current_price.innerHTML = " $"+range.value;
range.oninput = function(){
    
    current_price.innerHTML = " $" + this.value;
}

// products to filter
let product1  = document.querySelector('#p1');
let product2  = document.querySelector('#p2')
let product3  = document.querySelector('#p3')
let product4  = document.querySelector('#p4')
let product5  = document.querySelector('#p5')
let product6  = document.querySelector('#p6')
let product7  = document.querySelector('#p7')
let product8  = document.querySelector('#p8')
filter_btn.addEventListener('click',function(){
if(range.value === "20"){
   product1.style.display = "block";
   product2.style.display = "none";
   product3.style.display = "none";
   product4.style.display = "none";
   product5.style.display = "none";
   product6.style.display = "none";
   product7.style.display = "none";
   product8.style.display = "block";
}else if(range.value === "18"){

    product1.style.display = "none";
    product2.style.display = "none";
    product3.style.display = "block";
   product4.style.display = "none";
   product5.style.display = "none";
   product6.style.display = "none";
   product7.style.display = "block";
   product8.style.display = "none";
}
else if(range.value === "16"){
       product1.style.display = "none";
    product2.style.display = "none";
    product3.style.display = "none";
   product4.style.display = "none";
   product5.style.display = "block";
   product6.style.display = "none";
   product7.style.display = "none";
   product8.style.display = "none";
}
else if(range.value === "24"){
      product1.style.display = "none";
    product2.style.display = "none";
    product3.style.display = "none";
   product4.style.display = "none";
   product5.style.display = "none";
   product6.style.display = "block";
   product7.style.display = "none";
   product8.style.display = "none";
}
else if(range.value === "40"){
     product1.style.display = "none";
    product2.style.display = "block";
    product3.style.display = "none";
   product4.style.display = "none";
   product5.style.display = "none";
   product6.style.display = "none";
   product7.style.display = "none";
   product8.style.display = "none";
}
else if(range.value === "45"){
       product1.style.display = "none";
    product2.style.display = "none";
    product3.style.display = "none";
   product4.style.display = "block";
   product5.style.display = "none";
   product6.style.display = "none";
   product7.style.display = "none";
   product8.style.display = "none";
}
else{
    alert("please provide valid priceses btwn 18-20 or look at price of product you wana filter");
}
});


