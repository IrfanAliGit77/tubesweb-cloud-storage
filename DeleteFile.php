<?php
require_once "vendor/autoload.php";
 
use Google\Cloud\Storage\StorageClient;
 
try {
    $storage = new StorageClient([
        'keyFilePath' => getcwd().'/friendly-access-364700-37a653238b1e.json',
    ]);
 
    $bucket = $storage->bucket('exam-bucket-2');
    $object = $bucket->object('FILE_NAME');
 
    $object->delete();
    } catch(Exception $e) {
    echo $e->getMessage();
}