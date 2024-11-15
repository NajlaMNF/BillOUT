<?php
    include '../../../components/header/header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calender</title>

        <link rel="stylesheet" type="text/css" href="../../../../assert/styles/calender.css">

    </head>
    <body>
    <div class="container">
        <div class="sidebar">
            <button id="upcomingBillsBtn">Upcoming Bills</button>
            <button id="dueBillsBtn">Due Bills</button>
            <button id="manageBillsBtn">Manage Bills</button>
            <ul id="eventList"></ul>
        </div>
        <div class="main">
            <h1 id="currentDate"></h1>
            <div id="calendar">
                <div class="day-name">Sunday</div>
                <div class="day-name">Monday</div>
                <div class="day-name">Tuesday</div>
                <div class="day-name">Wednesday</div>
                <div class="day-name">Thursday</div>
                <div class="day-name">Friday</div>
                <div class="day-name">Saturday</div>
            </div>
        </div>
    </div>

    <div id="eventModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add Event</h2>
            <label for="eventDate">Date:</label>
            <input type="date" id="eventDate" required>
            <label for="eventName">Event:</label>
            <input type="text" id="eventName" required>
            <button id="saveEventBtn">Save Event</button>
        </div>
    </div>

    <script>
            document.addEventListener('DOMContentLoaded', () => {
            const currentDateElement = document.getElementById('currentDate');
            const calendarElement = document.getElementById('calendar');
            const addEventBtn = document.getElementById('addEventBtn');
            const eventModal = document.getElementById('eventModal');
            const closeModal = document.querySelector('.close');
            const saveEventBtn = document.getElementById('saveEventBtn');
            const eventDateInput = document.getElementById('eventDate');
            const eventNameInput = document.getElementById('eventName');
            const eventListElement = document.getElementById('eventList');

            // Display current date
            const today = new Date();
            currentDateElement.textContent = today.toLocaleDateString();

            // Generate calendar
            function generateCalendar(month, year) {
                calendarElement.innerHTML = ''; // Clear existing calendar
                
                // Add day names
                const dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                dayNames.forEach(name => {
                    const dayNameElement = document.createElement('div');
                    dayNameElement.className = 'day-name';
                    dayNameElement.textContent = name;
                    calendarElement.appendChild(dayNameElement);
                });

                const firstDay = new Date(year, month, 1);
                const lastDay = new Date(year, month + 1, 0);
                const firstDayIndex = firstDay.getDay(); // Day of the week (0-6)

                // Fill in empty days before the first day of the month
                for (let i = 0; i < firstDayIndex; i++) {
                    const emptyElement = document.createElement('div');
                    emptyElement.className = 'day empty';
                    calendarElement.appendChild(emptyElement);
                }

                // Fill in days
                for (let i = 1; i <= lastDay.getDate(); i++) {
                    const dayElement = document.createElement('div');
                    dayElement.className = 'day';
                    dayElement.textContent = i;

                    // Event Listeners for days
                    dayElement.addEventListener('click', () => {
                        eventDateInput.value = `${year}-${String(month + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
                        eventModal.style.display = "block";
                    });

                    calendarElement.appendChild(dayElement);
                }
            }

            generateCalendar(today.getMonth(), today.getFullYear());

            // Add Event Modal
            addEventBtn.addEventListener('click', () => {
                eventModal.style.display = "block";
            });

            closeModal.onclick = () => {
                eventModal.style.display = "none";
            };

            window.onclick = (event) => {
                if (event.target === eventModal) {
                    eventModal.style.display = "none";
                }
            };

            saveEventBtn.addEventListener('click', () => {
                const eventDate = eventDateInput.value;
                const eventName = eventNameInput.value;

                if (eventDate && eventName) {
                    const eventItem = document.createElement('li');
                    eventItem.textContent = `${eventName} on ${new Date(eventDate).toLocaleDateString()}`;
                    eventListElement.appendChild(eventItem);

                    // Highlight the corresponding day on the calendar
                    const dayElements = document.querySelectorAll('.day');
                    dayElements.forEach((dayElement, index) => {
                        if (index + 1 === new Date(eventDate).getDate()) {
                            const eventLabel = document.createElement('div');
                            eventLabel.className = 'event';
                            eventLabel.textContent = eventName;
                            dayElement.appendChild(eventLabel);
                        }
                    });

                    // Clear inputs and close modal
                    eventDateInput.value = '';
                    eventNameInput.value = '';
                    eventModal.style.display = "none";
                }
            });
        });
    </script>

    </body>
</html> 
<div>
    <?php
        include '../../../components/footer/footer.php';
    ?>
</div>  