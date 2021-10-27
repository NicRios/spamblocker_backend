# Spam Blocker Backend

## process to clone the project

- clone the project from git url or cmd
- install composer
    ```bash
   composer install
   ```
- copy .env.example to .env
    ```bash 
    cp .env.example .env
   ```
- generate app key
   ```bash 
   php artisan key:generate
   ```

- configure your env file

        # setup database environement
        # change app_url accordingly
        # put l5 swagger variables
            L5_SWAGGER_GENERATE_ALWAYS=true
            L5_SWAGGER_CONST_HOST="${APP_URL}/api/v1"
        # put twillio details and variables in env 
            TWILIO_SID=# Twillio sid
            TWILIO_TOKEN=# twillio token
            TWILIO_FROM=# Twillio from (number)
- perform migration 
   ```bash
  php artisan migrate
  ```
- Run seeder 
    ```bash
   php artisan db:seed
   ```
- install passport 
    ```bash
    php artisan passport:install
    ```

## Now all set enjoy coding :)
