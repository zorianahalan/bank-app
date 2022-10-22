<template>
    <img src="../svg/Register.svg" alt="">
    <ui-form :mixGap="[10,10,10,25,25,0]">
        <ui-input v-model="form.name" placeholder="Thomas Griffin" label="Name" type="text" />
        <ui-input v-model="form.email" placeholder="example@gmail.com" label="Email" type="email" />
        <ui-password v-model="form.password" placeholder="Enter a password" label="Password"/>
        <ui-password v-model="form.password_confirmation"
                     placeholder="Confirm a password" label="Confirm Password"/>
        <span class="ui-span-link">
            Have an account?
            <router-link :to="{ name: 'login' }">login</router-link>
        </span>
        <ui-button @click.prevent="register">Sign In</ui-button>
    </ui-form>
</template>

<script>
import { reactive } from "vue";
import { AuthStore } from "../store/auth.js";

export default {
    name: "Register",
    setup() {
        const form = reactive({})
        const store = AuthStore()

        const register = () => {
            store.registerUser(form, (err) => {
                console.log(err)
            })
        }

        return {
            form,
            register
        }
    }
}
</script>

<style scoped>

</style>
