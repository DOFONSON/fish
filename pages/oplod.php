<?php
$title = 'ОСЕТРИНСКОЕ РЫБХОЗЯЙСТВО - Сотрудничество';
$extraStyles = ['../css/oplod.css'];
$activePage = 'aliveordead';
$metaDescription = 'Оплодотворённая икра осетровых: сроки получения, документы (СИТЕС), производители.';
$metaKeywords = ['икра оплодотворенная', 'личинка осетровых', 'СИТЕС', 'генетические паспорта'];
require __DIR__ . '/header.php';
?>

    <main class="oplod">
        <div class="bg-container">
            <div class="bg-image"></div>
            <div class="bottom_gradient"></div>
        </div>

        <section>
            <div class="content">
                <h2 class="title">Икра оплодотворённая</h2>
                <div class="text">
                    <p>
                        Осетринское рыбохозяйство предлагает оплодотворённую икру от собственных производителей
                        осетровых, включая стерлядь, сибирского осетра (ленской популяции), русского осетра, калугу,
                        белугу, севрюгу, веслоноса и гибриды с осетровыми видами. В наличии 3-5 дневная личинка
                        осетровых. Мы получаем рыбоводную икру осетровых с февраля по июнь. На производителей оформлены
                        генетические паспорта. Икра поступает от производителей, которые уже сдавали икру не менее двух
                        раз. Также мы получаем СИТЕС для поставок икры в другие страны. Наш осетр - это не браконьерский
                        улов, а рыба, выращенная на нашей экологически чистой ферме в Московской области. Мы гарантируем
                        ЛЕГАЛЬНОСТЬ происхождения и предоставляем все необходимые документы.
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
                                src="../img/335.png" alt="Севрюга">
                        </div>
                        <div class="slider__slide"><img class="genpass-slider__image" src="../img/99.png"
                                alt="Севрюга">
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

