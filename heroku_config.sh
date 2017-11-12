heroku config:set APP_NAME=Laravel
heroku config:set APP_ENV=local
heroku config:set APP_KEY=base64:VdcaUzRRAMtZ8Kkz+QN4Qxh9ot8QbU9Y/UZ4hXf6s8I=
heroku config:set APP_DEBUG=true
heroku config:set APP_LOG_LEVEL=debug
heroku config:set APP_URL=http://localhost

heroku config:set DB_CONNECTION=pgsql
heroku config:set DB_HOST=127.0.0.1
heroku config:set DB_PORT=3306
heroku config:set DB_DATABASE=authapidb
heroku config:set DB_USERNAME=homestead
heroku config:set DB_PASSWORD=secret

heroku config:set BROADCAST_DRIVER=log
heroku config:set CACHE_DRIVER=file
heroku config:set SESSION_DRIVER=file
heroku config:set SESSION_LIFETIME=120
heroku config:set QUEUE_DRIVER=sync

#heroku config:set REDIS_HOST=127.0.0.1
#heroku config:set REDIS_PASSWORD=null
#heroku config:set REDIS_PORT=6379

#heroku config:set MAIL_DRIVER=smtp
#heroku config:set MAIL_HOST=smtp.mailtrap.io
#heroku config:set MAIL_PORT=2525
#heroku config:set MAIL_USERNAME=null
#heroku config:set MAIL_PASSWORD=null
#heroku config:set MAIL_ENCRYPTION=null

#heroku config:set PUSHER_APP_ID=
#heroku config:set PUSHER_APP_KEY=
#heroku config:set PUSHER_APP_SECRET=
