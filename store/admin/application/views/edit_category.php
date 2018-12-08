<form method="POST" action="<?php echo base_url('categoriescontroller/update_category') ?>">			
				<?php foreach($categorie as $row): ?>
				<input type="hidden" value="<?php echo $row->id_categorie ?>" name="id_categorie" id="id_categorie">
				<input class="form-control" type="text" name="nume_categorie" id="nume_categorie" value="<?php echo $row->nume ?>" placeholder="<?php echo $row->nume ?>">
								
				<?php endforeach; ?>
				<input type="submit" name="submit" value="Actualizeaza" class="btn btn-primary" style="margin-top: 10px;">
			</form>