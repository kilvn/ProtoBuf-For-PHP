# ProtoBuf For PHP 学习手记

## 实践

   1. 创建 `.proto` 文件 [person.proto](person.proto)
   2. 安装php扩展 `pecl install protobuf`
   3. 生成类库 
      - 需要手动创建存放类库的目录 `mkdir ./src`
      - `protoc --php_out=./src person.proto`
   4. composer 安装 protobuf 扩展
      - `composer require google/protobuf -vvv`
   5. 编写php代码
      - [example.php](example.php)
   6. 运行代码查看效果

## 总结

   ### PHP常用的使用方法：
   
   * 序列化：
      - `serializeToString`：序列化成二进制字符串
      - `serializeToJsonString`：序列化成JSON字符串 
      - `serializeToStream`：序列化成二进制流
      - `serializeToJsonStream`：序列化成JSON流 
   * 反序列化：
      - `mergeFromString`：二进制字符串反序列化
      - `mergeFromJsonString`：Json字符串反序列化
      - `parseFromStream`：二进制流反序列化
      - `parseFromJsonStream`：Json流反序列化

   ### .proto的message解析

   * 定义：

      类型 变量名=位置;

      如：`int32 age=1;`

      这里需要区分，变量名后面的数字意义为该变量内容在二进制序列中的位置而不是变量的值，该数字必须是唯一不可重复使用。
   

   * 目前支持的类型：
      
      `double`,`float`,`int32`,`int64`,`uint32` ,`uint64`,`sint32`,`sint64`
      `fixed32`,`fixed64`,`sfixed32`,`sfixed64`,`bool`,`bytes`

## protobuf-php github
https://github.com/protocolbuffers/protobuf/tree/master/php

## 官方文档
https://developers.google.com/protocol-buffers/docs/reference/php-generated

## 参考文章
https://www.jianshu.com/p/ce098058edf0
