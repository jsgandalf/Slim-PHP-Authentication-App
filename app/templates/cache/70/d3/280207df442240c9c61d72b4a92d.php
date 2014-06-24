<?php

/* Base.php */
class __TwigTemplate_70d3280207df442240c9c61d72b4a92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 41
        echo "</head>

<body>
\t\t<!-- start: Header -->
\t<header class=\"navbar\">
\t\t<div class=\"container\">
\t\t\t<button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".sidebar-nav.nav-collapse\">
\t\t\t      <span class=\"icon-bar\"></span>
\t\t\t      <span class=\"icon-bar\"></span>
\t\t\t      <span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a id=\"main-menu-toggle\" class=\"hidden-xs open\"><i class=\"icon-reorder\"></i></a>\t\t
\t\t\t\t<a class=\"navbar-brand col-lg-2 col-sm-1 col-xs-12\" href=\"index.html\"><span>SimpliQ</span></a>
\t\t\t<!-- start: Header Menu -->
\t\t\t<div class=\"nav-no-collapse header-nav\">
\t\t\t\t<ul class=\"nav navbar-nav pull-right\">
\t\t\t\t\t<li class=\"dropdown hidden-xs\">
\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"index.html#\">
\t\t\t\t\t\t\t<i class=\"icon-warning-sign\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu notifications\">
\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
\t\t\t\t\t\t\t\t<span>You have 11 notifications</span>
\t\t\t\t\t\t\t</li>\t
                        \t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon blue\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t<span class=\"message\">New user registration</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">1 min</span> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">7 min</span> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">8 min</span> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">16 min</span> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon blue\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t<span class=\"message\">New user registration</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">36 min</span> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon yellow\"><i class=\"icon-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t<span class=\"message\">2 items sold</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">1 hour</span> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li class=\"warning\">
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon red\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t<span class=\"message\">User deleted account</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">2 hour</span> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li class=\"warning\">
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon red\"><i class=\"icon-shopping-cart\"></i></span>
\t\t\t\t\t\t\t\t\t<span class=\"message\">Transaction was canceled</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">6 hour</span> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon green\"><i class=\"icon-comment-alt\"></i></span>
\t\t\t\t\t\t\t\t\t<span class=\"message\">New comment</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">yesterday</span> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"icon blue\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t\t<span class=\"message\">New user registration</span>
\t\t\t\t\t\t\t\t\t<span class=\"time\">yesterday</span> 
                                </a>
                            </li>
                            <li class=\"dropdown-menu-sub-footer\">
                        \t\t<a>View all notifications</a>
\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- start: Notifications Dropdown -->
\t\t\t\t\t<li class=\"dropdown hidden-xs\">
\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"index.html#\">
\t\t\t\t\t\t\t<i class=\"icon-tasks\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu tasks\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"dropdown-menu-title\">You have 17 tasks in progress</span>
                        \t</li>
\t\t\t\t\t\t\t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">iOS Development</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t</span>
                                    <div class=\"taskProgress progressSlim progressBlue\">80</div> 
                                </a>
                            </li>
                            <li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Android Development</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t</span>
                                    <div class=\"taskProgress progressSlim progressYellow\">47</div> 
                                </a>
                            </li>
                            <li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">Django Project For Google</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t</span>
                                    <div class=\"taskProgress progressSlim progressRed\">32</div> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">SEO for new sites</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t</span>
                                    <div class=\"taskProgress progressSlim progressGreen\">63</div> 
                                </a>
                            </li>
                            <li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t<span class=\"title\">New blog posts</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"percent\"></span>
\t\t\t\t\t\t\t\t\t</span>
                                    <div class=\"taskProgress progressSlim progressPink\">80</div> 
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                        \t\t<a class=\"dropdown-menu-sub-footer\">View all tasks</a>
\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- end: Notifications Dropdown -->
\t\t\t\t\t<!-- start: Message Dropdown -->
\t\t\t\t\t<li class=\"dropdown hidden-xs\">
\t\t\t\t\t\t<a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"index.html#\">
\t\t\t\t\t\t\t<i class=\"icon-envelope\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu messages\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<span class=\"dropdown-menu-title\">You have 9 messages</span>
\t\t\t\t\t\t\t</li>\t
                        \t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"assets/img/avatar.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t    \tŁukasz Holeczek
