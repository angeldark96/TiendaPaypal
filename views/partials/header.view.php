<header class="l-header">
    <div class="ed-container">
        <div class="ed-item"><a href="/"><img src="<?= PUBLIC_PATH ?>/img/logo.png" class="logo"/></a></div>
        <div class="ed-item">
            <div id="open-menu" class="hasta-web icon-menu"></div>
            <nav id="menu" class="menu-container">
                <div id="close-menu" class="icon-close hasta-web"></div>

                <ul class="ed-menu web-horizontal">
                    <li><a  href="<?= PUBLIC_PATH ?>/" class="selected" >inicio</a></li>
                    <li><a href="<?= PUBLIC_PATH ?>/nosotros">nosotros</a></li>
                    <li><a href="<?= PUBLIC_PATH ?>/productos">productos</a></li>
                    <li><a href="<?= PUBLIC_PATH ?>/contacto">contacto</a></li>
                    <li>
                        <form name="_xclick" target="paypal" action="https://www.paypal.com/pe/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="business" value="geancarlosce96@gmail.com">
                            <input type="image" src="https://www.paypal.com/es_XC/i/btn/view_cart.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro".>
                            <input type="hidden" name="display" value="1">
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>