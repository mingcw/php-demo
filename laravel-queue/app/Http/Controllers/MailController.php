<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Jobs\SendReminderEmail;

class MailController extends Controller
{
	// 发送邮件（无队列）
    public function send()
    {
        $name = '李雷';

        // 简单邮件发送
        // Mail::send('emails.test', ['name' => $name], function ($message) {
        //     $to = 'example@gmail.com';
        //     $message ->to($to)->subject('测试邮件');
        // });
        
        // 纯文本邮件
        // Mail::raw('这是一封测试邮件', function ($message) {
		//     $to = 'example@gmail.com';
		//     $message ->to($to)->subject('纯文本邮件');
		// });

		// 带附件，内嵌图片
		$imgPath = storage_path("app/images/test.jpg");
		Mail::send('emails.test', ['name' => $name, 'imgPath' => $imgPath], function ($message) {
		    $to = 'example@gmail.com';
		    $message->to($to)->subject('测试邮件');

		    $attachment = storage_path('app/files/test.docx');
		    //在邮件中上传附件
		    $message->attach($attachment, ['as' => "=?UTF-8?B?" . base64_encode('测试文档') . "?=.doc"]); //防止中文乱码
		});
    }
    
	//发送提醒邮件（有队列）
	public function sendReminderEmail(Request $request, $id)
	{
		$user = User::findOrFail($id);
		$this->dispatch(new SendReminderEmail($user));
		
		return "提醒邮件已经发送，请及时查收";
	}
}
