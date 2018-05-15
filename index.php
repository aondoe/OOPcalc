<?php

//include('includes/newClass.php');

//$object=new ParentClass;

?>
<!DOCTYPE>
<html>
<head>
</head>
<body>


  <div style="border:1px solid orange; max-width:35%; padding-top:2px; padding-bottom:7px; padding-right:1%; padding-left:3%;">
    <form action="calc.php" method="post">
      <h1 style="color:blue; text-decoration:underline;">Calculator</h1>
        <select name="calculations">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <br>
          <label for="num_1">First Number: </label><input id="num_1" type="number" name="num_1">
          <br>
          <label for="num_2">Second Number: </label><input id="num_2" type="number" name="num_2">
        <br>

        <br>
          <input type="submit"> <input type="reset">
    </form>
  </div>
</body>
</html>
