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
  <title>Concert Ticket Booking</title>
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
    <div class="ticket ticket-1">
  
      <div class="date">
        <span class="day">31</span>
        <span class="month-and-time">OCT</br><span class="small">8PM</span></span>
      </div>
    
      <div class="artist">
        <span class="name">PETER TOSH</span>
        </br>
    <span class="live small">LIVE</span>
      </div>
    
      <div class="location">
        <span>KINGSTON TOWN</span>
        </br>
        <span class="small"><span>NANCY'S PUB</span>
      </div>
    
      <div class="rip">
      </div>
      
      <div class="cta">
        <button class="buy" onclick="window.location.href='booking.php'">GRAB A TICKET</button>
      </div>
    
    </div>
    
    <div class="ticket ticket-2">
      
      <div class="date">
        <span class="day">24</span>
        <span class="month-and-time">JAN</br><span class="small">8PM</span></span>
      </div>
    
      <div class="artist">
        <span class="name">SISTER NANCY</span>
        </br>
    <span class="live small">LIVE</span>
      </div>
    
      <div class="location">
        <span>GOLDEN GROVE</span>
        </br>
        <span class="small"><span>SIZZLA'S DUB PLACE</span>
      </div>
    
      <div class="rip">
      </div>
      
      <div class="cta">
        <button class="buy" onclick="window.location.href='booking.php'">GRAB A TICKET</button>
      </div>
    </div>

    <div class="ticket ticket-3">
  
      <div class="date">
        <span class="day">15</span>
        <span class="month-and-time">APR</br><span class="small">7PM</span></span>
      </div>

      <div class="artist">
        <span class="name">ZIGGY MARLEY</span>
        </br>
    <span class="live small">LIVE</span>
      </div>

      <div class="location">
        <span>PORT ANTONIO</span>
        </br>
        <span class="small"><span>BLUE MOUNTAIN THEATER</span>
      </div>

      <div class="rip">
      </div>
      
      <div class="cta">
        <button class="buy" onclick="window.location.href='booking.php'">GRAB A TICKET</button>
      </div>

    </div>      
  </main>
  <footer>
    <p>2023 PSU Music Event</p>
  </footer>
</body>
</html>
