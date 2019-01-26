<template>
    <div class="container is-fluid">
        <div class="m-t-xl m-l-lg m-r-lg m-b-xl">
        

            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input is-radiusless" type="text" placeholder="Text input">
                </div>
            </div>

            <div class="field">
                <label class="label">Username</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-success is-radiusless" type="text" placeholder="Text input" value="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <p class="help is-success">This username is available</p>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger is-radiusless" type="email" placeholder="Email input" value="">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                </div>
                <p class="help is-danger">This email is invalid</p>
            </div>
                     <div class="field ">
                            <label class="label">Password</label>
                <p class="control  has-icons-left has-icons-right ">
                    <input class="input is-radiusless"  type="password" placeholder="Password">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>
     <div class="field ">
                <label class="label">Phone Number</label>
                <div class="field-body">
                    <div class="field is-expanded">
                        <div class="field has-addons">
                            <p class="control">
                                <a class="button is-static">
                                    +44
                                </a>
                            </p>
                            <p class="control is-expanded">
                                <input class="input is-radiusless" type="tel" placeholder="Your phone number">
                            </p>
                        </div>
                        <p class="help">Do not enter the first zero</p>
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label">Type</label>
                <div class="control">
                    <div class="select is-fullwidth">
                        <select class='is-radiusless'>
                            <option>Teacher</option>
                            <option>Student</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea is-radiusless" placeholder="Textarea"></textarea>
                </div>
            </div>

                <div class="file  m-b-lg m-t-md has-text-right">
                <label class="file-label">
                    <input class="file-input " type="file" name="resume">
                    <span class="file-cta is-radiusless">
                        <span class="file-icon">
                            <i class="fas fa-upload"></i>
                        </span>
                        <span class="file-label">
                            Choose Image…
                        </span>
                    </span>
                </label>
            </div>

            
            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox">
                        I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
            </div>

      
            <div class="field is-grouped">
                <div class="control">
                    <button class="button">Register</button>
                </div>
                <div class="control">
                    <button class="button is-text">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
<style>

</style>


