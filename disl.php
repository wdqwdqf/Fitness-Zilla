<?php
include("Login.php");
error_reporting(0);
$query="Select * From form";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
    ?>
    <h3 align="center">Displaying Records of Login Page</h3>
    <center><table border="4" cellspacing="7">
        <tr>
        <th width="45%">Username</th>
        <th width="45%">Password</th>
        <th width="45%">Edit</th>
</tr>
<?php
while($result=mysqli_fetch_assoc($data))
{
    echo " <tr>
    <td>$result[Username]</td>
    <td>$result[Password]</td>
    <td><a href='udlogin.php?id=$result[id]&Username=$result[Username]&Password=$result[Password]'><input type='submit' value='Update' id='editbtn'></a>
    <a href='dtlogin.php?id=$result[id]&Username=$result[Username]&Password=$result[Password]'><input type='submit' value='Delete' id='editbtn'
    onclick ='return checkdeleted()'></a></td>
    </tr>
    ";
}
?>
</table>
</center>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Records</title>
<style>
        body {
    background-color: #1D5765;
}
#editbtn{
    background color:#743600;
    color: black;
    font size:15px;
}
@media screen and (max-width: 600px) {
    th, td {
        padding: 4px;
    }
}
</style>
</head>
<body>
    <script>
        function checkdeleted()
        {
            return confirm('Are U sure!');
        }
    </script>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dark Theme Toggle</title>
<style>
    body {
  transition: background-color 0.3s;
  background-color: #f5f5f5;
  color: black;
}

.dark-theme {
  background-color: #1D5765;
  color: #f5f5f5;
}

.theme-toggle {
  position: fixed;
  top: 20px;
  right: 20px;
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  transition: 0.4s;
  border-radius: 34px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  transition: 0.4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:checked + .slider:before {
  transform: translateX(26px);
}

.round {
  border-radius: 34px;
}
</style>
</head>
<body>
<div class="theme-toggle">
  <label class="switch">
    <input type="checkbox" id="themeToggle">
    <span class="slider round"></span>
  </label>
</div>
<script>
    const themeToggle = document.getElementById('themeToggle');
const content = document.querySelector('.content');

themeToggle.addEventListener('change', () => {
  if (themeToggle.checked) {
    document.body.classList.add('dark-theme');
    content.classList.add('dark-theme');
  } else {
    document.body.classList.remove('dark-theme');
    content.classList.remove('dark-theme');
  }
});
</script>
</body>
</html>