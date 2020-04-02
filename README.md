# (SQL)SA

This problem is part of the `Intro to Hacking Workshop`. View the [Bug Bounty Guide](https://github.com/hackmtlca/bug-bounty-guide) for more information about the score system.

## Context

(SQL)SA is the top security agency of Hack MTL. They keep all the SQL and data safe for the website. Recently, they noticed that a hacker managed to bypass their DEFCON 1 measure. You think you can figure out aswell?

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