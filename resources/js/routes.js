import Index from './components/employees/Index.vue'
import Edit from './components/employees/Edit.vue'
import Create from './components/employees/Create.vue'

export const routes = [
    {
        path:'/employee',
        component: Index,
        name: 'employee.index'
    },

    {
        path:'/employee/:id/edit',
        component: Edit,
        name: 'employee.edit'
    },

    {
        path:'/employee/create',
        component: Create,
        name: 'employee.create'
    },

]