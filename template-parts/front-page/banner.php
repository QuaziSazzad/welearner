<?php
/**
 * template banner
 *
 * @package welearner
 */

$welearner_banner = get_theme_mod( 'banner_image' );


 if( !empty( $welearner_banner ) ): ?>

    <div class="banner-area" style="background: url(<?php echo esc_url( $welearner_banner ); ?>;">
 <?php else: ?>
    <div class="banner-area" style="background: url(<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/banner/1.png);">
<?php endif; ?>
        <div class="container">
            <div class="banner-area-inner">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner-inner">
                            <?php if( !empty( get_theme_mod( 'banner_title' ) ) ) : //main title ?>
                                <h2><?php echo esc_html( get_theme_mod( 'banner_title' ) ); ?></h2>
                            <?php endif; ?>

                             <?php if( !empty( get_theme_mod( 'banner_sub_title' ) ) ) : //sub title ?>
                               <p><?php echo esc_html( get_theme_mod( 'banner_sub_title' ) ); ?></p>
                           <?php endif; ?>
                        </div>
                        <form action="<?php echo esc_url(home_url('/')) ?>" class="banner-form">
                            <input type="text" name="s" class="form-control" placeholder="<?php echo esc_attr__( 'What do you want to learn?', 'welearner' ); ?>">
                            <input type="hidden" name="posttype" value="courses">

                            <button type="submit" class="btn btn-base"><?php echo esc_html__( 'Search', 'welearner' ); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

