@extends('layouts.app')

@section('content')
    <header class="site-header">
        <div class="container-fluid">
            <a href="#" class="site-logo">
                <img class="hidden-md-down" src="img/logo-2.png" alt="">
                <img class="hidden-lg-down" src="img/logo-2-mob.png" alt="">
            </a>

            <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
                <span>toggle menu</span>
            </button>

            <button class="hamburger hamburger--htla">
                <span>toggle menu</span>
            </button>
            <div class="site-header-content">
                <div class="site-header-content-in">
                    <div class="site-header-shown">
                        <div class="dropdown dropdown-notification notif">
                            <a href="#"
                               class="header-alarm dropdown-toggle active"
                               id="dd-notification"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">
                                <i class="font-icon-alarm"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
                                <div class="dropdown-menu-notif-header">
                                    Notifications
                                    <span class="label label-pill label-danger">4</span>
                                </div>
                                <div class="dropdown-menu-notif-list">
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="img/photo-64-1.jpg" alt="">
                                        </div>
                                        <div class="dot"></div>
                                        <a href="#">Morgan</a> was bothering about something
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="img/photo-64-2.jpg" alt="">
                                        </div>
                                        <div class="dot"></div>
                                        <a href="#">Lioneli</a> had commented on this <a href="#">Super Important Thing</a>
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="img/photo-64-3.jpg" alt="">
                                        </div>
                                        <div class="dot"></div>
                                        <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                    <div class="dropdown-menu-notif-item">
                                        <div class="photo">
                                            <img src="img/photo-64-4.jpg" alt="">
                                        </div>
                                        <a href="#">Lionely</a> wants to go to <a href="#">Cinema</a> with you to see <a href="#">This Movie</a>
                                        <div class="color-blue-grey-lighter">7 hours ago</div>
                                    </div>
                                </div>
                                <div class="dropdown-menu-notif-more">
                                    <a href="#">See more</a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown-notification messages">
                            <a href="#"
                               class="header-alarm dropdown-toggle active"
                               id="dd-messages"
                               data-toggle="dropdown"
                               aria-haspopup="true"
                               aria-expanded="false">
                                <i class="font-icon-mail"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
                                <div class="dropdown-menu-messages-header">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active"
                                               data-toggle="tab"
                                               href="#tab-incoming"
                                               role="tab">
                                                Inbox
                                                <span class="label label-pill label-danger">8</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                               data-toggle="tab"
                                               href="#tab-outgoing"
                                               role="tab">Outbox</a>
                                        </li>
                                    </ul>
                                    <!--<button type="button" class="create">
                                        <i class="font-icon font-icon-pen-square"></i>
                                    </button>-->
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-incoming" role="tabpanel">
                                        <div class="dropdown-menu-messages-list">
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                                <span class="mess-item-name">Christian Burton</span>
                                                <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                                <span class="mess-item-name">Christian Burton</span>
                                                <span class="mess-item-txt">Morgan was bothering about something...</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-outgoing" role="tabpanel">
                                        <div class="dropdown-menu-messages-list">
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                                <span class="mess-item-name">Christian Burton</span>
                                                <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something...</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                                <span class="mess-item-name">Christian Burtons</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!</span>
                                            </a>
                                            <a href="#" class="mess-item">
                                                <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                                <span class="mess-item-name">Tim Collins</span>
                                                <span class="mess-item-txt">Morgan was bothering about something!</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-menu-notif-more">
                                    <a href="#">See more</a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dropdown-lang">
                            <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="flag-icon flag-icon-us"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-col">
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ru"></span>Русский</a>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de"></span>Deutsch</a>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-it"></span>Italiano</a>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es"></span>Español</a>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-pl"></span>Polski</a>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-li"></span>Lietuviu</a>
                                </div>
                                <div class="dropdown-menu-col">
                                    <a class="dropdown-item current" href="#"><span class="flag-icon flag-icon-us"></span>English</a>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span>Français</a>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-by"></span>Беларускi</a>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ua"></span>Українська</a>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-cz"></span>Česky</a>
                                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ch"></span>中國</a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown user-menu">
                            <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/avatar-2-64.png" alt="">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
                                <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign">Help</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <span class="font-icon glyphicon glyphicon-log-out"></span> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>

                        <button type="button" class="burger-right">
                            <i class="font-icon-menu-addl"></i>
                        </button>
                    </div><!--.site-header-shown-->

                    <div class="mobile-menu-right-overlay"></div>
                    <div class="site-header-collapsed">
                        <div class="site-header-collapsed-in">
                            <div class="dropdown dropdown-typical">
                                <div class="dropdown-menu" aria-labelledby="dd-header-sales">
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
                                </div>
                            </div>
                            <div class="dropdown dropdown-typical">
                                <a class="dropdown-toggle" id="dd-header-marketing" data-target="#" href="http://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="font-icon font-icon-cogwheel"></span>
                                    <span class="lbl">Marketing automation</span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dd-header-marketing">
                                    <a class="dropdown-item" href="#">Current Search</a>
                                    <a class="dropdown-item" href="#">Search for Issues</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-header">Recent issues</div>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
                                    <div class="dropdown-more">
                                        <div class="dropdown-more-caption padding">more...</div>
                                        <div class="dropdown-more-sub">
                                            <div class="dropdown-more-sub-in">
                                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
                                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
                                                <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Import Issues from CSV</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-header">Filters</div>
                                    <a class="dropdown-item" href="#">My Open Issues</a>
                                    <a class="dropdown-item" href="#">Reported by Me</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Manage filters</a>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-header">Timesheet</div>
                                    <a class="dropdown-item" href="#">Subscribtions</a>
                                </div>
                            </div>
                            <div class="dropdown dropdown-typical">
                                <a class="dropdown-toggle" id="dd-header-social" data-target="#" href="http://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="font-icon font-icon-share"></span>
                                    <span class="lbl">Social media</span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dd-header-social">
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
                                </div>
                            </div>
                            <div class="dropdown dropdown-typical">
                                <a href="#" class="dropdown-toggle no-arr">
                                    <span class="font-icon font-icon-page"></span>
                                    <span class="lbl">Projects</span>
                                    <span class="label label-pill label-danger">35</span>
                                </a>
                            </div>

                            <div class="dropdown dropdown-typical">
                                <a class="dropdown-toggle" id="dd-header-form-builder" data-target="#" href="http://example.com/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="font-icon font-icon-pencil"></span>
                                    <span class="lbl">Form builder</span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dd-header-form-builder">
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-home"></span>Quant and Verbal</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-cart"></span>Real Gmat Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-speed"></span>Prep Official App</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-users"></span>CATprer Test</a>
                                    <a class="dropdown-item" href="#"><span class="font-icon font-icon-comments"></span>Third Party Test</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-rounded dropdown-toggle" id="dd-header-add" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Add
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dd-header-add">
                                    <a class="dropdown-item" href="#">Quant and Verbal</a>
                                    <a class="dropdown-item" href="#">Real Gmat Test</a>
                                    <a class="dropdown-item" href="#">Prep Official App</a>
                                    <a class="dropdown-item" href="#">CATprer Test</a>
                                    <a class="dropdown-item" href="#">Third Party Test</a>
                                </div>
                            </div>
                            <div class="help-dropdown">
                                <button type="button">
                                    <i class="font-icon font-icon-help"></i>
                                </button>
                                <div class="help-dropdown-popup">
                                    <div class="help-dropdown-popup-side">
                                        <ul>
                                            <li><a href="#">Getting Started</a></li>
                                            <li><a href="#" class="active">Creating a new project</a></li>
                                            <li><a href="#">Adding customers</a></li>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Importing data</a></li>
                                            <li><a href="#">Exporting data</a></li>
                                        </ul>
                                    </div>
                                    <div class="help-dropdown-popup-cont">
                                        <div class="help-dropdown-popup-cont-in">
                                            <div class="jscroll">
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum is simply
                                                    <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Contrary to popular belief
                                                    <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    The point of using Lorem Ipsum
                                                    <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum
                                                    <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum is simply
                                                    <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Contrary to popular belief
                                                    <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    The point of using Lorem Ipsum
                                                    <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum
                                                    <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum is simply
                                                    <span class="describe">Lorem Ipsum has been the industry's standard dummy text </span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Contrary to popular belief
                                                    <span class="describe">Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    The point of using Lorem Ipsum
                                                    <span class="describe">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</span>
                                                </a>
                                                <a href="#" class="help-dropdown-popup-item">
                                                    Lorem Ipsum
                                                    <span class="describe">There are many variations of passages of Lorem Ipsum available</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--.help-dropdown-->
                            <a class="btn btn-nav btn-rounded btn-inline btn-danger-outline" href="http://themeforest.net/item/startui-premium-bootstrap-4-admin-dashboard-template/15228250?ref=themesanytime">
                                Buy Theme
                            </a>
                            <div class="site-header-search-container">
                                <form class="site-header-search closed">
                                    <input type="text" placeholder="Search"/>
                                    <button type="submit">
                                        <span class="font-icon-search"></span>
                                    </button>
                                    <div class="overlay"></div>
                                </form>
                            </div>
                        </div><!--.site-header-collapsed-in-->
                    </div><!--.site-header-collapsed-->
                </div><!--site-header-content-in-->
            </div><!--.site-header-content-->
        </div><!--.container-fluid-->
    </header><!--.site-header-->
    <div class="mobile-menu-left-overlay"></div>
    <ul class="main-nav nav nav-inline">
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Prperties</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Documents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Prperties</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Documents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
        </li>
    </ul>


    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <div class="chart-statistic-box">
                        <div class="chart-txt">
                            <div class="chart-txt-top">
                                <p><span class="unit">$</span><span class="number">1540</span></p>
                                <p class="caption">Week income</p>
                            </div>
                            <table class="tbl-data">
                                <tr>
                                    <td class="price color-purple">120$</td>
                                    <td>Orders</td>
                                </tr>
                                <tr>
                                    <td class="price color-yellow">15$</td>
                                    <td>Investments</td>
                                </tr>
                                <tr>
                                    <td class="price color-lime">55$</td>
                                    <td>Others</td>
                                </tr>
                            </table>
                        </div>
                        <div class="chart-container">
                            <div class="chart-container-in">
                                <div id="chart_div"></div>
                                <header class="chart-container-title">Income</header>
                                <div class="chart-container-x">
                                    <div class="item"></div>
                                    <div class="item">tue</div>
                                    <div class="item">wed</div>
                                    <div class="item">thu</div>
                                    <div class="item">fri</div>
                                    <div class="item">sat</div>
                                    <div class="item">sun</div>
                                    <div class="item">mon</div>
                                    <div class="item"></div>
                                </div>
                                <div class="chart-container-y">
                                    <div class="item">300</div>
                                    <div class="item"></div>
                                    <div class="item">250</div>
                                    <div class="item"></div>
                                    <div class="item">200</div>
                                    <div class="item"></div>
                                    <div class="item">150</div>
                                    <div class="item"></div>
                                    <div class="item">100</div>
                                    <div class="item"></div>
                                    <div class="item">50</div>
                                    <div class="item"></div>
                                </div>
                            </div>
                        </div>
                    </div><!--.chart-statistic-box-->
                </div><!--.col-->
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <article class="statistic-box red">
                                <div>
                                    <div class="number">26</div>
                                    <div class="caption"><div>Open tickets</div></div>
                                    <div class="percent">
                                        <div class="arrow up"></div>
                                        <p>15%</p>
                                    </div>
                                </div>
                            </article>
                        </div><!--.col-->
                        <div class="col-sm-6">
                            <article class="statistic-box purple">
                                <div>
                                    <div class="number">12</div>
                                    <div class="caption"><div>Closes tickets</div></div>
                                    <div class="percent">
                                        <div class="arrow down"></div>
                                        <p>11%</p>
                                    </div>
                                </div>
                            </article>
                        </div><!--.col-->
                        <div class="col-sm-6">
                            <article class="statistic-box yellow">
                                <div>
                                    <div class="number">104</div>
                                    <div class="caption"><div>New clients</div></div>
                                    <div class="percent">
                                        <div class="arrow down"></div>
                                        <p>5%</p>
                                    </div>
                                </div>
                            </article>
                        </div><!--.col-->
                        <div class="col-sm-6">
                            <article class="statistic-box green">
                                <div>
                                    <div class="number">29</div>
                                    <div class="caption"><div>Here is an example of a long name</div></div>
                                    <div class="percent">
                                        <div class="arrow up"></div>
                                        <p>84%</p>
                                    </div>
                                </div>
                            </article>
                        </div><!--.col-->
                    </div><!--.row-->
                </div><!--.col-->
            </div><!--.row-->

            <div class="row">
                <div class="col-xl-6 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Recent orders</h3>
                        </header>
                        <div class="box-typical-body panel-body">
                            <table class="tbl-typical">
                                <tr>
                                    <th><div>Status</div></th>
                                    <th><div>Clients</div></th>
                                    <th align="center"><div>Orders#</div></th>
                                    <th align="center"><div>Date</div></th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>John Doe</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 8:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>Thomas Bayer</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 16:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-default">Inactive</span>
                                    </td>
                                    <td>Nicolas Karabat</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap align="center"><span class="semibold">Yesterday</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-default">Unpaid</span>
                                        <span class="label label-default">Inactive</span>
                                    </td>
                                    <td>Alexandre Pome</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap align="center">23th May</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>John Doe</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 8:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td>Thomas Bayer</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap align="center"><span class="semibold">Today</span> 16:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Paid</span>
                                        <span class="label label-default">Inactive</span>
                                    </td>
                                    <td>Nicolas Karabat</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap align="center"><span class="semibold">Yesterday</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-default">Unpaid</span>
                                        <span class="label label-default">Inactive</span>
                                    </td>
                                    <td>Alexandre Pome</td>
                                    <td align="center">3435362</td>
                                    <td class="color-blue-grey" nowrap align="center">23th May</td>
                                </tr>
                            </table>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Comments</h3>
                        </header>
                        <div class="box-typical-body panel-body">
                            <article class="comment-item">
                                <div class="user-card-row">
                                    <div class="tbl-row">
                                        <div class="tbl-cell tbl-cell-photo">
                                            <a href="#">
                                                <img src="img/photo-64-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tbl-cell">
                                            <span class="user-card-row-name"><a href="#">Matt McGill</a></span>
                                        </div>
                                        <div class="tbl-cell tbl-cell-date">
                                            <span class="semibold">Today</span>
                                            12:45
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item-txt">
                                    <p>That’s a great idea! I’m sure we could start this project as soon as possible.</p>
                                    <p>Let’s meet tomorow!</p>
                                </div>
                                <div class="comment-item-meta">
                                    <a href="#" class="star">
                                        <i class="font-icon font-icon-star"></i>
                                    </a>
                                    <a href="#">
                                        <i class="font-icon font-icon-re"></i>
                                    </a>
                                    <!--Реализация кнопками-->
                                    <!--<button type="button" class="star">-->
                                    <!--<i class="font-icon font-icon-star"></i>-->
                                    <!--</button>-->
                                    <!--<button type="button">-->
                                    <!--<i class="font-icon font-icon-re"></i>-->
                                    <!--</button>-->
                                </div>
                            </article>
                            <article class="comment-item">
                                <div class="user-card-row">
                                    <div class="tbl-row">
                                        <div class="tbl-cell tbl-cell-photo">
                                            <a href="#">
                                                <img src="img/photo-64-2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="tbl-cell">
                                            <span class="user-card-row-name"><a href="#">Tim Collins</a></span>
                                        </div>
                                        <div class="tbl-cell tbl-cell-date">
                                            <span class="semibold">Today</span>
                                            12:45
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-item-txt">
                                    <p>That’s a great idea! I’m sure we could start this project as soon as possible.</p>
                                    <p>Let’s meet tomorow!</p>
                                </div>
                                <div class="comment-item-meta">
                                    <a href="#" class="star active">
                                        <i class="font-icon font-icon-star"></i>
                                    </a>
                                    <a href="#">
                                        <i class="font-icon font-icon-re"></i>
                                    </a>
                                    <!--Реализация кнопками-->
                                    <!--<button type="button" class="star">-->
                                    <!--<i class="font-icon font-icon-star"></i>-->
                                    <!--</button>-->
                                    <!--<button type="button">-->
                                    <!--<i class="font-icon font-icon-re"></i>-->
                                    <!--</button>-->
                                </div>
                            </article>
                        </div><!--.box-typical-body-->
                    </section>
                </div><!--.col-->
                <div class="col-xl-6 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Recent tickets</h3>
                        </header>
                        <div class="box-typical-body panel-body">
                            <table class="tbl-typical">
                                <tr>
                                    <th><div>Status</div></th>
                                    <th><div>Subject</div></th>
                                    <th align="center"><div>Department</div></th>
                                    <th align="center"><div>Date</div></th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-success">Open</span>
                                    </td>
                                    <td>Website down for one week</td>
                                    <td align="center">Support</td>
                                    <td nowrap align="center"><span class="semibold">Today</span> 8:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-success">Open</span>
                                    </td>
                                    <td>Restoring default settings</td>
                                    <td align="center">Support</td>
                                    <td nowrap align="center"><span class="semibold">Today</span> 16:30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-warning">Progress</span>
                                    </td>
                                    <td>Loosing control on server</td>
                                    <td align="center">Support</td>
                                    <td nowrap align="center"><span class="semibold">Yesterday</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-danger">Closed</span>
                                    </td>
                                    <td>Authorizations keys</td>
                                    <td align="center">Support</td>
                                    <td nowrap align="center">23th May</td>
                                </tr>
                            </table>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Contacts</h3>
                        </header>
                        <div class="box-typical-body panel-body">
                            <div class="contact-row-list">
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="img/photo-64-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Tim Collins</a></p>
                                                <p class="user-card-row-mail"><a href="#">timcolins@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">Director at Tony’s</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="img/photo-64-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
                                                <p class="user-card-row-mail"><a href="#">maggysmith@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">PR Manager</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="img/photo-64-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
                                                <p class="user-card-row-mail"><a href="#">mollybr@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">Assistan</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="img/photo-64-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
                                                <p class="user-card-row-mail"><a href="#">maggysmith@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">PR Manager</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="img/photo-64-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Tim Collins</a></p>
                                                <p class="user-card-row-mail"><a href="#">timcolins@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">Director at Tony’s</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="img/photo-64-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
                                                <p class="user-card-row-mail"><a href="#">maggysmith@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">PR Manager</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="img/photo-64-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Molly Bridjet</a></p>
                                                <p class="user-card-row-mail"><a href="#">mollybr@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">Assistan</div>
                                        </div>
                                    </div>
                                </article>
                                <article class="contact-row">
                                    <div class="user-card-row">
                                        <div class="tbl-row">
                                            <div class="tbl-cell tbl-cell-photo">
                                                <a href="#">
                                                    <img src="img/photo-64-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="tbl-cell">
                                                <p class="user-card-row-name"><a href="#">Maggy Smith</a></p>
                                                <p class="user-card-row-mail"><a href="#">maggysmith@mail.com</a></p>
                                            </div>
                                            <div class="tbl-cell tbl-cell-status">PR Manager</div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div><!--.col-->
            </div>
        </div><!--.container-fluid-->
    </div><!--.page-content-->
@endsection
