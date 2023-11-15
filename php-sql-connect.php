
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "StudentRecord";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if ($conn-> connect_error){
        die("Connection Failed.".$conn->connect_error);

    }
    //else
    //    echo "Connected Successfully";
    
?>
    <table>
        <?php
        $sql="Select * from Student";
        $result=$conn->query("$sql");

        if($result){
            while ($row=$result->fetch_assoc()){
                echo "ID Number: " .$row["StudentID"] ."<br>"
                ."First Name: " .$row["FirstName"] ."<br>"
                ."Last Name: " .$row["LastName"] ."<br>"
                ."Birthday: " .$row["DateOfBirth"] ."<br>"
                ."Email: " .$row["Email"] ."<br>"
                ."Phone Number: " .$row["Phone"] ."<br>"
                ."<br>";
            }
        }
        ?>
    </table>

    <table>
        <?php
            $sql="Select * from Course";
            $result=$conn->query("$sql");

            if($result){
                while ($row=$result->fetch_assoc()){
                    echo "Course ID: " .$row["CourseID"] ."<br>"
                    ."Course Name: " .$row["CourseName"] ."<br>"
                    ."Credits: " .$row["Credits"] ."<br>"
                    ."<br>";
                }
            }
        ?>
    </table>

    <table>
        <?php
            $sql="Select * from Instructor";
            $result=$conn->query("$sql");
        
            if($result){
                while ($row=$result->fetch_assoc()){
                    echo "Instructor ID: " .$row["InstructorID"] ."<br>"
                    ."First Name: " .$row["FirstName"] ."<br>"
                    ."Last Name: " .$row["LastName"] ."<br>"
                    ."Email: " .$row["Email"] ."<br>"
                    ."Phone Number: " .$row["Phone"] ."<br>"
                    ."<br>";
                }
            }
        ?>
    </table>

    <table>
        <?php
            $sql="Select * from Enrollment";
            $result=$conn->query("$sql");
        
            if($result){
                while ($row=$result->fetch_assoc()){
                    echo "Enrollment ID: " .$row["EnrollmentID"] ."<br>"
                    ."Student ID: " .$row["StudentID"] ."<br>"
                    ."Course ID: " .$row["CourseID"] ."<br>"
                    ."Enrollment Date: " .$row["EnrollmentDate"] ."<br>"
                    ."Grade: " .$row["Grade"] ."<br>"
                    ."<br>";
                }
            }
        ?>
    </table>

