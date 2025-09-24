    <footer class="footer<?= isset($footerClass) ? ' ' . $footerClass : '' ?>">
        <?php if (!empty($footerBack)) { ?>
        <div class="footer-back"></div>
        <?php } ?>
        <div class="footer__container">
            <div class="logo">
                <div class="logo-icon"><img src="../img/Logo.svg" alt="Логотип осетринское" title="Логотип осетринское"></div>
                <h1>ОСЕТРИНСКОЕ <br> <span class="logo_sub">РЫБХОЗЯЙСТВО</span></h1>
            </div>
            <div class="footer__contacts">
                <div class="footer__row--first">
                    <div class="footer__phone">
                        <a href="tel:+79778169942">+7 977 816-99-42</a>
                    </div>
                    <div class="footer__schedule">
                        <p>ПОНЕДЕЛЬНИК-ВОСКРЕСЕНЬЕ: 06:00 - 20:00</p>
                    </div>
                </div>
                <div class="footer__row--second">
                    <div class="footer__addresses">
                        <p>Московская обл., Волоколамский р-н, дер. Таболово, ул. Озёрная, 28</p>
                        <p>Представительство в Москве: Пресненский вал, дом 8, стр 3.</p>
                    </div>
                    <div class="footer__email">
                        <a href="mailto:osetrinskoe@yandex.ru">e-mail: osetrinskoe@yandex.ru</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="../script.js"></script>
    <!-- /Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter25749680 = new Ya.Metrika({id:25749680,
                            webvisor:true,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true});
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/25749680" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>

</html>

