<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
<h1>Arrays</h1>
<pre>
    <?php


    $book = [
        'Автор'=>'Омар Хайям',
        'Название'=>'Рубаи',
        'Стиль' => 'Художественная',
        'Цена'=>'100 грн.',
    ];

    $book2 =  [
        'Автор'=>'Анастрасия Новых',
        'Название'=>'Аллатра',
        'Стиль' => 'Художественная',
        'Цена'=>'120 грн.',
    ];

    $goodsArr = [
        "Книги" =>[
            [
                'Автор'=>'Анастрасия Новых',
                'Название'=>'Сэнсэй. Исконный шамбалы',
                'Стиль' => 'Художественная',
                'Цена'=>'40 грн.',
            ],
            $book,
            $book2,
            [
                'Автор'=>'Лев Толстой',
                'Название'=>'Воскресение',
                'Стиль' => 'Художественная',
                'Цена'=>'60 грн.',
            ],



         ]

    ];




        print_r($goodsArr);
    ?>
</pre>
</body>
</html>