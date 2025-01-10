<!DOCTYPE html>
<html>
<head>
    <title>Navigation Buttons</title>
    <style>
      body {
        height:1000px;
        background-image: url('assets/img/chefs-bg.jpg');
        background-repeat: no-repeat; 
        background-position: center; 
        background-size: cover; 
      }
  
      h1 {
        text-align: center;
        color: black; /* Text color */
        font-size: 36px; /* Adjust font size as needed */
        font-family: Arial, sans-serif; /* Specify font family */
        margin-top: 100px; /* Adjust top margin as needed */
      }
  
      .button-container {
        text-align: center;
        margin-top: 100px; /* Adjust top margin as needed */
      }

      .button-container form {
          display: inline-block;
          margin-right: 10px;
      }

      .button-container form:last-child {
          margin-right: 0;
      }

      .button-container button {
          padding: 15px;
          background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black color */
          color: #fff;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }

      .button-container button:hover {
          background-color: rgba(52, 152, 219, 0.8); /* Slightly less transparent blue color on hover */
      }
    </style>
</head>
<body>
  
<h1>ADMIN PAGE</h1>

<div class="button-container">
    <form method="post" action="booking.php">
        <button type="submit" name="add_item" value="1">Customer Bookings</button>
    </form>

    <form method="post" action="contact.php">
        <button type="submit" name="add_item" value="1">Feedback</button>
    </form>

    <form method="post" action="menu.php">
        <button type="submit" name="add_item" value="1">Menu</button>
    </form>

    <form method="post" action="logininfo.php">
        <button type="submit" name="add_item" value="1">Login Information</button>
    </form>

    <form method="post" action="rest_table_data.php">
        <button type="submit" name="add_item" value="1">Table Booking Info</button>
    </form>
</div>

<!-- Second row for "Go to Website" button -->
<div class="button-container">
    <form method="post" action="index1.php">
        <button type="submit" name="add_item" value="1">Go to Website</button>
    </form>
</div>
   

</body>
</html>
