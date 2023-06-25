"# php-api-mysqlv1" 

Para el Thunder Client uso las siguientes URL:
1. Show all
http://localhost/php_api_mysql/controller/category.php?op=GetAll


2. Delete
http://localhost/php_api_mysql/controller/category.php?op=delete

y en el body en formato JSON le paso:
{
  "cat_id":3
}

3. Insert
http://localhost/php_api_mysql/controller/category.php?op=insert

{
  "cat_name":"móviles",
  "cat_observation":"observaciones móviles"
}

4. Update
http://localhost/php_api_mysql/controller/category.php?op=update

{
  "cat_id":"4",
  "cat_name":"bicicletas",
  "cat_observation":"observaciones bicicletas"
}

5.Get 1 item
http://localhost/php_api_mysql/controller/category.php?op=GetId

{
  "cat_id":2
}