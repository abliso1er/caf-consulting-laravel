<template>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img :src="'/assets/images/logo-caf.png'" alt="Softy Pinko"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#welcome" class="active">Présentation</a></li>
                            <li><a href="#features">Externalisation</a></li>
                            <li><a href="#work-process">Méthode de travail</a></li>
                            <!-- <li><a href="#testimonials">Testimonials</a></li> -->
                            <li><a href="#pricing-plans">Conditions financières</a></li>
                            <li><router-link :to="{name: 'creation'}">Création d'entreprise</router-link></li>
                            <!-- <li><a href="#blog">Blog Entries</a></li> -->
                            <li><a href="#contact-us">Nous contacter</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
</template>