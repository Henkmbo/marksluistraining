# marksluistraining

## Email Setup for Registration Form

### Introduction

This document explains how to configure the form submission email functionality on the Mark Sluis Training website.

### Form Submission

The website includes a registration form that sends email notifications when someone registers. There are two PHP scripts for handling this:

1. `process_form.php` - Uses SMTP for sending emails (more reliable but requires SMTP configuration)
2. `process_form_simple.php` - Uses PHP's mail() function (simpler, but requires proper mail server configuration)

Currently, the form is set to use `process_form_simple.php`.

### Configuration Options

#### Option 1: Using process_form_simple.php (Current Setup)

This uses PHP's built-in mail() function. For this to work:

1. Make sure your hosting provider has mail server functionality enabled
2. Update recipient email addresses in `process_form_simple.php`:

```php
$recipient_emails = ["example@yourcompany.com", "another@yourcompany.com"]; 
```

#### Option 2: Using process_form.php with SMTP

For more reliable email delivery, especially if your hosting doesn't support mail() function:

1. Change the form action in `inschrijven.php` from "process_form_simple.php" to "process_form.php"
2. Update the fetch URL in `js/script.js` to match
3. Configure the SMTP settings in `process_form.php`:

```php
$mail_config = [
    'smtp_host' => 'smtp.gmail.com',           // Your SMTP server
    'smtp_port' => 587,                        // SMTP port (587 for TLS, 465 for SSL)
    'smtp_security' => 'tls',                  // 'ssl', 'tls', or ''
    'smtp_auth' => true,                       // Whether to use authentication
    'smtp_username' => 'your-email@gmail.com', // Your SMTP username/email
    'smtp_password' => 'your-password',        // Your SMTP password or app password
    'sender_email' => 'your-email@gmail.com',  // Sender email address
    'sender_name' => 'Mark Sluis Training'     // Sender name
];
```

### Gmail SMTP Setup

If using Gmail SMTP:

1. Set up 2-factor authentication on your Gmail account
2. Generate an "App Password" (Google Account → Security → App Passwords)
3. Use this app password in the SMTP configuration

### Testing 

After configuration, test the form by submitting a test registration. Check:

1. If you receive the email notification
2. If the backup file is created in the "inschrijvingen" folder

### Troubleshooting

If emails are not being sent:

1. Check if backup files are being created in the "inschrijvingen" folder
2. Verify SMTP credentials if using SMTP
3. Check PHP error logs for more information
4. Contact your hosting provider to ensure mail functionality is enabled

### Recipient Emails

Update the list of recipient emails in either of these files:

- `process_form.php` 
- `process_form_simple.php`

Change the line:

```php
$recipient_emails = ["hjvanderkooij@outlook.com"]; 
```

Add or modify email addresses as needed.
