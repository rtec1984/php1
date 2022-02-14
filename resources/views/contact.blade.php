@extends('layouts.main')

@section('title', 'Contato')

@section('content')

<h1>Contato</h1>

<?php

// Include the SDK using the Composer autoloader
date_default_timezone_set('America/Los_Angeles');
require 'vendor/autoload.php';

$s3 = new Aws\S3\S3Client([
  'version' => 'latest',
  'region'  => 'us-east-1',
  'endpoint' => 'https://' . getenv('STACKHERO_MINIO_HOST'),
  'use_path_style_endpoint' => true,
  'credentials' => [
    'key'    => getenv('STACKHERO_MINIO_ACCESS_KEY'),
    'secret' => getenv('STACKHERO_MINIO_SECRET_KEY')
  ],
]);


// Send a PutObject request and get the result object.
$insert = $s3->putObject([
  'Bucket' => 'testbucket',
  'Key'    => 'testkey',
  'Body'   => 'Hello from MinIO!!'
]);

// Download the contents of the object.
$retrive = $s3->getObject([
  'Bucket' => 'testbucket',
  'Key'    => 'testkey',
  'SaveAs' => 'testkey_local'
]);

// Print the body of the result by indexing into the result object.
echo $retrive['Body'];

@endsection