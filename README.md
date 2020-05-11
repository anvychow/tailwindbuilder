# Getting Started
*Note, this README anticipates that you are using Laravel Valet*

## 1. Initialize the project
Clone the repo to your local machine, and run the following commands:

```
cp .env.example .env
php artisan key:generate
npm install && npm run prod
```

## 2. Set up your database.
Using a tool like SequelPro or TablePlus, create a database on your localhost. Make note of the database name, username and password as you will now need to update your `.env` file with the correct values.

After you have created the database and updated your `.env` file, run these commands:

```
php artisan config:cache
php artisan migrate
```

## 3. Adding the components

You have two methods of adding components into the builder: directly into the database, or by using the Seeder.
Whichever method you choose, `name` and `html` are **REQUIRED** values.

To use the Seeder, navigate to the `ElementSeeder.php` file under `database/seeds/`. Simply append your element to the main `->insert([])` array following the example provided. After you have finished appending your elements to the seeder, run:
```
composer dump-autoload
php artisan db:seed
```

## 4. Using the Builder

Now that your builder is installed and your table is ready, run: `valet link tailwindbuilder` in your terminal, and then navigate to `tailwindbuilder.test` in your browser!

# Roadmap

For V1 I am planning on adding in the ability to customize the CSS and compile directly through the tool. If you have any additional suggestions, please let me know! Thank you all!

- Sam
