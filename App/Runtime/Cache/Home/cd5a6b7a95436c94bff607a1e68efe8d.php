<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--
            __     __
           /  \~~~/  \                                                                       |      金华激石信息技术有限公司      |
     ,----(     ..    )
    /      \__     __/
   /|         (\  |(
  ^ \   /___\  /\ |
     |__|   |__|-"
-->
<html>
<head>
	
<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
<base href="__APP__/">
	<meta name="keywords" content="<?php echo ($web_keywords); ?>">
	<meta name="description" content="<?php echo ($web_description); ?>">
	<meta http-equiv="x-ua-compatible" content="ie-edge,chrome=1"><!--//低版本IE支持CSS3属性-->
	<?php if($config["switch_mbaidu"] == '1'): ?><link rel="alternate" type="application/vnd.wap.xhtml+xml" media="handheld" href="http://<?php echo ($config["web_url"]); ?>/m/"/><?php endif; ?>
	<script src="__TMPL__Public/js/jquery1.8.js"></script>
	<script src="__TMPL__Public/js/pic.js"></script>
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/style.css">
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/animate.min.css">
	<!--[if lte IE 7]><script src="__TMPL__Public/css/lte-ie7.js"></script><![endif]-->
	<!-- <link rel="stylesheet" href="__TMPL__Public/Css/skrles.css?v=<?php echo time(); ?>"> -->
	<link rel="stylesheet/less" type="text/css" href="__TMPL__Public/css/skrles.less">
	<script src="__TMPL__Public/css/less.js" type="text/javascript"></script>
	<script src="__TMPL__Public/js/sky.js" type="text/javascript"></script>
    <script src="__TMPL__Public/js/wow.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="__TMPL__Public/js/selectivizr.js"></script><!--//低版本IE支持CSS3属性-->
<script type="text/javascript" src="__TMPL__Public/js/superslide.2.1.js"></script><!--//大图效果-->
<script>
	document.createElement("section");
	document.createElement("article");
	document.createElement("footer");
	document.createElement("header");
	document.createElement("hgroup");
	document.createElement("nav");
	document.createElement("menu");
</script>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
        new WOW().init();
    };
</script>


	<script>
		$(function() {
			var $nav=$("#Nav-1"),
				$lido=$(".<?php echo ($lid['name']); echo ($lid['id2']); ?>"),
				$sfl=$("#S-fl");
				$yido=$("#Nav-1").find('>li').eq(<?php echo ($yid); ?>);
			$yido.addClass("lon");
			gezong($yido,$nav);

			if($lido){
				$lido.addClass("lon");
				gezong($lido,$sfl);
			}
			
			function gezong ($a,$b) {
				$b.find(">li").hover(function(){
					var $this=$(this);
						$a.removeClass("lon");
						$this.addClass("lon");
				},function(){
					var $this=$(this);
						$this.removeClass("lon");
						$a.addClass("lon");
				});
			}
		});
	</script>
<?php echo ($config["code_head"]); ?>



</head>
<body>

<div class="utility">
	<div class="header_top">
		<span>欢迎光临<?php echo ($config['web_name']); ?>网站！</span>
		<a style="CURSOR: hand" onClick="AddFavorite('<?php echo ($title); ?>',location.href)" title="" href="####">加入收藏 | </a>
		<a href="####" onclick="SetHome(this,'http://<?php echo ($_SERVER ['HTTP_HOST']); ?>')">设为首页</a>
	</div>
</div>
<div class="header">
	<div class="top">
			<a href="__ROOT__/" titile="<?php echo ($config['name']); ?>">
				<img  src="__ROOT__/__UPLOAD__/<?php echo ($config['logo']); ?>" alt="Logo" class="logo wow zoomInLeft">
			</a>

		<img src="../Public/images/tel.jpg" style="float: right;">

	</div>
	<div class="header_nav_k">
		<div class="header_nav">
			<ul class="nav" id="Nav-1">
				<?php function scnav($str,$a=1) { $att=""; if($str['cun']){ $att=$a>1?'<ul style="top:-7px;left:106px;" class="dropdown-menu">':'<ul class="dropdown-menu">'; foreach ($str['cun'] as $k => $v) { $hlz=scnav($v,$a+1); $att.=sprintf('<li id="%s" class="dropdown"><a href="__ROOT__/%s">%s</a>',$v['tid'],$v['url'],$hlz?$v['name']:$v['name']); $att.=$hlz; $att.='</li>'; } $att.='</ul>'; } return $att; } $att=''; foreach ($fnav as $k => $v) { $nav_arr= explode(',',$v['name']) ; $hlz=scnav($v); $att.=sprintf('<li id="%s" class="dropdown"><a href="__ROOT__/%s">%s<br /><font class="en">%s</font></a>',$v['tid'],$v['url'],$nav_arr[0],$nav_arr[1]); $att.=$hlz; $att.='</li>'; } echo($att); ?>
			</ul>
		</div>
	</div>
</div>


<div class="banner">
    <div id="KinSlideshow" >
        <ul>
            <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url('__ROOT__/__UPLOAD__/<?php echo ($vo["img"]); ?>') no-repeat 50% 0;"><a href="<?php echo ($vo["link"]); ?>"  alt="<?php echo ($vo["title"]); ?>"></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>





	<div class="main">
		<div class="search">
			<div class="keywords">
				<li>中电电气</li>
				<li>友科太阳能</li>
				<li>上海兆能</li>
				<li>固德威</li>
			</div>
			<form id="form1" name="form1" method="get" action="__ROOT__/product/sousuo">
				<i></i>
				<input name="key" value="" placeholder="　请输入关键词" class="text">
				<input type="submit" name="Submit" value="" class="anan" />
			</form>
		</div>
	</div>
<div class="clear2"></div>
<div class="video">
	<div class="main">
		<div class="video1">
			<iframe src='http://player.youku.com/embed/XMTQ1ODY4NzI0' frameborder=0 'allowfullscreen'></iframe>
			<p>浙江影视科技频道的采访</p>
		</div>
		<div class="video2">
			<iframe src='http://player.youku.com/embed/XMTQ1ODY4NzI0' frameborder=0 'allowfullscreen'></iframe>
			<p>视频展示</p>
		</div>
	</div>
</div>
<div class="product">
	<div class="main">
		<div class="class">
			<ul>
				<?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><li>
							<i class="btn-i-1"></i>
							<a href="__APP__/product/type/<?php echo ($vo1["id"]); ?>" class="btn-span-20"><span data-hover="<?php echo ($vo1["name"]); ?>"><?php echo ($vo1["name"]); ?></span>
								<i></i>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="product-pic">
			<?php if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture">
					<div class="picture1">
						<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/im_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,295,295)"/></a>
					</div>
					<div class="picture2">
						<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<div class="clear2"></div>
	<a href="product/type/6" class="more btn-span-14"><span>了解更多</span></a>
