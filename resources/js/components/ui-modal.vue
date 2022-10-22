<template>
    <Transition name="showModal">
        <div class="ui-modal">
            <div class="ui-modal-header">
                <button class="ui-modal-header__back" @click.prevent="$emit('val', false)">
                    <img src="../svg/ArrowRight.svg" alt="Arrow back(close modal window)">
                </button>
                <div class="ui-modal-header__title">{{ title }}</div>
            </div>
            <div class="ui-modal-content">
                <slot></slot>
            </div>
        </div>
    </Transition>
</template>

<script>
export default {
    name: "ui-modal",
    props: {
        title: String
    }
}
</script>

<style scoped>
.showModal-enter-active {
    transition: all 0.3s ease;
}

.showModal-leave-active {
    transition: all 0.3s ease;
}

.showModal-enter-from,
.showModal-leave-to {
    transform: translateX(70%);
    opacity: 0;
}
</style>
