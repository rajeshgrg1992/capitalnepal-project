

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
                        <strong>Error!</strong>  <?php echo $this->session->flashdata('error'); ?>.
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> <?php echo (isset($title) && $title !="") ? $title:""; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="panel panel-info">


                            <div class="panel-body">
                                <form class="tab_form" method="post" action="newsletter/form_group<?php echo ($id > 0) ? "/$id" : ""; ?>">
                                    <div class="tab-content">

                                        <div class="tab-pane fade active in" id="home">

                                            <table class="form-table content-adjustment">
                                                <tbody>


                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Group Name <span class="asterisk">*</span>
                                                        </label></th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <input type="text" name="group_name" class="form-control" data-validation="required"  size="50" data-validation="text required" value="<?php echo (isset($detail['group_name']) && $detail['group_name'] !="") ? $detail['group_name']:""; ?>"  autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">

                                                    </td>
                                                </tr>

                                                <tr valign="top">
                                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Group Members <span class="asterisk">*</span>
                                                        </label>
                                                        <br/>
                                                        <input type="checkbox" id="checkall" />
                                                        <label for="checkall">Select All</label>
                                                    </th>
                                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                                        <div id="checkboxes">
                                                            <?php
                                                            $allLists = ($id > 0) ? unserialize($detail['lists']) : array();
                                                            if(count($subscribers) > 0):
                                                                foreach($subscribers as $row):
                                                                    ?>
                                                                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                                                        <label><input type="checkbox" name="lists[]" value="<?php echo $row['id']; ?>" <?php echo (in_array($row['id'],$allLists)) ? "checked" : ""; ?>>&nbsp; <?php echo strtolower($row['email']); ?></label>
                                                                    </div>
                                                                    <?php
                                                                endforeach;
                                                            endif;
                                                            ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div>



                                        <p class="submit">
                                            <input type="submit" name="Setting Btn" id="btn_news" class="button" value="Save Group" />
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
    $('#btn_news').click(function(e)
    {


        var b =0;



        var ext2 =  $('#featuredimg').val().split('.').pop().toLowerCase();



        if(ext2 == "")
        {
            b = 1;
        }
        else
        {
            if($.inArray(ext2, ['gif','png','jpg','jpeg']) == -1)
            {
                b = 0
            }
            else
            {

                b = 1;
            }
        }


       if(b != "1")
        {
            alert('Invalid Featured Image');
            e.preventDefault();
        }

        else{

            e.submit;

        }


    });
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#checkall').click(function() {
			var checked = $(this).prop('checked');
			$('#checkboxes').find('input:checkbox').prop('checked', checked);
		});
	})
	</script>
