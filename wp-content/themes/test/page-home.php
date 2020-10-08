<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <title><?php echo the_title() ?></title>

    <? wp_head(); ?>
</head>
<body>
<header class="header">
    <h1 class="header__h1">TimeSelf</h1>
</header>

<h2>Книги</h2>
<?php foreach (getBook() as $book) {
    echo $book->post_title . '<br />';
    echo $book->post_content . '<br />'; ;
    echo '<br />';
}
?>


<main class="wrapper__main">
    <div class="main__left">
        <ul class="main__list">
            <li class="main__list__elem"><a class="main__list__elem__a main__list__select" href="index.html">Головна</a></li>
            <li class="main__list__elem"><a class="main__list__elem__a" href="markbook.html">Мої закладки</a></li>
            <li class="main__list__elem"><a class="main__list__elem__a" href="planning.html">Планування</a></li>
            <li class="main__list__elem"><a class="main__list__elem__a" href="record.html">Запис дня</a></li>
            <li class="main__list__elem"><a class="main__list__elem__a" href="#">Вихід</a></li>
        </ul>
    </div>
    <div class="main__right">
        <div class="main__right__inner">
            <div class="right__inner__high">
                <div class="category main__right__category" id="category__markbook__select">
                    <div class="category__inner">
                        <span class="category__span">Категорія: вибрано (100)</span>
                        <div class="category__arrow">
                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="#8e8d8d" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                        </div>
                    </div>
                    <ul class="category__list">
                        <li class="category__elem">Магістерська</li>
                        <li class="category__elem">JavaScript</li>
                        <li class="category__elem">PHP</li>
                        <li class="category__elem">Time</li>
                        <li class="category__elem">Робота</li>
                        <li class="category__elem"></li>
                        <li class="category__elem"></li>
                        <li class="category__elem"></li>

                    </ul>
                </div>
                <div class="main__right__button__inner">
                    <button class="main__right__button" id="add__markbook">Додати</button>
                    <button class="main__right__button__save" id="save__markbook" style="display: none;">Зберегти</button>
                </div>
            </div>
            <div class="right__add__window" id="add__window__markbook">
                <h2 class="main__right__title__h2">Додати закладку</h2>
                <div class="add__window__main">
                    <div class="add__window__main__inner">
                        <ul class="add__window__main__inner__ul">
                            <li class="add__window__main__elem">
                                <input type="text" placeholder="Зміст" class="right__add__markbook__input">
                            </li>
                            <li class="add__window__main__elem">
                                <input type="text" placeholder="Посилання" class="right__add__markbook__input">
                            </li>
                            <li class="add__window__main__elem">
                                <div class="category category__markbook">
                                    <div class="category__inner category__markbook__inner">
                                        <span class="category__span">Категорія: вибрано (100)</span>
                                        <div class="category__arrow">
                                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="#8e8d8d" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                                        </div>
                                    </div>
                                    <ul class="category__list category__markbook__elem">
                                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="add__window__main__elem">
                                <button id="right__add__markbook__button">Створити категорію</button>
                            </li>
                        </ul>

                    </div>
                    <div class="markbook__inner__left">
                        <textarea name="add__markboob__textarea" id="add__markboob__textarea" placeholder="Опис"></textarea>
                        <!-- <button class="main__right__button">Зберегти</button> -->
                    </div>
                </div>
                <div class="add_category">
                    <div class="add_category__inner">
                        <input type="text" placeholder="Назва категорії">
                        <button id="add_category__button">Додати</button>
                    </div>
                </div>
                <button id="save_markbook">Зберегти дані</button>
            </div>
            <!--  -->



            <h2 class="main__right__title__h2">Мої закладки</h2>
            <ul class="main__right__bookmark">

                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet sint, perspiciatis! Aliquam ducimus voluptatum iusto fugit consequatur ullam, laborum dolor, ratione magnam, expedita labore, tempora veritatis temporibus vero molestias ab dolore cum provident. Sapiente neque explicabo, nisi a quasi voluptates?</h3>
                    <h3>Категорія: PHP</h3>
                    <a href="#">Детальніше</a>
                </li>
                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quo ut fugit mollitia, deleniti distinctio dolore voluptates iusto beatae quasi.</h3>
                    <h3>Категорія: PHP</h3>
                    <a href="#">Детальніше</a>
                </li>
                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Текст про зміст</h3>
                    <h3>Категорія: PHP</h3>
                    <a href="#">Детальніше</a>
                </li>
                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Текст про зміст</h3>
                    <h3>Категорія: PHP</h3>
                    <a href="#">Детальніше</a>
                </li>
            </ul>
            <!-- Planning -->
            <div class="right__inner__high">
                <div class="category main__right__category" id="category__plan__select">
                    <div class="category__inner">
                        <span class="category__span">Категорія: вибрано (100)</span>
                        <div class="category__arrow">
                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="#8e8d8d" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                        </div>
                    </div>
                    <ul class="category__list">
                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                    </ul>
                </div>
                <div class="main__right__button__inner">
                    <button class="main__right__button" id="plan__button__inner">Додати</button>
                    <button class="main__right__button__save" id="save__plan" style="display: none;">Зберегти</button>
                </div>
            </div>

            <!--  -->
            <div class="right__add__window" id="add__window__planning">
                <h2 class="main__right__title__h2">Додати планування</h2>
                <div class="add__window__main">
                    <div class="add__window__main__inner">
                        <ul class="add__window__main__inner__ul">
                            <li class="add__window__main__elem">
                                <input type="text" placeholder="Зміст" class="right__add__markbook__input">
                            </li>
                            <li class="add__window__main__elem">
                                <input type="text" placeholder="Посилання" class="right__add__markbook__input">
                            </li>
                            <li class="add__window__main__elem">
                                <div class="category category__markbook">
                                    <div class="category__inner category__markbook__inner">
                                        <span class="category__span">Категорія: вибрано (100)</span>
                                        <div class="category__arrow">
                                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="#8e8d8d" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                                        </div>
                                    </div>
                                    <ul class="category__list category__markbook__elem">
                                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="add__window__main__elem">
                                <button id="right__add__markbook__button">Створити категорію</button>
                            </li>
                        </ul>

                    </div>
                    <div class="markbook__inner__left">
                        <textarea name="add__markboob__textarea" id="add__markboob__textarea" placeholder="Опис"></textarea>
                        <!-- <button class="main__right__button">Зберегти</button> -->
                    </div>
                </div>
                <div class="add_category">
                    <div class="add_category__inner">
                        <input type="text" placeholder="Назва категорії">
                        <button id="add_category__button">Додати</button>
                    </div>
                </div>
                <button id="save_markbook">Зберегти дані</button>
            </div>
            <h2 class="main__right__title__h2">Планування</h2>
            <ul class="main__right__bookmark">

                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Текст про зіст</h3>
                    <h3>Категорія: PHP</h3>
                    <a href="#">Детальніше</a>
                </li>
                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam commodi consequatur, libero harum necessitatibus cumque animi error perferendis delectus doloremque!</h3>
                    <h3>Категорія: PHP</h3>
                    <a href="#">Детальніше</a>
                </li>
                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Текст про зіст</h3>
                    <h3>Категорія: PHP</h3>
                    <a href="#">Детальніше</a>
                </li>
                <li class="main__right__bookmark__elem">
                    <h2>Зміст:</h2>
                    <h3>Текст про зіст</h3>
                    <h3>Категорія: PHP</h3>
                    <a href="#">Детальніше</a>
                </li>
            </ul>
            <!-- Record Day -->
            <div class="right__inner__high">
                <div class="category main__right__category" id="category__record__select">
                    <div class="category__inner">
                        <span class="category__span">Категорія: вибрано (100)</span>
                        <div class="category__arrow">
                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="#8e8d8d" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                        </div>
                    </div>
                    <ul class="category__list">
                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                        <li class="category__elem">test</li>
                    </ul>
                </div>
                <div class="main__right__button__inner">
                    <button class="main__right__button" id="record__button__inner">Додати</button>
                    <button class="main__right__button__save" id="save__record" style="display: none;">Зберегти</button>
                </div>
            </div>

            <div class="right__add__window" id="add__window__record" style="display: none;">
                <h2 class="main__right__title__h2">Додавання запис дій</h2>
                <div class="add__window__main">
                    <div class="add__window__main__inner">
                        <ul class="add__window__main__inner__ul">
                            <li class="add__window__main__elem">
                                <input type="text" placeholder="Зміст" class="right__add__markbook__input">
                            </li>
                            <li class="add__window__main__elem">
                                <input type="text" placeholder="Посилання" class="right__add__markbook__input">
                            </li>
                            <li class="add__window__main__elem inner__time__elem">
                                <div class="inner__time__data">

                                    <span class="time__span time__data__span">Дата</span>
                                    <!-- <input type="date" data-date="" data-date-format="DD MMMM YYYY" value="2015-08-09"> -->
                                    <input type="date" data-date="" data-date-format="DD MMMM YYYY" class="input__type__data" value="2015-12-31">


                                </div>

                                <div class="inner__time__from">
                                    <span class="time__span">Від</span>
                                    <input type="number" min="0" max="23" placeholder="Год" id="hour__first" class="input__type__number hour__input input__first__full">
                                    <input type="number" min="0" max="59" placeholder="Хв" id="minute__first" class="input__type__number input__type__number__second minute__input input__first__full">
                                </div>

                                <div class="inner__time__to">
                                    <span class="time__span">До</span>
                                    <input type="number" min="0" max="23" placeholder="Год" id="hour__second" class="input__type__number hour__input input__second__full">
                                    <input type="number" min="0" max="59" placeholder="Хв" id="minute__second" class="input__type__number input__type__number__second minute__input input__second__full">
                                </div>
                                <div class="inner__time__effective">
                                    <span class="time__span__effective">Ефективність</span>
                                    <input type="text" disabled="disabled" class="inner__time__effective__input" value="">
                                </div>
                            </li>
                            <li class="add__window__main__elem">
                                <div class="category category__markbook">
                                    <div class="category__inner category__markbook__inner">
                                        <span class="category__span">Категорія: вибрано (100)</span>
                                        <div class="category__arrow">
                                            <svg style="transform: rotate(90deg);" class="section-question__icon" width="10.54" height="24" viewBox="0 0 10.54 24"><polyline points="1.49 21.25 9.05 12 1.49 2.75" fill="none" stroke="#8e8d8d" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1.5"></polyline></svg>
                                        </div>
                                    </div>
                                    <ul class="category__list category__markbook__elem">
                                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">testdsadsadsadsadsasadsaddsasdaasd</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                        <li class="category__elem">test</li>
                                    </ul>
                                </div>
                            </li>

                            <li class="add__window__main__elem">
                                <button id="right__add__markbook__button">Створити категорію</button>
                            </li>

                        </ul>

                    </div>
                    <div class="markbook__inner__left">
                        <textarea name="add__markboob__textarea" id="add__markboob__textarea" placeholder="Опис"></textarea>
                        <!-- <button class="main__right__button">Зберегти</button> -->
                    </div>
                </div>
                <div class="add_category">
                    <div class="add_category__inner">
                        <input type="text" placeholder="Назва категорії">
                        <button id="add_category__button">Додати</button>
                    </div>
                </div>
                <button id="save_markbook">Зберегти дані</button>
            </div>
            <h2 class="main__right__title__h2">Запис дій</h2>
            <ul class="main__right__list">
                <li class="main__right__list__elem">Дата створення</li>
                <li class="main__right__list__elem">Опис</li>
                <li class="main__right__list__elem">Від</li>
                <li class="main__right__list__elem">До</li>
                <li class="main__right__list__elem">Ефективність</li>
                <li class="main__right__list__elem">Категорія</li>
            </ul>
            <ul class="main__right__list">
                <li class="main__right__list__elem">1. 14.11.2019 (15:14)</li>
                <li class="main__right__list__elem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas labore porro numquam. Reprehenderit totam mollitia natus illum dolorum aliquid quaerat?</li>
                <li class="main__right__list__elem">15:15</li>
                <li class="main__right__list__elem">17:16</li>
                <li class="main__right__list__elem">2:01</li>
                <li class="main__right__list__elem">PHP</li>
            </ul>
            <ul class="main__right__list">
                <li class="main__right__list__elem">2. 14.11.2019 (15:14)</li>
                <li class="main__right__list__elem">Опис</li>
                <li class="main__right__list__elem">15:15</li>
                <li class="main__right__list__elem">17:16</li>
                <li class="main__right__list__elem">2:01</li>
                <li class="main__right__list__elem">PHP</li>
            </ul>
            <ul class="main__right__list">
                <li class="main__right__list__elem">2. 14.11.2019 (15:14)</li>
                <li class="main__right__list__elem">Опис</li>
                <li class="main__right__list__elem">15:15</li>
                <li class="main__right__list__elem">17:16</li>
                <li class="main__right__list__elem">2:01</li>
                <li class="main__right__list__elem">PHP</li>
            </ul>
            <ul class="main__right__list">
                <li class="main__right__list__elem">2. 14.11.2019 (15:14)</li>
                <li class="main__right__list__elem">Опис</li>
                <li class="main__right__list__elem">15:15</li>
                <li class="main__right__list__elem">17:16</li>
                <li class="main__right__list__elem">2:01</li>
                <li class="main__right__list__elem">PHP</li>
            </ul>
        </div>
    </div>
</main>
<footer class="footer">
    <?php
     wp_footer();
    ?>


</footer>
</body>

</html>