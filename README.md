# Stadium Tracker

An app which allows users to write reviews about stadiums.
App includes a personal section of a certain user's reviews when logged in.
The App includes CRUD operations.


## Accessibility

- Dark Mode implemented for users with visual impairments.

## Environment and Config

`$ cp .env.example .env`

The following settings are required:

- A database connection, with username and password. 
  MySQL or MariaDB are fine. [XAMPP](https://www.apachefriends.org/index.html)
  recommended.
- Account details for [Mailtrap](https://mailtrap.io/)
- A URL for a free account at [Fontawesome](https://fontawesome.com/)

## Additional Libraries

* Vanilla.JS (for the use of Dark Mode).
* Font Awesome (for certain icons on the app).
* Tailwindcss/ui (css framework used).

## Initialisation

`$ php artisan key:generate`

`$ php artisan migrate:fresh --seed`

## Startup

`$ php artisan serve`

App will be available at the URI displayed.
