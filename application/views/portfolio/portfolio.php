<main class="page-main">
    <!-- Breadcrumbs Block -->
    <div class="block breadcrumbs">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li>Works</li>
            </ul>
        </div>
    </div>
    <div class="block fullwidth">
        <div class="container">
            <h2 class="text-center h-lg h-decor">Our Works</h2>

            <!-- //end Filters -->
            <div id="isotopeGallery" class="gallery gallery-isotope hidden-xs">

                <?php
                if(!empty($portfolios))
                {
                    ?>

                    <?php
                    $path  = 'uploads/portfolio/';
                    $i=1;
                    foreach($portfolios as $rows) {

                        $actives = (isset($i) && $i == "1") ? "active" : "";
                        ?>
                        <div class="gallery-item category2">
                            <div class="gallery-item-image">
                                <img src="<?php echo $path.$rows['portfolio_image'];?>" alt="<?php echo $rows['portfolio_caption']; ?>" />
                            </div>
                            <div class="gallery-item-caption">
                                <?php echo $rows['portfolio_title']; ?>
                            </div>
                            <a href="<?php echo $path.$rows['portfolio_image'];?>" class="gallery-item-zoom" data-lightbox="projects">
                                <i class="icon icon-night"></i>
                            </a>
                        </div>







                        <?php
                        $i++;
                    }
                    ?>





                    <?php
                }
                ?>







            </div>
            <div id="slickGalleryFilters" class="filters-by-category visible-xs"></div>
            <div id="slickGallery" class="gallery-slick visible-xs"></div>
        </div>
    </div>

</main>










