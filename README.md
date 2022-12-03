ONLINE BANK MANAGEMENT SYSTEM:

This project is to maintain online banking system to help both employees and customers access their details and maintain the accounts using web interface.

Database : MySql
Webinterface : HTML, CSS, PHP.
Server: Xampp

Requirements: mysql, Xampp server with mysql, php and phpmyadmin setup, VSCode IDE ( recommended to code html and php) 

Download link for Xampp:
https://www.apachefriends.org/download.html
After installing, xampp, in xampp control panel, start Apache and mysql and we are ready.

1. Create database and create different tables like employee, customer in mysql(phpmyadmin) using db table queries that we have in db file ( bankingschema.sql)
Link to access phpmyadmin  :  http://localhost/phpmyadmin/

2. In xampp path, there is working folder htdocs. Create a folder within htdocs and have all the files inside ( html and php files ).

Ex:  C:\xampp\htdocs\contact\

Here, contact is the folder inside htdocs.

3. Next, run the html page using link : http://localhost/contact/bankinghomepage.html in any browser.

4. This homepage has different links to Employee (employee-main.html) and Customer (customer.html). Click on employee and customer to access employee and customer pages respectively.

5. Employee-main.html has two different ref links : To add new customer and fetch customer details. 

6. Add new customer will take to employee.html, give customer details to add to database and click submit.

7. Fetch customer details is php page that directly gives table with all customer details onto page.

8. Customer.html page has box to provide account number. Account balance will be fetched once clicked on submit.

9. Check table in phpmyadmin or mysql workbench to see if new customer got added to the table.

