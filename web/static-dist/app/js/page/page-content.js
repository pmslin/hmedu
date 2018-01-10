$(document).ready(function(){ 
	$("#bishi").mouseover(function (){  
            $("#bmsj").html("报名时间 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4月5日~8日");
			$("#zkzdy").html("准考证打印 &nbsp;&nbsp;&nbsp; 考前一周");
			$("#kssj").html("笔试时间 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2018.3.2");
			$("#cjcx").html("成绩查询 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 考后一个月");
			$("#bishi").css('color','#2dbb55');
    }).mouseout(function (){  
		$("#bishi").css('color','#404040');
	});  
	
	$("#mianshi").mouseover(function (){  
            $("#bmsj").html("报名时间 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 12月2日~9日");
			$("#zkzdy").html("准考证打印 &nbsp;&nbsp;&nbsp; 考前两周");
			$("#kssj").html("面试时间 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2018.5.16");
			$("#cjcx").html("成绩查询 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 考后三周");
		$("#mianshi").css('color','#2dbb55');
    }).mouseout(function (){  
		$("#mianshi").css('color','#404040');
	}); 
}); 