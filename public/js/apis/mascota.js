function init(){

var apiMascota='http://localhost/ttd4a21/public/apiMascota'

new Vue({
	// le asignamos el token 
	 http: {
            headers: {
               'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
            }
        },

	el:"#apiMascota",

	data:{

		mensaje:'Esta es la api para mascotas',
		nombre:'',
		genero:'',
		peso:'',
		mascotas:[], 


	},
	//fin del data

	//Al crear la pagina
	created:function(){
		this.obetenerMascotas();

	},

	//inicio de los methods
	methods:{
		//metodo para obtener las mascotas
		obetenerMascotas:function(){
			this.$http.get(apiMascota).then(function(json){
				this.mascotas=json.data;
			}).catch(function(json){
				console.log(json);
			});
		},
		//fin del metodo obtener las mascotas

		//mostrar la ventana modal

		mostrarModal(){
			$('#modalMascota').modal('show');
		},

		//fin de mostrar la ventana modal

		guardarMascota:function(){
			var mascota={nombre:this.nombre,peso:this.peso,genero:this.genero};
			console.log(mascota);
		},

	},
	//fin de los methods
});

} window.onload = init;