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

## For private repo
If your repo is private then either generate token from github and add that token to your composer global config
> composer config --global github-oauth.github.com YOUR_ACCESS_TOKEN

## Or
generate the ssh_key and add that key to your github account
