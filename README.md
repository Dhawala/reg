## About Reg

Reg is a user registration form application designed to register OUSL job applicants. 
following assumptions are made apart from the given information.

- the application uses the email as user identification and sends emails to the user, therefore I assumed every applicant will have a properly working email address. 
- The application dos not require an applicant to login in order to apply at the moment.
- Applicant will be able to edit their own detail any time they want.
- All applicants are of Sri Lankan nationality(only accepts valid Sri Lankan NIC Numbers.)
- Backend for staff members to view applicant info is not needed at the moment.
- any additional information other than one's given in the document are not needed.

Visit working website on 
<http://ec2-13-126-57-215.ap-south-1.compute.amazonaws.com>

## Downloading and Installation
the application is using laravel PHP framework with bootstrap 4 CSS and jQuery javascript library

- Lamp or windows wampp stack installation 
- PHP ^7.3.5 required
- Composer PHP package manager
- Mysql ^5.7.26 required

After downloading the repository. Run following CLI commands in saved directory


`composer install` -to download package dependencies 

`php artisan migrate` -laravel helper to create database tables

`php artisan db:seed` - laravel helper to populate database with fake data. 

Database dump is in `/database/reg.sql` path. you have to copy and rename .enc.example to .env and setup variables to your local environment setting up test email environment is necessary.(all the basic laravel requirements)



