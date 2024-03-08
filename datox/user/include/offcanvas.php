<!-- Phone Number OffCanvas -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom1">
		<button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		<div class="offcanvas-header share-style m-0 pb-0">
			<h6 class="title">Téléphone</h6>
		</div>
        <div class="offcanvas-body overflow-visible">
			<form method="POST" enctype="multipart/form-data">
				<div class="input-group dz-select">
					<div class="input-group-text"> 
						<div>
							<select class="form-control custom-image-select image-select" name="countryCode">
								<option data-thumbnail="assets/images/flags/france.png"><?php echo $row['countryCode'] ?></option>
							</select>
						</div>
					</div>
					<input type="number" name="phone" class="form-control" value="<?php echo $row['phone'] ?>">
				</div>
				<button type="submit" name="submitPhone" class="btn btn-gradient w-100 dz-flex-box btn-shadow rounded-xl" data-bs-dismiss="offcanvas" aria-label="Close">Enregistrer</button>
			</form>		
        </div>
    </div>
	<!-- Phone Number OffCanvas -->
	
	<!--  Email OffCanvas -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom2">
		<button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		<div class="offcanvas-header share-style m-0 pb-0">
			<h6 class="title">E-mail</h6>
		</div>
        <div class="offcanvas-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="input-group input-group-icon">
					<div class="input-group-text">
						<div class="input-icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
					</div>
					<input type="email" class="form-control" value="<?php echo $row['email'] ?>">
				</div>
				<button type="submit" name="submitEmail" class="btn btn-gradient w-100 dz-flex-box btn-shadow rounded-xl" data-bs-dismiss="offcanvas" aria-label="Close">Enregistrer</button>
			</form>
        </div>
    </div>
	<!--  Email OffCanvas -->

	<!--  Bio OffCanvas -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom22">
		<button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		<div class="offcanvas-header share-style m-0 pb-0">
			<h6 class="title">Bio</h6>
		</div>
        <div class="offcanvas-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="input-group input-group-icon">
					<div class="input-group-text">
						<div class="input-icon">
							<i class="fa-solid fa-user"></i>
						</div>
					</div>
					<input type="text" class="form-control" name="bio" value="<?php echo $row['bio'] ?>">
				</div>
				<button type="submit" name="submitBio" class="btn btn-gradient w-100 dz-flex-box btn-shadow rounded-xl" data-bs-dismiss="offcanvas" aria-label="Close">Enregistrer</button>
				
			</form>
        </div>
    </div>
	<!--  Bio OffCanvas -->
	
	<!--  Location OffCanvas -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom3">
		<button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		<div class="offcanvas-header share-style m-0 pb-0">
			<h6 class="title">Localisation</h6>
		</div>
        <div class="offcanvas-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="input-group input-group-icon">
					<div class="input-group-text">
						<div class="input-icon">
							<i class="icon feather icon-map-pin"></i>
						</div>
					</div>
					<input type="text" class="form-control" name="address" placeholder="Enter your address"value="<?php echo $row['address'] ?>">
				</div>
				<div class="input-group input-group-icon">
					<div class="input-group-text">
						<div class="input-icon">
							<i class="icon feather icon-map-pin"></i>
						</div>
					</div>
					<input type="text" class="form-control" name="country" placeholder="Enter your country" value="<?php echo $row['country'] ?>">
				</div>
				<button type="submit" name="submitAddress" class="btn btn-gradient w-100 dz-flex-box btn-shadow rounded-xl" data-bs-dismiss="offcanvas" aria-label="Close">Enregistrer</button>
			</form>
        </div>
    </div>
	<!--  Location OffCanvas -->
	
	<!--  Location OffCanvas -->
  <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom4">
    <button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div class="offcanvas-header share-style m-0 pb-0">
        <h6 class="title">Montrez-moi</h6>
    </div>
    <form method="POST" enctype="multipart/form-data">
        <div class="offcanvas-body">
            <div class="radio style-3">
                <label class="radio-label">
                    <input type="radio" id="radioFemme" name="interest" value="Femme" <?php if ($row['interest'] === 'Femme') echo 'checked'; ?>>
                    <span class="checkmark">
                        <span class="text">Femme</span>
                    </span>
                </label>
                <label class="radio-label">
                    <input type="radio" id="radioHomme" name="interest" value="Homme" <?php if ($row['interest'] === 'Homme') echo 'checked'; ?>>
                    <span class="checkmark">
                        <span class="text">Homme</span>
                    </span>
                </label>
                <label class="radio-label">
                    <input type="radio" id="radioTous" name="interest" value="Tous" <?php if ($row['interest'] === 'Tous') echo 'checked'; ?>>
                    <span class="checkmark">
                        <span class="text">Tous</span>
                    </span>
                </label>
            </div>
        </div>
    </form>
</div>
	<!-- Location OffCanvas -->