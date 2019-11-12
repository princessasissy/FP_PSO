<?php

return [

    'success' => [
        'added'             => ':type добавлено!',
        'updated'           => ':type обновлено!',
        'deleted'           => ':type удалено!',
        'duplicated'        => ':type продублировано!',
        'imported'          => ':type импортировано!',
        'enabled'           => ':type включен!',
        'disabled'          => ':type отключен!',
    ],

    'error' => [
        'over_payment'      => 'Ошибка: Платёж не добавлен! Вам следует ввести сумму, которая подходит: :amount',
        'not_user_company'  => 'Ошибка: Вы не можете управлять этой компанией!',
        'customer'          => 'Ошибка: Пользователь не создан! :name уже использует этот адрес электронной почты.',
        'no_file'           => 'Ошибка: Файл не выбран!',
        'last_category'     => 'Ошибка: Невозможно удалить последнюю категорию :type!',
        'invalid_token'     => 'Ошибка: Введенный токен неверен!',
        'import_column'     => 'Ошибка: :message Sheet name: :sheet. Номер строки: :line.',
        'import_sheet'      => 'Ошибка: Имя листа неверно. Пожалуйста, проверьте файл образца.',
    ],

    'warning' => [
        'deleted'           => 'Предупреждение: Вы не можете удалить <b>:name</b> потому что имеется связь с :text.',
        'disabled'          => 'Предупреждение: Вы не можете отключить <b>:name</b> потому что имеется связь с :text.',
        'disable_code'      => 'Предупреждение: Вы не можете отключить <b>:name</b> потому что имеется связь с :text.',
    ],

];
