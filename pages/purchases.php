<?php
session_start();
$conn = new mysqli("localhost", "Tima", "tima12345", "yandex_market");

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$user = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

$sql = "SELECT c.*, p.image_url, p.name, p.price FROM purchases c
        JOIN products p ON c.product_id = p.id
        WHERE c.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user);
$stmt->execute();
$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Интернет-магазин Яндекс Маркет — покупки с быстрой доставкой</title>
    
</head>
<body>
    <div class="page">
        <div>
            <noindex></noindex>
            <div>
                <div data-apiary-widget-name="@marketfront/ClickDaemonVisibility" data-apiary-widget-id="/content/clickDaemonVisibilityWrapper/clickDaemonVisibility"></div>
            </div>
            <div class="main">
                <header class="_3CWC9 L8kpC cia-vs cia-cs">
                    <div class="_7ImK">
                        <div class="_3wN6D _3IHdr">
                            <noindex class="_3K8Zl">                        
                            </noindex>
                            <div class="_1ILKF">
                                <noindex class="LF5dv">
                                    <div>
                                        <div class="cia-vs cia-cs">
                                            <button class="V9Xu6 button-focus-ring _1KI8u Lfy7z _3iB1w _35Vhw">
                                                <svg aria-hidden="true" id="hamburger" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="l1" d="M3 6h18v2H3z"></path><path class="l2" d="M3 11h18v2H3z"></path><path class="l3" d="M3 16h18v2H3z"></path></svg>
                                                <span class="_1z5kk">Каталог</span>
                                            </button>
                                        </div>
                                    </div>
                                </noindex>
                                <div class="_3DEPg" itemtype="https://schema.org/WebSite">
                                    <meta itemprop="url" content="http://market.yandex.kz">
                                    <div>
                                        <div class="cia-vs cia-cs">
                                            <div class="3H9l7">
                                                <form action="" class="_7WoA1">
                                                    <meta itemprop="target" content="http://market.yandex.kz/search-redirect?text={text}&amp;amp;from=reach-search-snippet">
                                                    <input type="hidden" name="cvredirect" value="1">
                                                    <input type="hidden" name="searchContext" value="">
                                                    <div class="_3UVLl">
                                                        <div class="_8h9NC">
                                                            <div class="_2mx_Y">
                                                                <div class="cia-vs cia-cs" data-zone-name="search-context-chip">
                                                                    <div class="U1zXJ"></div>
                                                                </div>
                                                                <div class="_3F4nI">
                                                                    <div class="_2nNwk cia-cs" data-zone-name="search-input">
                                                                       <input type="text" id="header-search" itemprop="query-input" name="text" class="_2onsR mini-suggest__input" value="" placeholder="Искать товары" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
                                                                    </div>
                                                                    <button class="_2v0M1 mini-suggest__input-clear" unselectable="on" type="button" aria-label="Стереть">
                                                                        <div class="_2S9nS"></div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <button type="submit" data-auto="search-button" class="V9Xu6 button-focus-ring _3RXxZ _1LG7Q _3iB1w mini-suggest__button">
                                                                <span class="_1z5kk">Найти</span>
                                                            </button>
                                                        </div>
                                                </form>
                                                <div class="mini-suggest__overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <noindex class="_21HT-">
                                    <nav aria-label="Главное меню" class="_3nYsN">
                                        <ul class="_1vc1B">
                                            <li class="_3Sj4Z">
                                                <div data-apiary-widget-name="@marketfront/HeaderPlusBalance" data-apiary-widget-id="/header/plusBalance">
                                                    <div class="cia-vs cia-cs" data-node-id="9ewb_fyrb_1" data-zone-data="{&quot;is_plus_user&quot;:true,&quot;notification&quot;:true,&quot;balance&quot;:0,&quot;isCartPage&quot;:false}" data-zone-name="HeaderPlusBadge" data-baobab-name="plusAmount">
                                                        <div class="_28lRb">
                                                            <span class="_20WYq _21a6_ _1gCbc" data-auto="headerPlusBalance" tabindex="0" role="button" aria-label="Баллы Плюса  Не просмотрено">
                                                                <div class="_1J42N _1S9iD">
                                                                    <div class="b7Sg3" data-testid="menu-button-icon-container" aria-hidden="true">
                                                                        <div class="_1NLE3">
                                                                            <div class="MoJVj">
                                                                                <span class="_14UxZ _3lGNi" style="top:-4px;right:-5px" data-auto="redCircle" aria-label="Не просмотрено"></span>
                                                                                <div class="" data-zone-name="yaPlusBadge">
                                                                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 20" aria-hidden="true" aria-label="Яндекс Плюс" data-auto="yaPlusBadge" class="_3czrp">
                                                                                        <linearGradient id="plus-background" gradientUnits="userSpaceOnUse" x1="1.076" x2="43.934" y1="2.357" y2="23.603">
                                                                                            <stop offset=".036" stop-color="#48cce0"></stop>
                                                                                            <stop offset=".328" stop-color="#505add"></stop>
                                                                                            <stop offset=".641" stop-color="#be40c0"></stop>
                                                                                            <stop offset=".958" stop-color="#fba82b"></stop>
                                                                                        </linearGradient>
                                                                                        <rect fill="url(#plus-background)" height="100%" rx="10" width="100%"></rect>
                                                                                        <g fill="#fff">
                                                                                            <path clip-rule="evenodd" d="M33.555 10.438a4.41 4.41 0 01-.257 1.559c-.16.424-.402.812-.714 1.142a3.059 3.059 0 01-1.07.714 3.805 3.805 0 01-2.555.04 2.947 2.947 0 01-1.006-.603 3.4 3.4 0 01-.719-.976 3.94 3.94 0 01-.362-1.323h-1.005v2.968h-1.58V6.916h1.57v2.792h1.03c.055-.436.183-.859.377-1.252a2.932 2.932 0 011.725-1.484 3.66 3.66 0 011.192-.192 3.71 3.71 0 011.332.237c.404.154.77.394 1.071.704.313.33.556.72.714 1.147.18.503.268 1.035.257 1.57zm-3.374 2.354a1.609 1.609 0 001.262-.569 3.427 3.427 0 000-3.556 1.615 1.615 0 00-1.262-.574 1.568 1.568 0 00-1.242.569 3.462 3.462 0 000 3.561 1.57 1.57 0 001.242.564z" fill-rule="evenodd"></path>
                                                                                            <path d="M17.128 9.653c-.015.601-.08 1.2-.196 1.79a2.03 2.03 0 01-.382.826.732.732 0 01-.589.261 1.477 1.477 0 01-.206 0v1.464h.422c.451.023.896-.116 1.253-.392a2.46 2.46 0 00.719-1.132 7.578 7.578 0 00.331-1.811c.056-.71.106-1.534.106-2.465h2.047v5.755h1.573V6.906h-5.028c0 1.092-.015 2.007-.05 2.747zm-2.454-2.737H8.7v7.043h1.569V8.194h2.83v5.765h1.575zm22.316 6.922c.484.172.994.257 1.508.252.447.012.892-.044 1.322-.166a3.89 3.89 0 00.88-.398v-1.293c-.289.167-.596.3-.915.398a3.925 3.925 0 01-1.187.156c-1.423 0-2.137-.78-2.137-2.35 0-1.569.724-2.349 2.178-2.349.387-.005.773.044 1.146.146.323.098.631.24.915.423V7.354a2.84 2.84 0 00-.875-.408 4.64 4.64 0 00-1.277-.16 4.524 4.524 0 00-1.548.25 3.178 3.178 0 00-1.161.72 3.125 3.125 0 00-.734 1.141 4.746 4.746 0 000 3.079 3.113 3.113 0 001.885 1.862z"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_3uhRf" data-testid="menu-button-text" role="alert" aria-live="polite" aria-atomic="true">Баллы
                                                                        <span class="_1oI3I" data-testid="menu-button-counter-for-blind"></span>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </div>
                                                        <div id="yandex-plus-place"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="_3Sj4Z _1o2_U _2NLsA">
                                                <div data-apiary-widget-name="@marketfront/HeaderOrdersButton" data-apiary-widget-id="/header/ordersButton">
                                                    <a href="/my/orders?track=menu" class="_2S7Nj _1J42N">
                                                        <div class="cia-vs cia-cs" data-node-id="9ewb_355b_1" data-baobab-name="orders">
                                                            <div class="b7Sg3" data-testid="menu-button-icon-container" aria-hidden="true">
                                                                <div class="_1NLE3">
                                                                    <svg title="Коробка обновленная" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 8.79341L6.70373 6.67341H6.70473L11.9992 4.55342L17.2967 6.67341L12.0002 8.79341ZM20.3405 5.73101L12.3724 2.54177C12.1332 2.44604 11.8662 2.44604 11.627 2.54177L3.63058 5.74234C3.19743 5.9155 2.98743 6.31528 3.00058 6.70817V17.3286C3.00063 17.5289 3.06067 17.7247 3.17296 17.8906C3.28526 18.0566 3.44467 18.1851 3.63066 18.2596L11.6271 21.4602C11.7793 21.5212 11.9441 21.544 12.1072 21.5265C12.2086 21.5156 12.3074 21.4894 12.4003 21.449L20.3689 18.2596C20.5551 18.1852 20.7147 18.0567 20.8272 17.8908C20.9397 17.7248 20.9999 17.529 21 17.3285V6.67333C21 6.61264 20.9945 6.5523 20.9836 6.49301C20.9331 6.20788 20.7619 5.94217 20.4699 5.78885C20.4281 5.76652 20.3849 5.7472 20.3405 5.73101ZM5.00721 8.15548L7.36766 9.10025L10.997 10.5532L10.997 19.0472L5.00721 16.6493V8.15548ZM18.9934 8.15522L13.0036 10.5531L13.0036 19.0472L18.9934 16.6493V8.15522Z" fill="#222222"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="_3uhRf" data-testid="menu-button-text" role="alert" aria-live="polite" aria-atomic="true">Заказы
                                                                <span class="_1oI3I" data-testid="menu-button-counter-for-blind"></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="_3Sj4Z _1o2_U _2Ox2w">
                                                <div data-apiary-widget-name="@marketfront/HeaderWishlistButton" data-apiary-widget-id="/header/wishlistButton">
                                                    <a href="/my/wishlist?track=head" class="_2S7Nj _1J42N">
                                                        <div class="cia-vs cia-cs" data-node-id="9ewb_2dcp_1" data-baobab-name="favorites">
                                                            <div class="b7Sg3" data-testid="menu-button-icon-container" aria-hidden="true">
                                                                <div class="_1NLE3">
                                                                    <svg title="Избранное" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                        <path d="M12 4.36693C10.675 3.27975 9.24521 2.71991 7.72945 2.71991C4.56517 2.71991 2 5.28506 2 8.44934C2 12.7785 5.19725 16.9814 11.4484 21.1143L11.9998 21.4789L12.5513 21.1143C18.8026 16.9814 22 12.7785 22 8.44934C22 5.28505 19.4349 2.71991 16.2706 2.71991C14.7548 2.71991 13.325 3.27975 12 4.36693ZM4 8.44934C4 6.38963 5.66973 4.71991 7.72945 4.71991C8.95344 4.71991 10.132 5.27022 11.296 6.42424L12 7.12225L12.7041 6.42423C13.8681 5.27022 15.0466 4.71991 16.2706 4.71991C18.3303 4.71991 20 6.38962 20 8.44934C20 11.8468 17.3766 15.4058 11.9999 19.0755C6.62334 15.4058 4 11.8468 4 8.44934Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                            <div class="_3uhRf" data-testid="menu-button-text" role="alert" aria-live="polite" aria-atomic="true">Избранное
                                                                <span class="_1oI3I" data-testid="menu-button-counter-for-blind"></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="_3Sj4Z _1o2_U _3DEPg" data-auto="header-cart">
                                                <div data-apiary-widget-name="@marketfront/CartEntryPoint" data-apiary-widget-id="/header/cartEntryPoint">
                                                    <div class="_1og3Q cia-vs cia-cs" data-zone-data="{&quot;counterSize&quot;:&quot;s&quot;,&quot;url&quot;:&quot;&quot;,&quot;tooltip&quot;:{},&quot;isNotificationOpen&quot;:false,&quot;integrationCartItemsCount&quot;:0}" data-zone-name="cartEntryPoint">
                                                        <div id="CART_ENTRY_POINT_ANCHOR">
                                                            <a href="cart.php" class="_2S7Nj _1J42N KAWsY">
                                                                <div class="cia-vs cia-cs" data-node-id="9ewb_1eqe_1" data-baobab-name="cart">
                                                                    <div class="b7Sg3" data-testid="menu-button-icon-container" aria-hidden="true">
                                                                        <div class="_1NLE3">
                                                                            <svg title="Корзина" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                                                <path d="M16.0164 15.792C16.7535 15.792 17.4604 16.0848 17.9816 16.606C18.5028 17.1272 18.7956 17.8341 18.7956 18.5712C18.7956 19.3083 18.5028 20.0152 17.9816 20.5364C17.4604 21.0576 16.7535 21.3504 16.0164 21.3504C15.2793 21.3504 14.5724 21.0576 14.0512 20.5364C13.53 20.0152 13.2372 19.3083 13.2372 18.5712C13.2372 17.8341 13.53 17.1272 14.0512 16.606C14.5724 16.0848 15.2793 15.792 16.0164 15.792ZM16.0164 17.532C15.7408 17.532 15.4764 17.6415 15.2815 17.8364C15.0867 18.0313 14.9772 18.2956 14.9772 18.5712C14.9772 18.8468 15.0867 19.1111 15.2815 19.306C15.4764 19.5009 15.7408 19.6104 16.0164 19.6104C16.292 19.6104 16.5563 19.5009 16.7512 19.306C16.9461 19.1111 17.0556 18.8468 17.0556 18.5712C17.0556 18.2956 16.9461 18.0313 16.7512 17.8364C16.5563 17.6415 16.292 17.532 16.0164 17.532ZM5.48037 15.792C6.21746 15.792 6.92436 16.0848 7.44556 16.606C7.96676 17.1272 8.25957 17.8341 8.25957 18.5712C8.25957 19.3083 7.96676 20.0152 7.44556 20.5364C6.92436 21.0576 6.21746 21.3504 5.48037 21.3504C4.74328 21.3504 4.03638 21.0576 3.51518 20.5364C2.99398 20.0152 2.70117 19.3083 2.70117 18.5712C2.70117 17.8341 2.99398 17.1272 3.51518 16.606C4.03638 16.0848 4.74328 15.792 5.48037 15.792ZM5.48037 17.532C5.20476 17.532 4.94043 17.6415 4.74555 17.8364C4.55066 18.0313 4.44117 18.2956 4.44117 18.5712C4.44117 18.8468 4.55066 19.1111 4.74555 19.306C4.94043 19.5009 5.20476 19.6104 5.48037 19.6104C5.75599 19.6104 6.02031 19.5009 6.2152 19.306C6.41009 19.1111 6.51957 18.8468 6.51957 18.5712C6.51957 18.2956 6.41009 18.0313 6.2152 17.8364C6.02031 17.6415 5.75599 17.532 5.48037 17.532ZM5.69037 5.3952L7.87197 12.8472L16.2276 11.2596C16.8953 11.1327 17.4977 10.7768 17.9311 10.2532C18.3644 9.72964 18.6014 9.07124 18.6012 8.3916V5.3952H5.69037ZM5.16237 3.5952H20.4024V8.3916C20.4024 9.49037 20.0189 10.5547 19.3181 11.4009C18.6173 12.2472 17.6431 12.8224 16.5636 13.0272L6.60357 14.922L2.77197 1.8348L4.49997 1.3284L5.16237 3.5952Z"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_3uhRf" data-testid="menu-button-text" role="alert" aria-live="polite" aria-atomic="true">Корзина
                                                                        <span class="_1oI3I" data-testid="menu-button-counter-for-blind"></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="_1R9sy"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                                // Check if the user is authenticated (adjust the condition based on your authentication logic)
                                                $isAuthenticated = isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);

                                                // Output the appropriate <li> based on authentication status
                                                if ($isAuthenticated) {
                                                    echo '<li class="_3Sj4Z wPXb7"><!--BEGIN [@light/UserMenu] /header/personalization static-->
                                                <div class="cia-vs cia-cs" data-node-id="9ewb_nh6_1" data-zone-name="profile" data-baobab-name="profile">
                                                    <div id="USER_MENU_ANCHOR">
                                                        <div data-apiary-widget-name="@light/User" data-apiary-widget-id="/header/personalization/profile">
                                                            <div class="_1Ihxx">
                                                                <button class="_2n3lE button-focus-ring _3Il5l" aria-haspopup="true" aria-controls="userMenu" aria-expanded="false">
                                                                    <img src="//avatars.mds.yandex.net/get-yapic/0/0-0/islands-middle" srcset="//avatars.mds.yandex.net/get-yapic/0/0-0/islands-retina-middle 2x" alt="темирлан умербеков">
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!--END [@light/UserMenu] /header/personalization static-->
                                            </li>';
                                                } else {
                                                    echo ' <li class="_3Sj4Z wPXb7"><!--BEGIN [@light/UserMenu] /content/headerWrapper/header/header/personalization static-->
                                                    <div class="cia-vs cia-cs" data-node-id="gucj_2mw5_1" data-zone-name="profile" data-baobab-name="profile">
                                                        <div id="USER_MENU_ANCHOR"><!--BEGIN [@light/Login] /content/headerWrapper/header/header/personalization/profile static-->
                                                            <div class="cia-vs cia-cs" data-zone-name="headerLoginButton" data-cs-name="navigate">
                                                                <a href="login.html" class="_2S7Nj _XiNf button-focus-ring _1r1ay _31Et8 _15cBQ">Войти</a>                                                            </div><!--END [@light/Login] /content/headerWrapper/header/header/personalization/profile static-->
                                                        </div>
                                                    </div><!--END [@light/UserMenu] /content/headerWrapper/header/header/personalization static-->
                                                </li>
    ';
                                                }
                                                ?>
                                        </ul>
                                        <div class="profile-menu" role="dialog" aria-modal="false" style="top: 20px; left: 75%;">
                                            <div data-apiary-widget-name="@yandex-market/LazyLoader-market" data-apiary-widget-id="/content/headerWrapper/header/header/personalization/profile/menu">
                                                <div class="KpbSC">
                                                    <div>
                                                        <div data-apiary-widget-name="@MarketNode/ProfileMenu" data-apiary-widget-id="/MarketNodeProfileMenu42">
                                                            <div class="" data-zone-name="profileMenu">
                                                                <div class="_1-Pg8">
                                                                    <div id="userMenu" role="menubar" aria-label="Меню пользователя">
                                                                        <div class="_3WotU">
                                                                            <div class="cia-vs cia-cs" data-zone-name="profile-badge">
                                                                            <a aria-hidden="false" href="profile.php" class="egKyN _2-I6i" data-autotest-id="profile-menu-user" role="menuitem">
                                                                                    <div class="DdaDR">
                                                                                        <div class="_2LViT">
                                                                                            <div data-auto="user-avatar">
                                                                                                <div class="_20WAA _30bGE _25qFi _3JXlh authorAvatar _1bWbx" style="width:40px;padding-top:40px">
                                                                                                    <picture class="_2tA0f" style="background-image:url(//avatars.mds.yandex.net/get-yapic/0/0-0/islands-retina-50)">
                                                                                                        <source srcset="//avatars.mds.yandex.net/get-yapic/0/0-0/islands-retina-50, //avatars.mds.yandex.net/get-yapic/0/0-0/islands-200 2x">
                                                                                                        <img class="_1eE0D" src="//avatars.mds.yandex.net/get-yapic/0/0-0/islands-retina-50" alt="темирлан умербеков" style="max-width:40px">
                                                                                                    </picture>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="JDLi1"></div>
                                                                                        </div>
                                                                                        <div class="_2qGeQ">
                                                                                            <div class="_1hXy7 _1wKom bWoLP" data-auto="public-user-info"><?php echo $_SESSION['username'] ?></div>
                                                                                            <div class="_2mGQw _1wKom"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="">
                                                                                <div class="cia-vs" data-zone-name="PlusBageHeader">
                                                                                    <a href="//plus.yandex.kz/?utm_source=market&amp;utm_medium=link&amp;utm_campaign=MSCAMP-77&amp;utm_term=src_market&amp;utm_content=user_menu&amp;message=market" class="_20WYq _15cCL _1gCbc" target="_blank" rel="nofollow noopener noreferrer" data-auto="yaPlusMenuItem" role="menuitem">
                                                                                        <div class="_3KKCm"><div><div class="_7MDC5 cia-vs" data-zone-name="YaPlusIcon">
                                                                                            <svg class="_2RbHG" fill="#000000" height="24" aria-label="Кешбек:" data-auto="cashback-icon" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14 28c7.732 0 14-6.268 14-14 0-.362-.014-.72-.04-1.076l-.006.024h-7.768l-1.771 8.453h-4.347l1.811-8.453H8.111l.845-4.025h7.768L18.48.733A13.983 13.983 0 0 0 14 0C6.268 0 0 6.268 0 14s6.268 14 14 14Zm8.36-25.23a14.041 14.041 0 0 1 4.691 6.153h-5.98l1.29-6.153Z"></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="K7ezq">
                                                                                        <div class="_1fIKr">
                                                                                            <span class="_2ujGl _66nxG _3WROT Qg8Jj _14ZJi" data-auto="text-primary">Яндекс Плюс</span>
                                                                                            <span class="_2t-0d _66nxG _2h8uc Qg8Jj _3ZAO4" data-auto="text-secondary">Кешбэк до 1%</span>
                                                                                        </div>
                                                                                        <div class="_25NVf" data-auto="cashback-balance">
                                                                                            <div class="Ovr3U" aria-hidden="true">
                                                                                                <div class="_7MDC5 cia-vs" data-zone-name="YaPlusIcon">
                                                                                                    <svg class="_2RbHG" fill="#FFFFFF" height="16" aria-label="Кешбек:" data-auto="cashback-icon" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14 28c7.732 0 14-6.268 14-14 0-.362-.014-.72-.04-1.076l-.006.024h-7.768l-1.771 8.453h-4.347l1.811-8.453H8.111l.845-4.025h7.768L18.48.733A13.983 13.983 0 0 0 14 0C6.268 0 0 6.268 0 14s6.268 14 14 14Zm8.36-25.23a14.041 14.041 0 0 1 4.691 6.153h-5.98l1.29-6.153Z"></path>
                                                                                                    </svg>
                                                                                                </div>
                                                                                            </div>
                                                                                            <span class="_1oI3I">Ваш кешбэк:</span>
                                                                                            <span class="LnVBR _66nxG _3JGs9 ocrtO _1olp0" data-auto="cashbackBalance">1%</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div data-apiary-widget-name="@marketfront/FavouriteCategoryMenuItem" data-apiary-widget-id="/MarketNodeProfileMenu42/favouriteCategoryMenuItem">
                                                                        <div class="">
                                                                            <div class="cia-cs" data-zone-data="{&quot;choice_status&quot;:&quot;before&quot;,&quot;percent&quot;:20,&quot;promoType&quot;:&quot;PERCENT_DISCOUNT&quot;}" data-zone-name="favouriteCategoryMenuItem">
                                                                                <span class="_20WYq _15cCL _1gCbc" data-auto="favouriteCategoryMenuItem" tabindex="0" role="menuitem">
                                                                                    <div class="_3KKCm">
                                                                                        <div>
                                                                                            <svg width="24" height="24" role="img" aria-label="" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <g clip-path="url(#prefix__clip0_7522_404470)" fill-rule="evenodd" clip-rule="evenodd" fill="#21201F">
                                                                                                    <path d="M21.398 7.764c.465-.903.646-1.823.506-2.686a3.36 3.36 0 00-1.28-2.133c-1.185-.92-2.93-1.143-4.796-.653C14.606.798 13.061-.04 11.562.012c-.856.03-1.66.356-2.286.974-.62.613-1.014 1.46-1.169 2.46-.157 1.02.067 2.105.41 3.088.35.998.856 1.983 1.361 2.84a26.805 26.805 0 002.043 2.97l.002.001C10.693 15.95 9.716 19.71 10.333 24h2.307c-1.23-4.546-.469-8.087.456-11.284a26.774 26.774 0 003.384-1.196c.913-.397 1.902-.896 2.77-1.499.857-.593 1.676-1.34 2.148-2.257zm-8.277 2.862a25.12 25.12 0 002.562-.94c.845-.368 1.706-.808 2.428-1.309.736-.51 1.252-1.03 1.509-1.528.31-.604.368-1.091.31-1.448a1.361 1.361 0 00-.533-.876c-1.246-.968-2.986-.35-4.314.122l-.022.008-.01-.014c-.797-1.163-1.84-2.685-3.42-2.63-.379.013-.698.15-.949.398-.257.254-.496.678-.598 1.342-.085.554.026 1.278.322 2.123.29.83.727 1.692 1.195 2.485a25.11 25.11 0 001.52 2.267z"></path>
                                                                                                    <path d="M15.036 21.037c.792 1.26 2.136 2.034 3.505 1.828 1.267-.191 2.2-1.155 2.586-2.597 1.412-.486 2.308-1.484 2.41-2.761.111-1.38-.755-2.668-2.068-3.37-1.022-.546-2.239-.755-3.38-.806-1.155-.051-2.314.056-3.275.203l-.78.12-.065.786c-.08.969-.106 2.133.026 3.28.13 1.136.424 2.336 1.04 3.317zm4.243-1.708c-.17 1.217-.717 1.51-1.036 1.558-.402.06-1.038-.158-1.514-.914-.392-.625-.633-1.49-.747-2.48a13.944 13.944 0 01-.068-2.086c.67-.072 1.387-.109 2.085-.078.996.044 1.877.225 2.527.572.788.422 1.05 1.041 1.018 1.446-.026.322-.28.888-1.483 1.143l-.684.146-.098.693zM4.334 8.635c-1.475-.204-2.932.329-3.654 1.51-.668 1.093-.53 2.428.328 3.65-.536 1.394-.347 2.722.565 3.621.986.972 2.529 1.136 3.91.582 1.076-.432 2.018-1.23 2.792-2.072.781-.851 1.444-1.808 1.948-2.638l.41-.675-.56-.555c-.691-.684-1.566-1.452-2.53-2.089-.954-.63-2.061-1.176-3.21-1.334zm-1.42 4.348c-.822-.913-.695-1.52-.527-1.795.211-.347.788-.694 1.673-.572.73.1 1.549.472 2.38 1.022.584.385 1.142.836 1.642 1.289-.376.56-.808 1.132-1.28 1.647-.675.734-1.379 1.293-2.063 1.568-.83.332-1.473.135-1.762-.15-.23-.227-.5-.785.077-1.87l.329-.619-.469-.52z"></path>
                                                                                                </g>
                                                                                                <defs>
                                                                                                    <clipPath id="prefix__clip0_7522_404470">
                                                                                                        <path fill="#fff" d="M0 0h24v24H0z"></path>
                                                                                                    </clipPath>
                                                                                                </defs>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="K7ezq">
                                                                                            <div class="_1fIKr">
                                                                                                <span class="_2ujGl _66nxG _3WROT Qg8Jj _14ZJi" data-auto="text-primary">
                                                                                                    <div class="_24AT8">Любимая категория</div>
                                                                                                    <span class="_1oI3I">Не просмотрено</span>
                                                                                                </span>
                                                                                                <span class="_2t-0d _66nxG _2h8uc Qg8Jj _3ZAO4" data-auto="text-secondary">Выберите её&nbsp;и&nbsp;получите скидку на&nbsp;покупки</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-apiary-widget-name="@marketfront/UserMissionsMenuItem" data-apiary-widget-id="/MarketNodeProfileMenu42/userMissionsMenuItem">
                                                                        <div class="">
                                                                            <div class="cia-cs" data-zone-name="missions-menu">
                                                                                <a href="/my/missions?track=menu" class="_20WYq _15cCL _1gCbc" role="menuitem">
                                                                                    <div class="_3KKCm">
                                                                                        <div>
                                                                                            <svg aria-hidden="true" id="prize" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="_15sWu" width="24" height="24">
                                                                                                <path fill="#000" d="M16.725 11.488a4.68 4.68 0 0 0 3.469-1.509c2.12-2.323 1.77-6.477 1.756-6.652a.675.675 0 0 0-.675-.615h-2.027a.676.676 0 0 0-.676-.676H6.41a.676.676 0 0 0-.676.676H3.707a.675.675 0 0 0-.676.615c-.016.175-.367 4.329 1.757 6.652a4.68 4.68 0 0 0 3.468 1.509 5.543 5.543 0 0 0 1.87 1.51V16.9H8.099a.676.676 0 0 0-.676.676v2.703a.676.676 0 0 0 .676.675h8.784a.676.676 0 0 0 .675-.675v-2.703a.676.676 0 0 0-.675-.676h-2.027v-3.903a5.544 5.544 0 0 0 1.869-1.51Zm2.523-7.424h1.377c.008 1.14-.136 3.59-1.433 5.007a3.15 3.15 0 0 1-1.507.909 16.985 16.985 0 0 0 1.495-5.93c.022.006.045.01.068.014ZM5.789 9.07C4.493 7.655 4.348 5.203 4.357 4.064h1.377A.516.516 0 0 0 5.8 4.05c.137 2.051.644 4.06 1.498 5.93a3.15 3.15 0 0 1-1.51-.909Zm1.323-5.683H17.87c-.13 2.165-.896 8.784-5.38 8.784S7.24 5.554 7.111 3.388Zm9.095 16.216H8.775v-1.351h7.432v1.351Zm-2.703-2.702h-2.027v-3.47c.67.122 1.357.122 2.027 0v3.47Z"></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div class="K7ezq _2We9w">
                                                                                            <div class="_1fIKr">
                                                                                                <span class="_2ujGl _66nxG _3WROT Qg8Jj _14ZJi" data-auto="text-primary">Задания и награды</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cia-vs cia-cs" data-zone-name="reviews-and-questions">
                                                                        <a aria-hidden="false" href="/my/tasks?track=menu" class="egKyN _2ytcX side-menu-item_my-content" data-autotest-id="side-menu-item-my-content" role="menuitem" data-auto="side-menu-item-my-content">
                                                                            <div class="_2RNlw _3MnQT" aria-hidden="true">
                                                                                <div class="_11lhx _6P0_F" style="color:#222222" role="img" aria-hidden="true">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                                        <path d="M4.4 23h12.2a1.4 1.4 0 0 0 1.4-1.4V19h2.6a1.4 1.4 0 0 0 1.4-1.4V2.4A1.4 1.4 0 0 0 20.6 1H8.4A1.4 1.4 0 0 0 7 2.4V5H4.4A1.4 1.4 0 0 0 3 6.4v15.2A1.4 1.4 0 0 0 4.4 23ZM5 7h11v14H5V7Zm4-4h11v14h-2V6.4A1.4 1.4 0 0 0 16.6 5H9V3Z"></path>
                                                                                        <path d="M14 9H7v2h7V9Zm0 4H7v2h7v-2Z"></path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="">Мои отзывы и вопросы</div>
                                                                        </a>
                                                                    </div>
                                                                    <div data-apiary-widget-name="@marketfront/YandexBuyForBusinessMenuItem" data-apiary-widget-id="/MarketNodeProfileMenu42/yandexBuyForBusinessMenuItem">
                                                                        <div class="cia-vs cia-cs" data-zone-data="{&quot;is_first_time_viewed&quot;:true}" data-zone-name="buyForBusinessMenuItem">
                                                                            <div class="">
                                                                                <div class="cia-vs" data-zone-name="buyForBusiness">
                                                                                    <a href="https://business.market.yandex.ru/pokupayte-dlya-biznesa?m2b_referrer_config=profile" class="_20WYq _15cCL _1gCbc" target="_blank" rel="nofollow noopener noreferrer" data-auto="buyForBusinessMenuItem" role="menuitem">
                                                                                        <div class="_3KKCm">
                                                                                            <div>
                                                                                                <svg style="width:24px;height:24px" fill="#222222" width="20" height="18" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path d="M11 9.98669H14C16.2086 9.98669 17.9991 8.19676 18 5.9884H2C2.00092 8.19676 3.79143 9.98669 6 9.98669H9V8.98669H11V9.98669ZM9 11.9867H6C4.46329 11.9867 3.06151 11.409 2 10.4589V15.9884H18V10.4589C16.9385 11.409 15.5367 11.9867 14 11.9867H11V12.9867H9V11.9867ZM5.48016 3.9884V3C5.48016 1.34315 6.82331 0 8.48016 0H11.5198C13.1767 0 14.5198 1.34315 14.5198 3V3.9884H18.5C19.3284 3.9884 20 4.65998 20 5.4884V16.4884C20 17.3168 19.3284 17.9884 18.5 17.9884H1.5C0.671573 17.9884 0 17.3168 0 16.4884V5.4884C0 4.65998 0.671573 3.9884 1.5 3.9884H5.48016ZM7.48016 3.9884H12.5198V3C12.5198 2.44772 12.0721 2 11.5198 2H8.48016C7.92788 2 7.48016 2.44772 7.48016 3V3.9884Z">
                                    
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <div class="K7ezq">
                                                                                                <div class="_1fIKr">
                                                                                                    <span class="_2ujGl _66nxG _3WROT Qg8Jj _14ZJi" data-auto="text-primary">
                                                                                                        <div class="_2LRFt">Покупайте как юрлицо</div>
                                                                                                    </span>
                                                                                                    <span class="_2t-0d _66nxG _2h8uc Qg8Jj _3ZAO4" data-auto="text-secondary">
                                                                                                        <div>С возможностью получить вычет до 20% НДС
                                                                                                            <span class="_1oI3I">Не просмотрено</span>
                                                                                                        </div>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cia-vs cia-cs" data-zone-name="my-orders">
                                                                        <a aria-hidden="false" href="purchases.php" class="egKyN _2ytcX side-menu-item_orders" data-autotest-id="side-menu-item-orders" role="menuitem" data-auto="side-menu-item-orders">
                                                                            <div class="_2RNlw _368EU" aria-hidden="true">
                                                                                <div class="_11lhx _6P0_F" style="color:#222222" role="img" aria-hidden="true">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" viewBox="0 0 24 24">
                                                                                        <path d="M1.95 19.486a1.2 1.2 0 0 1-.753-1.114V5.628a1.2 1.2 0 0 1 1.645-1.114l9.564 3.828a1.2 1.2 0 0 1 .755 1.114V22.2a1.2 1.2 0 0 1-1.647 1.114L1.95 19.486Zm8.81.942v-10.16L3.598 7.4v10.16l7.164 2.868Z"></path>
                                                                                        <path d="m20.325 7.4-7.164 2.868v10.16l7.164-2.869V7.4Zm1.645 12.085-9.564 3.829A1.2 1.2 0 0 1 10.76 22.2V9.456a1.2 1.2 0 0 1 .754-1.114l9.564-3.828a1.2 1.2 0 0 1 1.646 1.114v12.744a1.2 1.2 0 0 1-.754 1.113Z"></path>
                                                                                        <path d="m5.626 5.628 6.334 2.536 6.335-2.536-6.336-2.536-6.332 2.536h-.001Zm6.78-4.942 9.564 3.828c1.005.402 1.005 1.826 0 2.228l-9.564 3.828a1.2 1.2 0 0 1-.892 0L1.95 6.742C.944 6.34.944 4.916 1.95 4.514L11.514.686a1.2 1.2 0 0 1 .892 0Z"></path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <span>Заказы</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="cia-vs cia-cs" data-zone-name="my-returns">
                                                                        <a aria-hidden="false" href="/my/returns?track=menu" class="egKyN _2ytcX side-menu-item_returns" data-autotest-id="side-menu-item-returns" role="menuitem" data-auto="side-menu-item-returns">
                                                                            <div class="_2RNlw _368EU" aria-hidden="true">
                                                                                <div class="_3FCaH _3RYlL" style="color:#222222" role="img" aria-hidden="true">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                                                        <path fill="#222" fill-rule="evenodd" d="M6.776.376a.5.5 0 0 0-.707 0L.944 5.5l5.125 5.124a.5.5 0 0 0 .707 0l.848-.848a.5.5 0 0 0 0-.707l-2.369-2.37H11.5a4.3 4.3 0 0 1 0 8.6H5v2.4h6.5a6.7 6.7 0 0 0 0-13.4H5.256l2.368-2.367a.5.5 0 0 0 0-.708L6.776.376Z" clip-rule="evenodd"></path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <span>Возвраты</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="cia-vs cia-cs" data-zone-name="promocodes-menu">
                                                                        <a aria-hidden="false" href="/promocodes?track=menu" class="egKyN _2ytcX side-menu-item_promocodes" data-autotest-id="side-menu-item-promocodes" role="menuitem" data-auto="side-menu-item-promocodes">
                                                                            <div class="_2RNlw _368EU" aria-hidden="true">
                                                                                <div class="_11lhx _6P0_F" style="color:#222222" role="img" aria-hidden="true">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                                                                                        <path fill="#222" d="M22.128 13.822c-.186-.091-3.824-.924-8.393-1.803l-2.28 1.598c4.155 1.011 7.765 1.74 8.17 1.794.05.005.122.016.215.022 1.06.103 2.043-.59 2.288-1.61Z"></path>
                                                                                        <path fill="#222" d="M9.478 16.1a3.158 3.158 0 0 0-.397-.664.836.836 0 0 1 .226-1.242c.263-.158.587-.365.973-.629l3.873-2.72c3.543-2.517 6.251-4.572 6.376-4.72-.63-.83-1.798-1.053-2.728-.529-.083.044-.144.084-.188.11-.376.234-3.813 2.722-7.507 5.626a26.614 26.614 0 0 0-1.437-.227.826.826 0 0 1-.702-1.042 2.9 2.9 0 0 0 .098-.771c.005-1.708-1.413-3.08-3.148-3.058a3.177 3.177 0 0 0-2.223.942c-.42.418-.706.93-.844 1.482a2.79 2.79 0 0 0-.082.72c-.005 1.708 1.412 3.08 3.148 3.058a3.06 3.06 0 0 0 1.023-.185.844.844 0 0 1 .619.024c.273.12.726.303 1.67.541-.774.607-1.104.958-1.31 1.188a.854.854 0 0 1-.556.279 3.198 3.198 0 0 0-1.008.255c-1.595.7-2.338 2.536-1.657 4.1.1.22.225.431.362.623.347.448.812.796 1.362 1.005a3.178 3.178 0 0 0 2.406-.063c1.589-.703 2.336-2.545 1.65-4.103ZM6.18 10.572a1.82 1.82 0 0 1-1.277.54 1.779 1.779 0 0 1-1.28-.504 1.705 1.705 0 0 1-.529-1.248c-.002-.475.19-.923.533-1.267a1.82 1.82 0 0 1 1.278-.54c.999-.017 1.809.769 1.809 1.751a1.46 1.46 0 0 1-.054.414 1.697 1.697 0 0 1-.48.854Zm1.109 8.422a1.824 1.824 0 0 1-1.383.036 1.738 1.738 0 0 1-1.006-2.296c.182-.447.523-.8.968-.992a1.823 1.823 0 0 1 2.165.54c.087.107.156.23.214.355.392.897-.035 1.951-.958 2.357Z"></path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <span>Промокоды</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="cia-vs cia-cs" data-zone-name="favourites">
                                                                        <a aria-hidden="false" href="/my/wishlist?track=menu" class="egKyN _2ytcX side-menu-item_wishlist" data-autotest-id="side-menu-item-wishlist" role="menuitem" data-auto="side-menu-item-wishlist">
                                                                            <div class="_2RNlw _368EU" aria-hidden="true">
                                                                                <div class="_11lhx _6P0_F" style="color:#222222" role="img" aria-hidden="true">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 20 20">
                                                                                        <path d="M4.584.626A4.534 4.534 0 0 0 .05 5.16c0 3.442 2.548 6.792 7.536 10.09l.414.273.414-.273c4.988-3.298 7.536-6.648 7.536-10.09A4.534 4.534 0 0 0 11.416.626C10.204.626 9.06 1.078 8 1.958 6.94 1.078 5.796.626 4.584.626zM1.55 5.16a3.034 3.034 0 0 1 3.034-3.034c.993 0 1.948.446 2.888 1.378L8 4.027l.528-.523c.94-.932 1.895-1.378 2.888-1.378A3.033 3.033 0 0 1 14.45 5.16c0 2.743-2.117 5.61-6.45 8.561C3.667 10.77 1.55 7.903 1.55 5.16z"></path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <span>Избранное</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="cia-vs cia-cs" data-zone-name="comparison">
                                                                        <a aria-hidden="false" href="/compare?track=menu" class="egKyN _2ytcX side-menu-item_comparison" data-autotest-id="side-menu-item-comparison" role="menuitem" data-auto="side-menu-item-comparison">
                                                                            <div class="_2RNlw _368EU" aria-hidden="true">
                                                                                <div class="_11lhx _6P0_F" style="color:#222222" role="img" aria-hidden="true">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                                        <path d="M3 7V4h2v3l3 .001v2H5V12H3V9H0V7h3Zm5 6.004v-2h13v2H8ZM10 7v2h11V7H10ZM3 17.002v-2h18v2H3ZM3 19v2h18v-2H3Z"></path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <span>Списки сравнения</span>
                                                                        </a>
                                                                    </div>
                                                                    <div data-apiary-widget-name="@marketfront/ReferralProgramMenuItem" data-apiary-widget-id="/MarketNodeProfileMenu42/referralProgramMenuItem">
                                                                        <div class="cia-vs cia-cs" data-zone-data="{&quot;is_plus_user&quot;:true,&quot;reached_the_limit&quot;:false}" data-zone-name="referralProgramMenuItem">
                                                                            <div class="">
                                                                                <div class="cia-vs" data-zone-data="{&quot;is_plus_user&quot;:true,&quot;reached_the_limit&quot;:false}" data-zone-name="referralProgram">
                                                                                    <a href="/my/referral" class="_20WYq _15cCL _1gCbc" target="_blank" rel="nofollow noopener noreferrer" data-auto="referralProgramMenuItem" role="menuitem">
                                                                                        <div class="_3KKCm">
                                                                                            <div>
                                                                                                <svg style="width:24px;height:24px" stroke="#000000" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path d="M20.5105 7.58417H3.59674V11.975H20.5105V7.58417Z" stroke-width="1.67609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                                    <path d="M19.0991 11.9642H5.01996V21.1795H19.0991V11.9642Z" stroke-width="1.67609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                                    <path d="M18.1111 4.78629C18.1111 6.3258 16.7585 7.57259 15.0883 7.57259C14.2532 7.57259 12.0654 7.57259 12.0654 7.57259C12.0654 7.57259 12.0654 5.55605 12.0654 4.78629C12.0654 3.24678 13.4181 2 15.0883 2C16.7585 2 18.1111 3.24678 18.1111 4.78629Z" stroke-width="1.67609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                                    <path d="M6.00793 4.78629C6.00793 6.3258 7.36057 7.57259 9.03078 7.57259C9.86588 7.57259 12.0536 7.57259 12.0536 7.57259C12.0536 7.57259 12.0536 5.55605 12.0536 4.78629C12.0536 3.24678 10.701 2 9.03078 2C7.36057 2 6.00793 3.24678 6.00793 4.78629Z" stroke-width="1.67609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                                    <path d="M12.0536 7.58417V21.1795" stroke-width="1.67609" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <div class="K7ezq">
                                                                                                <div class="_1fIKr">
                                                                                                    <span class="_2ujGl _66nxG _3WROT Qg8Jj _14ZJi" data-auto="text-primary">
                                                                                                        <div class="_1FToC">Приглашайте друзей</div>
                                                                                                    </span>
                                                                                                    <span class="_2t-0d _66nxG _2h8uc Qg8Jj _3ZAO4" data-auto="text-secondary">
                                                                                                        <div class="PC3cw">И&nbsp;получайте по&nbsp;200&nbsp;баллов за&nbsp;каждого друга</div>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="cia-vs cia-cs" data-zone-name="sell-on-market-for-business">
                                                                        <a aria-hidden="false" href="https://partner.market.yandex.ru/welcome/partners?utm_source=yandex_services&amp;utm_medium=b2c_market&amp;utm_campaign=profileb2c&amp;utm_content=text&amp;utm_term=web" target="_blank" rel="nofollow noopener" class="egKyN _2ytcX side-menu-item_help cq9mG" data-autotest-id="side-menu-item-help" role="menuitem" data-auto="side-menu-item-help">
                                                                            <div class="_2RNlw _368EU" aria-hidden="true">
                                                                                <div class="_11lhx _3lERn" style="color:#222222" role="img" aria-hidden="true">
                                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                        <path d="M6.01639 9.08366V1H10.1721C12.0083 1 13.4345 1.41005 14.4508 2.23013C15.4836 3.05022 16 4.28871 16 5.94561C16 6.79914 15.8525 7.53565 15.5574 8.15479C15.2787 8.77409 14.8689 9.2845 14.3279 9.68618C13.8033 10.0712 13.1721 10.364 12.4344 10.5648C11.6967 10.749 10.8771 10.841 9.97542 10.841H8.32788V12.9749H13.4672V14.7322H8.32788V19H6.01639V14.7322H4V12.9749H6.01639V10.841H4V9.08366H6.01639ZM8.32788 3.03348V9.08366H9.97542C11.1722 9.08366 12.082 8.83262 12.7049 8.33053C13.3443 7.8118 13.6639 7.01677 13.6639 5.94561C13.6639 4.95817 13.3853 4.23014 12.8279 3.76151C12.2869 3.27616 11.4016 3.03348 10.1721 3.03348H8.32788Z" fill="black"></path>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                            <div class="_2Z5ss">
                                                                                <span>Продавайте на Маркете</span>
                                                                                <span class="_66nxG _2h8uc Qg8Jj _3ZAO4">Дарим 10 000 бонусов на продвижение</span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div data-apiary-widget-name="@MarketNode/YandexHelpMenuItem" data-apiary-widget-id="/MarketNodeProfileMenu42/yandexHelpMenuItem">
                                                                        <div class="cia-vs" data-zone-data="{&quot;is_help_user&quot;:false}" data-zone-name="helpOnMarketMenuItem"><a href="//help.yandex.ru/roundup_market?utm_source=market&amp;utm_medium=banner&amp;utm_content=user_menu&amp;platform=market_web_desktop" class="_20WYq _1ZON6 _1gCbc" target="_blank" rel="nofollow noopener noreferrer" role="menuitem">
                                                                            <div class="dTncA">
                                                                                <div class="_25DlG">
                                                                                    <div data-auto="iconHelp">
                                                                                        <div style="width:22px;height:22px">
                                                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path d="M17.2793 8.25077C18.7918 6.73819 18.7709 4.30656 17.232 2.76768C15.6931 1.2288 13.2615 1.20784 11.7489 2.72042L10 4.46933L15.5303 9.99967L17.2793 8.25077Z" stroke="black" stroke-width="2"></path>
                                                                                                <path d="M2.7209 11.7489C1.20833 13.2615 1.22929 15.6931 2.76817 17.232C4.30705 18.7709 6.73868 18.7918 8.25125 17.2793L10.0002 15.5303L4.46982 10L2.7209 11.7489Z" stroke="black" stroke-width="2"></path>
                                                                                                <path d="M8.25174 2.72042C6.73917 1.20784 4.30754 1.2288 2.76866 2.76768C1.22978 4.30656 1.20882 6.73819 2.72139 8.25077L4.47031 9.99967L10.0007 4.46932L8.25174 2.72042Z" stroke="black" stroke-width="2"></path>
                                                                                                <path d="M15.5303 10L10 15.5303L11.7489 17.2793C13.2615 18.7918 15.6931 18.7709 17.232 17.232C18.7709 15.6931 18.7918 13.2615 17.2793 11.7489L15.5303 10Z" stroke="black" stroke-width="2"></path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rPApZ">
                                                                                        <span class="_2iCJl _32Be3 _66nxG _3WROT Qg8Jj _1olp0" data-auto="title">Помощь рядом</span>
                                                                                        <span class="_66nxG _2h8uc Qg8Jj _3ZAO4" data-auto="description">Социальный проект Яндекса</span>
                                                                                        <span class="_1oI3I">Не просмотрено</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="cia-vs cia-cs" data-zone-name="help">
                                                                    <a aria-hidden="false" href="//yandex.kz/support/market" target="_blank" rel="nofollow noopener" class="egKyN _2ytcX side-menu-item_help" data-autotest-id="side-menu-item-help" role="menuitem" data-auto="side-menu-item-help">
                                                                        <div class="_2RNlw _368EU" aria-hidden="true">
                                                                            <div class="_11lhx _6P0_F" style="color:#222222" role="img" aria-hidden="true">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                                    <path fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1m0 1.75c5.1 0 9.25 4.15 9.25 9.25S17.1 21.25 12 21.25 2.75 17.1 2.75 12 6.9 2.75 12 2.75zm-1.5 13.293c0 .718.479 1.162 1.244 1.162.766 0 1.237-.444 1.237-1.162 0-.725-.471-1.169-1.237-1.169-.765 0-1.244.444-1.244 1.169zm1.456-8.996c-2.099 0-3.288 1.176-3.322 2.878h1.852c.041-.752.561-1.237 1.347-1.237.779 0 1.299.451 1.299 1.086 0 .636-.267.964-1.149 1.491-.943.553-1.319 1.169-1.23 2.262l.014.376h1.811v-.362c0-.656.253-.991 1.162-1.518.964-.567 1.463-1.285 1.463-2.31 0-1.579-1.292-2.666-3.247-2.666z"></path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <span>Справка</span>
                                                                    </a>
                                                                </div>
                                                                <div class="_2et7a egKyN n1VbV _2ytcX side-menu-item_support" tabindex="0" role="menuitem" data-autotest-id="side-menu-item-support" data-auto="side-menu-item-support" aria-live="polite" aria-atomic="true">
                                                                    <div class="_2RNlw _368EU" aria-hidden="true">
                                                                        <div class="_11lhx _6P0_F" style="color:#222222" role="img" aria-hidden="true">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                                <path fill-rule="evenodd" d="M7.2 9h2v2h-2V9zm3.6 0h2v2h-2V9zm-.8 8.95a7.956 7.956 0 0 1-2.134-.29l-4.583 1.752v-5.157A7.95 7.95 0 1 1 10 17.95zM4.783 13.8v3.433l3.028-1.158.25.078a6.45 6.45 0 1 0-3.406-2.543l.128.19z" clip-rule="evenodd"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <span>Чат с&nbsp;поддержкой</span>
                                                                </div>
                                                                <div class="cia-vs cia-cs" data-zone-name="settings">
                                                                    <a aria-hidden="false" href="/my/settings?retPath=http%253A%252F%252Fmarket.yandex.kz%252F%253Fclid%253D1601%2526utm_source_service%253Dweb%2526utm_source%253Dyandex%2526utm_medium%253Dsearch%2526utm_campaign%253Dymp_brand_1_syb_search_world%2526utm_content%253Dcid%25253A79789990%25257Cgid%25253A5058546329%25257Caid%25253A12945191724%25257Cph%25253A41696550537%25257Cpt%25253Apremium%25257Cpn%25253A1%25257Csrc%25253Anone%25257Cst%25253Asearch%2526utm_term%253Dyandex%252Bx%252Bmarket%2526adjust_t%253Dfs3pybh%2526adjust_ya_click_id%253D5187717970668027903%2526referrer%253Dreattribution%25253D1%2526cpa-perf%253D1%2526yclid%253D5187717970668027903%2526baobab_event_id%253Dlq403wvgcj%2526wprid%253D1702485826268237-9502998024677296961-balancer-l7leveler-kubr-yp-vla-152-BAL-6675%2526src_pof%253D1601%2526icookie%253DeoFkLFhj43JpaI8u5ddPOuIeANSmTxk4vJMV4fIbMQ4efbbVf2QPb%25252Fbff5TiLoi7ARdZ%25252FA94O9%25252BUPUtNUKLrVAneft8%25253D%2526lr%253D0%2526rtr%253D162%2526_redirectCount%253D1" class="egKyN _2ytcX side-menu-item_settings" data-autotest-id="side-menu-item-settings" role="menuitem" data-auto="side-menu-item-settings">
                                                                        <div class="_2RNlw _368EU" aria-hidden="true">
                                                                            <div class="_11lhx _6P0_F" style="color:#222222" role="img" aria-hidden="true">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" viewBox="0 0 24 24">
                                                                                    <path d="M12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm0 6a2 2 0 1 1 0-4 2 2 0 0 1 0 4Z"></path>
                                                                                    <path d="m22.215 7.759-1.427-2.483a1.398 1.398 0 0 0-1.755-.591l-2.22.93-1.69-.97-.307-2.422A1.403 1.403 0 0 0 13.426 1h-2.853a1.403 1.403 0 0 0-1.39 1.224L8.88 4.622l-1.72.982-2.191-.92a1.4 1.4 0 0 0-1.756.593L1.787 7.756a1.403 1.403 0 0 0 .364 1.814l1.855 1.41.003 2.038-1.859 1.413a1.402 1.402 0 0 0-.365 1.81l1.427 2.482a1.398 1.398 0 0 0 1.754.592l2.22-.93 1.69.97.308 2.421A1.404 1.404 0 0 0 10.574 23h2.853a1.403 1.403 0 0 0 1.39-1.224l.304-2.398 1.72-.982 2.192.92a1.402 1.402 0 0 0 1.755-.593l1.425-2.479a1.401 1.401 0 0 0-.365-1.814l-1.854-1.41-.002-2.038L21.85 9.57a1.402 1.402 0 0 0 .365-1.81Zm-4.226 2.233.007 4.023 2.222 1.687-.9 1.565-2.613-1.097-3.443 1.966L12.898 21h-1.796l-.367-2.886-3.412-1.956-2.641 1.109-.9-1.565 2.229-1.694-.007-4.02-2.222-1.69.9-1.565L7.294 7.83l3.444-1.966L11.102 3h1.796l.367 2.886 3.412 1.956 2.641-1.109.9 1.565-2.229 1.694Z"></path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <span>Настройки</span>
                                                                    </a>
                                                                </div>
                                                                <div class="cia-vs cia-cs" data-zone-name="vacancies">
                                                                    <a aria-hidden="false" href="//yandex.ru/jobs/services/market/about?from=sidemenu&amp;utm_source=yandex_market_web_d&amp;utm_medium=buttom&amp;utm_campaign=market_nanimaet" class="egKyN _2ytcX side-menu-item_vacancies" data-autotest-id="side-menu-item-vacancies" role="menuitem" data-auto="side-menu-item-vacancies">
                                                                        <div class="_2RNlw _368EU" aria-hidden="true">
                                                                            <div class="_11lhx _6P0_F" style="color:#222222" role="img" aria-hidden="true">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                                    <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="1.5">
                                                                                        <path d="m14.593 2.75-2.2 7.332-3.493.168-2.72-7.166 8.413-.334z"></path>
                                                                                        <path d="M4 9c1.695 0 2.644 1.033 2.847 3.098a1 1 0 0 0 .996.902h5.315a1 1 0 0 0 .995-.902C14.356 10.033 15.305 9 17 9m-6.5 4.5v4.49M7 17.97C7 16.657 7.545 16 8.635 16h3.785c1.063 0 1.595.657 1.595 1.97"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <span>Маркет нанимает</span>
                                                                    </a>
                                                                </div>
                                                                <div class="cia-vs cia-cs" >
                                                                    <a aria-hidden="false" href="logout.php"class="egKyN _2ytcX side-menu-item_exit" data-autotest-id="side-menu-item-exit" role="menuitem" data-auto="side-menu-item-exit">
                                                                    <div class="_2RNlw _368EU" aria-hidden="true">
                                                                        <div class="_11lhx _6P0_F" style="color:#222222" role="img" aria-hidden="true">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" viewBox="0 0 24 24">
                                                                                <path d="M7 11h8.987v2H7v2.964l-4-4 4-4V11Zm2-6V3h7a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H9v-2h7a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H9Z"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <span>Выйти</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="wM0mA">
                                                            <div class="cia-vs cia-cs" data-zone-name="add-user">
                                                                <a aria-hidden="false" href="//passport.yandex.kz/passport?mode=add-user&amp;retpath=http%3A%2F%2Fmarket.yandex.kz%2F%3Fclid%3D1601%26utm_source_service%3Dweb%26utm_source%3Dyandex%26utm_medium%3Dsearch%26utm_campaign%3Dymp_brand_1_syb_search_world%26utm_content%3Dcid%253A79789990%257Cgid%253A5058546329%257Caid%253A12945191724%257Cph%253A41696550537%257Cpt%253Apremium%257Cpn%253A1%257Csrc%253Anone%257Cst%253Asearch%26utm_term%3Dyandex%2Bx%2Bmarket%26adjust_t%3Dfs3pybh%26adjust_ya_click_id%3D5187717970668027903%26referrer%3Dreattribution%253D1%26cpa-perf%3D1%26yclid%3D5187717970668027903%26baobab_event_id%3Dlq403wvgcj%26wprid%3D1702485826268237-9502998024677296961-balancer-l7leveler-kubr-yp-vla-152-BAL-6675%26src_pof%3D1601%26icookie%3DeoFkLFhj43JpaI8u5ddPOuIeANSmTxk4vJMV4fIbMQ4efbbVf2QPb%252Fbff5TiLoi7ARdZ%252FA94O9%252BUPUtNUKLrVAneft8%253D%26lr%3D0%26rtr%3D162%26_redirectCount%3D1" class="egKyN _33CoE _510Sg" role="menuitem">
                                                                    <div class="_3_ZYL"></div>
                                                                    <span class="GPoB3">Добавить пользователя</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div data-apiary-widget-name="@MarketNode/HeaderRegionSelector" data-apiary-widget-id="/content/headerWrapper/header/header/personalization/profile/headerRegionSelector"></div>
                                    </div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                        var profileButton = document.querySelector('._2n3lE');
                                        var profileMenu = document.querySelector('.profile-menu');

                                        profileButton.addEventListener('click', function (event) {
                                            // Toggle the visibility of the menu using a class
                                            profileMenu.classList.toggle('visible');

                                            // Prevent the click event from reaching the document and closing the menu immediately
                                            event.stopPropagation();
                                        });

                                        // Close the menu if the user clicks outside of it
                                        document.addEventListener('click', function () {
                                            profileMenu.classList.remove('visible');
                                        });
                                    });


                                    </script>
                                    </nav>
                                </noindex>
                            </div>
                        </div>
                    </div>
                </header>
                <div>
                    <noindex>
                        <div class="cia-vs cia-cs" data-node-id="9ewb_d6l4_1" data-zone-name="menu" data-baobab-name="menu">
                            <div class="_3R9u6"><!--BEGIN [@MarketNode/HeaderTabsLayout] /menu/layout static-->
                                <div data-apiary-widget-name="@MarketNode/HeaderTabs" data-apiary-widget-id="/menu/layout/layout">
                                    <nav class="_3pF3V">
                                        <div class="_3mU1o">
                                            <div class="_381y5">
                                                <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:null}" data-zone-name="region-select">
                                                    <div class="_38X7t">
                                                        <div data-apiary-widget-name="@MarketNode/GlobalDeliveryPoint" data-apiary-widget-id="/menu/layout/layout/regionEntrypoint">
                                                            <div class="-mssm X06OA">
                                                                <button class="_1KpjX ybQDx" id="hyperlocation-unified-dialog-anchor">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="TOl1y">
                                                                        <mask id="path-1-inside-1_14332_29064" fill="white">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.22 16.6631C12.2655 16.5507 12.3574 16.463 12.4721 16.4238C15.4827 15.3961 17.6477 12.5431 17.6477 9.18457C17.6477 4.96088 14.2237 1.53691 10 1.53691C5.77631 1.53691 2.35234 4.96088 2.35234 9.18457C2.35234 12.5459 4.52087 15.4007 7.53524 16.4264C7.65025 16.4655 7.74238 16.5533 7.78786 16.666C8.15312 17.5706 8.82417 18.5768 10.0022 18.5768C11.1815 18.5768 11.8539 17.5685 12.22 16.6631Z"></path>
                                                                        </mask>
                                                                        <path d="M17.6477 9.18457L16.1477 9.18457L16.1477 9.18457H17.6477ZM10 1.53691L10 3.03691L10 1.53691ZM2.35234 9.18457L3.85234 9.18457L2.35234 9.18457ZM10.0022 18.5768L10.0022 17.0768L10.0022 17.0768L10.0022 18.5768ZM7.53524 16.4264L7.05206 17.8464L7.53524 16.4264ZM7.78786 16.666L9.17876 16.1044L7.78786 16.666ZM12.4721 16.4238L12.9568 17.8434L12.4721 16.4238ZM12.22 16.6631L10.8294 16.1008L12.22 16.6631ZM16.1477 9.18457C16.1477 11.8821 14.4094 14.1775 11.9875 15.0043L12.9568 17.8434C16.556 16.6146 19.1477 13.2042 19.1477 9.18457L16.1477 9.18457ZM10 3.03691C13.3953 3.03691 16.1477 5.78931 16.1477 9.18457L19.1477 9.18457C19.1477 4.13246 15.0521 0.0369079 10 0.0369076L10 3.03691ZM3.85234 9.18457C3.85234 5.78931 6.60474 3.03691 10 3.03691L10 0.0369076C4.94788 0.036907 0.852336 4.13246 0.852336 9.18457L3.85234 9.18457ZM8.01841 15.0063C5.59347 14.1812 3.85234 11.8843 3.85234 9.18457L0.852336 9.18457C0.852336 13.2075 3.44827 16.6202 7.05206 17.8464L8.01841 15.0063ZM10.0022 17.0768C9.89274 17.0768 9.79638 17.047 9.65666 16.9058C9.48996 16.7372 9.32263 16.4607 9.17876 16.1044L6.39696 17.2276C6.78813 18.1964 7.809 20.0768 10.0022 20.0768L10.0022 17.0768ZM10.8294 16.1008C10.6851 16.4576 10.5172 16.7352 10.3496 16.9046C10.2089 17.0468 10.1118 17.0768 10.0022 17.0768L10.0022 20.0768C12.1967 20.0767 13.219 18.194 13.6106 17.2254L10.8294 16.1008ZM7.05206 17.8464C6.74944 17.7434 6.51298 17.5149 6.39696 17.2276L9.17876 16.1044C8.97177 15.5918 8.55107 15.1875 8.01841 15.0063L7.05206 17.8464ZM11.9875 15.0043C11.4561 15.1857 11.0363 15.5892 10.8294 16.1008L13.6106 17.2254C13.4947 17.5122 13.2587 17.7403 12.9568 17.8434L11.9875 15.0043Z" fill="currentColor" mask="url(#path-1-inside-1_14332_29064)"></path>
                                                                        <circle cx="9.99999" cy="9.18456" r="1.56249" stroke="currentColor" stroke-width="1.5"></circle>
                                                                    </svg>
                                                                    <div class="_1Z274 _2WAtm">
                                                                        <div class="_3EzTc">
                                                                            <span class="_2sCdf _66nxG _3WROT Qg8Jj">Алматы</span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="_381y5 _21Njf cia-vs cia-cs" aria-label="Категории" role="tablist" data-node-id="9ewb_cdh1_2" data-zone-name="departments" data-baobab-name="departments">
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_3" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;thematicEntrypoint&quot;,&quot;title&quot;:&quot;Распродажа&quot;,&quot;position&quot;:0}" data-zone-name="thematic-entrypoint">
                                                        <div class="_2rqwv" style="background-image:url(//avatars.mds.yandex.net/get-marketcms/1357599/img-3fbcda14-5700-4641-a12e-efdcafa54512.gif/optimize)" fetchpriority="low">
                                                            <a href="https://market.yandex.ru/special/newyear2024" class="_31mNV" style="color:#ffffff00">Распродажа</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_4" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;131324919&quot;,&quot;title&quot;:&quot;Сплит 006&quot;,&quot;position&quot;:1}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                            <a href="/special/split" class="_3Lwc_">
                                                                <span class="_3z8Gf">Сплит 006</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_5" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;122237226&quot;,&quot;title&quot;:&quot;iHerb&quot;,&quot;position&quot;:2}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                            <a href="/catalog--tovary-s-iherb/50494252" class="_3Lwc_">
                                                                <span class="_3z8Gf">iHerb</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_6" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;119404653&quot;,&quot;title&quot;:&quot;Алиса&quot;,&quot;position&quot;:3}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                            <a href="https://market.yandex.ru/special/alica_cashback" class="_3Lwc_">
                                                                <span class="_3z8Gf">Алиса</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_7" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;97017411&quot;,&quot;title&quot;:&quot;ИКЕА&quot;,&quot;position&quot;:4}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                            <a href="https://market.yandex.ru/catalog--tovary-ikea/38679690" class="_3Lwc_">
                                                                <span class="_3z8Gf">ИКЕА</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_8" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;97017505&quot;,&quot;title&quot;:&quot;Универмаг&quot;,&quot;position&quot;:5}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                            <a href="/special/corner-woman" class="_3Lwc_">
                                                                <span class="_3z8Gf">Универмаг</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_9" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;97017445&quot;,&quot;title&quot;:&quot;Продукты&quot;,&quot;position&quot;:6}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                        <a href="products.php?category=Продукты" class="_3Lwc_">
                                                                <span class="_3z8Gf">Продукты</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_a" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;97017490&quot;,&quot;title&quot;:&quot;Дом&quot;,&quot;position&quot;:7}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                        <a href="products.php?category=Дом" class="_3Lwc_">
                                                                <span class="_3z8Gf">Дом</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_b" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;116009755&quot;,&quot;title&quot;:&quot;Одежда&quot;,&quot;position&quot;:8}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                        <a href="products.php?category=Одежда" class="_3Lwc_">
                                                                <span class="_3z8Gf">Одежда</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_c" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;97017435&quot;,&quot;title&quot;:&quot;Детям&quot;,&quot;position&quot;:9}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                            <a href="/catalog--detskie-tovary/54421" class="_3Lwc_">
                                                                <span class="_3z8Gf">Детям</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_d" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;97017450&quot;,&quot;title&quot;:&quot;Красота&quot;,&quot;position&quot;:10}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                            <a href="/catalog--tovary-dlia-krasoty/54438" class="_3Lwc_">
                                                                <span class="_3z8Gf">Красота</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li role="tab" class="cia-vs cia-cs" data-node-id="9ewb_cdh1_e" data-baobab-name="department">
                                                    <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;97017420&quot;,&quot;title&quot;:&quot;Электроника&quot;,&quot;position&quot;:11}" data-zone-name="category-link">
                                                        <div class="_35SYu _1vnug">
                                                            <a href="/catalog--elektronika/54440" class="_3Lwc_">
                                                                <span class="_3z8Gf">Электроника</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                </ul>
                                                <ul class="_381y5 _169PI" role="tablist">
                                                    <li role="tab">
                                                        <div class="cia-vs cia-cs" data-zone-data="{&quot;id&quot;:&quot;116001386&quot;,&quot;title&quot;:&quot;Покупайте как юрлицо&quot;,&quot;position&quot;:0}" data-zone-name="market-for-business">
                                                            <div class="_2et7a _35SYu _1vnug ehs4s oihV6" tabindex="0" role="button">
                                                                <a href="https://business.market.yandex.ru/pokupayte-dlya-biznesa" class="_3Lwc_">
                                                                    <span class="_3z8Gf">Покупайте как юрлицо</span>
                                                                </a>
                                                                <div id="M2B_HEADER_TAB_ANCHOR" class="_1t8C0"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div><!--END [@MarketNode/HeaderTabsLayout] /menu/layout static-->
                                </div>
                            </div>
                    </noindex>
                </div>

    

                
                <h1 id='category_name'>Заказы</h1>
                <div id="products-container"></div>

                
