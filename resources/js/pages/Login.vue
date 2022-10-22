<template>
    <img src="../svg/Login.svg" alt="">
    <ui-form :mixGap="[10,25,25,0]">
        <ui-input v-model="form.email" placeholder="example@gmail.com" label="Email" type="email" />
        <ui-password v-model="form.password" placeholder="Enter a password" label="Password"/>
        <span class="ui-span-link">
            Don't have an account?
            <router-link :to="{ name: 'register' }">register</router-link>
        </span>
        <ui-button @click.prevent="login">Log In</ui-button>
    </ui-form>
</template>

<script>
import {AuthStore} from "../store/auth.js";
import {reactive} from "vue";

export default {
    name: "Login",
    setup() {
        const form = reactive({})
        const store = AuthStore()

        const login = () => {
            store.loginUser(form)
        }
        return {
            form,
            login
        }
    }


}
</script>

<style scoped>

</style>
