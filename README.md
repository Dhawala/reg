## About Reg

Reg is a user registration form application designed to register OUSL job applicants. 
following assumptions are made apart from the given information.

- the application uses the email as user identification and sends emails to the user, therefore I assumed every applicant will have a properly working email address. 
- The application dos not require an applicant to login in order to apply at the moment.
- Applicant will b able to edith their own details any time they want
- All applicants are of Sri Lankan nationality(only accepts valid Sri Lankan NIC Numbers.)
- Backend for staff members to view applicant info is not needed at the moment.
- any additional information other than one's given in the document are not needed.

Visit working website on 
<http://ec2-13-126-57-215.ap-south-1.compute.amazonaws.com/done/2bd07922d64c55b1960edba8d73edc8b136fc526>

## Downloading and Installation
the application is using laravel PHP framework with bootstrap 4 CSS and jQuery javascript library

- Composer PHP package manager 
- Lamp or windows wampp stack installation 
- PHP ^7.3.5 required
- Mysql ^5.7.26 required

After downloading the repository. Run following CLI commands in saved directory


`composer install` -to download package dependencies 

`php artisan migrate` -laravel helper to create database tables

`php artisan db:seed` - laravel helper to populate database with fake data. 



