export default [
    { path: '/', redirect: '/requests' },

    {
        path: '/blog/:id',
        name: 'blog-preview',
        component: require('./screens/blog/view').default,
    },

    {
        path: '/blog',
        name: 'blog',
        component: require('./screens/blog/index').default,
    },


    /*{
        path: '/logs/:id',
        name: 'log-preview',
        component: require('./screens/logs/preview').default,
    },

    {
        path: '/logs',
        name: 'logs',
        component: require('./screens/logs/index').default,
    },*/
];