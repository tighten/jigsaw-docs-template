window.docsearch = require('docsearch.js');
window.Vue = require('vue');

Vue.config.productionTip = false;

import NavigationToggle from './components/navigation-toggle.vue';
import Navigation from './components/navigation.vue';

new Vue({
    components: { Navigation, NavigationToggle },
}).$mount('#vue-app');

