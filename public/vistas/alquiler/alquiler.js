var appalquiler = new Vue({
    el:'#frm-alquiler',
    data:{
        alquiler:{
            idAlquiler : 0,
            accion    : 'nuevo',
            idCliente    : '',
            idPelicula    : '',
            fechaPrestamo    : '',
            fechaDevolucion    : '',
            valor    : '',
            msg       : ''
        }
    },
    methods:{
        guardarAlquiler(){
            fetch(`private/Modulos/alquiler/procesos.php?proceso=recibirDatos&alquiler=${JSON.stringify(this.alquiler)}`).then( resp=>resp.json() ).then(resp=>{
                this.alquiler.msg = resp.msg;
            });
        },
        limpiarAlquiler(){
            this.alquiler.idAlquiler=0;
            this.alquiler.accion="nuevo"; 
            this.alquiler.idCliente="";
            this.alquiler.idPelicula="";
            this.alquiler.fechaPrestamo="";
            this.alquiler.fechaDevolucion="";
            this.alquiler.valor="";
            this.alquiler.msg="";
        }
    }
});
   