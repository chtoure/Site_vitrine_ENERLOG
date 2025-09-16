@extends('component.app')

@section('content')
 <style>
            :root {
                --section-1-bg-color: #111117;
            }
        </style>

        <section class="section-1 odd offers">
            <div class="container smaller">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <span class="pre-title m-auto ml-md-0">Oups !</span>
                        <h2><span class="featured"><span>Page</span></span> Introuvable</h2>
                        <p>Il semble que la page que vous cherchez ait pris un chemin différent. Pas de panique, cela arrive même aux meilleurs d’entre nous.</p>
                        <div class="row item widget-tags">
                            <div class="col-12 p-0 align-self-center">
                                <div class="badges">
                                    <span class="badge">Erreur 404</span>
                                    <span class="badge">Page manquante</span>
                                    <span class="badge">Navigation perdue</span>
                                    <span class="badge">Retour à l'accueil</span>
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
                            <p>🔍 Vous pouvez aussi utiliser la barre de recherche ou consulter notre menu pour retrouver votre chemin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection