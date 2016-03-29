<div class="footer">
    <div class="container">
        <div class="col-md-2 col-sm-2 social">
            <p>
                Мы в соцсетях
            </p>
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-odnoklassniki"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-md-2 col-sm-3 footer-nav">
            <h4>Информация</h4>
            <ul>
                <li>
                    <a href="#">О нас</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
                <li>
                    <a href="#">Контакты</a>
                </li>
            </ul>
        </div>

        <div class="col-md-2 col-sm-3 footer-nav">
            <h4>Категории</h4>
            <ul>
                <li>
                    <a href="#">Квартиры</a>
                </li>
                <li>
                    <a href="#">Отели</a>
                </li>
                <li>
                    <a href="#">Особняки</a>
                </li>
                <li>
                    <a href="#">Пансионаты</a>
                </li>
            </ul>
        </div>

        <div class="col-md-6 col-sm-4 copyright">
            <p>
                Sutki.kg – информационный портал объявлений о сдаче объектов жилья (квартир, комнат, коттеджей, отелей, гостиниц) в краткосрочную аренду (на сутки или несколько дней) во всех городах Кыргызстана.
            </p>

            <p class="copyright-text">
                <i class="fa fa-copyright"></i>
                2016 Sutki.KG
            </p>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script>
    $(document).ready(function () {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            asNavFor: '.slider-nav',
            arrows: false
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true
        });
    });
</script>

</body>
</html>