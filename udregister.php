<?php
include("Database.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM details WHERE id='$id'";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #004042;
        margin: 0;
        padding: 0;
    }
    
    .container {
        max-width: 500px;
        margin: 50px auto;
        background-color: #724724;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
        text-align: center;
    }
    
    label {
        font-weight: bold;
    }
    
    input[type="text"],
    input[type="number"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 8px;
        margin: 6px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    input[type="submit"] {
        background-color: #000E43;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Update Form</h2>
        <form method="post">
            <label for="Firstname">Firstname:</label>
            <input type="text" id="Firstname" name="Firstname" value="<?php echo $result['Firstname'];?>" required>
            
            <label for="Lastname">Lastname:</label>
            <input type="text" id="Lastname" name="Lastname" value="<?php echo $result['Lastname'];?>" required>

            <label for="Password">Password:</label>
            <input type="text" id="Password" name="Password" value="<?php echo $result['Password'];?>" required>

            <label for="phone">Phone:</label>
            <input type="number" id="phone" name="phone" value="<?php echo $result['phone'];?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $result['email'];?>" required>
            
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $Firstname = $_POST['Firstname']; 
    $Lastname = $_POST['Lastname']; 
    $Password = $_POST['Password'];
    $phone = $_POST['phone']; 
    $email = $_POST['email']; 
    $query = "UPDATE details SET Firstname='$Firstname', Lastname='$Lastname', Password='$Password', phone='$phone', email='$email' WHERE id='$id'";
    $data = mysqli_query($conn, $query);
    if($data) {
        echo "<script>alert('Record Updated')</script>";
        header("Refresh: 0;url=http://localhost/bootstrapproject/disr.php");
    } else {
        echo "Failed to Update:";
    }
}
?>