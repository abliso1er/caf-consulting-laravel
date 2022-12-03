<template>
    <div>
      
        <!-- ***** Welcome Area Start ***** -->
        <div class="welcome-area welcome-area-cust " id="welcome">

            <!-- ***** Header Text Start ***** -->
            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="offset-xl-2 col-xl-7 offset-lg-1 col-lg-9 col-md-12 col-sm-12">
                            <br><br><br><br><br><br>
                            <h1>
                                CREATION DE SARLU
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Header Text End ***** -->
        </div>
        <!-- ***** Welcome Area End ***** -->



        <!-- ***** Features Big Item Start ***** -->
        <section class="section padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                        <div class="left-heading">
                            <h2 class="section-title section-title-right">Création de SARLU en côte d'ivoire</h2>
                        </div>
                        <div class="left-text">
                            <p>
                                L'entreprise individuelle est une entreprise en nom propre qui ne dispose pas de la personnalité 
                                morale. Elle n'a donc aucun doit ni devoir specifique. L'entrepreneur et l'entreprise constituent 
                                une seule et même entité sur le plan juridique.
                            </p>

                            <p>Lancez-vous et obtenez : </p> 

                            <strong> <i class="fa fa-check"></i> Registre du commerce et du credit immobilier (RCCM)</strong> <br>
                            <strong> <i class="fa fa-check"></i> Déclaration fiscale d'existance (DFE) Et Numero de compte contribuable (NCC)</strong> <br>
                            <strong> <i class="fa fa-check"></i> Fiche CNPS</strong>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img :src="'/assets/images/sarl1.jpg'" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Big Item End ***** -->





        <!-- ***** Features Big Item Start ***** -->
        <section class="section padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="left-heading">
                        <h2 class="section-title section-title-right">Ce qu'il vous faut avant de démarrer</h2>
                    </div>


                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="info-1">

                                    <span>
                                        <i class="fa fa-folder-open"></i>
                                    </span>

                                    <h4>De quel document ou info avez vous bésoin ?</h4>

                                    <p><i class="fa fa-check"></i> Pièce d'identité de l'entrepreneur individuel ( passport ou acte de naissance pour les étrangers)</p>
                                    <p><i class="fa fa-check"></i> Certficat de résidence</p>
                                    <p><i class="fa fa-check"></i> Numéro postale</p>
                                    <p><i class="fa fa-check"></i> Numéro du lot, de l'ilot, de la section ou de la parcelle du siege de l'entreprise</p>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <div class="info-2">

                                    <span>
                                       <i class="fa fa-clock-o" ></i>
                                    </span>

                                    <h4>Combien de temps dure le questionnaire ?</h4>

                                    <p>Il faut au moins 5 à 10 min pour remplire le questionnaire</p>
                    
                                    
                                </div>

                            </div>
                        </div>


                    </div>
                    
                </div>
            </div>
        </section>
        <!-- ***** Features Big Item End ***** -->


        <!-- ***** Features Big Item Start ***** -->
        <section class="section padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                        <div class="left-heading">
                            <h2 class="section-title section-title-right">Personne a contacter pour suivre le dossier</h2>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="cl-md-12">
                                    <p><strong><i class="fa fa-lightbulb-o" aria-hidden="true"></i> L'info Legafrik</strong></p>
                                    <p>renseignez ici les information de la personne qui doit suivre le dossier de votre entreprise</p>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="contact-form">
                                        <form id="contact" action="" method="get">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <fieldset>
                                                    <Label>Nom</Label>
                                                    <input name="name" type="text" class="form-control" id="name" placeholder="Exemple: Koffi " required="">
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <fieldset>
                                                    <Label>Prenom</Label>
                                                    <input name="name" type="text" class="form-control" id="name" placeholder="Exemple: Julien " required="">
                                                </fieldset>
                                            </div>


                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <fieldset>
                                                    <Label>Téléphone</Label>
                                                    <input name="name" type="text" class="form-control" id="name" placeholder="Exemple: 0585748596 " required="">
                                                </fieldset>
                                            </div>

                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <fieldset>
                                                    <Label>Email</Label>
                                                    <input name="name" type="text" class="form-control" id="name" placeholder="Exemple: julien@cafconsulting.com " required="">
                                                </fieldset>
                                            </div>

                                           
                                           
                                            <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button">Envoyer</button>
                                            </fieldset>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img :src="'/assets/images/sarl2.jpg'" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Big Item End ***** -->  




    </div>
</template>

<script>
export default {


}
</script>

<style>

.stape-2-h4 {
    color: #3e5883;
    margin-left: 5%;
    margin-top: 25px;
}

.info-1, .info-2 {
    width: 100%;
    padding: 15px;
    box-shadow: 5px 3px 10px rgb(116, 116, 116);
    border-radius: 10px;
    line-height: 200%;
    transition: all 0.5s;
    margin-top: 25px;
    margin-bottom: 25px;
    border: 1px solid rgba(255, 0, 0, 0.3);
    color: #375485;
}

.info-1:hover, .info-2:hover {
    transform: translateY(-5px);
    box-shadow: 10px 10px 15px rgb(116, 116, 116);
    
}

h4 {
    color: #375485;
}

.info-1 span, .info-2 span {
    display: block;
    width: 100%;
    text-align: center;
    font-size: 100px;
    color: #375485;
}

.info-2 {
    text-align: center;
    height: 335px;
}

.col-md {
    margin-bottom: 25px;
}

Label {
    font-weight: bold;
    margin-left: 15px;
    color: #375485;
}

</style>