const form =document.querySelector ('.form1') ;
const feedback1=document.querySelector('.feedback1 ');
const feedback2=document.querySelector('.feedback2 ');
form.addEventListener('submit', e => {
    e.preventDefault ();


    
const username =form.username.value;
const usernamePattern = /^[a-zA-Z ]{5,15}$/;

if(usernamePattern.test(username)){
    feedback1.textContent='Username is valid!'
} else {
    feedback1.textContent='Username is Invalid!'

}
const password =form.password.value;
const pwpattern=  /^[a-z].{6,}$/;

if(pwpattern.test(password)){
    feedback2.textContent=' '
} else {
    feedback2.textContent='Password is invalid. It should only contain lowercase letters and minimum length is 6 characters'

}

});


//live feedback 

const username =form.username.value;
const usernamePattern = /^[a-zA-Z ]{5,15}$/;
form.username.addEventListener( 'keyup' , e => {
    if( usernamePattern.test(e.target.value)){
        form.username.setAttribute( 'class', 'success');

    } else {
        form.username.setAttribute( 'class', 'error');
    }



});
const password =form.password.value;
const pwpattern=  /^[a-z].{6,}$/;

form.password.addEventListener( 'keyup' , e => {
    if (pwpattern.test(e.target.value)){
        form.password.setAttribute( 'class', 'success');

    } else {
        form.password.setAttribute( 'class', 'error');
    }



});
