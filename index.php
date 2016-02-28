<?php
    include("partials/header.php");
    include("partials/nav.php");
?>

    <section class="section-form">
        <div class="container">
            <div class="row inner">

                <h1>
                    Поиск гостиниц, отелей, и квартир посуточно
                </h1>

                <form class="clearfix col-md-10 col-md-offset-1">
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="city">Город</label>
                        <select id="city" class="selectpicker form-control" title="Выберите город">
                            <option value="1" selected>Бишкек</option>
                            <option value="1">Бишкек</option>
                            <option value="1">Бишкек</option>
                            <option value="1">Бишкек</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-4">
                        <label for="city">Район</label>
                        <select id="city" class="selectpicker form-control" title="Выберите район">
                            <option value="0" selected>Все</option>
                            <option value="1">Бишкек</option>
                            <option value="1">Бишкек</option>
                            <option value="1">Бишкек</option>
                        </select>
                    </div>

                    <div class="form-group checkboxes col-md-4 col-sm-4 clearfix">

                        <div class="checkbox checkbox-primary col-md-6 col-sm-6 col-xs-6">
                            <input name="extracolumn" type="hidden" value="0">
                            <input id="id1" class="form-control styled" style="width: 34px; margin: 0" name="extracolumn" type="checkbox" value="1">
                            <label for="id1">
                                Отели
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary col-md-6 col-sm-6 col-xs-6">
                            <input name="extracolumn" type="hidden" value="0">
                            <input id="id2" class="form-control styled" style="width: 34px; margin: 0" name="extracolumn" type="checkbox" value="1">
                            <label for="id2">
                                Квартиры
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary col-md-6 col-sm-6 col-xs-6">
                            <input name="extracolumn" type="hidden" value="0">
                            <input id="id3" class="form-control styled" style="width: 34px; margin: 0" name="extracolumn" type="checkbox" value="1">
                            <label for="id3">
                                Особняки
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary col-md-6 col-sm-6 col-xs-6">
                            <input name="extracolumn" type="hidden" value="0">
                            <input id="id4" class="form-control styled" style="width: 34px; margin: 0" name="extracolumn" type="checkbox" value="1">
                            <label for="id4">
                                Пансионаты
                            </label>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <div class="row">

                            <div class="form-group col-md-4 col-sm-4">
                                <label for="city">Количество комнат</label>
                                <select id="city" class="selectpicker form-control" placeholder="Выберите район">
                                    <option value="0" selected>Любое</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-sm-4">

                                <label for="city">Дата заезда</label>
                                <div class="input-group date" id="fromDate">
                                    <input type="text" class="form-control" />
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-4">

                                <label for="city">Дата отъезда</label>
                                <div class="input-group date" id="toDate">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-3">
                        <label for="">&nbsp;</label>
                        <button type="submit" class="btn btn-default btn-search">Найти</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section-items">
        <div class="container hot-items">
            <div class="row">

                <h2>
                    <span>Горячие предложения</span>
                </h2>

                <div class="col-md-11 col-sm-11">
                    <div class="row">
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 hidden-sm">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-1 col-sm-1 hidden-xs">
                    <div class="row">
                        <a href="#" class="all-hot">
                            <i class="pe-7s-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 visible-xs">
                    <a href="#" class="btn btn-all btn-hot pull-right">
                        Все предложения
                    </a>
                </div>

            </div>
        </div>

        <div class="st-banner">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>

        <div class="container new-items">
            <div class="row">

                <h2>
                    <span>Квартиры</span>
                </h2>

                <div class="col-md-11 col-sm-11">
                    <div class="row">
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 hidden-sm">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-1 col-sm-1 hidden-xs">
                    <div class="row">
                        <a href="#" class="all-hot">
                            <i class="pe-7s-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 visible-xs">
                    <a href="#" class="btn btn-all pull-right">
                        Все квартиры
                    </a>
                </div>

            </div>
        </div>
        <div class="container new-items">
            <div class="row">

                <h2>
                    <span>Отели</span>
                </h2>

                <div class="col-md-11 col-sm-11">
                    <div class="row">
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 hidden-sm">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-1 col-sm-1 hidden-xs">
                    <div class="row">
                        <a href="#" class="all-hot">
                            <i class="pe-7s-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 visible-xs">
                    <a href="#" class="btn btn-all pull-right">
                        Все отели
                    </a>
                </div>

            </div>
        </div>
        <div class="container new-items">
            <div class="row">

                <h2>
                    <span>Особняки</span>
                </h2>

                <div class="col-md-11 col-sm-11">
                    <div class="row">
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 hidden-sm">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-1 col-sm-1 hidden-xs">
                    <div class="row">
                        <a href="#" class="all-hot">
                            <i class="pe-7s-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 visible-xs">
                    <a href="#" class="btn btn-all pull-right">
                        Все особняки
                    </a>
                </div>

            </div>
        </div>
        <div class="container new-items">
            <div class="row">

                <h2>
                    <span>Пансионаты</span>
                </h2>

                <div class="col-md-11 col-sm-11">
                    <div class="row">
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 col-sm-4">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                        <article class="item col-md-3 hidden-sm">
                            <div class="thumbnail">
                                <a href="#" class="item-image">
                                    <img src="images/item.jpg" alt="image">
                                </a>
                                <div class="caption">
                                    <a href="#" class="item-name">1-комнатная квартира на Ибраимова 63</a>
                                    <h4 class="item-price">1700 сом</h4>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-1 col-sm-1 hidden-xs">
                    <div class="row">
                        <a href="#" class="all-hot">
                            <i class="pe-7s-angle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 visible-xs">
                    <a href="#" class="btn btn-all pull-right">
                        Все пансионаты
                    </a>
                </div>

            </div>
        </div>
    </section>

<?php
    include("partials/footer.php");
?>