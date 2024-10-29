<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Контакты</title>
    <style>
        /* Добавляем стили для кнопки */
        .center-button {
            display: flex;
            justify-content: center;
            margin-top: 20px; /* Отступ сверху, если необходимо */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/photo_5233719397854602647_y.png" alt="Логотип"/>
        </div>
        <h1>Мое Портфолио</h1>
        <nav>
            <ul>
                <li><a href="index.html">Обо мне</a></li>
                <li><a href="blog.html">Блог</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <section id="contact">
    <main>
        <article>
        <h2>Контакты</h2>
        <div class="contact-section">
            <p><strong>Фамилия Имя:</strong> Альжанов Арман</p>
            <p><strong>Электронная почта:</strong> <a href="mailto:9165912246@mail.ru">9165912246@mail.ru</a></p>
            <p><strong>Телефон:</strong> <a href="tel:+79165912246">+7 (916) 591 22 46</a></p>
            <p><strong>Ссылка на GitHub:</strong> <a href="https://github.com/Alzhanov-ArmanS?tab=repositories" target="_blank">GitHub профайл</a></p>
            <p><strong>Географическое местоположение:</strong> город Москва</p>
        </div>
        <h2>Если у Вас возникли вопросы, пожелания или предложения, пожалуйста, напишите, мне, я обязательно с Вами свяжусь!</h2>
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="email" name="email" placeholder="Ваш email" required>
            <textarea name="message" placeholder="Ваше сообщение" required></textarea>
            <button type="submit">Отправить</button>
        </form>
        </article>
    </main>
    </section>

    <div class="center-button">
        <button onclick="window.location.href='index.html'">На главную страницу</button>
    </div>

    <footer>
        <p>&copy; 2024 Мое Портфолио</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
