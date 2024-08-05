<?php
include("Contact.php");
$id = $_GET['id'];
$query = "SELECT * FROM contact WHERE id='$id'";
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
        <form action="#" method="post">
            <label for="Fullname">Fullname:</label>
            <input type="text" id="Fullname" name="Fullname" value="<?php echo $result['Fullname'];?>" required>
            
            <label for="Address">Address:</label>
            <input type="text" id="Address" name="Address" value="<?php echo $result['Address'];?>" required>
            
            <label for="Number">Number:</label>
            <input type="number" id="Number" name="Number" value="<?php echo $result['Number'];?>" required>

            <label for="Email">Email:</label>
            <input type="email" id="Email" name="Email" value="<?php echo $result['Email'];?>" required>
            
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>

<?php
include 'Contact.php';
if (isset($_POST['submit'])){ 
    $Fullname = $_POST['Fullname']; 
    $Address = $_POST['Address'];
    $Number = $_POST['Number']; 
    $Email = $_POST['Email'];
    $query = "UPDATE contact SET Fullname='$Fullname', Address='$Address', Number='$Number', Email='$Email' WHERE id='$id'";
    $data = mysqli_query($conn, $query);
    if($data) {
        echo "<script>alert('Record Updated')</script>";
        header("Refresh: 0;url=http://localhost/bootstrapproject/displayco.php");
    } else {
        echo "Failed to Update:";
    }
}
?>