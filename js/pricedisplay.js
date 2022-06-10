let current_size = document.getElementById('sizename');
let small = document.getElementById('small');
let medium = document.getElementById('medium');
let large = document.getElementById('large');
let text = current_size.innerHTML = current_size.textContent;
small.addEventListener('mouseenter', function () {
    current_size.innerHTML = "S";
});

medium.addEventListener('mouseenter', function () {
    current_size.innerHTML = "M";
});

large.addEventListener('mouseenter', function () {
    current_size.innerHTML = "L";
});


small.addEventListener('click', function () {
    current_size.innerHTML = "Small";
})
medium.addEventListener('click', function () {
    current_size.innerHTML = "Medium";
})
large.addEventListener('click', function () {
    current_size.innerHTML = "Large";
})

