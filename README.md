# Snowtricks

### Project #6 - Application Developer Student - PHP / Symfony Openclassrooms

Expand a PHP SnowTricks community site with Symfony 4.

![screenshot](http://vincent-dev.com/img/screenshot2.jpg)

## Application installation

### Minimum required

* Apache server 2.4 ou supérieur.  
* Version PHP 7 ou supérieure. 

### Installation

* Clone the project on Github https://github.com/Vincent-gv/snowtricks and add it to the projects folder of your local server environment with the command:
`` 
git clone https://github.com/Vincent-gv/snowtricks.git
`` 
* Run 
`` composer install 
``  at the root of the folder to install the dependencies.
* Create a local database and update environment variables in .env file.
* Run Doctrine to load SQL tables: 
`` 
php bin/console doctrine:database:create
`` 
 * Load fixtures into the database: 
`` 
 php bin/console doctrine:fixtures:load
`` 

## Developed with

* ** Symfony 4.4.13 **
* ** PHP 7.4.7 **
* ** HTML5 & CSS **
* ** Mysql **
* **Composer **

## Author

** Vincent Gauchevertu ** - Openclassrooms student
https://github.com/Vincent-gv/

## Project badges

<a href="https://codeclimate.com/github/codeclimate/codeclimate/maintainability"><img src="https://api.codeclimate.com/v1/badges/a99a88d28ad37a79dbf6/maintainability" /></a>

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/cafec2004c2c439aaef161f8d81b9d0b)](https://app.codacy.com/manual/Vincent-gv/snowtricks?utm_source=github.com&utm_medium=referral&utm_content=Vincent-gv/snowtricks&utm_campaign=Badge_Grade_Dashboard)
