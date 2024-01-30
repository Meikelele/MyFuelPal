function loadData() {
    getFuelnotes();
}

function getFuelnotes() {
    fetch('/API/getFuelnotes')
        .then(response => response.json())
        .then(data => {
            data.forEach(element => {
                const fuelNotesBox = document.getElementById('fuel-notes');

                let datetime = new Date(element.date);

                let now = datetime;

                let hour = now.getHours().toString().padStart(2, '0');
                let minute = now.getMinutes().toString().padStart(2, '0');

                let dayOfMonth = now.getDate().toString().padStart(2, '0');
                let month = (now.getMonth() + 1).toString().padStart(2, '0');

                let days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

                let time = hour + ":" + minute;
                let date = `${days[datetime.getDay()]}, ${dayOfMonth}-${month}-${now.getFullYear()}`;


                let price = element.price;
                let liters = element.liters;
                let note = element.note;

                fuelNotesBox.innerHTML += `<div class="fuel-note">
                <div class="fuel-note-top">
                    <div class="first">
                        <i class="fa-solid fa-clock"></i>
                        <div class="first-date">
                            <p class="first-text">${time}</p>
                            <p class="first-subtext">${date}</p>

                        </div>
                    </div>
                    <div class="second">
                        <i class="fa-solid fa-gas-pump"></i>
                        <div class="second-date">
                            <p class="second-text">${price} zł</p>
                            <p class="second-subtext">${liters} L</p>
                        </div>

                    </div>
                </div>
                <div class="fuel-note-horizontal-line"></div>
                <div class="third">
                    <p>${note}</p>
                </div>
            </div>`;
            });
        })
        .catch(error => {
            console.error('Wystąpił błąd:', error);
        });

}


