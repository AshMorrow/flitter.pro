<?php

class Menu
{
    public static $menu_type = 'main';
    public static $current_url = '';
    private static $menu_items = [
        '/' => [
            'text' => 'Главная',
            'url' => '/'
        ],
        'services' => [
            'text' => 'Услуги',
            'url' => '/services'
        ],
        'portfolio' => [
            'text' => 'Портфолио',
            'url' => '/portfolio'
        ],
        'about' => [
            'text' => 'О нас',
            'url' => '/about'
        ],
        'contacts' => [
            'text' => 'Контакты',
            'url' => '/contacts'
        ]
    ];

    public static function render_menu()
    {
        ?>
        <div class="main_nav_bar">
            <div class="main_slider_logo">
                <div>
                    <img src="/img/logo/logo_big.png" alt="logo">
                </div>
            </div>
            <div class="main_nav_bar_responsive">
            <nav id="main_menu">
                <?php
                if (self::$current_url == '') {
                    self::$current_url = '/';
                }
                foreach (self::$menu_items as $page => $item) {
                    ?>
                    <a href="<?= $item['url'] ?>"
                       class="<?= (self::$current_url == $page) ? 'active' : ''; ?>"><?= $item['text'] ?></a>
                    <?php
                }
                ?>
            </nav>
            <div class="mobile_menu">
                <div class="mobile_menu_trigger_btn" onclick="mobileMenuOpen()">
                    <div>
                        Меню
                    </div>
                    <div>
                        <i></i>
                        <i></i>
                        <i></i>
                    </div>
                </div>
            </div>
            <nav class="mobile_menu_items" style="display: none">
                <?php
                if (self::$current_url == '') {
                    self::$current_url = '/';
                }
                foreach (self::$menu_items as $page => $item) {
                    ?>
                    <a href="<?= $item['url'] ?>"
                       class="<?= (self::$current_url == $page) ? 'active' : ''; ?>"><?= $item['text'] ?></a>
                    <?php
                }
                ?>
            </nav>
            <div class="main_open_request">
                <button class="button_gradient" onclick="contactUs.show(this)">Оставить заявку</button>
            </div>
            </div>
        </div>
        <?php
    }

    public static function render_scroll_menu()
    {
        ?>

        <div id="scroll_menu_wrap">
            <div class="container">
                <div class="logo">
                    <img src="/img/logo/logo_big.png" alt="logo">
                </div>
                <nav class="menu_items">
                    <?php
                    if (self::$current_url == '') {
                        self::$current_url = '/';
                    }
                    foreach (self::$menu_items as $page => $item) {
                        ?>
                        <a rel="nofollow" href="<?= $item['url'] ?>"
                           class="<?= (self::$current_url == $page) ? 'active' : ''; ?>"><?= $item['text'] ?></a>
                        <?php
                    }
                    ?>
                </nav>
                <div class="mobile_menu">
                    <div class="mobile_menu_trigger_btn" onclick="mobileMenuOpen()">
                        <div>
                            Меню
                        </div>
                        <div>
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                    </div>
                </div>
                <nav class="mobile_menu_items" style="display: none">
                    <?php
                    if (self::$current_url == '') {
                        self::$current_url = '/';
                    }
                    foreach (self::$menu_items as $page => $item) {
                        ?>
                        <a href="<?= $item['url'] ?>"
                           class="<?= (self::$current_url == $page) ? 'active' : ''; ?>"><?= $item['text'] ?></a>
                        <?php
                    }
                    ?>
                </nav>
                <div class="main_open_request">
                    <button class="button_gradient" onclick="contactUs.show(this)">Оставить заявку</button>
                </div>
            </div>
        </div>

        <?php
    }
}