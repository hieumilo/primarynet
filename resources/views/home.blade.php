

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
                                    <span class="lbl">Marketing automation                  
                                    </span>
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
                            <iframe class="iframe" src="http://localhost:8000/ifram8" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div><!--.col-->
                <div class="col-xl-6 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Recent tickets</h3>
                        </header>
                        <div class="box-typical-body panel-body">
                            <iframe class="iframe" src="http://localhost:8000/ifram7" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div><!--.col-->
            </div>
            <div class="row">
                <div class="col-xl-4 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Recent tickets</h3>
                        </header>
                        <div class="box-typical-body panel-body">
                            <iframe class="iframe" src="http://localhost:8000/ifram5" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div>
                <div class="col-xl-4 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Recent tickets</h3>
                        </header>
                        <div class="box-typical-body panel-body">
                            <iframe class="iframe" src="http://localhost:8000/ifram6" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div>
                <div class="col-xl-4 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Recent tickets</h3>
                        </header>
                        <div class="box-typical-body panel-body">
                            <iframe class="iframe" src="http://localhost:8000/ifram4" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Recent tickets</h3>
                        </header>
                        <div class=" panel-body">
                            <iframe class="iframe" src="http://localhost:8000/ifram1" style="">
                                <p>test</p>
                            </iframe>

                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->
                </div>
                <div class="col-xl-6 dahsboard-column">

                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Recent tickets</h3>
                        </header>
                        <div class="box-typical-body panel-body">

                        </div><!--.box-typical-body-->

                    <section class="box-typical">
                        <div id="toolbar">
                            <div class="bootstrap-table-header">Table header</div>
                            <button id="remove" class="btn btn-danger remove" disabled>
                                <i class="font-icon font-icon-close-2"></i> Delete
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table id="table"
                                   class="table table-striped"
                                   data-toolbar="#toolbar"
                                   data-search="true"
                                   data-show-refresh="true"
                                   data-show-toggle="true"
                                   data-show-columns="true"
                                   data-show-export="true"
                                   data-detail-view="true"
                                   data-detail-formatter="detailFormatter"
                                   data-minimum-count-columns="2"
                                   data-show-pagination-switch="true"
                                   data-pagination="true"
                                   data-id-field="id"
                                   data-page-list="[10, 25, 50, 100, ALL]"
                                   data-show-footer="false"
                                   data-response-handler="responseHandler">
                            </table>
                        </div>

                    </section><!--.box-typical-dashboard-->
                </div>
                <div class="col-xl-3 dahsboard-column">
                    <section class="box-typical box-typical-dashboard panel panel-default scrollable">
                        <header class="box-typical-header panel-heading">
                            <h3 class="panel-title">Recent tickets</h3>
                        </header>
                        <div class="box-typical-body panel-body">
                            <iframe class="iframe" src="http://localhost:8000/ifram2" style="">
                                <p>test</p>
                            </iframe>
                        </div><!--.box-typical-body-->
                    </section><!--.box-typical-dashboard-->

                </div>

                </div><!--.col-->

               <div class="col-md-12">
                   <div class="gridster">
                       <ul>
                           @if(isset($settings))
                           @foreach($settings as $setting)
                                <li data-row="{{$setting->row}}" data-col="{{$setting->col}}" data-sizex="{{$setting->sizex}}" data-sizey="{{$setting->sizey}}"></li>
                           @endforeach
                           @endif
                       </ul>
                   </div>
               </div>


            </div>

        </div><!--.container-fluid-->
    </div><!--.page-content-->
@endsection
