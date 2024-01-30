const carList = document.querySelector('select[name="car"]');


function getCars(){
    fetch('/API/getCars')
        .then(response => response.json())
        .then(data => {
            // Tutaj możesz wykonać operacje na pobranych danych
            let empty = document.createElement('option');
            empty.setAttribute('value', '');
            carList.appendChild(empty);
            data.forEach(element => {
                let listOption = document.createElement('option');
                listOption.textContent = element.nickname + " - " + element.brand + " " + element.model;
                listOption.setAttribute('value', element.id_vehicle);
                carList.appendChild(listOption);
            });
        })
        .catch(error => {
            console.error('Wystąpił błąd:', error);
        });

}

function loadData(){
    getCars();
}

document.addEventListener('DOMContentLoaded', function () {
    let form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        let price = document.querySelector('input[name="price"]').value;
        let liters = document.querySelector('input[name="liters"]').value;
        let time = document.querySelector('input[name="time"]').value;
        let date = document.querySelector('input[name="date"]').value;
        let car = document.querySelector('select[name="car"]').value;
        let note = document.querySelector('textarea[name="description"]').value;

        if (price === "" || liters === "" || time === "" || date === "" || car === "" || note === "") {
            event.preventDefault();
            alert('Proszę wypełnić wszystkie pola!');
        }
    });
});