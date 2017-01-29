
<!DOCTYPE html>
<html lang="ru">
    <head>
          <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="css/glisse.css?1" />
    <link rel="stylesheet" href="css/app.css?1" />
	<title>Ремонт квартир и офисов в Минске</title>
    
  
	
<link href="css/template.css" type="text/css"  data-template-style="true"  rel="stylesheet" />


<link rel="shortcut icon" href="/img/fav1.png" type="image/png">

<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput-1.2.2.js"></script>



<script type="text/javascript">
    jQuery(function($) {
        $.mask.definitions['~']='[+-]';

        $('#phoner').mask('(9999) 999-99-99');

    });</script>

        
                <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="top_block">
    <div class="container">
        <div class="row">
            <div class="col-md-8 logo">
                <img src="/img/logo.png" alt="логотип" />            </div>
            <div class="col-md-4 phone-right">
                <span class=""><h2> +375 (29) 705-80-04<h2></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/img/remont.png" class="img-responsive img_price_btna" alt="ремонт квартир и офисов" />            </div>
            <div class="col-md-6">
                <h1 class="h1">Ремонт квартир и офисов <br /> любой сложности под ключ</h1>
<ul class="ul_check">
<li>Гарантия на ремонт 1 год</li>
<li>Наличный и безналичный расчет</li>
<li>Бесплатный выезд замерщика и составление сметы</li>
<li>Выгодные цены и четкие скроки ремонта</li>
<li>Опыт на рынке внутренней отделки – 5 лет</li>
<li>Работа по договору</li>
</ul>
<a href="#job" class="nav_scroll btn btn-orange">Наши работы</a>
<a href="#price" class="nav_scroll btn btn-orange">Цены</a>
<a href="#contacts" class="nav_scroll btn btn-orange">Контакты</a>            </div>
        </div>
    </div>

<section>
    <div class="container text-center fs16">
        <br />
        <p>Смело обращайтесь в нашу компанию, и наши дизайнеры помогут вам подобрать «золотую середину» вашего ремонта, ведь мы работаем для Вас, чтобы выработать идеальный вариант трансформации вашего дома или офиса, причем с учетом вашей индивидуальной ситуации. </p>    </div>
</section>
<section class=" container " id="portfolio-section">
        <div id="job">
        
		<div class="col-md-12 text-center">
		<h2 class="h-up">Наши работы</h2><br>
		</div>
		
		
		
        <div id="content">

            <?php foreach ($test as $el => $tt) : ?>

                <?php if($el == '1') : ?>

                <ul class="stack" data-count="Ванные <?php echo (count($tt)); ?>">

                    <?php endif;?>
                    <?php if($el == '2') : ?>

                    <ul class="stack" data-count="Гаражи <?php echo (count($tt)); ?>">

                        <?php endif;?>
                        <?php if($el == '3') : ?>

                        <ul class="stack" data-count="Комнаты <?php echo (count($tt)); ?>">

                            <?php endif;?>
                            <?php if($el == '4') : ?>

                            <ul class="stack" data-count="Коридоры <?php echo (count($tt)); ?>">

                                <?php endif;?>
                                <?php if($el == '5') : ?>

                                <ul class="stack" data-count="Кухни <?php echo (count($tt)); ?>">

                                    <?php endif;?>
                                    <?php if($el == '6') : ?>

                                    <ul class="stack" data-count="Роспись <?php echo (count($tt)); ?>">

                                        <?php endif;?>
                                        <?php if($el == '7') : ?>

                                        <ul class="stack" data-count="Реставрация <?php echo (count($tt)); ?>">

                                            <?php endif;?>


                <?php foreach ($tt as $rr) : ?>


                        <li><img src="/img/img_small/<?php echo $el; ?>/<?php echo $rr; ?>" rel="<?php echo $el; ?>" data-glisse-big="/img/img_big/<?php echo $el; ?>/<?php echo $rr; ?>" class="tl"  /></li>




                <?php endforeach; ?>
                </ul>
            <?php endforeach; ?>

        </div>
            </div>
    </section>
