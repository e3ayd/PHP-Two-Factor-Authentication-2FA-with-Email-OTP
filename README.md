# PHP Two-Factor Authentication (2FA) with Email OTP

This project implements a Two-Factor Authentication (2FA) system using PHP. The system sends a One-Time Password (OTP) to the user's email address as a second layer of authentication. The user must enter this OTP to gain access to a protected page or perform a sensitive action.

## Features

- **Two-Factor Authentication:** Adds an additional layer of security to your application.
- **Email OTP:** Sends a One-Time Password to the user's email for verification.
- **Session Management:** Uses PHP sessions to track user authentication status.

## Installation

1. Clone the repository to your local machine.
2. Place the files in your PHP server's root directory.
3. Update the email address in `send_otp.php` to the user's actual email.
4. Optionally, configure your mail server to send the OTP via email.

## Usage

1. **Login:** Navigate to the `index.php` page and enter a username and password.
2. **Receive OTP:** After login, an OTP will be sent to your email.
3. **Verify OTP:** Enter the OTP on the `verify_otp.php` page to complete the authentication process.
4. **Access Protected Content:** Once authenticated, you can access `protected_page.php`.

### Example Usage

1. **Login with credentials.**
2. **Receive OTP in your email.**
3. **Enter the OTP to gain access to the protected content.**

## Customization

- **Email Configuration:** Modify `send_otp.php` to include your mail server configuration.
- **OTP Length:** Change the length of the OTP by modifying the `rand()` function in `send_otp.php`.
- **Session Timeout:** Implement session timeout for enhanced security by adjusting session settings.

## Contribution

To contribute, please submit a pull request. We welcome all suggestions and improvements!

## License

This project is licensed under the MIT License. For more information, please see the `LICENSE` file.
