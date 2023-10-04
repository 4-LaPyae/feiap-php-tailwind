<?php

function sendEmailWithSendGrid($to, $first_name, $last_name, $secretKey)
{
    if ($secretKey != 'HelloSabahna') {
        exit();
    }

    $sendgrid_api_key = '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';
    $url = 'https://api.sendgrid.com/v3/mail/send';

    $headers = [
        'Authorization: Bearer ' . $sendgrid_api_key,
        'Content-Type: application/json'
    ];

    $data = [
        'personalizations' => [
            [
                'to'  =>
                [

                    ['email' => $to, 'name' => $first_name . " " . $last_name]
                ],
                'dynamic_template_data' => [
                    'full_name' => $first_name . " " . $last_name
                ],
            ],
        ],
        'from' => [
            'email' => 'noreply@myanmarengc.org',
            'name' => "Myanmar Engineering Council"
        ],

        'reply_to' => [
            'email' => "noreply@myanmarengc.org",
        ],

        'template_id' => "d-565384b353104277b1cf2b55633ae4d0",
    ];


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}
