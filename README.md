# php-blog
Simple Blog Application use CakePHP
This blog application was created while I was a student at Code Chrysalis to learn the differences between JavaScript and PHP.

## Getting Started

Look over the [CakePHP Instructions](CakePHP_Instructions.md) to understand what is needed to create a CakePHP application

### Prerequisites

In order to run this application locally you will need
[Apache Web server](https://httpd.apache.org/)
A [MySQL](https://www.mysql.com/) database
And the PHP dependency manager [Composer](https://getcomposer.org/)

I developed the application using [MAMP](https://www.mamp.info/en/) 

### Installing

Clone the php-blog repository into the Document Root of your web server. 
If you ran the default install of MAMP this will be at /Applications/MAMP/htdocs

After cloning the php-blog github repository you will need to  
the dependencies run Composer within the project folder.

```
composer install
```

Without the database you should be able to now view the CakePHP home page at localhost:8888/ 
(if you aer using MAMP the port will be 8888 if not configure to your servers localhos port)

### Database set up

This application only needs one table. Use this [query][Articles_sql.md]
You will need to update the datasbase configuration

### Future Enhancements

Working on adding database migrations so users can deploy the application. 

## Built With

* [PHP 7.2.1](http://php.net/) 
* [CakePHP](https://cakephp.org/)

## Authors

* **Mike Donnelly** - *Initial work* - [SQLMD](https://github.com/SQLMD)

See also the list of [contributors](https://github.com/SQLMD/php-blog/contributors) who participated in this project.

## License

This project is licensed under the MIT License

## Acknowledgments

* Thank you to Code Chrysalis(https://www.codechrysalis.io/) for all the help

