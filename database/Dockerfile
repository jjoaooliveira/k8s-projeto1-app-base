FROM postgresql

ENV POSTGRES_PASSWORD=123
ENV POSTGRES_DB=meubanco

ADD sql.sql /docker-entrypoint-initdb.d

EXPOSE 5432