import Komponenta from './Komponenta.vue';
import SveOsobe from './SveOsobe.vue';
import AddOsoba from './AddOsoba.vue';
import EditOsoba from './EditOsoba.vue';

export const routes =
[
    { name: 'tRuta', path: '/foo', component: Komponenta },
    { name: 'sve', path: '/sve', component: SveOsobe},
    { name: 'dodavanje', path: '/dodaj', component: AddOsoba},
    { name: 'edit', path: '/edit/:id', component: EditOsoba}
]
