<script type="text/javascript">
function testConfirmMsg(url, data){
	alertMsg.confirm("please save your infomation，or cancel！", {
		okCall: function(){
			// jQuery.post( url [, data ] [, success ] [, dataType ] )
			$.post(url, data, DWZ.ajaxDone, "json");
		}
	});
}
</script>
<div class="pageContent">
	<form method="post" action="demo/common/ajaxDone.html" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
		<div class="pageFormContent" layoutH="20">
			<?php for ($i=0; $i < 10; $i++) { ?>
			<p>
				<label>username：</label>
				<input name="name" class="required" type="text" size="30" value="aihua<?php echo $i ?>" alt="please type your name"/>
			</p>
			<p>
				<a href="javascript:;" onclick="testConfirmMsg('demo/common/ajaxDone.html','aihua<?php echo $i ?>')"> confirm </a>  
				<a href="server/user.php?method=remove" target="ajaxTodo">ajaxDelete</a>
				<a href="server/user.php?method=remove" target="ajaxTodo" title="are you sure to ajaxTodo?">sureAjaxTodo</a></p>
			<?php } ?>
		</div>
	</form>
</div>
<!-- <form method="post" action="url" class="pageForm required-validate" onsubmit="return validateCallBack(this);"> 
	<div class="pageFormContent" layoutH="56"> 
	<p> 
	<label>E-Mail：</label> 
	<input class="required email" name="email" type="text" size="30" /> 
	</p> 
	<p> 
	<label>客户名称：</label> 
	<input class="required" name="name" type="text" size="30" />
	</p>
	</div>
	<div class="formBar">
	<ul>
	<li>
	<div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div>
	</li>
	<li>
	<div class="button"><div class="buttonContent"><button type="Button" class="close">取消</button></div></div>
	</li>
	</ul>
	</div>
</form> -->