<div class="col-md-2 col-md-pull-10">
						<div class="sidebar">
							<div class="side">
								<h2>Categories</h2>
								<div class="fancy-collapse-panel">
									 <?php foreach($categorii as $categorie): ?>
			                     	<?php if($categorie->id_parinte == 0): ?>
			                  <div class="panel-group" id="accordion_<?php echo $categorie->id_categorie ?>" role="tablist" aria-multiselectable="true">
				                     <div class="panel panel-default">
				                         <div class="panel-heading" role="tab" id="headingOne_<?php echo $categorie->id_categorie ?>">
				                             <h4 class="panel-title">
				                                 <a data-toggle="collapse" data-parent="#accordion_<?php echo $categorie->id_categorie ?>" href="#collapseOne_<?php echo $categorie->id_categorie ?>" aria-expanded="true" aria-controls="collapseOne_<?php echo $categorie->id_categorie ?>"><?php echo $categorie->nume; ?>
				                                 </a>
				                             </h4>
				                         </div>
				                         <div id="collapseOne_<?php echo $categorie->id_categorie ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_<?php echo $categorie->id_categorie ?>">
				                             <div class="panel-body">
				                                 <ul>
				                                 	<?php foreach($categorii as $c): ?>
				                                 	<?php if($c->id_parinte == $categorie->id_categorie ): ?>
				                                 	<li><a href="#" class="product_category" id="<?php echo $c->id_categorie ?>"><?php echo $c->nume?></a></li>
				                                 	<?php endif; ?>
				                                 <?php endforeach; ?>
				                                 </ul>
				                             </div>
				                         </div>
				                     </div>
				                 <?php endif; ?>
			                 	<?php endforeach; ?>

			                  </div>

			               </div>
							</div>
							<div class="side">
								<h2>Price Range</h2>
								<form method="post" class="colorlib-form-2">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="min_price">Price from:</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="min_price" id="min_price" class="form-control">
				                        <option value="1">1</option>
				                        <option value="200">200</option>
				                        <option value="300">300</option>
				                        <option value="400">400</option>
				                        <option value="1000">1000</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="max_price">Price to:</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="max_price" id="max_price" class="form-control">
				                        <option value="2000">2000</option>
				                        <option value="4000">4000</option>
				                        <option value="6000">6000</option>
				                        <option value="8000">8000</option>
				                        <option value="10000">10000</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				              </div>
				            </form>
							</div>
						</div>
					</div>


