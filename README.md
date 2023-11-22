### Version: 1.0.0

# Doctor appointment app
This is a combination of bootstrap and Laravel

## How To Run:  
1. Make sure you have php and laravel installed the easiest way is to use xampp or lampp if using linux
   
3. Create database

4. create .env file and copy contents of .env.example.
   Update these values to point to your db
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel_tester
    DB_USERNAME=root
    DB_PASSWORD=

6. Run migrations  
    ```php artisan migrate```

7. Run the server locally  
    ```php artisan serve```


# How to test this

1. On Your browser enter 127.0.0.1:8000/dashboard to see this UI

   ![image](https://github.com/bassam-alamin/Doctor-appointment/assets/31857273/68934741-a592-44bd-89ee-f53f6e43c40c)


2. To test api's copy the following urls on postman or browser

   127.0.0.1:8000/api/bookings/all

   127.0.0.1:8000//api/view/doctor/{patient_name}

   127.0.0.1:8000/api/view/{patient_name}


   
