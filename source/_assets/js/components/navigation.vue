<template>
    <div class="-mt-12 -mx-8 mb-8 pb-6 pt-8 px-8 lg:mt-0 lg:pt-0 lg:block lg:border-b-0 lg:bg-transparent lg:shadow-none"
        :class="visible ? 'bg-grey-lighter shadow' : 'hidden'"
    >
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
            navigation: this.links,
        };
    },
    mounted() {
        this.$root.$on('menu-toggle', data => {
            this.visible = data;
        });
    },
};
</script>
