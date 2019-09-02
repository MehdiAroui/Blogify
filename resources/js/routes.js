export default [
    { path: '/', redirect: '/blog' },

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
];