<script>
    var products = <?php echo json_encode($products); ?>;
    var container = document.getElementById("products-container");

    if (products.length === 0) {
        // Display a message when there are no purchases
        var emptyCartMessage = document.createElement("p");
        emptyCartMessage.innerText = "Вы ничего не покупали.";
        container.appendChild(emptyCartMessage);
    } else {
        // Display products if there are purchases
        products.forEach(function (product) {
            var productCard = document.createElement("div");
            productCard.className = "product-card";

            var productImage = document.createElement("img");
            productImage.className = "product-image";
            productImage.src = product.image_url;
            productImage.alt = product.name;

            var productName = document.createElement("h2");
            productName.innerText = product.name;

            var productPrice = document.createElement("p");
            productPrice.innerText = "Цена: " + product.price + " тенге";

            var purchaseDate = document.createElement("p");
            // Format the purchase date as desired (adjust according to your needs)
            purchaseDate.innerText = "Дата покупки: " + new Date(product.created_at).toLocaleString();

            // Добавляем обработчик событий клика
            productCard.addEventListener("click", function () {
                // Переход на страницу product.php с передачей параметра product_id
                window.location.href = 'product.php?product_id=' + product.product_id;
            });

            productCard.appendChild(productImage);
            productCard.appendChild(productName);
            productCard.appendChild(productPrice);
            productCard.appendChild(purchaseDate);

            container.appendChild(productCard);
        });
    }
