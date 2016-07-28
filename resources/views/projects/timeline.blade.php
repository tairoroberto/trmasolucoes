<!DOCTYPE html>
<html lang="en-US">
<head><!--[if IE]><![endif]-->
    <link rel="dns-prefetch" href="http://d3ijh37r9qzozj.cloudfront.net"/>
    <link rel="stylesheet"
          href="//fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic&subset=latin,latin-ext"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width"/>
    <title>TRMA | ACOMPANHAMENTO DE PROJETOS</title>

    <style type="text/css">img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important
        }</style>
    <link rel='stylesheet' id='contact-form-7-css'
          href='{{asset('timeline/css/styles.css?ver=4.4.2')}}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='theme-style-css'
          href='{{asset('timeline/css/style.css')}}' type='text/css'
          media='all'/>
    <style id='theme-style-inline-css' type='text/css'>a, a:visited, a:hover,
        .comment-action,
        i {
            color: #00BCD4
        }

        input[type='submit'],
        input[type='button'],
        .paging-navigation li a:hover,
        .hentry .entry-header:after,
        .hentry .entry-footer:before,
        .hentry .hentry-box > .entry-quote,
        .hentry .entry-link,
        .hentry .entry-status,
        #site-header #logo,
        .hentry .entry-date,
        .paging-navigation:after,
        #timeline > li .hentry:before {
            background: #00BCD4
        }

        .entry-content a:hover,
        .entry-content blockquote,
        p.pullquote-left,
        p.pullquote-right,
        #social-icons li a:hover, #nav-primary > ul > li:hover > a {
            border-color: #00BCD4
        }

        #social-icons li a:hover,
        #nav-primary > ul > li:hover > a,
        #nav-primary ul ul li a:hover {
            color: #00BCD4
        }

        .hentry .entry-thumb-caption, .gallery .gallery-item-caption {
            background: #00BCD4;
            background: rgba(0, 188, 212, 0.8);
        }</style>

    <link rel='stylesheet' id='font-awesome-css' href='{{asset('timeline/fonts/font-awesome.min.css')}}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='magnific-popup-css' href='{{asset('timeline/css/magnific-popup.css')}}' type='text/css'
          media='all'/>

    <script type="text/javascript">(function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', '__gaTracker');
        __gaTracker('create', 'UA-587119-32', 'auto');
        __gaTracker('set', 'forceSSL', true);
        __gaTracker('require', 'displayfeatures');
        __gaTracker('send', 'pageview');</script>
    <script type='text/javascript'
            src='{{asset('timeline/js/jquery.js')}}'></script>
    <script type="text/javascript">!function () {
            var analytics = window.analytics = window.analytics || [];
            if (analytics.invoked)window.console && console.error && console.error("Segment snippet included twice."); else {
                analytics.invoked = !0;
                analytics.methods = ["trackSubmit", "trackClick", "trackLink", "trackForm", "pageview", "identify", "group", "track", "ready", "alias", "page", "once", "off", "on"];
                analytics.factory = function (t) {
                    return function () {
                        var e = Array.prototype.slice.call(arguments);
                        e.unshift(t);
                        analytics.push(e);
                        return analytics
                    }
                };
                for (var t = 0; t < analytics.methods.length; t++) {
                    var e = analytics.methods[t];
                    analytics[e] = analytics.factory(e)
                }
                analytics.load = function (t) {
                    var e = document.createElement("script");
                    e.type = "text/javascript";
                    e.async = !0;
                    e.src = ("https:" === document.location.protocol ? "https://" : "http://") + "cdn.segment.com/analytics.js/v1/" + t + "/analytics.min.js";
                    var n = document.getElementsByTagName("script")[0];
                    n.parentNode.insertBefore(e, n)
                };
                analytics.SNIPPET_VERSION = "3.0.0";
                window.analytics.load("g7UaUndbjuqgAmemXtRF7deHWL4HH2oI");
                window.analytics.page();
            }
        }();</script>
    <meta name="generator" content="WordPress 4.5.3"/>
    <!--[if lt IE 9]>
    <script src="{{asset('timeline/js/html5.js')}}"></script><![endif]-->
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script src="{{asset('timeline/js/selectivizr-min.js')}}"></script>
    <![endif]-->
    <script data-no-minify="1" data-cfasync="false">(function (w, d) {
            function a() {
                var b = d.createElement("script");
                b.async = !0;
                b.src = "{{asset('timeline/js/lazyload.1.0.5.min.js')}}";
                var a = d.getElementsByTagName("script")[0];
                a.parentNode.insertBefore(b, a)
            }

            w.attachEvent ? w.attachEvent("onload", a) : w.addEventListener("load", a, !1)
        })(window, document);</script>
</head>
<body class="home blog clearfix">

<?php
    $user = \Trma\User::where('email', '=', $project->email_client)->get()->first();
    $taskimages = \Trma\ProjecTaskImage::where('project_id', '=', $project->id)->get();
?>

<header id="site-header" class="clearfix" role="banner">
    <div id="logo">
        <div class="container">
            <a title="TRMA - Soluções Web e Mobile" href="{{route('project.index')}}">
                <img alt="TRMA - Soluções Web e Mobile" src="{{asset('images/logo_colorfy_white_2.png')}}" width="200px"/>
            </a></div>
    </div>
    <nav id="nav-primary-mobile" class="clearfix"><a class="menu-toggle" href="#"><i class="fa fa-bars"></i>Menu</a>
        <ul id="mobile-menu" class="clearfix">
            <li id="menu-item-104" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-104">
                <a href="{{route('project.index')}}">Home</a>
            </li>
            <li id="menu-item-113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113">
                <a href="{{route('project.index')}}">Listar Projetos</a>
            </li>
            <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71">
                <a target="_blank" href="http://trmasolucoes.com.br/trma/#contact">Contato</a>
            </li>
            <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71">
                <a href="{{ url('/sair') }}">Logout</a>
            </li>
        </ul>
    </nav>
    <div id="header-bottom" role="navigation" class="clearfix">
        <div class="container">
            <nav id="nav-primary">
                <ul>
                    <li><a href="#"><i class="fa fa-reorder"></i>Menu</a>
                        <ul id="menu-primary-nav" class="nav clearfix">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-104">
                                <a href="{{route('project.index')}}">Home</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113">
                                <a href="{{route('project.index')}}">Listar Projetos</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71">
                                <a target="_blank" href="http://trmasolucoes.com.br/trma/#contact">Contato</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71">
                                <a href="{{ url('/sair') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <ul id="social-icons" class="clearfix">
                <li class="twitter">
                    <a href="https://twitter.com/ContatoTrma" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="facebook">
                    <a href="https://www.facebook.com/TRMA-Solu%C3%A7%C3%B5es-Web-e-Mobile-1639974946249481/" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
            </ul>
            <img width="95" height="95" class="avatar" src="{{($project->image && File::exists($project->image)) ? asset($project->image) : asset('images/avatar.jpg')}}" alt=""></div>
    </div>
</header>

<div id="site-container" class="clearfix">
    <section id="primary" class="sidebar-off clearfix">
        <div id="content" role="main">
            <ul id="timeline" class="clearfix">

                <li class="animated fadeInUp">
                    <article id="post-34" class="post-34 post type-post status-publish format-quote hentry category-category-trio tag-post-format tag-quotes tag-wordpress-2 post_format-post-format-quote clearfix">
                        <span class="entry-date">
                            <span class="entry-meta-date">
                                {{$project->created_at}}
                            </span>
                        </span>
                        <div class="hentry-box">
                            <blockquote class="entry-quote">
                                <p>Criação do projeto
                                    <strong>{{$project->name}}</strong>
                                </p>
                                <cite>TRMA Soluções Web e Mobile</cite>
                            </blockquote>
                        </div>
                    </article>
                </li>

                @foreach($taskimages as $taskimage)

                    {{-- Mostra como galeria  --}}
                    @if($taskimage->type_task == 'galery')

                        <li class="animated fadeInUp">
                            <article id="post-51"
                                     class="post-51 post type-post status-publish format-gallery hentry category-category-uno category-uncategorized tag-gallery tag-image tag-photo post_format-post-format-gallery clearfix">
                        <span class="entry-date">
                            <span class="entry-meta-date">
                                <time datetime="2013-07-12T19:58:03+00:00">3 years ago</time>
                            </span>
                        </span>
                                <div class="hentry-box">
                                    <div class="entry-gallery">
                                        <ul class="clearfix">
                                            <li>
                                                <figure class="entry-thumb">
                                                    <img src="{{asset('timeline/image/MG_40018_2125579117_l-800x532.jpg')}}" width="800" height="532" alt=""/>
                                                    <figcaption class="entry-thumb-caption">
                                                        <div class="caption-content">
                                                            <a class="caption-link" href="{{asset('timeline/image/MG_40018_2125579117_l-800x532.jpg')}}" rel="nofollow" title="Gallery Photo Caption.">
                                                                <i class="fa fa-search" style="color: white;"></i>
                                                            </a>
                                                            <h3 class="caption-title">Gallery Photo Caption.</h3>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure class="entry-thumb">
                                                    <img src="{{asset('timeline/image/Flight-91025_3645022109_l-800x532.jpg')}}" width="800" height="532" alt=""/>
                                                    <figcaption class="entry-thumb-caption">
                                                        <div class="caption-content">
                                                            <a class="caption-link" href="{{asset('timeline/image/Flight-91025_3645022109_l.jpg')}}" rel="nofollow" title="Fluttered.">
                                                                <i class="fa fa-search" style="color: white;"></i>
                                                            </a>
                                                            <h3 class="caption-title">Fluttered.</h3>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure class="entry-thumb">
                                                    <img src="{{asset('timeline/image/IMG_19241_426386997_l.jpg')}}" width="800" height="532" alt=""/>
                                                    <figcaption class="entry-thumb-caption">
                                                        <div class="caption-content">
                                                            <a class="caption-link" href="{{asset('timeline/image/IMG_19241_426386997_l.jpg')}}" rel="nofollow" title="Room with a view.">
                                                                <i class="fa fa-search" style="color: white;"></i>
                                                            </a>
                                                            <h3 class="caption-title">Room with a view.</h3>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure class="entry-thumb">
                                                    <img src="{{asset('timeline/image/Silent-Night-71772_3137728868_l.jpg')}}" width="800" height="532" alt=""/>
                                                    <figcaption class="entry-thumb-caption">
                                                        <div class="caption-content">
                                                            <a class="caption-link" href="{{asset('timeline/image/Silent-Night-71772_3137728868_l.jpg')}}" rel="nofollow" title="">
                                                                <i class="fa fa-search" style="color: white;"></i>
                                                            </a>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                            <li>
                                                <figure class="entry-thumb">
                                                    <img src="{{asset('timeline/image/Silent-Night-71772_3137728868_l.jpg')}}" width="800" height="533" alt=""/>
                                                    <figcaption class="entry-thumb-caption">
                                                        <div class="caption-content">
                                                            <a class="caption-link" href="{{asset('timeline/image/Silent-Night-71772_3137728868_l.jpg')}}" rel="nofollow" title="">
                                                                <i class="fa fa-search" style="color: white;"></i>
                                                            </a>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </li>

                        {{-- Mostra como imagem unica --}}
                        @elseif($taskimage->type_task == 'only_image')
                            <li class="animated fadeInUp">
                                <article id="post-34" class="post-34 post type-post status-publish format-quote hentry category-category-trio tag-post-format tag-quotes tag-wordpress-2 post_format-post-format-quote clearfix">
                            <span class="entry-date">
                                <span class="entry-meta-date">
                                    <time datetime="2013-07-12T19:41:32+00:00">3 years ago</time>
                                </span>
                            </span>
                                    <div class="hentry-box">
                                        <blockquote class="entry-quote">
                                            <p>A hero is an ordinary individual who finds the strength
                                                to persevere and <strong>endure </strong>in spite of overwhelming obstacles.
                                            </p>
                                            <cite>Christopher Reeve</cite>
                                        </blockquote>
                                    </div>
                                    <footer class="entry-footer">
                                        <ul>
                                            <li>
                                                <i class="fa fa-comment"></i>
                                                <a href="http://demo.herothemes.com/scopic/quote-post-format/#respond">
                                                    Add Comment
                                                </a>
                                            </li>
                                        </ul>
                                    </footer>
                                </article>
                            </li>

                        {{-- Mostra como texto --}}
                        @else

                            <li class="animated fadeInUp">
                                <article id="post-78" class="post-78 post type-post status-publish format-quote has-post-thumbnail hentry category-category-trio tag-post-format tag-quotes post_format-post-format-quote has_thumb clearfix">
                            <span class="entry-date">
                                <span class="entry-meta-date">
                                    <time datetime="2013-07-13T11:20:34+00:00">3 years ago</time>
                                </span>
                            </span>
                                    <div class="hentry-box">
                                        <figure class="entry-quote-image">
                                            <img width="800" height="533" src="{{asset('timeline/image/MG_40018_2125579117_l-800x532.jpg')}}"
                                                 class="attachment-post size-post wp-post-image"
                                                 alt="Bay Bridge (#102224)_4350170444_l"
                                                 srcset="{{asset('timeline/image/MG_40018_2125579117_l-800x532.jpg')}} 800w, {{asset('timeline/image/MG_40018_2125579117_l-800x532.jpg')}} 300w, {{asset('timeline/image/MG_40018_2125579117_l-800x532.jpg')}} 1024w"
                                                 sizes="(max-width: 800px) 100vw, 800px"/>
                                            <figcaption class="entry-quote-caption">
                                                <div class="caption-content">
                                                    <blockquote class="entry-quote">
                                                        <p>Hard times don't create heroes. It is during
                                                            the hard times when the 'hero' within us is revealed.
                                                        </p>
                                                        <cite>
                                                            Bob Riley
                                                        </cite>
                                                    </blockquote>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </article>
                            </li>
                    @endif
                @endforeach

            </ul>
        </div>
    </section>
</div>

<footer id="site-footer" class="clearfix">
    <div id="footer-bottom" class="clearfix">
        <div class="container">
            <small id="copyright" role="contentinfo">©TRMA - 2016 - Todos os direitos reservados.</small>
        </div>
    </div>
</footer>
<script type="text/javascript">analytics.track("Viewed Home Page", {"noninteraction": true}, {"library": "analytics-wordpress"});</script>
<span id="bruteprotect_uptime_check_string" style="display:none;">7ads6x98y</span>

<script type='text/javascript'
        src='{{asset('timeline/js/functions.js')}}'></script>
<script type='text/javascript'
        src='{{asset('timeline/js/jquery.magnific-popup.min.js')}}'></script>
<script type='text/javascript'
        src='{{asset('timeline/js/wp-embed.min.js')}}'></script>
</body>
</html>
<!-- This website is like a Rocket, isn't it ? Performance optimized by WP Rocket. Learn more: http://wp-rocket.me - Debug: cached@1469057741 -->