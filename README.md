# Installation

Make sure your UNIX user is group of docker.
```
sudo usermod -aG docker $USER
```

Build docker containers using below command. The command will create three containers which is PHP, Nginx and Mysql.
```
docker-compose up --build -d
```

Run this command to migrate the DB from Lumen migration.
```
docker-compose exec php php /var/www/html/app/artisan migrate
```

For how to use the API, you can visit API Docs in [here](https://documenter.getpostman.com/view/7662959/SVmsTz9n?version=latest)