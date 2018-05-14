<?php

include('includes/newClass.php');

$object=new ParentClass;

?>
<!DOCTYPE>
<html>
<head>
</head>
<body>

<?php


/*
  Below is an example of an object being able to grab information from a parent
  class. The property named info is a public property.
  The first echo is pulling property from the newClass, the child class.

*/
    //echo $my_object->info;

    echo "<br><br>";

/*
    Second echo displays a property from the parent class. The property, my_name is
    a property from the class: ParentClass.
*/
      echo $my_object->my_name;

/*This line will display an objects Class*/      $showClass=get_class($my_object);

/*
    Third echo displays a protected property from the parent class.
    Protected property needs to be invoked using a public method.
    The property myAge is a property from the class: ParentClass.
    echo $my_object->myAge()." this is from the parent class".__CLASS__."It's a protected property";
    echo "<br><br>";
    echo "<h1>".First_class::staticMethod()." class name: ".get_class($my_object)."</h1>";
*/

    /*
      The following code displays an object using the ParentClass class. This object will display
      a private property named memory. Invoked using a public method defined in
      parentClass.php.
    */
  //  echo $object->memory();

    $trees="Up and over the tree!!!";
    $water="You hit the water?!??";

//Below the data from the class 'newClass'
//Below is an object using a method defined
//inside the newClass. The method adds
//h1 tags to the text inside.
    $my_object->setProp($trees);

//The 'getProp' method will return the
/*value using the 'newClass' method 'getProp'
    $showMe=$my_object->getProp($trees);
    echo "This info below is brought to you by the getProp method: ".$showMe;
*/

//Below is a second object: '$my_objectTwo', using The
//same methods as the first object:'$my_object'
 $my_objectTwo->setProp($water);
 $sec_show=$my_objectTwo->getProp($water);
/*
    echo "Below is the second object with a get method";
    echo $sec_show;
    */
?>

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
