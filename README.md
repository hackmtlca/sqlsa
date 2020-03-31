# (SQL)SA

Template for a PHP and MySQL stack. This is made for competition purposes only. A `/mysql/init.sql` is provided to startup the database with data. The data is wiped once the instance is closed.

## Required Changes

- In `docker-compose.yml`, replace all the `template` to the name of your app. Replace the `root` database password to your own password.
- In `/mysql/init.sql`, replace the `template` database to your database.
- In `/src/index.php`, replace the `root` password to the database password.

## Running the App

All you need is `Docker`. Run the following command in the root of this repository:

```
docker-compose up
```

A frontend instance will be created at `http://localhost/`. Make sure to wait for a message from the database instance stating `port: 3306` is open.

## Closing the App

The app can be closed using CTRL+C. The app can be completely closed with the following command in the root of this repository:

```
docker-compose down
```