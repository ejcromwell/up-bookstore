# up-bookstore

Bookstore challange

## Third Challenge in the series

Build steps:

1) Setup new local Laravel project.
2) Clone repo.
3) Create MySQL database
4) Set local .env file config.
5) Run `php artisan migrate --seed` from the project directory to create and populate the DB.
6) Run on local web server.

Areas for improvement:

I've used the work Book where perhaps the task was actually about magazines.

The Admin and Book controller/ model setup is a little confused because of the lack of actual users and user class. This should be more clearly separated on a larger build with a dedicate User Class handling authentication.

Not authentication is being used to check logins. I would use Laravel own built in authentication for this.

I would swap out the HTML form and use the Eloquent form builder package with more time.

There is only HTML form validation. With more time I would use Laravel form validation layer for this.

The views are not optimised for the Blade templating language. They could be much more efficient with less code repetition.

