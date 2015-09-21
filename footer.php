	<!--Footer UP-->
	<div id="footer">
		<!--版权UP-->
		<div style="color:#ffffff;font-weight:700;font-size:13px; text-align:center; width:1000px; ">
			版权所有：2012-2016
			<p></p>
		</div>
		<!--版权DOWN-->
	</div>
	<!--Footer DOWN-->
</div>
<!--All DOWN-->
<!--百度统计代码-->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F4077b838f6e2d02b6abad7bb6472cd87' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">	
		function MM_swapImgRestore() 
		{ //v3.0
		  var i,x,a=document.MM_sr; 
		  for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
		}
		function MM_findObj(n, d) 
		{ //v4.01
		  var p,i,x;  
		  if(!d) d=document; 
		  if((p=n.indexOf("?"))>0&&parent.frames.length) 
		  {
				d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);
			}
		  if(!(x=d[n])&&d.all) x=d.all[n]; 
		  for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		  if(!x && d.getElementById) x=d.getElementById(n); 
		  return x;
		}
		function MM_swapImage() 
		{ //v3.0
		  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
		   if ((x=MM_findObj(a[i]))!=null)
		   {
		   	document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];
		   }
		}		
		function tick() 
		{
			var hours_roma,hours_pechino,minutes;
			var intHours_Roma,intHours_Pechino,intMinutes;
			var today;
			today = new Date();
			intHours_Roma = today.getUTCHours()+2;
			intHours_Pechino = today.getUTCHours()+8;
			intMinutes = today.getUTCMinutes();
			if (intHours_Roma == 0 || intHours_Roma == 24) 
			{
				hours_roma = "00:";
			}else 
			{
				hours_roma = intHours_Roma + ":";	
			}
			if (intHours_Pechino == 0 || intHours_Pechino == 24) 
			{
				hours_pechino = "00:";
			}
			else if(intHours_Pechino > 24)
			{
				hours_pechino = intHours_Pechino%24;
				hours_pechino = hours_pechino + ":";	
			}
			else
			{
				hours_pechino = intHours_Pechino + ":";
			}
			if (intMinutes < 10) 
			{
				minutes = "0"+intMinutes;
			} 
			else 
			{
				minutes = intMinutes;
			}
			timeString_Roma = hours_roma+minutes;
			clock_roma.innerHTML = timeString_Roma;
			timeString_Pechino = hours_pechino+minutes;
			clock_pechino.innerHTML = timeString_Pechino;
			window.setTimeout("tick();", 100);
		}
		window.onload = tick;
	</script>
</body>
</html>