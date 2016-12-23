
	<?php wp_footer(); ?>
		<footer class="footer">
			<div class="container-fluid col-md-offset-1 space-top">
				<div class="row">
					<div class="col-md-4  space-top-bottom">
						<h2>Mande sua mensagem</h2><div id="lista-de-baixo-enviar"></div>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefone">
							</div>
							<div class="form-group">
								<textarea placeholder="Mensagem" class="form-control" rows="3"></textarea>
							</div>

								<button type="submit" class="btn btn-default btn-lg btn-block btn-enviar">ENVIAR</button>

						</form>

					</div>
					<div class="col-md-2 space-top-bottom-dados">
						<?php
						$cont_clientes;
						$args = array('post_type'=>'dadosempresa', 'showposts'=>-1);
						$my_clientes = get_posts( $args );
						if($my_clientes) : foreach($my_clientes as $post) : setup_postdata( $post );
							$cont_clientes++;

							?>
							<div class="row">
								<div class="form-group">
									<label for="exampleInputPassword1"><p class="dados"><?php the_title(); ?></p></label>
								</div>
							</div>

							<?php
						endforeach;
						endif;
						?>
					</div>
					<div class="col-md-4 col-md-offset-1 space-top-bottom">
						<svg id="svgelem"  width="450" height="450" xmlns="http://www.w3.org/2000/svg">
							<rect id="redrect" width="450" height="450" fill="white" />
						</svg>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>