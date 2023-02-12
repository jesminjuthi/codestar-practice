<?php 
  get_header();
?>
  <div class="logo text-center">
    <?php
      $logo = codestar_get_option('logo');
    ?>
    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
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
    if (codestar_get_option('btn-hs') == true) :
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
    if (codestar_get_option('hs_share_btn') == true) :
  ?>
    <div class="share-btn">
      <ul>
        <?php
        $share_options = codestar_get_option('share-btn-grp');
          foreach ($share_options as $share_option) :
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

  <!-- team section -->
  <?php
  $team_sec_title = codestar_get_option('team_sec_title');
  $team_sec_subtitle = codestar_get_option('team_sub');
  ?>
  <div class="responsive-container-block outer-container">
    <div class="responsive-container-block inner-container">
      <p class="text-blk section-head-text">
        <?php
          echo $team_sec_title;
        ?>
      </p>
      <p class="text-blk section-subhead-text">
        <?php
          echo $team_sec_subtitle;
        ?>
      </p>
      <div class="responsive-container-block">
        <?php
          $team_members = codestar_get_option('team_member');
          foreach ($team_members as $team_member) :
            $social_links = $team_member['social_icons'];
        ?>
          <div class="responsive-cell-block wk-desk-3 wk-ipadp-3 wk-tab-6 wk-mobile-12 team-card-container">
            <div class="team-card">
              <div class="img-wrapper">
                <img class="team-img" src="<?php echo $team_member['team_img']['url']; ?>">
              </div>
              <p class="text-blk name">
                <?php
                  echo $team_member['team_name'];
                ?>
              </p>
              <p class="text-blk position">
                <?php
                  echo $team_member['team_desc'];
                ?>
              </p>
              <div class="social-media-links">
                <?php
                  foreach ($social_links as $social_link) :
                ?>
                  <a href="<?php echo $social_link['sl']; ?>">
                    <i class="<?php echo $social_link['team_social_icon']; ?>"></i>
                  </a>
                <?php
                  endforeach;
                ?>
              </div>
            </div>
          </div>
        <?php
          endforeach;
        ?>
      </div>
    </div>
  </div>

  <?php 
    $selectedProductID = codestar_get_option('product_items');

    var_dump($selectedProductID);

    $addToCartLink = add_query_arg('add-to-cart', $selectedProductID, site_url('/cart/'));
  
  ?>

  <div class="product-btn my-5 text-center">
    <a href="<?php echo $addToCartLink; ?>" class="btn btn-success btn-lg text-uppercase">Add to cart</a>
  </div>


  <?php 
    get_footer();
  ?>