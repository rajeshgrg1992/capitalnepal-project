<section class="kc-elm kc-css-710361 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-173658 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-100649 kc_row kc_row_inner">
                        <div class="kc-elm kc-css-743301 kc_col-sm-12 kc_column_inner kc_col-sm-12">
                            <div class="kc_wrapper kc-col-inner-container">
                                <div class="container">



                                        <?php
                                        if(!empty($packages))
                                        {
                                            ?>
                                            <div id="products" class="row list-group">
                                                <?php

                                                $i=1;
                                                foreach($packages as $rows) {
                                                    $packages_path  = 'uploads/package/'.$rows['package_id'].'/';
                                                    $actives = (isset($i) && $i == "1") ? "active" : "";
                                                    ?>

                                                    <div class="item  col-xs-4 col-lg-4 <?php echo $i; ?>">
                                                        <div class="thumbnail">
                                                            <a href="<?php echo site_url('packages/detail/'.$slug.'/'.$rows['package_url']);?>">
                                                            <img class="group list-group-image" src="<?php echo $packages_path.$rows['featuredimg'];?>" alt="" />
                                                            </a>
                                                            <div class="caption">
                                                                <h4 class="group inner list-group-item-heading">
                                                                    <?php echo mb_substr($rows["package_name"] , 0,20 ,'UTF-8'); ?></h4>
                                                                <p><?php echo mb_substr($rows["summary"] , 0,120 ,'UTF-8'); ?></p>
                                                                <div class="row">
                                                                    <div class="col-sm-8">
                                                                        <p class="">
                                                                            <strong>Product Code:</strong> <?php echo mb_substr($rows["tourcode"] , 0,50 ,'UTF-8'); ?></p>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <a class="btn btn-success" href="<?php echo site_url('packages/detail/'.$slug.'/'.$rows['package_url']);?>">DETAIL</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <?php
                                                    $i++;
                                                }
                                                ?>


                                            </div>

                                            <?php
                                        }
                                        ?>











                                </div>





                                &nbsp;
<!--                                --><?php //echo $sub_title;?>
                                </h2>













                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="search-pg">
    <div class="hero-container bg-black">
        <div class="container">
            <div class="col-md-12 hero-header">
                <?php echo (isset($description) && $description !="")? $description:"";?>
              </div>
        </div>
    </div>

</section>

<section class="product-listing">
    <div class="container">
        <nav>


            <?php
            if(! empty($packages))
            {
                $total_page = ceil($package_total/$per_page);
                if($total_page > 1)
                {
                    ?>
                    <ul class="pagination">
                        <?php for($i = 1; $i <= $total_page; $i++) { ?>
                            <li><a href="<?php echo $base_url."/" ?><?php echo $i ?>" class="links <?php echo ($i==$current_page)?"":"in"?>active"><?php echo $i ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                    <?php
                }
            }
            ?>

        </nav>
    </div>
    </div>


</section>
<style>
    .pagination .active {
        background-color:#2E608A;
        color:#FFF;
    }

</style>
