<?php /* Template Name: Страница Контакты */
get_header();
$help_mail = get_field('help_mail','option');
$sell_mail = get_field('sell_mail');
$sell_tg = get_field('sell_tg','option');
$sell_phone = get_field('sell_phone','option');
$warranty_mail = get_field('warranty_mail','option');
$pr_mail = get_field('pr_mail','option');
$hire_tg = get_field('hire_tg','option');
$title_1 = get_field('title_1');
$title_2 = get_field('title_2');
$title_3 = get_field('title_3');
$title_4 = get_field('title_4');
$title_6 = get_field('title_6');
$title_7 = get_field('title_7');
$red_1= get_field('red_1');
$title_8 = get_field('title_8');
$title_9 = get_field('title_9');
$title_10 = get_field('title_10');
$title_11 = get_field('title_11');
$title_12 = get_field('title_12');
$title_13 = get_field('title_13');
$title_14 = get_field('title_14');
$title_15 = get_field('title_15');
$title_16 = get_field('title_16');
$title_17 = get_field('title_17');
$title_18 = get_field('title_18');
$title_19 = get_field('title_19');
?>

<div class="main main--contacts">
    <img class="circle1" src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor1.svg"
        alt=""><img class="circle2"
        src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/decor2.svg" alt=""><img
        class="decor1" src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/sosi 1.svg"
        alt="">
    <div class="container-bordering">
        <div class="main-header"><?php echo get_the_title();?></div>
        <div class="support-section">
            <div class="support-section__header"><?=$title_1?></div>
            <div class="support-section__par"> <?=$red_1?>
            </div>
        </div>
        <div class="questions-section">
            <div class="questions-section__card">
				<div class="questions-section__header"> <?=$title_8?>
                </div>
				<div class="questions-section__link"><a href="tel:<?=$title_9?>"><?=$title_9?></a></div>
                <div class="questions-section__link"> <img
                        src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/tg-logo.svg"
                        alt=""><a href="https://t.me/<?=$title_10?>" target="_blank" ><?=$title_10?></a></div>
                <div class="questions-section__link"> <a href="mailto:<?=$title_11?>"><?=$title_11?>
                    </a></div>
				</div>
            <div class="questions-section__card">
                <div class="questions-section__header"> <?=$title_12?>
                </div>
                <div class="questions-section__link"><a href="mailto:<?=$title_13?>"><?=$title_13?>
                    </a></div>
            </div>
            <div class="questions-section__card">
                <div class="questions-section__header"> <?=$title_14?></div>
                <div class="questions-section__subheader"> <?=$title_15?></div>
                <div class="questions-section__link"><a href="mailto:<?=$title_16?>"><?=$title_16?></a>
                </div>
            </div>
            <div class="questions-section__card">
                <div class="questions-section__header"><?=$title_17?></div>
                <div class="questions-section__subheader"> <?=$title_18?>
                </div>
                <div class="questions-section__link"> <img
                        src="http://sputnik.dev-tmweb.ru/wp-content/themes/sputnik/assets/images/content/tg-logo.svg"
                        alt=""><a href="https://t.me/<?=$title_19?>" target="_blank" ><?=$title_19?></a></div>
            </div>
        </div>
        <div class="info-section">
            <div class="info-section__header">Реквизиты</div>
            <div class="info-section__subheader"><?=$title_2?></div>
            <div class="info-section__subheader">Юридический адрес:</div>
            <div class="info-section__text"><?=$title_3?></div>
            <div class="info-section__subheader">Почтовый адрес:</div>
            <div class="info-section__text"><?=$title_4?></div>
            <div class="info-section__row">
                <div class="info-section__subheader">Электронная почта:</div>
                <a class="info-section__text" href="mailto:<?=$sell_mail?>"><?=$sell_mail?></a>
            </div>
            <div class="info-section__row">
                <div class="info-section__subheader">ИНН:</div>
                <div class="info-section__text"><?=$title_6?></div>
            </div>
            <div class="info-section__row">
                <div class="info-section__subheader">КПП: </div>
                <div class="info-section__text"><?=$title_7?></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();