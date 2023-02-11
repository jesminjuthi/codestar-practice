<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        wp_head();
    ?>
</head>
<body>
    <div class="logo text-center">  
        <?php 
            $logo = codestar_get_option('logo');
        ?>     
        <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt']; ?>">
    </div>
    <h1 class="heading1" style="background-color: <?php echo codestar_get_option('bg-color') ?>; color:<?php echo codestar_get_option('color') ?>;">
        <?php 
            echo codestar_get_option('text');
        ?>
    </h1>

    <p class="para">
        <?php 
            echo codestar_get_option('textarea');
        ?>
    </p>

    <?php 
        if(codestar_get_option('btn-hs') == true) : 
    ?>
        <button class="btn-1 btn btn-primary py-2 px-5 m-auto d-block"> 
            <?php 
                echo codestar_get_option('btn-label');
            ?>    
        </button>
    <?php 
        endif;
    ?>

    <?php 
        if(codestar_get_option('hs_share_btn') == true) : 
    ?>
    <div class="share-btn">
        <ul>
            <?php 
                $share_options = codestar_get_option('share-btn-grp');
                foreach($share_options as $share_option) :
            ?>
            <li>
                <a href="<?php echo $share_option['social_link']; ?>" style="color: <?php echo codestar_get_option('social_icon_color'); ?>">
                    <i class="<?php echo $share_option['icon']; ?>"></i>
                </a>
            </li>
            <?php 
                endforeach;
            ?>
        </ul>
    </div>

    <?php 
        endif;
    ?>

    <footer>
        <p>
            <?php 
                echo codestar_get_option('copyright');
            ?>
        </p>
    </footer>

    <?php 
        wp_footer();
    ?>
</body>
</html>