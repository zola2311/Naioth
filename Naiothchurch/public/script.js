document.addEventListener("DOMContentLoaded", function() {
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");
    const monthYear = document.getElementById("monthYear");
    const calendarDates = document.querySelector(".calendar-dates");

    const currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();

    function displayCalendar() {
        const firstDay = new Date(currentYear, currentMonth, 1);
        const lastDay = new Date(currentYear, currentMonth + 1, 0);

        monthYear.innerHTML = `${getMonthName(currentMonth)} ${currentYear}`;

        let dates = "";

        for (let i = 0; i < firstDay.getDay(); i++) {
            dates += `<div class="calendar-date"></div>`;
        }

        for (let i = 1; i <= lastDay.getDate(); i++) {
            let dateClass = "calendar-date";
            if (i === currentDate.getDate() && currentMonth === currentDate.getMonth() && currentYear === currentDate.getFullYear()) {
                dateClass += " calendar-date--active";
            }
            dates += `<div class="${dateClass}">${i}</div>`;
        }

        calendarDates.innerHTML = dates;
    }

    function updateCalendar(action) {
        if (action === "prev") {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
        } else if (action === "next") {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
        }

        displayCalendar();
    }

    function getMonthName(monthIndex) {
        const months = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];
        return months[monthIndex];
    }

    prevBtn.addEventListener("click", function() {
        updateCalendar("prev");
    });

    nextBtn.addEventListener("click", function() {
        updateCalendar("next");
    });

    displayCalendar();
});
