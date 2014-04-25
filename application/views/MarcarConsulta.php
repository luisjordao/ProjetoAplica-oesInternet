<?php  $this->load->view('Head');?>

<h1 class="titulo">Marcar Consulta</h1>

<div id="contentor">
    
    <section id="formSection">
        <form action="#" method="post" id="formulario" >
    <fieldset>
        <legend>Informação Pessoal</legend>
        
        <div class="formItem">
        <label>Nome:</label>
        <input type="text" class="caixaTexto" placeholder="Insira o nome completo"required/>
        </div>
        
        <div class="formItem">
        <label>Data de Nascimento:</label>
        <input type="text" class="caixaTexto" required/>
        </div>
    
    <div class="formItem">     
       <label>Num seg social:</label>
        <input type="text" class="caixaTexto" required/>
    </div>
        
        <div class="formItem"> 
       <label>Morada:</label>
       <input type="text" class="caixaTexto" required/>
    </div>
        
    
        
        <div class="formItem">
       
        <label>Sexo:</label>
        
        <input type="radio" name="sexo" value="masculino"/>
        <label>Masculino</label>
        
        <input type="radio" name="sexo" value="feminino"/>
        <label>Feminino</label>
    </div>
         <div class="formItem">
       
       <label>Email:</label>
        <input type="email"  class="caixaTexto" required/>
    </div>
        
        <div class="formItem">
        <label>Telefone:</label>
        <input type="number" class="caixaTexto" required/>
    </div>
    
    
   
        
        
        
    </fieldset>
    
    
    <fieldset>
        <legend>Marcaçao</legend>
        
        
        <div class="formItem" >
            <label>Especialidade</label>
            <input type="text" class="caixaTexto"/>
        </div>
        <div class="formItem">
            <label>Medico</label>
            <input type="text" class="caixaTexto"/>
        </div>
        <div class="formItem">
            <label>Data</label>
            <input type="date" class="caixaTexto"/>
        </div>
         <div class="formItem">
            <label>Hora</label>
            <input type="time" class="caixaTexto"/>
        </div>
        
    </fieldset>
    
    
    
    <div> 
        <input type="submit" value="Marcar"/>
    </div>
                
                
            </form>
        
    </section>




</div>
</div>

<?php  $this->load->view('foot_Site.html');?>