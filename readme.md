# Laravel 4 with Entrust and Bootstrap

Clean Laravel 4 install with a basic user system provided by [zizaco/confide](https://github.com/zizaco/confide) and role based permissions system provided by [zizaco/entrust](https://github.com/zizaco/entrust) using Twitter Bootstrap for styling.

## How to install

### Clone this repository

	git clone git@github.com:BenBradley/Laravel-Confide-Entrust-Bootstrap.git laravel

-----

### Install dependencies using Composer

Option 1: If Composer is not installed globally

	cd laravel
	curl -s http://getcomposer.org/installer | php
	php composer.phar install --dev

Option 2: If Composer is installed globally

	cd laravel
	composer install --dev

You might want to make [composer globally available](http://andrewelkins.com/programming/php/setting-up-composer-globally-for-laravel-4/) for ease of use.

-----

### Permissions
Laravel requires folders within ***app/storage*** to be writable by the web server.
To set the correct permissions for this folder:

    chmod -R 775 app/storage

If this does not work then try:

    chmod -R 777 app/storage

-----

### Encryption
To allow for safe encryption by the Laravel encryption services we need to set a random 32 character encryption key.
We can use the following command to set one using artisan:

	php artisan key:generate

-----

### Database
Update ***app/config/database.php*** with database details

Carry out initial migration. This will set up the migrations, user and password_reminder tables.

	php artisan migrate

-----

### Setup Mail Server

Set the `address` and `name` within the `from` array in `config/mail.php`. These will be used to send account 
confirmation and password reset emails to the users.

The `config/mail.php` is currently set to use a gmail account so edit the `username` and a `password` at the bottom of the
file to allow for emails to be sent using a gmail account. If you do not intend to use a gmail account then the host and port
settings must be changed accordingly.

-----

### Run Database Seeder

	php artisan db:seed

Run the database seeder to:

- Create the user `Admin` with password `testing`
- Create two roles, `Admin` and `Owner`
- Assign the `Admin` user the `Admin` role
- Create two permissions, `manage_posts` and `manage_users`
- Assign the `Owner` role both the `manage_posts` and `manage_users`
- Assign the `Admin` role the `manage_posts` permission

-----

### Completion

Navigate to your website and you should see a basic Bootstrap template page and the ability to register, login, validate email address and reset password.

-----
### License

This is open-sourced software license under the [MIT license](http://opensource.org/licenses/MIT)
