const juniorButton = document.querySelector(`#kupi-junior`);
const mediorButton = document.querySelector(`#kupi-medior`);
const seniorButton = document.querySelector(`#kupi-senior`);
const modal = document.querySelector(`.modal`);
const modalOverlay = document.querySelector(`.modal-overlay`);
const buttonCloseModal = document.querySelector(`.close-button`);
const cenaText = document.querySelector(`.cena`);
const nazivPaketa = document.querySelector(`.izbor`);
const buttonKupi = document.querySelector(`#kupi`);


juniorButton.addEventListener(`click`, () =>{
    modalOverlay.style.display = `flex`;
    modal.style.display = `block`;
    cenaText.textContent = `2500,00`;
    nazivPaketa.textContent = `EAGLE JUNIOR`;
    buttonKupi.href = `form.php?pack=Junior`;
});

mediorButton.addEventListener(`click`, () =>{
    modalOverlay.style.display = `flex`;
    modal.style.display = `block`;
    cenaText.textContent = `3500,00`;
    nazivPaketa.textContent = `EAGLE MEDIOR`;
    buttonKupi.href = `form.php?pack=Medior`;
});

seniorButton.addEventListener(`click`, () =>{
    modalOverlay.style.display = `flex`;
    modal.style.display = `block`;
    cenaText.textContent = `5500,00`;
    nazivPaketa.textContent = `EAGLE SENIOR`;
    buttonKupi.href = `form.php?pack=Senior`;
});

buttonCloseModal.addEventListener(`click`, () =>{
    modal.style.display = `none`;
    modalOverlay.style.display = `none`;
});

modalOverlay.addEventListener(`click`, () =>{
    modal.style.display = `none`;
    modalOverlay.style.display = `none`;
});