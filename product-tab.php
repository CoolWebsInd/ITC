<?php
/**
 * Dokan Seller Single product tab Template
 *
 * @since 2.4
 *
 * @package dokan
 */
?>

<h2><?php _e( 'Vendor Information', 'dokan-lite' ); ?></h2>

<ul class="list-unstyled">

    <?php if ( !empty( $store_info['store_name'] ) ) { ?>
        <li class="store-name">
            <span><?php _e( 'Store Name:', 'dokan-lite' ); ?></span>
            <span class="details">
                <?php echo esc_html( $store_info['store_name'] ); ?>
            </span>
        </li>
    <?php } ?>

    <li class="seller-name">
        <span>
            <?php _e( 'Vendor:', 'dokan-lite' ); ?>
        </span>

        <span class="details">
            <?php printf( '<a href="%s">%s</a>', dokan_get_store_url( $author->ID ), $author->display_name ); ?>
        </span>
    </li>
    <?php if ( !empty( $store_info['address'] ) ) { ?>
        <li class="store-address">
            <span><b><?php _e( 'Address:', 'dokan-lite' ); ?></b></span>
            <span class="details">
                <?php echo dokan_get_seller_address( $author->ID ) ?>
            </span>
        </li>
    <?php } ?>

    <li class="clearfix">
        <?php 
			dokan_get_readable_seller_rating( $author->ID );
			$store_info = dokan_get_store_info( $store_id );
			$store_id = $author->ID;
		?>
    </li>
	<li class="dokan-store-support-btn-wrap dokan-left">
            <button data-store_id="<?php echo $store_id; ?>" class="dokan-store-support-btn dokan-btn dokan-btn-theme dokan-btn-sm <?php echo $user_logged_in ?>">
            Contactar con el vendedor </button>

    </li>
</ul>
