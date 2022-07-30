// validar formulario para crear un libro
$(document).ready(function() {
    $("#form-login").validate({
      rules: {
        email : {
          required: true,
          email: true,
        },
        password: {
          required: true,
        },
        submitHandler: function(form) {
            form.submit();
          }
      },
      messages: {
        email: "El campo  es obligatorio.",
        password : "El campo es obligatorio",
    }
    });
});
// validar formulario para editar un libro
$(document).ready(function() {
    $("#form-create").validate({
      rules: {
        title : {
          required: true,
        },
        author: {
          required: true,
        },
        literary_engre: {
          required: true,
        },
        submitHandler: function(form) {
            form.submit();
          }
      },
      messages: {
        title: "El campo  es obligatorio.",
        author : "El campo es obligatorio",
        literary_engre : "El campo es obligatorio",
    }
    });
});

// llamada a api de jasonplaceholder
$.ajax({
  url : 'https://jsonplaceholder.typicode.com/todos',
  type : 'GET',
  dataType : 'json',
  success: function(res) {
    let data = res.slice(0, 5);
    let tbody = document.querySelector('#table-api tbody');
        tbody.innerHTML = '';
    for(i = 0; i < data.length; i++) {
      let dato = tbody.insertRow();
      datos = data[i];

      dato.insertCell().innerHTML = datos['userId'];
      dato.insertCell().innerHTML = datos['id'];
      dato.insertCell().innerHTML = datos['title'];
      dato.insertCell().innerHTML = datos['completed'];
    
    }
  },
  error : function(jqXHR, status, error) {
      alert('Disculpe, existió un problema');
  },
});

