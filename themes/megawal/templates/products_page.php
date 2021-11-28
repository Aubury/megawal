<?php
/*
Template Name: Products page
*/
function pr( $var, $die = true ) {
    echo '<pre>';
    print_r( $var );
    echo '</pre>';
    if ( $die ) {
        die();
    }
}
get_header();
get_template_part( 'template-parts/content', 'page' );
?>

<main id="primary" class="site-main">
  <div id="products">
      <div class="container">
<?php
$title = carbon_get_post_meta( $post->ID, 'products_title' );
$products = carbon_get_post_meta( $post->ID, 'single_product' );
$index = 0;

//pr($products);

if(!empty($title)){
    echo '<h2>'. $title .'</h2>';
}
foreach($products as $product){
    if(!empty($product)){
        echo '<div class="single_product">';
        foreach ($product['product_photo'] as $photo){
            $block_photo = wp_get_attachment_image($photo['photo'], 'medium', '', array( 'alt' => $photo['alt']));
        }
        if($index % 2 == 0){
            echo '<div class="product_photo even">
                   <div class="absolute">'. $block_photo .'</div>';
                    if(!empty($product['links_to_page'])){

                        echo '<ul class="links_block">';
                        foreach ($product['links_to_page'] as $link){
                            if(!empty($link)){
                                echo '<li><a  href="'.$link['link'].'" target="_blank">'. $link['text'] .'</a></li>';
                            }
                        }
                        echo '</ul>';
                    }

            echo '</div>
                 <div class="product_description even">'. $product['product_description'].'</div>';

        }else{
           echo '<div class="product_description odd">'. $product['product_description'].'</div>';
            echo '<div class="product_photo odd">
                    <div class="absolute">'. $block_photo .'</div>';
                    if(!empty($product['links_to_page'])){

                        echo '<ul class="links_block">';
                        foreach ($product['links_to_page'] as $link){
                            if(!empty($link)){
                                echo '<li><a  href="'.$link['link'].'" target="_blank">'. $link['text'] .'</a></li>';
                            }
                        }
                        echo '</ul>';
                    }

               echo '</div>';
       }
        echo '</div>';
    }
    $index++;
}
?>
      </div>
  </div>
</main>
<?php
get_sidebar();
get_footer();
