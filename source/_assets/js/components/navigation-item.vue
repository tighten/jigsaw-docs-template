<template>
    <li class="list-reset">
        <a :href="item.url"
            class="inline-block text-grey-darkest mb-2 leading-normal"
            :class="{ 'text-blue' : isActive(item.url) }">
            <slot></slot>
        </a>

        <ul v-if="item.children" class="list-reset">
            <li :key="key" v-for="(child, key) in item.children" class="ml-4">
                <a :href="child.url"
                    class="inline-block text-grey-darker mb-2 leading-normal"
                    :class="{ 'text-blue font-medium': isActive(child.url) }">
                    {{ key }}
                </a>

                <navigation-item v-if="child.children" :item="child"></navigation-item>
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

