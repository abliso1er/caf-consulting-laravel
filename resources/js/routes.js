let home = require('./components/accueil/homeComponent.vue').default;

let creation = require('./components/creation/creationComponent.vue').default;

let indivi = require('./components/creation/indiviComponent.vue').default;

let sarl = require('./components/creation/sarlComponent.vue').default;

let sarlu = require('./components/creation/sarluComponent.vue').default;

let sas = require('./components/creation/sasComponent.vue').default;

let sasu = require('./components/creation/sasuComponent.vue').default;

let ong = require('./components/creation/ongComponent.vue').default;

let montage = require('./components/offres/montageComponent.vue').default;

let finance = require('./components/offres/financeComponent.vue').default;


export const routes = [
    {path: '/', component: home, name: 'home'},
    {path: '/creation-d-entreprise', component: creation, name: 'creation'},
    {path: '/montage-de-projet', component: montage, name: 'montage'},
    {path: '/corporate-finance', component: finance, name: 'finance'},
    {path: '/creation-d-entreprise/individuelle', component: indivi, name: 'indivi'},
    {path: '/creation-d-entreprise/sarl', component: sarl, name: 'sarl'},
    {path: '/creation-d-entreprise/sarlu', component: sarlu, name: 'sarlu'},
    {path: '/creation-d-entreprise/sas', component: sas, name: 'sas'},
    {path: '/creation-d-entreprise/sasu', component: sasu, name: 'sasu'},
    {path: '/creation-d-entreprise/ong', component: ong, name: 'ong'},
];