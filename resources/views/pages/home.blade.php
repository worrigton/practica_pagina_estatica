 @extends('main.index')
 @section('content')
     |
<div class="mt-3" id="inicio">
    <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active" >
                <img class="d-block w-100" src="{{asset('images/sliders/BANNER1.png')}}"/>
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item " >
                <img class="d-block w-100" src="{{asset('images/sliders/BANNER2.png')}}"/>
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item " >
                <img class="d-block w-100"  src="{{asset('images/sliders/BANNER3.png')}}"/>
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>

    <section class="text-justify">
        <div class="streak streak-photo streak-md" 
             style="background-image: url('https://i.pinimg.com/originals/17/04/25/17042559526d0e7cc53c5fba80ef737d.jpg');">
            <div class="flex-center view rgba-indigo-light"
                 style="background: #0000008a;">
                <div class="container py-5">
                    <!--Section: Features v.4-->
                    <section class="section feature-box animated wow fadeInLeft delay-2s">
                        <!--Section heading-->
                        <h2 class="py-2 my-3 white-text font-weight-bold text-center animated wow fadeInLeft delay-5s">
                            Arado
                        </h2>
                        <!--Grid row-->
                        <div class="row features-small mb-5 pb-4">
                            <!--Grid column-->
                            <div class="col-12 pl-5">                                
                                <p class="white-text">El arado, que remueve <b>el suelo y lo prepara para ser cultivado</b>, es un humilde y sencillo instrumento de trabajo que contribuyó de manera decisiva a la civilización de la humanidad. 
                                El arado simboliza, el trabajo fecundo y en paz que ennoblece a todos los seres humanos. 
                                Al mover el suelo los nutrientes de la tierra quedan al alcance de las semillas, que le permitirán crecer y dar frutos, con raíces màs fuertes las plantas resisten diferentes condiciones y perduran.  </p>    
                            </div>
                        </div>
                        <!--Grid row-->
                    </section>
                    <!--/Section: Features v.4-->
                </div>
            </div>
        </div>
    </section>

    <services></services>
    
    <section class="container section pb-4 pt-3border-bottom">
        <div class="pt-5">                
            <h3>Ingredientes naturales</h3>
            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card mb-3">
                        <div class="image-box box">
                            <img 
                                class="card-img-top" 
                                src="{{asset('images/RomeroBajo.png')}}"
                                alt="Card image cap"
                            />
                        </div>
                        
                        <div class="card-body">
                            <h4 class="card-title"> 
                                Romero
                            </h4>
                            <p class="card-text">
                                es una de las plantas más conocidas para activar la circulación y tonificar cualquier parte del cuerpo. <br><br>
                                En el caso del cuero cabelludo nos ayuda prevenir la alopecia y mejorar el crecimiento de un pelo fuerte y saludable.<br><br>
                                Esta planta es muy rica en principios activos. Sus nutrientes principales son las vitaminas A, B2, B6 y C, y tiene un alto contenido en antioxidantes.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="card mb-3">
                        <div class="image-box box">
                            <img 
                                class="card-img-top" 
                                src="{{asset('images/Ortigabajo.png')}}"
                                alt="Card image cap"
                            />
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"> 
                                Ortiga
                            </h4>
                            <p class="card-text">
                                Es una de las mejores plantas para prevenir algunos tipos de alopecia e incluso promover el crecimiento de pelo en partes en las que ya no salga. <br><br>
                                La ortiga contiene grandes cantidades de vitaminas, entre las que encontramos la vitamina B1, В12, B5 (ácido pantoténico), C, D y Е. En cuanto a minerales, es muy rica en hierro, calcio, sílice, azufre, potasio y manganeso. También contiene una gran cantidad de  ácidos orgánicos (caféico, clorogénico, gálico, fórmico, ascórbico, acético), así como acetilcolina, histamina, fitonicidas, clorofila, taninos, porfirinas, flavonoides, saponinas
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12  mb-4  d-flex align-items-stretch">
                    <div class="card">
                        <div class="image-box box">
                            <img 
                                class="card-img-top" 
                                src="{{asset('images/ManzanaBajo.png')}}"
                                alt="Card image cap"
                            />
                        </div>
                        
                        <div class="card-body">
                            <h4 class="card-title"> 
                                Manzana
                            </h4>
                            <p class="card-text">
                                Es rico en vitaminas y minerales que favorecen la estructura capilar y permiten que el 
                                cabello luzca mucho más fuerte, saludable e hidratado. <br><br>
                                Contiene un aminoácido llamado arginina, vital para la reparación del tejido capilar. 
                                que te permiten regular PH del cuero cabelludo cuando es alterado por sobre exposición 
                                al frío o al calor; o si el pelo sufrió algún daño por el cloro de las piscinas.  
                                Limpia el pelo de impurezas, toxinas y residuos de geles, fijadores. <br><br>
                                Destapa los folículos pilosos y fortalece las hebras, desde la punta hasta la raíz. 
                                ¡Toda una sensación! 
                                Acondicionador natural. Por sus vitaminas y nutrientes, este producto es un aliado para desenredar el cabello. Al poco tiempo, notarás que los mechones se vuelven manejables 
                                y fáciles de peinar.<br><br>
                                Esta fruta es rica en vitaminas como la A, C, B1, B2 y vitamina. Funciona como 
                                Estimulante capilar, ayuda en la Prevención de las canas y Regulador del sebo
                            </p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    

    <div class="container pt-5 mt-3 pb-5 border-bottom text-justify">
        
        <techniques id="tecnicas"></techniques>

        <section class="section pt-5 pb-4 border-bottom">
            <div class="row">

                <div class="col-md-6 mb-4" id="beneficios">
                    <!-- Card -->
                    <div class="card ovf-hidden">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="{{asset('images/Ankira001.png')}}" alt="Card image cap">
                            <a>
                                <div class="mask waves-effect waves-light rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body mb-5">

                            <!-- Title -->
                            <h4 class="card-title">
                                ¿Qué beneficios tiene en nuestro pelo un buen cepillado?
                            </h4>
                            <hr>
                            <a class="link-text activator mr-3">
                                Leer más 
                                <i class="fa fa-angle-double-right ml-2"></i>
                            </a>
                        </div>

                        <!-- Card reveal -->
                        <div class="card-reveal white">
                            <div class="content text-center item-center">
                            <!-- Content -->
                                <h4 class="card-title font-weight-bold my-4">
                                    <i class="far fa-times"></i>
                                </h4>
                            </div>
                            <div class="py-5 px-5 text-sm-left text-md-justify item-center">
                                <p>
                                    Además de ser imprescindible para <b>la limpieza del cabello</b> (ya que lo deja libre de impurezas y restos de productos) y para la  <b>exfoliación del cuero cabelludo</b>, “el cepillado activa la microcirculación del cuero cabelludo, consiguiendo un pelo  <b>sano y suave</b>”. Más suave, más sano, con más brillo y  <b>más fuerte</b>, “ya que activamos el riego sanguíneo y con ello estimulamos la circulación, lo que afecta directamente a la salud, vitalidad y fuerza del cabello
                                </p>
                            </div>
                        </div>
                        <!-- Card reveal -->
                    </div>
                    <!-- Card -->
                </div>

                <div class="col-md-6 mb-4" id="razones">
                    <!-- Card -->
                    <div class="card ovf-hidden">

                        <!-- Card image -->
                        <div class="view overlay">
                            <img class="card-img-top" src="{{asset('images/ankira002.png')}}" alt="Card image cap">
                            <a>
                                <div class="mask waves-effect waves-light rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body mb-5">

                            <!-- Title -->
                            <h4 class="card-title">
                                 Razones por las que los cepillos de pelo de jabalí son tan buenos para el cabello
                            </h4>
                            <hr>
                            <a class="link-text activator mr-3">
                                Leer más 
                                <i class="fa fa-angle-double-right ml-2"></i>
                            </a>
                        </div>

                        <!-- Card reveal -->
                        <div class="card-reveal white">
                            <div class="content text-center item-center">
                            <!-- Content -->
                                <h4 class="card-title font-weight-bold my-4">
                                    <i class="far fa-times"></i>
                                </h4>
                            </div>
                            <div class="py-5 px-5 text-sm-left text-md-justify item-center">
                                <ul>
                                <li> Favorecen la circulación sanguínea del cuero cabelludo</li>
                                <li> Estimulan el crecimiento del cabello</li>
                                <li> Dan más brillo al pelo</li>
                                <li> Crean un tacto más sedoso</li>
                                <li> Desenredan el pelo</li>
                                <li> Combaten el encrespamiento impidiendo la creación de electricidad estática</li>
                                <li> Son un buen acondicionador natural</li>
                                <li> Son capaces de distribuir los aceites del pelo</li>
                                <li> Favorecen que se sellen las cutículas</li>
                                <li> Absorben grasa y suciedad</li>
                                <li> Sus puntas son redondeadas para masajear suavemente cabello y cuero cabelludo</li>
                                <li> No dañan ni estropean el cabello al tener cerdas suaves</li>
                                <li> Mejora la apariencia general de tu cabello</li>
                            </ul>
                            </div>
                        </div>
                        <!-- Card reveal -->
                    </div>
                    <!-- Card -->
                </div>
            </div>
        </section>

        <section class="section pt-5 mt-3 pb-4 border-bottom" id="cepilla-correctamente">
            <h1 class="section-heading text-left">
                Aprende a cepillar correctamente tu cabello
            </h1>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12  my-4 mb-4">
                    <img src="{{asset('images/Cepillo1.png')}}" class="img-w">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 item-center">
                    <div class="pt-5 mt-3">
                        <h2 class="">
                            ¿Es bueno cepillarse el cabello por la noche?
                        </h2>
                            
                        <p>
                            
                            Sí, es muy bueno para el cuero cabelludo porque, además de limpiar y desenredar el cabello, el cepillado estimula la circulación sanguínea. Por ello, no solo hay que cepillarse el cabello, sino que hay que dejar que el cepillo toque un poco la piel del cuero cabelludo. <br><br>
                        </p>    
                    </div>    
                </div>
            </div>
            <div class="row pt-md-5 mt-md-5">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 item-center">
                    <div class="pt-5 mt-3 md-hidden">
                        <h2 class="">
                            ¿Cuál es la mejor forma de cepillar el cabello?
                        </h2>
                            
                        <p>
                            Hay que realizar el cepillado con el cabello <b>completamente seco</b>, ya que el cabello mojado es más débil y podríamos romperlo. Procedemos a cepillar <b>con suavidad</b> para estimular el riego sanguíneo en el cuero cabelludo, cosa que facilita el aporte de nutrientes al bulbo piloso, y notarás como tu cabello se vuelve más brillante y grueso.
                        </p>    
                    </div>    
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12  my-4 mb-4">
                    <img src="{{asset('images/Cepillo2.png')}}" class="img-w" 
                                
                    />
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 item-center ">
                    <div class="pt-5 mt-3 md-show">
                        <h2 class="">
                            ¿Cuál es la mejor forma de cepillar el cabello?
                        </h2>
                            
                        <p>
                            
                           Hay que realizar el cepillado con el cabello <br>completamente seco</br>, ya que el cabello mojado es más débil y podríamos romperlo. Procedemos a cepillar <br>con suavidad</br> para estimular el riego sanguíneo en el cuero cabelludo, cosa que facilita el aporte de nutrientes al bulbo piloso, y notarás como tu cabello se vuelve más brillante y grueso.
                        </p>    
                    </div>    
                </div>
            </div>
        </section>

        <section class="section pt-5 pb-4" id="contacto">
            <h2>¡Contáctanos!</h2>
            <div class="card p-5 my-3">
                <contact></contact>
            </div>
        </section>
    </div>
</div>

@endsection