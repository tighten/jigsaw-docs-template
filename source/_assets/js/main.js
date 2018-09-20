window.docsearch = require('docsearch.js');
window.Vue = require('vue');
window.hljs = require('highlightjs');

Vue.config.productionTip = false;

import NavigationToggle from './components/navigation-toggle.vue';
import Navigation from './components/navigation.vue';

new Vue({
    components: { Navigation, NavigationToggle },

    mounted() {
        document.querySelectorAll('pre code').forEach((block) => {
            hljs.highlightBlock(block);
        });
    }
}).$mount('#vue-app');

