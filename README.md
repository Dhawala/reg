## About Reg

Reg is a user registration form application designed to register OUSL job applicants. 
following assumptions are made apart from the given information.
- The application dos not require a specific  applicant to login in order to apply at the moment.
- Applicant will b able to edith their own details any time they want
- All applicants are of Sri Lankan nationality(only accepts valid Sri Lankan NIC Numbers.)
the application is using laravel PHP framework with bootstrap 4 CSS and jQuery javascript library 
- Backend for staff members to view applicant info is not needed at the moment.
- any additional information other than one's given in the document are not needed.
- every applicant will have a properly working email address. since the application sends emails to the user 


## Downloading and Installation

- Composer PHP package manager 
- Lamp or windows wampp stack installation 
- PHP ^7.3.5 required
- Mysql ^5.7.26 required

After downloading the repository. Run following CLI commands in saved directory


`composer install` -to download package dependencies 

`php artisan migrate` -laravel helper to create database tables

`php artisan db:seed` - laravel helper to populate database with fake data. 



