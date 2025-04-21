FROM postgres

ENV POSTGRES_PASSWORD password
ENV POSTGRES_DB db
ENV POSTGRES_USER docker

# COPY init.sql /docker-entrypoint-initdb.d/
COPY init.sql /app/database/
