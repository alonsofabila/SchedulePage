<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--css link-->
    <link rel="stylesheet" href="./styles/style.css">

    <title>Horarios Aulas</title>
</head>
<body>

    <!--Encabezado-->
    <?php
        require_once "pageFiles/header.php"
    ?>

    <!--Horario-->
    <div class="container-fluid">
        <br>
        <h2 class="text-center text-white">Horarios Salones</h2>
        <br>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Hora</th>
                    <th scope="col">Lunes</th>
                    <th scope="col">Martes</th>
                    <th scope="col">Miércoles</th>
                    <th scope="col">Jueves</th>
                    <th scope="col">Viernes</th>
                    <th scope="col">Sábado</th>
                </tr>
            </thead>
            <tbody id="schedule-data">
            </tbody>
        </table>
    </div>

    <script>
        const scheduleData = {
            "times": [
                "7:00",
                "7:30",
                "8:00",
                "8:30",
                "9:00",
                "9:30",
                "10:00",
                "10:30",
                "11:00",
                "11:30",
                "12:00",
                "12:30",
                "13:00",
                "13:30",
                "14:00",
                "14:30",
                "15:00",
                "15:30",
                "16:00",
                "16:30",
                "17:00",
                "17:30",
                "18:00",
                "18:30",
                "19:00",
                "19:30",
                "20:00",
                "20:30",
                "21:00",
                "21:30",
                "22:00"
            ],
            "days": [
                {
                    "day": "Lunes",
                    "schedule": [
                        {
                            "time": "16:00",
                            "class": "Calculo Multimalvado",
                            "nrc":  "50760",
                            "duration": 90
                        },
                        {
                            "time": "17:30",
                            "class": "Redes Avanzadas",
                            "nrc":  "50304",
                            "duration": 90
                        },
                        {
                            "time": "19:00",
                            "class": "programacion para internet",
                            "nrc":  "50310",
                            "duration": 90
                        }
                    ]
                },
                {
                    "day": "Martes",
                    "schedule": [
                        {
                            "time": "11:30",
                            "class": "Dinamica",
                            "nrc":  "50576",
                            "duration": 90
                        },
                        {
                            "time": "13:00",
                            "class": "Dinamica",
                            "nrc":  "50576",
                            "duration": 90
                        },
                        {
                            "time": "17:30",
                            "class": "Ingenieria en software II",
                            "nrc":  "50294",
                            "duration": 90
                        },
                        {
                            "time": "19:00",
                            "class": "Ingenieria en software II",
                            "nrc":  "50294",
                            "duration": 90
                        }
                    ]
                },
                {
                    "day": "Miercoles",
                    "schedule": [
                        {
                            "time": "16:00",
                            "class": "Calculo Multimalvado",
                            "nrc":  "50760",
                            "duration": 90
                        },
                        {
                            "time": "17:30",
                            "class": "Redes Avanzadas",
                            "nrc":  "50304",
                            "duration": 90
                        },
                        {
                            "time": "19:00",
                            "class": "programacion para internet",
                            "nrc":  "50310",
                            "duration": 90
                        }
                    ]
                },
                {
                    "day": "Jueves",
                    "schedule": [
                        {
                            "time": "11:30",
                            "class": "Practica de dinamica",
                            "nrc":  "50578",
                            "duration": 90
                        },
                        {
                            "time": "13:00",
                            "class": "Dinamica",
                            "nrc":  "50576",
                            "duration": 90
                        },
                        {
                            "time": "17:30",
                            "class": "Redes Avanzadas",
                            "nrc":  "50304",
                            "duration": 90
                        },
                        {
                            "time": "19:00",
                            "class": "Ingenieria en software II",
                            "nrc":  "50294",
                            "duration": 90
                        }
                    ]
                },
                {
                    "day": "Viernes",
                    "schedule": [
                        {
                            "time": "13:00",
                            "class": "Color",
                            "nrc":  "51498",
                            "duration": 90
                        },
                        {
                            "time": "14:30",
                            "class": "Color",
                            "nrc":  "51498",
                            "duration": 90
                        },
                        {
                            "time": "16:00",
                            "class": "Calculo Multimalvado",
                            "nrc":  "50760",
                            "duration": 90
                        },
                        {
                            "time": "19:00",
                            "class": "programacion para internet",
                            "nrc":  "50310",
                            "duration": 90
                        }
                    ]
                },
                {
                    "day": "Sabado",
                    "schedule": []
                },
            ]
        };


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
    </script>

    <!--Bootstrap script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
