
document.addEventListener('DOMContentLoaded', function () {
    let form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        let brand = document.querySelector('select[name="brand"]').value;
        let model = document.querySelector('select[name="model"]').value;
        let fuel = document.querySelector('select[name="typeoffuel"]').value;
        let nickname = document.querySelector('input[name="nickname"]').value;
        let cof = document.querySelector('input[name="cof"]').value;
        let licenseNumber = document.querySelector('input[name="license_number"]').value;
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




