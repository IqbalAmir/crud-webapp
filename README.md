# Stadium Tracker

An app which allows users to write reviews about stadiums.
App includes a personal section of the user's reviews when logged in.
App includes CRUD operations.
Built in E-commerce system for users to purchase items.


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

* Vanilla.JS - for the use of Dark Mode (https://darkmodejs.learn.uno/).
* Font Awesome - for certain icons on the app (https://github.com/FortAwesome/Font-Awesome).
* Tailwindcss/ui - css framework (https://github.com/tailwindlabs/tailwindcss).
* Gravatar (https://github.com/creativeorange/gravatar).
* Socailite (https://github.com/laravel/socialite).
* Shopping Cart (https://github.com/darryldecode/laravelshoppingcart).
* Stripe - using API Key (https://github.com/cartalyst/stripe-laravel).
* Stripe (https://stripe.com/docs/js).

## Initialisation

`$ php artisan key:generate`

`$ php artisan migrate:fresh --seed`

## Startup

`$ php artisan serve`

App will be available at the URI displayed.
