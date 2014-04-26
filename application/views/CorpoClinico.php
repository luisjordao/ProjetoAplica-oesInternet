<?php $this->load->view('Head'); ?>

<script type="text/javascript">



    $(document).ready(function() {


        $('[class^="question"]').on('click', function(e) {
            e.preventDefault();
            var numb = this.className.replace('question', '');
            $("html, body").animate({scrollTop: 0}, 400);
            $('[id^="answer"]').hide();
            $('#answer' + numb).delay(400).show("slow");
            return false;
        });

    });

</script>



<div id="especialidades"><div id="especialidadeTitulo"><h1>Corpo Clinico</h1></div>
    <ul>
        <li id="escolhaPorEspecialidade">Escolha Por Especialidade </li>
        <li class="question1">acupuntura </li>
        <li class="question2"> AUDIOLOGIA</li>
        <li class="question3"> CARDIOLOGIA</li>
        <li class="question4"> CIRURGIA GERAL </li>
        <li class="question5"> DOENÇAS VENOSAS</li>
        <li class="question6"> CIRURGIA PLÁSTICA</li>
        <li class="question7"> CIRURGIA VASCULAR</li>
        <li class="question8"> CLÍNICA GERAL</li>
        <li class="question9"> DERMATOLOGIA</li>
        <li class="question10"> ENDOCRINOLOGIA</li>
        <li class="question11"> MEDICINA DENTÁRIA</li>
        <li class="question12"> FISIATRIA</li>
        <li class="question13"> GASTRENTEROLOGIA</li>
        <li class="question14"> GINECOLOGIA / OBSTETRICIA</li>
        <li class="question15">MEDICINA INTERNA</li>
        <li class="question16">MEDICINA DESPORTIVA </li>
        <li class="question17">NEUROCIRURGIA </li>
        <li class="question18">NEUROLOGIA</li>
        <li class="question19">NUTRIÇÃO</li>
        <li class="question20">OFTALMOLOGIA</li>
        <li class="question21">OTORRINOLARINGOLOGIA</li>
        <li class="question22">ORTOPEDIA</li>
        <li class="question23">PNEUMOLOGIA</li>
        <li class="question24">PSICOLOGIA</li>
        <li class="question25">PSIQUIATRIA</li>
        <li class="question26">REUMATOLOGIA</li>
        <li class="question27">UROLOGIA</li>
        <li class="question28"><a id="link">ELETROMIOGRAFIA</a></li>
    </ul>
    <div id="especialidadeCorpo">
        
       
        
        <div id="answer1" ><div class="textoAnswer"><header> <h2>Acupuntura</h2> </header>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sagittis sem id auctor vulputate. Proin molestie eros nulla, sit amet sollicitudin risus aliquet quis. Etiam vestibulum egestas nunc, id ornare est aliquet eget. Etiam quis turpis justo. Pellentesque quis porttitor ligula. Aliquam eu odio dapibus, gravida lacus ac, rhoncus lacus. Donec sem leo, blandit sed sagittis tristique, convallis vel augue. Fusce rhoncus sagittis ligula placerat tempor.

                Sed cursus pretium fringilla. Praesent magna nisi, porttitor at neque sit amet, condimentum facilisis arcu. Fusce tempus orci odio, eu scelerisque mauris molestie a. Integer in nibh fringilla, aliquam dui sed, aliquam est. Vivamus facilisis tellus ut bibendum vulputate. Fusce feugiat dolor urna, in semper justo consectetur sit amet. Vivamus sapien lacus, condimentum at dictum vel, porttitor eget lacus. Mauris ut porta orci, eget scelerisque sapien. Maecenas nunc tellus, porttitor at tortor nec, vulputate commodo nibh. Praesent id fringilla nisl. Nunc pellentesque, magna in suscipit elementum, nisl felis tristique erat, sed mattis odio turpis vitae lorem. Duis aliquam nisl ante, id pulvinar ipsum rutrum ac.

                Morbi in elementum mi, a venenatis lorem. Phasellus luctus sit amet tellus id egestas. Nam ipsum massa, placerat sit amet vehicula in, vulputate id ipsum. Fusce adipiscing arcu in consequat pretium. Maecenas vitae semper ligula. Pellentesque at neque imperdiet, congue ligula ac, egestas libero. Pellentesque bibendum lacinia dolor, quis accumsan dolor malesuada pretium. Nunc nunc elit, egestas at fringilla sit amet, congue in odio. In sit amet ipsum feugiat, pellentesque nibh sed, placerat libero. Nullam elementum dolor est, at tempor arcu sollicitudin at. Sed et lacinia velit. Donec convallis magna id magna dapibus mollis. Integer auctor vel lacus non eleifend.

                Morbi faucibus augue et commodo mollis. Aliquam erat volutpat. Vestibulum dapibus iaculis ante, vitae tempus justo egestas quis. Vestibulum pellentesque ante diam, quis congue velit faucibus aliquet. Sed sit amet mauris sapien. Donec in sem ligula. Proin tincidunt iaculis nisi, non faucibus massa. Praesent tellus dui, gravida vitae diam sed, lacinia placerat enim.

                Quisque felis lacus, viverra sollicitudin diam quis, hendrerit auctor tortor. Ut laoreet placerat est eu scelerisque. Vivamus vehicula neque vitae dolor mollis gravida. Donec ac enim ornare, commodo metus ac, adipiscing felis. Nullam blandit magna sem, sit amet vulputate felis dapibus non. Nam libero enim, dignissim pretium nisi aliquam, imperdiet dignissim justo. In congue, neque ac blandit rhoncus, lorem augue placerat augue, in condimentum risus est vitae ligula. Sed vel leo et purus sollicitudin fringilla at id neque. Duis faucibus sapien sapien, vitae mattis sapien iaculis et. Vivamus sagittis malesuada turpis tristique tempor. Phasellus a nibh placerat, laoreet ipsum ac, mollis lorem. Maecenas augue nisl, placerat convallis nisl sed, porta ultrices sapien.

                Vestibulum venenatis in orci sed vehicula. In placerat sollicitudin erat. Maecenas pretium, arcu et iaculis porta, urna dolor porttitor dui, vitae tincidunt mauris magna convallis nisi. Donec dictum dolor nisi, et cursus ipsum adipiscing et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare tempus enim, non scelerisque mauris laoreet eget. Nullam mattis consectetur enim, scelerisque facilisis ipsum varius non. Nulla et dui vel ligula feugiat consectetur ut lobortis nunc. Sed interdum velit nisi, vel ultricies turpis gravida eget.

                Fusce adipiscing in augue at ullamcorper. Sed pulvinar rutrum est, quis rutrum erat aliquam at. Cras id enim nec urna gravida volutpat. Ut nec mauris in orci dapibus suscipit. Praesent elementum in sapien a mollis. Fusce posuere consectetur orci. Aliquam ultrices est a diam hendrerit convallis.

                Curabitur tincidunt justo elit, sit amet condimentum lorem porttitor in. Phasellus adipiscing nisl ac sapien consectetur, ut cursus eros adipiscing. Proin cursus volutpat eros. Aenean molestie vehicula urna eget scelerisque. Praesent malesuada leo neque, id vestibulum velit blandit ac. Phasellus malesuada velit sit amet eros blandit, vel ullamcorper nunc tempus. Pellentesque fringilla rhoncus laoreet. Nunc lacinia velit ut justo luctus, in bibendum metus volutpat. Nullam sodales pretium pulvinar. Maecenas ullamcorper nisi mollis luctus fermentum. Praesent sit amet urna id turpis placerat lacinia sed a lectus. Suspendisse nec libero pulvinar, dignissim sem at, sagittis augue. Quisque augue sem, facilisis vitae ipsum et, lobortis iaculis lacus. Fusce imperdiet leo metus, vulputate condimentum augue molestie vitae. Sed consectetur, odio non porttitor pretium, mi mauris consectetur felis, sit amet facilisis ligula ligula a nibh.

                Vestibulum suscipit fermentum mi vel euismod. Vivamus pharetra ipsum velit, sit amet aliquet ipsum euismod eget. Proin feugiat, sapien eget faucibus eleifend, ante enim varius lacus, vel posuere diam quam ac ante. Etiam ut facilisis velit. In risus sapien, sagittis in ipsum pulvinar, cursus laoreet odio. Maecenas dignissim sodales condimentum. Phasellus pharetra tempus lorem, vitae sollicitudin dui sodales sed. Vivamus venenatis pellentesque quam eget malesuada. Donec dictum ultricies nulla nec accumsan. Proin mi orci, rutrum blandit magna non, accumsan ultricies mauris. Donec pulvinar mattis nisi, a porttitor est luctus vitae. Maecenas sit amet diam massa. Duis at sapien posuere enim scelerisque tincidunt quis sit amet orci. Duis commodo eleifend tincidunt. Donec non erat sit amet neque pharetra lobortis.

                Proin sed sem sagittis, faucibus dui eget, convallis nisl. Cras posuere iaculis nibh sit amet convallis. Vivamus sit amet consequat mauris, vitae lacinia est. Praesent pulvinar lectus arcu, vel sagittis tortor porta ut. Sed pharetra malesuada ultrices. Duis sagittis interdum tincidunt. Nulla non arcu porta, malesuada orci eget, gravida nulla. Curabitur sit amet laoreet ligula, at faucibus odio. Praesent tempus hendrerit nisi, et malesuada leo consequat sit amet. In tempor dictum augue, at vestibulum lorem sollicitudin vel. Pellentesque vestibulum tortor molestie aliquet condimentum. Mauris luctus dolor eu erat posuere, quis imperdiet dolor sollicitudin. 

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sagittis sem id auctor vulputate. Proin molestie eros nulla, sit amet sollicitudin risus aliquet quis. Etiam vestibulum egestas nunc, id ornare est aliquet eget. Etiam quis turpis justo. Pellentesque quis porttitor ligula. Aliquam eu odio dapibus, gravida lacus ac, rhoncus lacus. Donec sem leo, blandit sed sagittis tristique, convallis vel augue. Fusce rhoncus sagittis ligula placerat tempor.

                Sed cursus pretium fringilla. Praesent magna nisi, porttitor at neque sit amet, condimentum facilisis arcu. Fusce tempus orci odio, eu scelerisque mauris molestie a. Integer in nibh fringilla, aliquam dui sed, aliquam est. Vivamus facilisis tellus ut bibendum vulputate. Fusce feugiat dolor urna, in semper justo consectetur sit amet. Vivamus sapien lacus, condimentum at dictum vel, porttitor eget lacus. Mauris ut porta orci, eget scelerisque sapien. Maecenas nunc tellus, porttitor at tortor nec, vulputate commodo nibh. Praesent id fringilla nisl. Nunc pellentesque, magna in suscipit elementum, nisl felis tristique erat, sed mattis odio turpis vitae lorem. Duis aliquam nisl ante, id pulvinar ipsum rutrum ac.

                Morbi in elementum mi, a venenatis lorem. Phasellus luctus sit amet tellus id egestas. Nam ipsum massa, placerat sit amet vehicula in, vulputate id ipsum. Fusce adipiscing arcu in consequat pretium. Maecenas vitae semper ligula. Pellentesque at neque imperdiet, congue ligula ac, egestas libero. Pellentesque bibendum lacinia dolor, quis accumsan dolor malesuada pretium. Nunc nunc elit, egestas at fringilla sit amet, congue in odio. In sit amet ipsum feugiat, pellentesque nibh sed, placerat libero. Nullam elementum dolor est, at tempor arcu sollicitudin at. Sed et lacinia velit. Donec convallis magna id magna dapibus mollis. Integer auctor vel lacus non eleifend.

                Morbi faucibus augue et commodo mollis. Aliquam erat volutpat. Vestibulum dapibus iaculis ante, vitae tempus justo egestas quis. Vestibulum pellentesque ante diam, quis congue velit faucibus aliquet. Sed sit amet mauris sapien. Donec in sem ligula. Proin tincidunt iaculis nisi, non faucibus massa. Praesent tellus dui, gravida vitae diam sed, lacinia placerat enim.

                Quisque felis lacus, viverra sollicitudin diam quis, hendrerit auctor tortor. Ut laoreet placerat est eu scelerisque. Vivamus vehicula neque vitae dolor mollis gravida. Donec ac enim ornare, commodo metus ac, adipiscing felis. Nullam blandit magna sem, sit amet vulputate felis dapibus non. Nam libero enim, dignissim pretium nisi aliquam, imperdiet dignissim justo. In congue, neque ac blandit rhoncus, lorem augue placerat augue, in condimentum risus est vitae ligula. Sed vel leo et purus sollicitudin fringilla at id neque. Duis faucibus sapien sapien, vitae mattis sapien iaculis et. Vivamus sagittis malesuada turpis tristique tempor. Phasellus a nibh placerat, laoreet ipsum ac, mollis lorem. Maecenas augue nisl, placerat convallis nisl sed, porta ultrices sapien.

                Vestibulum venenatis in orci sed vehicula. In placerat sollicitudin erat. Maecenas pretium, arcu et iaculis porta, urna dolor porttitor dui, vitae tincidunt mauris magna convallis nisi. Donec dictum dolor nisi, et cursus ipsum adipiscing et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ornare tempus enim, non scelerisque mauris laoreet eget. Nullam mattis consectetur enim, scelerisque facilisis ipsum varius non. Nulla et dui vel ligula feugiat consectetur ut lobortis nunc. Sed interdum velit nisi, vel ultricies turpis gravida eget.

                Fusce adipiscing in augue at ullamcorper. Sed pulvinar rutrum est, quis rutrum erat aliquam at. Cras id enim nec urna gravida volutpat. Ut nec mauris in orci dapibus suscipit. Praesent elementum in sapien a mollis. Fusce posuere consectetur orci. Aliquam ultrices est a diam hendrerit convallis.

                Curabitur tincidunt justo elit, sit amet condimentum lorem porttitor in. Phasellus adipiscing nisl ac sapien consectetur, ut cursus eros adipiscing. Proin cursus volutpat eros. Aenean molestie vehicula urna eget scelerisque. Praesent malesuada leo neque, id vestibulum velit blandit ac. Phasellus malesuada velit sit amet eros blandit, vel ullamcorper nunc tempus. Pellentesque fringilla rhoncus laoreet. Nunc lacinia velit ut justo luctus, in bibendum metus volutpat. Nullam sodales pretium pulvinar. Maecenas ullamcorper nisi mollis luctus fermentum. Praesent sit amet urna id turpis placerat lacinia sed a lectus. Suspendisse nec libero pulvinar, dignissim sem at, sagittis augue. Quisque augue sem, facilisis vitae ipsum et, lobortis iaculis lacus. Fusce imperdiet leo metus, vulputate condimentum augue molestie vitae. Sed consectetur, odio non porttitor pretium, mi mauris consectetur felis, sit amet facilisis ligula ligula a nibh.

                Vestibulum suscipit fermentum mi vel euismod. Vivamus pharetra ipsum velit, sit amet aliquet ipsum euismod eget. Proin feugiat, sapien eget faucibus eleifend, ante enim varius lacus, vel posuere diam quam ac ante. Etiam ut facilisis velit. In risus sapien, sagittis in ipsum pulvinar, cursus laoreet odio. Maecenas dignissim sodales condimentum. Phasellus pharetra tempus lorem, vitae sollicitudin dui sodales sed. Vivamus venenatis pellentesque quam eget malesuada. Donec dictum ultricies nulla nec accumsan. Proin mi orci, rutrum blandit magna non, accumsan ultricies mauris. Donec pulvinar mattis nisi, a porttitor est luctus vitae. Maecenas sit amet diam massa. Duis at sapien posuere enim scelerisque tincidunt quis sit amet orci. Duis commodo eleifend tincidunt. Donec non erat sit amet neque pharetra lobortis.

                Proin sed sem sagittis, faucibus dui eget, convallis nisl. Cras posuere iaculis nibh sit amet convallis. Vivamus sit amet consequat mauris, vitae lacinia est. Praesent pulvinar lectus arcu, vel sagittis tortor porta ut. Sed pharetra malesuada ultrices. Duis sagittis interdum tincidunt. Nulla non arcu porta, malesuada orci eget, gravida nulla. Curabitur sit amet laoreet ligula, at faucibus odio. Praesent tempus hendrerit nisi, et malesuada leo consequat sit amet. In tempor dictum augue, at vestibulum lorem sollicitudin vel. Pellentesque vestibulum tortor molestie aliquet condimentum. Mauris luctus dolor eu erat posuere, quis imperdiet dolor sollicitudin.  </div>

            <!--todo o conteudo do lado direito , informação do medico e protocolos-->
            <div class="textoAnswerRight">
                <!--div com toda a infor do medico cartaoMedico-->
                <h5>PROFISSIONAIS</h5>
                <div class="cartaoMedico">

                    <div class="parteCimaCartaoMedico">

                        <div class="cantoEsquerdoCartaoMedico">
                            <img src="Styles/Images/medico.png" alt="foto do medico"/>
                        </div>

                        <div class="cantoSupDireitoCartaoMedico">

                            <h6>Nome Medico</h6> 
                            <h6>Telefone: 222222222</h6>

                        </div>
                    </div>

                    <div class="inferiorCartaoMedico">
                        <h6>Especialidade: Pneumologia </h6> 
                        <h6>Área Clinica: Alergologia e Pneumologia</h6>
                        <div class="btnMarcarConsulta"> <a href=""> Marcar Consulta </a> </div>
                    </div>

                </div>
                
                
                

                <div class="cartaoMedico">

                    <div class="parteCimaCartaoMedico">

                        <div class="cantoEsquerdoCartaoMedico">
                            <img src="Styles/Images/medico.png" alt="imagem do medico"/>
                        </div>

                        <div class="cantoSupDireitoCartaoMedico">

                            <h6>Nome Medico</h6> 
                            <h6>Telefone: 222222222</h6>

                        </div>
                    </div>

                    <div class="inferiorCartaoMedico">
                        <h6>Especialidade: Pneumologia </h6> 
                        <h6>Área Clinica: Alergologia e Pneumologia</h6>
                        <div class="btnMarcarConsulta"><a href=""> Marcar Consulta </a></div>
                    </div>

                </div>
                <h5>PROTOCOLOS</h5>
                <div class="cartaoProtocolo">
                    <div class="cantoEsquerdoCartaoProtocolo">
                        <!--<img src="Styles/Images/medico.png"/>-->
                    </div>
                    <div class="cantoDireitoCartaoProtocolo">
                        <h4>Nome da Entidade</h4>   
                    </div>
                </div>
                
                               <div class="cartaoProtocolo">
                    <div class="cantoEsquerdoCartaoProtocolo">
                        <!--<img src="Styles/Images/medico.png"/>-->
                    </div>
                    <div class="cantoDireitoCartaoProtocolo">
                        <h4>Nome da Entidade</h4>   
                    </div>
                </div>
                

            </div>
        </div>
        <div id="answer2">audiologoa sadasfass asf dsf s df sdg dhdfsa f ds f sd f sd fas</div>
        <div id="answer3">3</div>
        <div id="answer4">4</div>
        <div id="answer5">5</div>
        <div id="answer6">6</div>
        <div id="answer7">7</div>
        <div id="answer8">8</div>
        <div id="answer9">9</div>
        <div id="answer10">10</div>
        <div id="answer11">11</div>
        <div id="answer12">12</div>
        <div id="answer13">13</div>
        <div id="answer14">14</div>
        <div id="answer15">15</div>
        <div id="answer16">16</div>
        <div id="answer17">17</div>
        <div id="answer18">18</div>
        <div id="answer19">19</div>
        <div id="answer20">20</div>
        <div id="answer21">21</div>
        <div id="answer22">22</div>
        <div id="answer23">23</div>
        <div id="answer24">24</div>
        <div id="answer25">25</div>
        <div id="answer26">26</div>
        <div id="answer27">27</div>
        <div id="answer28">28</div>

        <div class="new_member_box_display" id="answer">
            
