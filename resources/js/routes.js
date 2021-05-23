import AllItems from './views/AllItems.vue';
import AddItem from './views/AddItem.vue';
import EditItem from './views/EditItem.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllItems
    },
    {
        name: 'add',
        path: '/add',
        component: AddItem
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditItem
    }
];
