<?php
// Include the database connection script
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["email"];
    $roomType = $_POST["roomType"];
    $roomNumber = $_POST["roomNumber"];
    $startTime = $_POST["startTime"];
    $endTime = $_POST["endTime"];

    // Insert data into the database
    $sql = "INSERT INTO bookings (email, room_type, room_number, start_time, end_time) VALUES ('$email', '$roomType', '$roomNumber', '$startTime', '$endTime')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel Room Management Admin App    </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./Styleh.css">
    <link rel="stylesheet" href="./until.css">
</head>

<body>

        <header>
            <div class="container">
                <nav id="main-nav" class="flex items-center justify-between">
                    <div class="left flex items-center">
                        <div class="branding">
                            <img src="V.jpg" alt="" width="100px">
                        </div>
                        <div>
                            <a href="#">Home</a>
                            <a href="#about">About</a>
                            <a href="#bookings">Bookings</a>
                            <a href="#work">Work</a>
                            <a href="#blog">Blog</a>
                        </div>
                    </div>
                    <div class="right">
                        <button class="btn btn-primary">Signup/Login</button>
                    </div>
                </nav>
                <div class="hero flex items-center justify-between">
                    <div class="left flex-1 flex justify-center">
                        <img src="hotel.jpg" alt="">
                    </div>
                    <div class="right flex-1">
                        <h6>Hey! People's</h6>
                        <h1>THE VANTAGE HOTEL <span>
                            <h6>Experience the ultimate in relaxation.</h6></span></h1></span></h1>
                        <p>Welcome to V Hotel, where luxury meets comfort, and every detail is crafted to ensure a memorable stay. 
                            Our  hotel is located in the heart of the city,
                            providing easy access to key attractions, business districts,  and vibrant entertainment.
                            Witness the best of the industrial and cultural world and indulge in our world-class services at  our V  Hotel.
                        </p>
                       <center> <h6>EXPERIENCE SERENITY</h6></center>
                        <p>Work, play, create, explore. BE WHAT YOU SHOULD BE.</p>
                        <h6>Rooms are Available - CHECK</h6>
                        <div>
                            <a href="https://www.vfivehotel.com/" target="_blank"><button class="btn btn-secondary" >  WEBSITE</button></a>  
                        </div>
                    </div>
                </div>
            </div>
        </header>

        
