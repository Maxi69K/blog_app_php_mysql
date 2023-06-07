# blog app
html, css, bootrap, php, mysql

## Create database
- CREATE DATABASE blog;

## Create table
- CREATE TABLE users (
- id INT AUTO_INCREMENT PRIMARY KEY,
- name VARCHAR(50) NOT NULL,
- email VARCHAR(50) UNIQUE NOT NULL,
- password VARCHAR(50) NOT NULL
- );

- CREATE TABLE posts (
- id INT AUTO_INCREMENT PRIMARY KEY,
- title VARCHAR(100) NOT NULL,
- description VARCHAR(255) NOT NULL,
- user_id INT NOT NULL,
- created_at DATETIME NOT NULL,
- FOREIGN KEY (user_id) REFERENCES users(id)
- );

### `Blog app` :point_right: [Live Demo](https://maxidizajn.eu.org/index.php) :point_left: just do a CTRL+click (to open :link: in a new tab)

<div align="center">
<img src="https://myoctocat.com/assets/images/base-octocat.svg" alt="myoctocat" width="200">
</div>

<div align="center">
<a href="https://webdizajnmaxi.eu.org">By Maxi</a>
</div>
