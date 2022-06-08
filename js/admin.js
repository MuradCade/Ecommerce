let addbtn = document.querySelector('#add');
let showbtn = document.querySelector('#show');
let form =document.querySelector('.form-group');
let table = document.querySelector('.table');


addbtn.addEventListener('click',function(){
    if(form.style.display = "none"){
        table.style.display = "none";

        form.style.display = "block";
    }

});

