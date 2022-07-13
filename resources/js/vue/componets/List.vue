<script>
export default {
    data() {
        return {
            show: true
        }
    }
}
</script>

<template>
    <button @click="show = !show">Toggle</button>
    <Transition>
        <p v-if="show">hello</p>
    </Transition>
</template>

<style>
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
