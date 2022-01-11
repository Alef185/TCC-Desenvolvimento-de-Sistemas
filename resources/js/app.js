require('./bootstrap');

// import Vue from 'vue';
// import PortalVue from 'portal-vue';
// import Vue from vue/dist/vue.js;
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
// import store from './store'
// import moment from 'moment';

// moment.locale("pt-br");
// Vue.filter('formatDate', function(value){
//     // if(value){
//     //     return moment(value).format('DD/MM/YYYY HH:mm')
//     // }
// });



// store.dispatch('userStateAction');

import store from './store'
store.dispatch('userStateAction')

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'EzOffice';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4a9eff' });

