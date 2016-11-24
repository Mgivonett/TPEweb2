<!--////////////////////////////////////Header-->
<header xmlns="http://www.w3.org/1999/html">
    <div class="zerogrid">
        <center>
            <div class="logo t-center">
                <a href="#" class="inicio-Btn"><img src="css/imagenes/logo.png"></a>
            </div>
        </center>
    </div>
</header>
<div class="site-title">
    <div class="zerogrid">

        {if !isset($usuario)}
        <div class="row">
            <h2 class="t-center log-in"><a href="#" class="login">LOG IN/CREATE ACCOUNT</a></h2>
        </div>
        {/if}
        <div class="row">
            <p class="text-right">{include file='usuarioLogueado.tpl'}</p>
        </div>
    </div>
</div>
<!--//////////////////////////////////////Menu-->

<nav class="cmn-tile-nav">
    <ul class="clearfix">

        {foreach from=$generos key=index item=genero}
            <li  class="selecGen colour-3" data-titulogenero="{$genero['titulo']}"><a> {$genero['titulo']}</a></li>
        {/foreach}

    </ul>
</nav>



<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div class="crumbs">
            <div class="container">

                {include file='principal.tpl'}
            </div>
        </div>
    </div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
    <div class="copyright">
        <div class="wrapper">
            Copyright 2016 - <a href="https://youtu.be/mJm8HTcTc4o" target="_blank" rel="nofollow">Rodriguez, Givonetti</a>
            <ul class="quick-link f-right">
                <li><a href="#" class="admin-peliculas">{if $admin}Administrar Contenidos{/if}</a></li>
                <li><a href="#" class="AdminsConfig">{if $admin}Administrar Usuarios{/if}</a></li>
            </ul>
        </div>
    </div>
</footer>
