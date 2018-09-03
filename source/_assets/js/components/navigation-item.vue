<template>
    <li class="list-reset">
        <a :href="item.root" class="nav-item"
            :class="{ 'bg-grey-lighter': isActive(item.root) }">
            <slot></slot>
        </a>

        <ul v-if="item.children" class="list-reset">
            <li v-for="(child, key) in item.children">
                <a :href="child.root" class="nav-item"
                :class="{ 'bg-grey-lighter': isActive(child.root) }">
                    {{ key }}
                </a>

                <ul v-if="child.children" class="list-reset">
                    <li v-for="(grandChild, key) in child.children">
                        <a :href="grandChild.root" class="nav-item"
                            :class="{ 'bg-grey-lighter': isActive(grandChild.root) }">
                            {{ key }}
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</template>

<script>
export default {
    props: {
        item: {
            type: Object,
            required: true,
        },
    },

    methods: {
        isActive( url ) {
            return document.URL.endsWith(url);
        }
    },
}
</script>