<section>
    <div id="price" class="container">
        <div class="row-fluid">
            <div class="col-md-12 text-center">
                <h2 class="h-up">Цены на ремонт</h2>
                <hr />
                <p>Наши цены самые демократичные на рынке ремонта квартир и офисов в Минске и Минской области. Ориентировочные расценки на ремонт квартир и офиса приведены ниже в таблице. Более подробный прайс, Вы можете скачать по ссылке &laquo;Скачать прайс (.xls)&raquo;.</p><p>Произвести более точный расчет Вам помогут специалисты нашей фирмы, проведя на месте оценку состояния квартиры или офиса и составив смету.</p>                <hr />
            </div>
        </div>
         <div class="row-fluid">
                <div class="col-md-9">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Услуга</th>
                            <th class="text-center">Цена</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr id="bx_3218110189_13">
                            <th class="text-center" scope="row">1</th>
                            <td>Косметический ремонт офиса</td>
                            <td class="text-center">от 30 у.е/кв.м</td>
                        </tr>

                        <tr id="bx_3218110189_14">
                            <th class="text-center" scope="row">2</th>
                            <td>Косметический ремонт квартиры</td>
                            <td class="text-center">от 30 у.е/кв.м</td>
                        </tr>
                        <tr id="bx_3218110189_15">
                            <th class="text-center" scope="row">3</th>
                            <td>Капитальный ремонт квартиры</td>
                            <td class="text-center">от 70 у.е/кв.м</td>
                        </tr>
                        <tr id="bx_3218110189_15">
                            <th class="text-center" scope="row">4</th>
                            <td>Евроремонт квартиры</td>
                            <td class="text-center">от 90 у.е/кв.м</td>
                        </tr>


                        </tbody>
                    </table>
                </div>
                <div class="col-md-3 text-center">
                    <br/>
                    <img src="/img/icon-download.png" class="img-responsive img_price_btna" alt="цены на ремонт"><a
                        class="btn btn-orange" target="_blank" href="/upload/price.xls">Скачать прайс (.xls)</a></div>
            </div>
    </div>
</section>
    <section id="contacts">
        <div class="container">
            <div class="row-fluid">
                <div class="col-md-12 text-center">
                    <h2 class="center" style="padding: 10px 0 10px;">

                        <h2 class="h-up">Контакты</h2><br>

                    </h2>

                    <p>Менеджеры компании с радостью ответят на все Ваши вопросы, произведут расчет
                        стоимости услуг и
                        подготовят индивидуальное коммерческое предложение.</p></div>
            </div>
            <div class="row-fluid">
                <div class="col-md-4 text-center">

                    <br/><br/><br/>
                    <h3 class="h-up text-center">Наши группы</h3>

                    <a href="https://vk.com/proremotbelarus" target="_blank" rel="nofollow"><img src="/img/icon-vk.png"
                                                                                                 alt="ВКонтакте"
                                                                                                 class="img-responsive img_price_btna"/></a>
                    <br/>
                    <a href="http://ok.ru" target="_blank" rel="nofollow"><img src="/img/icon-ok.png"
                                                                               alt="одноклассники"
                                                                               class="img-responsive img_price_btna"/></a>
                </div>
                <div class="col-md-8">
                    <h3 class=" text-center ">Форма обратной связи</h3>

                    <div id="comp_e730ef60baf9c801246acf2d5fee67b6">
                        <div id="bxdynamic_Uu0i2y">


                            <form action="/?act=Mail" method="POST" class="form-horizontal">


                                <div class="form-group">
                                    <div class="col-sm-1"></div>
                                    <label for="user_name" class="col-sm-2 control-label text-left">
                                        Ваше имя:<span class="mf-req">*</span> </label>
                                    <div class="col-sm-8">
                                        <input type="text" id="user_name" name="user_name" class="form-control"
                                               value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-1"></div>
                                    <label for="user_email" class="col-sm-2 control-label text-left">
                                        Ваш e-mail:<span class="mf-req">*</span> </label>
                                    <div class="col-sm-8">
                                        <input type="email" id="user_email" name="user_email" class="form-control"
                                               value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-1"></div>
                                    <label for="user_email" class="col-sm-2 control-label text-left">
                                        Телефон:<span class="mf-req">*</span> </label>
                                    <div class="col-sm-8">
                                        <input type="text"  id="phoner" name="user_phone" class="form-control"
                                               value="" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-1"></div>
                                    <label for="MESSAGE" class="col-sm-2 control-label text-left">
                                        Сообщение:<span class="mf-req">*</span> </label>
                                    <div class="col-sm-8">
                                    <textarea id="MESSAGE" name="message" rows="5" cols="40" required
                                              class="form-control"></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-8">


                                       <input type="submit" name="sub" class="btn btn-orange"  value="Отправить">
                                      
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-md-12"></div><hr /></div></div>
    </div>
</section>
    <section>
        <div class="container">
            <div class="row-fluid">
                <div class="col-md-12 text-center">
				<br>
                    <span class=""><h3> +375 (29) 705-80-04<h3></span>

				<div><a href="mailto:contact@pako.by">contact@pako.by</a></div> <br>
                    © 2015-2016. Ремонт квартир и офисов в Минске.                    <br /><br /><div id="bx-composite-banner">&nbsp;</div>

                </div>
            </div>
        </div>
    </section>
   <div id="scrollup"><img alt="up" src="/img/up.png"/></div>
<!-- JS -->
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="js/glisse.js"></script>
<script>
    $(function () {
        $('.tl').glisse({speed: 500, changeSpeed: 550, effect:'roll', fullscreen: false});
        $('#changefx').change(function() {
            var val = $(this).val();
            $('.tl').each(function(){
                $(this).data('glisse').changeEffect(val);
            });
        });
    });
</script>
<div id="scrollup"><img alt="up" src="/img/up.png"/></div>


<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>
    
  </body>
</html>