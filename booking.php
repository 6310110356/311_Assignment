<?php

// Define variables for database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psu concert";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

// Check if form has been submitted
if (isset($_POST['submit'])) {

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $concert = $_POST['concert'];
    $num_tickets = $_POST['num_tickets'];

    // Prepare SQL statement
    $sql = "INSERT INTO bookings (name, email, concert, num_tickets) VALUES ('$name', '$email', '$concert', '$num_tickets')";
    // Execute SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PSU Music Event</title>
        <link rel="stylesheet" href="beautiful.css">
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.5.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.5.1/mapbox-gl.css' rel='stylesheet' />
        <style>
            #map {
                height: 300px;
                width: 100%;
                margin: 10% auto auto auto;
            }
        </style>
      </head>
      <body>
        <header>
            <nav>
                <ul>
                  <li><a href="ticket.php">   Home   |</a><a href="booking.php">|   Booking   |</a><a href="about.php">|    About   |</a><a href="contact.php">|   Contact  </a></li>
                </ul>
                
            </nav>
        </header>
    <main>
        <body>
            <h1>Concert Ticket Booking</h1>
                <form method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" required><br><br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" required><br><br>
                    <label for="concert">Concert</label>
                        <select id="concert" name="concert">
                        <option value="">--Select--</option>
                        <option value="PETER TOSH">PETER TOSH</option>
                        <option value="SISTER NANCY">SISTER NANCY</option>
                        <option value="ZIGGY MARLEY">ZIGGY MARLEY</option>
                    </select>
                    <label for="num_tickets">Number of tickets:</label>
                    <input type="number" name="num_tickets" min="1" max="5" required><br><br>
                    <input type="submit" name="submit" value="Book Tickets">
                </form>
                <div id='map'></div>
                <script>
                mapboxgl.accessToken = 'pk.eyJ1IjoiNjMxMDExMDA3NCIsImEiOiJjbGZkemx4bGEwazkzM3Jxc2hwdDlkeHdmIn0.Itd795e8dnRiINff3V8AtQ';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [100.6069, 7.1977], // set the center of the map to Songkhla
                    zoom: 10 // set the zoom level
                });
                var marker = new mapboxgl.Marker({ // create a marker object
                    color: "#FF0000", // set the marker color
                    draggable: true,
                    scale: 0.8,
                    rotation: 45,
                    anchor: 'bottom' // set the anchor point of the icon
                    })
                    .setLngLat([100.6069, 7.1977]) // set the marker position to Songkhla
                    .addTo(map); // add the marker to the map
                </script>
            </body>  
        </div>
        </form>
    </body>
    </main>
</html>