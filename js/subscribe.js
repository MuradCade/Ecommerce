// subscribe form on the footer
console.log('working');
let email = document.querySelector('#email');
let subscribe_btn  = document.getElementById('btn');
let msg = document.getElementById('msg');
let error = document.getElementById('error');

subscribe_btn.addEventListener('click',function(){
if(email.value == ""){
    error.innerText = "please provide your email to subscribe";
}
else{
     error.innerText = "";
 msg.innerText = "Thankz For Subscribing, Check Your Emial For More Information";   
 email.value = "";
}
});

