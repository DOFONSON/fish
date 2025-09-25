<?php
$title = 'ОСЕТРИНСКОЕ РЫБХОЗЯЙСТВО - Белуга';
$extraStyles = ['../css/beluga.css'];
$activePage = 'aliveordead';
$metaDescription = 'Белуга: описание вида, РМС, оплодотворённая икра, возможные гибриды.';
$metaKeywords = ['белуга', 'Acipenser huso', 'икра белуги', 'гибриды белуги'];
require __DIR__ . '/header.php';
?>

    <main class="beluga">
        <div class="bg-container">
            <div class="bg-image"></div>
            <div class="bottom_gradient"></div>
        </div>

        <section>
            <div class="content">
                <h1 class="title">Белуга</h1>
                <div class="text">
                    <p>
                        Белуга (Acipenser huso L.) Белуга - самая крупная из проходных рыб, достигает длины до 9 метров и
                        веса 2-х тонн. Обладает массивным толстым цилиндрическим телом с коротким заостренным рострумом.
                        Рот очень большой, полулунной формы. Хищник. Икра крупная и очень ценится на рынке, имея высокую
                        стоимость. Нерестовые температуры низкие, находятся в пределах 9-13 °С, оптимальная температура
                        инкубации - 12-14 °С. Количество икринок в одном килограмме колеблется от 25 тыс. шт. до 45 тыс.
                        шт., обычно - 35 тыс. икринок. 
                    </p>
                    <p>
                        Имеется РМС (самки и самцы), проводим работы по получению
                        оплодотворенной икры и рыбопосадочного материала. По желанию возможны гибриды с ленским,
                        русским, стерлядью, севрюгой и калугой. Гибриды с белугой отличаются очень высокими темпами
                        роста.
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
                        <div class="slider__slide"><img class="genpass-slider__image"
                                src="../img/Rectangle 7.jpg" alt="Белуга">
                        </div>
                        <div class="slider__slide"><img class="genpass-slider__image"
                                src="../img/Rectangle 9.jpg" alt="Белуга">
                        </div>
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

