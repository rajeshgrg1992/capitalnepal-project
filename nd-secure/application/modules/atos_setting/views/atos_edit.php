
<div class="row">
    <div class="col-lg-12">
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
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <?php echo (isset($title) && $title !="") ? $title:""; ?>
            </div>

            <div class="panel-body">

                <form class="tab_form" method="post" action="" enctype="multipart/form-data">
                    <div class="tab-content">

                        <div class="tab-pane fade active in" id="home">
                            <table class="form-table">
                                <tbody>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%; width: 100px;" scope="row"><label>Merchant Id<span class="asterisk">*</span>
                                        </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="merchant_id" value="<?php echo $atos['merchant_id']; ?>" data-validation="required" class="regular-text" style=" width:336px;">      
                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%; width: 100px;" scope="row"><label>Request_url<span class="asterisk">*</span>
                                        </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="request_url" value= "<?php echo $atos['request_url']; ?>" data-validation="required" class="regular-text" style=" width:336px;">
                                    </td>   
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%; width: 100px;" scope="row"><label>Currency code<span class="asterisk">*</span>
                                        </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="currency_code" value="<?php echo $atos['currency_code']; ?>" data-validation="required" class="regular-text" style=" width:336px;">
                                    </td>   
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%; width: 100px;" scope="row"><label>Secret_key<span class="asterisk">*</span>
                                        </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="secret_key" value="<?php echo $atos['secret_key']; ?>" data-validation="required" class="regular-text" style=" width:336px;">
                                    </td>   
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%; width: 100px;" scope="row"><label>Key Version<span class="asterisk">*</span>
                                        </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="key_version" value="<?php echo $atos['key_version']; ?>" data-validation="number" class="regular-text" style=" width:336px;">
                                    </td>   
                                </tr> 

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%; width: 100px;" scope="row"><label>Setting Type(TEST/LIVE)<span class="asterisk">*</span>
                                        </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                     <select name ="setting_type" class="setting_type" style="margin: 7%; width: 93%; height: 53%;">
                                            <option <?php echo (isset($atos['setting_type']) && $atos['setting_type'] =="LIVE")?"selected":"";?> name="live">live</option>
                                            <option <?php echo (isset($atos['setting_type']) && $atos['setting_type'] =="TEST")?"selected":"";?> name="test">test</option>
                                        </select>
                                        <!-- <input type="text" name="setting_type" value="<?php echo $atos['setting_type']; ?>" data-validation="required" data-validation-allowing="TEST,LIVE" class="regular-text"> -->
                                    </td>   
                                </tr>
                                
                            <tr valign="top" id="active-tr">
                                <th scope="row"><label>Is Active? </label></th>                        
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="radio" name="active_status" class="regular-text" data-validation="required" value="1"  <?php echo (isset($atos['active_status']) && $atos['active_status'] =="1")?"checked":"";?>/>Yes
                                        <input type="radio" name="active_status" class="regular-text" data-validation="required" value="0"  <?php echo (isset($atos['active_status']) && $atos['active_status'] =="0")?"checked":"";?>/>No
                                    </td>
                            </tr>
                           
                                
                </tbody>
            </table>
                        </div>
                        <p class="submit"> 
                            <input type="submit" name="submit" id="submit" class="button" value="Save">
                        </p>



                    </div>
                </form>
            </div>
        </div>


    </div>
</div>

<script>
    $.validate();
</script>

</body>
</html>




