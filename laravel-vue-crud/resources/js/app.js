
		new Vue({
			el: '#crud',
			created: function(){
				this.getKeeps();
				$('#form-hechos').hide();
			},
			data:{
				keeps:[],
				newKeep:'',
				fillKeep:{'id':'','keep':''},
				errors: [],
				htmlvictima: $('#form-victima').html(),
				htmlhechos:$('#form-hechos').html()
			},
			methods:{
				getKeeps: function(){
					var urlKeeps = 'tasks';
					axios.get(urlKeeps).then((response) => {
							this.keeps = response.data;
					});
				},
				editKeep:function(keep){
					this.fillKeep.id = keep.id;
					this.fillKeep.keep = keep.keep;
					$('#edit').modal('show');
				},
				updateKeep: function(id){
					var url = 'tasks/'+id;
					axios.put(url,this.fillKeep).then((response)=>{
						this.getKeeps();
						this.fillKeep = {'id':'','keep':''};
						this.errors = [];
						$('#edit').modal('hide');
						toastr.success('Tarea actualizada con exito :) ');//mensaje
					}).catch(error=>{
						this.errors = error.response.data;
					});
				},
				deleteKeep: function(keep){
					var url = 'tasks/' + keep.id;
					axios.delete(url).then((response)=>{//eliminamos
						this.getKeeps(); //listamos
						toastr.success('Eliminado correctamente  el elemento '+keep.id);//mensaje
					});
				},
				createKeep: function() {
					var url = 'tasks' 
					axios.post(url,{
						keep: this.newKeep
					}).then(response=>{
						this.getKeeps();
						this.newKeep='';
						this.errors=[];
						$('#create').modal('hide');
						toastr.success('Nueva tarea creada con exito :)');//mensaje
					}).catch(error=>{
						this.errors = error.response.data;
					});
				},
				mostrarHechos:function(){
					$('#formularios').empty();
					$('#formularios').append(this.htmlhechos);
				},
				mostrarVictima:function(){
					$('#formularios').empty();
					$('#formularios').html(this.htmlvictima);
				}
			}
		});
