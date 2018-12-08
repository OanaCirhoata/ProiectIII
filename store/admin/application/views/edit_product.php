			<?php echo form_open_multipart('productscontroller/update_product'); ?>			
				<?php foreach($produs as $row): ?>
				<input type="hidden" value="<?php echo $row->id_produs ?>" name="id_produs" id="id_produs">
				<input class="form-control" type="text" name="nume_produs" id="nume_produs" value="<?php echo $row->nume ?>" placeholder="<?php echo $row->nume ?>">
	        	<input type="file" name="userfile[]" id="thumbnail_produs" class="form-control" required="" multiple="">
				<input class="form-control" type="text" name="descriere_produs" id="descriere_produs" value="<?php echo $row->descriere ?>" placeholder="<?php echo $row->descriere ?>">
				<input class="form-control" type="text" name="pret_produs" value="<?php echo $row->pret ?>" placeholder="pret" id="pret_produs">
				<input class="form-control" type="text" name="discount_produs" value="<?php echo $row->discount ?>" placeholder="discount" id="discount_produs">
				<select class="form-control" name="categorie_produs" id="categorie_produs">
					<option value="<?php echo $row->id_categorie ?>"><?php echo $row->nume ?></option>
				<?php endforeach; ?>
				<?php foreach ($categorii as $categorie): ?>
					<option value="<?php echo $categorie->id_categorie ?>"><?php echo $categorie->nume ?></option>
				<?php endforeach; ?>
				<input type="submit" name="submit" value="Actualizeaza" class="btn btn-primary" style="margin-top: 10px;">
			<?php echo form_close(); ?>

