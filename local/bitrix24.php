<?php

// вебхук
$webhookUrl = 'https://yourdomain.bitrix24.ru/rest/1/your_webhook_key/';

// ID контакта
$contactId = 111;


$deals = json_decode(file_get_contents($webhookUrl . 'crm.deal.list?filter[CONTACT_ID]=' . $contactId . '&order[ID]=DESC'), true);

if (!empty($deals['result'])) {
    $lastDealId = $deals['result'][0]['ID'];

    $taskData = [
        'fields' => [
            'TITLE' => 'Задача для последней сделки',
            'RESPONSIBLE_ID' => 111,
            'DESCRIPTION' => 'Описание задачи.',
            'UF_CRM_DEAL' => $lastDealId
        ]
    ];

    $result = json_decode(file_get_contents($webhookUrl . 'task.item.add', false, stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => json_encode($taskData)
        ]
    ])), true);

    if ($result['result']) {
        echo 'Задача успешно создана и привязана к сделке!';
    } else {
        echo 'Ошибка при создании задачи: ' . $result['error_description'];
    }
} else {
    echo 'Нет сделок для данного контакта.';
}
