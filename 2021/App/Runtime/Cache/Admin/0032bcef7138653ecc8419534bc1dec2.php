<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title><?php echo ($title); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->

<link rel="stylesheet" type="text/css" href="/Public/Static/Admin/css/dropzone.min.css"/>
<link href="/Public/Static/Admin/css/app.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="/Public/Static/Admin/css/imageHotAreaStyle.css">
<!-- Custom CSS -->
<link href="/Public/Static/Admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/Public/Static/Admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/Public/Static/Admin/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="/Public/Static/Admin/js/jquery.min.js"></script>

<script src="/Public/Static/Admin/js/app.min.js"></script>
<!-- Nav CSS -->
<link href="/Public/Static/Admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/Public/Static/Admin/js/metisMenu.min.js"></script>
<script src="/Public/Static/Admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="/Public/Static/Admin/js/d3.v3.js"></script>
<script src="/Public/Static/Admin/js/rickshaw.js"></script>
<script type="text/javascript" language="javascript" src="/Public/Static/Admin/js/jquery.image-maps5.0.js"></script>
<!-- <script src="/Public/Static/Admin/js/bootstrap.min.js"></script> -->
</head>
<script type="text/javascript">
    $(document).ready(function(e) {
        var title = $('.navbar-brand').html();

        var title_ = $('title').html();
        if(title_ == ''){
            $('title').html(title);
        }
    });
