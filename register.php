<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Zilla - Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

h1 {
    margin: 0;
}

main {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #555;
}

    </style>
   
</head>
<body>
    <header>
        <h1>Fitness Zilla</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="classes.php">Classes</a></li>
                <li><a href="trainers.php">Trainers</a></li>
                <li><a href="membership.php">Membership</a></li>
                <li><a href="login.php">Log in</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form method="POST">
        <?php
    include 'connr.php';
    if (isset($_POST['submit'])){
      $Fullname=$_POST['Fullname']; 
      $Address=$_POST['Address']; 
      $Phonenumber=$_POST['Phonenumber']; 
      $Email=$_POST['Email']; 
      $DateofBirth=$_POST['DateofBirth'];
      $Gender=$_POST['Gender'];
      $Membership=$_POST['Membership'];
      $sql="INSERT INTO `pot`(`id`,`Fullname`,`Address`,`Phonenumber`,`Email`,`DateofBirth`,`Gender`,`Membership`) 
      VALUES (NULL, '$Fullname', '$Address', '$Phonenumber', '$Email', '$DateofBirth', '$Gender', '$Membership')"; 
 if($conn->query($sql)==True)
 {
   echo 'Record inserted';
 }
 else{
   echo "error:";
 }
 $conn->close();
     }
     ?>
            <div class="form-group">
                <label for="Fullname">FullName</label>
                <input type="text" id="Fullname" name="Fullname" required>
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" id="Address" name="Address" required>
            </div>
            <div class="form-group">
                <label for="Phonenumber">Phone Number</label>
                <input type="Phonenumber" id="Phonenumber" name="Phonenumber" required>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="Email" id="Email" name="Email" required>
            </div>
            <div class="form-group">
                <label for="DateofBirth">DateofBirth</label>
                <input type="DateofBirth" id="DateofBirth" name="DateofBirth" required>
            </div>
            <div class="form-group">
                <label for="Gender">Gender</label>
                <select id="Gender" name="Gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Membership">Select Membership</label>
                <select id="Membership" name="Membership" required>
                    <option value="basic">Basic Membership - Rs 3000</option>
                    <option value="zumbastic">Zumbastic Membership - Rs 5000</option>
                    <option value="yogastic">Yogastic Membership - Rs 5000</option>
                    <option value="elite">Elite Membership - Rs 8000</option>
                    <option value="sauna-steam">Sauna/Steam (per use) - Rs 1500</option>
                    <option value="platinum">Platinum Membership - Rs 12000</option>
                    <option value="private-trainer">Private Trainer - Rs 10000</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Register">
        </form>
        <div id="saved-message" style="display: none; color: green; margin-top: 10px;">Saved!</div>
    </main>
    <footer>
        <p>&copy; 2024 Fitness Zilla. All rights reserved.</p>
    </footer>
    <script>
        function showSavedMessage() {
            document.getElementById('saved-message').style.display = 'block';
            return true; 
        }
    </script>
</body>
</html>