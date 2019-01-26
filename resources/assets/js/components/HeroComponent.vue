
<template>
    <div >
        <section class="hero is-bold is-large">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title is-size-1 ">
                        LearN...Solve...Enjoy!
                    </h1>
                </div>
            </div>
            <div class="hero-foot ">
                <div class="container">
                    <div class="column is-10 is-offset-1">
                        <div class=" field has-addons  ">
                            <div class="control is-expanded ">
                                <div class="select is-fullwidth is-large">
                                    <select name="country" class="is-radiusless">
                                        <option value="Argentina">Argentina</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Chile">Chile</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Venezuela">Venezuela</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control">
                                <button type="submit" class="button is-radiusless  is-large ">Choose</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>
<script></script>
<style lang="scss" scoped >
   
    @import "../../sass/_customvariable.scss";
    @import "~bulma/sass/utilities/mixins";

    .hero{ 
        background-image: url("/images/hero.jpg");

        background-position:center 40%;

        background-color: #cccccc;
        .title
        {
            color:white !important;
/*            margin-top:-3.5rem;*/
            position:absolute;
            
            font-family: $family-condensedbold;
            font-size: $font-size-huge !important;
            @include until($tablet){
                font-size: $font-size-large !important;
            }
        }


        .hero-foot{
            padding: 1rem 0 1rem 0;
            background: rgba(0,0,0,0.6);
            margin-top: 109px;
        }
    }
    @include from($tablet){
  
        .hero{
                background-position: 80% 30%;
        }
    }
</style>