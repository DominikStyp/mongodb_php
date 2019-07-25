#!/bin/bash
mongoimport -u ${MONGO_INITDB_ROOT_USERNAME} -p ${MONGO_INITDB_ROOT_PASSWORD} --authenticationDatabase=admin  --db ${MONGO_INITDB_DATABASE} --collection products --file /home/products.json
ls -lah /home
#rm -rf /home/*.json
