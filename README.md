This project will register a user and allow them to consume data through an API using Laravel and Passport.

Locally developed using Homestead.

Could this be hosted on Heroku? (a lot of env vars to set!)

Setup
Following https://laravel.com/docs/5.5 :heart:
- $ laravel new <project name>
- In my Homestead dir, modify Homestead.yaml so the vagrant box will serve my project directory and my db will be created
- Modify /etc/hosts to map this URL to the vagrant box IP
- $ vagrant destroy ; vagrant up # to create db ($ vagrant up --provision ??)
- In my project dir, rename .env.example to .env and add the name of my DB as DB_DATABASE
- $ php artisan key:generate
- $ php artisan make:auth
- $ vagrant ssh
- > cd to my project dir
- > $ php artisan migrate # This adds the users table from project/database/migrations. Docs say this should be done from within the box but not sure why... The DB port number in .env needs to be multiplied by 10 to connect to the DB from my local machine; is this why?

Authenticated API
Following https://www.youtube.com/watch?v=0FsCplBR2uM&list=PLcgHShdyCyBPxl6nFm034mSQifYgZi5HC :heart:
- $ composer require laravel/passport
- $ php artisan vendor:publish # coppies files into project?
- In app/Providers/AuthServiceProvider.php, add "Passport::routes();" to the boot method
- In app/User.php, add "use HasApiTokens" where it says "use Notifiable"
- In config/app.php, add "\laravel\Passport\PassportServiceProvider::class" to 'providers', under the "Package Service Providers..." comment
- In config/auth.php, set guards->api->driver to "passport"

What I want to do is a little different to the tutorial, consuming the api will be seperate.
For now, I'm going to make a service to show the data only. I'll inject the data artificially

- Add a function to app/user.php to represent the data
- $ php artisan make:model <name> -m # make model and the migration