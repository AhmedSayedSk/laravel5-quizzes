<!DOCTYPE html>
<html lang="en">
 	<head>
	  	<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="csrf-token" content="{!! csrf_token() !!}">
	    <meta name="author" content="Development: Ahmed Sayed Sk">
	    <meta name="description" content="pxia2" />
	    <link rel="icon" href="{{asset('favicon.ico')}}">
	    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
	    <title>Admin panel - @yield('title')</title>

	    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/icheck/skins/flat/_all.css') }}">
	    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/custom.css") }}">
	    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
	    <!--[if lt IE 9]><script type="text/javascript" src="/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		    <script type="text/javascript" src="/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script type="text/javascript" src="/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  	</head>
  	<body>
  		<!-- APP WRAPPER -->
        <div class="app">

            <!-- START APP CONTAINER -->
            <div class="app-container">
                <!-- START SIDEBAR -->
                <div class="app-sidebar app-navigation app-navigation-fixed scroll app-navigation-style-default app-navigation-open-hover dir-left" data-type="close-other">
                    <a href="index.html" class="app-navigation-logo">
                        Boooya - Revolution Admin Template
                        <button class="app-navigation-logo-button mobile-hidden" data-sidepanel-toggle=".app-sidepanel"><span class="icon-alarm"></span> <span class="app-navigation-logo-button-alert">7</span></button>
                    </a>

                    <nav>
                        <ul>
                            <li class="title">DEMONSTRATION</li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Ds</span> Dashboards<span class="label label-success label-bordered label-ghost">new</span></a>
                                <ul>
                                    <li>
                                        <a href="index.html"><span class="nav-icon-hexa">De</span> Default</a>
                                    </li>
                                    <li>
                                        <a href="pages-dashboard-ecommerce.html"><span class="nav-icon-hexa">Ec</span> E-commerce <span class="label label-success label-bordered label-ghost">new</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Pg</span> Pages <span class="label label-success label-bordered label-ghost">new</span></a>
                                <ul>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Re</span> Real-estate <span class="label label-success label-bordered label-ghost">new</span></a>
                                        <ul>
                                            <li><a href="pages-real-estate-search.html"><span class="nav-icon-hexa">Sr</span> Search Result</a></li>
                                            <li><a href="pages-real-estate-map.html"><span class="nav-icon-hexa">Mp</span> Map</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Ba</span> Bank Application</a>
                                        <ul>
                                            <li><a href="pages-bank-main.html"><span class="nav-icon-hexa">Mn</span> Main</a></li>
                                            <li><a href="pages-bank-cards.html"><span class="nav-icon-hexa">Cs</span> My Cards</a></li>
                                            <li><a href="pages-bank-deposits.html"><span class="nav-icon-hexa">Dp</span> Deposits</a></li>
                                            <li><a href="pages-bank-activity.html"><span class="nav-icon-hexa">Ac</span> Activity</a></li>
                                            <li><a href="pages-bank-settings.html"><span class="nav-icon-hexa">St</span> Settings</a></li>
                                            <li><a href="pages-bank-security.html"><span class="nav-icon-hexa">Sc</span> Security</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Cs</span> Call Service</a>
                                        <ul>
                                            <li><a href="pages-call-service-daily.html"><span class="nav-icon-hexa">Ds</span> Daily Statistics</a></li>
                                            <li><a href="pages-call-service-process.html"><span class="nav-icon-hexa">Pw</span> Process Window</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Pt</span> Payment</a>
                                        <ul>
                                            <li><a href="pages-payment-invoice.html"><span class="nav-icon-hexa">Pi</span> Invoice</a></li>
                                            <li><a href="pages-payment-pricing.html"><span class="nav-icon-hexa">Pt</span> Pricing Tables</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Bp</span> Blog Pages</a>
                                        <ul>
                                            <li><a href="pages-blog-main.html"><span class="nav-icon-hexa">Ma</span> Main (Variant 1)</a></li>
                                            <li><a href="pages-blog-main-2.html"><span class="nav-icon-hexa">Mn</span> Main (Variant 2)</a></li>
                                            <li><a href="pages-blog-category.html"><span class="nav-icon-hexa">Ct</span> Category (Right Sidebar)</a></li>
                                            <li><a href="pages-blog-category-2.html"><span class="nav-icon-hexa">Cr</span> Category (Left Sidebar)</a></li>
                                            <li><a href="pages-blog-single.html"><span class="nav-icon-hexa">Sn</span> Single</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Pf</span> User Profiles</a>
                                        <ul>
                                            <li><a href="pages-profile-social.html"><span class="nav-icon-hexa">Sp</span> Social Profile</a></li>
                                            <li><a href="pages-profile-card.html"><span class="nav-icon-hexa">Pc</span> Profile Card</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Em</span> Email</a>
                                        <ul>
                                            <li><a href="pages-email-inbox.html"><span class="nav-icon-hexa">Ib</span> Inbox</a></li>
                                            <li><a href="pages-email-message.html"><span class="nav-icon-hexa">Ms</span> Message</a></li>
                                            <li><a href="pages-email-compose.html"><span class="nav-icon-hexa">Cp</span> Compose</a></li>
                                            <li><a href="pages-email-templates.html"><span class="nav-icon-hexa">Tp</span> Templates</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Ms</span> Messages</a>
                                        <ul>
                                            <li><a href="pages-messages-chat.html"><span class="nav-icon-hexa">Ct</span> Chat</a></li>
                                            <li><a href="pages-messages-list.html"><span class="nav-icon-hexa">Ml</span> Messages List</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pages-faq.html"><span class="nav-icon-hexa">Fq</span> FAQ</a></li>
                                    <li><a href="pages-gallery.html"><span class="nav-icon-hexa">Ga</span> Gallery</a></li>
                                    <li><a href="pages-search.html"><span class="nav-icon-hexa">Sr</span> Search Result</a></li>
                                    <li><a href="pages-contact-us.html"><span class="nav-icon-hexa">Cu</span> Contact Us<span class="label label-success label-bordered label-ghost">new</span></a></li>
                                    <li><a href="pages-contact-list.html"><span class="nav-icon-hexa">Cl</span> Contact List</a></li>
                                    <li><a href="pages-calendar.html"><span class="nav-icon-hexa">Cr</span> Calendar</a></li>
                                    <li><a href="pages-404.html"><span class="nav-icon-hexa">Er</span> Error 404</a></li>
                                    <li><a href="pages-help.html"><span class="nav-icon-hexa">Hp</span> Help</a></li>
                                    <li><a href="pages-lock-screen.html"><span class="nav-icon-hexa">Ls</span> Lock Screen</a></li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Si</span> Log In / Sign In</a>
                                        <ul>
                                            <li><a href="pages-login.html"><span class="nav-icon-hexa">Li</span> Log In</a></li>
                                            <li><a href="pages-login-bg.html"><span class="nav-icon-hexa">Lb</span> Log In (Background)</a></li>
                                            <li><a href="pages-signin.html"><span class="nav-icon-hexa">Si</span> Sign In</a></li>
                                            <li><a href="pages-signin-bg.html"><span class="nav-icon-hexa">Sb</span> Sign In (Background)</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="title">FORMS</li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Fe</span> Form Elements</a>
                                <ul>
                                    <li><a href="forms-elements-basic.html"><span class="nav-icon-hexa">Be</span> Basic Elements</a></li>
                                    <li><a href="forms-elements-checkbox-radio.html"><span class="nav-icon-hexa">Cr</span> Checkbox, Radio & Switch</a></li>
                                    <li><a href="forms-elements-select-datepicker.html"><span class="nav-icon-hexa">Sd</span> Select & Datepicker</a></li>
                                    <li><a href="forms-elements-range-slider.html"><span class="nav-icon-hexa">Rs</span> Range Slider</a></li>
                                    <li><a href="forms-editable.html"><span class="nav-icon-hexa">Ed</span> Form Editable</a></li>
                                    <li><a href="forms-elements-valudation-states.html"><span class="nav-icon-hexa">Vs</span> Validation States</a></li>
                                    <li><a href="forms-elements-input-groups.html"><span class="nav-icon-hexa">Ig</span> Input Group</a></li>
                                    <li><a href="forms-elements-file-handling.html"><span class="nav-icon-hexa">Fh</span> File Handling</a></li>
                                    <li><a href="forms-elements-other.html"><span class="nav-icon-hexa">Ot</span> Other</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Vd</span> Validation</a>
                                <ul>
                                    <li><a href="forms-valudation-engine.html"><span class="nav-icon-hexa">Ve</span> Validation Engine</a></li>
                                    <li><a href="forms-valudation-helpers.html"><span class="nav-icon-hexa">Mh</span> Masked Helpers</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Ma</span> Miscellaneous</a>
                                 <ul>
                                    <li><a href="forms-wysiwyg-editors.html"><span class="nav-icon-hexa">We</span> WYSIWYG Editors</a></li>
                                    <li><a href="forms-code-preview.html"><span class="nav-icon-hexa">Cp</span> Code Preview</a></li>
                                    <li><a href="forms-wizard.html"><span class="nav-icon-hexa">Fw</span> Form Wizard</a></li>
                                </ul>
                            </li>

                            <li class="title">COMPONENTS</li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Ue</span> UI Elements<span class="label label-success label-bordered label-ghost">new</span></a>
                                <ul>
                                    <li><a href="components-blocks-panels.html"><span class="nav-icon-hexa">Bp</span> Blocks & Panles</a></li>
                                    <li><a href="components-widgets.html"><span class="nav-icon-hexa">Wi</span> Widgets & Informers</a></li>
                                    <li><a href="components-tabs-accordion.html"><span class="nav-icon-hexa">Ta</span> Tabs & Accordions</a></li>
                                    <li><a href="components-alerts-notifications.html"><span class="nav-icon-hexa">An</span> Alerts & Notifications</a></li>
                                    <li><a href="components-modals-popups.html"><span class="nav-icon-hexa">Mp</span> Modals & Popups</a></li>
                                    <li><a href="components-dropdowns.html"><span class="nav-icon-hexa">Dd</span> Dropdowns</a></li>
                                    <li><a href="components-buttons.html"><span class="nav-icon-hexa">Bt</span> Buttons</a></li>
                                    <li><a href="components-progressbar.html"><span class="nav-icon-hexa">Pb</span> Progress Bars</a></li>
                                    <li><a href="components-pagination.html"><span class="nav-icon-hexa">Pt</span> Pagination</a></li>
                                    <li><a href="components-spinners.html"><span class="nav-icon-hexa">Sp</span> Spinners</a></li>
                                    <li><a href="components-tour.html"><span class="nav-icon-hexa">To</span> Tour</a></li>
                                    <li><a href="components-timeline.html"><span class="nav-icon-hexa">To</span> Timeline <span class="label label-success label-bordered label-ghost">new</span></a></li>
                                    <li><a href="components-help-classes.html"><span class="nav-icon-hexa">Hc</span> Help Classes</a></li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Lt</span> Lists</a>
                                        <ul>
                                            <li><a href="components-lists.html"><span class="nav-icon-hexa">Bl</span> Basic Lists</a></li>
                                            <li><a href="components-user-contacts.html"><span class="nav-icon-hexa">Uc</span> User & Contacts</a></li>
                                            <li><a href="components-tiles.html"><span class="nav-icon-hexa">Te</span> Tiles</a></li>
                                            <li><a href="components-news-info.html"><span class="nav-icon-hexa">Ni</span> News & Info</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Tg</span> Typography</a>
                                        <ul>
                                            <li><a href="components-typography.html"><span class="nav-icon-hexa">Tp</span> Typography</a></li>
                                            <li><a href="components-labels-badges.html"><span class="nav-icon-hexa">Lb</span> Labels & Badges</a></li>
                                            <li><a href="components-text-heading.html"><span class="nav-icon-hexa">Th</span> Text Heading</a></li>
                                            <li><a href="components-heading.html"><span class="nav-icon-hexa">Pb</span> Page & Block Heading</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Fe</span> Features</a>
                                <ul>
                                    <li><a href="components-features-gallery.html"><span class="nav-icon-hexa">Cg</span> Compact Gallery</a></li>
                                    <li><a href="components-features-tips.html"><span class="nav-icon-hexa">Tp</span> Tips</a></li>
                                    <li><a href="components-features-loading.html"><span class="nav-icon-hexa">Ld</span> Loading</a></li>
                                    <li><a href="components-features-statusbar.html"><span class="nav-icon-hexa">Sb</span> Status Bar</a></li>
                                    <li><a href="components-features-preview.html"><span class="nav-icon-hexa">Pv</span> Preview</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Ic</span> Icons</a>
                                <ul>
                                    <li><a href="components-icons-fontawesome.html"><span class="nav-icon-hexa">Fa</span> Font Awesome</a></li>
                                    <li><a href="components-icons-linearicons.html"><span class="nav-icon-hexa">Li</span> Linearicons</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Tb</span> Tables</a>
                                <ul>
                                    <li><a href="components-tables-default.html"><span class="nav-icon-hexa">Df</span> Default</a></li>
                                    <li><a href="components-tables-sortable.html"><span class="nav-icon-hexa">Sa</span> Sortable</a></li>
                                    <li><a href="components-tables-export.html"><span class="nav-icon-hexa">Et</span> Export Tables</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Ch</span> Charts</a>
                                <ul>
                                    <li><a href="components-charts-chartjs.html"><span class="nav-icon-hexa">Cj</span> Chart.js</a></li>
                                    <li><a href="components-charts-morris.html"><span class="nav-icon-hexa">Mc</span> Morris Charts</a></li>
                                    <li><a href="components-charts-rickshaw.html"><span class="nav-icon-hexa">Rc</span> Rickshaw Charts</a></li>
                                    <li><a href="components-charts-other.html"><span class="nav-icon-hexa">Ot</span> Other</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Mp</span> Maps</a>
                                <ul>
                                    <li><a href="components-maps-jvectormap.html"><span class="nav-icon-hexa">Jm</span> jVectorMap</a></li>
                                    <li><a href="components-maps-google.html"><span class="nav-icon-hexa">Gm</span> Google Maps</a></li>
                                </ul>
                            </li>

                            <li class="title">LAYOUTS COMPONENTS AND OPTIONS</li>
                            <li><a href="layouts-examples.html"><span class="nav-icon-hexa">Al</span> App Layouts<span class="label label-success label-bordered label-ghost">new</span></a></li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Lc</span> Layout Components <span class="label label-success label-bordered label-ghost">new</span></a>
                                <ul>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Hd</span> Headers</a>
                                        <ul>
                                            <li><a href="layouts-header.html"><span class="nav-icon-hexa">Sm</span> Simple</a></li>
                                            <li><a href="layouts-header-inside.html"><span class="nav-icon-hexa">Ic</span> Insde Content</a></li>
                                            <li><a href="layouts-header-fixed.html"><span class="nav-icon-hexa">Fh</span> Fixed Header</a></li>
                                            <li><a href="layouts-header-title.html"><span class="nav-icon-hexa">Wt</span> With Title</a></li>
                                            <li><a href="layouts-header-navigation.html"><span class="nav-icon-hexa">Sn</span> Simple Navigation</a></li>
                                            <li><a href="layouts-header-navigation-custom.html"><span class="nav-icon-hexa">Sh</span> Simple Navigation (Hover Item)</a></li>
                                            <li><a href="layouts-header-navigation-extended.html"><span class="nav-icon-hexa">En</span> Extended Navigation</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Sb</span> Sidebars</a>
                                        <ul>
                                            <li><a href="layouts-sidebar-left.html"><span class="nav-icon-hexa">Ls</span> Left Sidebar</a></li>
                                            <li><a href="layouts-sidebar-right.html"><span class="nav-icon-hexa">Rs</span> Right Sidebar</a></li>
                                            <li><a href="layouts-sidebar-left-right.html"><span class="nav-icon-hexa">Lr</span> Left & Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Nv</span> Navigation<span class="label label-success label-bordered label-ghost">new</span></a>
                                        <ul>
                                            <li><a href="layouts-navigation-default.html"><span class="nav-icon-hexa">Df</span> Default</a></li>
                                            <li><a href="layouts-navigation-default-fixed.html"><span class="nav-icon-hexa">Fx</span> Default Fixed</a></li>
                                            <li><a href="layouts-navigation-close-other.html"><span class="nav-icon-hexa">Co</span> Close Other</a></li>
                                            <li><a href="layouts-navigation-hidden.html"><span class="nav-icon-hexa">Hd</span> Hidden</a></li>
                                            <li><a href="layouts-navigation-minimized.html"><span class="nav-icon-hexa">Mz</span> Minimized</a></li>
                                            <li><a href="layouts-navigation-open-hover.html"><span class="nav-icon-hexa">Oh</span> Open On Hover</a></li>
                                            <li><a href="layouts-navigation-custom.html"><span class="nav-icon-hexa">Cd</span> Custom Design <span class="label label-success label-bordered label-ghost">new</span></a></li>
                                            <li><a href="layouts-navigation-light.html"><span class="nav-icon-hexa">Ls</span> Light Style</a></li>
                                            <li><a href="layouts-navigation-mobile.html"><span class="nav-icon-hexa">Ms</span> Mobile Style (Simple)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Cn</span> Content<span class="label label-success label-bordered label-ghost">new</span></a>
                                        <ul>
                                            <li><a href="layouts-content-resizable.html"><span class="nav-icon-hexa">Rz</span> Resizable</a></li>
                                            <li><a href="layouts-content-tabbed.html"><span class="nav-icon-hexa">Tb</span> Tabbed Content</a></li>
                                            <li><a href="layouts-content-tabbed-controls.html"><span class="nav-icon-hexa">Tc</span> Tabbed Content (Controls)</a></li>
                                            <li><a href="layouts-content-separated.html"><span class="nav-icon-hexa">Sc</span> Separated Content</a></li>
                                            <li><a href="layouts-content-wrapped.html"><span class="nav-icon-hexa">Wc</span> Wrapped Content <span class="label label-success label-bordered label-ghost">new</span></a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Sp</span> Sidepanels</a>
                                        <ul>
                                            <li><a href="layouts-sidepanel.html"><span class="nav-icon-hexa">Df</span> Default</a></li>
                                            <li><a href="layouts-sidepanel-overlay.html"><span class="nav-icon-hexa">Wo</span> With Overlay</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Fo</span> Footers</a>
                                        <ul>
                                            <li><a href="layouts-footer-default.html"><span class="nav-icon-hexa">Sm</span> Simple</a></li>
                                            <li><a href="layouts-footer-extended.html"><span class="nav-icon-hexa">Et</span> Extended</a></li>
                                            <li><a href="layouts-footer-custom.html"><span class="nav-icon-hexa">Cd</span> Custom Design</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Lo</span> Layout Options</a>
                                <ul>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Ln</span> Left Navigation</a>
                                        <ul>
                                            <li><a href="layouts-option-basic.html"><span class="nav-icon-hexa">Bs</span> Basic</a></li>
                                            <li><a href="layouts-option-basic-header.html"><span class="nav-icon-hexa">Wh</span> With Header</a></li>
                                            <li><a href="layouts-option-basic-footer.html"><span class="nav-icon-hexa">Wf</span> With Footer</a></li>
                                            <li><a href="layouts-option-basic-header-footer.html"><span class="nav-icon-hexa">Hf</span> Header & Footer</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Tn</span> Top Navigation</a>
                                        <ul>
                                            <li><a href="layouts-option-topnav-header.html"><span class="nav-icon-hexa">Hn</span> Header Navigation</a></li>
                                            <li><a href="layouts-option-topnav-horizontal.html"><span class="nav-icon-hexa">Hz</span> Horizontal Navigation</a></li>
                                            <li><a href="layouts-option-topnav-horizontal-boxed.html"><span class="nav-icon-hexa">Hb</span> Horizontal Navigation (Boxed)</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><span class="nav-icon-hexa">Bx</span> Boxed</a>
                                        <ul>
                                            <li><a href="layouts-option-boxed.html"><span class="nav-icon-hexa">Bs</span> Basic</a></li>
                                            <li><a href="layouts-option-boxed-custom.html"><span class="nav-icon-hexa">Wm</span> With Margin</a></li>
                                            <li><a href="layouts-option-boxed-content.html"><span class="nav-icon-hexa">Bc</span> Boxed Content</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="title">Other</li>
                            <li><a href="landing-page.html" target="_blank"><span class="nav-icon-hexa">Lp</span> Landing Page</a></li>
                            <li><a href="documentation.html"><span class="nav-icon-hexa">Dc</span> Documentation</a></li>
                            <li><a href="rtl.html"><span class="nav-icon-hexa">Rs</span> RTL Support</a></li>

                            <li class="title">Navigation Examples</li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">Ic</span> Nav Element Icons</a>
                                <ul>
                                    <li><a href="#"><span class="nav-icon-hexa">Hw</span> Hexagon With Text</a></li>
                                    <li><a href="#"><span class="nav-icon-cube">Cb</span> Cube With Text</a></li>
                                    <li><a href="#"><span class="nav-icon-circle">Ct</span> Circle With Text</a></li>
                                    <li><a href="#"><span class="icon-laptop-phone"></span> Linearicon icon</a></li>
                                    <li><a href="#"><span class="fa fa-cog"></span> FontAwesome icon</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="nav-icon-hexa">El</span> Element With Label <span class="label label-warning label-bordered label-ghost">label</span></a>
                                 <ul>
                                    <li><a href="#"><span class="nav-icon-hexa">Dl</span> Default Label <span class="label label-default">38</span></a></li>
                                    <li><a href="#"><span class="nav-icon-hexa">La</span> Label With Animation <span class="label label-warning animated infinite rubberBand">hey!</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- END SIDEBAR -->

                <!-- START APP CONTENT -->
                <div class="app-content app-sidebar-left">
                    <!-- START APP HEADER -->
                    <div class="app-header app-header-design-default">
                        <ul class="app-header-buttons">
                            <li class="visible-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-toggle=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                            <li class="hidden-mobile"><a href="#" class="btn btn-link btn-icon" data-sidebar-minimize=".app-sidebar.dir-left"><span class="icon-menu"></span></a></li>
                        </ul>
                        <form class="app-header-search" action="" method="post">
                            <input type="text" name="keyword" placeholder="Search">
                        </form>

                        <ul class="app-header-buttons pull-right">
                            <li>
                                <div class="contact contact-rounded contact-bordered contact-lg contact-ps-controls hidden-xs">
                                    <img src="assets/images/users/user_1.jpg" alt="John Doe">
                                    <div class="contact-container">
                                        <a href="#">John Doe</a>
                                        <span>Administrator</span>
                                    </div>
                                    <div class="contact-controls">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-default btn-icon" data-toggle="dropdown"><span class="icon-layers"></span></button>
                                            <ul class="dropdown-menu dropdown-left">
                                                <li><a href="pages-profile-social.html"><span class="icon-users"></span> Account</a></li>
                                                <li><a href="pages-messages-chat.html"><span class="icon-envelope"></span> Messages</a></li>
                                                <li><a href="pages-profile-card.html"><span class="icon-users"></span> Contacts</a></li>
                                                <li class="divider"></li>
                                                <li><a href="pages-email-inbox.html"><span class="icon-envelope"></span> E-mail <span class="label label-danger pull-right">19/2,399</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-default btn-icon btn-informer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="icon-alarm"></span><span class="informer informer-danger informer-sm informer-square">+3</span></button>
                                    <ul class="dropdown-menu dropdown-form dropdown-left dropdown-form-wide">
                                        <li class="padding-0">

                                            <div class="app-heading title-only app-heading-bordered-bottom">
                                                <div class="icon">
                                                    <span class="icon-text-align-left"></span>
                                                </div>
                                                <div class="title">
                                                    <h2>Notifications</h2>
                                                </div>
                                                <div class="heading-elements">
                                                    <a href="#" class="btn btn-default btn-icon"><span class="icon-sync"></span></a>
                                                </div>
                                            </div>

                                            <div class="app-timeline scroll app-timeline-simple text-sm" style="height: 240px;">

                                                <div class="app-timeline-item">
                                                    <div class="dot dot-primary"></div>
                                                    <div class="content">
                                                        <div class="title margin-bottom-0"><a href="#">Jessie Franklin</a> uploaded new file <strong>844_jswork.pdf</strong></div>
                                                    </div>
                                                </div>

                                                <div class="app-timeline-item">
                                                    <div class="dot dot-warning"></div>
                                                    <div class="content">
                                                        <div class="title margin-bottom-0"><a href="#">Taylor Watson</a> changed work status <strong>PSD Dashboard</strong></div>
                                                    </div>
                                                </div>

                                                <div class="app-timeline-item">
                                                    <div class="dot dot-success"></div>
                                                    <div class="content">
                                                        <div class="title margin-bottom-0"><a href="#">Dmitry Ivaniuk</a> approved project <strong>Boooya</strong></div>
                                                    </div>
                                                </div>

                                                <div class="app-timeline-item">
                                                    <div class="dot dot-success"></div>
                                                    <div class="content">
                                                        <div class="title margin-bottom-0"><a href="#">Boris Shaw</a> finished work on <strong>Boooya</strong></div>
                                                    </div>
                                                </div>

                                                <div class="app-timeline-item">
                                                    <div class="dot dot-danger"></div>
                                                    <div class="content">
                                                        <div class="title margin-bottom-0"><a href="#">Jasmine Voyer</a> declined order <strong>Project 155</strong></div>
                                                    </div>
                                                </div>

                                            </div>

                                        </li>
                                        <li class="padding-top-0">
                                            <button class="btn btn-block btn-link">Preview All</button>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="pages-login.html" class="btn btn-default btn-icon"><span class="icon-power-switch"></span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END APP HEADER  -->

                    <!-- START PAGE HEADING -->
                    <div class="app-heading app-heading-bordered app-heading-page">
                        <div class="icon icon-lg">
                            <span class="icon-laptop-phone"></span>
                        </div>
                        <div class="title">
                            <h1>Boooya - Admin Template</h1>
                            <p>The revolution in admin template build</p>
                        </div>
                        <!--
                        <div class="heading-elements">
                            <a href="#" class="btn btn-danger" id="page-like"><span class="app-spinner loading"></span> loading...</a>
                            <a href="https://themeforest.net/item/boooya-revolution-admin-template/17227946?ref=aqvatarius&license=regular&open_purchase_for_item_id=17227946" class="btn btn-success btn-icon-fixed"><span class="icon-text">$24</span> Purchase</a>
                        </div>
                        -->
                    </div>
                    <div class="app-heading-container app-heading-bordered bottom">
                        <ul class="breadcrumb">
                            <li><a href="#">Application</a></li>
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADING -->

                    <!-- START PAGE CONTAINER -->
                    <div class="container">

                        <div class="row">
                            <div class="col-md-3">

                                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Sales Per Month</div>
                                                <div class="title pull-right"><span class="label label-success label-ghost label-bordered">+14.2%</span></div>
                                            </div>
                                            <div class="intval">9,427</div>
                                            <div class="line">
                                                <div class="subtitle">Total items sold</div>
                                                <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span> good</div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Sales Per Year</div>
                                                <div class="title pull-right text-success">+32.9%</div>
                                            </div>
                                            <div class="intval">24,834</div>
                                            <div class="line">
                                                <div class="subtitle">Total items sold</div>
                                                <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span> good</div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Profit</div>
                                                <div class="title pull-right text-success">+9.2%</div>
                                            </div>
                                            <div class="intval">539,277 <small>usd</small></div>
                                            <div class="line">
                                                <div class="subtitle">Frofit for the year</div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile">
                                            <div class="line">
                                                <div class="title">Outlay</div>
                                                <div class="title pull-right text-success">-12.7%</div>
                                            </div>
                                            <div class="intval">45,385<small>usd</small></div>
                                            <div class="line">
                                                <div class="subtitle">Statistic per year</div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                </ul>

                            </div>
                            <div class="col-md-3">

                                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="line">
                                                <div class="title">Visitors</div>
                                                <div class="title pull-right"><span class="label label-warning label-ghost label-bordered">-3.5%</span></div>
                                            </div>
                                            <div class="intval">99,573</div>
                                            <div class="line">
                                                <div class="subtitle">Visitors per month</div>
                                                <div class="subtitle pull-right text-warning"><span class="icon-arrow-down"></span> normal</div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="line">
                                                <div class="title">Returned</div>
                                                <div class="title pull-right text-success">67.1%</div>
                                            </div>
                                            <div class="intval">61,488</div>
                                            <div class="line">
                                                <div class="subtitle">Returned visitors per month</div>
                                                <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span></div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="line">
                                                <div class="title">New</div>
                                                <div class="title pull-right text-success">33.9%</div>
                                            </div>
                                            <div class="intval">38,085</div>
                                            <div class="line">
                                                <div class="subtitle">New visitors per month</div>
                                                <div class="subtitle pull-right text-success"><span class="icon-arrow-up"></span></div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="line">
                                                <div class="title">Registred</div>
                                                <div class="title pull-right">+458</div>
                                            </div>
                                            <div class="intval">12,554</div>
                                            <div class="line">
                                                <div class="subtitle">Total registred users</div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                </ul>

                            </div>
                            <div class="col-md-3">

                                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-bubble"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="line">
                                                        <div class="title">Messages</div>
                                                        <div class="title pull-right"><span class="label label-success label-ghost label-bordered">3 NEW</span></div>
                                                    </div>
                                                    <div class="intval text-left">39 / 1,589</div>
                                                    <div class="line">
                                                        <div class="subtitle"><a href="#">Open all messages</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-warning"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="line">
                                                        <div class="title">Server Notifications</div>
                                                    </div>
                                                    <div class="intval text-left">14 / 631</div>
                                                    <div class="line">
                                                        <div class="subtitle"><a href="#">Open all notifications</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-envelope"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="line">
                                                        <div class="title">Inbox Mail</div>
                                                    </div>
                                                    <div class="intval text-left">2 / 481</div>
                                                    <div class="line">
                                                        <div class="subtitle"><a href="#">Open inbox messages</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-users"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="line">
                                                        <div class="title">Customers</div>
                                                        <div class="title pull-right"><span class="label label-danger label-bordered">15 NEW</span></div>
                                                    </div>
                                                    <div class="intval text-left">6,233</div>
                                                    <div class="line">
                                                        <div class="subtitle"><a href="#">Open contact list</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                </ul>

                            </div>
                            <div class="col-md-3">

                                <ul class="app-feature-gallery app-feature-gallery-noshadow margin-bottom-0">
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-cloud-check"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="line">
                                                        <div class="title">Total Server Load</div>
                                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> UP</div>
                                                    </div>
                                                    <div class="intval text-left">85.2%</div>
                                                    <div class="line">
                                                        <div class="subtitle">Latest back up: <a href="#">12/07/2017</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-database"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="line">
                                                        <div class="title">Database Load</div>
                                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> UP</div>
                                                    </div>
                                                    <div class="intval text-left">43.16%</div>
                                                    <div class="line">
                                                        <div class="subtitle">4/10 databases used</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-inbox text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="line">
                                                        <div class="title">Disk Space</div>
                                                        <div class="subtitle pull-right text-danger"><span class="fa fa-times"></span> Critical</div>
                                                    </div>
                                                    <div class="intval text-left">99.98%</div>
                                                    <div class="line">
                                                        <div class="subtitle">234.2GB / 240GB used</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                    <li>
                                        <!-- START WIDGET -->
                                        <div class="app-widget-tile app-widget-highlight">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon icon-lg">
                                                        <span class="icon-heart-pulse"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="line">
                                                        <div class="title">Proccessor</div>
                                                        <div class="subtitle pull-right text-success"><span class="fa fa-check"></span> Normal</div>
                                                    </div>
                                                    <div class="intval text-left">32.5%</div>
                                                    <div class="line">
                                                        <div class="subtitle">Intule Cori P7, 3.6Ghz</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END WIDGET -->
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">

                                <!-- START PRODUCT SALES HISTORY -->
                                <div class="block block-condensed">
                                    <div class="app-heading">
                                        <div class="title">
                                            <h2>Product Sales History</h2>
                                            <p>In comparison with "Purchase Button"</p>
                                        </div>
                                        <div class="heading-elements">
                                            <button type="button" class="btn btn-default btn-icon-fixed dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="icon-calendar-full"></span> June 13, 2017 - July 14, 2017
                                            </button>
                                            <ul class="dropdown-menu dropdown-form dropdown-left">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group margin-bottom-10">
                                                                <label>From:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><span class="icon-calendar-full"></span></div>
                                                                    <input type="text" class="form-control bs-datepicker" value="13/06/2017">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="form-group">
                                                                <label>To:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-addon"><span class="icon-calendar-full"></span></div>
                                                                    <input type="text" class="form-control bs-datepicker" value="13/07/2017">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <button class="btn btn-default btn-block">Confirm</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="block-content">
                                        <div class="app-chart-wrapper app-chart-with-axis">
                                            <div id="yaxis" class="app-chart-yaxis"></div>
                                            <div class="app-chart-holder" id="dashboard-chart-line" style="height: 325px;"></div>
                                            <div id="xaxis" class="app-chart-xaxis"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PRODUCT SALES HISTORY -->

                            </div>
                            <div class="col-md-6">

                                <!-- START LATEST TRANSACTIONS -->
                                <div class="block block-condensed">
                                    <div class="app-heading">
                                        <div class="title">
                                            <h2>Latest Transactions</h2>
                                            <p>Quick information</p>
                                        </div>
                                        <div class="heading-elements">
                                            <button class="btn btn-default btn-icon-fixed"><span class="icon-file-add"></span> All Transactions</button>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <div class="table-responsive">
                                            <table class="table table-clean-paddings margin-bottom-0">
                                                <thead>
                                                    <tr>
                                                        <th>Customer</th>
                                                        <th width="150">Order</th>
                                                        <th width="150">Status</th>
                                                        <th width="55"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_2.jpg">
                                                                <div class="contact-container">
                                                                    <a href="#">John Doe</a>
                                                                    <span>on July 13, 2017</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SPW-955-21</td>
                                                        <td><span class="label label-success label-bordered">Confirmed</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-cog"></span></button>
                                                                <ul class="dropdown-menu dropdown-left">
                                                                    <li><a href="#"><span class="icon-question-circle text-info"></span> More information</a></li>
                                                                    <li><a href="#"><span class="icon-arrow-up-circle text-warning"></span> Promote to top</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span class="icon-cross-circle text-danger"></span> Delete transactions</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_3.jpg">
                                                                <div class="contact-container">
                                                                    <a href="#">Juan Obrien</a>
                                                                    <span>on July 12, 2017</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SPW-955-20</td>
                                                        <td><span class="label label-warning label-bordered">Waiting payment</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-cog"></span></button>
                                                                <ul class="dropdown-menu dropdown-left">
                                                                    <li><a href="#"><span class="icon-question-circle text-info"></span> More information</a></li>
                                                                    <li><a href="#"><span class="icon-arrow-up-circle text-warning"></span> Promote to top</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span class="icon-cross-circle text-danger"></span> Delete transactions</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_4.jpg">
                                                                <div class="contact-container">
                                                                    <a href="#">Erin Stewart</a>
                                                                    <span>on July 12, 2017</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SPW-955-18</td>
                                                        <td><span class="label label-success label-bordered">Confirmed</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-cog"></span></button>
                                                                <ul class="dropdown-menu dropdown-left">
                                                                    <li><a href="#"><span class="icon-question-circle text-info"></span> More information</a></li>
                                                                    <li><a href="#"><span class="icon-arrow-up-circle text-warning"></span> Promote to top</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span class="icon-cross-circle text-danger"></span> Delete transactions</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_5.jpg">
                                                                <div class="contact-container">
                                                                    <a href="#">Jeff Kuhn</a>
                                                                    <span>on July 11, 2017</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SPW-955-17</td>
                                                        <td><span class="label label-danger label-bordered">Payment expired</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-cog"></span></button>
                                                                <ul class="dropdown-menu dropdown-left">
                                                                    <li><a href="#"><span class="icon-question-circle text-info"></span> More information</a></li>
                                                                    <li><a href="#"><span class="icon-arrow-up-circle text-warning"></span> Promote to top</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span class="icon-cross-circle text-danger"></span> Delete transactions</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="contact contact-rounded contact-bordered contact-lg">
                                                                <img src="assets/images/users/user_6.jpg">
                                                                <div class="contact-container">
                                                                    <a href="#">Jared Stevens</a>
                                                                    <span>on July 11, 2017</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>SPW-955-14</td>
                                                        <td><span class="label label-primary label-bordered">Delivered</span></td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-default btn-icon btn-clean dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-cog"></span></button>
                                                                <ul class="dropdown-menu dropdown-left">
                                                                    <li><a href="#"><span class="icon-question-circle text-info"></span> More information</a></li>
                                                                    <li><a href="#"><span class="icon-arrow-up-circle text-warning"></span> Promote to top</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><span class="icon-cross-circle text-danger"></span> Delete transactions</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END LATEST TRANSACTIONS -->

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">

                                <!-- START PURCHASE STATISTICS -->
                                <div class="block block-condensed" id="block_purchase">
                                    <div class="app-heading">
                                        <div class="title">
                                            <h2>Purchase Statistics</h2>
                                            <p>Who purchase products</p>
                                        </div>
                                        <div class="heading-elements">
                                            <button class="btn btn-default btn-icon-fixed block-refresh-example" data-block="block_purchase"><span class="icon-sync"></span> Update</button>
                                        </div>
                                    </div>

                                    <div class="block-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>20-25</label><span class="pull-right text-bold">37%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="37%">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100" style="width: 37%"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>26-30</label><span class="pull-right text-bold">33%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="33%">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>31-40</label><span class="pull-right text-bold">25%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="25%">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>41-50</label><span class="pull-right text-bold">12%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="15%">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>51+</label><span class="pull-right text-bold">3%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="3%">
                                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100" style="width: 3%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Male</label><span class="pull-right text-bold">75%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="75%">
                                                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Female</label><span class="pull-right text-bold">25%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="25%">
                                                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>&lt; $25</label><span class="pull-right text-bold">68%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="68%">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>> $26</label><span class="pull-right text-bold">22%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="22%">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>&lt; $100</label><span class="pull-right text-bold">10%</span>
                                                    <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="10%">
                                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PURCHASE STATISTICS -->

                            </div>
                            <div class="col-md-4">

                                <!-- START TOP STORES -->
                                <div class="block block-condensed" id="block_locations">
                                    <div class="app-heading">
                                        <div class="title">
                                            <h2>Locations</h2>
                                            <p>Statistics by locations</p>
                                        </div>
                                        <div class="heading-elements">
                                            <button class="btn btn-default btn-icon-fixed block-refresh-example" data-block="block_locations"><span class="icon-sync"></span> Update</button>
                                        </div>
                                    </div>
                                    <div class="block-content">

                                        <div id="dashboard-map" class="app-chart-holder" style="height: 285px;"></div>

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">

                                <!-- START TOP STORES -->
                                <div class="block block-condensed">
                                    <div class="app-heading">
                                        <div class="title">
                                            <h2>Top 5 Stores</h2>
                                            <p>Best sellers per month</p>
                                        </div>
                                        <div class="heading-elements">
                                            <button class="btn btn-default btn-icon-fixed"><span class="icon-store"></span>All Stores</button>
                                        </div>
                                    </div>
                                    <div class="block-content">

                                        <div class="form-group">
                                            <label>1. Shopnumone</label><span class="pull-right text-bold">135</span>
                                            <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="75%">
                                                <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>2. Best Shoptwo</label><span class="pull-right text-bold">121</span>
                                            <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="70%">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>3. Third Awesome</label><span class="pull-right text-bold">107</span>
                                            <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="65%">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>4. Alltranding</label><span class="pull-right text-bold">83</span>
                                            <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="51%">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100" style="width: 51%"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>5. Shop Name</label><span class="pull-right text-bold">77</span>
                                            <div class="progress progress-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="42%">
                                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END TOP STORES -->

                            </div>
                        </div>

                    </div>
                    <!-- END PAGE CONTAINER -->

                </div>
                <!-- END APP CONTENT -->

            </div>
            <!-- END APP CONTAINER -->

            <!-- START APP FOOTER -->
            <div class="app-footer app-footer-default" id="footer">
                <div class="app-footer-line">
                    <div class="copyright">&copy; 2016-2017 Boooya. All right reserved in the Ukraine and other countries.</div>
                    <div class="pull-right">
                        <ul class="list-inline">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END APP FOOTER -->
            <!-- START APP SIDEPANEL -->
            <div class="app-sidepanel scroll" data-overlay="show">
                <div class="container">

                    <div class="app-heading app-heading-condensed app-heading-small padding-left-0">
                        <div class="icon icon-lg">
                            <span class="icon-alarm"></span>
                        </div>
                        <div class="title">
                            <h2>Notifications</h2>
                            <p><strong>7 new</strong>, latest: July 19, 2016 at 10:14:32.</p>
                        </div>
                    </div>

                    <div class="listing margin-bottom-10">
                        <div class="listing-item margin-bottom-10">
                            <strong>Product Delivered</strong> <span class="label label-success pull-right">delivered</span>
                            <p class="margin-0 margin-top-5">#SPW-955-18 to st. StreetName SA, USA.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 19/07/2016 10:14:32 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Successful Payment</strong> <span class="label label-success pull-right">success</span>
                            <p class="margin-0 margin-top-5">Payment for order #SPW-955-17: <strong>$145.44</strong>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 09:55:12 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>New Order #SPW-955-17</strong> <span class="label label-warning pull-right">waiting</span>
                            <p class="margin-0 margin-top-5">Added new order, waiting for payment. <a href="#">Order details</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 09:51:55 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Money Back Request</strong> <span class="label label-primary pull-right">return</span>
                            <p class="margin-0 margin-top-5">#SPW-955-17 return requested. <a href="#">Request details</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-bank margin-right-5"></span> 19/07/2016 08:44:51 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>The critical amount of product</strong> <span class="label label-danger pull-right">important</span>
                            <p class="margin-0 margin-top-5">Product: <a href="#">Extra Awesome Product</a> (amount: <span class="text-danger">2</span>). <a href="#">Storehouse</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-cube margin-right-5"></span> 19/07/2016 08:30:00 AM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Product Delivery Start</strong> <span class="label label-warning pull-right">delivering</span>
                            <p class="margin-0 margin-top-5">#SPW-955-18 to st. StreetName SA, USA.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 18/07/2016 06:14:32 PM
                            </p>
                        </div>
                        <div class="listing-item margin-bottom-10">
                            <strong>Critical Server Load</strong> <span class="label label-danger pull-right">server</span>
                            <p class="margin-0 margin-top-5">Disk space: 248.1Gb/250Gb. <a href="#">Control panel</a>.</p>
                            <p class="text-muted">
                                <span class="fa fa-truck margin-right-5"></span> 18/07/2016 06:14:32 PM
                            </p>
                        </div>
                    </div>
                    <div class="row margin-bottom-30">
                        <div class="col-xs-6 col-xs-offset-3">
                            <button class="btn btn-default btn-block">All Notification</button>
                        </div>
                    </div>

                    <div class="app-heading app-heading-condensed app-heading-small margin-bottom-20 padding-left-0">
                        <div class="icon icon-lg">
                            <span class="icon-cog"></span>
                        </div>
                        <div class="title">
                            <h2>Settings</h2>
                            <p>Notification Settings</p>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_1" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Delivery Information</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_2" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Product Amount Information</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_3" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Order Information</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_4" checked="" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Server Load</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_5" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>User Registrations</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-2">
                                <label class="switch switch-sm margin-0">
                                    <input type="checkbox" name="app_settings_6" value="0">
                                </label>
                            </div>
                            <div class="col-xs-10">
                                <label>Purchase Information</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END APP SIDEPANEL -->

            <!-- APP OVERLAY -->
            <div class="app-overlay"></div>
            <!-- END APP OVERLAY -->
        </div>
        <!-- END APP WRAPPER -->

        <!-- IMPORTANT SCRIPTS -->
        <script type="text/javascript" src="{{asset('assets/js/vendor/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/icheck/icheck.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/bootstrap/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/moment/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset("assets/js/helpers/html-maker.js")}}"></script>
        <script type="text/javascript" src="{{asset("assets/js/helpers/ajax.js")}}?v=2.7"></script>
        <!-- END IMPORTANT SCRIPTS -->

        <script type="text/javascript">
		    $(document).ready(function() {
		      $('a.active').parent('li').parent('ul').parent('li').addClass('open').parent('ul').parent('li').addClass('open');
		      $('a.active').parent('li').parent('ul').parent('li').addClass('open');

		      $('.formated-cell').each(function(index, element){
		        var value = $(this).text();
		        $(this).text(format_number(Number(value)));
		      });
		    });

		    window.checkbox_style = 'flat';
		    $('input.icheck').iCheck({
		      checkboxClass: 'icheckbox_' + window.checkbox_style,
		      radioClass: 'iradio_' + window.checkbox_style
		    }).on('ifChanged', function (event) { $(event.target).trigger('change'); });
		    window.theme_header = "header";
		    window.theme_navigation = "navigation";
		    window.theme_footer = "footer";
		</script>

        @yield('scripts.datatable')
		<script type="text/javascript" src="{{ asset('assets/js/vendor/bootstrap-select/bootstrap-select.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/vendor/select2/select2.full.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset("assets/js/vendor/moment/moment.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("assets/js/vendor/customscrollbar/jquery.mCustomScrollbar.min.js") }}"></script>
		<script type="text/javascript" src="{{ asset("assets/js/helpers/theme.js") }}"></script>

		<script type="text/javascript">
		    window.app_locale = '{{ app()->getLocale() }}';
		    window.domain = '#';
		    window.messages_form_has_error = 'form has error.';
		    window.noty_opts = {
		      layout: "topRight",
		      timeout: 5000,
		      animation: {
		        open: 'animated bounceIn',
		        close: 'animated fadeOut',
		        speed: 200
		      }
		    };
		    $(document).ready(function() {
		      setInterval(function () {
		        if($('.app-content').height() != $('.app-sidebar.app-navigation').height()) $(window).trigger('resize');
		      }, 200);
		      $("li.hidden-mobile>a").click(function(){$.get(window.close_side_panel_route);});
		    });
		</script>

        @yield("scripts")

        <!-- APP SCRIPTS -->
        <script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/app_plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset("assets/js/vendor/noty/jquery.noty.packaged.js")}}"></script>
        <!-- END APP SCRIPTS -->
  	</body>
</html>