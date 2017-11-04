<html>
<body>
    <?php
        $name = $email = $gender = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $gender = test_input($_POST["gender"]);
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name:<input type="text" name="name"><br>
        Email:<input type="text" name="email"><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="submit" name="submit" value="submit">
    </form>
    <h2>Your output:</h2>
    <?php
        echo $name;
        echo $email;
        echo $gender;
    ?>
</body>
</html>text test
