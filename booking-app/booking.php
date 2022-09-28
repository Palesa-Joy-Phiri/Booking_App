<!DOCTYPE html>

<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale= 1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> Laventure adventures </title>

    <!-- Css link -->
    <link rel= "stylesheet" href= "Booking-app/booking.css">

</head>

<!--Start of the body-->
<body>

    <nav>
    </nav>


    <form>
        <h1> Welcome to paradise, let't embark on this journey! </h1>

        <h3> Check availabilty </h3>

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
            <input class="cid" type="date" name="email" required="true"> <br>
        </div>

        <div>
            <label> Check-out date: </label>
            <input class="cod" type="date" name="email" required="true"> <br>
        </div>

        <div>
            <label> Number of nights: </label>
            <input class="non" type="number" min="1" required="true"> <br>
        </div>

        <div>
            <label> Number of guests: </label>
            <input class="nog" type="number" min="1" required="true"> <br>
        </div>

        <div>
            <label> Number of children: </label>
            <input class="noc" type="number" required="true"> </n>
        </div>

        <div>
            <label> Hotel: </label>
            <select class="hotel" type="text" name="hotel" placeholder="Select hotel" required="true">

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