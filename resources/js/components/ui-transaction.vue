<template>
    <div class="ui-transaction">
        <div class="ui-transaction-left">
            <slot></slot>
            <div class="ui-transaction-left__content">
                <div class="ui-transaction-left-title">
                    {{ name }}
                </div>
                <div class="ui-transaction-left-message">
                    {{ message }}
                </div>
            </div>
        </div>
        <div class="ui-transaction-right">
            <div class="ui-transaction-right-amount">{{ amount }}<span>{{ currency }}</span></div>
        </div>

    </div>
</template>

<script>
export default {
    name: "ui-transaction",
    props: {
        to: Boolean,
        name: String,
        message: String,
        amount: Number,
        currency: String
    }
}
</script>

<style scoped>

</style>
