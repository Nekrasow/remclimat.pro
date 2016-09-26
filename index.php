<!DOCTYPE html>

<html lang="ru">
<head>
	<meta charset="utf-8">
	<!--<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">-->
	<title>REMCLIMAT</title>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">


	<link rel="stylesheet" href="modalform/libs/remodal/remodal.css">
	<link rel="stylesheet" href="modalform/libs/remodal/remodal-default-theme.css">
	<link rel="stylesheet" href="modalform/css/formstyle.css">
	<link rel="stylesheet" href="css/style.css">

	<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>

	<script type="text/javascript" src="assets/countdown/jquery.countdown.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<!--
	<script>
		function AjaxFormRequest(result_id,formMain,url) {
			jQuery.ajax({
				url:     url,
				type:     "POST",
				dataType: "html",
				data: jQuery("#"+formMain).serialize(),
				success: function(response) {
					document.getElementById(result_id).innerHTML = response;
				},
				error: function(response) {
					document.getElementById(result_id).innerHTML = "Возникла ошибка при отправке формы. Попробуйте еще раз";
				}
			});
			$(':input','#formMain')
			.not(':button, :submit, :reset, :hidden')
			.val('')
			.removeAttr('checked')
			.removeAttr('selected');
		}
	</script>
	-->
	<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>


<!--
<div class="butWrap">
  <a class="linkButton" data-remodal-target="firstModal" title="Консультация">Получить консультацию</a>
  <a class="linkButton" data-remodal-target="secondModal" title="Обратный звонок">ЗАКАЗАТЬ</a>
</div>
-->
<div class="remodal" data-remodal-id="secondModal" id="test_modal" data-remodal-options="hashTracking: false,closeOnConfirm: false">
	<button data-remodal-action="close" class="remodal-close"></button>
	<div class="formArea">
	<div id="content_for_change"></div>
  <p class="formTitle">Форма заказа</p>
<p class="msgs"></p>
<form id="secondForm" class="form" autocomplete="off">

	<fieldset class="form-fieldset ui-input __second">
		<input name="uphone" type="tel" id="phone" tabindex="0"  placeholder="+7XXX-XX-XX-XXX" />
	</fieldset>

	<input name="formInfo" class="formInfo" type="hidden" value=""/>

	<div class="form-footer">
		<input type="submit" class="formBtn" value="Обратный звонок" />
	</div>
	<p class="formCreator">С Вами свяжется специалист с 9:00 до 19:00</p>
</form>
</div>
</div>


<div class="loader">
	<div class="project-loader">
		<div class="bubblingG">
			<span>REM</span>
			<span>CLI</span>
			<span>MAT</span>
		</div>
	</div>
