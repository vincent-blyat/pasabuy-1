---Project configuration set up:---

Setting up Back-end folder:
1. Change directory into back-end folder
2. Run 'composer install' on cmd
3. Run 'npm install' on cmd
4. Run 'php artisan serve --host=localhost' on cmd

Setting up Front-end folder:
1. Change directory into front-end folder
2. Run 'npm install' on cmd
3. Run 'npm run build' on cmd
4. Run 'npm run serve' on cmd



If encountered this erros:


1. Error: 500 
   Solution: Your .env file in back-end folder is missin
	     rename the .env.example into .env
	     run 'php artisan key:generate' on cmd

	     ----For back end developers----
	     Change the DB_DATABASE to 6wcr5ync85

	     ----For front-end developers----
	     Change the value of DB_HOST = remotemysql.com
	     and the DB_USERNAME and DB_PASSWORD (Please refer to the file that was sent in the BLOCK B Announcements for the database password and username)
	     Change the DB_DATABASE to 6wcr5ync85


2. Error: 401 or 419 (Unauthorized or Unknown Status)
   Solution: add this lines to your .env file inside back-end folder
	     SESSION_DRIVER=cookie
	     SESSION_DOMAIN=localhost
	     SANCTUM_STATEFUL_DOMAINS=localhost:8080,localhost:8000


If encountered different errors while setting up the project, kindly message the back-end department. Thank you.
