<?php
$fillAllMessage = false;
$mailingCompleted = false;

$name = isset($_POST['name']) ? $_POST['name'] : null;
$contacts = isset($_POST['contacts']) ? $_POST['contacts'] : null;
$description = isset($_POST['description']) ? $_POST['description'] : null;

if ($name || $contacts || $description) {
    if ($name && $contacts && $description) {
        $text = sprintf("
Имя: %s
Обратная связь: %s
Предложение:
%s
", $name, $contacts, $description);
        mail('groundsale@yandex.ru', 'Письмо с ripka.ru', $text);
        $mailingCompleted = true;
    } else {
        $fillAllMessage = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <?php
        if ($mailingCompleted) {
            echo '<div id="completed"><div class="small">Сообщение успешно отправлено, с вами свяжутся в ближайшее время!</div></div>';
        } elseif ($fillAllMessage) {
            echo '<div id="error"><div class="small">Пожалуйста, заполните все поля в заявке! <a href="#contacts">Перейти к заполнению</a></div></div>';
        }
    ?>
    <div id="header">
        <div class="small">
            <span>
                Живая скрипка на праздники и корпоративы.
            </span>
        </div>
    </div>
    <div id="general">
        <div class="small">
            <div>
                <h1 style="text-align:center">Живое исполнение на скрипке</h1>
                <br>
                <p>Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот, несмотря на название, не имеет никакого отношения к обитателям водоемов.
                    Используется он веб-дизайнерами для вставки на интернет-страницы и демонстрации внешнего вида контента, просмотра шрифтов, абзацев, отступов и т.д. Так как цель применения такого текста исключительно демонстрационная, то и смысловую нагрузку ему нести совсем необязательно. Более того, нечитабельность текста сыграет на руку при оценке качества восприятия макета.</p>
            </div>
        </div>
    </div>
    <div id="service">
        <div class="small">
            <div class="service-item">
                <img src="image/quavers.png">
                <div class="item-head">
                    Выступление на праздниках и корпоративах
                </div>
                <div class="item-body">
                    Живая скрипка скрасит любой корпоратив или банкет
                </div>
            </div>
            <div class="service-item">
                <img src="image/violinBlack.png">
                <div class="item-head">
                    Музыка для танца молодожёнов
                </div>
                <div class="item-body">
                    Для такого романтичного момента
                </div>
            </div>
            <div class="service-item">
                <img src="image/love.png">
                <div class="item-head">
                    Музыкальный фон для свидания
                </div>
                <div class="item-body">
                    Живая музыка поможет сделать свидание особенным
                </div>
            </div>
            <div class="service-item">
                <img src="image/musicSearch.png">
                <div class="item-head">
                    Индивидуальный подбор музыки
                </div>
                <div class="item-body">
                    Вместе с вами мы можем подобрать ту музыку, которую вы предпочитаете
                </div>
            </div>
        </div>
    </div>

    <div id="example">
        <div class="small">
            <div id="video">
                <iframe width="630" height="370" src="https://www.youtube.com/embed/Z4fOXLon6qE" frameborder="0"></iframe>
            </div>
        </div>
    </div>

    <div id="experience">
        <div class="small">
            <div id="awards">
                <h2>Опыт выступлений:</h2>
                <ul>
                    <li>Общий стаж игры на скрипке - 14 лет</li>
                    <li>5 лет коммерческих выступлений</li>
                    <li>Кругосветное путешествие с цыганами</li>
                    <li>Выступление с оркестром песни и пляски</li>
                </ul>
            </div>
            <div id="music">
                <h2>Репертуар (примеры)</h2>
                <ul>
                    <li>Metallica - The unforgiven</li>
                    <li>Quadro - Скрипка</li>
                    <li>Rob zombie - Dragula</li>
                </ul>
            </div>

        </div>
    </div>

    <div id="price">
        <div class="small">
            <div>
                <h3>Стоимость выступления</h3>
                <br>
                <p>Цена оговаривается индивидуально в зависимости от условий и места выступления. В среднем стоимость часа работы составляет <b>1500 рублей</b>.</p>
            </div>
        </div>
    </div>

    <div id="contacts">
        <div class="small">
            <div id="contacts-block">
                <form method="post">
                    <div class="form-block">
                        <label>ИМЯ</label>
                        <input type="text" name="name"/>
                    </div>
                    <div class="form-block">
                        <label>ОБРАТНАЯ СВЯЗЬ</label>
                        <textarea name="contacts"></textarea>
                    </div>
                    <div class="form-block">
                        <label>ОПИСАНИЕ ПРЕДЛОЖЕНИЯ</label>
                        <textarea name="description"></textarea>
                    </div>
                    <div class="form-block">
                        <input type="submit" value="Отправить"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
