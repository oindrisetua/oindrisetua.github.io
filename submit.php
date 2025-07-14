<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  $data = [$name, $email, $subject, $message, date("Y-m-d H:i:s")];

  $file = fopen("messages.csv", "a");
  fputcsv($file, $data);
  fclose($file);

  echo "<h2 style='text-align:center;color:green;'>Thank you, $name! Your message has been sent.</h2>";
} else {
  echo "<h2 style='text-align:center;color:red;'>Something went wrong.</h2>";
}
?>
