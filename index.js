const sidemenu = document.querySelector('#sidemenu');
const section = document.querySelector('#section');
const close = document.querySelector('#close');
const open = document.querySelector('#open');



close.addEventListener('click',() => {
    console.log('closing option is working');
    sidemenu.style.width = '0%';
    section.style.marginLeft = '0px';
});
open.addEventListener('click' , () => {
    console.log('opening tag is working');
    sidemenu.style.width = '22%';
    section.style.marginLeft = '23%';
});
