<template>
    <div>
        <form class="animated bounceInRight"  method="#" action="#"  id="data-form"  @submit.prevent="processForm()" autocomplete="off">
		    <div class="data">              
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <div class="md-form mb-0">
                                <input type="text" 
                                       v-model="contact.name" 
                                       id="data-name" 
                                       required 
                                       class="form-control">
                                <label for="data-name">
                                    Nombre
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <div class="md-form mb-0">
                                <input type="email" 
                                       v-model="contact.email" 
                                       id="data-email" 
                                       required 
                                       class="form-control">
                                <label for="data-email">
                                    Correo
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input  type="text" 
                                    v-model="contact.subject" 
                                    id="data-Subject" 
                                    required 
                                    class="form-control">
                            <label for="data-Subject">
                                Asunto
                            </label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form mb-0">
                            <textarea type="text" 
                                      v-model="contact.message" 
                                      id="data-message" 
                                      required 
                                      class="md-textarea form-control" 
                                      rows="3">
                            </textarea>
                            <label for="data-message">
                                Mensaje
                            </label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-center mt-4">
                    <button type="submit" 
                            class="btn btn-dark btn-lg text-white">
                        Enviar
                    </button>
                </div>
            </div>
		</form>
    </div>
  
</template> 

<script>
    export default {
        name:'form-demo',  
        data(){
            return {
            	errors: [],
            	contact  : {
            		name      : "",
					subject   : "",
					email     : "",
					message   : "",
            	},
                url_base    : "",
            }
        },
        
        methods:{	
		    processForm: function(){                             
                var form = new FormData();

                form.append('data', JSON.stringify(this.contact));


                    this.$toast.info(
                        "Mandando mensaje...",
                        "OK",
                        { position: "topRight"}
                    );

                axios.post('http://creeryesperar.com/mail_contact',
                form,
                {
                    headers:{'Content-Type':'multipart/form-data'}
                })
                .then(response=>{  

                    
                    this.contact.name      = "",
                    this.contact.subject   = "",
                    this.contact.email     = "",
                    this.contact.message   = "",
                              
                    this.$toast.success(
                        "Menseje enviado correctamente, gracias por comunicarte con nosotros",
                        "Genial",
                        { position: "topRight"}
                    );
                    
                })
                .catch(e=>{
                    this.errors.push(e)                   
                })                
            },
		}
    }
</script>