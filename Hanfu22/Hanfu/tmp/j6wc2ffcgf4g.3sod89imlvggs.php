<header class="header_top">
    <div class="container">
        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid ">
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <div class="row">
                        <div class="row">
                            <div class="col-4">
                                <div class="row">
                                    <div class="col col-xl-6">
                                        <div class="row" id="menu_Home">
                                            <div class="col col-xl-4">
                                                <img class="Menu_icon" src="https://s2.loli.net/2022/02/14/QrJeoGHEZbWMN6x.png" alt="home1.png">
                                            </div>
                                            <div class="col col-xl-8">
                                                <div class="nav-item">
                                                    <a class="nav-link active " aria-current="page" href="<?= ($BASE) ?>/">HomePage</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  col-xl-6">
                                        <div class="row"id="menu_Guides">
                                            <div class="col col-xl-4">
                                                <img class="Menu_icon" src="https://s2.loli.net/2022/02/17/KXOEr6YVscJ7fUl.png"  alt="home1.png">
                                            </div>
                                            <div class="col col-xl-8">
                                                <div class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Guides</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="<?= ($BASE) ?>/Guides/#Ming">Ming</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="<?= ($BASE) ?>/Guides/#Tang1">Tang</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a class="dropdown-item" href="<?= ($BASE) ?>/Guides/#Guides_Back">Song</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4"id="NavBar_Img">
                                <div class="row">
                                    <img src="ui/src/img/logo.jpg">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col  col-xl-6">
                                        <div class="row" id="menu_Carts">
                                            <div class="col col-xl-4">
                                                <img class="Menu_icon" src="https://s2.loli.net/2022/02/14/28GcKfo6RWJxyiV.png" alt="home1.png">
                                            </div>
                                            <div class="col col-xl-8">
                                                <div class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="<?= ($BASE) ?>/Cart">Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col  col-xl-6">
                                        <div class="row"id="menu_Log">
                                            <div class="col col-xl-4">
                                                <img class="Menu_icon" src="https://s2.loli.net/2022/02/14/Yt5gpA6G8ecshCH.png"alt="home1.png">
                                            </div>
                                            <div class="col col-xl-8">
                                                <div class="nav-item">
                                                    <?php if ($USER_NAME): ?>
                                                        <a class="nav-link" href="<?= ($BASE) ?>/SignUp"><?= ($USER_NAME) ?></a>
                                                    <?php endif; ?>
                                                    <?php if (!$USER_NAME): ?>
                                                        <a class="nav-link" href="<?= ($BASE) ?>/SignUp">Login/SignUp</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </div>

    </div>

</header>