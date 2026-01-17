<!-- Contact Us Page -->
 <?php 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require __DIR__ . '/PHPMailer/Exception.php';
  require __DIR__ . '/PHPMailer/PHPMailer.php';
  require __DIR__ . '/PHPMailer/SMTP.php';

  if(filter_has_var(INPUT_POST, 'submit')) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $errorMessage = '';
    $errorClass = '';

    if(!empty($name) && !empty($email) && !empty($message)) {
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'Please enter a valid email address.';
        $errorClass = 'border-red-500 bg-red-100 text-red-700';
      } else {
        try {
          $mail = new PHPMailer(true);

          // SMTP config
          $mail->isSMTP();
          $mail->Host       = 'smtp.gmail.com';
          $mail->SMTPAuth   = true;
          $mail->Username   = 'animashauntaofiq@gmail.com';
          $mail->Password   = 'wkvqbqnlhqoonxna';
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
          $mail->Port       = 587;

          // Email settings
          $mail->setFrom($email, $name);
          $mail->addAddress('animashauntaofiq@gmail.com'); // where you receive it
          $mail->addReplyTo($email, $name);

          $mail->isHTML(true);
          $mail->Subject = 'New Contact Message';
          $mail->Body    = "
            <h3>New Message</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Message:</strong><br>{$message}</p>
          ";

          $mail->send();

          $errorMessage = "Thank you, {$name}. Your message has been received.";
          $errorClass = 'border-green-500 bg-green-100 text-green-700';

        } catch (Exception $e) {
          $errorMessage = 'Email could not be sent. Error: ' . $mail->ErrorInfo;
          $errorClass = 'border-red-500 bg-red-100 text-red-700';
        }
      }
    } else {
      $errorMessage = 'Please fill in all fields.';
      $errorClass = 'border-red-500 bg-red-100 text-red-700';
    }
  }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <title>Contact Us</title>
 </head>
 <body>
  <!-- Create a basic contact form -->
  <div class="max-w-md mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Contact Us</h1>
    <?php if(!empty($errorMessage)): ?>
      <div class="mb-4 p-4 border rounded <?php echo $errorClass; ?>">
        <?php echo $errorMessage; ?>
      </div>
    <?php endif; ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
      <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? $name : '' ?>"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
      <br><br>
      <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
      <input  id="email" name="email" value="<?php echo isset($_POST['email']) ? $email : '' ?>"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
      <br><br>
      <label for="message" class="block text-sm font-medium text-gray-700">Message:</label>
      <textarea id="message" name="message" rows="4"  class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
      <br><br>
      <input type="submit" name="submit" value="Send Message" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
  </div>
 </body>
 </html>