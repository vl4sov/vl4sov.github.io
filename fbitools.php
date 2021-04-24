<!DOCTYPE html>
<html lang="ru" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
<title>FBI Tools | VL4SOV DEV</title>
<meta property="og:title" content="FBI Tools | VLASOV DEV" />
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

              <article class="article clearfix" data-history-node-id="1" about="/lua/fbi">
                <div class="lua-script">

                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/">Главная</a></li>
                      <li class="breadcrumb-item"><a href="/lua.php">Lua</a></li>
                      <li class="breadcrumb-item active" aria-current="page">FBI Tools</li>
                    </ol>
                  </nav>

                  <div class="lua-script--foreground">
                    <div class="lua-script--version-n-date-update-lg">
                      <div class="row align-items-center">
                        <div class="col-2">
                          <div class="lua-script--version">
                            Версия 6.13
                          </div>
                        </div>
                        <div class="col-8">
                          <h1 class="lua-script--title">
              FBI Tools
            </h1>
                        </div>
                        <div class="col-2">
                          <div class="lua-script--date-update" title="Дата обновления">
                            20.04.2021
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="lua-script--version-n-date-update-md">
                      <div>
                        <h2 class="lua-script--title">
            FBI Tools
          </h2>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="lua-script--version">
                            Версия 6.13
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="lua-script--date-update" title="Дата обновления">
                            20.04.2021
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="lua-script--foreground">
                    <div class="lua-script--description">
                      <p><strong>FBI Tools</strong> - дополнение для проекта SAMP-RP, позволяющее использовать /su и /ticket эффективнее и быстрее. Имеет в себе список статей и множество вариантов их выбора.</p>

                      <hr />
                      <p><strong>Список стандартный функций:</strong></p>

                      <ul>
                        <li><strong>/pun help</strong> - Инструкция по использованию</li>
                        <li><strong>/pun</strong> или <strong>/pun [ID]</strong> - Объявить в розыск по выбранной в списке статье</li>
                      </ul>

                      <p><strong>Список расширенных (платных) функций:</strong></p>

                      <ul>
                        <li><strong>ПКМ (прицелиться в игрока) + Доп.клавиша мыши 2</strong> - Аналог /pun без ввода ID вручную</li>
                        <li><strong>/sus fasthelp</strong> - Список быстрых статей</li>
                        <li><strong>ПКМ (прицелиться в игрока) + 0-9</strong> - Объявить в розыск по быстрой статье</li>
                        <li><strong>Расширенные функции позволяют объявлять в розыск игроков с помощью прицела, не вводя ID, с расстояния 22 метра. Это позволяет минимизировать возможность безнаказанного выхода из игры недобросовестным игроком. А также даёт множество других преимуществ.</strong></li>
                      </ul>

                      <hr />
                      <p class="has-medium-font-size"><strong>Редактирование скрипта:</strong></p>

                      <p>Все клавиши меняются в блоке k конфиг файла: "корень\moonloader\config\Super_Punishment_config.lua".</p>

                      <pre>
<code class="language-lua">k = {
  repeatsuskey = VK_INSERT, -- Повтор розыска предыдущему игроку

  punmainkey = VK_RBUTTON, -- Основная клавиша выбора игрока
  punsecondarykey = VK_XBUTTON2, -- Второстепенная клавиша выбора игрока

  fastmainkey = VK_RBUTTON, -- Основная клавиша быстрого розыска
  fastkey1 = VK_1, -- Второстепенная клавиша быстрого розыска
  fastkey2 = VK_2,
  fastkey3 = VK_3,
  fastkey4 = VK_4,
  fastkey5 = VK_5,
  fastkey6 = VK_6,
  fastkey7 = VK_7,
  fastkey8 = VK_8,
  fastkey9 = VK_9,
  fastkey0 = VK_0,
}</code></pre>

                      <p>&nbsp;</p>

                      <p>Все названия статей, номера, значения розыска, штрафа и дополнительные параметры изменяются в блоке а.</p>

                      <pre>