</div>
<div class="about">
	<div class="main">
		<p><?php echo (msubstr($intro['content'],0,560,'utf-8',true)); ?></p>
	</div>
	<a href="company" class="more btn-span-14-1"><span>了解更多</span></a>
</div>
<div class="youshi"></div>
<div class="factory">
	<div class="factory-dh"></div>
	<div class="factory-nr">
		<div id="demo" style=" width:100%; overflow:hidden;">
			<table align=left cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td id="demo1" valign=top ><div style="width:1500px; ">
						<?php if(is_array($factory)): $i = 0; $__LIST__ = array_slice($factory,0,10,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pict">
								<div class="pict1"> <a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,295,295)"/></a></div>
								<div class="pict2"> <a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo (mb_substr($vo["title"],0,20,'utf-8')); ?></a></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div>
					</td>
					<td id="demo2" valign=top></td>
				</tr>
			</table>
		</div>
	</div>
	<a href="product/type/27" class="more btn-span-14-2"><span>了解更多</span></a>
</div>

<div class="huodong">
	<div class="main" style="width: 1070px;">
		<?php if(is_array($huodong)): $i = 0; $__LIST__ = array_slice($huodong,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pict" style="width: 242px;height: 242px;margin-right: 20px;">
				<div class="pict1" style="width: 242px;height: 242px;">
					<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,242,242)"/></a>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="clear2"></div>
		<a href="product/type/33" class="more btn-span-14-3" style="margin-top: 20px;"><span>了解更多</span></a>
	</div>
