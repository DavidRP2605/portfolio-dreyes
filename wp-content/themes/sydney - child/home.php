<?php
/**
 * The home template file.
 *
 * @package Sydney
 * <?php do_action('sydney_before_content'); ?>

*	<?php do_action('sydney_archive_content'); ?>

*	<?php do_action('sydney_after_content'); ?>
 */

get_header(); ?>

	<h1 style="text-align: center;">Sobre mí</h1>
  	<p style="text-align: center;">Soy un desarrollador web y un diseñador UX/UI con muchas ganas de mejorar. Mi pasión es combinar código limpio con diseños intuitivos para crear experiencias web excepcionales.</p>
          <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Desarrollo Web</h5>
                    <p class="card-text">Transformo ideas en sitios web funcionales, rápidos y escalables. Utilizo tecnologías modernas y buenas prácticas para escribir código limpio, mantenible y orientado a resultados. Ya sea una landing page o una aplicación compleja, mi objetivo es siempre entregar soluciones sólidas y eficientes.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Diseño UX/UI</h5>
                    <p class="card-text">Diseño experiencias centradas en el usuario. Me enfoco en la usabilidad, la claridad y la estética para que cada interfaz sea intuitiva, atractiva y coherente. Creo prototipos interactivos, flujos de usuario claros y diseños que conectan con las personas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Programación</h5>
                    <p class="card-text">Más allá del diseño y la maquetación, disfruto programar soluciones completas. Desde lógica de negocio hasta integraciones con APIs, me interesa entender cómo funciona todo por dentro y cómo optimizar cada parte. Siempre estoy aprendiendo nuevas tecnologías para mejorar mi stack y mis resultados.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php do_action( 'sydney_get_sidebar' ); ?>
<?php get_footer(); ?>