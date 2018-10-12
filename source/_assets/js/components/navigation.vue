<template>
    <div class="w-full mb-8 transition lg:block lg:mb-0 lg:pr-8 lg:w-1/4" :class="{ hidden: ! visible }">

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
        links: Object,
    },

    data() {
        return {
            visible: false,
            navigation: this.links
        }
    },

    mounted() {
        this.$root.$on('menu-toggle', data => {
            this.visible = data;
        });
    }
}
</script>
