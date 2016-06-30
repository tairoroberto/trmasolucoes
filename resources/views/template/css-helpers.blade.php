<!DOCTYPE html>
<html lang="en">

<!--================================================================================
    Item Name: Materialize - Material Design Admin Template
    Version: 3.1
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Helpers | Materialize - Material Design Admin Template</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="images/flag-icons/United-States.png" alt="USA" /></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                    <!-- translation-button -->
                    <ul id="translation-dropdown" class="dropdown-content">
                      <li>
                        <a href="#!"><img src="images/flag-icons/United-States.png" alt="English" />  <span class="language-select">English</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="images/flag-icons/France.png" alt="French" />  <span class="language-select">French</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="images/flag-icons/China.png" alt="Chinese" />  <span class="language-select">Chinese</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="images/flag-icons/Germany.png" alt="German" />  <span class="language-select">German</span></a>
                      </li>
                      
                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                      </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>
                        <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
            </li>
            <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i> Layouts</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="layout-fullscreen.html">Full Screen</a>
                                </li>
                                <li><a href="layout-horizontal-menu.html">Horizontal Menu</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
            </li>
            <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calender</a>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> CSS</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="css-typography.html">Typography</a>
                                </li>
                                <li><a href="css-icons.html">Icons</a>
                                </li>
                                <li><a href="css-animations.html">Animations</a>
                                </li>
                                <li><a href="css-shadow.html">Shadow</a>
                                </li>
                                <li><a href="css-media.html">Media</a>
                                </li>
                                <li><a href="css-sass.html">Sass</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i> UI Elements</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li><a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li><a href="ui-badges.html">Badges</a>
                                </li>
                                <li><a href="ui-breadcrumbs.html">Breadcrumbs</a>
                                </li>
                                <li><a href="ui-collections.html">Collections</a>
                                </li>
                                <li><a href="ui-collapsibles.html">Collapsibles</a>
                                </li>
                                <li><a href="ui-tabs.html">Tabs</a>
                                </li>
                                <li><a href="ui-navbar.html">Navbar</a>
                                </li>
                                <li><a href="ui-pagination.html">Pagination</a>
                                </li>
                                <li><a href="ui-preloader.html">Preloader</a>
                                </li>
                                <li><a href="ui-toasts.html">Toasts</a>
                                </li>
                                <li><a href="ui-tooltip.html">Tooltip</a>
                                </li>
                                <li><a href="ui-waves.html">Waves</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-av-queue"></i> Advanced UI <span class="new badge"></span></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="advanced-ui-chips.html">Chips</a>
                                </li>
                                <li><a href="advanced-ui-cards.html">Cards</a>
                                </li>
                                <li><a href="advanced-ui-modals.html">Modals</a>
                                </li>
                                <li><a href="advanced-ui-media.html">Media</a>
                                </li>
                                <li><a href="advanced-ui-range-slider.html">Range Slider</a>
                                </li>
                                <li><a href="advanced-ui-sweetalert.html">SweetAlert</a>
                                </li>
                                <li><a href="advanced-ui-nestable.html">Shortable & Nestable</a>
                                </li>
                                <li><a href="advanced-ui-translation.html">Language Translation</a>
                                </li>
                                <li><a href="advanced-ui-highlight.html">Highlight</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Widgets</a>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Tables</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="table-basic.html">Basic Tables</a>
                                </li>
                                <li><a href="table-data.html">Data Tables</a>
                                </li>
                                <li><a href="table-jsgrid.html">jsGrid</a>
                                </li>
                                <li><a href="table-editable.html">Editable Table</a>
                                </li>
                                <li><a href="table-floatThead.html">floatThead</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Forms <span class="new badge"></span></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="form-elements.html">Form Elements</a>
                                </li>
                                <li><a href="form-layouts.html">Form Layouts</a>
                                </li>
                                <li><a href="form-validation.html">Form Validations</a>
                                </li>
                                <li><a href="form-masks.html">Form Masks</a>
                                </li>
                                <li><a href="form-file-uploads.html">File Uploads</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-pages"></i> Pages</a>
                        <div class="collapsible-body">
                            <ul>                                        
                                <li><a href="page-contact.html">Contact Page</a>
                                </li>
                                <li><a href="page-todo.html">ToDos</a>
                                </li>
                                <li><a href="page-blog-1.html">Blog Type 1</a>
                                </li>
                                <li><a href="page-blog-2.html">Blog Type 2</a>
                                </li>
                                <li><a href="page-404.html">404</a>
                                </li>
                                <li><a href="page-500.html">500</a>
                                </li>
                                <li><a href="page-blank.html">Blank</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-shopping-cart"></i> eCommers</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="eCommerce-products-page.html">Products Page</a>
                                </li>                                        
                                <li><a href="eCommerce-pricing.html">Pricing Table</a>
                                </li>
                                <li><a href="eCommerce-invoice.html">Invoice</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-image"></i> Medias</a>
                        <div class="collapsible-body">
                            <ul>                                        
                                <li><a href="media-gallary-page.html">Gallery Page</a>
                                </li>
                                <li><a href="media-hover-effects.html">Image Hover Effects</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> User</a>
                        <div class="collapsible-body">
                            <ul>     
                                <li><a href="user-profile-page.html">User Profile</a>
                                </li>                                   
                                <li><a href="user-login.html">Login</a>
                                </li>                                        
                                <li><a href="user-register.html">Register</a>
                                </li>
                                <li><a href="user-forgot-password.html">Forgot Password</a>
                                </li>
                                <li><a href="user-lock-screen.html">Lock Screen</a>
                                </li>                                        
                                
                            </ul>
                        </div>
                    </li>
                    
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Charts</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="charts-chartjs.html">Chart JS</a>
                                </li>
                                <li><a href="charts-chartist.html">Chartist</a>
                                </li>
                                <li><a href="charts-morris.html">Morris Charts</a>
                                </li>
                                <li><a href="charts-xcharts.html">xCharts</a>
                                </li>
                                <li><a href="charts-flotcharts.html">Flot Charts</a>
                                </li>
                                <li><a href="charts-sparklines.html">Sparkline Charts</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
            <li><a href="angular-ui.html"><i class="mdi-action-verified-user"></i> Angular UI  <span class="new badge"></span></a>
            </li>
            <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>
            </li>
            <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>
            </li>
            <li class="active"><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>
            </li>
            <li><a href="changelogs.html"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>
            </li>                    
            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
            <li class="li-hover">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="sample-chart-wrapper">                            
                            <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Helpers</h5>
                <ol class="breadcrumbs">
                  <li><a href="index.html">Dashboard</a>
                  </li>
                  <li><a href="#">CSS</a>
                  </li>
                  <li class="active">Helpers</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">You don't need to create new css class for simple edits.We already did it for you.</p>
            <div class="divider"></div>

            <div class="divider"></div>
            <div id="text-align" class="section">
              <h4 class="header">Text Align</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>Right Aligned</p>
                  <code class="language-markup">class="right-align"</code>
                </div>
                <div class="col s12 m8 l9">
                  <div class="card-panel">
                    <p class="right-align">This text is right aligned. Set in the year 0 F.E. ("Foundation Era"), The Psychohistorians opens on Trantor, the capital of the 12,000-year-old Galactic Empire. Though the empire appears stable and powerful, it is slowly decaying
                      in ways that parallel the decline of the Western Roman Empire.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>Left Aligned</p>
                  <code class="language-markup">class="left-align"</code>
                </div>
                <div class="col s12 m8 l9">
                  <div class="card-panel">
                    <p class="left-align">In English and most European languages where words are read left-to-right, text is usually aligned "flush left", meaning that the text of a paragraph is aligned on the left-hand side with the right-hand side ragged. This is the default
                      style of text alignment on the World Wide Web for left-to-right text Quotations are often indented.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>Center Aligned</p>
                  <code class="language-markup">class="center-align"</code>
                </div>
                <div class="col s12 m8 l9">
                  <div class="card-panel">
                    <p class="center-align">Text can also be "centered", or symmetrically aligned along an axis in the middle of a column. This is often used for the title of a work, headlines, and for poems and songs. As with flush-right alignment, centered text is often used
                      to present data in tables. Centered text is considered less readable for a body of text made up of multiple lines because the ragged starting edges make it difficult for the reader to track from one line to the next.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m4 l3">
                  <h4 class="header">Vertical Align</h4>
                  <p>You can easily vertically center things by adding the class <code class="language-markup">class="valign-wrapper"</code> to the container holding the items you want to vertically align.</p>
                </div>
                <div class="col s12 m8 l9">
                  
                    <div class="valign-demo valign-wrapper">
                      <h5 class="valign center" style="width: 100%;">This should be vertically aligned</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="divider"></div>

            <div id="hiding-content" class="section">
              <h4 class="header">Hiding Content</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>We provide easy to use classes to hide content on specific screen sizes.</p>
                </div>
                <div class="col s12 m8 l9">
                  <div class="card-panel">
                    <table class="striped">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Screen Range</th>
                          <th>Display Test</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><code class="language-markup">.hide-on-small-only</code>
                          </td>
                          <td>Hidden for Mobile Only</td>
                          <td>
                            <p class="hide-on-small-only">Check Me !</p>
                          </td>
                        </tr>
                        <tr>
                          <td><code class="language-markup">.hide-on-med-only</code>
                          </td>
                          <td>Hidden for Tablet Only</td>
                          <td>
                            <p class="hide-on-med-only">Check Me !</p>
                          </td>
                        </tr>
                        <tr>
                          <td><code class="language-markup">.hide-on-med-and-down</code>
                          </td>
                          <td>Hidden for Tablet and Below</td>
                          <td>
                            <p class="hide-on-med-and-down">Check Me !</p>
                          </td>
                        </tr>
                        <tr>
                          <td><code class="language-markup">.hide-on-med-and-up</code>
                          </td>
                          <td>Hidden for Tablet and Above</td>
                          <td>
                            <p class="hide-on-med-and-up">Check Me !</p>
                          </td>
                        </tr>
                        <tr>
                          <td><code class="language-markup">.hide-on-large-only</code>
                          </td>
                          <td>Hidden for Desktop Only</td>
                          <td>
                            <p class="hide-on-large-only">Check Me !</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--truncation-->
            <div class="divider"></div>
            <div id="truncation" class="section">
              <h4 class="header">Truncation</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>To truncate long lines of text in an ellipsis, add the <code class="language-markup">class="truncate"</code> to the tag which contains the text. See an exaple below of a header being truncated inside a card.</p>
                </div>
                <div class="col s12 m8 l9">
                  <div class="card-panel">
                    <p>Normal: This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm.</p>
                    <p class="truncate">Truncate: This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match the overall vertical rhythm.</p>
                  </div>
                </div>
              </div>
            </div>
            
            <!--truncation-->
            <div class="divider"></div>
            <div id="truncation" class="section">
              <h4 class="header">Hover</h4>
              <div class="row">
                <div class="col s12 m4 l3">
                  <p>The <code class=" language-markup">hoverable</code> is a hover class that adds an animation for box shadow as seen below. It can be used on most elements, but meant for use on cards.</p>
                </div>
                <div class="col s12 m8 l9">
                  <div class="card hoverable small">
                    <div class="card-image">
                      <img src="images/sample-1.jpg">
                      <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                      <a href="#">This is a link</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                  <i class="mdi-action-stars"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <i class="mdi-action-search prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search</label>
                    </div>
                </form>
            </div>
            </li>
            <li class="li-hover">
                <ul class="chat-collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                    <div class="collapsible-body recent-activity">
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">just now</a>
                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Yesterday</a>
                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Last Week</a>
                                <p>Jessy Jay open a new store at S.G Road.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                    <div class="collapsible-body sales-repoart">
                        <div class="sales-repoart-list  chat-out-list row">
                            <div class="col s8">Target Salse</div>
                            <div class="col s4"><span id="sales-line-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Payment Due</div>
                            <div class="col s4"><span id="sales-bar-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Delivery</div>
                            <div class="col s4"><span id="sales-line-2"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Progress</div>
                            <div class="col s4"><span id="sales-bar-2"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                    <div class="collapsible-body favorite-associates">
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Eileen Sideways</p>
                                <p class="place">Los Angeles, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Zaham Sindil</p>
                                <p class="place">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Renov Leongal</p>
                                <p class="place">Cebu City, Philippines</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Weno Carasbong</p>
                                <p>Tokyo, Japan</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Nusja Nawancali</p>
                                <p class="place">Bangkok, Thailand</p>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </li>
        </ul>
      </aside>
      <!-- LEFT RIGHT SIDEBAR NAV-->

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
  </footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    
</body>

</html>