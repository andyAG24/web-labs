let carsList = [
    {model: "Subaru XV", engine: "2.0", consumption: "5.9", maxSpeed: "192", hp: "150", engineTorque: "196", to100: "5,9", image: "./images/XV_MAIN_720_450.png"},
    {model: "Subaru Legacy", engine: "2.5", consumption: "6.2", maxSpeed: "210", hp: "175", engineTorque: "235", to100: "9,6", image: "./images/LEGACY_MAIN_720_450.png"},
    {model: "Subaru Outback", engine: "3.6", consumption: "7.5", maxSpeed: "235", hp: "260", engineTorque: "350", to100: "7,6", image: "./images/main page.png"},
    {model: "Subaru WRX STI", engine: "2.5", consumption: "8.4", maxSpeed: "250", hp: "300", engineTorque: "407", to100: "5,2", image: "./images/b701bec789bd2baa80a4f5624fb747785a0b593a1f8bb.png"},
    {model: "Subaru Forester", engine: "2.5", consumption: "6.3", maxSpeed: "207", hp: "185", engineTorque: "239", to100: "9,5", image: "./images/forester_main.png"}
];

let carInfo = document.getElementsByClassName("car-info")[0],
    carModel = carInfo.getElementsByClassName("car-info-title")[0],
    carCharacteristics = carInfo.getElementsByClassName("car-info-characteristics")[0],
    carEngine = carCharacteristics.querySelector("#car-info-engine");
    carEngineConsumption = carCharacteristics.querySelector("#car-info-engine-consumption"),
    carMaxSpeed = carCharacteristics.querySelector("#car-info-max-speed"),
    carHp = carCharacteristics.querySelector("#car-info-hp"),
    carEngineTorque = carCharacteristics.querySelector("#car-info-engine-torque"),
    to100 = carCharacteristics.querySelector("#car-info-to-100"),
    currentCarIndex = 0,
    carImage = document.getElementsByClassName("car-image")[0].getElementsByTagName("img")[0];

let pagination = document.getElementsByClassName("pagination")[0];

let firstPageButton = pagination.getElementsByClassName("first")[0],
    previousPageButton = pagination.getElementsByClassName("previous")[0],
    nextPageButton = pagination.getElementsByClassName("next")[0],
    lastPageButton = pagination.getElementsByClassName("last")[0];

firstPageButton.addEventListener('click', () => {
    currentCarIndex = 0;
    changeCar(currentCarIndex);
});

previousPageButton.addEventListener('click', () => {
    currentCarIndex--;
    if (currentCarIndex < 0) currentCarIndex = 0;
    changeCar(currentCarIndex);
});

nextPageButton.addEventListener('click', () => {
    currentCarIndex++;
    if (currentCarIndex > carsList.length - 1) currentCarIndex = carsList.length - 1;
    changeCar(currentCarIndex);
});

lastPageButton.addEventListener('click', () => {
    currentCarIndex = carsList.length - 1;
    changeCar(currentCarIndex);
});

changeCar(currentCarIndex);

function changeCar(id) {
    currentCarIndex.textContent = id;
    carModel.textContent = carsList[id].model;
    carEngine.textContent = carsList[id].engine;
    carEngineConsumption.textContent = carsList[id].consumption;
    carMaxSpeed.textContent = carsList[id].maxSpeed;
    carHp.textContent = carsList[id].hp;
    carEngineTorque.textContent = carsList[id].engineTorque;
    to100.textContent = carsList[id].to100;
    carImage.src = carsList[id].image;
}
