<?php
    // echo "<pre>";
    // print_r($_POST);
    

    // initilization all variable value in empty
    $name = '';
    $gender = '';
    $city = '';
    $education = array();
    $femaleChecked = '';
    $maleChecked = '';
    $educationStr = '';
    // checked the 
    if(isset($_POST['submit'])){
        // print_r($_POST['name']);
        $name = $_POST['name'];
        $password = $_POST['password'];
        $city = $_POST['city'];

        // gender section
        if(isset($_POST['gender'])){
            $gender = $_POST['gender'];
            if($gender == 'Male'){
                $maleChecked = "checked";
            }
            if($gender == 'Female'){
                $femaleChecked = "checked";
            }
        }
        // education section
        if(isset($_POST['education'])){
            $education = $_POST['education'];
            $educationStr = implode(' ,',$education);
        }
        
        // print the all values 
        echo "Name :- $name<br>";
        echo "Password :- $password<br>";
        echo "City :- $city<br>";
        echo "Gender :- $gender<br>";
        echo "Education :- $educationStr<br>";

        echo "<br>";

    }
    // print_r($_POST['name']);

?>

<form action="" method="post">
    Name :- <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
    Password :- <input type="password" name="password"><br><br>
    Gender:-  
    <input type="radio" name="gender" value="Female"<?php echo $femaleChecked; ?> > Female
    <input type="radio" name="gender" value="Male" <?php echo $maleChecked; ?> > Male <br><br>

    City :- 
    <?php
    $cityArr = array('Dhaka','Rangpur','Comilla','Sylhet');
    ?>
    <select name="city" id="">
        <option >Select City</option>
        <?php
            foreach($cityArr as $list){
                if($city == $list){
                    echo "<option selected>".$list."</option>";
                }else{
                    echo "<option>".$list."</option>";
                }
            }
        ?>
        <!-- <option >Dhaka City</option>
        <option >Rangpur City</option>
        <option >Comilla City</option> -->
    </select>
    <br><br>

    Education :- 
    <?php
        $educationArr = array('B.Tech', 'M.Tech', 'B.Sc');
        foreach($educationArr as $list){
            if(in_array($list,$education)){
                echo "<input type='checkbox' name='education[]' value='$list' checked> $list";
            }
            else{
                echo "<input type='checkbox' name='education[]' value='$list' > $list";
            }
        }
    ?>
    <!-- <input type="checkbox" name="education[]" value="B.Tech"> B.Tech
    <input type="checkbox" name="education[]" value="M.Tech">  M.Tech
    <input type="checkbox" name="education[]" value="B.Sc"> B.Sc<br><br> -->
    <br><br>

    <input type="submit" name="submit" >
</form>
