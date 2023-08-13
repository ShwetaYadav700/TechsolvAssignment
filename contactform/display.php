<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            overflow-x:hidden;
        
        }.main-div{
            width:100vw;
            height :100vh;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
          
        }
        .center-div{
            width:100%;
            height:80vh;
            background:linear-gradient(to left,#5dade2,#00c6ff);
            padding:60px;
            
            box-shadow:0 10px 20px 0 rgba(0,0,0,.03);
        }
        .maindiv h1{
            font-size:18px;
            color:#000;
            text-align:center;
            margin-top:-20px;
            margin-bottom:20px;   
        }table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
            background-color:#fff;
            box-shadow:0 10px 20px 0 rgba(0,0,0,.03);
            margin:auto;
        }
        th,td {
            border:1px solid #fff;
            padding: 8px 10px;
            text-align: center;
            color:grey;
        }
        th{
    
            text-transform:uppercase;
            font-weight:500;
        }
        tr:nth-child(even){
           background-color: #f2f2f2;
        }
        td{
            font-size:13px;
        }

        tr:hover td {
             background-color: #e0e0e0;
            }
          .fa{
              font-size:18px;
             }
           .fa-pencil-square-o{
              color:#63c76a;
           }.fa-trash{
                   color:#ff0000;
                }
    </style>
</head>
<body>
    <div class="main-div">
        <h1>List of candidates</h1>
        <div class="center-div">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone no.</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th colspan="2">operation</th>
                        

                    </tr>
                </thead>
                <tbody>
                <?php

include 'connection.php';

$selectquery="select * from phpform";
$query=mysqli_query($conn,$selectquery);

$nums=mysqli_num_rows($query);



while($res=mysqli_fetch_array($query)){

?>
   <tr>
    <td><?php echo $res['fullname']; ?></td>
    <td><?php echo $res['phoneNum']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['subject']; ?></td>
    <td><?php echo $res['message']; ?></td>
    <td><a href="updates.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
    <td><a href=""><i class="fa fa-trash" aria-hidden="true"></i></a></td>
</tr>
<?php
       }
            ?>  
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>



