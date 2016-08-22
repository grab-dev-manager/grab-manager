<!-- common form for search and pagination -->
<form id="pagerForm" method="post" action="./server/item/list.php">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}" />
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="${model.numPerPage}" />
	<input type="hidden" name="orderField" value="${param.orderField}" />
</form>


<div class="pageHeader">
	<form onsubmit="return navTabSearch(this);" action="grab_mgr_res.html" method="post">
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					Search <input type="text" name="keyword" />
				</td>
				<td><button type="submit">submit</button></td>
			</tr>
		</table>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="./server/item/add.html" target="navTab" title="item add"><span>add</span></a></li>
			<li><a class="delete" target="selectedTodo" rel="ids" href="./dwz/demo/common/ajaxDone.html?uid={sid_user}" title="delete"><span>delete</span></a></li>
			<li><a class="edit" href="./server/item/edit.html?uid={sid_user}" target="navTab" title="item edit"><span>edit</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="111">
		<thead>
			<tr>
				<th width="20"><input type="checkbox" group="ids" class="checkboxCtrl"></th>
<!--字段对应区域开始-->
<th>name</th>
<th>seller_id</th>
<th>type</th>
<th>estimated_price</th>
<!--字段对应区域结束-->



				<th>operate</th>
			</tr>
		</thead>
		<tbody>




			<!-- data list  -->
			<?php for ($i=0; $i < 50; $i++) {  ?>
			<tr target="sid_user" rel="2">
				<td><input name="ids" value="xxx" type="checkbox"></td>

				<!--字段对应区域开始-->
<td>Kodok Tumis Sayur Dengan Saus Mala</td>
<td>IDGFSTI00000023</td>
<td>A La Carte Menu</td>
<td>98000</td>
				<!--字段对应区域结束-->

				<td>
					<a title="item delete" target="ajaxTodo" href="./dwz/demo/common/ajaxDone.html?id=xxx" class="btnDel">delete</a>
					<a title="item edit" target="navTab" href="./server/item/edit.html?id=xxx" class="btnEdit">edit</a>
				</td>
			</tr>
			<?php } ?>
			<!-- data list -->




		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>show</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
			<span>records，total ${totalCount} records</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="200" numPerPage="20" pageNumShown="10" currentPage="1"></div>
	</div>
</div>