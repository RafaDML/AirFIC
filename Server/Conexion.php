  <?php
$servidor = "remotemysql.com";
$db = "TZsBmm6UOM";
$username = "TZsBmm6UOM";
$password = "GqmQNwdmbz";
// Create connection
$conn = new mysqli($servidor, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>