\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t    \t6 min
\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"message\">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"assets/img/avatar2.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t    \tMegan Abott
\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t    \t56 min
\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"message\">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"assets/img/avatar3.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t    \tKate Ross
\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t    \t3 hours
\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"message\">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"assets/img/avatar4.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t    \tJulie Blank
\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t    \tyesterday
\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"message\">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
                            <li>
                                <a href=\"index.html#\">
\t\t\t\t\t\t\t\t\t<span class=\"avatar\"><img src=\"assets/img/avatar5.jpg\" alt=\"Avatar\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"header\">
\t\t\t\t\t\t\t\t\t\t<span class=\"from\">
\t\t\t\t\t\t\t\t\t    \tJane Sanders
\t\t\t\t\t\t\t\t\t     </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"time\">
\t\t\t\t\t\t\t\t\t    \tJul 25, 2012
\t\t\t\t\t\t\t\t\t    </span>
\t\t\t\t\t\t\t\t\t</span>
                                    <span class=\"message\">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>  
                                </a>
                            </li>
\t\t\t\t\t\t\t<li>
                        \t\t<a class=\"dropdown-menu-sub-footer\">View all messages</a>
\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- end: Message Dropdown -->
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"btn\" href=\"index.html#\">
\t\t\t\t\t\t\t<i class=\"icon-wrench\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- start: User Dropdown -->
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a class=\"btn account dropdown-toggle\" data-toggle=\"dropdown\" href=\"index.html#\">
\t\t\t\t\t\t\t<div class=\"avatar\"><img src=\"assets/img/avatar.jpg\" alt=\"Avatar\"></div>
\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t<span class=\"hello\">Welcome!</span>
\t\t\t\t\t\t\t\t<span class=\"name\">";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li class=\"dropdown-menu-title\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"index.html#\"><i class=\"icon-user\"></i> Profile</a></li>
\t\t\t\t\t\t\t<li><a href=\"index.html#\"><i class=\"icon-cog\"></i> Settings</a></li>
\t\t\t\t\t\t\t<li><a href=\"index.html#\"><i class=\"icon-envelope\"></i> Messages</a></li>
\t\t\t\t\t\t\t<li><a href=\"/logout\"><i class=\"icon-off\"></i> Logout</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<!-- end: User Dropdown -->
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- end: Header Menu -->
\t\t\t
\t\t</div>\t
\t</header>
\t<!-- end: Header -->
    <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t\t