</script>
<style>
    .pager span {
        background: #00c0ef;
        color: #fff;
        border: 1px solid #00c0ef;
        margin-left: 8px;
        display: inline-block;
        padding: 6px 12px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .pager a {
        border: 1px solid #666666;
        padding: 6px 12px;
        margin-left: 8px;
        text-decoration: none;
        color: #333;
        outline: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
    }
</style>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">

                <a class="navbar-brand" href="<?php echo U('Index/index',array('token'=>$token));?>">??????????????????</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown" aria-expanded="false"><button class="btn btn-info"><?php echo ($community_user['username']); ?></button></a>
                    <ul class="dropdown-menu">
                        <li class="m_2"><a href="<?php echo U('Login/edit');?>"><i class="fa fa-wrench"></i> ????????????</a></li>
                        <li class="m_2"><a href="<?php echo U('Login/reset_password');?>"><i class="fa fa-user"></i> ????????????</a></li>
                        <li class="m_2"><a href="<?php echo U('Login/loginOut');?>"><i class="fa fa-lock"></i> ????????????</a></li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="<?php echo U('Active/index');?>"></i>????????????<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="#"></i>????????????<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Street/index');?>">????????????</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('StreetHistory/index');?>">????????????</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo U('News/index');?>"></i>????????????<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="<?php echo U('PCbanner/index');?>"></i>PC???????????????<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="<?php echo U('Slide/index');?>"></i>?????????????????????<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="<?php echo U('Shop/index',array('type'=>'cate'));?>"></i>????????????<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="<?php echo U('Posts/index');?>"></i>????????????<span class="fa arrow"></span></a>

                        </li>
                        <li>
                            <a href="#"></i>??????????????????<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Media/index');?>">????????????</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Media2/index');?>">????????????</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo U('Category/index');?>"></i>????????????<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/index');?>">???????????????</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo U('Links/index');?>"></i>??????????????????<span class="fa arrow"></span></a>

                        </li>


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<script src="/Public/Static/Admin/ueditor/ueditor.config.js"></script>
<script src="/Public/Static/Admin/ueditor/ueditor.all.js"></script>
<style>
  #start_tip{
    display: none;
  }
  #end_tip{
    display: none;
  }
  </style>
            <div id="page-wrapper">
                <div class="graphs">
                    <div class="xs">
                        <h3>
                            ????????????
                        </h3>
                        <div class="tab-content">
                            <div class="tab-pane active" id="horizontal-form">
                                <form class="form-horizontal" action="<?php echo U('Shop/create');?>" method="post">
                                    <input class="form-control1" name="type" type="hidden" value="<?php echo ($type); ?>">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">????????????*</label>
                                        <div class="col-sm-8">
                                           <select class="form-control select2" name="street_id" ng-model="model.select" required="">
                                                <option value="">?????????</option>
                                                <?php if(is_array($street)): $i = 0; $__LIST__ = $street;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><option value="<?php echo ($row['id']); ?>"><?php echo ($row['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">????????????*</label>
                                        <div class="col-sm-8">
                                           <select class="form-control select2" name="shoptype" ng-model="model.select" required="">
                                                <option selected="selected" value="">?????????</option>
                                                <!-- <?php if(is_array($shoptype)): $i = 0; $__LIST__ = $shoptype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shoptype): $mod = ($i % 2 );++$i;?><option <?php if($shoptype['id'] == $shop['type']): ?>selected<?php endif; ?> value="<?php echo ($type['id']); ?>"><?php echo ($type['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> -->
                                                <option name="shoptype" selected="selected" value="discount">??????</option>
                                                <option name="shoptype" selected="selected" value="food">??????</option>
                                                <option name="shoptype" selected="selected" value="fashion">??????</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">??????*</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="title" name="title" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">??????</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="description" name="description" type="text">
                                        </div>

                                    </div>
                                    <div class="form-group" id="editor">
                                        <label class="col-sm-2 control-label" for="focusedinput">??????</label>
                                        <div class="col-sm-8">
                                            <script type="text/javascript">
                                                var ue = UE.getEditor('content',{
                                                    initialFrameHeight: 500,//?????????????????????
                                                    scaleEnabled: true//???????????????????????????
                                                });
                                            </script>

                                            <!-- ??????????????? -->
                                            <script id="content" name="content" type="text/plain" style="height: 500px"></script>
                                        </div>
                                        <!-- ?????????????????? -->
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">????????????</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="business_hours" name="business_hours" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">??????</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="phone" name="phone" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">????????????</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="special_offer" name="special_offer" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">
                                               
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">??????</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="address" name="address" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">latitude(??????)</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="latitude" name="latitude" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">longitude(??????)</label>
                                        <div class="col-sm-8">
                                            <input class="form-control1" id="longitude" name="longitude" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            ?????????
                                        </label>
                                        <div class="col-md-2">
                                            <div class="cover-box">
                                                <div class="c-box"></div>
                                            </div>
                                            <input type="hidden" name="cover" id="cover" value="">
                                            <div style="width: 220px;">
                                                <div align="left" style="float:left">
                                                    <i id="dropzone" class="ifa fa-upload scstyle dropzone dz-clickable"><br/><h6>??????</h6></i>
                                                </div>
                                                <div align="right" style="margin-right: -30px;">
                                                    <!--<button type="button" class="btn btn-box btn-success btn-flat" data-toggle="modal" data-target="#upload-modal"><i class="fa fa-upload"></i>??????</button>-->
                                                    <button type="button" id="btn-clear-file" class="btn btn-box btn-danger btn-flat">
                                                        <i class="fa fa-reply"></i>
                                                        ??????
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-2 control-label">
                                            ????????????
                                        </label>
                                        <div class="col-md-6">
                                            <div class="row" id="imagesPanel">
                                            </div>
                                            <div class="dropzone" id="dropzoneImg" style="border: 2px dashed #d2d6de;">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">
                                               ???????????????????????????JPEG???PNG?????????
                                            </p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">??????</label>
                                        <div class="col-sm-8">
                                            ??????&nbsp;&nbsp;<input name="status" type="radio" checked="checked" value="published">&nbsp;&nbsp;&nbsp;&nbsp;??????&nbsp;&nbsp;<input name="status" type="radio" value="draft">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="focusedinput">????????????</label>
                                        <div class="col-sm-8">
                                            ???&nbsp;&nbsp;<input name="recommend" type="radio" value="1">&nbsp;&nbsp;&nbsp;&nbsp;???&nbsp;&nbsp;<input name="recommend" type="radio" checked="checked" value="0">
                                        </div>
                                        <div class="col-sm-2">
                                            <p class="help-block">

                                            </p>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <button class="btn btn-info">
                                                  ??????
                                              </button>
                                              <button type="button" class="btn btn-warning warning_22" onclick="javascript:history.back(-1);">????????????</button>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="copy_layout">
<p>
    Copyright ?? 2018 All rights reserved 
    <a href="//www.macautech.net" target="_blank" title="????????????">
        ????????????
    </a>
    
</p>
</div>
<script type="text/javascript">
	if($('.select2').length > 0) {
        $('.select2').select2();
    }
</script>
<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="/Public/Static/Admin/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/Public/Static/Admin/js/metisMenu.min.js">
    </script>
    <script src="/Public/Static/Admin/js/custom.js">
    </script>
</link>
                </div>
            </div>
            <!-- /#page-wrapper -->
        </div>
 <div class="modal" id="upload-modal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">????????????</h4>
            </div>
            <div class="modal-body">
                <form class="dropzone" id="dropzone" style="border: 2px dashed #d2d6de;">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal" id="upload-finished">??????</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        $('#start_time').daterangepicker({
            autoUpdateInput: false,
            timePicker: true,
            timePicker24Hour: true,
            locale: {
              format: 'YYYY-MM-DD HH:mm',
              cancelLabel: 'Clear',
            },
            "singleDatePicker": true,


        });
        var daysOfWeek = new Array('???', '???', '???', '???', '???', '???', '???');
        $('#start_time').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.startDate.format('YYYY-MM-DD HH:mm'));
            $('#start_tip').css('display','block').html(picker.startDate.format('YYYY-MM-DD HH:mm')+' ??????'+daysOfWeek[picker.startDate.format('d')]);
        });

        $('#start_time').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
            $('#start_tip').css('display','block').html('');
        });

        $('#end_time').daterangepicker({
            autoUpdateInput: false,
            timePicker: true,
            timePicker24Hour: true,
            locale: {
              format: 'YYYY-MM-DD HH:mm',
              cancelLabel: 'Clear',
            },
            "singleDatePicker": true,
            function(chosen_date) {
              $('#end_time').val(chosen_date.format('YYYY-MM-DD HH:mm'));
            }
        });
        $('#end_time').on('apply.daterangepicker', function(ev, picker) {
            $(this).val(picker.endDate.format('YYYY-MM-DD HH:mm'));
            $('#end_tip').css('display','block').html(picker.endDate.format('YYYY-MM-DD HH:mm')+' ??????'+daysOfWeek[picker.endDate.format('d')]);
        });

        $('#end_time').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');
            $('#end_tip').css('display','block').html('');

        });

