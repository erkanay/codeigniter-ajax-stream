#CREATE DATABASE -codeigniter-
CREATE DATABASE codeigniter;
#USE -codeigniter-
USE codeigniter;
#CREATE TABLE -categories-
CREATE TABLE IF NOT EXISTS categories(
  c_id INT NOT NULL AUTO_INCREMENT,	
  name VARCHAR(30) NOT NULL,
  PRIMARY KEY(c_id)
);
#CREATE TABLE -posts-
CREATE TABLE IF NOT EXISTS posts(
p_id INT NOT NULL AUTO_INCREMENT,	
  post TEXT NOT NULL,
  category_id INT NOT NULL,
  post_time TIMESTAMP,
  PRIMARY KEY(p_id),
  FOREIGN KEY(category_id) REFERENCES categories(c_id)
);
