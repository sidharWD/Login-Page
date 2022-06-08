ervername = "sql306.epizy.com";
$username = "epiz_31909626";
$password = "F2RGlsFE5z";
$dbname = "epiz_31909626_loginpage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT email FROM details";
$result = $conn->query($sql);
$email = $_POST['email'];

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $emailDB = $row['email'];
    }
} else {
 echo "FAILED";
}

if($emailDB === $email) {
	echo "You Are Already Sign Up with this Mail: "; echo $_POST['email'];
}
else {
$servername = "sql306.epizy.com";
$username = "epiz_31909626";
$password = "F2RGlsFE5z";
$dbname = "epiz_31909626_loginpage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
	$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO details (name, email, pass)
VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Login SucessFully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>
