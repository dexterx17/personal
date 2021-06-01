<template>
    <div class="card card-defaul">
        <div class="card-header">
            <h1 class="card-title">Listado de categorias</h1>     
            <button class="btn btn-outline-primary" @click="addCategorias()">Nuevo</button>    
        </div>
        <div class="card-body">
            <div v-show="showForm==true">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre * </label>
                        <input type="text" class="form-control" v-model="categoria.nombre" id="nombres" placeholder="Ingresar el nombre">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descrirpción *</label>
                        <input type="text" class="form-control" v-model="categoria.descripcion" id="apellidos" placeholder="Ingresar la descripción">
                    </div>
                    <div class="form-group">
                        <label for="orden">Ordel</label>
                        <input type="text" class="form-control" v-model="categoria.orden" id="edad" placeholder="Ingresar la orden">
                    </div>
                    <div class="form-group">
                        <select v-model="categoria.tipo"> 
                            <option value="Ingreso">Ingreso</option>
                            <option value="Gasto">Gasto</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div v-if="showButtonSave==true">
                            <button type="button" class="btn btn-primary" @click="saveData">Guardar</button>
                        </div>
                        <div v-else>
                            <button type="button" class="btn btn-secondary" @click="editData">Editar</button>
                        </div>
                        <button type="button" class="btn btn-outline-primary" @click="showForm = !showForm ">Cancelar</button>
                    </div>
                </form>
            </div>
            <table class="table table-dark table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombres</th>
                        <th>Descripción</th>
                        <th>Ordenes</th>
                        <th>Tipo</th>
                        <th>Opiones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(categoria, index) in categorias" :key="categoria.id">
                        <td>{{ index}}</td>
                        <td>{{categoria.nombre}}</td>
                        <td>{{categoria.descripcion}}</td>
                        <td>{{categoria.orden}}</td>
                        <td>{{categoria.tipo}}</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary" @click='editCategorias(categoria,categoria.id)'>Editar</button>
                            <button type="button" class="btn btn-outline-danger" @click='deleteData(categoria.id)'>Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            showForm:false,
            showButtonSave:true,
            categorias:[],
            id:0,
            categoria:{
                'nombre':'',
                'descripcion':'',
                'orden':'',
                'tipo':'',
            }
        }
    },
     methods: {
        getCategorias(){
            axios.get('api/categorias')
            .then(response=>{
                // asigno la respuesta
                this.categorias=response.data
            })
        },
        addCategorias(){
            this.showForm=true;
            this.showButtonSave=true;
            this.categoria={
                'nombre':'',
                'descripcion':'',
                'orden':'',
                'tipo':'',
            }
        },
        editCategorias(categoria,id){
            this.categoria=categoria;
            this.id=id;
            this.showForm=true;
            this.showButtonSave=false;
        },
        saveData(){
            axios.post('api/categorias',this.categoria)
            .then(response =>{ 
                this.categorias.push(response.data);
                this.showForm=false
            })
        },
        editData(){
            axios.put('api/categorias/'+this.id, this.categoria)
                .then(response =>{ 
                    this.getCategorias();
                    this.showForm=false
            
            })
        },

        deleteData(id){
            // this.items.splice(categoria,1);
            axios.delete('api/categorias/'+id)
                .then(response =>{ 
                    this.getCategorias();
            })
        }
    },
    mounted(){
        this.getCategorias();
    }
}
</script>