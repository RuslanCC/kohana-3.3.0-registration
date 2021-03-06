<?php
return array(
    'email' => array(
        'not_empty' =>  'Поле E-mail не может быть пустым.',
        'min_length'    =>  'Длина E-mail не может быть менее 6 символов.',
        'max_length'    =>  'Длина E-mail не может быть более 127 символов.',
        'email'     =>  'Некорректный формат E-mail.',
		'unique'	=>	'Такой E-Mail уже зарегистрирован',
    ),
	'password' => array(
		'not_empty' =>  'Пароль не может быть пустым.',
		'min_length'    =>  'Длина пароля не может быть менее 5 символов.',
		'max_length'    =>  'Длина пароля не может быть более 127 символов.',
	),
	'username' => array(
		'not_empty' =>  'Имя не может быть пустым.',
		'min_length'    =>  'Длина имени не может быть менее 4 символов.',
		'max_length'    =>  'Длина имени не может быть более 127 символов.',
		'unique'	=>	'Такое имя пользователя уже занято',
	),
);
?>