
import VueRouter from 'vue-router'

let routes = [
    // {
    //     path: '/applicants/success',
    //     name: 'success',
    //     component: require('./views/Success').default // This fixes render error
    // },
    {
        path: '/',
        name: 'create',
        component: require('./views/Create').default // This fixes render error
    }
];

export default new VueRouter({
    routes,

    // linkActiveClass: 'is-active'
});
