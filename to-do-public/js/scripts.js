paginaIndex = document.querySelector('span[id=index]');
// Função para editar a tarefa
const editar = (id, txt_tarefa) => {
  //criar um form de edição
  let form = document.createElement('form');

  if(paginaIndex) {
    form.action = 'tarefa_controller.php?pag=index&acao=atualizar';

  } else {
    form.action = 'tarefa_controller.php?acao=atualizar';
  }
  form.method = 'POST';
  form.style.marginBlockEnd = '0em';
  form.className = 'row mt-1 justify-content-around';

  //criar um input para entrada do texto
  let inputTarefa = document.createElement('input');
  inputTarefa.type = 'text';
  inputTarefa.name = 'tarefa';
  inputTarefa.className = 'col-8 form-control';
  inputTarefa.value = txt_tarefa;

  //criar um input hidden para guardar o id da tarefa
  let inputId = document.createElement('input');
  inputId.type = 'hidden';
  inputId.name = 'id';
  inputId.value = id;

  //criar um button
  let button = document.createElement('button');
  button.type = 'submit';
  button.className = 'col-3 btn btn-success btn-sm';
  button.innerHTML = 'Atualizar';

  //incluir inputTarefa no form
  form.appendChild(inputTarefa);

  //incluir inputId no form
  form.appendChild(inputId);

  //incluir button no form
  form.appendChild(button);

  //selecionar a div tarefa
  let tarefa = document.querySelector(`div[id=tarefa_${id}]`);

  //limpar o texto para inserir o form
  tarefa.innerHTML = '';
  
  tarefa.insertBefore(form, tarefa[0]);

};

let status = document.getElementsByClassName('id');

// Mudar cor do texto dependendo do status da tarefa
for(i=0;i<status.length; i++) {
  
  if(status[i].innerHTML == 'pendente') {

    status[i].className = 'id pendente';

  } else if(status[i].innerHTML == 'realizado') {

    status[i].className = 'id concluido';
  };

};

// Função para fazer a requisição de deletar ao back-end
const remover = (id) => {
  
  if(paginaIndex) {
    location.href = 'todas_tarefas.php?pag=index&acao=remover&id='+id;

  } else {
    location.href = 'todas_tarefas.php?acao=remover&id='+id;
  }
  
};

// Função para fazer a requisição de realizado ao back-end
const marcarRealizada = (id) => {
  
  if(paginaIndex) {
    location.href = 'todas_tarefas.php?pag=index&acao=marcarRealizada&id='+id;

  } else {
    location.href = 'todas_tarefas.php?acao=marcarRealizada&id='+id;
  }

};
