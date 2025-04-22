<div class="services-details-area default-padding">
    <div class="container">
        <div class="services-details-items">
            <div class="row">
                <div class="col-lg-4 services-sidebar order-last order-lg-first">
                    <!-- Single Widget -->
                    <div class="single-widget services-list">
                        <h4 class="widget-title"><?php echo $isLang ? "Servicios":"Services" ?> </h4>
                        <div class="content">
                            <ul>
                                <?php foreach ($services as $service): ?>
                                    <li class="<?= $_REQUEST['service']== $service['link'] ? 'current-item' : '' ?>"><a href="?page=our-proposal&service=<?= $service['link'] ?><?php echo($_REQUEST['lang']=='es') ?'&lang=es' :'&lang=en'?>"><?= $service['title'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 services-single-content">
                    <?php
                    foreach ($services as $service):
                        if ($_REQUEST['service'] == $service['link']):
                    ?>
                            <img src="<?= $service['image'] ?>" alt="Thumb">
                            <h2><?= $service['title'] ?></h2>
                            <h4><?= $service['sub-content'] ?></h4>

                            <?= $service['content'] ?>
                            <div class="services-style-eight">
                                <div class="content-ender">
                                    <?= $service['content-ender'] ?>
                                   <p> <a class="btn circle btn-theme effect btn-md my-4" href="./?page=contact-us<?php echo($_REQUEST['lang']=='es') ?'&lang=es' :'&lang=en'?>"><?= $service['content-ender-button'] ?></a></p>
                                </div>
                            </div>
                    <?php endif;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>