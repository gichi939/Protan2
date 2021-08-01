FROM mysql/mysql-server:8.0.25

ENV MYSQL_DATABASE=potan2 \
  MYSQL_USER=root \
  MYSQL_PASSWORD=secret \
  MYSQL_ROOT_PASSWORD=secret \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf