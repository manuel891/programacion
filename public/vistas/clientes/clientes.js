var appcliente = new Vue({
    el:'#frm-clientes',
    data:{
        cliente:{
            idCliente : 0,
            accion    : 'nuevo',
            nombre    : '',
            direccion : '',
            telefono  : '',
            dui    : '',
            msg       : ''
        }
    },
    methods:{
        guardarClientes(){
            fetch(`private/Modulos/clientes/procesos.php?proceso=recibirDatos&cliente=${JSON.stringify(this.cliente)}`).then( resp=>resp.json() ).then(resp=>{
                this.cliente.msg = resp.msg;
            });
        },
        limpiarClientes(){
            this.cliente.idCliente=0;
            this.cliente.accion="nuevo";
            this.cliente.nombre="";
            this.cliente.direccion="";
            this.cliente.telefono="";
            this.cliente.dui="";
            this.cliente.msg="";
        }
    }
});