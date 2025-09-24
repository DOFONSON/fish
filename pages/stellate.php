<?php
$title = 'ОСЕТРИНСКОЕ РЫБХОЗЯЙСТВО - Сотрудничество';
$extraStyles = ['../css/stellate.css'];
$activePage = 'aliveordead';
$metaDescription = 'Севрюга: особенности вида, нерестовые температуры, возможные гибриды.';
$metaKeywords = ['севрюга', 'Acipenser stellatus', 'икра севрюги'];
require __DIR__ . '/header.php';
?>

    <main class="stellate">
        <div class="bg-container">
            <div class="bg-image"></div>
            <div class="bottom_gradient"></div>
        </div>

        <section>
            <div class="content">
                <h2 class="title">Севрюга</h2>
                <div class="text">
                    <p>
                        Севрюга (Acipenser stellatus P.) Севрюга - одна из наиболее красивых видов осетровых, достигает
                        длины до 250 см и веса 70 кг. Обладает вытянутым телом с очень длинным рострумом, окрас черный с
                        белым. В промысле осетровых занимала второе место после русского осетра. Довольно нежная рыба со
                        слабым хрящевым позвоночником. Самая высокотемпературная рыба. Нерестовые температуры находятся
                        в пределах 17-23 °С, оптимальная температура инкубации - 20-23 °С. Икринки некрупного размера,
                        количество их в одном килограмме колеблется от 60 тыс. шт. до 90 тыс. шт., обычно - 70 тыс.
                        икринок.
                    </p>
                    <p>
                        Имеется РМС (самки и самцы), проводим работы по получению оплодотворенной икры и
                        рыбопосадочного материала. По желанию возможны гибриды с ленским, русским, стерлядью, белугой и
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
                                src="../img/Screenshot_20241125_214152_com.avito.android.jpg" alt="Севрюга">
                        </div>
                        <div class="slider__slide"><img class="genpass-slider__image" src="../img/IMG_3558.jpg"
                                alt="Севрюга">
                        </div>
                        <div class="slider__slide"><img class="genpass-slider__image"
                                src="../img/IMG-20241125-WA0017.jpg" alt="Севрюга">
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

