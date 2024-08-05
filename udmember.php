<?php
include("member1.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM member WHERE id='$id'";
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
    input[type="membership"],
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
            <label for="Name">Name:</label>
            <input type="text" id="Name" name="Name" value="<?php echo $result['Name'];?>" required>
            
            <label for="Email">Email:</label>
            <input type="email" id="Email" name="Email" value="<?php echo $result['Email'];?>" required>

            <label for="Phone">Phone:</label>
            <input type="number" id="Phone" name="Phone" value="<?php echo $result['Phone'];?>" required>

            <label for="membership">Membership:</label>
            <input type="text" id="membership" name="membership" value="<?php echo $result['membership'];?>" required>
            
            <input type="submit" name="submit" value="Update">
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $Name = $_POST['Name']; 
    $Email = $_POST['Email']; 
    $Phone = $_POST['Phone']; 
    $membership = $_POST['membership']; 
    $query = "UPDATE member SET Name='$Name', Email='$Email', Phone='$Phone', membership='$membership' WHERE id='$id'";
    $data = mysqli_query($conn, $query);
    if($data) {
        echo "<script>alert('Record Updated')</script>";
        header("Refresh: 0;url=http://localhost/bootstrapproject/dism.php");
    } else {
        echo "Failed to Update:";
    }
}
?>