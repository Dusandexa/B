<?php
/**
 * Form Handler - Processes contact form submissions with bilingual support
 * 
 * This script handles form submissions and returns appropriate messages
 * based on the language specified in the form.
 */

// Start session for storing messages
session_start();

// Set content type for JSON response (if using AJAX)
// header('Content-Type: application/json');

// Initialize response array
$response = [
    'success' => false,
    'message' => '',
    'errors' => []
];

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Get language from hidden input (default to 'en')
    $lang = isset($_POST['lang']) ? $_POST['lang'] : 'en';
    
    // Sanitize inputs
    $name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
    $phone = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
    $subject = isset($_POST['subject']) ? trim(strip_tags($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';
    
    // Validation messages based on language
    $messages = [
        'en' => [
            'name_required' => 'Name is required.',
            'email_required' => 'Email is required.',
            'email_invalid' => 'Please enter a valid email address.',
            'message_required' => 'Message is required.',
            'success' => 'Thank you for contacting us! We will get back to you soon.',
            'error' => 'An error occurred while processing your request. Please try again.',
            'spam_detected' => 'Spam detected. Please try again.'
        ],
        'sr' => [
            'name_required' => 'Ime je obavezno.',
            'email_required' => 'Email je obavezan.',
            'email_invalid' => 'Molimo unesite validnu email adresu.',
            'message_required' => 'Poruka je obavezna.',
            'success' => 'Hvala što ste nas kontaktirali! Odgovorićemo vam uskoro.',
            'error' => 'Došlo je do greške prilikom obrade vašeg zahteva. Molimo pokušajte ponovo.',
            'spam_detected' => 'Detektovan spam. Molimo pokušajte ponovo.'
        ]
    ];
    
    // Get messages for current language
    $msg = $messages[$lang] ?? $messages['en'];
    
    // Validate inputs
    if (empty($name)) {
        $response['errors']['name'] = $msg['name_required'];
    }
    
    if (empty($email)) {
        $response['errors']['email'] = $msg['email_required'];
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['errors']['email'] = $msg['email_invalid'];
    }
    
    if (empty($message)) {
        $response['errors']['message'] = $msg['message_required'];
    }
    
    // Simple honeypot spam protection
    if (isset($_POST['website']) && !empty($_POST['website'])) {
        $response['errors']['spam'] = $msg['spam_detected'];
    }
    
    // If no errors, process the form
    if (empty($response['errors'])) {
        
        // Prepare email
        $to = 'your-email@yourwebsite.com'; // Change this to your email
        $email_subject = "Contact Form: " . $subject;
        
        // Email body
        $email_body = "You have received a new message from the contact form.\n\n";
        $email_body .= "Name: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Phone: $phone\n";
        $email_body .= "Subject: $subject\n\n";
        $email_body .= "Message:\n$message\n";
        
        // Email headers
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Send email
        if (mail($to, $email_subject, $email_body, $headers)) {
            $response['success'] = true;
            $response['message'] = $msg['success'];
            
            // Store success message in session
            $_SESSION['form_success'] = $msg['success'];
        } else {
            $response['message'] = $msg['error'];
        }
    } else {
        $response['message'] = $msg['error'];
    }
    
    // For AJAX requests, return JSON
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        echo json_encode($response);
        exit;
    }
    
    // For regular form submissions, redirect back with message
    if ($response['success']) {
        $_SESSION['form_message'] = $response['message'];
        $_SESSION['form_type'] = 'success';
    } else {
        $_SESSION['form_message'] = $response['message'];
        $_SESSION['form_type'] = 'error';
        $_SESSION['form_errors'] = $response['errors'];
        $_SESSION['form_data'] = $_POST; // Keep form data for repopulation
    }
    
    // Redirect back to the contact page
    $redirect_url = ($lang === 'sr') ? '/sr/kontakt' : '/contact';
    header("Location: $redirect_url");
    exit;
    
} else {
    // If not POST request, redirect to home
    header("Location: /");
    exit;
}
?>
