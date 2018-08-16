window.docsearch = require('docsearch.js');
window.Vue = require('vue');

Vue.config.productionTip = false;

import ResponsiveNavigation from './components/responsive-navigation.vue';

new Vue({
    components: { ResponsiveNavigation },
}).$mount('#vue-app');

