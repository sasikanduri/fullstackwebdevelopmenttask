<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Booking Form</title>
        <link rel="stylesheet" href="booking.css">
        <script type="text/javascript" lang="javascript" src="./responsiveRegistaration.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
       
    <body bgcolor="lightgreen">
        <h1>Booking Form</h1>
        <form method="post" action="booking_db.php">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <label for="fname">Your Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="dename" placeholder="Enter your name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="fname">Drivers Name:(pls type name corectly)</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="drname" placeholder="Enter driver name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Pick-up Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="address" id="address" cols="30" rows="10" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="city">City:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="city" name="city" maxlength="10" required>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="pincode">Area PIN:</label>
                </div>
                <div class="col-90">
                    <input type="number" id="pin" name="pin" maxlength="6" required>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="state">State:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="state" name="state" required>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="Routes" required >Route you want to go:</label>
                </div>
                <div class="col-90">
                    <select name="route" id="route">
                        <option value=" ">Select Route:</option>
                        <option value="r1">Route 1</option>
                        <option value="r2">Route 2</option>
                        <option value="r3">Route 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="date">date:</label>
                </div>
                <div class="col-90">
                    <input type="date" id="date" name="date" required>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="time">Start Time:</label>
                </div>
                <div class="col-90">
                    <input type="time" id="time" name="time" required>
                </div>
            </div>
            <div class="">
                <input type="submit" value="Book" required>
            </div>  
            <a href="dealers_states.php"><input type="submit" class="btn btn-primary float-right" value="HOME" ></a> 
        </div> 
        </form> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>