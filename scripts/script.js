fetch('./json/data.json')
.then(response => response.json())
.then(scheduleData => {

    const scheduleTableBody = document.getElementById("schedule-data");
  
    scheduleData.times.forEach(time => {
                  
        const row = document.createElement("tr");
        const timeCell = document.createElement("td");
        timeCell.textContent = time;
        row.appendChild(timeCell);
      
        scheduleData.days.forEach(day => {
            
            const daySchedule = day.schedule.find(item => item.time === time);
      
            const classCell = document.createElement("td");
            classCell.textContent = daySchedule ? daySchedule.class : "";
            row.appendChild(classCell);
          
        });
      
        scheduleTableBody.appendChild(row);
      
    });

})