</script>
<script type="text/javascript" src="/Public/Static/Admin/js/dropzone.min.js"></script>
<script type="text/javascript">
    file_input = 'cover';
    $('#upload-finished').click(function () {
        // window.location.reload();
    });

    if(typeof(file_success_object) == 'undefined'){
        file_success_object = '.cover-box .c-box';
    }

    $("#btn-clear-file").click(function(event) {
        $("#"+file_input).val('');
        $(file_success_object).html('');
    });


    Dropzone.options.dropzone = {

        url: "<?php echo U('Upload/upload');?>",
        method: "post",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
        },
        //maxFiles: 1,
        paramName: "file",
        maxFilesize: 10,
        addRemoveLinks:true,
        dictFileTooBig: "????????????????????????????????????",
        dictResponseError: "??????????????????????????????????????????",
        dictDefaultMessage: "",
        dictRemoveFile:"??????",
        accept: function (file, done) {
            done();
        },
        success: function (file, done) {
            // alert(done);
            // console.dir(done);
            if(done.code == 1){
                if(file_input){
                    $("#"+file_input).val(done.savepath);
                }

                $(file_success_object).html('<img src="'+done.photo+'">');
            }else{
                console.dir(done);
                // alert(done.message);
            }

        }
    };
</script>
    <script type="text/javascript">
        Dropzone.options.dropzoneImg = {
            url: "<?php echo U('Upload/upload');?>",
            method: "post",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            paramName: "file",
            maxFilesize: 10,

            addRemoveLinks:true,
            dictFileTooBig: "????????????????????????????????????",
            dictResponseError: "??????????????????????????????????????????",
            dictDefaultMessage: "?????????????????????????????????",
            dictRemoveFile:"??????",
            accept: function (file, done) {
                done();
            },
            success: function (file, done) {
                 console.dir(done);
                if(done.code == 1){
                    var imageTxt = "<div class='col-xs-3 col-md-4'>";
                    imageTxt += "<span class='deletePanel'><i class='fa fa-lg fa-trash'></i></span>";
                    imageTxt += "<div class='item'>";
                    imageTxt += "<div class='i-box'><img src='"+ done.photo +"'></div>";
                    imageTxt += "</div>";

                    // /* ??????id */
                    imageTxt += '<input type="hidden" name="files[file_id][]" value="'+ done.file_id +'">';
                    // /* ???????????? */
                    imageTxt += '<input type="hidden" name="files[file_url][]" value="'+ done.savepath +'">';
                    imageTxt += '<input type="hidden" name="files[post_to_image_id][]" value="0">';
                    imageTxt += "</div>";
                    $("#imagesPanel").append(imageTxt);
                    load_act();
                    resize_box();
                }else{
                    // alert(done.message);
                }
            }
        };


        /* ?????? */
        load_act();
        function load_act(){
            $("#imagesPanel>div").hover(function() {
                $(this).find('.deletePanel').fadeIn();
            }, function() {
                $(this).find('.deletePanel').fadeOut();
            });

            $(".deletePanel").each(function(index, el) {
                $(this).click(function(event) {
                    $(this).parent().fadeOut(1000, function() {
                        $(this).remove();
                    });
                });
            });
        }

        resize_box();
        /* ?????????????????? */
        function resize_box(){
            var css_w = $("#imagesPanel>div").css('width');
            if(css_w){
                if(css_w.indexOf('px') > -1){
                var w = $("#imagesPanel>div").width() - 5;
                }else{
                    var w = $("#imagesPanel>div").width() / 100 * $(".box-body").width() - 30;
                }

                console.log($("#imagesPanel>div").css('width') + "===" + w + "====" +$(".box-body").width() );
                $(".col-xs-3.col-md-2 .item,.col-xs-3.col-md-2 .i-box").width(w);
                $(".col-xs-3.col-md-2 .item,.col-xs-3.col-md-2 .i-box").height(w);
            }

        }

        $(function() {
            $(window).resize(function(){
                resize_box();
            })
        });
    </script>
        <!-- /#wrapper -->
        <!-- Nav CSS -->
        <link href="/Public/Static/Admin/css/custom.css" rel="stylesheet">
            <!-- Metis Menu Plugin JavaScript -->
            <script src="/Public/Static/Admin/js/metisMenu.min.js">
            </script>
            <script src="/Public/Static/Admin/js/custom.js">
            </script>
<style type="text/css">
    .scstyle{
        box-shadow: none;
        border-width: 1px;
        position: relative;
        padding: 15px 5px;
        margin: 0 0 10px 0;
        min-height: 0px !important;
        padding: 15px 5px;
        height: 60px;
        width: 80px;
        font-size: 12px;
        border: 2px dashed #d2d6de;
        min-width: 80px;
        text-align: center;
        color: #fff;
        background-color: #f6303e;
        border-color: #f6303e;

    }
    .ifa{
        font-size: 20px;display: block;
        font-family: FontAwesome;
        font-style: normal;
        font-weight: normal;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        text-rendering: auto;
        cursor: pointer !important;
    }
    .ifa:hover{

        background-color: #d63925;

    }
</style>
        </link>
    </body>
</html>