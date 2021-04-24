<!DOCTYPE html>
<html lang="ru" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
<title>LUA | VL4SOV DEV</title>
<meta property="og:title" content="LUA | VLASOV DEV" />
<?php
    require "head.php";
?>

<body>

  <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>

    <div class="layout-container clearfix">
    <?php
    require "header.php";
    ?>

      <main class="layout-content">
        <div>
          <div data-drupal-messages-fallback class="hidden"></div>

        </div>

        <section class="container" role="main">
          <div>
            <div id="block-light-content">

              <div class="lua-page">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lua</li>
                  </ol>
                </nav>

                <div>
                  <h1 class="lua-page--title">Lua скрипты для SA:MP</h1>
                </div>
                <div class="lua-page--description">
                  <div>
                    <a href="/lua/how-to-install">Инструкция по установке</a>
                  </div>
                  <div>
                    <a href="/lua/errors">Частые ошибки</a>
                  </div>
                </div>

                <?php
                require "luascript.php";
                ?>
                  
                </div>
              </div>

            </div>

          </div>

        </section>

      </main>
    </div>

    <div class="push">
    </div>


<?php
require "footer.php";
?>
  </body>

</html>