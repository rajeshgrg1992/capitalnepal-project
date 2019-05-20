

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
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
                        <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>.
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <?php echo (isset($title) && $title != "") ? $title : ""; ?>
                            </div>

                            <div class="panel-body">

                                <form class="tab_form" method="post" action="<?php echo site_url('rate_setting/form') ?>" enctype="multipart/form-data">
                                    <div class="tab-content">

                                        <div class="tab-pane fade active in" id="home">

                                            <table class="form-table content-adjustment">
                                                <tbody>
                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>Tax<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                        <input type="text" name="tax" class="form-control" size="50" data-validation="required"
                                                               value="<?php echo (isset($setting['tax']) && $setting['tax'] != "") ? $setting['tax'] : ""; ?>"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on"></td>
                                                </tr>


                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>Dollar:(always 1)<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                        <input type="number" name="dollar" class="form-control" size="50" data-validation="required"
                                                               value="<?php echo (isset($setting['dollar']) && $setting['dollar'] != "") ? $setting['dollar'] : ""; ?>"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on" readonly></td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>NPR:<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                        <input type="number" name="npr" class="form-control" size="50" data-validation="required"
                                                               value="<?php echo (isset($setting['npr']) && $setting['npr'] != "") ? $setting['npr'] : ""; ?>" step="0.0001"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on" ></td>
                                                </tr>
                                                      <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>INR:<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                        <input type="number" name="inr" class="form-control" size="50" data-validation="required"
                                                               value="<?php echo (isset($setting['inr']) && $setting['inr'] != "") ? $setting['inr'] : ""; ?>"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on" ></td>
                                                </tr>
                                                      <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>AED:<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                        <input type="number" name="aed" class="form-control" size="50" data-validation="required"
                                                               value="<?php echo (isset($setting['aed']) && $setting['aed'] != "") ? $setting['aed'] : ""; ?>"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on" ></td>
                                                </tr>
                                                      <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>euro:<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                        <input type="number" name="euro" class="form-control" size="50" data-validation="required"
                                                               value="<?php echo (isset($setting['euro']) && $setting['euro'] != "") ? $setting['euro'] : ""; ?>"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on" ></td>
                                                </tr>
                                                 <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row">
                                                        <label>Pound:<span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                                        <input type="number" name="pound" class="form-control" size="50" data-validation="required"
                                                               value="<?php echo (isset($setting['pound']) && $setting['pound'] != "") ? $setting['pound'] : ""; ?>"
                                                               autocomplete="off" class="regular-text required valid"
                                                               kl_virtual_keyboard_secure_input="on" ></td>
                                                </tr>
                        </tbody></table>
    
    
    

                                        <p class="submit">
                                            <input type="hidden" name="id"
                                                   value="<?php echo (isset($setting['id']) && $setting['id'] != "") ? $setting['id'] : ""; ?>">
                                            <input type="submit" name="Setting Btn" id="user_btn" class="button" value="Save">
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

