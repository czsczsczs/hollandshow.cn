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

<link rel="stylesheet" type="text/css" href="/2021/Public/Static/Admin/css/dropzone.min.css"/>
<link href="/2021/Public/Static/Admin/css/app.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="/2021/Public/Static/Admin/css/imageHotAreaStyle.css">
<!-- Custom CSS -->
<link href="/2021/Public/Static/Admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/2021/Public/Static/Admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/2021/Public/Static/Admin/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="/2021/Public/Static/Admin/js/jquery.min.js"></script>

<script src="/2021/Public/Static/Admin/js/app.min.js"></script>
<!-- Nav CSS -->
<link href="/2021/Public/Static/Admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/2021/Public/Static/Admin/js/metisMenu.min.js"></script>
<script src="/2021/Public/Static/Admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="/2021/Public/Static/Admin/js/d3.v3.js"></script>
<script src="/2021/Public/Static/Admin/js/rickshaw.js"></script>
<script type="text/javascript" language="javascript" src="/2021/Public/Static/Admin/js/jquery.image-maps5.0.js"></script>
<!-- <script src="/2021/Public/Static/Admin/js/bootstrap.min.js"></script> -->
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

            <div id="page-wrapper">
            <div class="graphs">
            <div class="xs">
             <h3 id="title">????????????</h3>
            </div>
            <div class="col-md-12">
                <div class="mailbox-content">

                   <div class="mail-toolbar clearfix">
                        
                        <div class="dropdown" style="padding-left:20px; ">
                          <a href="<?php echo U('StreetHistory/add');?>"><button type="button" class="btn btn-info">??????</button></a>
                          <a href="<?php echo U('StreetHistory/index');?>"><button type="button" class="btn btn-info">??????</button></a>
                        </div>
                        <div class="clearfix"> </div>
                        <br/>
                        <form class="bs-docs-example" novalidate="novalidate" ng-submit="submit()" action="<?php echo U('StreetHistory/index');?>" method="get">
                        <div class="col-md-2">
                          <select name="status" class="form-control select2">
                            <option selected="selected" value="">????????????</option>
                            <option <?php if($status == 'published'): ?>selected="selected"<?php endif; ?> value="published">??????</option>
                            <option <?php if($status == 'draft'): ?>selected="selected"<?php endif; ?> value="draft">??????</option>
                            <option <?php if($status == 'recommend'): ?>selected="selected"<?php endif; ?> value="recommend">??????</option>
                          </select>
                          
                        </div>
                        <div class="col-md-2">
                          <select name="street_id" class="form-control select2">
                            <option selected="selected" value="">????????????</option>
                            <?php if(is_array($street)): $i = 0; $__LIST__ = $street;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><option <?php if($row['id'] == $street_id): ?>selected="selected"<?php endif; ?> value="<?php echo ($row['id']); ?>"><?php echo ($row['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                          </select>
                          
                        </div>
                        <div class="col-md-2"><input type="text" class="form-control1" name="keyword" value="<?php echo ($keyword); ?>" placeholder="??????????????????????????????"></div>
                        <div class="col-md-2"><button type="submit" class="btn btn-info">??????</button>&nbsp;&nbsp;<a class="btn btn-info" href="<?php echo U('StreetHistory/index');?>">??????</a></div>
                        <div class="col-md-2">??? <span style="color: blue;"><?php echo ($count); ?> </span>?????????</div>

                    </form>          
                   </div>
                   

                    <table class="table">
                        <thead>
                            <tr class="unread checked">
                                <td id="thead_td">??????</td>
                                <td id="thead_td">?????????</td>
                                <td id="thead_td">????????????</td>
                                <td id="thead_td">??????</td>
                                <td id="thead_td">??????</td>
                                <td id="thead_td">??????</td>
                                <td id="thead_td">????????????</td>
                                <td id="thead_td">????????????</td>
                                <td id="thead_td">??????</td>
                            </tr>
                        </thead>
                        <tbody>
                          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr class="unread checked">
                                <td class="hidden-xs"><?php echo ($row['id']); ?></td>
                                <td class="hidden-xs">
                                  <?php if($row['cover_width_300']): ?><img width="150" src="<?php echo ($row['cover_width_300']); ?>">
                                  <?php else: endif; ?>
                                </td>
                                <td class="hidden-xs"><?php echo ($row['street_name']); ?></td>
                                <td class="hidden-xs"><?php echo ($row['title']); ?></td>
                                <td class="hidden-xs"><?php echo ($row['sort']); ?></td>
                                
                                <td class="hidden-xs"><?php echo ($row['status'] == 'published' ? '??????':'??????'); ?></td>
                                <td class="hidden-xs" id="recommend_<?php echo ($row['id']); ?>">
                                  <?php if($row['recommend']): ?><i onclick="recommend(<?php echo ($row['id']); ?>)" class="fa fa-check text-red" title="??????"></i>
                                    <?php else: ?>
                                    <i onclick="recommend(<?php echo ($row['id']); ?>)" class="fa fa-close text-muted" title="?????????"></i><?php endif; ?>
                                </td>
                                <td><?php echo (date("Y-m-d H:i:s",$row['created'])); ?></td>
                                <td>
                                <div class="dropdown">
                                 
                                  <a href="<?php echo U('StreetHistory/edit',array('id'=>$row['id']));?>"><button type="button" class="btn btn-warning warning_22">??????</button></a>
                                  <a onclick="deleted(<?php echo ($row['id']); ?>)"><button type="button" class="btn btn-danger">??????</button></a>
                                  <!-- <a href="<?php echo U('StreetHistory/add_en',array('id'=>$row['id']));?>" title="??????????????????"><button type="button" class="btn btn-info">??????????????????</button></a> -->
                                </div>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                   </div>
                  <ul class="paginList pager"><?php echo ($page); ?></ul>
                </div>
                <div class="clearfix"> </div>
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
<link href="/2021/Public/Static/Admin/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/2021/Public/Static/Admin/js/metisMenu.min.js">
    </script>
    <script src="/2021/Public/Static/Admin/js/custom.js">
    </script>
</link>
        </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<!-- Metis Menu Plugin JavaScript -->
<script>

    function deleted(id) {
        //?????????????????????????????????
        if (confirm("?????????????????????")) {
            $.ajax({
                url: "<?php echo U('StreetHistory/destroy');?>",
                type: "post",
                dataType: "json",
                data: {id: id},
                success: function (msg) {
                    //ajax????????????????????????????????????
                    if(msg.status == 403){
                      alert('????????????');
                      return false
                    }else{
                      location.reload(true);
                    }
                    
                }
            });
        }
    }
    //??????/????????????
    function recommend(id) {

            $.ajax({
                url: "<?php echo U('StreetHistory/recommend');?>",
                type: "post",
                dataType: "json",
                data: {id: id},
                success: function (msg) {
                    //ajax????????????????????????????????????
                   
                    if(msg.status == 'recommend'){
                      $('#recommend_'+id).html('<i onclick="recommend('+id+')" class="fa fa-check text-red" title="??????"></i>');
                    }
                    if(msg.status == 'cancel'){
                      $('#recommend_'+id).html('<i onclick="recommend('+id+')" class="fa fa-close text-muted" title="?????????"></i>');
                    }
                    
                }
            });
        
    }
</script>
</body>
</html>