\t\t\t<!-- start: Main Menu -->
\t\t\t<div id=\"sidebar-left\" class=\"col-lg-2 col-sm-1\">
\t\t\t\t
\t\t\t\t<input type=\"text\" class=\"search hidden-sm\" placeholder=\"...\" />
\t\t\t\t
\t\t\t\t<div class=\"nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse\">
\t\t\t\t\t<ul class=\"nav nav-tabs nav-stacked main-menu\">
\t\t\t\t\t\t<li><a href=\"index.html\"><i class=\"icon-bar-chart\"></i><span class=\"hidden-sm\"> Dashboard</span></a></li>\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"index.html#\"><i class=\"icon-eye-open\"></i><span class=\"hidden-sm\"> UI Features</span> <span class=\"label\">3</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"ui-sliders-progress.html\"><i class=\"icon-eye-open\"></i><span class=\"hidden-sm\"> Sliders & Progress</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"ui-nestable-list.html\"><i class=\"icon-eye-open\"></i><span class=\"hidden-sm\"> Nestable Lists</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"ui-elements.html\"><i class=\"icon-eye-open\"></i><span class=\"hidden-sm\"> Elements</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"widgets.html\"><i class=\"icon-dashboard\"></i><span class=\"hidden-sm\"> Widgets</span></a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"index.html#\"><i class=\"icon-folder-close-alt\"></i><span class=\"hidden-sm\"> Example Pages</span> <span class=\"label\">3</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"page-infrastructure.html\"><i class=\"icon-hdd\"></i><span class=\"hidden-sm\"> Infrastructure</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"page-inbox.html\"><i class=\"icon-envelope\"></i><span class=\"hidden-sm\"> Inbox</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"page-todo.html\"><i class=\"icon-tasks\"></i><span class=\"hidden-sm\"> ToDo & Timeline</span></a></li>
\t\t\t\t\t\t\t\t<!-- Profile Page - Cooming Soone
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"page-profile.html\"><i class=\"icon-male\"></i><span class=\"hidden-sm\"> User Profile</span></a></li>
\t\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"index.html#\"><i class=\"icon-edit\"></i><span class=\"hidden-sm\"> Forms</span> <span class=\"label\">3</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"form-elements.html\"><i class=\"icon-edit\"></i><span class=\"hidden-sm\"> Form elements</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"form-wizard.html\"><i class=\"icon-edit\"></i><span class=\"hidden-sm\"> Wizard</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"form-dropzone.html\"><i class=\"icon-edit\"></i><span class=\"hidden-sm\"> Dropzone Upload</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"index.html#\"><i class=\"icon-list-alt\"></i><span class=\"hidden-sm\"> Charts</span> <span class=\"label\">3</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"charts-flot.html\"><i class=\"icon-list-alt\"></i><span class=\"hidden-sm\"> Flot Charts</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"charts-xcharts.html\"><i class=\"icon-list-alt\"></i><span class=\"hidden-sm\"> xCharts</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"charts-others.html\"><i class=\"icon-list-alt\"></i><span class=\"hidden-sm\"> Other</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"typography.html\"><i class=\"icon-font\"></i><span class=\"hidden-sm\"> Typography</span></a></li>
\t\t\t\t\t\t<li><a href=\"gallery.html\"><i class=\"icon-picture\"></i><span class=\"hidden-sm\"> Gallery</span></a></li>
\t\t\t\t\t\t<li><a href=\"table.html\"><i class=\"icon-align-justify\"></i><span class=\"hidden-sm\"> Tables</span></a></li>
\t\t\t\t\t\t<li><a href=\"calendar.html\"><i class=\"icon-calendar\"></i><span class=\"hidden-sm\"> Calendar</span></a></li>
\t\t\t\t\t\t<li><a href=\"file-manager.html\"><i class=\"icon-folder-open\"></i><span class=\"hidden-sm\"> File Manager</span></a></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropmenu\" href=\"index.html#\"><i class=\"icon-star\"></i><span class=\"hidden-sm\"> Icons</span> <span class=\"label\">3</span></a>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"icons-halflings.html\"><i class=\"icon-star\"></i><span class=\"hidden-sm\"> Halflings</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"icons-glyphicons-pro.html\"><i class=\"icon-star\"></i><span class=\"hidden-sm\"> Glyphicons PRO</span></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"submenu\" href=\"icons-font-awesome.html\"><i class=\"icon-star\"></i><span class=\"hidden-sm\"> Font Awesome</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"login.html\"><i class=\"icon-lock\"></i><span class=\"hidden-sm\"> Login Page</span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- end: Main Menu -->
\t\t\t\t\t\t
\t\t\t<!-- start: Content -->
\t\t\t<div id=\"content\" class=\"col-lg-10 col-sm-11\">
\t\t\t\t";
        // line 396
        $this->displayBlock('content', $context, $blocks);
        // line 397
        echo "\t\t\t</div>
\t\t\t<!-- end: Content -->
\t\t\t\t
\t\t</div><!--/row-->\t\t
\t\t
\t</div><!--/container-->
\t
\t\t<div class=\"modal fade\" id=\"myModal\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">Modal title</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<p>Here settings can be configured...</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Save changes</button>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- /.modal-content -->
\t\t\t</div><!-- /.modal-dialog -->
\t\t</div><!-- /.modal -->
\t
\t<div class=\"clearfix\"></div>
\t
\t<footer>
\t";
        // line 425
        $this->displayBlock('footer', $context, $blocks);
        // line 431
        echo "\t</footer>
\t";
        // line 432
        $this->displayBlock('javascript', $context, $blocks);
        // line 490
        echo "</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<!-- start: Meta -->
\t<meta charset=\"utf-8\">
\t<title>SimpliQ - Flat & Responsive Bootstrap Admin Template</title>
\t<meta name=\"description\" content=\"SimpliQ - Flat & Responsive Bootstrap Admin Template.\">
\t<meta name=\"author\" content=\"Łukasz Holeczek\">
\t<meta name=\"keyword\" content=\"SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
\t<!-- end: Meta -->
\t
\t<!-- start: Mobile Specific -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- end: Mobile Specific -->
\t
\t<!-- start: CSS -->
\t<link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link href=\"assets/css/style.min.css\" rel=\"stylesheet\">
\t<link href=\"assets/css/retina.min.css\" rel=\"stylesheet\">
\t<!-- end: CSS -->
\t

