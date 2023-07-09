const container=document.getElementById('container');
const inbut=document.getElementById('signin');
const upbut=document.getElementById('signup');

upbut.addEventListener('click',() => {
    container.classList.add('panel-active');
})
inbut.addEventListener('click',() => {
    container.classList.remove('panel-active');
})

