<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <!-- <base href="/"> -->

        <title>Главная</title>
        <meta name="description" content="">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Template Basic Images Start -->
        <meta property="og:image" content="path/to/image.jpg">
        <link rel="icon" href="/template/img/favicon/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="/template/img/favicon/apple-touch-icon-180x180.png">
        <!-- Template Basic Images End -->

        <!-- Custom Browsers Color Start -->
        <meta name="theme-color" content="#000">
        <!-- Custom Browsers Color End -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        
      	<link href="/template/slick/slick.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/template/slick/slick-theme.css"/>
       
        <link rel="stylesheet" href="/template/css/main.min.css">
        
                


    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header-container">

                    <div class="row">
                        <div class="col-1">
                            <div class="left-menu-icon">
                                <i></i>
                                <i></i>
                            </div>

                        </div>
                        <div class=" left-menu-overlay"></div>
                        <div class=" left-menu active" id="left-menu">
                            <div class="left-menu-links">
                                <ul>
									<li id="category"><a href="#">КАТЕГОРИИ</a></li>
                                    <li><a href="#">КЛИЕНТСКИЕ ДНИ</a></li>
                                    <li><a href="#">ДОСТАВКА И ОПЛАТА</a></li>
                                    <li><a href="#">КАРЬЕРА</a></li>
                                    <li><a href="#">КОНТАКТЫ</a></li>
                                    <li>8 (800) 700-33-37</li>
                                </ul>
                            </div>
							<div class="social">
								<ul class="link">

									<li class="vk"><a href="#" title="Вконтакте"><i class="fab fa-vk"></i></a></li>

									<li class="youtube"><a  href="=#" title="Youtube"><i class="fab fa-youtube"></i></a></li>

									<li class="instagram"><a  href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

									<li class="fb"><a  href="#" title="Facebook"><i class="fab fa-facebook-square"></i></a></li>


								</ul>
							</div>
                        </div>
                        <div id="logotype" class="col-8">
                            <div class="logo">
                                <a href="/"><img src="/template/img/beauty.jpg" alt="" /></a>
                            </div>
                        </div>

                        <div class="col-3 menu-right-icon">
                                <ul class="list">
                                    <li id="search"><a href="#"><i class="fa fa-search"></i> </a></li>
                                    <li id="phone"><a href="#"><i class="fa fa-phone"></i> </a></li>
                                    <li id="envelope"><a href="/contacts"><i class="fa fa-envelope"></i> </a></li>

									<?php if (User::isGuest()): ?>
										<li id="lock"><a href="/user/login/"><i class="fa fa-lock"></i></a></li>
									<?php else: ?>
										<li id="user"><a href="/cabinet/"><i class="fa fa-user"></i> </a></li>
										<li	id="unlock"><a href="/user/logout/"><i class="fa fa-unlock"></i> </a></li>
									<?php endif; ?>
                                </ul>
                        </div>

                    </div>




                    <div class="row main-menu">
                            <div class="col-12">
                                <nav class="mainmenu-child ">
                                    <ul class="nav">

										<li id="brand">
                                            <a href="#">
                                                	БРЕНДЫ
                                            </a>
											<div class="brand-mega-menu">
												<div class="menu-content">
													<div class="row">
														<div class="col-2">
															<ul>


																<li>
																	<a href="/category/2">
																		Новинки
																	</a>
																</li>
																<li>
																	<a href="#">
																		Prof макияж

																	</a>
																</li>
																<li>
																	<a href="#">
																		Макияж
																	</a>
																</li>
																<li>
																	<a href="#">
																		Уход
																	</a>
																</li>
																<li>
																	<a href="#">
																		Ароматы
																	</a>
																</li>
																<li>
																	<a href="#">
																		Подарки
																	</a>
																</li>
																<li>
																	<a href="#">
																		Акции
																	</a>
																</li>

															</ul>
														</div>
														<div class="col-7">
															<div class="favorite-brands">Популярные</div>
															<ul>
																<li><a href="#"><img src="/template/img/category/lamer_1_.png" alt=""></a></li>
																<li><a href="#"><img src="/template/img/category/mac.png" alt=""></a></li>
																<li><a href="#"><img src="/template/img/category/Balmain_logo_1_.png" alt=""></a></li>
																<li><a href="#"><img src="/template/img/category/MUF.png" alt=""></a></li>
																<li><a href="#"><img src="/template/img/category/UD.png" alt=""></a></li>
																<li><a href="#"><img src="/template/img/category/TomFord.png" alt=""></a></li>
																<li><a href="#"><img src="/template/img/category/bobbiBrown.png" alt=""></a></li>
																<li><a href="#"><img src="/template/img/category/ManlyPro.png" alt=""></a></li>
																<li><a href="#"><img src="/template/img/category/jo.png" alt=""></a></li>
															</ul>
														</div>
														<div class="col-3">
															<div class="alphabet">
																<a href="#">
																	<div class="alphabet-title">Бренды A-Z</div>
																</a>
																<div class="letter">
																	<a href="#"> A </a>
																</div>
																<div class="letter">
																	<a href="#"> B </a>
																</div>
																<div class="letter">
																	<a href="#"> C </a>
																</div>
																<div class="letter">
																	<a href="#">
																		D </a>
																</div>
																<div class="letter">
																	<a href="#">
																		E </a>
																</div>
																<div class="letter">
																	<a href="#">
																		F </a>
																</div>
																<div class="letter">
																	<a href="#">
																		G </a>
																</div>
																<div class="letter">
																	<a href="#">
																		H </a>
																</div>
																<div class="letter">
																	<a href="#">
																		I </a>
																</div>
																<div class="letter">
																	<a href="#">
																		J </a>
																</div>
																<div class="letter">
																	<a href="#">
																		K </a>
																</div>
																<div class="letter">
																	<a href="#">
																		L </a>
																</div>
																<div class="letter">
																	<a href="#">
																		M </a>
																</div>
																<div class="letter">
																	<a href="#">
																		N </a>
																</div>
																<div class="letter">
																	<a href="#">
																		O </a>
																</div>
																<div class="letter">
																	<a href="#">
																		P </a>
																</div>
																<div class="letter">
																	<a href="#">
																		Q </a>
																</div>
																<div class="letter">
																	<a href="#">
																		R </a>
																</div>
																<div class="letter">
																	<a href="#">
																		S </a>
																</div>
																<div class="letter">
																	<a href="#">
																		T </a>
																</div>
																<div class="letter">
																	<a href="#">
																		U </a>
																</div>
																<div class="letter">
																	<a href="#">
																		V </a>
																</div>
																<div class="letter">
																	<a href="#">
																		W </a>
																</div>
																<div class="letter">
																	<a href="#">
																		X </a>
																</div>
																<div class="letter">
																	<a href="#">
																		Y </a>
																</div>
																<div class="letter">
																	<a href="#">
																		Z </a>
																</div>
																<div class="alphabet-all">
																	<a href="#">
																		Все бренды </a>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</li>
										<li id="novelties-menu">
                                            <a href="/category/2">
                                                	НОВИНКИ
                                            </a>
                                            

										</li>
										<li>
                                            <a href="#">
												PROF МАКИЯЖ

											</a>
										</li>
										<li>
                                            <a href="#">
                                                	МАКИЯЖ
                                            </a>
										</li>
										<li>
                                            <a href="#">
                                                	УХОД
                                            </a>
										</li>
										<li>
                                            <a href="#">
                                                	АРОМАТЫ
                                            </a>
										</li>
										<li>
                                            <a href="#">
                                                	ПОДАРКИ
                                            </a>
										</li>
										<li>
                                            <a href="#">
                                                	АКЦИИ
                                            </a>
										</li>


                                        <li>
											<a href="/cart">
                                                <i class="fa fa-shopping-cart"></i> Корзина
                                                (<span id="cart-count"><?php echo Cart::countItems();?></span>)
                                            </a>
                                        </li>

									</ul>
                                </nav>
                            </div>
                    </div>
            </div><!--/header-bottom-->
        </header><!--/header-->
