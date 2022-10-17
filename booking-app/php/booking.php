<!DOCTYPE html>

<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale= 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> Laventure adventures - Booking </title>

    <!-- Css link -->
    <link rel= "stylesheet" type="text/css" href="/BOOKING_APP/booking-app/css/booking.css">

</head>

<!--Start of the body-->
<body>

    <nav>
    </nav>

    <div>
        <img src="../images/Black & White Minimalist Business Logo.png">
    </div>
    
    <form action="php/process.php" method="post">
        <h1> Welcome to paradise, let't embark on this journey! </h1>

        <h2> Check availabilty </h2>

        

        <div>
            <label> Name: </label>
            <input class="name" type="text" name="name" placeholder="Name" required="true"> <br>
        </div>

        <div>
            <label> Surname: </label>
            <input class="surname" type="text" name="surname" placeholder="Surname" required="true"> <br>
        </div>

        <div>
            <label> Email: </label>
            <input class="email" type="email" name="email" placeholder="Email Address" required="true"> <br>
        </div>

        <div>
            <label> Check-in date: </label>
            <input class="cid" type="date" name="checkInDate" required="true"> <br>
        </div>

        <div>
            <label> Check-out date: </label>
            <input class="cod" type="date" name="checkOutnDate" required="true"> <br>
        </div>

        <div>
            <label> Number of nights: </label>
            <input class="non" type="number" name="nrNights" min="1" required="true"> <br>
        </div>

        <div>
            <label> Number of guests: </label>
            <input class="nog" type="number" name="nrGuests" min="1" required="true"> <br>
        </div>

        <div>
            <label> Number of children: </label>
            <input class="noc" type="number" name="nrChildren" required="true"> <br>
        </div>

        <div>
            <label> Hotel: </label>
            <select class="hotel" type="text" name="hotel" placeholder="Select hotel" required="true">

                <br>
                <option> Apple town</option>
                <option> BonCourage Lava</option>
                <option> City Lodge at PTA</option>
                <option> Garden Court Sandton </option>
                <option> Golden Mile Hotel</option>
                <option> Graskop Harries Guesthouse</option>
                <option> Pink Lagoon Resort</option>
                <option> Riverside Sun</option>
                <option> The Palace of the Lost City</option>
                <option> The Houghton Hotel</option>
                <option> Warmbaths</option>
                <option> Zebra Plain Getaway</option>

            </select> <br>
        </div>

        <div>
            <button class="compare" type="submit">
                    <a href="#">
                    Compare
                    </a>
            </button>
        </div>

    </form>




</body>

</html>