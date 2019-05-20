<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <?php
                if(validation_errors())
                {
                ?>
                <div class="alert  alert-danger alert_box">
                    <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                    class="fa fa-times"></i></a>
                    <?php echo validation_errors();?>
                </div>
                <?php
                }
                ?>
                <?php
                if ($this->session->flashdata('success') != "") {
                ?>
                <div class="alert alert-success alert_box">
                    <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                    class="fa fa-times"></i></a>
                    <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>.
                </div>
                <?php
                }
                ?>
                <?php if ($this->session->flashdata('error') != "") {
                ?>
                <div class="alert alert-danger alert_box">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                    class="fa fa-times"></i></a>
                    <strong>Error!</strong>  <?php echo $this->session->flashdata('error'); ?>.
                </div>
                <?php
                }
                ?>
            </div>
            <form  method="post"  action="<?php echo base_url('index.php/news/edit_news/'.$info['content_id'])?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <!--     <form name="frm" id="frm" method="post"   enctype="multipart/form-data" class="form-horizontal" action="<?=site_url(ADMIN_PATH.'/banner/edit_banner/'.$info['id'])?>"> -->
                <div class="col-sm-9">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <?php echo (isset($title) && $title !="") ? $title:""; ?>
                        </div>
                        <div class="panel-body">
                            <input name="_token" type="hidden" value="k7AgBT9rXxmqIhHG5i57R0DIcJAPYb0lVl2A7GCu">
                            <div class="box-body">
                                <label><i class="fa fa-text-width"></i>News Title</label>
                                <input type="text" placeholder="Enter title here" class="form-control" name="title" id="title"  value="<?=set_value('title',$info['title']);?>">
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label for="title"> <i class="fa fa-tag"></i> <b>Tag Line</b> </label>
                                        <input type="text" placeholder="Tag Line" class="form-control" name="tag_line" id="tag_line" v value="<?=set_value('tag_line',$info['tag_line']);?>">
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <label for="title"> <i class="fa fa-newspaper-o"></i> <b>Second Heading</b> </label>
                                        <input type="text" placeholder=" Second Heading" class="form-control" name="second_heading" id="second_heading"  value="<?=set_value('second_heading',$info['second_heading']);?>">
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-9">
                                        <label for="title"> <i class="fa fa-user"></i> <b>Reporter</b> </label>
                                        <select class="form-control " name="reporter_id" tabindex="-1" aria-hidden="true">
                                            <option value="">Select Reporter News</option>
                                            <?php foreach ($get_active_reporter as $r) {?>
                                <option value="<?php echo  $r['reporter_id'] ?>"
                                    
                                    <?php if ($r['reporter_id'] == $info['reporter_id']){ ?>
                                    selected
                                    <?php }?>
                                    
                                ><?php echo $r['reporter_title']; ?></option>
                                <?php } ?>


                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="title">  <b>Show In Home</b> </label>
                                        <div class="form-control">


                                             <input type="radio" name="show_reporter" value="1" <?php if($info['show_reporter']==1) echo "checked";?> >
                                    yes
                                    <input type="radio" name="show_reporter" value="0" <?php if($info['show_reporter']==0) echo "checked";?> />
                                    No
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="title"> <i class="fa fa-user"></i> <b>Guest Reporter</b> </label>
                                        <select class="form-control " name="guest_id" tabindex="-1" aria-hidden="true">
                                            <option value="">Select Guest</option>
                                                       <?php foreach ($get_active_guest as $g) {?>
                                <option value="<?php echo  $g['guest_id'] ?>"
                                    
                                    <?php if ($g['guest_id'] == $info['guest_id']){ ?>
                                    selected
                                    <?php }?>
                                    
                                ><?php echo $g['guest_title']; ?></option>
                                <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                                <label for="title"> <i class="fa fa-youtube-play"></i> <b>Youtube Link</b></label>
                                <textarea placeholder="Youtube Link" class="form-control" name="video" id="video" rows="5"><?=set_value('video',$info['video']);?></textarea>
                                
                            </div>
                            <div class="box-body">
                                <label for="title"> <i class="fa fa-list-alt"></i> <b>Short Content</b></label>
                                <textarea placeholder="Short content" class="form-control" name="short_content" id="short_content" rows="5" ><?=set_value('short_content',$info['short_content']);?></textarea>
                            </div>
                            <div class="box-body">
                                <textarea rows="5" cols="10" class="form-control" name="content" id="content">
                                <?=set_value('content',$info['content']);?>
                                </textarea>
                            </div>
                            <div class="form-group box-body">
                                <label for="title">  <b>Show Content Below Flash News</b> </label>
                                <div class="form-control">

                                    <input type="radio" name="show_content" value="1" <?php if($info['show_content']==1) echo "checked";?> >
                                    Yes
                                    <input type="radio" name="show_content" value="0" <?php if($info['show_content']==0) echo "checked";?> />
                                    No

                                   
                                </div>
                            </div>
                            <div class="form-group box-body">
                                <label for="meta_key">Meta Key</label>
                                <input class="form-control" id="meta_key" name="meta_keywords" type="text" value="<?=set_value('meta_keywords',$info['meta_keywords']);?>">
                            </div>
                            <div class="form-group box-body">
                                <label for="meta_desc">Meta Description</label>
                                <textarea class="form-control" id="meta_desc" rows="5" name="meta_description" cols="50"><?=set_value('meta_description',$info['meta_description']);?>
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-body">
                            <label> <i class="fa fa-clock-o"></i> <b>Schedule Post Time</b></label>
                            <input type="datetime-local" placeholder="Date" class="form-control" name="publish_time" id="publish_time" value="<?php echo $info['publish_time']?>">
                        </div>
                        <div class="box-body">
                            <label> <i class="fa fa-list-alt"></i> <b>Categories</b></label>
                            <select class="form-control select2" multiple="multiple" data-placeholder="Select category" name="category_id[]"
                                style="width: 100%;">
                                <?php foreach ($categories as $cat) {?>
                                <option value="<?php echo  $cat['category_id'] ?>"
                                    <?php  foreach ($current_category as $postCat){ ?>
                                    <?php if ($postCat['category_id'] == $cat['category_id']){ ?>
                                    selected
                                    <?php }} ?>
                                    
                                ><?php echo $cat['category_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title"> <i class="fa fa-image"></i> <b>Feature Image</b></label>
                                <div class="remove_option">

                                    <img src="<?php echo $info['server_image']; ?>" alt="featured_image" style="width: 50%">

                                    <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                </div>
                                <input  type="hidden" name="server_image_prev" value="<?php echo $info['server_image'];?>" >
                                <div id="image_input">

                                    <span>(image dimension 853*300 px)</span>
                                                 <div class="input-append">
                                                    <input id="fieldID4" type="text"  name="server_image_new" class="form-control" value="" >
                                                    <a data-toggle="modal" href="javascript:;" data-target="#myModal" class="btn btn-default" type="button">Select</a>
                                                </div>
                                </div>
                                <div id="myModal" class="modal fade bs-example-modal-xl" role="dialog">
                                    <div class="modal-dialog modal-xl">

                                        
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">CAPITAL NEPAL MEDIA GALLERY</h4>
                                            </div>
                                            <div class="modal-body">
                                                <iframe width="100%" height="400" src="<?php echo base_url(); ?>../filemanager/dialog.php?type=2&field_id=fieldID4'&fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <label> <i class="fa fa-image"></i> <b>Image Show @ Breaking</b></label>
                            <div class="form-control">
                                <div class="col-md-10">
                                    <input type="radio" name="show_image" value="1" <?php if($info['show_image']==1) echo "checked";?> >
                                    yes
                                    <input type="radio" name="show_image" value="0" <?php if($info['show_image']==0) echo "checked";?> />
                                No </div>
                            </div>
                            
                        </div>
                        <div class="box-body form-group">
                            <label for="title"> <i class="fa fa-image"></i> <b>Image Caption</b></label>
                            <textarea class="form-control" name="image_caption" rows="3" placeholder="Enter ..." autocomplete="off"></textarea>
                        </div>
                        <div class="box-body">
                            <label> <i class="fa fa-text-width"></i> <b>Breaking News</b></label>
                            <div class="form-control">
                                <div class="col-md-10">
                                    <input type="radio" name="is_flash" value="1" <?php if($info['is_flash']==1) echo "checked";?> >
                                    yes
                                    <input type="radio" name="is_flash" value="0" <?php if($info['is_flash']==0) echo "checked";?> />
                                No </div>
                                <!--   <label class="radio-inline">
                                    <input id="is_flash" name="is_flash" type="radio" value="1">
                                    Yes
                                </label>
                                <label class="radio-inline">
                                    <input checked="checked" id="is_flash" name="is_flash" type="radio" value="0">
                                    No
                                </label>
                                <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span> -->
                            </div>
                        </div>
                        
                        <div class="box-body">
                            <label> <i class="fa fa-text-width"></i> <b>Special News</b></label>
                            <div class="form-control">
                                <div class="col-md-10">
                                    <input type="radio" name="is_special" value="1" <?php if($info['is_special']==1) echo "checked";?> >
                                    yes
                                    <input type="radio" name="is_special" value="0" <?php if($info['is_special']==0) echo "checked";?> />
                                    No
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <label> <i class="fa fa-text-width"></i> <b>Status </b></label>
                            <div class="form-control">
                                <div class="col-md-10">
                                    <input type="radio" name="publish_status" value="1" <?php if($info['publish_status']==1) echo "checked";?> >
                                    Publish
                                    <input type="radio" name="publish_status" value="0" <?php if($info['publish_status']==0) echo "checked";?> />
                                    UnPublish

                                    <input type="radio" name="publish_status" value="2" <?php if($info['publish_status']==2) echo "checked";?> />
                                    Draft
                                </div>
                            </div>
                            
                        </div>
                        <input type="hidden" name="content_id" value="<?=$info['content_id']?>" />
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<script>
CKEDITOR.replace( 'content'  ,{

            filebrowserBrowseUrl : '<?php echo base_url(); ?>../filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl : '<?php echo base_url(); ?>../filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl : '<?php echo base_url(); ?>../filemanager/dialog.php?type=1&editor=ckeditor&fldr='
} );
</script>