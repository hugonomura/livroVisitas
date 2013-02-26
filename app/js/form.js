function verificaCampos(idForm){
  var form = document.getElementById(idForm);
  var arr = form.getElementsByTagName("input");
  for(i = 0; i < arr.length; i++){
    if(arr[i].value == ""){
      document.getElementById("aside-erro").innerHTML = '<b>Preencha todos os campos!</b>';
      return;
    }
  }
  form.submit();
}
