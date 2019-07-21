<?php


use MongoDB\Client;
use PHPUnit\Framework\TestCase as TestCase;

class MongoDBDriverTest extends TestCase {

        const TEST_CONNECTION_URL = 'mongodb://root:example@mongodb/test?retryWrites=true&w=majority';
        const      CONNECTION_URL = 'mongodb://root:example@mongodb/mongodb';

        public function testMongoDBDriver() {
            $client = new Client(
                self::TEST_CONNECTION_URL
            );
            $db = $client->test;
            var_dump($db);
            $this->assertNotEmpty($db);
        }

    public function _testMongoDBQuery() {
        $client = new Client(
            self::CONNECTION_URL
        );
        $manager = $client->getManager();
        $bulk = new MongoDB\Driver\BulkWrite;
        $bulk->insert(['x' => 1]);
        $bulk->insert(['x' => 2]);
        $bulk->insert(['x' => 3]);
        $manager->executeBulkWrite('mongodb.collection', $bulk);

        $filter = ['x' => ['$gt' => 1]];
        $options = [
            'projection' => ['_id' => 0],
            'sort' => ['x' => -1],
        ];

        $query = new MongoDB\Driver\Query($filter, $options);
        $cursor = $manager->executeQuery('db.collection', $query);

        foreach ($cursor as $document) {
            var_dump($document);
        }
    }
}