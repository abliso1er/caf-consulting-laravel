<template>
    <div>

        <!-- ***** Preloader Start ***** -->
        <!-- <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>   -->
        <!-- ***** Preloader End ***** -->
        
        
        <!-- ***** Header Area Start ***** -->
        
        <menu-accueil-component></menu-accueil-component>


        <!-- ***** Header Area End ***** -->


        <router-view></router-view>
        

        <footer-component></footer-component>
        
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>