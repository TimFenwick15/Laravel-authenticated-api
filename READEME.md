This project will register a user and allow them to consume data through an API using Laravel and Passport.

Locally developed using Homestead.

Could this be hosted on Heroku? (a lot of env vars to set!)

#Setup
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

#Adding a new endpoint
Following https://www.youtube.com/watch?v=0FsCplBR2uM&list=PLcgHShdyCyBPxl6nFm034mSQifYgZi5HC and https://laravel.com/docs/5.5/passport :heart:
- Follow the Laravel 5.5 docs until the front end section
- $ php artisan make:model livingroomData -m
- $ php artisan make:controller livingroomData
- In the livingroomData model, app/livingroomData.php, add member to livingroomData class: "protected $table = 'livingroom_datas';
- In the livingroomData controller, app/Http/Controllers/livingroomData.php, add an index function to get the data from the DB. Eg:
>    public function index()
    {
        return DB::select('select * from livingroom_datas');
    }
- In the new database/migrations file, in the Schema::create call, add to your schema
- In routes/web.php, add "Route::get('/livingroomdata', 'livingroomData@index')->name('livingroomdata');"
- Now, <app url>/livingroomdata should show the data from the database in JSON (initially this will be an empty array)

Also added a /showusers endpoint

#Authenticated API
