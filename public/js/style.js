let open_btn= document.getElementsByClassName('open');
let close_btn= document.getElementsByClassName('close');
let menu_div= document.getElementsByClassName('left-side-contents');
let right_div= document.getElementsByClassName('right-side');
let hide= document.querySelectorAll('none');
let cred_block= document.getElementById('user_cred');
let chng_pwd_block= document.getElementById('chng_pwd');
let chng_email_block= document.getElementById('chng_email');


open_btn[0].addEventListener('click', function(){
    // console.log('clicked');
    right_div[0].style.width="74.8%";
    menu_div[0].classList.remove('none');
    open_btn[0].classList.add('none');
    close_btn[0].classList.remove('none');

});

close_btn[0].addEventListener('click', function(){
    // console.log('clicked');
    menu_div[0].classList.add('none');
    right_div[0].style.width="98%";
    open_btn[0].classList.remove('none');
    close_btn[0].classList.add('none');

});

