# SmptContacForm

## Getting Started
This small project use PHPMailer, to see install instructions go to <a href="https://github.com/PHPMailer/PHPMailer/wiki/Tutorial">PHPMailer Wiki</a>.
![PHPMailer](https://raw.github.com/PHPMailer/PHPMailer/master/examples/images/phpmailer.png)

### Prerequisites

```
* PHP >= 5.6.4
* Composer
```

## Installation & loading
PHPMailer is available on [Packagist](https://packagist.org/packages/phpmailer/phpmailer) (using semantic versioning), and installation via composer is the recommended way to install PHPMailer. Just add this line to your `composer.json` file:

```json
"phpmailer/phpmailer": "~6.0"
```

or run

```sh
composer require phpmailer/phpmailer
```

PHPMailer declares the namespace `PHPMailer\PHPMailer`.

If you want to use the Gmail XOAUTH2 authentication class, you will also need to add a dependency on the `league/oauth2-client` package in your `composer.json`.

Alternatively, if you're not using composer, copy the contents of the PHPMailer folder into one of the `include_path` directories specified in your PHP configuration and load each one manually.

If you don't speak git or just want a tarball, click the 'zip' button on the right of the project page in GitHub.

## Usage
Change CONSTANTS on config/config.php to use your on smtp mail acoounts

## Features

```
* Bootstrap and Font Awesome
* Send email via smpt
* Save emails on .txt files
* Response with json or GET method variable for ajax
```