const dp = new DayPilot.Calendar("calendar");

dp.locale = "es-mx";
dp.viewType = "Week";
dp.headerDateFormat = "dddd";
dp.firstDayOfWeek = 1;
dp.cellHeight = 30;
dp.businessBeginsHour = 7;
dp.businessEndsHour = 22;
dp.dayBeginsHour = 7;
dp.dayEndsHour = 22;
dp.allowEventOverlap = false;
dp.timeRangeSelectedHandling = "Disabled";
dp.eventDeleteHandling = "Disabled";
dp.eventMoveHandling = "Disabled";
dp.eventResizeHandling = "Disabled";
dp.eventClickHandling = "Disabled";
dp.eventHoverHandling = "Disabled";

// Cargar los datos del archivo JSON y agregarlos a la lista de eventos del calendario
fetch("./json/data2.json")
    .then(response => response.json())
    .then(data => {
        const events = [];
        data.events.forEach(function(event) {
            // Cantidad de semanas en que se debe repetir el evento
            const weeks = 4;

            // Fecha de inicio del evento
            const startDate = new DayPilot.Date(event.start);

            // Generar eventos para cada semana
            for (let i = 0; i < weeks; i++) {
                const newEvent = {
                    start: startDate.addDays(i * 7 + (event.dayOfWeek - startDate.getDay())),
                    end: startDate.addDays(i * 7 + (event.dayOfWeek - startDate.getDay())).addMinutes(event.duration),
                    text: event.text
                };
                events.push(newEvent);
            }
        });
        dp.events.list = events;
        dp.update();
    })
    .catch(error => console.error(error));

dp.init();
