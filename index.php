<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $con=mysqli_connect('localhost','root','','stud');
      
       if(isset($_POST['submit']))
       {
          
           
           $name = $_POST['name'];
           $caption = $_POST['caption'];
           $filename = $_FILES['file']['name'];
           $filetempname = $_FILES['file']['temp_name'];
           $path = "files/".$filename;
           $query = "INSERT INTO creative(name,caption,filename)VALUES('$name','$caption'$filename')";
           $run=mysqli_query($con,$query);
           $a= move_uploaded_file($filetempname,$path);
        header('location:index2.php');
       }
        ?>
        <div class="content">
        <h1 class="caption">MIMATIAN'S Creative Gallery</h1>
        </div>
        <div class="form">
        <form action="index.php" method="post">
             <input type="text" placeholder="Enter  your name" name="name"><br>
            <textarea placeholder="description about your work" name="caption"></textarea><br>
            <input type="file" name="file"><br>
            <button type="submit" name="submit">UPLOAD</button>
            
        </form>
            <style>
                *{
    padding: 0;
    font-family: sans-serif;
}
.content
{
    width: auto;
    color: cadetblue;
    display: flex;
    align-items: center;
}
input[type=text],textarea
{
    width: 45%;
    border: 2px solid #aaa;
    border-radius: 5px;
    margin: 8px;
    padding: 8px;
    box-sizing: border-box;
    
   
}
input[type=file]
{
    
 
  width: 45%;
  border: 2px solid #aaa;
  border-radius: 5px;
  padding: 8px;
  box-sizing: border-box;
 
}

button
{
  padding:0.7em 1.7em;
 margin:0 0.3em 0.3em 0;
 border-radius:0.2em;
 box-sizing: border-box;
}
button:hover
{
    
    background:#aaa ;
}

            </style>
        </div>
    </body>
</html>
