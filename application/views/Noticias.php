<div id="contentor">

    <h1>Notícias</h1>  
    <?php
//var_dump($dados);

    foreach ($dados as $value) {



        echo "<div class=\"noticias panel panel-primary\">\n";
        echo "    <div class=\"noticiasEsq panel-heading\">\n";
        echo "        <div class=\"noticeTitle\">\n";
        echo "            <h4> " . $value->title . "</h4>\n";
        echo "        </div>\n";

        echo "            <img src=\"Styles/Images/n_.jpg\" alt=\"imagem de noticia\"/>\n";
        echo "        </a>\n";
        echo "        <div class=\"noticeDate\">\n";
        echo "            <p> " . $value->date . " </p>\n";
//echo "            <span>".$value['name']."</span>\n"; 
        echo "        </div>\n";
        echo "    </div>\n";
        echo "\n";
        echo "    <div class=\"noticiasDir\">\n";
        echo "        <div class=\"noticeSpecialidade\">\n";
        echo "            <h6>Ginecologia</h6>\n";
        echo "            <div class=\"linhaHugo\"></div>\n";
        echo "        </div>\n";
        echo "        <div class=\"noticeText\">\n";
        echo "            <span>  " . $value->abstract . "  </span>\n";
        echo "        </div>\n";
        echo "        <div class=\"noticeAuthor\">\n";
       
        echo "           \n";
        ?>

        <form method="get" action="<?= site_url('Noticias/encontraNoticia'); ?>">

            <?php
            $databtn = array(
                'name' => 'noticia',
                'class' => 'btn btn-primary btn-sm',
                'value' => "$value->id",
                'type' => 'submit',
                'style' => 'position: absolute; right:10px;',
                'content' => 'Ler Mais'
            );

            echo form_button($databtn);
            ?> 
        </form>
        <?php
        echo "            \n";
        echo "        </div>\n";
        echo "    </div>\n";
        echo "</div>\n";
    }
    ?>

    <div class="links">

        <p><?php echo $links; ?></p>
    </div>





</div>
