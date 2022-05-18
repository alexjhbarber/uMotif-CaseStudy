# uMotif Code Test

## Setup

install laravel 
``` composer install ```

install the database migaration once the database is setup in the .env
``` php artisan migrate ```


## About

The form submits with post. once the form has been validated to make sure all required fields have been completed the post will route to the controller.

At the controller the input is checked to make sure the user is over 18. If not the method will return to the results view to show the under 18 message. If over 18 the information will be processed to check what Cohort the participant will be placed in.

Once the cohort has been assigned the participant will be saved into the database. into the table ```participants```. 

After the new participant has been saved the results view will be displayed with the cohort the participant will be in.