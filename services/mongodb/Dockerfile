FROM mongo
MAINTAINER Dominik Stypula <dominik.stypula1@gmail.com>
COPY products.json /home
COPY run-imports.sh /docker-entrypoint-initdb.d
COPY initialScript.js /docker-entrypoint-initdb.d
RUN chown mongodb /home/*