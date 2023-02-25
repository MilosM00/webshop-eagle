const hamburgerMenu = document.querySelector(`.ul-phone`);
const hamburgerButton = document.querySelector(`#hamburger-button`);

let phone = true;

hamburgerButton.addEventListener(`click`, () =>{
    if(phone === true){
        hamburgerButton.classList.remove(`fa-bars`);
        hamburgerButton.classList.add(`fa-times`);
        hamburgerMenu.style.display = `flex`;
    }
    
    if(phone === false){
        hamburgerButton.classList.add(`fa-bars`);
        hamburgerButton.classList.remove(`fa-times`);
        hamburgerMenu.style.display = `none`;
    }

    phone = !phone;
});