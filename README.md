# MongoDB + Mongo Express + PHP 7.4
This repository contains ready to use `docker-compose.yml` which contains following services:
1. MongoDB server
2. Mongo Express - light http admin (like PHPMyAdmin for MySQL)
3. PHP 7.4 - lastest PHP version with **Composer** and **PHPUnit** to fire up tests

# How run all containers
1. Clone this repository 
2. Go to directory with: `docker-compose.yml` file
3. Run command: `docker-compose up --build -d`

# How to use Mongo Express
1. Check you Docker Machine IP: `docker-machine ls` it should be under URL columnm, for example: *tcp://192.168.99.100:2376*
2. Check if your MongoDB and Mongo Express are running: `docker ps` and see if it's running <br />
   You should see mongo-express there and in PORTS column value like: *0.0.0.0:8081->8081/tcp* <br />
   8081 is the port you are interested in.
3. Go to your browser and paste Docker Machine IP + Mongo Express port like in following example: <br />
   http://192.168.99.100:8081 - and you should see Mongo Express welcome page.
