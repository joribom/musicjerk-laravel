import Home from '../home/Home'
import ExampleComponent from './ExampleComponent'

const musicjerkRoutes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/home',
        name: 'welcome',
        component: ExampleComponent,
        props: { title: "This is the SPA home" }
    },
]

export { musicjerkRoutes }
