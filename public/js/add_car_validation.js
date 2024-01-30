function checkFormValidity() {
    let brand = document.querySelector('select[name="brand"]').value;
    let model = document.querySelector('select[name="model"]').value;
    let fuel = document.querySelector('select[name="typeoffuel"]').value;
    let saveButton = document.querySelector('button[type="submit"]');

    saveButton.disabled = !(brand !== "" && model !== "" && fuel !== "");
}

document.addEventListener('DOMContentLoaded', function () {
    let form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        let brand = document.querySelector('select[name="brand"]').value;
        console.log(brand);
        let model = document.querySelector('select[name="model"]').value;
        console.log(model);
        let fuel = document.querySelector('select[name="typeoffuel"]').value;
        console.log(fuel);
        let nickname = document.querySelector('input[name="nickname"]').value;
        console.log(nickname);
        let cof = document.querySelector('input[name="cof"]').value;
        console.log(cof);
        let licenseNumber = document.querySelector('input[name="license_number"]').value;
        console.log(licenseNumber);
        let note = document.querySelector('textarea[name="description"]').value;

        if (brand === "" || model === "" || fuel === "" || nickname === "" || licenseNumber === "" || cof === "" || note === "") {
            event.preventDefault(); // Zatrzymaj domyślną akcję formularza (przesłanie danych)
            alert('Proszę wypełnić wszystkie pola!');
        }

    });
});
// document.addEventListener('DOMContentLoaded', function() {
//     var form = document.querySelector('form');
//
//     form.addEventListener('submit', function(event) {
//         var brand = document.querySelector('select[name="brand"]').value;
//         var model = document.querySelector('select[name="model"]').value;
//         var fuel = document.querySelector('select[name="typeoffuel"]').value;
//
//         if (brand === "" || model === "" || fuel === "") {
//             event.preventDefault(); // Zatrzymaj domyślną akcję formularza (przesłanie danych)
//             alert('Proszę wypełnić wszystkie pola!');
//         }
//     });
// });




