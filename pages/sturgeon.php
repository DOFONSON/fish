<?php
$title = 'ОСЕТРИНСКОЕ РЫБХОЗЯЙСТВО - Русский осётр';
$extraStyles = ['../css/sturgeon.css'];
$activePage = 'aliveordead';
$metaDescription = 'Русский осётр: характеристики вида, производители, оплодотворённая икра.';
$metaKeywords = ['русский осетр', 'Acipenser gueldenstaedtii', 'икра осетра'];
require __DIR__ . '/header.php';
?>
    <main class="sturgion">
        <div class="bg-container">
            <div class="bg-image"></div>
            <div class="bottom_gradient"></div>
        </div>

        <section>
            <div class="content">
                <h1 class="title">Русский осётр</h1>
                <div class="text">
                    <p>
                        Русский осетр (Acipenser gueldenstaedtii B.) Русский осетр - один из наиболее крупных видов
                        осетровых, достигает длины до 250 см и веса 150кг. Обладает характерными внешними особенностями,
                        рострум тупорылый и брюшина имеет желтый цвет. Являлся основным объектом промысла в царской
                        России и во времена СССР. Нерестовые температуры находятся в пределах 12-16 °С, оптимальная
                        температура инкубации - 15-17 °С. Икринки крупного размера, количество их в одном килограмме
                        колеблется от 40 тыс. шт. до 70 тыс. шт., обычно - 50 тыс. икринок.
                    </p>
                    <p>
                        Имеется паспортизированные
                        производители (самки и самцы), проводим работы по получению оплодотворенной икры и
                        рыбопосадочного материала. По желанию возможны гибриды с ленским, русским, севрюгой, белугой и
                        калугой.
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
                                src="../img/Screenshot_20241125_170508_com.avito.android.jpg" alt="Осётр">
                        </div>
                        <div class="slider__slide"><img class="genpass-slider__image"
                                src="../img/Screenshot_20241125_170538_com.avito.android.jpg" alt="Осётр">
                        </div>
                        <div class="slider__slide"><img class="genpass-slider__image"
                                src="../img/IMG_4033.jpg" alt="Осётр">
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

