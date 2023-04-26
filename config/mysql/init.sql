CREATE DATABASE IF NOT EXISTS wordpress CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE USER 'wordpress'@'%' IDENTIFIED BY 'wordpress';
GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'%';
FLUSH PRIVILEGES;
