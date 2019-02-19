 //Requerir el módulo mongoose
let mongoose = require('mongoose'),
    Schema = mongoose.Schema 

let UserSchema = new Schema({ /
  user: { type: String, required: true, unique: true}, 
  email: { type: String, required: true }, 
  password: { type: String, required: true}, 
  })

let UsuarioModel = mongoose.model('Usuario', UserSchema) 

//Exportar el modelo del usuario
module.exports = UsuarioModel 
