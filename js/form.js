const labelIme = document.querySelector(`#label-ime`);
const labelPrezime = document.querySelector(`#label-prezime`);
const labelEmail = document.querySelector(`#label-email`);
const labelBrojTelefona = document.querySelector(`#label-broj-telefona`);

const inputIme = document.querySelector(`#input-ime`);
const inputPrezime = document.querySelector(`#input-prezime`);
const inputEmail = document.querySelector(`#input-email`);
const inputBrojTelefona = document.querySelector(`#input-broj-telefona`);

const form = document.querySelector(`#form`);

form.addEventListener(`submit`, (e) =>{
    
    if(inputIme.value === `` || /\d/.test(inputIme.value) || String(inputIme.value).length < 2)
    {
        e.preventDefault();
        inputIme.value = ``;
        labelIme.style.color = `red`;
        labelIme.textContent = `Ime je obavezno polje!`;
    }

    else{
        labelIme.textContent = `Ime ✔`;
        labelIme.style.color = `#fff`;
    }

    if(inputPrezime.value === `` || /\d/.test(inputPrezime.value) || String(inputPrezime.value).length < 2){
        e.preventDefault();
        inputPrezime.value = ``;
        labelPrezime.style.color = `red`;
        labelPrezime.textContent = `Prezime je obavezno polje!`;
    }

    else{
        labelPrezime.textContent = `Prezime ✔`;
        labelPrezime.style.color = `#fff`;
    }

    if(inputEmail.value === `` || !inputEmail.value.includes("@")){
        e.preventDefault();
        inputEmail.value = ``;
        labelEmail.style.color = `red`;
        labelEmail.textContent = `Email je obavezno polje!`;
    }

    else{
        labelEmail.textContent = `Email ✔`;
        labelEmail.style.color = `#fff`;
    }

    if(inputBrojTelefona.value === `` || /[a-zA-Z]/.test(inputBrojTelefona.value) || String(inputBrojTelefona.value).length < 9){
        e.preventDefault();
        inputBrojTelefona.value = ``;
        labelBrojTelefona.style.color = `red`;
        labelBrojTelefona.textContent = `Broj telefona je obavezno polje!`;
    }

    else{
        labelBrojTelefona.textContent = `Broj telefona ✔`;
        labelBrojTelefona.style.color = `#fff`;
    }


});