</div>
<div class="loading" id="wrapper">
	<!-- Fixed navbar -->
	<div class="navbar navbar-smak navbar-fixed-top " id="navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
				<a class="navbar-brand animate" href="#"><img src="img/remclimat-logo.png" class="img-responsive" alt="Логотип"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right animate cl-effect-5">
					<li><a href="#services"><span data-hover="Преимущества">Преимущества</span></a></li>
					<li><a href="#about"><span data-hover="Услуги">Услуги</span></a></li>
					<li><a href="#catalog"><span data-hover="О нас">О нас</span></a></li>
					<li><a href="#portfolio"><span data-hover="Проекты">Проекты</span></a></li>
					<li><a href="#contact"><span data-hover="Контакты">Контакты</span></a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<section id="home" class="home home-fullscreen">
		<div class="container">
			<div class="conntact">
				<a href="" class="logo"><img src="img/remclimat-logo.png" alt="Логотип"></a>
				<div class="phone_number">
					<p>+7 (499) 755-86-37</p>
					<p>+7 (926) 857-30-02</p>
					<span>пн-пт 9:00 до 20:00</span>
				</div>
			</div>
			<h2>Монтаж, ремонт и обслуживание</h2>
			<h1>кондиционеров и вентиляции</h1>
			<a href="#services" class="arrow go-to godown">все для Вас</a>
			<ul class="left_slider">
				<li><a href="#">любая услуга</a></li>
				<li><a href="#">обслуживание</a></li>
				<li><a href="#">дезинфекция</a></li>
				<li><a href="#">монтаж</a></li>
				<li><a href="#">чистка</a></li>
				<li><a href="#">заправка</a></li>
				<li><a href="#">демонтаж</a></li>
				<li><a href="#">профилактика</a></li>
				<li><a class="linkButton input_button" data-remodal-target="secondModal" title="Заказ услуги" data-content="Заказать услугу">Заказать услугу</a></li>
				</ul>
				<div class="img_fon"></div><!--<img src="img/img_slider.png">-->
				<ul class="right_slider">
					<li><a href="#">ремонт кондиционера?</a></li>
					<li><a href="#">не включается </a></li>
					<li><a href="#">обмерзает </a></li>
					<li><a href="#">не греет</a></li>
					<li><a href="#">шумит</a></li>
					<li><a href="#">капает</a></li>
					<li class="" data-content="merzaet"><a href="#">не охлаждает</a></li>
					<li class="" data-content="merzaet"><a href="#">неприятный запах</a></li>
					<li class=""><a class="linkButton input_button" data-remodal-target="secondModal" title="Заказ ремонта" data-content="Заказать ремонт">Заказать ремонт</a></li>
				</ul>
			</div>	
		</section>
		<div class="block_action">
			<div class="container">
				<div class="action_text">
					<h2>Успей!</h2>
					<p>При заказе комплексного обслуживания <br><span>дезинфекция  в подарок</span></p>
				</div>
				<div class="timer">
					<p>ОСТАЛОСЬ ВСЕГО</p>
					<script src="http://megatimer.ru/s/4a1664dfd22e2b160f7a985b0348d49b.js"></script>
				</div>
				<form id="ssecondForm" class="form" autocomplete="off">
						<input name="uphone" type="tel" class="phone" tabindex="0"  placeholder="+7XXX-XX-XX-XXX" />
					<input title="Заказ по Акции" name="formInfo" class="linkButt formInfo" type="hidden" value=""/>
						<input type="submit" class="linkButton input_button formBtn" value="Обратный звонок" />
				</form>
			</div>
		</div>
		<div id="first_block_action" class="block_action">
			<div class="container">
				<h2>Успей!</h2>
				<p>При заказе<br> комплексного обслуживания <br><span>дезинфекция  в подарок</span></p>
				<div class="timer">
					<p>ОСТАЛОСЬ ВСЕГО</p>
					<script src="http://megatimer.ru/s/4a1664dfd22e2b160f7a985b0348d49b.js"></script>
					<div id="countdown"></div>
				</div>
				<form id="ssecondForm" class="form" autocomplete="off">
						<input name="uphone" type="tel" class="phone" tabindex="0"  placeholder="+7XXX-XX-XX-XXX" />
					<input title="Заказ по Акции" name="formInfo" class="linkButt formInfo" type="hidden" value=""/>
						<input type="submit" class="linkButton input_button formBtn" value="Обратный звонок" />
				</form>
			</div>
		</div>
		<section id="services">
			<div class="container">
				<div class="heading">
					<h4>НАШИ ПРЕИМУЩЕСТВА</h4>
					<hr>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="service-item fadeInDown">
							<div class="circle circle-l"><i class="fa fa-rub fa-3x" aria-hidden="true"></i></div>
							<h3>ДЕШЕВО</h3>
							<p class="font-m">Наши цены в среднем на 15-25% <br> ниже чем у наших конкурентов</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-item fadeInUp">
							<div class="circle circle-l"><i class="fa fa-check-square-o fa-3x" aria-hidden="true"></i></div>
							<h3>ЧИСТО</h3>
							<p class="font-m">После наших работ <br> ВСЕГДА чисто.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-item fadeInDown">
							<div class="circle circle-l"><i class="fa fa-diamond fa-3x" aria-hidden="true"></i></div>
							<h3>ОПЫТ</h3>
							<p class="font-m">У наших сотрудников опыт <br>более 5 лет</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-item fadeInUp">
							<div class="circle circle-l"><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i></div>
							<h3>СЕРТИФИЦИРОВАННЫЕ  СПЕЦИАЛИСТЫ</h3>
							<p class="font-m">Все наши сотрудники сертифицированы</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-item fadeInUp">
							<div class="circle circle-l"><i class="fa fa-gear fa-3x"></i></div>
							<h3>ПРОФЕССИОНАЛЬНЫЙ  ИНСТРУМЕНТ </h3>
							<p class="font-m">Для контроля качества работы и <br>воизбежание  травм </p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="service-item fadeInUp">
							<div class="circle circle-l"><i class="fa fa-eye fa-3x"></i></div>
							<h3>ВСЕ ЧЕСТНО</h3>
							<p class="font-m">На сайте представлены <a href="">прайсы</a> работ -<br> Вы гарантированно получите честную <br>цену без “наценки менеджера”</p>
						</div>
					</div>
				</div>
			</div>
			<div class="branded-section process">
				<div class="masked">
					<div class="container">

					</div>
				</div>
			</div>
		</section>
		<section id="about">
			<div class="container">
				<div class="heading">
					<h4>Услуги</h4>
					<hr>
				</div>
				<div>
					<!--Galeri-->
					<ul class="full-catalog clearfix" >
						<li class="col-xs-6 catalog-item web-design clearfix">
							<a class="linkButton" data-remodal-target="secondModal" title="Монтаж кондиционеров">
								<img src="img/catalog/picture1.jpg" class="img-responsive" alt="Фото каталога">
								<ul class="bottom_line">
									<li>Монтаж кондиционеров от 6 900руб</li>
									<li>Заказать</li>
								</ul>
								<div class="mask">
									<h6>Монтаж кондиционеров от 6 900руб</h6>
									<hr>
									<p class="font-m">Заказать</p>
								</div>
							</a>
						</li>
						<li class="col-xs-6 catalog-item ">
							<a class="linkButton" data-remodal-target="secondModal" title="Обслуживание кондиционеров">
								<img src="img/catalog/picture2.jpg" class="img-responsive" alt="Фото каталога">
								<ul class="bottom_line">
									<li>Обслуживание кондиционеров от 950руб</li>
									<li>Заказать</li>
								</ul>
								<div class="mask">
									<h6>Обслуживание кондиционеров от 950руб</h6>
									<hr>
									<p class="font-m">Заказать</p>
								</div>
							</a>
						</li>
						<li class="col-xs-6 catalog-item web-design">
							<a class="linkButton" data-remodal-target="secondModal" title="Ремонт кондиционеров">
								<img src="img/catalog/picture3.jpg" class="img-responsive" alt="Фото каталога">
								<ul class="bottom_line">
									<li>Ремонт кондиционеров от 1 400руб</li>
									<li>Заказать</li>
								</ul>
								<div class="mask">
									<h6>Ремонт кондиционеров от 1 400руб</h6>
									<hr>
									<p>Заказать</p>
								</div>
							</a>
						</li>
						<li class="col-xs-6 catalog-item web-design">
							<a class="linkButton" data-remodal-target="secondModal" title="Обслуживание систем вентиляции">
								<img src="img/catalog/picture4.jpg" class="img-responsive" alt="Фото каталога">
								<ul class="bottom_line">
									<li>Обслуживание систем вентиляции</li>
									<li>Заказать</li>
								</ul>
								<div class="mask">
									<h6>Обслуживание систем вентиляции</h6>
									<hr>
									<p>Заказать</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>


		<section>
			<div class="block_action">
				<div class="container">
					<h2>Успей!</h2>
					<p>При заказе комплексного обслуживания <br><span>дезинфекция  в подарок</span></p>
					<div class="timer">
						<p>ОСТАЛОСЬ ВСЕГО</p>
						<script src="http://megatimer.ru/s/4a1664dfd22e2b160f7a985b0348d49b.js"></script>
						<div id="countdown"></div>
					</div>
					<form id="ssecondForm" class="form" autocomplete="off">
						<input name="uphone" type="tel" class="phone" tabindex="0"  placeholder="+7XXX-XX-XX-XXX" />
					<input title="Заказ по Акции" name="formInfo" class="linkButt formInfo" type="hidden" value=""/>
						<input type="submit" class="linkButton input_button formBtn" value="Обратный звонок" />
				</form>
				</div>
			</div>
			<div class="branded-section skills">
				<div class="masked">
					<div class="container">
						<div class="heading">
							<h4>ПРАЙСЫ</h4>
							<hr>
							<p>Ниже Вы можете ознакомиться с прайсами  по разным направлениям услуг, видов работ и расходным материалам. Для этого кликните на интересующую Вас ссылку и прайс откроется в новом окне:
							</p>
							<ul class="linc_price">
								<li><a href="pdf/Complex_service.pdf" target="_blank">Комплексное сервисное обслуживание кондиционеров</a></li>
								<li><a href="pdf/Maintenance_and_repair.pdf" target="_blank">Сервисное обслуживание и ремонт кондиционеров</a></li>
								<li><a href="pdf/Installation_conditioners.pdf" target="_blank">Стандартный монтаж кондиционеров настенных, канальных, кассетных напольно-потолочных и мульти-систем</a></li>
								<li><a href="pdf/Price_works.pdf" target="_blank">Цены на дополнительные работы, выполняемые при установке кондиционеров</a></li>
								<li><a href="pdf/Materials_price.pdf" target="_blank">Стоимость дополнительных расходных материалов</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>


			<section class="catalog" id="catalog">
				<div class="container">
					<div class="heading">
						<h4>О нас</h4>
						<hr class="divider">
						<div class="divider"><span></span></div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="about-item">
								<div class="circle pull-left">
									<i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
								</div>
								<h4>Работа по Москве и МО</h4>
								<p class="font-m">Компания Ремклимат работает с выездами по всей МО.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="about-item delay2">
								<div class="circle pull-left">
									<i class="fa fa-clock-o fa-3x"></i>
								</div>
								<h4>Без перерывов и выходных</h4>
								<p class="font-m">Компания Ремклимат проедоставляет услуги без перерывов и выходных для удобства клиента.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="about-item delay3">
								<div class="circle pull-left">
									<i class="fa fa-diamond fa-3x"></i>
								</div>
								<h4>Надежность</h4>
								<p class="font-m">В нашем сервисном центре и более 10-ти профессиональных мастеров с опытом <br>работы более 5 лет, они ежегодно повышают квалификацию от производителей оборудования.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="about-item delay4">
								<div class="circle pull-left">
									<i class="fa fa-star fa-3x" aria-hidden="true"></i>
								</div>
								<h4>Лояльность</h4>
								<p class="font-m">У нас отдельные предложения для крупных объектов <br>и больших заказов. При обслуживании от 5 кондиционеров  стоимость просчитывается отдельно <br>с учетом скидки.</p>
							</div>
						</div>
					</div>
					<h3>Remclimat работает со всеми брендами</h3>
					<table class="company_logos">
						<tr>
							<td><img src="img/logos/daikin.png" alt="Логотип компании"></td>
							<td><img src="img/logos/samsung.png" alt="Логотип компании"></td>
							<td><img src="img/logos/kentatsu.png" alt="Логотип компании"></td>
							<td><img src="img/logos/toshiba.png" alt="Логотип компании"></td>
							<td><img src="img/logos/panasonic.png" alt="Логотип компании"></td>
							<td><img src="img/logos/general_climate.png" alt="Логотип компании"></td>
						</tr>
						<tr>
							<td><img src="img/logos/hitachi.png" alt="Логотип компании"></td>
							<td><img src="img/logos/zanussi.png" alt="Логотип компании"></td>
							<td><img src="img/logos/lg.png" alt="Логотип компании"></td>
							<td><img src="img/logos/electrolux.png" alt="Логотип компании"></td>
							<td><img src="img/logos/gree.png" alt="Логотип компании"></td>
							<td><img src="img/logos/mitsubishi.png" alt="Логотип компании"></td>
						</tr>
					</table>
				</div>
				<div class="branded-section numbers">
					<div class="masked">
						<div class="container">
							<div class="heading">
								<h2>REMCLIMAT ЭТО</h2>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="number-item"><p class="number">&#62;
										<span id="clientsCounter" data-count="3000" data-duration="2">3000</span></p>
										<span class="text">счасливых клиентов</span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="number-item"><p class="number">&gt;
										<span id="projectCounter" data-count="20000" data-duration="2">20 000</span></p>
										<span class="text">м проложеной трассы<sup>2</sup></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="number-item"><p class="number">
										<span id="awardCounter" data-count="7" data-ration="1.5">17</span></p>
										<span class="text">городах наши объекты</span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="number-item"><p class="number">
										<span id="coffeeCounter" data-count="21550" data-duration="3">937</span></p>
										<span class="text">подписаных договоров</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		<!--<div class="container">
			<div class="heading">
				<p></p>
			</div>
			<div style="text-align:center; margin-bottom: 50px">
				<a href="#contact" class="btn btn-primary"></a>
			</div>
		</div>-->

		
	</section>
	<div class="block_action">
		<div class="container">
			<h2>Успей!</h2>
			<p>При заказе комплексного обслуживания <br><span>дезинфекция  в подарок</span></p>
			<div class="timer">
				<p>ОСТАЛОСЬ ВСЕГО</p>
				<script src="http://megatimer.ru/s/4a1664dfd22e2b160f7a985b0348d49b.js"></script>
				<div id="countdown"></div>
			</div>
			<form id="ssecondForm" class="form" autocomplete="off">
						<input name="uphone" type="tel" class="phone" tabindex="0"  placeholder="+7XXX-XX-XX-XXX" />
					<input title="Заказ по Акции" name="formInfo" class="linkButt formInfo" type="hidden" value=""/>
						<input type="submit" class="linkButton input_button formBtn" value="Обратный звонок" />
				</form>
		</div>
	</div>



	<section class="portfolio" id="portfolio">
		<div class="container">
			<div class="heading">
				<h4>Проекты</h4>
				<hr>
			</div>
			<div id="single-project"></div>
			<ul class="full-portfolio clearfix" id="Grid">
				<li class="col-xs-4 catalog-item web-design">
					<img src="img/portfolio/portfolio_1.jpg" class="img-responsive" alt="Портфолио">
					<!--<a class="transition" href="#">
						<div class="mask">
							<h4></h4>
							<div class="divider"><span></span></div>
							<p class="font-m">2014</p>
						</div>
					</a>-->
				</li>
				<li class="col-xs-4 catalog-item web-design">
					<img src="img/portfolio/portfolio_2.jpg" class="img-responsive" alt="Портфолио">
					<!--<a class="transition" href="#">
						<div class="mask">
							<h4></h4>
							<div class="divider"><span></span></div>
							<p class="font-m">2014</p>
						</div>
					</a>-->
				</li>
				<li class="col-xs-4 catalog-item web-design">
					<img src="img/portfolio/portfolio_3.jpg" class="img-responsive" alt="Портфолио">
					<!--<a class="transition" href="#">
						<div class="mask">
							<h4></h4>
							<div class="divider"><span></span></div>
							<p class="font-m">2014</p>
						</div>
					</a>-->
				</li>
				<li class="col-xs-4 catalog-item web-design">
					<img src="img/portfolio/portfolio_4.jpg" class="img-responsive" alt="Портфолио">
					<!--<a class="transition" href="#">
						<div class="mask">
							<h4></h4>
							<div class="divider"><span></span></div>
							<p class="font-m">2014</p>
						</div>
					</a>-->
				</li>
				<li class="col-xs-4 catalog-item web-design">
					<img src="img/portfolio/portfolio_5.jpg" class="img-responsive" alt="Портфолио">
					<!--<a class="transition" href="#">
						<div class="mask">
							<h4></h4>
							<div class="divider"><span></span></div>
							<p class="font-m">2014</p>
						</div>
					</a>-->
				</li>
				<li class="col-xs-4 catalog-item web-design">
					<img src="img/portfolio/portfolio_6.jpg" class="img-responsive" alt="Портфолио">
					<!--<a class="transition" href="portfolio/apartamenti-na-krassnoi-presne.html">
						<div class="mask">
							<h4></h4>
							<div class="divider"><span></span></div>
							<p class="font-m">2014</p>
						</div>
					</a>-->
				</li>								
			</ul>
		</div>


		<div class="branded-section quote">
			<div class="masked">
				<div class="container">
					<form>
						<input type="tel" class="phone" pattern="\+7\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}\-[0-9]{3}" placeholder="+7XXX-XX-XX-XXX">
						<input type="submit" class="formBtn linkButton input_button" value="ЗАКАЗАТЬ" />
						<!-- <input type="submit" value="Отправить">-->
					</form>
				</div>
			</div>
		</div>
	</section>
	<section id="contact" class="gray">
		<div class="container">
			<div class="heading">
				<h4>Контакты</h4>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-4 adress-element ">
					<i class="fa fa-home fa-3x"></i>
					<h3>АДРЕС</h3>
					<span class="font-l">г. Москва, Алтуфьевское шоссе 37 БЦ Аврора</span>
				</div>
				<div class="col-md-4 adress-element delay2">
					<i class="fa fa-comment fa-3x"></i>
					<h3>E-mail</h3>
					<span class="font-l">remclimat@yandex.ru</span>
				</div>
				<div class="col-md-4 adress-element delay4">
					<i class="fa fa-phone fa-3x"></i>
					<h3>ТЕЛЕФОНЫ</h3>
					<span class="font-l">+7 (499) 755-86-37 <br>+7 (926) 857-30-02 </span>
				</div>
			</div>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2238.87533185612!2d37.58093969125874!3d55.86482936981278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b53708adaee06f%3A0x6858721f088b9444!2z0JDQu9GC0YPRhNGM0LXQstGB0LrQvtC1INGILiwgMzcsINCc0L7RgdC60LLQsCwg0KDQvtGB0YHQuNGPLCAxMjc0MTA!5e0!3m2!1sru!2sua!4v1474735670709" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>

	<footer>
		<div class="container">
			<p>&copy; COPYRIGHT. REMCLIMAT 2016 ALL RIGHT RESERVED.
				<!-- <a href="http://slepchenko.com" target="_blank">Site designed by Ekaterina Slepchenko</a>-->
			</p>
			<a href="#home" class="square-l goup" style="position: relative">
				<span>
					<span class="fa fa-angle-double-up fa-2x"></span>
					<span class="fa fa-angle-double-up fa-2x"></span>
					<span class="fa fa-angle-double-up fa-2x"></span>
					<span class="fa fa-angle-double-up fa-2x"></span>
					<span class="fa fa-angle-double-up fa-2x"></span>
				</span>
			</a>
		</div>
	</footer>
</div>
<!-- Load all jsavascrip files -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>
<script type="text/javascript" src="js/jquery.label_better.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.js"></script>
<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
<script type="text/javascript" src="js/jquery.inview.js"></script>
<script type="text/javascript" src="js/countUp.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/grid.js"></script>
<script>
	$(function() {
		Grid.init();
	});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                $('#test_modal').on('show.bs.modal', function (f) {
                    var content = $(f.relatedTarget).data('content');
                    $('#content_for_change').html('<p>' + content + '</p>');
                });
            });
        </script>


<script type="text/javascript">
	$(".linkButton").click(function() {
		$( "input[name*='formInfo']" ).val($(this).attr( "title" ));
	});
</script>
<script src="modalform/libs/remodal/remodal.min.js"></script>
<script src="modalform/js/form.js"></script>
</body>
</html>