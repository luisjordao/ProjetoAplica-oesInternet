<script type="text/javascript">


    //ctrl + H para substituir varias palavras ao mesmo tempo 


    $(document).ready(function() {

        $("li").click(function() {
            $("li").removeClass("activa").addClass("naoActiva");
//                var nome = document.getElementsByTagName("li")[0];

//                });
            $(this).addClass("activa");

        });
    });
    function mudaResidencial() {
        $("#artigoLar").hide();
        $("#artigoDomiciliario").hide();
        $("#artigoInternamento").hide();
        $("#artigoResidencial").delay( 200 ).slideDown( 800 ).show(0);
    }

    function mudalLar() {
        $("#artigoDomiciliario").hide();
        $("#artigoInternamento").hide();
        $("#artigoResidencial").hide();
        $("#artigoLar").delay( 200 ).slideDown( 800 ).show(0);
    }

    function mudaInternamento() {
        $("#artigoLar").hide();
        $("#artigoDomiciliario").hide();
        $("#artigoResidencial").hide();
        $("#artigoInternamento").delay( 200 ).slideDown( 800 ).show(0);
    }

    function mudaDomiciliario() {
        $("#artigoLar").hide()
        $("#artigoInternamento").hide();
        $("#artigoResidencial").hide();
        $("#artigoDomiciliario").delay( 200 ).slideDown( 800 ).show(0);
    }

</script>



<header>
    <h1 class="titulo">Cuidados Geriátricos</h1>
</header>


<div id="pagGeriatricos">


    <section>
        <ul class="tab">
            <li class="activa" onclick="mudaResidencial()"><a  >Residencial</a></li>
            <li class="naoActiva" onclick="mudalLar()"><a  >Lar</a></li>
            <li class="naoActiva" onclick="mudaInternamento()"><a >Internamento</a></li>
            <li class="naoActiva" onclick="mudaDomiciliario()"><a  >Apoio Domiciliário</a></li>
        </ul>
    </section>

    <section id="seccaoPagGer">
        <article id="artigoResidencial" class="aspecto">
            <p>A Residencial é o local ideal para quem pretende uma opção de repouso de cariz familiar, onde a personalidade de cada utente determina o atendimento dos diversos profissionais desta unidade. O edifício, localizado na Rua do Lis junto às instalações do Hospital Dom Manuel de Aguiar, proporciona aos seus utentes elevados padrões de qualidade ao nível dos serviços que presta.</p>
            <input class="btn btn-primary btn-lg pull-right" type="button" value="Ir para Residencial" onclick="<?php echo site_url('/Saude/CorpoClinico');?>">
            
            <header>
                <h3>Ultima Noticia</h3>
            </header>
            <div>
                <p>Ultima Noticia

                    Um alto quadro do Eurogrupo (que integra os países da moeda única) considerou esta sexta-feira que a dispensa de um programa cautelar é a solução mais adequada nas condições actuais, isto porque Portugal não tiraria daí mais-valias assinaláveis e, por outro lado, dispensaria o condicionalismo de políticas que estaria associado a uma linha específica dos credores internacionais.</p>
            </div>
        </article>

        <article id="artigoLar" class="aspecto">
            <p>O Lar N. S. da Encarnação ocupa uma área de construção de 5.000 metros quadrados com espaços ajardinados envolventes. O edifício e seu equipamento são considerados do mais moderno e funcional que se tem feito até hoje no nosso país.</p>
            <input class="btn btn-primary btn-lg pull-right" type="button" value="Ir para Lar" onclick="" >
            <header>
                <h3>Ultima Noticia</h3>
            </header>
            <div>
                <p>Ultima Noticia

                    Um alto quadro do Eurogrupo (que integra os países da moeda única) considerou esta sexta-feira que a dispensa de um programa cautelar é a solução mais adequada nas condições actuais, isto porque Portugal não tiraria daí mais-valias assinaláveis e, por outro lado, dispensaria o condicionalismo de políticas que estaria associado a uma linha específica dos credores internacionais.</p>
            </div>
        </article>


        <article id="artigoInternamento" class="aspecto">
            <p>São interlocutores de diferentes gerações, diferentes disciplinas, homens e mulheres, de esquerda e de direita, figuras públicas e anónimas. Identificámos com eles as decisões políticas que nos conduziram ao ponto em que estamos. Foi um modo de interrogar como se fez um país democrático. </p>
            <input class="btn btn-primary btn-lg pull-right" type="button" value="Ir para Internamento" onclick="" >
            <header>
                <h3>Ultima Noticia</h3>
            </header>  
            <div>
                <p>Ultima Noticia

                    Um alto quadro do Eurogrupo (que integra os países da moeda única) considerou esta sexta-feira que a dispensa de um programa cautelar é a solução mais adequada nas condições actuais, isto porque Portugal não tiraria daí mais-valias assinaláveis e, por outro lado, dispensaria o condicionalismo de políticas que estaria associado a uma linha específica dos credores internacionais.</p>
            </div>
        </article>

        <article id="artigoDomiciliario" class="aspecto">
            <p>Apostando em elevados padrões de qualidade, quer no que toca à execução da obra física, quer no domínio do equipamento instalado e dos recursos humanos, pretende-se que a creche se assuma em Leiria como um espaço de referência qualitativa na área pueril, contando com uma estrutura de recursos humanos empenhada e com experiência consolidada no domínio infantil.</p>
            <input class="btn btn-primary btn-lg pull-right" type="button" value="Ir para Apoio Domiciliário" onclick="" >
            <header>
                <h3>Ultima Noticia</h3>
            </header>
            <div>
                <p>Ultima Noticia

                    Um alto quadro do Eurogrupo (que integra os países da moeda única) considerou esta sexta-feira que a dispensa de um programa cautelar é a solução mais adequada nas condições actuais, isto porque Portugal não tiraria daí mais-valias assinaláveis e, por outro lado, dispensaria o condicionalismo de políticas que estaria associado a uma linha específica dos credores internacionais.</p>
            </div>
        </article>
    </section>
    
    <section>
        <article id="info">
            <h5>Necessita de mais informaçoes?</h5>
            <a href="">Contacte-nos</a> 
        </article>
    </section>

</div>

