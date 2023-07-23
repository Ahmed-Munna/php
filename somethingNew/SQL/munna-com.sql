-- //user create;

The following are the step required to create a new user in the MySQL server database.

Step 1: Open the MySQL server by using the mysql client tool.

Step 2: Enter the password for the account and press Enter.

Enter Password: ********  
Step 3: Execute the following command to show all users in the current MySQL server.

mysql> select user from mysql.user;  
We will get the output as below:

MySQL Create User

Step 4: Create a new user with the following command.

mysql> create user peter@localhost identified by 'jtp12345';  
Now, run the command to show all users again.

MySQL Create User

In the above output, we can see that the user peter has been created successfully.

Step 5: Now, we will use the IF NOT EXISTS clause with the CREATE USER statement.

mysql> CREATE USER IF NOT EXISTS adam@localhost IDENTIFIED BY 'jtp123456';  
Grant Privileges to the MySQL New User
MySQL server provides multiple types of privileges to a new user account. Some of the most commonly used privileges are given below:

ALL PRIVILEGES: It permits all privileges to a new user account.
CREATE: It enables the user account to create databases and tables.
DROP: It enables the user account to drop databases and tables.
DELETE: It enables the user account to delete rows from a specific table.
INSERT: It enables the user account to insert rows into a specific table.
SELECT: It enables the user account to read a database.
UPDATE: It enables the user account to update table rows.
If you want to give all privileges to a newly created user, execute the following command.

mysql> GRANT ALL PRIVILEGES ON * . * TO peter@localhost;  
If you want to give specific privileges to a newly created user, execute the following command.

mysql> GRANT CREATE, SELECT, INSERT ON * . * TO peter@localhost;  
Sometimes, you want to flush all the privileges of a user account for changes occurs immediately, type the following command.

FLUSH PRIVILEGES;  
If you want to see the existing privileges for the user, execute the following command.

mysql> SHOW GRANTS for username;  

-- ..end create

-- Drop user

The following syntax is used to delete the user accounts from the database server completely.

DROP USER 'account_name';  
The account_name can be identified with the following syntax:

username@hostname  
Here, the username is the name of the account, which you want to delete from the database server and the hostname is the server name of the user account.

MySQL Drop USER Example
The following are the step required to delete an existing user from the MySQL server database.

Step 1: Open the MySQL server by using the mysql client tool.

Step 2: Enter the password for the account and press Enter.

Enter Password: ********  
Step 3: Execute the following command to show all users in the current MySQL server.

mysql> select user from mysql.user;  
We will get the output as below:

MySQL Drop User

Step 4: To drop a user account, you need to execute the following statement.

DROP USER martin@localhost;  
Here, we are going to remove the username 'martin' from the MySQL server. After the successful execution of the above command, you need to execute the show user statement again. You will get the following output where username martin is not present.

MySQL Drop User

Step 5: The DROP USER statement can also be used to remove more than one user accounts at once. We can drop multiple user accounts by separating account_name with comma operator. To delete multiple user accounts, execute the following command.

DROP USER john@localhost, peter@localhost;  
Here, we are going to remove john and peter accounts from the above image. After the successful execution of the above command, you need to execute the show user statement again. You will get the following output where username john and peter is not present.

MySQL Drop User

-- end of Drop

-- show user

mysql> Select user from mysql.user;  
After the successful execution of the above statement, we will get the user data from the user table of the MySQL database server.

Let us see how we can use this query. First, we have to open the MySQL server by using the mysql client tool and log in as an administrator into the server database. Execute the following query:

> mysql -u root -p  
Enter password: *********  
mysql> use mysql;  
Database changed  
mysql> SELECT user FROM user;  
We will get the following output where we can see the five users in our local database:


If we want to see more information on the user table, execute the command below:

mysql> DESC user;  
It will give the following output that lists all the available columns of the mysql.user database:

MySQL Show Users

To get the selected information like as hostname, password expiration status, and account locking, execute the query as below:

mysql> SELECT user, host, account_locked, password_expired FROM user;  
After the successful execution, it will give the following output:

MySQL Show Users

Show Current User
We can get information of the current user by using the user() or current_user() function, as shown below:

mysql> Select user();  
         or,  
mysql> Select current_user();  
After executing the above command, we will get the following output:

MySQL Show Users

Show Current Logged User
We can see the currently logged user in the database server by using the following query in the MySQL server:

mysql> SELECT user, host, db, command FROM information_schema.processlist;  
The above command gives the output, as shown below:

MySQL Show Users


In this output, we can see that there are currently four users logged in the database, where one is executing a Query, and others show in Sleep or Daemon status.

-- end of show 

-- update password
mysql> USE mysql;  
   
mysql> UPDATE user SET password = PASSWORD('jtp12345') WHERE user = 'peter' AND host = 'localhost';  
   
mysql> FLUSH PRIVILEGES;  
If you are using the MySQL version 5.7.6 or higher, the above statement will not work. It is because the MySQL user table contains the authentication_string column that stores the password only. Now, the higher versions contain the authentication_string column in the UPDATE statement, like the following statement.

mysql> USE mysql;  
   
mysql> UPDATE user SET authentication_string = PASSWORD('jtp12345') WHERE user = 'peter' AND host = 'localhost';  
   
mysql> FLUSH PRIVILEGES;  
Change user account password using SET PASSWORD statement

The SET PASSWORD statement is the second way to change the user password in the MySQL database. If you want to change the other account password, you must have the UPDATE privilege. The SET PASSWORD statement uses the user account in the username@localhost format.

There is no need to use the FLUSH PRIVILEGES statement for reloading privileges from the grant tables of the MySQL database. We can use the following statement to change the password of user account peter by using the SET PASSWORD statement:

mysql> SET PASSWORD FOR 'peter'@'localhost' = PASSWORD('jtp12345');  
If you are using the MySQL version 5.7.6 or higher, the above statement deprecated and will not work in future releases. Instead, we need to use the following statement:

mysql> SET PASSWORD FOR 'peter'@'localhost' = jtp12345;  
Change user account password using ALTER USER statement

The ALTER USER statement is the third way to change the user password in the MySQL database. MySQL uses ALTER USER statement with the IDENTIFIED BY clause for changing the password of a user account. We need to use the following syntax to change the password of a user peter with jtp123.

mysql> ALTER USER peter@localhost IDENTIFIED BY 'jtp123';  
Sometimes, you need to reset the MySQL root account password. In that case, you can force to stop and restart the MySQL database server without using the grant table validation.

-- end of update

MySQL CREATE TableMySQL ALTER TableMySQL Show TablesMySQL Rename TableMySQL TRUNCATE TableMySQL Describe TableMySQL DROP TableMySQL Temporary TableMySQL Copy TableMySQL Repair TableMySQL Add/Delete ColumnMySQL Show ColumnsMySQL Rename ColumnMySQL ViewsMySQL Table LockingMySQL Account LockMySQL Account Unlock
MySQL QueriesMySQL ConstraintsMySQL INSERT RecordMySQL UPDATE RecordMySQL DELETE RecordMySQL SELECT RecordMySQL ReplaceInsert On Duplicate Key UpdateMySQL INSERT IGNOREInsert Into Select










