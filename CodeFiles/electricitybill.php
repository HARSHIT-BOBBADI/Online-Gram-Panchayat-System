<!DOCTYPE html>
<html>
  <head>
    <title>Electricity Bill Payment</title>
<style>
      /* CSS styles for the page */
      body {
      background-image:url("https://www.power-technology.com/wp-content/uploads/sites/21/2014/08/Image-3-Uri-II-Hydroelectric-Project.jpg");
        background-repeat:no-repeat;
        background-size:cover;
        max-width:50%;
        background-color: #f1f1f1;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }

      h1 {
        color:white;
        font-size: 36px;
        margin: 40px 0;
        text-align: center;
      }

      form {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        margin: 0 auto;
        max-width: 600px;
        padding: 40px;
      }

      label {
        display: block;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
      }

      input[type="text"] {
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        font-size: 16px;
        padding: 10px;
        width: 100%;
      }

      input[type="submit"] {
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        color: #fff;
        cursor: pointer;
        font-size: 18px;
        padding: 10px;
        transition: background-color 0.3s ease;
        width: 100%;
      }

      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
    </style>
  </head>
  <body>
    <h1>Electricity Bill Payment</h1>
    <form action="process_payment_el.php" method="POST">
      <img src="https://d29fhpw069ctt2.cloudfront.net/vector/6622/preview/preview-1400x1392.jpg" alt="Phone" style="display: block; margin: 40px auto; max-width: 300px;">
      
      <label for="email">Enter your email:</label>
      <input type="text" id="email" name="email" ><br><br>


      <label for="amount">Amount to be paid:</label>
      <input type="text" id="amount" name="amount" value="<?php echo rand(100, 1000); ?>"><br><br>
      <input type="submit" value="Pay Now">
    </form>
  </body>
</html>

