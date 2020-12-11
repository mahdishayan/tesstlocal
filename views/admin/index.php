<?php
$info=$data['info']
?>
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="profile-info">
                <figure class="user-cover-image"></figure>
                <div class="user-info">
                    <img src="public/admin/assets/img/90x90.jpg" alt="avatar">
                    <h6 class="">مهدی شایان</h6>
                    <p class="">مدیر پروژه</p>
                </div>
            </div>
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span> منو 1</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                            <span> منو 2</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="submenu" data-parent="#accordionExample">
                        <li>
                            <a href="javascript:void(0);"> زیرمنو 1 </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> زیرمنو 2 </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            <span> منو 3</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="submenu2" data-parent="#accordionExample">
                        <li>
                            <a href="javascript:void(0);"> زیرمنو 1 </a>
                        </li>
                        <li>
                            <a href="#sm2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> زیرمنو 2 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul class="collapse list-unstyled sub-submenu" id="sm2" data-parent="#submenu2">
                                <li>
                                    <a href="javascript:void(0);"> زیر زیرمنو 1 </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"> زیر زیرمنو 2 </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"> زیر زیرمنو 3 </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu active">
                    <a href="#starter-kit" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                            <span>کیت استارت</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="starter-kit" data-parent="#accordionExample">
                        <li class="active">
                            <a href="starter_kit_blank_page.html"> صفحه خالی </a>
                        </li>
                        <li>
                            <a href="starter_kit_boxed.html"> جعبه </a>
                        </li>
                        <li>
                            <a href="starter_kit_collapsible_menu.html"> Collapsible </a>
                        </li>
                    </ul>
                </li>

            </ul>

        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <!-- CONTENT AREA -->


            <div class="row layout-top-spacing">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget-content-area br-4">
                        <div class="widget-one">

                            <h6>
                                <?=$info; ?>
                            </h6>

                            <p class="">با کیت استارت CORK می توانید کار خود را بدون هیچ زحمتی شروع کنید. صفحه استارت بسیار بهینه سازی شده است و به شما این امکان را می دهد تا با حداقل کد شروع کنید و فقط قطعات و افزونه های مورد نظر خود را اضافه کنید.</p>

                        </div>
                    </div>
                </div>

            </div>


            <!-- CONTENT AREA -->

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class=""> © کپی رایت</p>
            </div>
            <div class="footer-section f-section-2">
                <span class="copyright"> بومی سازی شده توسط : <a href="https://imanpa.ir/store/"> ایمان پاکروح </a> </span></div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->