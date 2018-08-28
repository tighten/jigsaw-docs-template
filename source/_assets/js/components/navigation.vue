<template>
    <div class="lg:block w-full lg:w-1/4 mb-8 lg:mb-0 lg:pr-8" :class="{ hidden: ! status }">

        <nav class="nav-list" role="navigation">
            <navigation-item :key="key" v-for="(url, key) in navigation" :item="url">{{ key }}</navigation-item>
        </nav>
    </div>
</template>

<script>
import NavigationItem from './navigation-item.vue';

export default {
    components: { NavigationItem },
    props: {
        navigationLinks: String,
        currentUrl: String,
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
