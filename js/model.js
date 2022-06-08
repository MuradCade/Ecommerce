// let modal = document.querySelector('#exampleModal');
// let btn = document.querySelector('#btn2');


// btn.addEventListener('click',function(){
//     if(modal.style.display = "none"){
//         modal.style.display = "block";
//     }
//     else if(modal.style.display = "block"){
//         modal.style.display = "none";

//     }
// })

$(document).ready(function(){
    // card button
    
    $('#btn2').click(function(){
        $('#exampleModal').toggle();
       
        $('#btn2').css('color','#0d5cacf6');
        $('#search').hide();
        
    })
    
    $('.close').click(function(){
        $('#exampleModal').hide();
        $('#btn2').css('color','#7e31db');
    })
    // search button
    $('#searchbtn').click(function(){
        $('#search').toggle();
        $('#searchbtn').css('color','#0d5cacf6');
        $('#exampleModal').hide();
        
    })
    $('.close2').click(function(){
        $('#search').hide();
        $('#btn2').css('color','#7e31db');
        
    })
    
   
    
})