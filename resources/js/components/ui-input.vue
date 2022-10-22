<template>
    <div :class="{'ui-input-full': full}" class="ui-input">
        <label>{{ label }}</label>
        <input @input="$emit('update:modelValue', $event.target.value)" v-bind="$attrs">
    </div>
</template>

<script>
export default {
    name: "ui-input",
    inheritAttrs: false,
    props: {
        label: String,
        full: Boolean
    }
}
</script>

<style scoped>

</style>
