# Laravel package example

We can create a package that will be having the common files (Models, Controllers, Migrations, Middlewares, etc) and will be included in all the microservices 
as a composer package.

## This will send email to admin and save contact query in database

## How to use it in our projects (microservices)

## Add the following block to your composer.json file
```json
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/aatifbangash/laravel-custom-package.git" //URL of your github repo
        }
    ],
    "require": {
        "bitfumes/contact": "dev-master" //your vendor/package_name (we can get the name from composer.json file from package) and repo branch with dev- prefix
    }
```
## open the terminal and install/update the package. We have to run the following command whenever we make changes in the package source code
> composer update bitfumes/contact

> composer dump-autoload

## open the route from package in browser. You will see the output
> http://localhost:8080/contact

## Middleware from custom package
Also, I have written a middleware (MyMiddleware.php) in the package. That we can use with any route.
```php
Route::get('/users', function () {
   // logic here...
})->middleware('MyMiddleware'); //You don't need to register the MyMiddleware in the Kernal.php. It will auto-registered by the Laravel
```
## For private repo
If your repo is private then either generate token from github and add that token to your composer global config
> composer config --global github-oauth.github.com YOUR_ACCESS_TOKEN

## Or
generate the ssh_key and add that key to your github account

## Upload to packagist
You have to login to packagist.com through the github credentials. And submit your github repo url to packagist. Also make sure to create a release with tag (version 0.0.1) when you push your code to repo
> git tag -a v2.1.0 -m "xyz feature is released in this tag."

> git push --tags

## Add to the project
```json
"require": {
        "aatifbangash/contact": "*"
    }
```
Add with * for the versioning. So every time we run **composer update aatifbangash/contact** after changing the code and pushing to the repo, the package in the project will be updated with the latest code.
