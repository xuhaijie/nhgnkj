<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
  <title>青峰网络智美云网站系统</title>
  <script type="text/javascript" src="../Public/js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap3/css/bootstrap.min.css" />
  
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap3/switch-master/bootstrap-switch.min.css" />

  <link rel="stylesheet/less" type="text/css" href="__PUBLIC__/css/base2.less"/>
  <script type="text/javascript" src="__PUBLIC__/js/less.js"></script>
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/js/Messenger/css/messenger.css" />
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/js/Messenger/css/messenger-theme-future.css" />
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/fileinput.css" />
  <script type="text/javascript" src="__PUBLIC__/js/fileinput.js"></script>
  <script type="text/javascript" src="__PUBLIC__/js/fileinput_locale_zh.js"></script>
<script>
var url = "__ROOT__",
    type = "<?php echo (MODULE_NAME); ?>";
</script>
</head>
<body class="main">
 	<div class="panel panel-default">
       
        <div class="panel-heading">
            <a href="javascript:;">产品</a>&gt;<a href="javascript:;"><?php echo ($title_type); ?>产品</a>
        </div>
            
        <div class="panel-body">
            <div class="well min-2">
                <div class="alert alert-danger">批量上传图片请上传到网站根目录的<strong>uploads</strong>文件夹中，支持图片类型：<strong>jpg、jpeg、gif、png(文件夹中请不要出现其他格式！出现也不会上传上去最后也会被删除o(╯□╰)o)</strong></div>
                <form class="form-horizontal" action="" method="get" id="form1" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-1 control-label">产品类别：</label>
                        <div class="col-sm-3">
                            <select id="pid" name="pid" onchange="" ondblclick="" class="form-control" ><?php  foreach($category as $key=>$val) { if(!empty($selected) && ($selected == $key || in_array($key,$selected))) { ?><option selected="selected" value="<?php echo $key ?>"><?php echo $val ?></option><?php }else { ?><option value="<?php echo $key ?>"><?php echo $val ?></option><?php } } ?></select>
                        </div>
                    </div>

                     <div class="form-group off" id="Cmm">
                        <label for="inputEmail3" class="col-sm-1 control-label">产品名称：</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="title" id="title" placeholder="产品名称" value="<?php echo ($info["title"]); ?>" />
                        </div>
                        <label for="inputEmail3" class="col-sm-1 control-label">起始编号：</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <span class="input-group-addon">
                                   开关：<input type="checkbox" checked="checked" id="onnum">
                                </span>
                                <input type="number" class="form-control" name="num" id="num" min="0" step="1" value="1" class="form-control" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-1 control-label">标题来源：</label>
                        <div class="col-sm-5">
                            <div class="radio">
                              <label>
                               <input type="radio" name="wc" value="0" checked="checked">
                               使用文件名作为标题
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                               <input type="radio" name="wc" value="1">
                                以文件夹命名文件
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                               <input type="radio" name="wc" value="2">
                                重命名
                              </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-1 control-label"></label>
                        <div class="row col-sm-11" id="Tupzs">
                          <div id="jdt" class="progress progress-striped active">
                            <div class="progress-bar"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                              <span class="">已完成:0%</span>
                            </div>
                          </div>
                            <?php  function njnjn($files){ $nh=''; $nh2=''; if($files['sim1']<>''){ foreach ($files['sim1'] as $key => $value) { if($value['imgs']<>''){ $nh.='<div class="panel panel-primary im-tab not" data-flne="'.$value['name'].'"><div class="panel-heading"><h3 class="panel-title text-zcenter">'.$value['name'].'</h3></div><div class="panel-body">'; $nh.=njnjn($value['imgs']).'</div></div>'; } } } if($files['sim2'] <> ''){ $nh2='<div class="panel panel-info im-tab" style="width:200px;"><div class="panel-heading"><h3 class="panel-title text-zcenter">目录图片('.count($files['sim2']).')</h3></div>'; $nh2.='<table class="table table-condensed table-hover"><tbody>'; foreach ($files['sim2'] as $key => $value) { $nh2.='<tr class="not" data-lx="'.$value['size'][2].'"><td>'.$value['img'].'</td></tr>'; } $nh2.='</tbody></table></div>'; } return ($nh.$nh2); }; echo njnjn($files); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-1 control-label">价格：</label>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" id="price" name="price" value="0" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-1 control-label">关键字：</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="keywords" placeholder="上传图片的关键字" name="keywords" value="<?php echo ($info["keywords"]); ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-1 control-label">排序：</label>
                        <div class="col-sm-1">
                           <input type="number" id="order" name="order" min="0" step="1" value="255" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-5 center-block" style="text-align: center;">
                            <?php if($info["id"] != ''): ?><input type="hidden" id="id" name="id" value="<?php echo ($info["id"]); ?>" />
                                <input type="hidden" id="img" name="img" value="<?php echo ($info["img"]); ?>" />
                                <input type="hidden" id="time" name="time" value="<?php echo ($info["time"]); ?>" />
                                <input type="hidden" id="click" name="click" value="<?php echo ($info["click"]); ?>" /><?php endif; ?>
                                <input type="submit" class="btn btn-primary btn-lg" value="提&nbsp;交"/>
                                <input type="reset" class="btn btn-warning btn-lg" value="重&nbsp;置" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>  

<script type="text/javascript" src="__PUBLIC__/js/upgoods.js"></script>
  <script type="text/javascript" src="__PUBLIC__/css/bootstrap3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/css/bootstrap3/switch-master/bootstrap-switch.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/js/Messenger/js/messenger.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/js/skr.js"></script>
</body>
</html>