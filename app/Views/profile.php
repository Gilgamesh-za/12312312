<?= $this->extend('template/index') ?>
<?= $this->section('content') ?>
<!-- ======= Profile Section ======= -->
<section id="profile" class="features">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Profile</h2>
            <p>Kostumisasi profile anda sendiri</p>
        </header>
        <!-- Feature Tabs -->
        
			<!-- Page title -->
			<div class="my-5">
				<h3>My Profile</h3>
				<hr>
			</div>
			<!-- Form START -->
            <form action="/update_profile" method="post" class="file-upload">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="put">
            <?php foreach($user as $row): ?>
				<input type="hidden" name="id_user" value="<?= $row['id_user'];?>">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label">NIK *</label>
									<input type="text" name="nik" class="form-control" value="<?= $row['nik'];?>">
								</div>
								<div class="col-md-6">
									<label class="form-label">Nama *</label>
									<input type="text" class="form-control" name="nama" value="<?= $row['nama'];?>">
								</div>
								<div class="col-md-6">
									<label class="form-label">Alamat *</label>
									<input type="text" class="form-control" name="alamat" value="<?= $row['alamat'];?>">
								</div>
								<div class="col-md-6">
									<label class="form-label">Gender *</label>
									<input type="text" class="form-control" name="gender" value="<?= $row['gender'];?>">
								</div>
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">HP *</label>
									<input type="number" class="form-control" name="hp" value="<?= $row['hp'];?>">
								</div>
				
							</div> 
                            <!-- Row END -->
						</div>
					</div>
				</div> 


				<?php endforeach; ?>

            </form>
				</div> 
                <!-- Row END -->
				<!-- button -->
				
			</form> <!-- Form END -->
		</div>
	</div>
	</div>
        <!-- End Feature Tabs -->
    </div>
</section>
<!-- End Features Section -->
<?= $this->endSection(); ?>