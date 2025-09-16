@extends('component.app')

@section('content')
 <style>
            :root {
               

                --section-1-bg-color: rgb(66, 66, 66);
               
            }
        </style>

          <!-- Section 1 -->
        <section class="section-1 odd offers">
            <div class="container smaller">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <span class="pre-title m-auto ml-md-0">Oups !</span>
                        <h2><span class="featured"><span>Erreur</span></span> Serveur</h2>
                        <p>Un problème technique est survenu. Notre équipe technique est déjà en train de résoudre le problème. Veuillez réessayer dans quelques instants.</p>
                        <div class="row item widget-tags">
                            <div class="col-12 p-0 align-self-center">
                                <div class="badges">
                                    <span class="badge">Erreur 500</span>
                                    <span class="badge">Serveur occupé</span>
                                    <span class="badge">Maintenance en cours</span>
                                    <span class="badge">Revenez bientôt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                        <a href="/" class="btn mx-auto mr-md-0 ml-md-auto outline-button">RETOUR À L'ACCUEIL</a>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 item">
                        <div class="card">
                            <p>🛠️ Notre équipe travaille activement à rétablir le service. Merci pour votre patience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection