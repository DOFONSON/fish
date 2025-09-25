<?php
$title = 'ОСЕТРИНСКОЕ РЫБХОЗЯЙСТВО - Генетические паспорта производителей';
$extraStyles = ['../css/genpass.css'];
$activePage = 'aliveordead';
$metaDescription = 'Генетические паспорта производителей осетровых — подтверждение качества и легальности.';
$metaKeywords = ['генетический паспорт', 'осетровые документы', 'сертификация рыбы'];
require __DIR__ . '/header.php';
?>

    <main class="cooperation">
        <div class="bg-container">
            <div class="bg-image"></div>
            <div class="bottom_gradient"></div>
        </div>

        <section>
            <div class="content">
                <h1 class="title">Генетические паспорта производителей</h1>
                <div class="text">
                    <p>Не дайте себя обмануть! "Дикий осетр" – это миф. С 2005 года его коммерческий промысел в
                        Каспийском море запрещен. Рыба, выдаваемая за "дикую," чаще всего является дешевым китайским
                        осетром, выращенным в неблагоприятных условиях на соевых кормах с добавлением кровяной муки и
                        стимуляторов роста. Мы предлагаем только легально выращенную рыбу в экологически чистом месте на
                        кормах премиум-класса, максимально приближенных к естественному рациону осетровых. Берегите свое
                        здоровье!</p>
                </div>
            </div>
        </section>

        <section class="genpass-slider">
            <div class="slider" id="genpassSlider" aria-label="Слайдер изображений">
                <button class="slider__btn slider__btn--prev" type="button" aria-label="Предыдущее изображение">‹</button>
                <div class="slider__viewport">
                    <div class="slider__track">
                        <div class="slider__slide"><img class="genpass-slider__image" src="../img/Масспаспорт 1.pdf-image-000 1.png" alt="Фото генпаспорта"></div>
                        <div class="slider__slide"><img class="genpass-slider__image" src="../img/Масспаспорт 1.pdf-image-001.png" alt="Фото генпаспорта"></div>
                        <div class="slider__slide"><img class="genpass-slider__image" src="../img/Масспаспорт 1.pdf-image-002.png" alt="Фото генпаспорта"></div>
                        <div class="slider__slide"><img class="genpass-slider__image" src="../img/Масспаспорт 1.pdf-image-003.png" alt="Фото генпаспорта"></div>
                        <div class="slider__slide"><img class="genpass-slider__image" src="../img/Масспаспорт 1.pdf-image-004.png" alt="Фото генпаспорта"></div>
                        <div class="slider__slide"><img class="genpass-slider__image" src="../img/Масспаспорт 1.pdf-image-005.png" alt="Фото генпаспорта"></div>
                    </div>
                </div>
                <button class="slider__btn slider__btn--next" type="button" aria-label="Следующее изображение">›</button>
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

