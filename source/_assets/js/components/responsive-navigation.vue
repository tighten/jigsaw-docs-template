<template>
    <div class="lg:block w-full lg:w-1/4 mb-8 lg:mb-0 lg:pr-8" :class="{ hidden: ! status }">
        <ul>
            <li v-for="(parent, key) in navigation">
                <a :href="parent.root">{{ key }}</a>
                <ul v-if="parent.children">
                    <li v-for="(child, key) in parent.children">
                        <a v-if="child !== 'root'" :href="child.root">{{ key }}</a>
                        <ul v-if="child.children">
                            <li v-for="(grandChild, key) in child.children"> {{grandChild}}</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        navigationLinks: Object,
    },

    computed: {
        navigation() {
            return JSON.parse(this.navigationLinks);
        }
    },

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
