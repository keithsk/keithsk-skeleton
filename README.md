# Introduction

Keithsk PHP Framework for API


## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.


## Prerequisites

Server requirement: 
PHP >= 7.2.5


## Installing

* Run **composer create-project keithsk/skeleton:dev-master myapp**
* Create a new database with collation "utf8mb4_unicode_ci" in mysql (Optional)
* Edit config database (Optional)
* Edit config app (Optional)
* Run **php -S localhost:8000**
* Browse http://localhost:8000


## Naming Convention

### Case

* **Database tables & columns** are snake_case but property names are **camelCase**.
* **Class names** must be declared in **PascalCase**.
* **Class constants** must be declared in all **upper case with underscore separators**.
* **Method names** must be declared in **camelCase**
* **Property names and function arguments** have generally not a specific rule, but must be written according to the package. The only rule is: always use the same. I would suggest **camelCase**.
* **Function names** are **camelCase**. (however the Official PHP coding standards advices snake_case).
* **Variables names** I would suggest **camelCase**

### Plural / Singular

* **Plural** to be declare in database tables, views directory, routes name
* **Singular** to be declare in model & controller class name
