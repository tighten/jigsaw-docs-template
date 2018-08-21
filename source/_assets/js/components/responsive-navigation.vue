<template>
    <div class="lg:block w-full lg:w-1/4 mb-8 lg:mb-0 lg:pr-8" :class="{ hidden: ! status }">
        <slot></slot>
    </div>
</template>

<script>
export default {
    data() {
        return {
            status: false,
        }
    },

    mounted() {
        this.$root.$on('menu-toggle', data => {
            this.status = data;
        });
    }
}
</script>
