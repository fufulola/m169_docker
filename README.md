# m169_docker

## Description
This project is a docker-compose file that creates a wordpress site with a mysql database. The project is based on the official docker images for wordpress and mysql. The project is designed to be used on a local machine for development purposes. The project is not designed to be used in a production environment.

## Installation

1. Install docker and docker-compose on your machine.
2. Clone the project to your machine.
3. Run the following command in the project directory:
```bash
docker-compose up -d
```
4. Open a browser and go to https://localhost:8443



## Tree of the project:
```
📦m169_docker
 ┣ 📂config
 ┃ ┣ 📜httpd.conf
 ┃ ┣ 📜php.ini
 ┃ ┣ 📜server.crt
 ┃ ┣ 📜server.key
 ┃ ┗ 📜wp-config.php
 ┣ 📂scripts
 ┃ ┣ 📜start-mysql.sh
 ┃ ┣ 📜start-wordpress.sh
 ┃ ┗ 📜start-wp.sh
 ┣ 📂source
 ┃ ┗ 📜alpine-minirootfs-3.15.2-x86_64.tar.gz
 ┣ 📜docker-compose.yaml
 ┣ 📜dockerfile.mysql
 ┣ 📜dockerfile.wordpress
 ┗ 📜README.md
````