</div>
<div class="xiangmu">
	<div class="xiangmu-dh">
		<div class="main">
			<a href="product/type/37" class="btn-span-20"><span data-hover="民用项目方案">民用项目方案</span></a>
			<a href="product/type/38" class="btn-span-20"><span data-hover="商业项目方案">商业项目方案</span></a>
		</div>
	</div>
	<div class="main">
		<div class="xiangmu-nr">
			<?php if(is_array($xiangmu)): $i = 0; $__LIST__ = array_slice($xiangmu,0,8,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="picture" style="width:300px;height:300px;margin: 0;">
						<div class="picture1" style="width:300px;height:300px;">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,300,300)"/></a>
						</div>
						<div class="picture2">
							<a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank" style="font-size: 16px;"><?php echo (mb_substr($vo["title"],0,15,'utf-8')); ?>...</a>
						</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="clear2"></div>
		<a href="product/type/33" class="more btn-span-14-4" style="margin-top: 20px;"><span>了解更多</span></a>
	</div>
</div>
<div class="honor" data-wow-delay=".4s">
	<div class="main">
		<div class="honor-dh">
			<p><?php echo ($config['tel']); ?></p>
		</div>
		<div class="case_nr">
			<div class="bodyCon08"><!--学员-->
				<div class="students">
					<div id="four_flash">
						<div class="flashBg">
							<ul class="mobile">
								<?php if(is_array($xiangmu1)): $i = 0; $__LIST__ = array_slice($xiangmu1,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
										<div class="picc">
											<div class="picc1"><a href="__APP__/product/<?php echo ($vo["id"]); ?>" target="_blank"><img src="__ROOT__/__UPLOAD__/in_<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["title"]); ?>" onload="AXImg(this,202,202)"/></a></div>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</div>
						<div class="but_right"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="main">
	<div class="industry">
		<div class="industry-dh dh"><a href="news/type/34">更多+</a></div>
		<div class="industry-nr">
			<?php if(is_array($industry)): $i = 0; $__LIST__ = array_slice($industry,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/news/<?php echo ($vo["id"]); ?>">
					<p ><?php echo ($vo["title"]); ?></p>
				</a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<div class="company">
		<div class="company-dh dh"><a href="news/type/39">更多+</a></div>
		<div class="company-nr">
			<img src="../Public/images/news-img.jpg" alt="新闻图片">
			<?php if(is_array($company)): $i = 0; $__LIST__ = array_slice($company,0,2,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/news/<?php echo ($vo["id"]); ?>">
					<p><?php echo ($vo["title"]); ?></p>
				</a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<div class="liuyan">
		<div class="liuyan-dh dh"></div>
		<form action="__ROOT__/message/add_message" method="POST" id="form1">
			<table class="order" style="margin-left: 0;margin-bottom: 0;margin-top: 0;">
				<tr>
					<td><input name="name" type="text" id="name" placeholder="姓名：" style="width: 395px;height: 31px;margin-bottom:5px;"></td>
				</tr>
				<tr>
					<td><input name="tel" type="text" id="tel"placeholder="电话：" style="width: 395px;height: 31px;margin-bottom:5px;" ></td>
				</tr>
				<tr>
					<td><input name="email" type="text" id="email"placeholder="邮箱：" style="width: 395px;height: 31px;margin-bottom:5px;"  ></td>
				</tr>
				<tr>
					<td><textarea name="content" id="content" cols="90" rows="4" placeholder="留言：" style="width: 395px;margin-bottom:5px;"></textarea></td>
				</tr>
				<tr>

					<td><span style="margin-right: 10px;">验证码：</span>
						<input type="text" id="captcha" name="captcha" maxlength="4" autocomplete="off" style="width:60px;height:18px;">&ensp;
						<img src="__ROOT__/Base/verify" alt="" title="点击更换验证码" onclick="this.src='__ROOT__/Base/verify?t='+Math.random();"><input id="submit" type="submit" value="&emsp;"   class="tijiao" style="margin-left: 15px;">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
			</table>
		</form>
	</div>
</div>

<div class="clear2"></div>
<div class="footer">
    <div class="main">
        <div class="link">
            <span>友情链接：</span>
            <?php if(is_array($link)): $i = 0; $__LIST__ = array_slice($link,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($vo["www"]); ?>" target="_blank" rel="nofollow"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="ff">
            Copyright © 2017 <?php echo ($config['web_name']); ?> All Rights Reserved.　电话：<?php echo ($config['tel']); ?>　　手机：<?php echo ($config['mobile']); ?>　联系人：<?php echo ($config['linkman']); ?> 　网页设计：激石信息技术<a href="__APP__/admin" target="_blank">[后台登陆]</a>
            </a><a href="__ROOT__/Sitemap">　网站地图</a><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1261191604'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1261191604%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
        </div>
    </div>
</div>

<script type="text/javascript" src="__TMPL__Public/js/unslider/unslider.min.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/Marquee/Marquee.js"></script><!--大图滚动效果-->
<script type="text/javascript" src="__TMPL__Public/js/js.js"></script>

<!--图标左右切换效果- <i class = "btn-i-1"></i>----->
<script>
    $(function(){
        $(".btn-i-1").each(function(){
            $(this).wrap("<div class='btn1'><div class='btn2'></div></div>");
            var btnI = $(this).clone();
            $(this).parent().append(btnI);
            var btnWidth = $(this).width();
            var btnHeight = $(this).height();
            var left = "46px";//图标距离左边的距离
            var top = "60px";//图标距离顶部的距离
            $(this).css({display:"block",position:"absolute",left:0,margin:0,padding:0,});
            $(this).next(".btn-i-1").css({display:"block",position:"absolute",margin:0,padding:0,left:btnWidth});
            $(this).parents(".btn1").css({width:btnWidth,height:btnHeight,overflow:"hidden",left:left,top:top,position:"absolute"});
            $(this).parent(".btn2").css({position: "relative",left:0});
            $(this).parents(".btn1").parent().hover(function() {
                $(this).find(".btn2").stop().animate({left: -btnWidth});
            },function(){
                $(this).find(".btn2").stop().animate({left:0});
            })
        })
    })
</script>
<?php echo ($liuliangbao); ?>

</body>
</html>
<script language="javascript">
	var speed=30;
	var demo=document.getElementById('demo');
	var demo1=document.getElementById('demo1');
	var demo2=document.getElementById('demo2');
	demo2.innerHTML=demo1.innerHTML;
	function Marquee(){
		if(demo2.offsetWidth-demo.scrollLeft<=0)
		{
			demo.scrollLeft-=demo1.offsetWidth;
		}
		else
		{demo.scrollLeft++;}
	}
	var MyMar=setInterval(Marquee,speed);
	demo.onmouseover=function(){
		clearInterval(MyMar)
	}
	demo.onmouseout=function(){
		MyMar=setInterval(Marquee,speed)
	}
</script>

<script type="text/javascript">
	//学员
	var _index5=0;
	$("#four_flash .but_right").click(function(){
		_index5++;
		var len=$(".flashBg ul.mobile li").length;
		if(_index5+5>len){
			$("#four_flash .flashBg ul.mobile").stop().append($("ul.mobile").html());
		}
		$("#four_flash .flashBg ul.mobile").stop().animate({left:-_index5*212},1000);
	});
</script>