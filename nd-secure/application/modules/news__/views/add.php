
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
            <form method="POST" action="http://localhost/capitalnepal/nd-secure/index.php/news/add_news" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="col-sm-9">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <?php echo (isset($title) && $title !="") ? $title:""; ?>
                    </div>

                    <div class="panel-body">


                        <input name="_token" type="hidden" value="k7AgBT9rXxmqIhHG5i57R0DIcJAPYb0lVl2A7GCu">

                        <div class="box-body">
                            <label><i class="fa fa-text-width"></i> Add New Post</label>
                            <input type="text" placeholder="Enter title here" class="form-control" name="title" id="title" value="">
                        </div>




                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="title"> <i class="fa fa-tag"></i> <b>Tag Line</b> </label>
                                    <input type="text" placeholder="Tag Line" class="form-control" name="tag_line" id="tag_line" value="">
                                </div>
                            </div>
                        </div>




                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="title"> <i class="fa fa-newspaper-o"></i> <b>Second Heading</b> </label>
                                    <input type="text" placeholder=" Second Heading" class="form-control" name="second_heading" id="second_heading" value="">
                                </div>
                            </div>
                        </div>



                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="title"> <i class="fa fa-user"></i> <b>Reporter</b> </label>
                                    <select class="form-control " name="reporter_id" tabindex="-1" aria-hidden="true">
                                        <option value="">Select Reporter News</option>
                                        <option value="1">The Nepaltop</option>
                                        <option value="2">संजिव झा</option>
                                        <option value="3">तेज बोहरा</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label for="title">  <b>Show In Home</b> </label>
                                    <div class="form-control">
                                        <label class="radio-inline">
                                            <input type="radio" name="show_reporter" value="1" checked="">Yes
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="show_reporter" value="0">No
                                        </label>

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
                                        <option value="4">Sanjib Jha</option>
                                        <option value="5">Amrit</option>
                                    </select>
                                </div>


                            </div>
                        </div>





                        <div class="box-body">
                            <label for="title"> <i class="fa fa-youtube-play"></i> <b>Youtube Link</b></label>
                            <textarea placeholder="Youtube Link" class="form-control" name="video" id="video" rows="5" value=""></textarea>
                        </div>


                        <div class="box-body">
                            <label for="title"> <i class="fa fa-list-alt"></i> <b>Short Content</b></label>
                            <textarea placeholder="Short content" class="form-control" name="short_content" id="short_content" rows="5" value=""></textarea>
                        </div>

                        <div class="box-body">
                            <textarea rows="5" cols="10" class="form-control" name="content" id="content">
                                <?php echo (isset($content['content']) && $content['content'] !="") ? $content['content']:""; ?>
                                </textarea>

                        </div>




                        <div class="form-group box-body">

                            <label for="title">  <b>Show Content Below Flash News</b> </label>
                            <div class="form-control">

                                <label class="radio-inline">
                                    <input type="radio" name="show_content" value="1" checked="">Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="show_content" value="0">No
                                </label>
                            </div>
                        </div>


                        <div class="form-group box-body">
                            <label for="meta_key">Meta Key</label>
                            <input class="form-control" id="meta_key" name="meta_key" type="text" value="">
                        </div>

                        <div class="form-group box-body">
                            <label for="meta_desc">Meta Description</label>
                            <textarea class="form-control" id="meta_desc" rows="5" name="meta_desc" cols="50"></textarea>
                        </div>
                    </div>
                </div>


            </div>
                <div class="col-md-3">
                    <!-- general form elements -->
                    <div class="box box-primary">


                        <div class="box-body">
                            <label> <i class="fa fa-clock-o"></i> <b>Schedule Post Time</b></label>

                            <input type="date" placeholder="Date" class="form-control" name="published_at" id="published_at" value="">

                        </div>




                        <div class="box-body">
                            <label> <i class="fa fa-list-alt"></i> <b>Categories</b></label>

                            <select class="form-control select2" multiple="multiple" data-placeholder="Select category" name="category_id[]"
                                    style="width: 100%;">
                                <?php foreach ($get_active_category as $cat) { ?>
                                    <option value="<?php echo $cat['category_id']; ?>"><?php echo $cat['category_name'] ?></option>
                                <?php } ?>

                            </select>
                        </div>




                        <div class="box-body">
                            <div class="form-group">
                                <label for="title"> <i class="fa fa-image"></i> <b>Feature Image</b></label>
                                <input type="file" class="form-control" name="image" data-preview="holder" id="image">
                            </div>


                            <div class="form-group">
                                <label for="title"> <i class="fa fa-image"></i> <b> Image Url</b></label>
                                <input type="text" class="form-control" name="image_url" data-preview="holder" id="image_url">
                            </div>

                            <div class="input-append">
                                <input id="fieldID4" type="text" class="form-control" value="">
                                <a data-toggle="modal" href="javascript:;" data-target="#myModal" class="btn btn-default" type="button">Select</a>
                            </div>

                            <!-- Modal -->
                            <div id="myModal" class="modal fade bs-example-modal-xl" role="dialog">
                                <div class="modal-dialog modal-xl">

                                    <!-- Modal content-->
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
                                    <label class="radio-inline">
                                        <input checked="checked" id="show_image" name="show_image" type="radio" value="1">
                                        Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input id="show_image" name="show_image" type="radio" value="0">
                                        No
                                    </label>
                                    <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                </div>

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
                                    <label class="radio-inline">
                                        <input id="is_flash" name="is_flash" type="radio" value="1">
                                        Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input checked="checked" id="is_flash" name="is_flash" type="radio" value="0">
                                        No
                                    </label>
                                    <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <label> <i class="fa fa-text-width"></i> <b>Special News</b></label>
                            <div class="form-control">

                                <div class="col-md-10">
                                    <label class="radio-inline">
                                        <input id="is_special" name="is_special" type="radio" value="1">
                                        Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input checked="checked" id="is_special" name="is_special" type="radio" value="0">
                                        No
                                    </label>
                                    <span class="field-validation-valid help-block" data-valmsg-for="PhoneNumber" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>


                        <div class="box-body">
                            <label> <i class="fa fa-text-width"></i> <b>Status </b></label>
                            <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                            </select>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </div>

            </form>






        </div>
    </section>
</div>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <div class="box-header">
        <h3 class="box-title">  <?php echo (isset($title) && $title !="") ? $title:""; ?></h3>
    </div>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-9">
                <div class="box box-primary">



                     </div>

            </div>


        </div>

    </form>
    </section>

    <script>
        CKEDITOR.replace( 'content'  ,{

            filebrowserBrowseUrl : '<?php echo base_url(); ?>../filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserUploadUrl : '<?php echo base_url(); ?>../filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
            filebrowserImageBrowseUrl : '<?php echo base_url(); ?>../filemanager/dialog.php?type=1&editor=ckeditor&fldr='


        } );
        </script>