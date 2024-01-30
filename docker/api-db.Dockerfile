FROM mysql:8.0

ENV MYSQL_ROOT_PASSWORD=admin
ENV MYSQL_DATABASE=classicmodels

COPY ./docker/docker-entrypoint-initdb.d/ /docker-entrypoint-initdb.d/

EXPOSE 3306

CMD ["mysqld"]