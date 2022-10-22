<template>
    <div class="ui-input">
        <label>{{ label }}</label>
        <input type="password" ref="password" @input="$emit('update:modelValue', $event.target.value)" v-bind="$attrs">
        <button @click.prevent="show">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M19.6 16C19.6 17.9882 17.9882 19.6 16 19.6C14.0118 19.6 12.4 17.9882 12.4 16C12.4 14.0118 14.0118 12.4 16 12.4C17.9882 12.4 19.6 14.0118 19.6 16Z" stroke="#00FF85" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 16C5.92017 11.0832 10.4032 7.60001 16 7.60001C21.5968 7.60001 26.0798 11.0832 28 16C26.0798 20.9168 21.5968 24.4 16 24.4C10.4032 24.4 5.92017 20.9168 4 16Z" stroke="#00FF85" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</template>

<script>
export default {
    name: "ui-password",
    inheritAttrs: false,
    props: {
        label: String
    },
    methods: {
        show() {
            const setType = (type) => { this.$refs.password.type = type}
            this.$refs.password.type === 'text' ? setType('password') : setType('text')
        }
    }

}
</script>

<style scoped>

</style>
