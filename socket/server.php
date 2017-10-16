<?php
set_time_limit(0);   // 去掉时间限制
ob_implicit_flush(); // 开启强制刷新

// 1. 创建Socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// 2. 绑定端口和IP
socket_bind($socket, '127.0.0.1', 11279);

// 3. 端口监听
socket_listen($socket);
echo 'Server is listening!' . PHP_EOL;

// 4. accept阻塞进程
$connect = socket_accept($socket); // 直到有连接进入，accept才会返回
echo 'Client [' . $connect . '] is accessing...' . PHP_EOL;

// 5. 交互
socket_write($connect, 'Welcome, visitor! Now you can send message to the server.' . PHP_EOL);
while ($connect) {
	// 获取请求
	$request = socket_read($connect, 1024);
	echo 'Client ['. $connect .'] message: ' . $request;

	// 关闭连接
	if($request == "bye" . PHP_EOL){
		socket_shutdown($connect);
		break;
	}

	// 发送响应
	$response = 'Your sended message: ' . $request;
	socket_write($connect, $response);
}

// 6. 销毁Socket
socket_close($socket);