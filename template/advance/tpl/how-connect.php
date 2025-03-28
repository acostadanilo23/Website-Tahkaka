<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 04/02/2020 - 6:55 PM
 */
?>
<section id="connect" class="services">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2><?php elang('how_to_connect'); ?></h2>

        </div>
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="tutorial mt-5 mt-lg-0" data-aos="fade-up">
                    <h3>Instalação no Windows</h3>
                    <ol>
                        <li>Baixe o arquivo <code>wow.zip</code> usando o botão abaixo</li>
                        <li>
                            Extraia o conteúdo do arquivo para uma pasta de sua preferência
                            (ex: <code>C:\Games\WoW</code>)
                        </li>
                        <li>
                            Navegue até a pasta extraída e execute o arquivo
                            <code>WoW.exe</code>
                        </li>
                        <li>
                            Na tela de login, insira suas credenciais do nosso servidor
                        </li>
                    </ol>
                    <a href="http://baixar-wpvsb.duckdns.org:5745/ftpuploads/wow.zip" class="download-button btn btn-primary">Baixar Cliente WoW</a>
                </div>
                
                <div class="tutorial mt-5" data-aos="fade-up" data-aos-delay="100">
                    <h3>Instalação no Linux</h3>
                    <ol>
                        <li>
                            Certifique-se de que o Wine está instalado no seu sistema:
                            <code>sudo apt install wine</code> (Ubuntu/Debian) ou
                            <code>sudo dnf install wine</code> (Fedora)
                        </li>
                        <li>
                            Baixe o script de instalação <code>install_wow.sh</code> usando o
                            botão abaixo
                        </li>
                        <li>
                            Abra um terminal e navegue até a pasta onde o script foi baixado
                        </li>
                        <li>
                            Dê permissão de execução ao script:
                            <code>chmod +x install_wow.sh</code>
                        </li>
                        <li>Execute o script: <code>./install_wow.sh</code></li>
                        <li>
                            Siga as instruções na tela para completar a instalação e
                            configuração
                        </li>
                    </ol>
                    <a href="http://baixar-wpvsb.duckdns.org:5745/ftpuploads/install_wow.sh" class="download-button btn btn-primary">Baixar Script de Instalação</a>
                </div>
                
                <div class="tutorial mt-5" data-aos="fade-up" data-aos-delay="200">
                    <h3>Instalação no macOS</h3>
                    <ol>
                        <li>
                            Instale o Wine ou CrossOver para macOS (disponível em
                            <a href="https://www.codeweavers.com/crossover" target="_blank">CodeWeavers</a>)
                        </li>
                        <li>Baixe o arquivo <code>wow.zip</code> usando o botão acima</li>
                        <li>
                            Extraia o conteúdo do arquivo para uma pasta de sua preferência
                        </li>
                        <li>
                            Abra o Wine/CrossOver e configure-o para executar o
                            <code>WoW.exe</code> da pasta extraída
                        </li>
                    </ol>
                </div>
                
            <div class="image col-lg-6 order-1 order-lg-2"
                 style='background-image: url("<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/img/sylvanas.png");background-size: auto 100%;background-position: center;background-repeat: no-repeat;'
                 data-aos="fade-left" data-aos-delay="100"></div>
        </div>
    </div>
</section>
