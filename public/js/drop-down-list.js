const brandList = document.querySelector('select[name="brand"]');
const modelList = document.querySelector('select[name="model"]');
const fuelList = document.querySelector('select[name="typeoffuel"]');

function getBrands(){
    fetch('/API/getBrands')
        .then(response => response.json())
        .then(data => {
            // Tutaj możesz wykonać operacje na pobranych danych
            let options = [];
            data.forEach(element => {
                let listOption = document.createElement('option');
                listOption.textContent = element.name;
                listOption.setAttribute('value', element.id);
                brandList.appendChild(listOption);
            });
        })
        .catch(error => {
            console.error('Wystąpił błąd:', error);
        });

}

function getModel()
{
    let brand = brandList.options[brandList.selectedIndex].value;
    if (brand === '')
    {
        modelList.innerHTML = '<option value=""></option>';

    } else {
        fetch(`/API/getModels?id_brand=${brand}`)
            .then(response => response.json())
            .then(data => {
                // Tutaj możesz wykonać operacje na pobranych danych
                modelList.innerHTML = '';
                let options = [];
                let empty = document.createElement('option');
                empty.setAttribute('value', '');
                modelList.appendChild(empty);

                data.forEach(element => {
                    let listOption = document.createElement('option');
                    listOption.textContent = element.name;
                    listOption.setAttribute('value', element.id);
                    modelList.appendChild(listOption);
                });

                console.log(data);
            })
            .catch(error => {
                console.error('Wystąpił błąd:', error);
            });
    }


}

function getFuels(){
    fetch('/API/getFuels')
        .then(response => response.json())
        .then(data => {
            // Tutaj możesz wykonać operacje na pobranych danych
            let options = [];
            data.forEach(element => {
                let listOption = document.createElement('option');
                listOption.textContent = element.type;
                listOption.setAttribute('value', element.id);
                fuelList.appendChild(listOption);
            });
        })
        .catch(error => {
            console.error('Wystąpił błąd js getFuels():', error);
        });

}

function loadData()
{
    getFuels();
    getBrands();
}