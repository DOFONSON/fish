<?php
$title = 'ОСЕТРИНСКОЕ РЫБХОЗЯЙСТВО - Сотрудничество';
$extraStyles = ['../css/lensk.css'];
$activePage = 'aliveordead';
$metaDescription = 'Ленский (сибирский) осётр: пластичный к условиям, паспортизированные производители.';
$metaKeywords = ['ленский осетр', 'Acipenser baerii', 'рыбопосадочный материал'];
require __DIR__ . '/header.php';
?>

    <main class="lensk">
        <div class="bg-container">
            <div class="bg-image"></div>
            <div class="bottom_gradient"></div>
        </div>

        <section>
            <div class="content">
                <h2 class="title">Ленский осётр</h2>
                <div class="text">
                    <p>
                        Ленский (сибирский) осётр (Acipenser baerii B.) Ленский осётр - наиболее распространённый объект
                        аквакультуры из осетровых пород. Обладает пластичностью к температурным (особенно низким) и
                        гидрохимическим колебаниям. Продолжает питаться до температур 3-4 °С. Крупная рыба, средний вес
                        маточных стад на хозяйствах составляет от 10 до 20кг. Нерестовые температуры находятся в
                        пределах 10-14 °С, оптимальная температура инкубации - 13-15 °С. Количество икринок в одном
                        килограмме колеблется от 50 тыс. шт. до 80 тыс. шт., обычно — 60 тыс. икринок. 
                    </p>
                    <p>
                        Имеется
                        паспортизированные производители (самки и самцы), проводим работы по получению оплодотворенной
                        икры и рыбопосадочного материала. По желанию возможны гибриды со стерлядью, русским, севрюгой,
                        белугой и калугой.
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
                                src="../img/11.jpg" alt="Ленский осётр">
                        </div>
                        <div class="slider__slide"><img class="genpass-slider__image" src="../img/12.jpg"
                                alt="Ленский осётр">
                        </div>
                        <div class="slider__slide"><img class="genpass-slider__image"
                                src="../img/13.jpg" alt="Ленский осётр">
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

