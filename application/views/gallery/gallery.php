<style>
    #lightbox .modal-content {
        display: inline-block;
        text-align: center;
    }

    #lightbox .close {
        opacity: 1;
        color: rgb(255, 255, 255);
        background-color: rgb(25, 25, 25);
        padding: 5px 8px;
        border-radius: 30px;
        border: 2px solid rgb(255, 255, 255);
        position: absolute;
        top: -15px;
        right: -55px;

        z-index:1032;
    }
    .gallery-head { margin-left: 1%; }
</style>

<div class="container portfolio-spanio">
   <div class="row">
       <h3 class="gallery-head">Our Gallery</h3>
       <?php
       if(!empty($galleries))
       {
           ?>

           <?php
           $path  = 'uploads/gallery/';
           $i=1;
           foreach($galleries as $rows) {

               $actives = (isset($i) && $i == "1") ? "active" : "";
               ?>
               <div class="col-xs-6 col-sm-3 <?php echo $actives;?>">
                   <a href="#" class="thumbnail" data-toggle="modal" data-target="#<?php echo $i; ?>">
                       <img src="<?php echo $path.$rows['gallery_image'];?>" alt="...">
                       
                   </a>
                    <p><?php echo $rows['gallery_caption']; ?></p>
               </div>

               <div id="<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                       <div class="modal-content">
                           <div class="modal-body">
                               <img src="<?php echo $path.$rows['gallery_image'];?>" alt="" />
                               <p><?php echo $rows['gallery_caption']; ?></p>
                           </div>
                       </div>
                   </div>
               </div>

               <?php
               $i++;
           }
           ?>





           <?php
       }
       ?>

   </div>
</div>



<script>
    $(document).ready(function() {
        var $lightbox = $('#lightbox');

        $('[data-target="#lightbox"]').on('click', function(event) {
            var $img = $(this).find('img'),
                src = $img.attr('src'),
                alt = $img.attr('alt'),
                css = {
                    'maxWidth': $(window).width() - 100,
                    'maxHeight': $(window).height() - 100
                };

            $lightbox.find('.close').addClass('hidden');
            $lightbox.find('img').attr('src', src);
            $lightbox.find('img').attr('alt', alt);
            $lightbox.find('img').css(css);
        });

        $lightbox.on('shown.bs.modal', function (e) {
            var $img = $lightbox.find('img');

            $lightbox.find('.modal-dialog').css({'width': $img.width()});
            $lightbox.find('.close').removeClass('hidden');
        });
    });
</script>