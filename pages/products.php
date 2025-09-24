<?php
$title = 'ОСЕТРИНСКОЕ РЫБХОЗЯЙСТВО - Сотрудничество';
$extraStyles = ['../css/products.css'];
$activePage = 'products';
$metaDescription = 'Цены на товарную рыбу: осётр, стерлядь, карп, форель и др.';
$metaKeywords = ['товарная рыба', 'осётр цена', 'стерлядь цена', 'купить рыбу'];
require __DIR__ . '/header.php';
?>

    <main class="products">
        <div class="bg-container">
            <div class="bg-image"></div>
            <div class="bottom_gradient"></div>
        </div>

        <section>
            <div class="content">
                <h2 class="title">Товарная рыба</h2>
                <div class="text">
                    <section class="product-cards">
                        <h3>Цены на рыбу</h3>
                        <div class="product-cards__grid">
                            <article class="product-card">
                                <img class="product-card__image" src="../img/carp.jpg" alt="Карп">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Карп</h4>
                                    <div class="product-card__price">250 ₽/кг</div>
                                </div>
                            </article>
                            <article class="product-card">
                                <img class="product-card__image" src="../img/sazan.jpg" alt="Сазан">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Сазан</h4>
                                    <div class="product-card__price">300 ₽/кг</div>
                                </div>
                            </article>
                            <article class="product-card">
                                <img class="product-card__image" src="../img/for.jpg" alt="Форель">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Форель</h4>
                                    <div class="product-card__price">1000 ₽/кг</div>
                                </div>
                            </article>
                            <article class="product-card">
                                <img class="product-card__image" src="../img/shu.jpg" alt="Щука">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Щука</h4>
                                    <div class="product-card__price">450 ₽/кг</div>
                                </div>
                            </article>
                            <article class="product-card">
                                <img class="product-card__image" src="../img/kar.jpg" alt="Карась">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Карась</h4>
                                    <div class="product-card__price">200 ₽/кг</div>
                                </div>
                            </article>
                            <article class="product-card">
                                <img class="product-card__image" src="../img/Ctenopharyngodon_idella.jpg" alt="Амур">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Амур</h4>
                                    <div class="product-card__price">400 ₽/кг</div>
                                </div>
                            </article>
                            <article class="product-card">
                                <img class="product-card__image" src="../img/tolst.png" alt="Толстолобик">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Толстолобик</h4>
                                    <div class="product-card__price">300 ₽/кг</div>
                                </div>
                            </article>
                            <article class="product-card">
                                <img class="product-card__image" src="../img/karas-sereb.jpg" alt="Живец карася">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Живец карася</h4>
                                    <div class="product-card__price">300 ₽/кг</div>
                                </div>
                            </article>
                            <article class="product-card">
                                <img class="product-card__image" src="../img/plo.jpg" alt="Живец плотвы">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Живец плотвы</h4>
                                    <div class="product-card__price">300 ₽/кг</div>
                                </div>
                            </article>
                            <article class="product-card">
                                <img class="product-card__image" src="../img/Screenshot_20241125_170538_com.avito.android.jpg" alt="Осётр">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Осётр</h4>
                                    <div class="product-card__price">1300 ₽/кг</div>
                                </div>
                            </article>
                            <article class="product-card">
                                <img class="product-card__image" src="../img/23.jpg" alt="Стерлядь">
                                <div class="product-card__body">
                                    <h4 class="product-card__title">Стерлядь</h4>
                                    <div class="product-card__price">1300 ₽/кг</div>
                                </div>
                            </article>
                        </div>
                    </section>
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
                            <img class="genpass-slider__image" src="../img/665.jpg" alt="Севрюга">
                        </div>
                        <div class="slider__slide">
                            <img class="genpass-slider__image" src="../img/45.jpg" alt="Севрюга">
                        </div>
                        <div class="slider__slide">
                            <img class="genpass-slider__image" src="../img/77.png" alt="Севрюга">
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

