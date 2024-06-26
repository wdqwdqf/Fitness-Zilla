<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Plan Form</title>
    <style>
        body {
            font-family: 'cursive';
            background-image: url("./Image/ai.webp");
            background-position: center;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .membership-form{
            justify-content: center;
            background-image: url("Image/OIG3.jpeg");
            background-position-x: center;
            background-size: cover;
            width: 50%; 
            height: 60vh;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(253, 7, 7, 0.69);
        }
        .membership-form h1{
            color: red;
        }
        .text{
            width: 100%;
            box-sizing: border-box;
        }
        #membership {
            width: 70%; 
            font-size: large;
            box-sizing: content-box;
        }
        input, select {
            width: 50%;
            padding: 17px;
            margin-bottom: 16px;
        }

        .type input {
            width: 50%;
            height: 5vh;
            background-color: blue;
            border-color: black;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .type input:hover {
            background-color: #09520e;
        }

        .button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: black;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
     }

       .button:hover {
        background-color: #500001;
       }

        @media(max-width:600px) {
            .button {
        padding: 8px 16px;
        font-size: 14px;
         }
            body {
            font-family: 'cursive';
            }
            .membership-form{
            background-position: center;
            background-size: cover;
            width: 90%; 
            height: 40vh;
            border-radius: 10px;
            margin: 10px;
            padding: 10px;
            box-shadow: rebeccapurple;
            }
        #membership {
            width: 95%; 
            font-size: medium;
            box-sizing: content-box;
        }
        input, select {
            width: 70%;
            padding: 8px;
            margin-bottom: 6px;
        }

        .type input {
            width: 50%;
            padding: 10px 20px;
            border-radius: 5px;
            background color: blue;
        }
        .type input:hover {
            background-color: #0d3110;
        }
        
}       
    </style>
</head>
<body>
    <div class="membership-form">
    <?php
    include 'member1.php';
    if (isset($_POST['submit'])){
      $Name=$_POST['Name']; 
      $Email=$_POST['Email'];
      $Phone=$_POST['Phone'];
      $membership=$_POST['membership'];
      $sql="INSERT INTO `member` (`id`, `Name`, `Email`,`Phone`,`membership`) VALUES (NULL, '$Name', '$Email','$Phone','$membership')";
if($conn->query($sql)==True)
{
  echo 'new record inserted';
}
else{
  echo "error:";
}
$conn->close();
    }
    ?>
        <h1>Membership Form</h1>  
      <div class="text">
      <form method="post">
            <input type="text" id="Name" name="Name" placeholder="Name" required>
            <input type="email" id="Email" name="Email" placeholder="Email" required>
            <input type="number" id="Phone" name="Phone" placeholder="Phone Number" required>
            <select id="membership" name="membership"> 
                <option value="select">:>---------Select---------<:</option>
                <option value="basic">Basic Membership - Rs 3000 per month</option>
                <option value="zumbastic">Zumbastic Membership - Rs 5000 per month</option>
                <option value="yogastic">Yogastic Membership - Rs 5000 per month</option>
                <option value="elite">Elite Membership - Rs 8000 per month</option>
                <option value="sauna-steam">Sauna/Steam - Rs 1500 per use</option>
                <option value="platinum">Platinum Membership - Rs 12,000 per month</option>
                <option value="private-trainer">Private Trainer - Rs 10,000 per month</option>
            </select>
           <br><br>
           <div class="type">
            <input type="submit" name="submit" value="Submit">
            <div class="button-container">
    <div class="kp">
        <a href="dism.php" class="button">Record Display</a>
    </div>
</div>
        </div>
</div>
</form>
    <script>
        function submit{
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;

            if (name.trim() === '' || email.trim() === '' || phone.trim() === '') {
                alert('Please fill in all required fields.');
            } else {
                window.location.href = 'index.php';
            }
        }
    </script>
</body>
</html>