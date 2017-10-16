<?php
// 1. 创建Socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// 2. 建立连接
$result = socket_connect($socket, '127.0.0.1', 11279);
if($result === false){
	socket_close($socket);
	die('Socket connect failed: ' . socket_strerror(socket_last_error($socket)));
}

// 3. 交互
while($result){    
    // 获取响应
    $response = socket_read($socket, 1024);
    echo $response;

    // 发送请求
    $request = fgets(STDIN);
    socket_write($socket, $request, 1024);

    // 关闭连接
    if($request == "bye" . PHP_EOL){
		socket_shutdown($socket);
    	break;
    }
}

// 4.销毁Socket
socket_close($socket);