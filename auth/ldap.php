<?php
//ip адрес или название сервера ldap(AD)
$ldaphost = "10.10.0.10";
//Порт подключения
$ldapport = "389";
//Полный путь к группе которой должен принадлежать человек, что бы пройти аутентификацию.
//"cn=allow_ppl,ou=users_IT,ou=IT,ou=Kyiv,ou=corp,dc=eddnet,dc=org" - это
//мой пример.
$memberof = "cn=allow_ppl,ou=users_IT,ou=IT,ou=Kyiv,ou=corp,dc=eddnet,dc=org";
//Откуда начинаем искать
$base = "ou=corp,dc=eddnet,dc=org";
//Собственно говоря фильтр по которому будем аутентифицировать пользователя
$filter = "sAMAccountName=";
//Ваш домен, обязательно с собакой впереди. Необходим этот параметр
//для авторизации через AD, по другому к сожалению работать не будет.
$domain = "@eddnet.org";
