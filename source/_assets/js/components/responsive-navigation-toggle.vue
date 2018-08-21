<template>
    <div>
        <button @click="toggleStatus()">CLICK ME</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            status: false,
        }
    },

    methods: {
        toggleStatus() {
            this.status = ! this.status;

            this.$root.$emit('menu-toggle', this.status);
        }
    }
}
</script>
