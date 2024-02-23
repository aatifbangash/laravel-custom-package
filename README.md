# Contact Us Form Package

[![Issues](https://img.shields.io/github/issues/bitfumes/contact-package.svg?style=flat-square)](https://github.com/bitfumes/contact-package/issues)
[![Stars](	https://img.shields.io/github/stars/bitfumes/contact-package.svg?style=flat-square)](https://github.com/bitfumes/contact-package/stargazers)


## This will send email to admin and save contact query in database

## How to use it

## Add the following block to you composer.json file
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
