<?php
function sendSms($phone, $text) {
    $api_id = '18A35B6A-2153-675C-7CB5-3B085101234E'; 


    $phone = preg_replace('/[^0-9]/', '', $phone);
    if (substr($phone, 0, 1) === '8') {
        $phone = '7' . substr($phone, 1);
    } elseif (substr($phone, 0, 1) === '9') {
        $phone = '7' . $phone;
    }

    $url = 'https://sms.ru/sms/send?api_id=' . urlencode($api_id) .
           '&to=' . urlencode($phone) .
           '&msg=' . urlencode($text) .
           '&json=1';

    $response = @file_get_contents($url);
    if ($response === false) return ['status' => 'error', 'error' => 'Ошибка соединения с sms.ru'];

    $result = json_decode($response, true);
    return $result;
}
