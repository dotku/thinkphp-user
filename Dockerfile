FROM daocloud.io/php:5.6-cli

COPY . /thinkphp-user
WORKDIR /thinkphp-user
CMD [ "php", "./index.php" ]