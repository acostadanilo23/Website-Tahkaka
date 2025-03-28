<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 04/02/2020 - 6:55 PM
 */
?>
<section id="faq" class="faq">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2><?php elang('frequently_questions'); ?></h2>
        </div>
        <ul class="faq-list">
            <li data-aos="fade-up">
                <a data-toggle="collapse" class="collapsed" href="#faq1">Não consigo conectar ao servidor <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                <div id="faq1" class="collapse" data-parent=".faq-list">
                    <p>
                        Verifique se você está usando as credenciais corretas. Além
                        disso, certifique-se de que sua conexão com a internet está
                        funcionando e que não há firewalls bloqueando o acesso.
                    </p>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="100">
                <a data-toggle="collapse" href="#faq2" class="collapsed">O jogo trava ou fecha inesperadamente <i
                            class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                <div id="faq2" class="collapse" data-parent=".faq-list">
                    <p>
                        Tente executar o jogo como administrador. Se estiver usando Windows
                        10/11, configure o modo de compatibilidade para Windows XP Service
                        Pack 3. No Linux, verifique se você está usando uma versão
                        atualizada do Wine.
                    </p>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
                <a data-toggle="collapse" href="#faq3" class="collapsed">Addons não estão funcionando <i
                            class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                <div id="faq3" class="collapse" data-parent=".faq-list">
                    <p>
                        Certifique-se de que os addons são compatíveis com a versão 1.12.1
                        do WoW Classic. Verifique também se eles foram instalados na pasta
                        correta e se estão habilitados na tela de seleção de personagem.
                    </p>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
                <a data-toggle="collapse" href="#faq4" class="collapsed">Problemas de desempenho (lag, baixo FPS) <i
                            class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                <div id="faq4" class="collapse" data-parent=".faq-list">
                    <p>
                        Ajuste as configurações gráficas do jogo para um nível mais baixo.
                        Feche programas em segundo plano que possam estar consumindo
                        recursos. Se estiver usando Wine no Linux, considere usar
                        <code>DXVK</code> para melhor desempenho gráfico.
                    </p>
                </div>
            </li>
        </ul>
        
        <div class="section-title" data-aos="fade-up" style="margin-top: 30px;">
            <h2>Instalação de Addons</h2>
        </div>
        
        <div class="tutorial" data-aos="fade-up">
            <h3>Como Instalar Addons Manualmente</h3>
            <ol>
                <li>
                    Baixe o addon desejado de sites como
                    <a href="https://legacy-wow.com" target="_blank">Legacy-WoW</a> ou
                    <a href="https://www.wowinterface.com" target="_blank">WoWInterface</a>
                </li>
                <li>
                    Extraia o conteúdo do arquivo baixado (geralmente um arquivo .zip
                    ou .rar)
                </li>
                <li>
                    Navegue até a pasta de instalação do WoW e localize a pasta
                    <code>Interface/AddOns</code>
                </li>
                <li>
                    Copie as pastas extraídas do addon para dentro da pasta
                    <code>AddOns</code>
                </li>
                <li>
                    Certifique-se de que a estrutura esteja correta: cada addon deve
                    ter sua própria pasta contendo arquivos como .toc, .lua e .xml
                </li>
                <li>Inicie o jogo e verifique se os addons estão funcionando</li>
            </ol>
        </div>

        <div class="tutorial" data-aos="fade-up" data-aos-delay="100">
            <h3>Addons Recomendados</h3>
            <ul>
                <li>
                    <strong>Atlas:</strong> Mapas detalhados de masmorras e raides
                </li>
                <li>
                    <strong>Pfquest:</strong> Ajuda a localizar e rastrear missões
                </li>
                <li>
                    <strong>Deadly Boss Mods (DBM):</strong> Alertas para mecânicas de
                    chefes
                </li>
                <li>
                    <strong>Auctioneer:</strong> Ferramentas avançadas para a casa de
                    leilões
                </li>
                <li>
                    <strong>Bagnon:</strong> Interface de bolsa unificada e melhorada
                </li>
                <li>
                    <strong>OmniCC:</strong> Mostra contagem regressiva de cooldowns
                    nas habilidades
                </li>
            </ul>
            <p>
                <strong>Nota:</strong> Certifique-se de baixar versões dos addons
                compatíveis com a versão do cliente WoW Classic que estamos usando
                (1.12.1).
            </p>
        </div>
    </div>
</section>