</script>




                <div class="_1MqoO cia-vs cia-cs" data-node-id="9ewb_hgvb_1" data-zone-name="footer" data-baobab-name="footer">
                    <footer class="cMlhN" data-sins-no-track="true">
                        <noindex>
                            <div data-apiary-widget-name="@marketfront/DistributionLoader" data-apiary-widget-id="/footer/appPromoLoader"></div>
                            <div data-apiary-widget-name="@MarketNode/FooterSubsriptions" data-apiary-widget-id="/footer/subscription">
                                <div class="" data-zone-name="footerSubscription">
                                    <div></div>
                                </div>
                            </div>
                            <div class="_2q2DD">
                                <div class="_2UK6L">
                                    <div class="_1Cuoi">
                                        <h2 class="_1oI3I">Полезные ссылки</h2>
                                        <div class="_2owod">
                                            <h3 class="_3hOFL">Покупателям</h3>
                                            <a class="_1AHfX" href="https://yandex.kz/support/market/choice-goods/product-search.html" target="_blank" rel="nofollow noopener noreferrer">Как выбрать товар</a>
                                            <a class="_1AHfX" href="https://market.yandex.ru/my/order/conditions" target="_blank" rel="nofollow noopener noreferrer">Оплата и доставка</a>
                                            <a class="_1AHfX" href="https://yandex.kz/support/market/troubleshooting/general.html" target="_blank" rel="nofollow noopener noreferrer">Обратная связь</a>
                                            <a class="_1AHfX" href="https://business.market.yandex.ru/pokupayte-dlya-biznesa?m2b_referrer_config=footer" target="_blank" rel="nofollow noopener noreferrer">Покупайте как юрлицо</a>
                                            <a class="_1AHfX" href="/about" target="_blank" rel="nofollow noopener noreferrer">О сервисе</a>
                                            <a class="_1AHfX" href="https://yandex.kz/jobs/usability" target="_blank" rel="nofollow noopener noreferrer">Участие в&nbsp;исследованиях</a>
                                            <a class="_1AHfX" href="https://yandex.kz/support/market/return.html" target="_blank" rel="nofollow noopener noreferrer">Возвраты</a>
                                        </div>
                                        <div class="_2owod">
                                            <h3 class="_3hOFL">Продавцам</h3>
                                            <a class="_1AHfX" href="https://passport.yandex.kz/auth?mode=auth&amp;from=market&amp;retpath=https://partner.market.yandex.kz" target="_blank" rel="nofollow noopener noreferrer">Личный кабинет продавца</a>
                                            <a class="_1AHfX" href="https://partner.market.yandex.kz/welcome/partners?utm_source=yandex_services&amp;utm_medium=b2c_market&amp;utm_campaign=backb2c&amp;utm_content=text&amp;utm_term=web" target="_blank" rel="nofollow noopener noreferrer">Продавайте на Маркете</a>
                                            <a class="_1AHfX" href="https://yandex.kz/promo/marketpartner/documentation?utm_source=market&amp;utm_medium=footer&amp;from=market" target="_blank" rel="nofollow noopener noreferrer">Документация для партнёров</a>
                                            <a class="_1AHfX" href="https://market.yandex.kz/partners?utm_source=market&amp;utm_medium=footer&amp;from=market" target="_blank" rel="nofollow noopener noreferrer">Сайт для партнёров</a>
                                        </div>
                                        <div class="_2owod">
                                            <h3 class="_3hOFL">Сотрудничество</h3>
                                            <a class="_1AHfX" href="https://yandex.ru/company/services_news?tag=маркет" target="_blank" rel="nofollow noopener noreferrer">Новости компании</a>
                                            <a class="_1AHfX" href="https://affiliate.market.yandex.kz/?utm_source=market_homepage&amp;utm_campaign=partner_landing" target="_blank" rel="nofollow noopener noreferrer">Партнёрская программа</a>
                                            <a class="_1AHfX" href="https://affiliate.market.yandex.kz/influencers?utm_source=market_homepage&amp;utm_campaign=partner_landing_influencers" target="_blank" rel="nofollow noopener noreferrer">Программа для блогеров</a>
                                            <a class="_1AHfX" href="https://vendor.market.yandex.ru/welcome/vendors?from=market&amp;utm_source=market&amp;utm_medium=footer" target="_blank" rel="nofollow noopener noreferrer">Производителям</a>
                                            <a class="_1AHfX" href="https://yandex.ru/promo/marketpartner/pvz?utm_source=market&amp;utm_medium=footer&amp;from=market" target="_blank" rel="nofollow noopener noreferrer">Пункт выдачи заказов</a>
                                            <a class="_1AHfX" href="https://yandex.kz/jobs/services/market/about?from=footer&amp;utm_source=yandex_market_web_d&amp;utm_medium=buttom&amp;utm_campaign=market_nanimaet" target="_blank" rel="nofollow noopener noreferrer" data-autotest-id="footer-link-vacancies">Маркет нанимает</a>
                                        </div>
                                    </div>
                                    <div class="_2VaJ3">
                                        <div class="AL5B-">
                                            <a class="APMq7" href="//sovetnik.yandex.ru/?clid=2312596&amp;amp;utm_source=market&amp;amp;utm_medium=main&amp;amp;utm_campaign=footer" target="_blank" rel="nofollow noopener noreferrer">
                                                <div class="_2O8a2"></div>
                                                <p class="bQsY1">Советник находит нужные вам товары<br>по более выгодной цене. <span class="_1eWrC">Подробнее</span></p>
                                            </a>
                                            <div class="_1wtmS">616 835 727&nbsp;предложений от&nbsp;<a aria-hidden="false" href="/shops" class="egKyN _2oLyz _1wtmS">54 414&nbsp;магазинов.</a><br>Обновлено 09.12.2023 в 21:03 по московскому времени.</div>
                                            <div class="W359m">
                                                <a class="_3A0cj _2HOms" data-autotest-social-name="vk" rel="nofollow noopener" href="https://vk.com/yandex.market" title="Вконтакте" target="_blank"><span class="_1oI3I">Вконтакте</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_1oM_u">
                                    <a class="_1b0_j" href="//radar.yandex.kz/top_list?thematic=retail&amp;isSearch=true&amp;row_id=market-yandex-ru&amp;offset=1">Статистика</a>
                                    <a class="_1b0_j" href="https://legal.yandex.kz/market_termsofuse/">Пользовательское соглашение</a>
                                    <div class="c9pap">
                                        <div class="Ft4FS">©&nbsp;2023&nbsp;&nbsp;ООО&nbsp;«<a class="Ft4FS" href="https://market.yandex.kz/">ЯНДЕКС</a>»
                                        </div>
                                        <div class="_2rKHv">
                                            <span>Проект компании</span>
                                            <a class="_3nAMs" href="https://yandex.ru/all" target="_blank" rel="noopener noreferrer" aria-label="Яндекс"><svg style="width:50px;height:16px" width="50" height="16" fill="none" focusable="false" viewBox="0 0 50 16" xmlns="http://www.w3.org/2000/svg"><g><path d="m8.288 13h1.936v-11.12h-2.816c-2.832 0-4.32 1.456-4.32 3.6 0 1.712 0.816 2.72 2.272 3.76l-2.528 3.76h2.096l2.816-4.208-0.976-0.656c-1.184-0.8-1.76-1.424-1.76-2.768 0-1.184 0.832-1.984 2.416-1.984h0.864v9.616zm37.328 0.16c0.88 0 1.504-0.16 1.968-0.496v-1.552c-0.48 0.336-1.056 0.544-1.856 0.544-1.36 0-1.92-1.056-1.92-2.72 0-1.744 0.688-2.64 1.936-2.64 0.736 0 1.456 0.256 1.84 0.496v-1.616c-0.4-0.224-1.104-0.384-2.048-0.384-2.432 0-3.696 1.744-3.696 4.192 0 2.688 1.232 4.176 3.776 4.176zm-11.904-0.704v-1.552c-0.592 0.4-1.584 0.752-2.512 0.752-1.392 0-1.92-0.656-2-2h4.592v-1.008c0-2.8-1.232-3.856-3.136-3.856-2.32 0-3.424 1.776-3.424 4.208 0 2.8 1.376 4.16 3.808 4.16 1.216 0 2.112-0.32 2.672-0.704zm-17.44-7.504v3.184h-2.544v-3.184h-1.904v8.048h1.904v-3.36h2.544v3.36h1.904v-8.048h-1.904zm10.496 6.544h-0.848v-6.544h-5.552v0.688c0 1.968-0.128 4.512-0.8 5.856h-0.592v3.344h1.76v-1.84h4.272v1.84h1.76v-3.344zm13.024 1.504h2.16l-3.056-4.336 2.688-3.712h-1.92l-2.688 3.712v-3.712h-1.904v8.048h1.904v-3.952l2.816 3.952zm-9.168-6.704c0.944 0 1.232 0.784 1.232 1.792v0.16h-2.656c0.048-1.28 0.512-1.952 1.424-1.952zm-6.608 5.2h-2.688c0.528-1.216 0.672-3.408 0.672-4.8v-0.24h2.016v5.04z" fill="currentColor"></path></g></svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </noindex>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>
</html>