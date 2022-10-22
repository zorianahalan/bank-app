<template>
    <div class="ui-friend">
        <div class="ui-friend-left">
            <slot></slot>
            <div class="ui-friend-left__content">
                <div class="ui-friend-left-title">
                    {{ name }}
                </div>
                <div class="ui-friend-left-role">
                    {{ role }}
                </div>
            </div>
        </div>
        <div class="ui-friend-right">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                    <path d="M24 16H8" stroke="#E39292" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>

</template>

<script>
export default {
    name: "ui-friend",
    props: {
        name: String,
        role: String
    }
}
</script>

<style scoped>

</style>
