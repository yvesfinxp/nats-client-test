<?php
require 'vendor/autoload.php';


use Basis\Nats\Client;
use Basis\Nats\Configuration;
use Basis\Nats\NKeys\CredentialsParser;

// this is default options, you can override anyone
$configuration = new Configuration([
    'host' => 'localhost',
    'port' => 4222,
],
  CredentialsParser::fromFile("./rmm-user.creds")
);



$client = new Client($configuration);
// $client->ping();

$client->publish("subject_sample", "message test");
