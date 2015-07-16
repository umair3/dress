Note: Clone/Pull the latest code from github at https://github.com/umair3/dress.git

----------------------
Requirements
----------------------
PHP 5.5
Apache 2.2
MySQL 5.6


----------------------
Code Included
----------------------

a- Mapper
b- Provider
c- Requester

----------------------
Steps to follow
----------------------

1- Run Mapper to create Mappings. You must set the base URL in mapper\application\config\config.php to get a valid API URL.

2- Make sure that mappings run successfully and stored in ws_properties directory.

3- Check the URL of the web-service in browser returned by the mapper at the last step. It must work, else repeat steps 1, 2, 3.

4- To run request, you must import the URL registry to the database from \requester\sql\address_list.sql

5- Run the requester. Add the URL to the provider list by making an agreement.

6- You are up and running. Exchange document now using the requester GUI.


Thank you

Note: Clone/Pull the latest code from github at https://github.com/umair3/dress.git