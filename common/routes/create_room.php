<div class="row" id="custom-chat">
				<div class="col-sm-6 col-sm-offset-3">
					<form enctype="multipart/form-data" action="<?php echo base_url; ?>core/private/create_room.php" method="post" role="form" data-toggle="validator" class="shake">
						<div class="form-group">
							<label for="Room_Name">Nama Room</label>
							<input type="text" class="form-control" placeholder="Nama Room" name="roomName" autocomplete="off" required data-error="Nama Room Harus diisi." onkeypress="return isText(event)">
						</div>
						
						<!--
						<div class="form-group">
							<label for="Room_Type">Type Room</label><br/>
							<input type="radio" name="roomType" class="private" value="Private" required data-error="Type Room harus dipilih."> Private Room <br/>
							<input type="radio" name="roomType" class="public" value="Public" required data-error="Type Room harus dipilih."> Public Room
							<div class="help-block with-errors"></div>
						</div>
						
						<div id="private">
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password Room" name="roomPwd" autocomplete="off" required data-error="Password Room Harus diisi dahulu.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						-->
						
						<div class="form-group">
							<label for="InputFile">Gambar Chatroom</label>
							<input type="file" name="roomImage" required>
							<p class="help-block">Upload Gambar Chatroom.</p>
						</div>
						
						<div class="form-group">
							<button type="submit" name="buttonCreate" class="btn btn-info btn-block btn-room">Buat Room</button>
						</div>
					</form>
						<a href="<?php echo base_url; ?>user"><button class="fa fa-chevron-left btn btn-success">&nbsp;Kembali</button></a>
				</div>
			</div>