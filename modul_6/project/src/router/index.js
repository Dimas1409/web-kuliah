import { createRouter, createWebHistory } from 'vue-router';

const routes = [
    {
      path: '/contact',
      name: 'Contact',
      component: () => import('../views/Contact.vue'), // Lazy-loaded
    },
    {
      path: '/seeall',
      name: 'See All',
      component: () => import('../views/SeeAll.vue'),
    },
    {
      path: '/blog',
      name: 'Blog',
      component: () => import('../views/Blog.vue'),
    }
    // You can add more routes for other components (e.g., About, Blog, etc.)
  ];

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes,
});

export default router;