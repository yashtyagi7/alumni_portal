<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'link.php'; ?>
    <title>Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Dw8v8eKphX2z1RtkZU5G3Xt7B4NHtjwZs3bfsTlE2tSS1ySUKJUwNpU/5G/qCXFzgXwNDTSG9MjKJ6y1NbBmLQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1100px;
        margin: 20px auto;
    }

    .calendar-container {
        flex: 0 0 70%;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 20px;
    }

    .calendar-header {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
        text-align: center;
    }

    .calendar-header h1 {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        opacity: 1;
        transition: opacity 2s ease-out;
    }

    .calendar {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
        opacity: 0;
        transition: opacity 1s ease-in;
    }

    .card {
        background-color: #fff;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }

    .card-header h3 {
        margin: 0;
        font-size: 1.5rem;
        color: #333;
    }

    .card-date {
        font-size: 1.2rem;
        color: #666;
    }

    .event {
        margin-bottom: 10px;
        padding: 10px;
        background-color: #f1f1f1;
        border-left: 4px solid #e67e22;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        position: relative;
        /* Added for image overlay */
    }

    .event h4 {
        margin: 0;
        font-size: 1.2rem;
        color: #333;
    }

    .event p {
        margin: 5px 0;
        color: #666;
    }

    .event img {
        width: 100%;
        /* Adjust as needed */
        height: 150px;
        /* Adjust as needed */
        object-fit: cover;
        /* Maintain aspect ratio and cover container */
        border-radius: 5px;
        margin-bottom: 10px;
        transition: transform 0.3s ease;
        /* Smooth transition on hover */
    }

    .event:hover img {
        transform: scale(1.1);
        /* Zoom effect on hover */
    }

    .event:hover {
        background-color: #e0e0e0;
    }

    .zoomed-in {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1000;
        overflow: auto;
    }

    .zoomed-in img {
        max-width: 80%;
        max-height: 80%;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .zoomed-in img:hover {
        transform: scale(1.1);
    }

    .previous-button-container {
        flex: 0 0 25%;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .previous-button-container p {
        font-size: 1.2rem;
        margin-bottom: 10px;
        color: #555;
    }

    .previous-button {
        display: block;
        width: 100%;
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .previous-button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <div class="calendar-container">
            <div class="calendar-header">
                <h1 id="calendarYear">CALENDAR FOR PREVIOUS YEAR</h1>
            </div>

            <div class="calendar">
                <!-- Placeholder for calendar months with events -->
                <?php
                // Dummy data for events (replace with actual data retrieval)
                $currentYear = date('Y');
                $eventsData = [
                    '2024-01-01' => [
                        'title' => 'New Year\'s Day',
                        'time' => '10:00 AM - 12:00 PM',
                        'description' => 'Celebrate the start of the new year!',
                        'image' => 'images/4.jpg' // Add image URL here
                    ],
                    '2024-02-14' => [
                        'title' => 'Valentine\'s Day',
                        'time' => '2:00 PM - 4:00 PM',
                        'description' => 'Celebrate love and affection.',
                        'image' => 'path_to_image.jpg' // Add image URL here
                    ],
                    '2024-03-17' => [
                        'title' => 'St. Patrick\'s Day',
                        'time' => 'All day',
                        'description' => 'Celebrate Irish culture and heritage.',
                        'image' => 'path_to_image.jpg' // Add image URL here
                    ],
                    // Add more events as needed
                ];

                // Function to render events for a specific date
                function renderEvents($date, $eventsData)
                {
                    $key = date("Y-m-d", strtotime($date));
                    if (array_key_exists($key, $eventsData)) {
                        $event = $eventsData[$key];
                        $eventTitle = $event['title'];
                        $eventTime = $event['time'];
                        $eventDescription = $event['description'];
                        $eventImage = $event['image'];

                        echo "<div class=\"event\" data-date=\"$key\">
                                <img src=\"$eventImage\" alt=\"$eventTitle\">
                                <h4>$eventTitle</h4>
                                <p>$eventTime</p>
                                <p>$eventDescription</p>
                              </div>";
                    }
                }

                // Generate cards for each month and day
                for ($month = 1; $month <= 12; $month++) {
                    echo "<div class=\"card\">";
                    echo "<div class=\"card-header\">
                            <h3>" . date("F", mktime(0, 0, 0, $month, 1, $currentYear)) . "</h3>
                          </div>";
                    // Render events for each day
                    for ($day = 1; $day <= 31; $day++) { // Assuming maximum of 31 days in any month
                        $date = date("Y-m-d", mktime(0, 0, 0, $month, $day, $currentYear));
                        renderEvents($date, $eventsData);
                    }
                    echo "</div>";
                }
                ?>
            </div>
        </div>

        <div class="previous-button-container">
            <p>To view the present year calendar, press this button:</p>
            <button class="previous-button" onclick="window.location.href='events.php'">Present Year</button>
        </div>
    </div>

    <script>
    // Fade out animation for the calendar header text
    setTimeout(function() {
        document.querySelector('.calendar-header h1').style.opacity = '0';
        document.querySelector('.calendar').style.opacity = '1';
    }, 2000); // 2000 milliseconds = 2 seconds
    </script>

</body>

</html>