<?php include __DIR__ . '/header.php'; ?>

<h2>Contato</h2>
<div class="row">
      <div class="col s12">This div is 12-columns wide on all screen sizes</div>
      <div class="col s6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16262.927591019163!2d-34.905157437857696!3d-8.102659353640643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1ef8ffea346f%3A0xe0a5692fda5e7080!2sUnidade%20Wyden!5e0!3m2!1spt-BR!2sbr!4v1757593657776!5m2!1spt-BR!2sbr" width="450" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
      <div class="col s6"> 
        
        <div class="row">
        <div class="input-field col s8">
            <input id="icon_prefix" type="text" class="validate">
          <label for="first_name">Nome</label>
          
        </div>
        <div class="input-field col s8">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Sobrenome</label>
        </div>
      </div>
<div class="row">
        <div class="input-field col s8">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
          <span class="helper-text" data-error="Erro." data-success="Permitido">O email deve conter @ e deve ser legítimo</span>
        </div>
      </div>

      </div>

      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right"></i>
  </button>
    </div>

<?php include __DIR__ . '/footer.php'; ?>
