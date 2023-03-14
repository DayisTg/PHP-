const exitBtn = document.querySelector('.form__btn-exit'); 
const exitBtnForm = document.querySelector('.container-alert-create');

const opCreate = document.querySelector('.btn-op');
/* const  = document.querySelector('.form__btn-exit');
const exitBtn = document.querySelector('.form__btn-exit');*/

const alertaCreate = opCreate.addEventListener('click',()=>{
    exitBtnForm.classList.toggle("container-alert-create-op");
    exitBtn.addEventListener('click',()=>{
        exitBtnForm.classList.toggle("container-alert-create-op");
    })
})
