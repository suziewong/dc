<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>今晚吃神马？</title>
<style>
@charset "utf-8";/* 默认网页编码是UTF-8个格式*/ 
img, :link img, :visited img {border:none;}/* 默认图片不带边框*/ 
input{vertical-align:middle;font-family:宋体,serif;}/* 默认输入框字居中，字体为宋体*/
*{margin:0px;padding:0px;list-style:none;}/* 默认所有对象边距为0，填充为0*/
#imagebg{
	background-image: url(images/images.jpg);
	background-repeat: no-repeat;
	background-position: center top;
	height:643px;
	overflow:hidden;
}
#box{ height:100px; line-height:100px; margin:0 auto; margin-top:200px; width:703px; text-align:center; color:#138ee7; font-size:70px;font-family: "Microsoft YaHei","微软雅黑", "宋体";}
#bt{ color:#FFFFFF; cursor:pointer; font-size:16px; width:142px; height:36px; line-height:36px; margin:0 auto; margin-top:65px; text-align:center;font-family: "Microsoft YaHei","微软雅黑", "宋体";}
#foot{text-align:center;margin-left: auto; margin-right: auto;color:black;font-size:15px;font-family: "Microsoft YaHei","微软雅黑", "宋体";}
</style>
        <script>
            var namelist=[

				"大排套餐","今晚不吃饭","大肉套餐","酱鸭套餐","鸡腿套餐",
				"口水鸡","白切鸡","黑椒牛扒","今晚不吃饭","葱爆肥肠","菊花点菜"
				];
			
			var mytime=null;
			
            function doit(){
                var bt=window.document.getElementById("bt");
                if(mytime==null){
                    bt.innerHTML="停止点菜";
                    show();                    
                }else{
                    bt.innerHTML="开始点菜";
                    clearTimeout(mytime);
                    mytime=null;                    
                }
            }
            
            function show(){
                var box=window.document.getElementById("box");
                var num=Math.floor((Math.random()*100000))%namelist.length;
                box.innerHTML=namelist[num];
                mytime=setTimeout("show()",1);
            } 
			
		//修改的代码
		
		window.onload=function(){
			var oImagebg=window.document.getElementById("imagebg");
			var oBt=window.document.getElementById("bt");
			var bstop = true;
			oImagebg.onkeydown=function(ev){
				  var ev = ev || window.event;
				  if(ev.keyCode == 13 && bstop ){
						 show();
						 bstop=false;
						 bt.innerHTML="停止点菜";
				  }else{
						clearTimeout(mytime);
						mytime=null; 
						bt.innerHTML="开始点菜";
						bstop = true; 
				  }
			};
		};
</script>
</head>
<body id="imagebg">
<div id="box">今晚吃神马？</div>
<div id="bt" onClick="doit()">开始点菜</div>
<div id="bt"><a href="http://blog.myzjut.org" style="text-decoration: none;">精弘网络 提供</a></div>
<div id="foot">免责声明:与此程序产生的相关的打架，恋爱，约炮，SM均与精弘网络无关</div>
</body>
</html>
