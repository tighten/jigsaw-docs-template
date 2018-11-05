<template>
    <li class="list-reset text-sm">
        <a :href="item.url"
            class="inline-block text-grey-darkest mb-3 leading-normal w-full"
            :class="{ 'text-blue' : isActive(item.url) }">
            <slot></slot>
        </a>

        <ul v-if="item.children" class="list-reset">
            <li v-for="(child, label) in item.children" :key="label" class="ml-4">
                <a :href="child.url"
                    class="inline-block text-grey-darker mb-3 leading-normal w-full"
                    :class="{ 'text-blue': isActive(child.url) }">
                    {{ label }}
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
        isActive(url) {
            return window.location.href.indexOf(url) > -1;
        },
    },
};
</script>
