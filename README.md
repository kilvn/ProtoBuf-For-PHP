ProtoBuf For PHP 学习手记

1. 首先阅读文档：
https://developers.google.com/protocol-buffers/docs/reference/php-generated


2. 参考教程：
https://www.jianshu.com/p/ce098058edf0


3. 实践：
    - 创建 `.proto` 文件 [person.proto](person.proto)
    - 生成类库 
      - 需要手动创建存放类库的目录 `mkdir ./src`
      - `protoc --php_out=./src person.proto`
    - composer 安装 protobuf 扩展
      - `composer require google/protobuf -vvv`
    - 编写php代码
      - [example.php](example.php)
    - 运行代码查看效果
