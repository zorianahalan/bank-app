<template>
    <div ref="form" class="ui-form">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "ui-form",
    props: {
        gap: Number,
        mixGap: Array,
        childrenCss: String
    },
    mounted() {
        if (this.gap) {
            const children = Array.from(this.$refs.form.children)
            for (let i = 0; i < children.length - 1; i++) {
                children[i].style.marginBottom = `${this.gap}px`
            }
        }
        if (this.mixGap) {
            const children = Array.from(this.$refs.form.children)
            for (let i = 0; i < this.mixGap.length - 1; i++) {
                children[i].style.marginBottom = `${this.mixGap[i]}px`
            }
        }
        if (this.childrenCss) {
            const children = Array.from(this.$refs.form.children)
            for (let i = 0; i < children.length - 1; i++) {
                children[i].style.cssText = this.childrenCss
            }
        }
    }
}
</script>

<style scoped>

</style>
