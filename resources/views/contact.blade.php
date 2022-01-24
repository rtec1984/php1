@extends('layouts.main')

@section('title', 'Contato')

@section('content')

<h1>Contato</h1>

require '/path/to/vendor/autoload.php';

//Create Client in Ruby/Rails
client = Aws::S3::Client.new({
    access_key_id: "AKIAU4LAKYYRWWY5HF2N",
    secret_access_key: "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",
    region: "us-west-1"
  })

//Upload file in Ruby/Rails
resp = client.put_object({
    acl: "private", # accepts private, public-read
    body: source_file, # file/IO object, or string data
    bucket: "arn:aws:s3:us-west-1:335746352675:accesspoint/felix-cloud-shared-2-rtec", 
    key: "rtec/path/to/HappyFace.jpg", 
  })
  
  resp.to_h outputs the following:
  {
    etag: "\"6805f2cfc46c0f04559748bb039d69ae\"", 
    version_id: "tpf3zF08nBplQK1XLOefGskR7mGDwcDk", 
  }

  //Get file URL in Ruby/Rails
  base_url = "https://felix-cloud-shared-2.s3.us-west-1.amazonaws.com/rtec/"
  public_url = base_url + "path/to/HappyFace.jpg"

  //Delete file in Ruby/Rails
  resp = client.delete_object({
    bucket: "arn:aws:s3:us-west-1:335746352675:accesspoint/felix-cloud-shared-2-rtec", 
    key: "rtec/path/to/HappyFace.jpg", 
  })

@endsection