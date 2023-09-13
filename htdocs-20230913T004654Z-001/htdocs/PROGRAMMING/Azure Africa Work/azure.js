const myForm = document.querySelector('#my-form');
const nameinput = document.querySelector('#name');
const emailinput = document.querySelector('#email');
const msg = document.querySelector('.msg');
const userList = document.querySelector('#users');


myForm.addEventListener('submit', onsubmit);

function onsubmit(e) {
    e.preventDefault();

    if(nameinput.value === '' || emailinput.value === '') {
        msg.innerHTML = 'please enter your information';

        setTimeout(() => msg.remove(), 2000);
    }else{
        const li = document.createElement('li');
        li.appendChild(document.createTextNode(`${nameinput.value} : ${emailinput}`));

        userList.appendChild(li);

        nameinput.value = '';
        emailinput.value = '';
    }
}