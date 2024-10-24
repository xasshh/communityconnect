<?php
use Illuminate\Support\Facades\Mail;

Route::get('/test-email', function () {
    Mail::raw('This is a test email', function ($message) {
        $message->to('adeoyemeshack37@gmail.com')
                ->subject('Test Email');
    });

    return 'Test email sent';
});
