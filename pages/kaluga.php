<?php
$title = 'ОСЕТРИНСКОЕ РЫБХОЗЯЙСТВО - Сотрудничество';
$extraStyles = ['../css/kaluga.css'];
$activePage = 'aliveordead';
$metaDescription = 'Калуга: описание вида, РМС, высокая пластичность и устойчивость гибридов.';
$metaKeywords = ['калуга', 'Acipenser dauricus', 'осетр калуга', 'гибриды калуги'];
require __DIR__ . '/header.php';
?>

    <main class="kaluga">
        <div class="bg-container">
            <div class="bg-image"></div>
            <div class="bottom_gradient"></div>
        </div>

        <section>
            <div class="content">
                <h2 class="title">Калуга</h2>
                <div class="text">
                    <p>
                        Калуга (Acipenser dauricus G.) Калуга - вторая по величине после белуги из проходных рыб,
                        достигает длины до 7 метров и веса 1,2-х тонн. Обладает чуть более прогонистым телом с крупной
                        передней спинной жучкой, в спинном плавнике менее 60 лучей. Рот очень большой, хищник. Обитает
                        на Дальнем Востоке в бассейне реки Амур. Нерестовые температуры низкие, находятся в пределах
                        11-14 °С, оптимальная температура инкубации - 12-15 °С. Количество икринок в одном килограмме
                        колеблется от 35 тыс. шт. до 55 тыс. шт., обычно - 45 тыс. икринок.
                    </p>
                    <p>
                        Имеется РМС (самки и самцы),
                        проводим работы по получению оплодотворенной икры и рыбопосадочного материала. По желанию
                        возможны гибриды с ленским, русским, стерлядью, севрюгой и белугой. Гибриды с калугой отличаются
                        очень высокими темпами роста, большой пластичностью и невосприимчивостью к заболеваниям.
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
                        <div class="slider__slide"><img class="genpass-slider__image" src="../img/kalugaa.jpg"
                                alt="Калуга">
                        </div>
                        <button class="slider__btn slider__btn--next" type="button"
                            aria-label="Следующее изображение">›</button>
                        <div class="slider__dots" aria-hidden="true"></div>
                    </div>
        </section>

        <section class="info">
            <div class="info__text">
                <p>Получить более подробную информацию вы всегда можете связавшись с нами по контактному телефону.</p>
            </div>
        </section>
    </main>

<?php require __DIR__ . '/footer.php'; ?>

