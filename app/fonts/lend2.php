<?php
/*
Template Name: MainPage
*/
?>
<?php get_header(); ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(68261524, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/68261524" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<section class="header-banner-section">
    <div class="container">

        <div class="header-banner">

            <div class="logo">
                <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="mindflex logo">
            </div>

            <div class="header-banner-content">
                <div class="row flex-lg-row-reverse">
                    <div class="col-lg-6">
                        <img src="<?php echo CFS()->get('banner-image'); ?>" class="banner-image" alt="managers">
                    </div>

                    <div class="col-lg-6">
                        <div class="banner-start-time">
                            <?php echo CFS()->get('banner_title_title'); ?>
                        </div>
                        <div class="banner-title">
                            <?php echo CFS()->get('banner_title'); ?>
                        </div>
                        <div class="banner-subtitle">
                            <?php echo CFS()->get('banner_subtitle'); ?>
                        </div>
                        <div class="banner-gray-subtitle">
                            <?php echo CFS()->get('banner-gray-subtitle'); ?>
                        </div>
                        <div class="gift-area">
                            <a href="#mainForm" class="main-button banner-button navigate-btn">Зарегистрироваться</a>
                            
                            <div class="gift-area-min">
                                <img src="<?php echo get_template_directory_uri()?>/img/gift.png" alt="">
                                <div class="gift-test">

                                    Чек-лист <br> "7 смертельных грехов продаж"
                                    в подарок
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


<section class="vebinar-section">
    <div class="container">
        <div class="h1">
            <?php echo CFS()->get('webinar-title'); ?>
        </div>

        <div class="row webinar-row">

            <?php
            /***
             * Цикл блоков
             *
             **/
            $fields = CFS()->get('webinar-loop');
            if (!empty($fields)):
                foreach ($fields as $field) {
                    ?>


                    <div class="col-lg-3">
                        <div class="webinar-card">
                            <div class="webinar-card-image">
                                <img src="<?= $field['loop-image']; ?>" alt="">
                            </div>
                            <div class="webinar-card-description">
                                <?= $field['loop-description']; ?>
                            </div>
                        </div>
                    </div>

                    <?php
                };
            endif; ?>

        </div>


        <div class="learn-area">
            <div class="h1">
                <?php echo CFS()->get('webinar-title2'); ?>
            </div>
            <div class="learn-row row align-items-center justify-content-end">
                <?php echo CFS()->get('webinar-description2'); ?>
            </div>

            <a href="#mainForm" class="main-button learn-button navigate-btn">Зарегистрироваться</a>
        </div>
    </div>

</section>


<section class="do-section">
    <div class="container">

        <?php
        /***
         * Цикл блоков
         *
         **/
        $fields = CFS()->get('gray-loop');
        $i = 1;
        if (!empty($fields)):
            foreach ($fields as $field) {
                ?>

                <div class="do-row row  <?php if ($i==1){echo 'flex-row-reverse';}?> align-items-center">
                    <div class="col-lg-6">
                        <img src="<?= $field['gray-image']; ?>" class="do-image <?php if ($i==1){echo 'right-side';}?>" alt="type">
                    </div>
                    <div class="col-lg-6">
                        <div class="h1 align-left <?php if ($i==2){echo 'do-list-padding';}?>">
                            <?= $field['gray-title']; ?>
                        </div>
                        <ul class="do-list <?php if ($i==2){echo 'do-list-padding';}?>">
                            <?= $field['gray-description']; ?>
                        </ul>
                    </div>
                </div>

                <?php
                $i++;
            };
        endif; ?>
    </div>
</section>




<section class="red-banner-section">
    <div class="container">
        <div class="h1 text-white">
            <?php echo CFS()->get('red-banner-title'); ?>
        </div>
        <div class="red-banner-title">
            <?php echo CFS()->get('red-banner-subtitle'); ?>
        </div>
        <div class="red-banner-subtitle">
            <?php echo CFS()->get('red-banner-subscribe'); ?>
        </div>

        <a href="#mainForm" class="main-button red-banner-button navigate-btn">Зарегистрироваться</a>
    </div>
</section>




<section class="speaker-section">
    <div class="container">
        <div class="h1">
            <?php echo CFS()->get('speake-title'); ?>
        </div>

        <div class="speaker-row row">
            <?php
            /***
             * Цикл блоков
             *
             **/
            $fields = CFS()->get('speakers-loop');
            if (!empty($fields)):
                foreach ($fields as $field) {
                    ?>
                    <div class="col-lg-6">
                        <div class="speaker-card row no-gutters">
                            <div class="col-lg-6">
                                <img src="<?= $field['speaker-loop-image']; ?>" alt="ava">
                            </div>
                            <div class="speaker-card-description col-lg-6">
                                <div class="speaker-card-name">
                                    <span></span>
                                    <?= $field['speaker-loop-name']; ?>
                                </div>
                                <ul class="speaker-card-list">
                                    <?= $field['speaker-loop-description']; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                };
            endif; ?>

        </div>
    </div>
</section>


<section class="registration-section" >
    <div class="container">
        <div class="h1" id="mainForm">Регистрируйся на вебинар </div>
        <div class="h2">Регистрируйся на вебинар и получи чек-лист "7 смертельных грехов продаж" </div>




        <div class="contact-form-row">

            <?php echo do_shortcode('[contact-form-7 id="7" title="Контактная форма 1"]')?>

            <div class="form-privacy">
                Отправляя данную форму, вы даете согласие на обработку своих
                <a href="">персональных данных</a>
            </div>


        </div>


    </div>




    <div class="copyright">
        © 2020 <b>MINDFLEX</b>. all rights reserved
    </div>

</section>


<div style="display: none;" id="hidden-content">
    <div class="h2">Регистрируйся на вебинар и получи чек-лист "7 смертельных грехов продаж" </div>
    <div class="contact-form-row no-margin" style="box-shadow: 0 0 0 0">

        <?php echo do_shortcode('[contact-form-7 id="27" title="Контактная форма 1_copy"]')?>

        <div class="form-privacy">
            Отправляя данную форму, вы даете согласие на обработку своих
            <a href="">персональных данных</a>
        </div>


    </div>
</div>





<?php get_footer(); ?>
