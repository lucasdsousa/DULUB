@extends('layouts.app')
@component('components.navbar')@endcomponent
@component('components.carousel')@endcomponent

<div class="container" align="center" id="linhas">
    <a href="#linhas">
        <img class="img-responsive" src="images/arrow_down.svg" alt="">
    </a>
</div>

<div class="container">
    <h1 class="display-5 text-center my-5"><strong>LINHA DULUB</strong></h1>
    <p class="text-center lead" style="margin-top:-40px; font-weight:bold">A mais completa Linha de Lubrificantes para você e sua empresa.</p>
</div>

<section class="container mb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm zoom mb-3">
                <a href="{{ route('otto') }}">
                    <img src="images\linha_veiculos-leves.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px; filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">Automotivo Ciclo OTTO</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('diesel') }}">
                    <img src="images\Automotivo-Ciclo-Diesel2.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:290px; height:185px; filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">Automotivo Ciclo Diesel</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('motos') }}">
                    <img src="images\motocicletas.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px; filter:brightness(50%)">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">Motocicletas</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm zoom mb-3">
                <a href="{{ route('trans') }}">
                    <img src="images\caixa_marcha.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px;  filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">Transmissão</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('eng') }}">
                    <img src="images\engrenagens.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:290px; height:185px;  filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">Engrenagens</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('ind') }}">
                    <img src="images\industria.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px;  filter:brightness(50%)">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">Industrial</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm zoom mb-3">
                <a href="{{ route('graxas') }}">
                    <img src="images\oleovegetal3.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px; filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">Graxas</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('arla') }}">
                    <img src="images\bg_automotivo_ciclo_diesel.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:290px; height:185px;  filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">Arla 32</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('equip') }}">
                    <img src="images\transformador.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px; filter:brightness(50%)">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">Equipamentos</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>
        </div>
    
    </div>
</section>

<div class="container-fluid" style="background-color:whitesmoke;">
    <section class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm" style="margin-top:50px; margin-bottom:100px">
                    <h2 style="font-weight:bold; color:red">Nossos Clientes!</h2>
                    <p class="text-sm-left"><strong>GRANISTONE</strong>
                        <br>
                        Com 25 anos de mercado, a Granistone é uma das principais empresas de rochas ornamentais do mundo. 
                        O granito extraído no sertão cearense, município de santa Quitéria, é exportado para todos os continentes do globo. 
                        A Granistone usa lubrificantes DULUB em suas maquinas, veículos e equipamentos.
                    </p>
                </div>

                <div class="col-sm" style="margin-top:100px; margin-bottom:100px">
                    <img src="images\Granistone.jpg" alt="" class="img-responsive d-block p-1">
                </div>

                <div class="col-sm" style="margin-top:50px; margin-bottom:100px; background-color:white">
                    <h2 style="font-weight:bold; color:red; margin-top:20px">Últimas Notícias</h2>
                    <h4 class="text-sm-left"><strong><a href="{{ route('noticia.id', $noticia->id) }}" style="color:black">{{ $noticia->titulo }}</a></strong></h4>
                    <p>{{ $noticia->created_at }}</p>
                        <br>
                        <img class="image-responsive" src="{{ asset("$noticia->imagem") }}" alt="" style="width:75%">
                    </p>                   
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container-fluid">
    <section class="container" style="margin-bottom:100px;">
        <div class="container">
            <div class="row">
                <div class="col-sm mt-5">
                    <img src="images\IMG_HOME2.png" alt="" class="img-responsive d-block">
                </div>

                <div class="col-sm mt-5">
                    <h1><strong>A Dulub evoluiu.</strong></h1>
                    <h1 style="color:gray; margin-top:-20px; font-family: Arial"><strong>____</strong></h1>
                    <br>
                    <h5>O lubrificante com a tecnologia que você já conhece, 
                        agora tem embalagens mais modernas em uma linha mais fácil de entender.</h5>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container-fluid" style="background-color:#F5F5F5;">
    <div class="container">
        <br><br>
        <h1>Partners</h1>
        <div class="carousel slide" id="carouselParceiros" data-ride="carousel">            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <img src="images\Parceiros\QUANTIQ2.png" alt="" class="img-responsive d-block" style="width:100%">
                        </div>

                        <div class="col-md-3">
                            <img src="images\Parceiros\PETRONAS2.png" alt="" class="img-responsive d-block" style="width:100%">
                        </div>

                        <div class="col-md-3">
                            <img src="images\Parceiros\PETROBRAS2.png" alt="" class="img-responsive d-block" style="width:100%">
                        </div>

                        <div class="col-md-3">
                            <img src="images\Parceiros\adnoc.jpg" alt="" class="img-responsive d-block" style="width:100%">
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <img src="images\Parceiros\LUBRIZOL2.png" alt="" class="img-responsive d-block" style="width:100%">
                        </div>

                        <div class="col-md-3">
                            <img src="images\Parceiros\CHEVRON2.png" alt="" class="img-responsive d-block" style="width:100%">
                        </div>

                        <div class="col-md-3">
                            <img src="images\Parceiros\AFTON2.png" alt="" class="img-responsive d-block" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev ml-n5" href="#carouselParceiros" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next mr-n5" href="#carouselParceiros" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

@component('components.rodape')@endcomponent
