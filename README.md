# User API

## How to install
```bash
git clone https://github.com/kangreon/user.git
cd user
composer install
cp .env.example .env
php artisan key:generate 
# .env: configure database connection
php artisan migrate
```

## How to run
```bash
php artisan serve
```

## Test It
```bash
php vendor/phpunit/phpunit/phpunit
```

## Use
**Create new user**
```
Use POST method to 
http://<host>/users

With data:
name:name
email:user@email
birthday:1990-01-28
gender:example
```

**Update user**
```
Use POST method to 
http://<host>/users/<user id>

With data:
name:name
email:user@email
birthday:1990-01-28
gender:example
```

**Delete user**
```
Use DELETE method to 
http://<host>/users/<user id>
```

**View user**
```
Use GET method to 
http://<host>/users/<user id>
```

**View all users**
```
Use GET method to 
http://<host>/users
```