<center>            <section id="about" class="about">
    <center><h1>About <span>Photos</span></h1></center>
    <div class="container about-inner-wrap">
        <div class="image-container">
            <img src="room1.avif" alt="Image 1" width="300px" height="250px">
            <img src="room2.avif" alt="Image 2" width="300px" height="250px">
            <img src="roo4.avif" alt="Image 3" width="300px" height="250px">
            <img src="room3.avif" alt="Image 4" width="300px" height="250px">
            <img src="roo7.avif" alt="Image 5" width="300px" height="250px">
            <img src="room5.avif" alt="Image 6" width="300px" height="250px">
            <img src="room8.avif" alt="Image 7" width="300px" height="250px">
            <img src="room10.avif" alt="Image 8" width="300px" height="250px">
            <img src="res.avif" alt="Image 9" width="300px" height="250px">
            <img src="ref.avif" alt="Image 10" width="300px" height="250px">

        </div>
        <div class="content"></center>
                <center>
                    <h2>Diverse Rooms, Unique Pricing:</h2>
                    <ul>
                        Experience luxury in Room A at ₹100 per hour
                        Embrace comfort in Room B at ₹80 per hour
                        Enjoy affordability in Room C at ₹50 per hour
                    </ul>
                
                    <h2>Effortless Booking Experience:</h2>
                    <ul>
                        Seamlessly reserve rooms with our admin-friendly app
                        Prices dynamically update with user details and booking adjustments
                    </ul>
                
                    <h2>Flexible Edits, Varied Refunds:</h2>
                    <ul>
                        Dynamic edits with price confirmation for tailored reservations
                        <p>Cancellations: Full refund for cancellations over 48 hours, 50% refund between 24-48 hours, Admin discretion within 24 hours</p>
                    </ul>
                
                    <h2>Intuitive Viewing with Filters:</h2>
                    <ul>
                        Explore bookings effortlessly on our dedicated view page
                        Use filters for room type, number, start time, and end time to enhance administrative oversight.
                    </ul>
                
                    <div class="content">
            </section>
        

        </section><center>
            <section id="about" class="about">
                <div class="container flex items-center">
                    <div class="flex-1">
                    </div>
                    
                        <div class="social">
                            <a href="https://www.freepnglogos.com/pics/logo-ig-png" title="Image from freepnglogos.com"><img src="https://www.freepnglogos.com/uploads/logo-ig-png/logo-ig-instagram-windows-phone-all-you-need-know-9.png" width="200" alt="logo ig, instagram windows phone all you need know" /></a>
                            <a href="https://www.freepnglogos.com/pics/linkedin-logo-png" title="Image from freepnglogos.com"><img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png" width="200" alt="linkedin social media logo" /></a>
                            <a href="https://www.freepnglogos.com/pics/512x512-logo" title="Image from freepnglogos.com"><img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" width="200" alt="512x512 logo github icon" /></a>
                        </div>
                </div>
            </section>
        </center>
        <section id="bookings" class="bookings">
            <div class="container">
                <h1 class="section-heading"><span>Our </span>Bookings</h1>
                <!-- Form for booking -->
                <form id="bookingForm" action="booking.php" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" required><br>
                    <label for="roomType">Room Type:</label>
                    <select id="roomType">
                        <option value="A">Room A</option>
                        <option value="B">Room B</option>
                        <option value="C">Room C</option>
                    </select><br>
                    <label for="roomNumber">Room Number:</label>
                    <input type="number" id="roomNumber" required><br>
    
                    <label for="startTime">Start Time:</label>
                    <input type="datetime-local" id="startTime" required><br>
                    <label for="endTime">End Time:</label>
                    <input type="datetime-local" id="endTime" required><br>
        
                    <center><button type="submit" onclick="bookRoom()">Book Room</button></center>
                </form>
                <center><p>we provide our best to the customers.</p></center><br>
                
                        <h1 class="section-heading"><span>Our </span>Facilities</h1><br>
                        <div class="image-container">
                            <img src="wifi.jpg" alt="Image 13" width="290px" height="350px">
                            <img src="parking.jpg" alt="Image 14" width="250px" height="350px">
                            <img src="service.jpg" alt="Image 15" width="290px" height="350px">
                            <img src="ac.jpg" alt="Image 16" width="250px" height="350px"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="freelancer">
            <h1>	Discover Peaceful Serenity.</h1>
            <p> Wishing you a journey filled with comfort, luxury, and unforgettable memories. Your adventure begins with us – enjoy every moment of your stay!"</p>
            <button class="btn btn-primary">GALLERY</button>
        </section>
        <section class="reviews">
            <div class="container">
                <h1 class="section-heading"><span>Our</span>Guests</h1>
                <p>Great service creates great guest advocates for your hotel. </p>
                <div class="slider">
                    <div class="slide">
                        <img src="gusets.jpg" alt=""width="300px" height="250px">
                        <p>“family travelers” doesn’t just refer to couples or single parents with children.
                             It also includes those traveling with grandparents, uncles, aunts and cousins. </p>
                        <span>- Family Travelers </span>
                    </div>
                    <div class="slide">
                        <img src="g2.jpg" alt=""width="300px" height="250px">
                        <p>Business travelers are — not so surprisingly — busy. While they may want to enjoy the location they find themselves in,
                             they usually have little time to do so because their main focus is their job.
                             Also, due to the fact that the traveler is generally not the one paying for their stay</p>
                        <span>- Business Travelers </span>
                    </div>
                    <div class="slide">
                        <img src="g3.jpg"alt=""width="300px" height="250px">
                        <p>These types of travelers expect high-quality service and are willing to spend more money in order to get it. For luxury travelers,
                             the most important thing is comfort, and they often do ample research in advance before selecting a property at which to stay. </p>
                        <span>- Luxury Travelers</span>
                    </div>
                </div>
                <div class="slider-dots"></div>
            </div>
        </section>

        <section id="work" class="work">
            <div class="container">
                <h1 class="section-heading"><span> LIFE</span> AT V HOTEL</h1>
                <p></p>

                <div class="card-wrapper">
                    <div class="card">
                        <div class="overlay">
                            <span>Category</span>
                        
                        </div>
                        <img src="suites.jpg" alt="">
                    </div>
                    
                </div>
            </div>
        </section>
        
        <section class="contact">
            <div class="container">
                <h1 class="section-heading">Contact <span>Us</span></h1>
                <p>We provide a peace and hygienic stay.</p>
                <div class="card-wrapper">
                    <div class="card">
                        <img src="C:\Users\91810\Desktop\adminpage\call.avif" alt=""alt=""width="5px"height="2px">
                        <h1>Call Us On</h1>
                        <h5>+91-8106361089</h5>
                    </div>
                    <div class="card">
                        <img src="./images/msg.svg" alt=""width="5px"height="2px">
                        <h1>Email Us At</h1>
                        <h5>customerservice@vantagehotel.com</h5>
                    </div>
                    <div class="card">
                        <img src="./images/map.svg" alt="">
                        <h1>Visit Us</h1>
                        <h6>Apollo Bandar, Colaba, Mumbai, Maharashtra 40000,INDIA</h6>
                    </div>

                </div>

                <form action="">
                    <div class="input-wrap">
                        <input type="text" placeholder="Your Name *">
                        <input type="email" placeholder="Your Email *">
                    </div>
                    <div class="input-wrap-2">
                        <input type="text" placeholder="Your Subject...">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message..."></textarea>
                    </div>
                    <div class="btn-wrapper">
                        <button class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <footer>
            <img class="footer-logo" src="C:\Users\91810\Desktop\adminpage\V.jpg" alt=""width="5px"height="150px">
            
            <div class="cp">
                2023@ Bhavana gadde
            </div>
        </footer>
    </div>
</body>

</html>