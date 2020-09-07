 const form =document.querySelector ('.form1') ;
 const feedback=document.querySelector('.feedback ');
const feedback2=document.querySelector('.feedback2 ');

 form.addEventListener('submit', e => {
     e.preventDefault ();
  
     
     const password =form.password.value;
    //  if (password.length<6) {
    //      alert ("password must be atleast 6 characters long ");
    //      return false ;
    //  } 

    //  else
    //   { 
    //     alert('Your passwrod is of correct length.');
    //     return true;
    //     }
     const password = form.password.value;
     const pwpattern=  /^[a-z].{6,}$/;
     
     if(pwpattern.test(password) && password.length>6 ){
         feedback2.textContent= 'password is valid '
     } else {
         feedback2.textContent=' *Password is invalid. It should only contain lowercase letters and minimum length is 6 characters '
     
     }



const pw1=form.password.value ;
  const pw2=form.passwordRepeat.value ;

  if( pw1 == pw2 ){
      feedback.textContent=' '
} else {
      feedback.textContent='Password must be same ! '

  }

  });

  //const password =form.password.value;
  //const pwpattern=  /^[a-z].{6,}$/;
  
 // if(pwpattern.test(password)){
   //   feedback2.textContent= 'password is valid '
 // } else {
   //   feedback2.textContent=' *Password is invalid. It should only contain lowercase letters and minimum length is 6 characters '
  
 // }

  
 
  




