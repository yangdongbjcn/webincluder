	<form class="form-horizontal">
		<fieldset>
			<div class='form-group' style="display: none">
				<label class='col-sm-2 control-label'>类型</label>
				<div class='col-sm-10'>
					<input class='form-control' name='d_type' id='d_type' type="text"></input>
				</div>
			</div>
			<div class='form-group'>
				<label class='col-sm-2 control-label'>标题</label>
				<div class='col-sm-10'>
					<input class='form-control' name='d_title' id='d_title' type="text"></input>
				</div>
			</div>
			<div class='form-group'>
				<label class='col-sm-2 control-label'>URL</label>
				<div class='col-sm-10'>
					<input class='form-control' name='d_url' id='d_url' type="text"></input>
				</div>
			</div>
			<div class='form-group'>
				<label class='col-sm-2 control-label'>开始展示的日期</label>
				<div class='col-sm-10'>
					<input class='form-control' name='d_date' id='d_date' onclick="laydate()" type="text"></input>
				</div>
			</div>
			<div class='form-group'>
				<label class='col-sm-2 control-label'>结束展示的日期</label>
				<div class='col-sm-10'>
					<input class='form-control' name='d_enddate' id='d_enddate' onclick="laydate()" type="text"></input>
				</div>
			</div>
			<div class='form-group'>
				<label class='col-sm-2 control-label'>备注</label>
				<div class='col-sm-10'>
					<textarea class='form-control' name='d_comment' id='d_comment'></textarea>
				</div>
			</div>
		</fieldset>
	</form>
	
	<button id="dailyadmin_modify_url" class="btn center-block yd_layout_width_xs">修改URL</button>
