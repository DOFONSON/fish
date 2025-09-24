<?php
$title = 'ОСЕТРИНСКОЕ РЫБХОЗЯЙСТВО - Сотрудничество';
$extraStyles = ['../css/caviar.css'];
$activePage = 'aliveordead';
require __DIR__ . '/header.php';
?>


    <main class="caviar">
        <div class="bg-container">
            <div class="bg-image"></div>
            <div class="bottom_gradient"></div>
        </div>

        <section>
            <div class="content">
                <h2 class="title">Икра пищевая</h2>
                <div class="text">
                    <p>
                        Мы – производители премиальной икры осетровых пород: осетра, стерляди и эксклюзивной золотой
                        икры стерляди-альбиноса. Используем как гуманный прижизненный метод, так и классический забойный
                        способ получения икры. Безопасность и качество – наш приоритет. Перед получением икры рыба
                        проходит двухмесячное выдерживание в чистейшей артезианской воде, что исключает появление
                        нежелательных запахов и привкусов. Вся продукция сертифицирована и имеет необходимые документы:
                        "Меркурий", "Честный Знак".
                    </p>
                </div>
            </div>
        </section>

        <section class="genpass-slider">
            <div class="slider" id="genpassSlider" aria-label="Слайдер изображений">
                <button class="slider__btn slider__btn--prev" type="button"
                    aria-label="Предыдущее изображение">‹</button>
                <div class="slider__viewport">
                    <div class="slider__track">
                        <div class="slider__slide">
                            <img class="genpass-slider__image" src="../img/86.jpg"
                                alt="Севрюга">
                        </div>
                        <div class="slider__slide">
                            <img class="genpass-slider__image" src="../img/87.jpg" alt="Севрюга">
                        </div>
                        <div class="slider__slide">
                            <img class="genpass-slider__image" src="../img/85.jpg" alt="Севрюга">
                        </div>
                        <div class="slider__slide">
                            <img class="genpass-slider__image" src="../img/88.jpg" alt="Севрюга">
                        </div>
                        <div class="slider__dots" aria-hidden="true"></div>

                    </div>
                    <button class="slider__btn slider__btn--next" type="button"
                        aria-label="Следующее изображение">›</button>
        </section>

        <section class="info">
            <div class="info__text">
                <p>Получить более подробную информацию вы всегда можете связавшись с нами по контактному телефону.</p>
            </div>
        </section>
    </main>

<?php require __DIR__ . '/footer.php'; ?>

