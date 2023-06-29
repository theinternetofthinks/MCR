		</main>


		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4">
						<div class="block-footer-info">
							<h2>MCR International
							<strong>MADRID</strong></h2>

							<span>C/ Raimundo Fdez. Villaverde 45, 7º A Exterior</span>
							<span class="mb-4">28003 Madrid</span>

							<a href="tel:+34 91 535 98 20">+34 91 535 98 20</a>
							<a href="mailto:mcr@mcrinternational.com">mcr@mcrinternational.com</a>
						</div>

					</div>
					<div class="col-12 col-md-4">
						<div class="block-footer-info">
							<h2>MCR International
							<strong>BARCELONA</strong></h2>

							<span>C/ Ronda Sant Pere, 19 – piso 6º, oficina 3</span>
							<span class="mb-4">08010 Barcelona</span>

							<a href="tel:+34 93 247 99 43">+34 93 247 99 43</a>
							<a href="mailto:mcr@mcrinternational.com">mcr@mcrinternational.com</a>
						</div>

					</div>
					<div class="col-12 col-md-4">
						<div class="block-footer-info">
							<h2>MCR International, Ltda.
							<strong>CHILE</strong></h2>

							<span>C/ Estoril 50, oficina 809- Las Condes 4</span>
							<span class="mb-4">Santiago de Chile</span>

							<a href="tel:+56 229 54 23 32">+56 229 54 23 32</a>
							<a href="mailto:mcr@mcrinternational.com">mcr@mcrinternational.com</a>
						</div>

					</div>


				</div>
				<div class="row">	
					<div class="col-12">
						<ul class="list-sites">
							<li><a target="_blank" href="https://solotalento.com/">Solo Talento</a></li>
							<li><a target="_blank" href="https://solotalentosfarma.com/">Solo Talentos Farma</a></li>
							<li><a target="_blank" href="https://www.mujeresenfarma.com/">Mujeres en Farma</a></li>
							<li><a target="_blank" href="https://www.fundaciontalentomcr.org/">Fundación TALENTO-MCR</a></li>
							<li><a target="_blank" href="https://www.linkedin.com/company/mcr-international/">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-linkedin-blue.png" class="logo-linkedin blue">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/logo-linkedin-white.png" class="logo-linkedin white"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-end">
				<span>2023 MCR Internationational </span>
				<ul>
					<li><a href="/politica-de-privacidad">Política de privacidad</a></li>
					<li><a href="/politica-de-cookies">Política de cookies</a></ll>
				</ul>
			</div>
			<button id="upTop" class="up-top"></button>

		</footer>


	<!-- Modal sucess-->
	<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="formContact" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body text-center">
			<h2>Gracias por contactar con nosotros</h2>
			<p>Nos pondremos en contacto lo antes posible</p>
		</div>
		</div>
	</div>
	</div>




	<!-- Modal -->
	<div class="modal fade" id="formContact" tabindex="-1" role="dialog" aria-labelledby="formContact" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<?php echo do_shortcode( '[contact-form-7 id="5" title="Formulario de contacto 1"]' ); ?>

		</div>
		</div>
	</div>
	</div>


		<?php wp_footer(); ?>


	</body>
</html>