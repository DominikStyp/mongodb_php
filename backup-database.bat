docker exec mongodb_php_mongodb_1 sh -c 'exec mongodump -u root -p example -d myFirstDB --authenticationDatabase admin --archive' > ./mongo_database_backups/all-collections.archive.js