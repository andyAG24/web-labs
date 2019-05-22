function getRemainingTime(endDate) {
    var diffTime = Date.parse(endDate) - Date.parse(new Date());
    var seconds = Math.floor((diffTime / 1000) % 60);
    var minutes = Math.floor((diffTime / 1000 / 60) % 60);
    var hours = Math.floor((diffTime / (1000 * 60 * 60)) % 24);
    var days = Math.floor(diffTime / (1000 * 60 * 60 *24));
    return {
        'total': diffTime,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

async function initTimer(className, endDate) {

    let timeInterval = setInterval(await function () {
        let timerElement = document.getElementsByClassName(className)[0];
        console.log(timerElement);
        let remainingTime = getRemainingTime(endDate);
        
        // timer.innerHTML = `${remainingTime.days}:${remainingTime.hours}:${remainingTime.minutes}:${remainingTime.seconds}`;
        timerElement.textContent = `${remainingTime.hours}:${remainingTime.minutes}:${remainingTime.seconds}`;
        console.log(`${remainingTime.days}:${remainingTime.hours}:${remainingTime.minutes}:${remainingTime.seconds}`);
        if (remainingTime.total) {
            clearInterval(timeInterval);
        }
        timerElement.onchange = initTimer(className, endDate);
    }, 1000);
    
}

let startDate = new Date();
let endDate = new Date('2019-05-23T15:10');

initTimer('countdown-timer', endDate);
