var appbuscar_clientes = new Vue({
    el: '#frm-buscar-clientes',
    data:{
        mis_clientes:[],
        valor:''
    },
    methods:{
        buscarClientes(){
            fetch(`private/Modulos/clientes/procesos.php?proceso=buscarCliente&cliente=${this.valor}`).then( resp=>resp.json() ).then(resp=>{ 
                this.mis_clientes = resp;
            });
        },
        modificarCliente(cliente){
            appcliente.cliente = cliente;
            appcliente.cliente.accion = 'modificar';
        },
        eliminarCliente(idCliente){
            fetch(`private/Modulos/clientes/procesos.php?proceso=eliminarCliente&cliente=${idCliente}`).then( resp=>resp.json() ).then(resp=>{
                this.buscarClientes();
            });
        }
    },
    created(){
        this.buscarClientes();
    }
});