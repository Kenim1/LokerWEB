CREATE DATABASE job_vacancies;

USE job_vacancies;

CREATE TABLE jobs (
  id INT AUTO_INCREMENT,
  title VARCHAR(255),
  description TEXT,
  company VARCHAR(255),
  location VARCHAR(255),
  PRIMARY KEY (id)
);

CREATE TABLE users (
  id INT AUTO_INCREMENT,
  name VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255),
  PRIMARY KEY (id)
);
