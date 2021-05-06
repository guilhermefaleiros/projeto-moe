const UserType = {
  INTERN: 'intern',
  EMPLOYER: 'employer'
}

$(document).ready(function(){
  $('select').formSelect()

  $(".select-type").change(function(e) {
    clearExtraFields()
    if(e.target.value === UserType.INTERN) {
      appendInternInfo()
    } else {
      appendEmployerInfo()
    }
  })
})

function appendInternInfo () {
  $('.form-user').append(
    `
    <div class="input-field col s6 removable">
      <input placeholder="Nome" name="name" id="name" type="text" class="validate">
    </div>
    <div class="input-field col s6 removable">
      <input placeholder="Curso" id="course" name="course" type="text" class="validate">
    </div>
    <div class="input-field col s6 removable">
      <input placeholder="Ano de Ingresso" name="ingressYear" id="ingressYear" type="number" class="validate">
    </div>
    <div class="input-field col s6 removable">
      <input placeholder="Minicurrículo" name="minicurriculum" id="minicurriculum" type="text" class="validate">
    </div>
    <button class="btn waves-effect waves-light removable" type="submit" name="action">Cadastrar
      <i class="material-icons right">send</i>
    </button>
    `
  )
}

function appendEmployerInfo () {
  $('.form-user').append(
    `
    <div class="input-field col s6 removable">
      <input placeholder="Nome" name="contactName" id="contactName" type="text" class="validate">
    </div>
    <div class="input-field col s6 removable">
      <input placeholder="Nome da Empresa" name="nameCompany" id="nameCompany" type="text" class="validate">
    </div>
    <div class="input-field col s6 removable">
      <input placeholder="Endereço da empresa" name="address" id="address" type="text" class="validate">
    </div>
    <div class="input-field col s6 removable">
      <input placeholder="Descrição da empresa" name="description" id="description" type="text" class="validate">
    </div>
    <button class="btn waves-effect waves-light removable" type="submit" name="action">Enviar
      <i class="material-icons right">send</i>
    </button>
    `
  )
}

function clearExtraFields() {
  $( ".removable" ).remove();
}