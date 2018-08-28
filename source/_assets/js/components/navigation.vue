<template>
    <div class="lg:block w-full lg:w-1/4 mb-8 lg:mb-0 lg:pr-8" :class="{ hidden: ! status }">

        <nav class="nav-list" role="navigation">
            <ul class="list-reset">
                <li v-for="(parent, key) in navigation" class="list-reset">
                    <a :href="parent.root" class="nav-item">{{ key }}</a>

                    <ul v-if="parent.children" class="list-reset">
                        <li v-for="(child, key) in parent.children">
                            <a :href="child.root" class="nav-item">{{ key }}</a>

                            <ul v-if="child.children" class="list-reset">
                                <li v-for="(grandChild, key) in child.children">
                                    <a :href="key.root" class="nav-item">{{ key }}</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
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