<!--           Aqui aparecem todos os medicos  -->
            <div class="cartaoMedico">

                    <div class="parteCimaCartaoMedico">

                        <div class="cantoEsquerdoCartaoMedico">
                            <img src="Styles/Images/medico.png" alt="foto do medico"/>
                        </div>

                        <div class="cantoSupDireitoCartaoMedico">

                            <h6>Nome Medico</h6> 
                            <h6>Telefone: 222222222</h6>

                        </div>
                    </div>

                    <div class="inferiorCartaoMedico">
                        <h6>Especialidade: Pneumologia </h6> 
                        <h6>Área Clinica: Alergologia e Pneumologia</h6>
                        <div class="btnMarcarConsulta"> <a href=""> Marcar Consulta </a> </div>
                    </div>

                </div>

            <div class="cartaoMedico">

                    <div class="parteCimaCartaoMedico">

                        <div class="cantoEsquerdoCartaoMedico">
                            <img src="Styles/Images/medico.png" alt="foto do medico"/>
                        </div>

                        <div class="cantoSupDireitoCartaoMedico">

                            <h6>Nome Medico</h6> 
                            <h6>Telefone: 222222222</h6>

                        </div>
                    </div>

                    <div class="inferiorCartaoMedico">
                        <h6>Especialidade: Pneumologia </h6> 
                        <h6>Área Clinica: Alergologia e Pneumologia</h6>
                        <div class="btnMarcarConsulta"> <a href=""> Marcar Consulta </a> </div>
                    </div>

                </div>


           <div class="cartaoMedico">

                    <div class="parteCimaCartaoMedico">

                        <div class="cantoEsquerdoCartaoMedico">
                            <img src="Styles/Images/medico.png" alt="foto do medico"/>
                        </div>

                        <div class="cantoSupDireitoCartaoMedico">

                            <h6>Nome Medico</h6> 
                            <h6>Telefone: 222222222</h6>

                        </div>
                    </div>

                    <div class="inferiorCartaoMedico">
                        <h6>Especialidade: Pneumologia </h6> 
                        <h6>Área Clinica: Alergologia e Pneumologia</h6>
                        <div class="btnMarcarConsulta"> <a href=""> Marcar Consulta </a> </div>
                    </div>

                </div>
        
        
        
        </div>

    </div>
</div>
</div>


<?php $this->load->view('foot_Site');