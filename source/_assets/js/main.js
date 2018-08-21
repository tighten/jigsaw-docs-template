window.docsearch = require('docsearch.js');
window.Vue = require('vue');

Vue.config.productionTip = false;

import ResponsiveNavigationToggle from './components/responsive-navigation-toggle.vue';
import ResponsiveNavigation from './components/responsive-navigation.vue';

new Vue({
    components: { ResponsiveNavigation, ResponsiveNavigationToggle },

    data() {
        return {
            showMobileNav: false,
        }
    },
}).$mount('#vue-app');

