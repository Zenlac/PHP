<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 03 Forms and Tables</title>
</head>

<body>
    <form method='post'>
        <label for="user_id">ID:</label><br>
        <input type="text" id="id" name="id"/><br>

        <label for="user_name">Name:</label><br>
        <input type="text" id="name" name="name"/><br>

        <label for="user_email">Email:</label><br>
        <input type="text" id="email" name="email"/><br><br>
        <input type="submit" name="button" value="Submit"/>
    </form>
        
        
    <h2>Student Table:</h2>
    <table style="width: 50%">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    </tr>

    <?php
        $hostname = "localhost";
        $username = "root";
        $password ="";
        $dbname ="studentinfo";
        
        $conn = new mysqli($hostname, $username, $password, $dbname);
        
        if ($conn->connect_error)
        {
            die("Conection Failed");
        }
        
        if(isset($_POST['button'])) {
            insertInfo($conn);
        }
        
        function insertInfo($conn){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sql = "Insert into users values($id, '$name', '$email')";
        
            if ($conn->query("$sql") == TRUE) {
                echo "Record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        
        $sql = "Select * from users;";
        $result = $conn->query("$sql");
        while($row=$result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>" .$row["id"] ."</td>";
            echo "<td>" .$row["username"] ."</td>";
            echo "<td>" .$row["email"] ."</td>";
            echo "</tr>";
        }
    ?>
</body>
</html>
