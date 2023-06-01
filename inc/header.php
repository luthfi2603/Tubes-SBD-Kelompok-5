<div class="main-header-container">
    <div class="top-banner">
        <div class="banner-wrapper">
            <div style="padding:5px">
                <div class="top-util">
                    <div class="top-util-menu left">
                        <ul class="socmed">
                            <li>
                                <a href="https://www.facebook.com/cgv.id" target="_blank">
                                    <i class="fb-icon"></i>
                                    Like
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/cgv_id" target="_blank">
                                    <i class="tw-icon"></i>
                                    Follow
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/cgv.id/" target="_blank">
                                    <i class="ig-icon"></i>
                                    Follow
                                </a>
                            </li>
                            <li>
                                <a href="https://line.me/R/ti/p/%40cgv_id" target="_blank">
                                    <i class="ln-icon"></i>
                                    Follow
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/cgvkreasi/" target="_blank">
                                    <i class="yt-icon"></i>
                                    Subscribe
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="top-util-menu right">
                        <ul class="special-menu">
                            <li>
                                <a href="/cgv?p=news">news</a>
                            </li>
                            <?php if(!empty($_SESSION['username'])) : ?>
                                <li>
                                    <a href="/cgv?p=logout">logout</a>
                                </li>
                            <?php else : ?>
                                <li>
                                    <a href="/cgv?p=login">login</a>
                                </li>
                                <li>
                                    <a href="/cgv?p=register">sign up</a>
                                </li>
                            <?php endif ?>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <header>
                    <div class="header-content">
                        <a href="/cgv" class="header-logo" style="display:block;">&nbsp;</a>
                        <div class="header-nav">
                            <img class="culture-logo" src="https://cdn.cgv.id/assets/images/h2_cultureplex_new_resized.png" style="text-align: center; width: 234px;">
                            <nav class="primary_nav_wrap">
                                <ul>
                                    <li class="current-menu-item">
                                        <a href="/cgv?p=movies">MOVIES</a>
                                    </li>
                                    <li>
                                        <a href="/cgv?p=cinema">CINEMAS</a>
                                    </li>
                                    <li>
                                        <a href="/cgv?p=promotion">PROMOTION</a>
                                    </li>
                                    <li>
                                        <?php if(!empty($_SESSION['username'])) : ?>
                                            <a href="/cgv?p=profil">MEMBERSHIP</a>
                                        <?php else : ?>
                                            <a href="/cgv?p=membership">MEMBERSHIP</a>
                                        <?php endif ?>
                                    </li>
                                    <li>
                                        <a href="/cgv?p=special">SPECIAL</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
                <div class="clear"></div>
                <div class="top-menu-vertical" style="top: 252px;">
                    <div class="top-menu-section">
                        <ul>
                            <li>
                                <a href="https://www.cgv.id/en/movies/now_playing">
                                    <img src="https://cdn.cgv.id/assets/images/features/MOVIES.png" alt="Movies" width="100">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.cgv.id/en/schedule/cinema">
                                    <img src="https://cdn.cgv.id/assets/images/features/CINEMAS.png" alt="Cinemas" width="100">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.cgv.id/en/promotion/all">
                                    <img src="https://cdn.cgv.id/assets/images/features/PROMO.png" alt="Promotion" width="100">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.cgv.id/en/special_audi">
                                    <img src="https://cdn.cgv.id/assets/images/features/FEATURES.png" alt="Features" width="100">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-top">
                        <a href="#" onclick='window.scrollTo({top: 0, behavior: "smooth"});'><span>Back to Top</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>