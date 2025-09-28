


<?php
// Remote
// 127.0.0.1
// localhost for Windows
define("SERVER", "127.0.0.1");
define("USER", "root");
define("DATABASE", "hotelManagement");
define("PASSWORD", "");

// Local (uncomment if needed)
// define("SERVER","localhost");
// define("USER","root"); //rajib
// define("DATABASE","hosting");
// define("PASSWORD","");

try
{
  $dsn = "mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8mb4";
  $options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throw exceptions on errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,         // Fetch as objects
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Use real prepared statements
  ];

  $db = new PDO($dsn, USER, PASSWORD, $options);
  $tx = ""; // Table prefix if needed

}
catch (PDOException $e)
{
  die("Database connection failed: " . $e->getMessage());
}
?>