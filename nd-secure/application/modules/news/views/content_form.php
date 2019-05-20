
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
        <div class="col-sm-9">
          
          <!-- /.box -->

          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              
			  <div class="panel panel-info">
            <div class="panel-heading">
                <?php echo (isset($title) && $title !="") ? $title:""; ?>
            </div>

            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">General</a>
                    </li>
                    <li><a href="#meta" data-toggle="tab">Meta</a>
                    </li>

                    <li id="multi_tab"><a href="#settings" data-toggle="tab">Tab</a>
                    </li>
                    <li><a href="#support" data-toggle="tab">Tabs</a>
                    </li>

                </ul>
                <form class="tab_form" method="post" action="" enctype="multipart/form-data">
                    <div class="tab-content">

                        <div class="tab-pane fade active in" id="home">

                            <table class="form-table content-adjustment">
                                <tbody>

                                    <div class="row">
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">News Title<span class="asterisk">*</span></label>
                                            <input type="text" class="form-control" name="content_title" id="content_title" value="<?php echo (isset($content['content_title']) && $content['content_title'] !="") ? $content['content_title']:""; ?>" aria-describedby="emailHelp" placeholder="Title">

                                          </div>
                                            
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">News Slug</label>
                                                <input type="text" class="form-control"  name="content_page_title" id="content_page_title" value="<?php echo (isset($content['content_page_title']) && $content['content_page_title'] !="") ? $content['content_page_title']:""; ?>" aria-describedby="pageTitleHelp" placeholder="Page Title">

                                            </div>

                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sub Heading</label>
                                                <input type="text" class="form-control" name="content_title" id="content_title" value="<?php echo (isset($content['content_title']) && $content['content_title'] !="") ? $content['content_title']:""; ?>" aria-describedby="emailHelp" placeholder="Title">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="meta_title">Summary</label>
                                                <textarea name="summary" class="form-control"  rows="5" cols="100"><?php echo (isset($content['summary']) && $content['summary'] !="") ? $content['summary']:""; ?></textarea><br>

                                            </div>
                                        </div>

                                    </div>



                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="PageType">News Type <span class="asterisk">*</span></label>
                                                <select name="content_type" class="page_type form-control">

                                                    <option value="Article"  <?php echo (isset($content['content_type']) && $content['content_type'] =="Article")?"selected":"";?>>Article</option>
                                                    <option value="About"  <?php echo (isset($content['content_type']) && $content['content_type'] =="About")?"selected":"";?>>About</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="FeaturedImage">Featured Image </label>
                                                <?php if(isset($content['featured_img'])){ ?>
                                                    <div class="remove_option">
                                                        <?php $path  =  '../uploads/content/'; ?>
                                                        <img src="<?php echo $path. $content['featured_img'];?>" alt="featured_image" style="max-width: 940px; max-height: 360px;">
                                                        <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                                    </div>
                                                    <input type="hidden" name="pre_featuredimg" value="<?php echo $content['featured_img']; ?>">
                                                    <div id="image_input">
                                                        <span>(Image Dimension 853*405 px)</span>
                                                        <input type="file" class="form-control" name="featured_img" id="featuredimg">
                                                        <span id="type_error"></span>
                                                    </div>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                    <span>(Image Dimension 853*405 px)</span>
                                                    <input type="file" class="form-control" name="featured_img"  id="featuredimg">
                                                    <span id="type_error"></span>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">News Details</label>
                                                <textarea rows="5" cols="10" class="form-control" name="content_body" id="content_body"><?php echo (isset($content['content_body']) && $content['content_body'] !="") ? $content['content_body']:""; ?></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="PageType">Show On Menu  <span class="asterisk">*</span></label>
                                                <select name="show_on_menu" class="show_on_menu form-control">

                                                    <option value="N"  <?php echo (isset($content['show_on_menu']) && $content['show_on_menu'] =="N")?"selected":"";?>>Non</option>
                                                    <option value="T"  <?php echo (isset($content['show_on_menu']) && $content['show_on_menu'] =="T")?"selected":"";?>>Top</option>
                                                    <option value="Y" <?php echo (isset($content['show_on_menu']) && $content['show_on_menu'] =="Y")?"selected":"";?>>Footer</option>
                                                    <option value="B" <?php echo (isset($content['show_on_menu']) && $content['show_on_menu'] =="B")?"selected":"";?>>Both(Top and Footer)</option>


                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="PageType">Publish <span class="asterisk">*</span></label>
                                                <select name="publish_status" class="publish_status form-control">

                                                    <option value="1"  <?php echo (isset($content['publish_status']) && $content['publish_status'] =="1")?"selected":"";?>>Yes</option>
                                                    <option value="0"  <?php echo (isset($content['publish_status']) && $content['publish_status'] =="0")?"selected":"";?>>No</option>



                                                </select>
                                            </div>

                                        </div>

                                    </div>



                                </tbody>
                            </table>


                        </div>
                        <div class="tab-pane fade" id="meta">

                            <table class="form-table">

                                <tbody>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="meta_title">Meta Title</label>
                                            <textarea name="meta_title" class="form-control"  rows="5" cols="100"><?php echo (isset($content['meta_title']) && $content['meta_title'] !="") ? $content['meta_title']:""; ?></textarea><br>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Meta Description</label>
                                            <textarea name="meta_description" class="form-control" id="meta_description"  rows="5" cols="100"><?php echo (isset($content['meta_description']) && $content['meta_description'] !="") ? $content['meta_description']:""; ?></textarea><br>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="MetaKeywords">Meta Keywords</label>
                                            <textarea name="meta_keywords" class="form-control"  rows="5" cols="100"><?php echo (isset($content['meta_keywords']) && $content['meta_keywords'] !="") ? $content['meta_keywords']:""; ?></textarea><br>

                                        </div>
                                    </div>

                                </div>










                                </tbody>
                            </table>

                        </div>


                        <div class="tab-pane fade" id="support">

                            <table class="form-table">

                                <tbody>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="TabTwo">Tab</label>
                                            <input type="text" class="form-control" name="about_service" id="about_service" size="50" value="<?php echo (isset($content['about_service']) && $content['about_service'] !="") ? $content['about_service']:""; ?>"  autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="TabTwo">Detail</label>
                                        <textarea  name="about_service_desc" class="form-control" id="about_service_desc"  rows="5" cols="100"><?php echo (isset($content['about_service_desc']) && $content['about_service_desc'] !="") ? $content['about_service_desc']:""; ?></textarea><br>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="tab">Tab</label>
                                        <input type="text" class="form-control" name="about_choose" id="about_choose" size="50" value="<?php echo (isset($content['about_choose']) && $content['about_choose'] !="") ? $content['about_choose']:""; ?>"  autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">


                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="tab">Detail</label>
                                        <textarea name="about_choose_desc" class="form-control" id="about_choose_desc"  rows="5" cols="100"><?php echo (isset($content['about_choose_desc']) && $content['about_choose_desc'] !="") ? $content['about_choose_desc']:""; ?></textarea><br>


                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="tab">Tab</label>
                                        <input type="text" name="about_support" class="form-control" id="about_support" size="50" value="<?php echo (isset($content['about_support']) && $content['about_support'] !="") ? $content['about_support']:""; ?>"  autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">


                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="tab">Detail</label>
                                        <textarea name="about_support_desc" class="form-control" id="about_support_desc"  rows="5" cols="100"><?php echo (isset($content['about_support_desc']) && $content['about_support_desc'] !="") ? $content['about_support_desc']:""; ?></textarea><br>


                                    </div>

                                </div>







                                
                                
                                



                                </tbody>
                            </table>

                        </div>


                        <div class="tab-pane fade" id="settings">

                            <table class="form-table">

                                <tbody>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab1" class="form-control"  size="28" value="<?php echo (isset($content['tab1']) && $content['tab1'] !="") ? $content['tab1']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description1" class="form-control" id="tab-body" rows="5" cols="100"><?php echo (isset($content['description1']) && $content['description1'] !="") ? $content['description1']:""; ?></textarea><br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab2" class="form-control"  size="28" value="<?php echo (isset($content['tab2']) && $content['tab2'] !="") ? $content['tab2']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description2" class="form-control" id="tab-body2" rows="5" cols="100"><?php echo (isset($content['description2']) && $content['description2'] !="") ? $content['description2']:""; ?></textarea><br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab3" class="form-control"  size="28" value="<?php echo (isset($content['tab3']) && $content['tab3'] !="") ? $content['tab3']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description3" class="form-control" id="tab-body3" rows="5" cols="100"><?php echo (isset($content['description3']) && $content['description3'] !="") ? $content['description3']:""; ?></textarea><br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab4" class="form-control"  size="28" value="<?php echo (isset($content['tab4']) && $content['tab4'] !="") ? $content['tab4']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description4" class="form-control" id="tab-body4" rows="5" cols="100"><?php echo (isset($content['description4']) && $content['description4'] !="") ? $content['description4']:""; ?></textarea><br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab5" class="form-control"  size="28" value="<?php echo (isset($content['tab5']) && $content['tab5'] !="") ? $content['tab5']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description5" class="form-control" id="tab-body5" rows="5" cols="100"><?php echo (isset($content['description5']) && $content['description5'] !="") ? $content['description5']:""; ?></textarea><br>

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab6" class="form-control"  size="28" value="<?php echo (isset($content['tab6']) && $content['tab6'] !="") ? $content['tab6']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description6" class="form-control" id="tab-body6" rows="5" cols="100"><?php echo (isset($content['description6']) && $content['description6'] !="") ? $content['description6']:""; ?></textarea><br>

                                    </td>
                                </tr>



                                </tbody>
                            </table>

                        </div>

                        <p class="submit">
                            <input type="hidden" name="content_id" id="content_id" value="<?php echo (isset($content['content_id']) && $content['content_id'] !="") ? $content['content_id']:""; ?>">
                            <input type="submit" name="Setting Btn" class="button" id="save_content" value="Save Settings">
                        </p>



                    </div>
                </form>
            </div>
        </div>
			  
			  
			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<script>
    $.validate();
</script>
<script>
    CKEDITOR.replace( 'content_body'  ,{

        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );

    CKEDITOR.replace( 'content_body_ar'  ,{


        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );

    CKEDITOR.replace( 'tab-body'  ,{

        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );

    CKEDITOR.replace( 'tab-body2'  ,{


        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/dubaisetup/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    CKEDITOR.replace( 'tab-body3'  ,{


        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );CKEDITOR.replace( 'tab-body4'  ,{


        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    CKEDITOR.replace( 'tab-body5'  ,{

        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    CKEDITOR.replace( 'tab-body6'  ,{

        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    
    
    
     CKEDITOR.replace( 'about_service_desc'  ,{


        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );


    CKEDITOR.replace( 'about_service_desc_ar'  ,{


        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    
     CKEDITOR.replace( 'about_choose_desc'  ,{

        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );

    CKEDITOR.replace( 'about_choose_desc_ar'  ,{


        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    
     CKEDITOR.replace( 'about_support_desc'  ,{


        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );

    CKEDITOR.replace( 'about_support_desc_ar'  ,{


        filebrowserBrowseUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/capitalcms/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/capitalcms/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    
    
    
    
</script>
<!-- script to add new tags-->
<script>
    $('.add-tag').click(function(){
        var value = $(this).attr("id");
        $('#new_tags').val($('#new_tags').val() + value);
    });
</script>
<!-- script to remove tags-->
<script>
    $('.remtag').click(function(){

        var term = $(this).attr("id");
        var content = $('#content_id').val();

        var postData = {
            'term_id' : term,
            'content_id' : content
        };


        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>index.php/content/rmv_content_tag',
            dataType: "html",

            data: postData, // appears as $_GET['id'] @ your backend side
            success: function(data) {

                location.reload();

            }

        });
    });


</script>
<script>
    $(document).ready(function(e){

        var  value = $('.page_type').val();

        if (value == "Page") {

            $('#multi_tab').show();
        }
        else if(value == "About") {
            $('#multi_tab').hide();
        }
        else if(value == "Services") {
            $('#multi_tab').show();
        }
        else if(value == "Article") {
            $('#multi_tab').show();
        }
        else if(value == "Contact"){
            $('#multi_tab').show();
        }
        else {
            $('#multi_tab').hide();
        }

        $('.page_type').change(function(){
            var  value = $('.page_type').val();
            if (value == "Page") {

                $('#multi_tab').show();
            }
            else if(value == "About") {
                $('#multi_tab').hide();
            }
            else if(value == "Services") {
                $('#multi_tab').show();
            }
            else if(value == "Article") {
                $('#multi_tab').show();
            }
            else if(value == "Contact"){
                $('#multi_tab').hide();
            }
            else {
                $('#multi_tab').hide();
            }
        })
    })
</script>

<script>

    $('#save_content').click(function(e)
    {

        $("#type_error").text("");
        var a=0;

        var ext1 =  $('#featuredimg').val().split('.').pop().toLowerCase();


        if(ext1 == "")
        {
            a = 1;
        }
        else
        {
            if($.inArray(ext1, ['gif','png','jpg','jpeg']) == -1)
            {
                a = 0
            }
            else
            {

                a = 1;
            }
        }

        if(a != "1")
        {
            $("#type_error").text("Invalid Featured Image");
            $("#type_error").css("color", "red");

            e.preventDefault();
        }

        else{

            e.submit;

        }



    });
</script>

