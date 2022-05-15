<template>
    <div class="container pt-5 mt-3">
        <h1 class="section-heading">Productos</h1>
        <div class="row text-justify wow fadeInUp slow">
            <div class="col-lg-4 col-md-6  col-sm-12 col-sm-12 col-xs-12  my-4" id="cepillo-de-jabali">
                <img :src="url_base + '/images/GifAnkira.gif'" class="img-inf" 
                            
                />
            </div>
            <div class="col-lg-8 col-sm-12 col-md-6 col-sm-12 col-xs-12 item-center">
                <div>
                    <h2>
                        Cepillo de cerdas de jabali
                    </h2>
                    <p>
                        El cepillo de cerdas de jabalí, distribuye los aceites del cabello, haciendo que recuperen su brillo natural y dando volumen, sus cerdas son suaves y no le hacen daño al cuero cabelludo. 
                    </p>    
                </div>    
            </div>
        </div>
        
        <div class="row text-justify wow fadeInUp slow">
            <div class="col-lg-8 col-sm-12 col-md-6 col-sm-12 col-xs-12 item-center" id="tonico-capilar">
                <div class="md-hidden" >
                    <h2 class="">
                        Tónico capilar
                    </h2>
                    <ul>
                        <li>Mejora el riego sanguíneo en la cabeza</li>
                        <li>Activa el crecimiento y previene la caída de cabello.</li>
                        <li>Promueve un pelo más fuerte y con volumen natural.</li>
                        <li>Aporta brillo e hidratación desde la raíz hasta las puntas.</li>
                        <li>Previene la aparición de canas.Combate la caspa y los eczemas.</li>
                    </ul>    
                </div>    
            </div>
            <div class="col-lg-4 col-md-6  col-sm-12 col-sm-12 col-xs-12 text-r my-4">
                <div class="img-inf-r">
                
                </div>
                <img :src="url_base + '/images/Tonico.png'" class="img-sup-r">
            </div>
            <div class="col-lg-8 col-sm-12 col-md-6 col-sm-12 col-xs-12 item-center">
                <div class=" md-show">
                    <h2 class="">
                        Tónico capilar
                    </h2>
                    <ul>
                        <li>Mejora el riego sanguíneo en la cabeza</li>
                        <li>Activa el crecimiento y previene la caída de cabello.</li>
                        <li>Promueve un pelo más fuerte y con volumen natural.</li>
                        <li>Aporta brillo e hidratación desde la raíz hasta las puntas.</li>
                        <li>Previene la aparición de canas.<li>
                        <li>Combate la caspa y los eczemas.</li>
                    </ul>     
                </div>    
            </div>
            <div class="row pb-3 pt-4">
                <div class="col-md-12  mb-4  d-flex align-items-stretch">
                    <div class="card">
                        <div class="image-box box">
                            <img 
                                class="card-img-top" 
                                :src="url_base + '/images/Canela.png'"
                                alt="canela de Ceylán"
                            />
                        </div>
                        
                        <div class="card-body">
                            <h4 class="card-title"> 
                                Canela de Ceylán
                            </h4>
                            <p class="card-text">
                                Es la variedad con más propiedades medicinales, es un reparador natural y muy efectivo para el pelo dañado, desvitalizado y sin brillo. 
                                También nos ayuda a combatir los eczemas y la caspa, y a potenciar el crecimiento del cabello.
                            </p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="row text-justify wow fadeInUp slow pt-5" >
            <div class="col-lg-5 col-md-6  col-sm-12 col-sm-12 col-xs-12 my-4" id="shampoo">
                <div class="img-inf-3">
                    
                </div>
                <img :src="url_base + '/images/Shampoo.png'"  class="img-sup-l"/>
            </div>
            <div class="col-lg-7 col-sm-12 col-md-6 col-sm-12 col-xs-12 item-center">
                <div>
                    <h2>
                        Shampoo
                    </h2>
                    <p>
                        Las células muertas del cuero cabelludo se desprenden en forma de escamas diminutas e invisibles. No obstante, en algunos casos o descamación excesiva, las células muertas se acumulan en grupos y se vuelven un problema para las células sanas.
                    </p> <br>
                    <p>
                        El folículo piloso es la "unidad de producción" del cabello. Cada día, los folículos pilosos producen un millón de nuevos queratinocitos. Estas células sintetizan queratina, una proteína estructural fibrosa que es el principal componente del cabello, y que lo hace extremadamente resistente. En su base interna, el folículo piloso tiene un bulbo, llamado papila dérmica, donde confluyen pequeños vasos sanguíneos cargados de nutrientes y oxígeno necesarios para su crecimiento. Por encima de este bulbo se encuentra la glándula sebácea, que produce sebo. Así, el cabello está permanentemente lubricado.
                    </p> <br>  
                    <p>
                        El cepillado favorece que se eliminen los cabellos es fase telógena (en proceso de caída) dando paso al cabello en fase anágena (el momento del nacimiento del cabello).
                    </p>
                    <ul>
                        <li>Shampoo</li>
                        <li>Shampoo con ingredienes naturales</li>
                    </ul>
                    <br><br>
                </div>    
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {   
                url_base : "",    
            }
        },
        mounted() {
            new WOW().init();
            $( ".wow" ).addClass( "fadeInUp" )
        },        
        methods:{
        }
    }
</script>