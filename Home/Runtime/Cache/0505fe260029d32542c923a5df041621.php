<?php if (!defined('THINK_PATH')) exit();?><html>
   <head>
    <meta charset="utf-8">
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>华中农业大学信息学院</title>
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css"/> 
  <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.9.0.js"></script>
  <script type="text/javascript"  src="__PUBLIC__/Js/demo.js"></script>
     <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/show.css"/> 
   </head>
      <body>
	    <div id="header">
			 <div class="logo"></div>
			 <div class="nav">
	<ul>
		<li><a class="xysy" href="__APP__/Index/index">首页</a></li>
		<li class="mainmenu">
			<a class="xygk" href="__APP__/Xygk">学院概况</a>
			<dl>
				<dd><a href="__APP__/Xygk/xyjj">学院简介</a></dd>
				<dd><a href="__APP__/Xygk/xyld">学院领导</a></dd>
				<dd><a href="__APP__/Xygk/zzjg">组织机构</a></dd>
			</dl>
		</li>
		<li class="mainmenu">
			<a class="xydt" href="__APP__/Xydt">学院动态</a>
			<dl>
			    <dd><a href="__APP__/Xydt/tzgg">通知公告</a></dd>
				<dd><a href="__APP__/Xydt/xyxw">学院新闻</a></dd>
				<dd><a href="__APP__/Xydt/ywgk">院务公开</a></dd>
				<dd><a href="__APP__/Xydt/xyzt">学院专题</a></dd>
			</dl>  
		</li>
		<li class="mainmenu">
			<a class="szdw" href="__APP__/Szdw">师资队伍</a>
			<dl>
				<dd><a href="__APP__/Szdw/jsml">教师目录</a></dd>
				<dd><a href="__APP__/Szdw/jsfc">教授风采</a></dd>
				<dd><a href="__APP__/Szdw/dsdw">导师队伍</a></dd>
				<dd><a href="__APP__/Szdw/glzj">各类专家</a></dd>
			</dl>
		</li>
		<li class="mainmenu">
			<a class="kxyj" href="__APP__/Kxyj">科学研究</a>
			<dl>
				<dd><a href="__APP__/Kxyj/kyfx">科研方向</a></dd>
				<dd><a href="__APP__/Kxyj/cgyzl">成果与专利</a></dd>
				<dd><a href="__APP__/Kxyj/kyjd">科研基地</a></dd>
				<dd><a href="__APP__/Kxyj/kyxm">科研项目</a></dd>
			</dl>    
		</li>
		<li class="mainmenu">
			<a class="rcpy" href="__APP__/Rcpy">人才培养</a>
			<dl>
				<dd><a href="__APP__/Rcpy/bksjy">本科生教育</a></dd>
				<dd><a href="__APP__/Rcpy/yjsjy">研究生教育</a></dd>
			</dl>  
		</li>
		<li class="mainmenu">
		    <a class="zsjy" href="__APP__/Zsjy">招生就业</a>
			<dl>
			   <dd><a href="__APP__/Zsjy/bkszs">本科生招生</a></dd>
		        <dd><a href="__APP__/Zsjy/yjszs">研究生招生</a></dd>
				<dd><a href="__APP__/Zsjy/jyfw">就业服务</a></dd>
		    </dl>
		</li>
		<li class="mainmenu">
		    <a class="xysh" href="__APP__/Xysh">校园生活</a>
			<dl>
		        <dd><a href="__APP__/Xysh/djgz">党建工作</a></dd>
				<dd><a href="__APP__/Xysh/txgz">团学工作</a></dd>
				<dd><a href="__APP__/Xysh/xygh">学院工会</a></dd>
		    </dl>
		</li>
		<li class="mainmenu">
		    <a class="fwxx" href="__APP__/Fwxx">服务信息</a>
			<dl>
		        <dd><a href="__APP__/Fwxx/xyh">校友会</a></dd>
				<dd><a href="__APP__/Fwxx/wjxz">文件下载</a></dd>
		    </dl>
		</li>
		<li class="mainmenu">
		   <a class="dwjl" href="__APP__/Dwjl">对外交流</a>
			<dl>
		        <dd><a href="__APP__/Dwjl/xsjz">学术进展</a></dd>
				<dd><a href="__APP__/Dwjl/hzyjl">合作与交流</a></dd>
		    </dl>
		</li>
	</ul>
             </div>
 </div>
	  <div id="box">
	  <!--left menu start-->
	    <div class="left">
        <div class="menu">
            <div class="menu-title"><?php echo ($ParCol['pname']); ?></div>
            <ul class="menu">
                <?php if(is_array($SubCols)): $i = 0; $__LIST__ = $SubCols;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$SubVal): $mod = ($i % 2 );++$i;?><li><a href="__APP__/<?php echo ($ParCol['code']); ?>/<?php echo ($SubVal['code']); ?>"><?php echo ($SubVal['pname']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
	    </div>
		</div>
	<!--left menu end-->
	<!--right list start-->
	  <div class="right">
		    <div class="img"></div>
			<div class="essay">
			   <div class="guide">
			       当前位置:
			       <a href="__APP__/Index/index">首页</a>
			        /
				   <a href="__APP__/<?php echo ($ParCol['code']); ?>/{SubVal['code']}"><?php echo ($ParCol['pname']); ?></a>
				   /	<strong><?php echo ($list['pname']); ?></strong>
			   </div>
			<hr>
			
			<h1><?php echo ($essay['etitle']); ?></h1>
			<p class="author">文章来源:<?php echo ($essay['efrom']); ?>  &nbsp;发布日期:<?php echo ($essay['ebuild']); ?>  &nbsp; 阅读次数:<?php echo ($essay['etimes']); ?></p>
               <div class="content">
			      <?php echo ($essay['edetail']); ?>
			   </div>
			</div>
			<hr>
			
			 <div class="page"><?php echo ($page); ?></div>
        <div class="share">
            <span>将本页分享到：</span>
            <span class="bdsharebuttonbox"></br>
            <a href="#" class="bds_more" data-cmd="more"></a>
            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
        </span>
        </div>
	   	</div>
		<div style="text-align:center; clear:both"> </div>
     </div>
		<!--right list end-->
      <div id="footer">
        <p>@2014 版权所有 All Rights Reserved.武汉华中农业大学信息学院 
		地址：中国·湖北·武汉 南湖狮子山街一号 430070 </br>
		* 建议使用Firefox, Chrome, IE8及以上版本浏览器访问本网页 * 技术支持:现代教育技术中心 </p>
    </div>
	   
  </body>
    <script>
    window._bd_share_config = {
        "common": {
            "bdSnsKey": {},
            "bdText": "【<?php echo ($PageTitle); ?>】 - 来自:华中农业大学信息学院！戳链接阅读原文",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "1",
            "bdSize": "24"
        },
        "share": {}
    };
    with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>
</html>