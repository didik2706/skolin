<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="loginModal"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content rounder">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Saya ingin Login sebagai</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body login-modal">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mx-auto">
							<a href="Login.html" class="btn btn-success w-100 text-light">Pelajar</a><br><br>
							<a href="Login.html" class="btn btn-success w-100 text-light">Orangtua</a><br><br>
							<a href="Login.html" class="btn btn-success w-100 text-light">Pengajar / Guru</a><br><br>
							<a href="{{ url('admin-sekolah/login') }}" class="btn btn-success w-100 text-light">Admin Sekolah</a><br><br>
							<a href="Login.html" class="btn btn-success w-100 text-light">Admin Yayasan</a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
<!-- ===== tutup modal ===== -->
<!-- ===== Modal Daftar murid ====== -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="registerModal"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content rounder">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Saya ingin daftar sebagai</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body login-modal">
				<div class="container">
					<div class="row">
						<div class="col-md-12 mx-auto">
							<a href="#" class="btn btn-success w-100 text-light">Pelajar</a><br><br>
							<a href="#" class="btn btn-success w-100 text-light">Orangtua</a><br><br>
							<a href="#" class="btn btn-success w-100 text-light">Pengajar / Guru</a><br>
							<hr>
							<a href="{{ url('admin-sekolah/register') }}" class="btn btn-accent w-100 text-light">Lembaga Pendidikan</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>