<p align="center"><a href="#" target="_blank"><img src="https://images.unsplash.com/photo-1610641818989-c2051b5e2cfd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" width="400"></a></p>

# Welcome To Resort Mangager

## Installation

After Cloneing the repository Please Run These Commands:
```
composer update
cp .env .env.example
```
Then Configure the `.env` file

```
php artisan migrate:fresh --seed
php artisan optimize
php artisan serve
```
