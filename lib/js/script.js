function validateForm() {
    
    var fields = [
      "nombre",
      "especialidad",
      "telefono",
      "celular",
      "email",
      "deposito",
      "lugar_trabajo",
      "codigo_agremiado",
      "cedula",
      "nacionalidad",
      "como_conoce",
      "porque_asistir"
    ];
  
    var i,
      l = fields.length;
    var fieldname;
    for (i = 0; i < l; i++) {
      fieldname = fields[i];
      if (document.forms["inscribirse"][fieldname].value === "") {
        document.getElementById(fieldname).style.border = " 1px solid red";
        document.getElementById("validation-form").style.display = "block";
        return false;
      }else{
        document.getElementById(fieldname).style.border = "none";
      }
    }
    return true;
}  