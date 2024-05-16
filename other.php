<!--If it retrive the code just connect to database first-->
<?php include_once "action.php";

    $sql = "SELECT * FROM tenants";
    $query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Other Members</title>
    <link rel="stylesheet" href="style_sheet/all.min.css">
    <link rel="stylesheet" href="style_sheet/fontawesome.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
            ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #a9e4f3;
  position: fixed;
  height: 100%;
  overflow: auto;
}
body{
    background-image:url(imagEs/photo.jpg);
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: blue;
  color: white;
}

li a:hover:not(.active) {
  background-color: rgb(140, 180, 226);
  color: white;
}
.container{
    width: 500px;
    background: rgba(221, 183, 183, 0.7);
    box-shadow: rgba(0,0,0,0.7);
    padding: 50px 0;
    margin: 5% 37.5% ;
    padding: 13px;
    border-radius: 4px;

}
table, th, td {
            border: 1px solid lightseagreen;
            border-collapse: collapse;
            text-align:center;
        }
        .logbtn{
    background: transparent;
    margin :15px auto 15px;
    width: 80%;
    display: block;
    border: 1px solid white;
    color: black;
    cursor: pointer;
    font-size: 13px;
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="Registration.html"><i class="fas fa-cart-plus"></i> Order Now</a></li>
        <li><a class="active" href="other.php"><i class="fa fa-users"></i> Other Members</a></li>
      </ul>
      <br>
<div class="container">
<?php 



?>
 <h1>THE SUB ZERO COMPANY</h1>
 <p>The below table give a summary on people who already join our company to enjoy the quality of or service 
     
 </p>
<table>
                    <tr>
                        <th>S/N</th>
                        <th>Tenant Name</th>
                        <th>House Number</th>
                        <th>Date Registered</th>
                    </tr>
			<?php
					     $i = 0;
					     while($row = mysqli_fetch_array($query)){
              ?>     
                   <tr>
                  <td><?php echo $row['id'] ;?></td>
                  <td><?php echo $row['nameOfTenant']; ?></td>
                  <td><?php echo $row['houseNumber']; ?></td>
                  <td><?php echo $row['datePayed']; ?></td>
                   </tr>
               <?php 
                     $i++;
                      }
                      ?>
                      </table>
                      <?php
                          
           ?>
           <div>
           <button class="logbtn" type='button' onclick='window.print()'><i class="fa fa-print" ></i>PRINT A SUMMARY</button>
           </div>
</div>
</html>
</body>
</html>