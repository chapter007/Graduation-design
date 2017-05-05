
    <div class="col-lg-6 col-sm-6 col-xs-12" style="width: 50%;margin-left: 25%;z-index: 100;position: fixed;margin-top: 5%;">
      <div class="well">
        <div class="modal-preview">
          <div class="modal modal-primary">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="$('#change_passwd').hide()">×</button>
                  <h4 class="modal-title">修改密码</h4>
                </div>
                <div class="modal-body">
						<div class="col-lg-6" style="width:100%">
							<div class="col-lg-9">
							<input class="form-control" type="text" id="o_passwd" value="原密码">
							</div>
						</div>
						<br>
					  <div class="col-lg-6" style="width:100%;">
                        <div class="col-lg-9">
                          <input class="form-control" type="text" id="n_passwd" value="新密码">
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="$('#change_passwd').hide()">关闭</button> 
                <a type="button" class="btn btn-primary" onclick="change_passwd(this)">保存</a></div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        </div>
      </div>
    </div>
