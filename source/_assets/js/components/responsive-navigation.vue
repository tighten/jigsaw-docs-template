<template>
    <div class="lg:block w-full lg:w-1/4 mb-8 lg:mb-0 lg:pr-8" :class="{ hidden: !showMobile }">
        <slot></slot>
    </div>
</template>

<script>
export default {
    props: {
        showMobile: Boolean
    }
}
</script>
