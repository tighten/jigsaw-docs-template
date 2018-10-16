<template>
    <li class="list-reset">
        <a :href="item.root"
            class="text-blue-darkest text-sm mb-2"
            :class="{ 'text-blue' : isActive(item.root) }">
            <slot></slot>
        </a>

        <ul v-if="item.children" class="list-reset text-sm">
            <li :key="key" v-for="(child, key) in item.children" class="ml-4">
                <a :href="child.root"
                    class="text-grey-darker"
                    :class="{ 'text-blue font-medium': isActive(child.root) }">
                    {{ key }}
                </a>

                <navigation-item v-if="item.children" :item="child"></navigation-item>
            </li>
        </ul>
    </li>
</template>

<script>
export default {
    name: 'navigation-item',

    props: {
        item: {
            type: Object,
            required: true,
        },
    },

    methods: {
        isActive (url) {
            return window.location.href.indexOf(url) > -1;
        },
    },
}
</script>

