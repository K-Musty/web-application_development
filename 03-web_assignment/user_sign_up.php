<?php //Insertion
$servername = "localhost";
$username = "root";
$password = ""; //empty string
$dbname = "Groupp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT * FROM user_sign_up";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<table border='2'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th></tr>";
    while ($row = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "</tr>";
    }
    echo "</table>"
} else {
    echo "No records found";
}
$conn->close();
?>
<?php //Deletion
$servername = "localhost";
$username = "root";
$password = ""; //empty string
$dbname = "Groupp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$delete_user_id = $_POST['delete_user_id'];
$sql = "DELETE FROM user_sign_up WHERE id = $delete_user_id";
$delete_user_id;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    exho "Error deleting user: " . $conn->error;
}

$conn->close();
?>