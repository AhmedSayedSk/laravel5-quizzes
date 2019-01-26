<template>
    <div class="container is-fluid">
        <user-profile-actions :user="user">
        </user-profile-actions>
    </div>
</template>

<script>
    import UserProfileActions from "./UserProfileActions.vue";
            export default{
                    data(){
                        return {
                            user:{
                                name:"Aya Mostafa",
                                email:"ayamostafa.dev@gmail.com",
                                type:"teacher"
                            }
                        }
                    },
                components: {
                    UserProfileActions
                }
            }
</script>

<style>

</style>