<code class="language-lua">a =
{
  a0 = "Ложный вызов", -- Название статьи
  b0 = "АК, Статья №1", -- Номер статьи
  c0 = "1", -- Уровень розыска
  d0 = "", -- Штраф
  e0 = "", -- Цвет. Формат: "{FFFFFF}".

-- Далее остальные статьи</code></pre>

                      <p>&nbsp;</p>

                      <p>Пустое значение переменной c (уровень розыска) устанавливает для текущей статьи только возможность выдачи штрафа. Пустое значение в переменной d (штраф), устанавливает возможность выдачи только розыска. Если в значение переменной d (штраф) установить "+", то сумма штрафа будет вводиться вами в игре вручную. Если сумма штрафа введена в данную переменную, она будет умножаться на уровень игрока. Если в поле перед суммой штрафа стоит знак "/", то сумма штрафа НЕ умножается на уровень игрока.</p>

                      <p>Все названия статей, номера, значения розыска, штрафа и дополнительные параметры быстрых статей изменяются в блоке f.</p>

                      <pre>
<code class="language-lua">f =
{

  a1 = "Нападение на военнослужащего",
  b1 = "УК, Статья №29",
  c1 = "4",

  a2 = "Нападение на полицейского",
  b2 = "УК, Статья №30",
  c2 = "5",

  a3 = "Нападение на Агента ФБР / Мэра",
  b3 = "УК, Статья №31",
  c3 = "6",

  a4 = "Неподчинение сотруднику ПД/ФБР",
  b4 = "УК, Статья №19",
  c4 = "2",

  a5 = "Уход",
  b5 = "УК, Статья №25",
  c5 = "3",

  a6 = "Нарушение порядка",
  b6 = "УК, Статья №1",
  c6 = "1",

  a7 = "Избиение",
  b7 = "УК, Статья №3",
  c7 = "2",

  a8 = "Проникновение",
  b8 = "УК, Статья 14",
  c8 = "3",

  a9 = "Терроризм",
  b9 = "УК, Статья №32",
  c9 = "6",

  a0 = "Похищение",
  b0 = "УК, Статья №27",
  c0 = "4",
}</code></pre>

                      <p>&nbsp;</p>

                    </div>
                  </div>

                  <div class="lua-script--foreground">
                    <div class="lua-script--dependence">
                      <strong>Зависимости:</strong>

                      <div>
                        <div>SA:MP 0.3.7 R1</div>
                        <div>MoonLoader v.026</div>
                        <div>SAMPFUNCS v.5.3.3 и выше</div>
                        <div>Windows 7 и выше</div>
                      </div>

                    </div>
                    <hr>
                    <div class="lua-script--compatibility">
                      <p class="lua-script--compatibility--title">Совместимость с проектами:</p>
                      <div class="lua-script--compatibility--content">

                        <div>
                          <div>
                            <div class="row">
                              <div class="col lua-script--compatibility--col">Evolve RP</div>
                              <div class="col lua-script--compatibility--col">Совместим</div>
                            </div>
                          </div>
                          <div>
                            <div class="row">
                              <div class="col lua-script--compatibility--col">VLASOV RP</div>
                              <div class="col lua-script--compatibility--col">Частично совместим</div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="lua-script--buttons">
                    <div class="row justify-content-center">

                      <div class="col">
                        <div class="lua-button">
                          <a class="btn btn-outline-info " href="/lua/how-to-install">
      Как установить
    </a>
                        </div>
                      </div>

                      <div class="col">
                        <div class="lua-button">
                          <a class="btn btn-outline-primary lua-download-btn" href="https://link.narvell.nl/d/super_punishment">
      Скачать
    </a>
                        </div>
                      </div>
<!--[if скрыл кнопку продажи]>
                      <div class="col">
                        <div class="lua-button">
                          <a class="btn btn-outline-success " href="https://vk.com/nldev?w=product-144936602_2870162/query">
      Купить
    </a>
                        </div>
                      </div>
<![endif]-->
                    </div>
                  </div>

                  <div class="lua-script--alert-terms--wrapper">
                    <div class="lua-script--alert-terms alert alert-warning alert-dismissible fade show" role="alert">
                      При установке скрипта, вы соглашаетесь с <a href="/lua/terms">пользовательским соглашением</a>.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                  </div>

                </div>
              </article>

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