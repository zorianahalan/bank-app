import {defineStore} from "pinia";
import {api, getToken} from "../api/index.js";
import router from "@/router";

export const AuthStore = defineStore('auth', {
    state: () => ({
        auth: false,
        user: [],
        cards: []
    }),
    getters: {
      getAuth: (state) => { return state.auth },
      getCards: (state) => { return state.cards }
    },
    actions: {
        async loginUser(data) {
            await getToken((res) => {
                api.post('/api/login', data)
                    .then(r => {
                        router.push({name: 'home'})
                        this.auth = true
                        this.useUser()
                    })
            })
        },
        async registerUser(data, err) {
            await getToken((res) => {
                api.post('/api/register', data)
                    .then(r => {
                        this.auth = true
                        this.useUser()
                        // router.push({name: 'home'})
                    })
                    .catch(err)
            })
        },
        async useUser() {
            if (!this.auth) return false;
            api.get('/api/user')
                .then(data => this.user = data.data)
        },
        async logoutUser() {
            api.post('/api/logout')
                .then(r => {
                    router.push({ name: 'login' })
                    localStorage.removeItem('auth')
                })
        },
        async registerCard() {
            api.post('/api/card')
                .then(data => {
                    console.log(data);
                })
        },
        async getUserCards() {
            api.get('/api/user/cards')
                .then(data => {
                    this.cards = data.data
                })
        },
        async getFriends() {

        },
        async makeTransaction() {

        },
        async getTransactions() {

        }
    },
    persist: true
})
