<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Your email address where you want to receive messages
    $to = "saravanan2019cse@gmail.com";
    
    // Email subject
    $subject = "New Contact Form Message from " . $name;
    
    // Email content
    $email_content = "Name: " . $name . "\n";
    $email_content .= "Email: " . $email . "\n\n";
    $email_content .= "Message:\n" . $message;
    
    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<div style='text-align: center; padding: 20px; background: #d4edda; color: #155724; border-radius: 5px; margin: 20px;'>";
        echo "<h3>✅ Message sent successfully!</h3>";
        echo "<p>Thank you for contacting me. I'll get back to you soon!</p>";
        echo "<a href='contact.html' style='color: #155724; text-decoration: underline;'>← Back to Contact Form</a>";
        echo "</div>";
    } else {
        echo "<div style='text-align: center; padding: 20px; background: #f8d7da; color: #721c24; border-radius: 5px; margin: 20px;'>";
        echo "<h3>❌ Sorry, there was an error sending your message.</h3>";
        echo "<p>Please try again later or contact me directly at saravanan2019cse@gmail.com</p>";
        echo "<a href='contact.html' style='color: #721c24; text-decoration: underline;'>← Back to Contact Form</a>";
        echo "</div>";
    }
} else {
    echo "<div style='text-align: center; padding: 20px; background: #f8d7da; color: #721c24; border-radius: 5px; margin: 20px;'>";
    echo "<h3>❌ Invalid request!</h3>";
    echo "<p>Please use the contact form to send messages.</p>";
    echo "<a href='contact.html' style='color: #721c24; text-decoration: underline;'>← Back to Contact Form</a>";
    echo "</div>";
}
?>

