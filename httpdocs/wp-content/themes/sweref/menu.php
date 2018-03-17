 <div class="d-none d-lg-block d-xl-block col-lg-4 menu-block">
   <div id="menu1" class="menu">
     <?php  $menu_items = wp_get_nav_menu_items(3);
foreach ($menu_items as $item)
{?>
          <ul>
            <li>
              <a href="<?php echo $item->url; ?>" rel="bookmark" class="first-element">                     
                  <?php echo $item->title; ?>                           
              </a>                           
            </li>
            <?php } ?>
            <li>
              <a href="#">
                Allmänhet<span class="submenu-indicator">+</span>
              </a>
              <ul class="submenu">
                <li>
                  <a href="#">
                    Web Design <span class="submenu-indicator">+</span>
                  </a>
                  <ul class="submenu">
                    <li>
                      <a href="#"> WordPress</a>
                    </li>
                    <li>
                      <a href="#"> Joomla</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#"> Hosting</a>
                </li>
                <li>
                  <a href="#"> Design </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Internationellt</a>
            <ul class="submenu">
                <li>
                  <a href="#">Barn under 18</a>
                </li>
                <li>
                  <a href="#">Vilket stöd kan du få?</a>
                </li>
                <li>
                  <a href="#">
                    Infobank<span class="submenu-indicator">+</span>
                  </a>
                  <ul class="submenu" style="padding-left:15px; background-color:#009BAA;">
                    <li>
                      <a href="#"> Asylregler i Sverige </a>
                    </li>
                    <li>
                      <a href="#">
                        Hur går det till att söka asylSverige<span class="submenu-indicator">+</span>
                      </a>
                      <ul class="submenu" style="padding-left:10px; background-color:#7ED5DB;">
                        <li>
                          <a href="#">Migrationsverkets beslut</a>
                        </li>
                        <li>
                          <a href="#">Asylutredning </a>
                        </li>
                        <li>
                          <a href="#">valfritt belopp och ladda</a>
                        </li>
                        <li>
                          <a href="#"> Svenskt medborgarskap </a>
                        </li>

                      </ul>
                    </li>
                    <li>
                      <a href="#"> Asylutredning </a>
                    </li>
                    <li>
                      <a href="#"> Migrationsverkets </a>
                    </li>
                    <li>
                      <a href="#"> migrationsdomstolen </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Ordlista</a>
                </li>
                <li>
                  <a href="#">Frågor</a>
                </li>
                <li>
                  <a href="#">ökande barn, familj</a>
                </li>
                <li>
                  <a href="#">Svenskt medborgarskap</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">Barnens Asylrättscentrum</a>
            </li>
            <li>
              <a href="#">Om oss</a>
            </li>
            <li>
              <a href=" http://dev-sweref.solidpartner.com/contact-page/">Kontakt</a>
            </li>
          </ul>
        </div>

      </div>