\t<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
\t<!--[if lt IE 9]>
\t
\t  \t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<script src=\"assets/js/respond.min.js\"></script>
\t\t<script src=\"assets/css/ie6-8.css\"></script>
\t\t
\t<![endif]-->
\t
\t<!-- start: Favicon and Touch Icons -->
\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"assets/ico/apple-touch-icon-144-precomposed.png\">
\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"assets/ico/apple-touch-icon-114-precomposed.png\">
\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"assets/ico/apple-touch-icon-72-precomposed.png\">
\t<link rel=\"apple-touch-icon-precomposed\" href=\"http://localhost:8888/bootstrap/simpliq2/ico/apple-touch-icon-57-precomposed.png\">
\t<link rel=\"shortcut icon\" href=\"http://localhost:8888/bootstrap/simpliq2/ico/favicon.png\">
\t<!-- end: Favicon and Touch Icons -->\t
\t";
    }

    // line 396
    public function block_content($context, array $blocks = array())
    {
    }

    // line 425
    public function block_footer($context, array $blocks = array())
    {
        // line 426
        echo "\t\t<p>
\t\t\t<span style=\"text-align:left;float:left\">&copy; 2013 <a href=\"http://bootstrapmaster.com\" alt=\"Bootstrap Themes\">creativeLabs</a></span>
\t\t\t<span class=\"hidden-phone\" style=\"text-align:right;float:right\">Powered by: <a href=\"http://admintemplates.co\" alt=\"Bootstrap Admin Templates\">SimpliQ</a></span>
\t\t</p>
    ";
    }

    // line 432
    public function block_javascript($context, array $blocks = array())
    {
        // line 433
        echo "\t<!-- start: JavaScript-->
\t<!--[if !IE]>-->

\t\t\t<script src=\"assets/js/jquery-2.0.3.min.js\"></script>

\t<!--<![endif]-->

\t<!--[if IE]>
\t
\t\t<script src=\"assets/js/jquery-1.10.2.min.js\"></script>
\t
\t<![endif]-->

\t<!--[if !IE]>-->

\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='assets/js/jquery-2.0.3.min.js'>\"+\"<\"+\"/script>\");
\t\t\t</script>

\t<!--<![endif]-->

\t<!--[if IE]>
\t
\t\t<script type=\"text/javascript\">
\t \twindow.jQuery || document.write(\"<script src='assets/js/jquery-1.10.2.min.js'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t
\t<![endif]-->
\t<script src=\"assets/js/jquery-migrate-1.2.1.min.js\"></script>
\t<script src=\"assets/js/bootstrap.min.js\"></script>
\t
\t\t
\t
\t
\t<!-- page scripts -->
\t<script src=\"assets/js/jquery-ui-1.10.3.custom.min.js\"></script>
\t<script src=\"assets/js/jquery.ui.touch-punch.min.js\"></script>
\t<script src=\"assets/js/jquery.sparkline.min.js\"></script>
\t<script src=\"assets/js/fullcalendar.min.js\"></script>
\t<!--[if lte IE 8]><script language=\"javascript\" type=\"text/javascript\" src=\"assets/js/excanvas.min.js\"></script><![endif]-->
\t<script src=\"assets/js/jquery.flot.min.js\"></script>
\t<script src=\"assets/js/jquery.flot.pie.min.js\"></script>
\t<script src=\"assets/js/jquery.flot.stack.min.js\"></script>
\t<script src=\"assets/js/jquery.flot.resize.min.js\"></script>
\t<script src=\"assets/js/jquery.flot.time.min.js\"></script>
\t<script src=\"assets/js/jquery.autosize.min.js\"></script>
\t<script src=\"assets/js/jquery.placeholder.min.js\"></script>
\t
\t<!-- theme scripts -->
\t<script src=\"assets/js/custom.min.js\"></script>
\t<script src=\"assets/js/core.min.js\"></script>
\t
\t<!-- inline scripts related to this page -->
\t<script src=\"assets/js/pages/index.js\"></script>
\t
\t<!-- end: JavaScript-->
    ";
    }

    public function getTemplateName()
    {
        return "Base.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 433,  493 => 432,  485 => 426,  482 => 425,  477 => 396,  438 => 5,  435 => 4,  429 => 490,  427 => 432,  424 => 431,  422 => 425,  392 => 397,  390 => 396,  297 => 306,  30 => 41,  23 => 1,  31 => 4,  28 => 4,);
    }
}
