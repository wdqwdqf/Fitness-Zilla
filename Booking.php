<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trainer Booking Form</title>
  <style>
    body {
      font-family: 'cursive';
      background:url("https://media.istockphoto.com/id/1361855796/photo/abstract-composition-with-connecting-dots-and-lines-and-triangles-blue-background-plexus.webp?b=1&s=170667a&w=0&k=20&c=39mbMZrzQ1v4yR_ATVGr0lYJTrVRkxKr6fFu4E55KYE=");
      background-position: center;
      background-size: cover;
      margin: 0;
      padding: 0;
      overflow: hidden;
    }
    .container {
      max-width: 600px;
      margin: 15px auto;
      padding: 20px;
    }
    @media(max-width: 600px) {
      body {
        background-size:contain;
      }
      .container{
        width: 340px;
      }
    }
    h1 {
      text-align: center;
      color: beige;
    }

    form {
      display: flex;
      flex-direction: column;
      background: transparent;
      border: 2px solid rgba(255, 255, 255, 0.2);
    }

    label {
      margin-bottom: 8px;
      color: lightgrey;
      font-weight:bold;

    }

    input,select {
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid blue;
      color: aqua;
      border-radius: 10px;
      font-size: 18px;
      background: transparent;
      backdrop-filter: blur(4px) saturate(100%);
    }

    input[type="submit"] {
      background-color: #000000;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #204d23;
    }
    .container option{
      background-color: rgb(55, 55, 113);
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
        background-color: #1E5966;
       }

        @media(max-width:600px) {
            .button {
        padding: 8px 16px;
        font-size: 14px;
         }
        }
  </style>
</head>

<body>
  <div class="container">
  <?php
    include 'trainer.php';
    if (isset($_POST['submit'])){
      $name=$_POST['name']; 
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $date=$_POST['date'];
      $time=$_POST['time'];
      $trainingtype=$_POST['trainingtype'];
      $sql="INSERT INTO `trainer` (`id`, `name`, `email`,`phone`,`date`,`time`,`trainingtype`)
       VALUES (NULL, '$name', '$email','$phone','$date','$time','$trainingtype')";
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
    <h1>Trainer Booking Form</h1>
    <form method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Phone:</label>
      <input type="number" id="phone" name="phone" required>

      <label for="date">Preferred Date:</label>
      <input type="date" id="date" name="date" required>

      <label for="time">time:</label>
      <input type="time" id="time" name="time" required>

      <label for="trainingtype">Training Type:</label>
      <select id="trainingtype" name="trainingtype" required>
        <option selected disabled value="">Choose...</option>
        <option>Sugam Singh [Head Instructor]</option>
        <option>Khagendra Oli [Yoga]</option>
        <option>Sujan Maharjan [Zumba]</option>
        <option>Sabin Bist [Private Trainer]</option>
        <option>Abinish Jaiswal [Private Trainer]</option>
      </select>
      <input type="submit" name="submit" value="Book Now">
      <div class="button-container">
        <a href="dist.php" class="button">Record Display</a>
</div>
    </form>
  </div>
</body>
</html>