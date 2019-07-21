# MongoDB + Mongo Express + PHP 7.4 + PHPUnit
This repository contains ready to use `docker-compose.yml` which contains following services:
1. MongoDB server
2. Mongo Express - light http admin (like PHPMyAdmin for MySQL)
3. PHP 7.4 - lastest PHP version with **Composer** and **PHPUnit** to fire up tests

# How run all containers
1. Clone this repository 
2. Go to directory with: `docker-compose.yml` file
3. Run command: `docker-compose up --build -d`

# How to use Mongo Express
1. Check your **Docker Machine** IP: `docker-machine ls`<br /> 
   It should be under URL column, for example: *tcp://192.168.99.100:2376*
2. Check if your **MongoDB** and **Mongo Express** are running command: `docker ps` <br />
   You should see mongo-express there, and under PORTS column value like: *0.0.0.0:8081->8081/tcp* <br />
   *8081* is the port you are interested in.
3. Go to your browser and paste **Docker Machine IP + Mongo Express** port like in following example: <br />
   http://192.168.99.100:8081 - and you should see Mongo Express welcome page.
   
# Running PHPUnit tests
You can use **PHP 7.4** with **PHPUnit** to quikcly run the tests from **./tests** directory (which should appear when you run **php74** service along with others). <br />
Tu run the tests:
1. Go to directory with: `docker-compose.yml` file
2. Run command: `docker-compose run php74` <br />
If no tests are executed this means you don't have any PHPUnit tests there.

# Other Features
1. Copying **vendor** files from container to shared directory: `docker-compose run php74 -c` <br />
   This may be useful when you want to have plugins installed by **composer** in your project, <br />
   and use them for autocompletion in PHPStorm and other IDE's
