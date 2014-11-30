<?php
require 'pb_proto_sellerLogin.php';

$obj = new SellerLogin();
$obj->setUsername('liguizhi');
$obj->setPassword('testpass');
$obj->setAppId(1001);
$obj->setAppName('kongfz');
$obj->dump();

$loginOut = new SellerLoginOutPut();
$loginOut->setStatus(1);
$loginOut->setUid(1034285);
$loginOut->setToken('testToken5');
$loginOut->setPhoto('http://user.kongfz.com/1034285/photo.jpg');
echo "successOutput:\n";
$loginOut->dump(TRUE);
//var_dump(json_decode(json_encode($loginOut),TRUE));
echo "failureOutput:\n";
$loginFail = new SellerLoginOutPut();
$loginFail->setStatus(0);
$loginFail->setCode(10034);
$loginFail->setInfo('密码错误');
$loginFail->dump();

require 'pb_proto_test.php';
$per = new Person();
$per->setEmail('liguizhi@kongfz.com');
$per->setId(123);
$per->setName('guizhi');
$phone = new Person_PhoneNumber();
$phone->setNumber(13671023906);
$per->appendPhone($phone);
$phone = new Person_PhoneNumber();
$phone->setNumber(13521626410);
$per->appendPhone($phone);
//$per->appendPhone(2);
//$per->appendPhone(3);
$per->dump();
$type = new Person_PhoneType();
var_dump($type->getEnumValues());