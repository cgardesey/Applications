require('./bootstrap');

import Vuetify from "vuetify";
import Applicant from "./models/Applicant";
import  router from './routes';

window.Event = new Vue();

new Vue({
    el: '#create',

    router
});

new Vue({
    el: '#index',

    components: {
        Vuetify,
    },

    data: {
        //----------Data tables------------------
        progressBar: true,
        dialog: false,
        expand: false,
        search: '',
        headers: [
            {
                text: 'Last Name',
                align: 'center',
                sortable: true,
                value: 'last_name'
            },
            { text: 'First Name', align: 'center', sortable: true, value: 'first_name' },
            { text: 'Other name(s)', align: 'center', sortable: true, value: 'other_names' },
            { text: 'Email', align: 'center', sortable: true, value: 'email' },
            { text: 'Courses', align: 'center', sortable: true, value: 'course' },
            { text: 'Résumé', align: 'center', value: 'name', sortable: false }
        ],
        desserts: [],
        applications: [],
        editedIndex: -1,
        editedItem: {
            name: '',
            calories: 0,
            fat: 0,
            carbs: 0,
            protein: 0
        },
        defaultItem: {
            name: '',
            calories: 0,
            fat: 0,
            carbs: 0,
            protein: 0
        },
        item: {},
        doc: ''
    },

    computed: {
        formTitle () {
            return this.editedIndex === -1 ? 'New Item' : 'Edit Item'
        }
    },

    watch: {
        dialog (val) {
            val || this.close()
        },

        applications(){
            this.progressBar = false
        }
    },

    created () {
        Applicant.all(applications => {
            this.applications = applications;
            // console.log(applications);
        });
        // .then(response => this.statuses = response.data);
        // .then(({data}) => this.statuses = data); // can use this if you only care bout data property
    },

    methods: {
        //----------Data tables------------------

        editItem (item) {
            this.editedIndex = this.desserts.indexOf(item)
            this.editedItem = Object.assign({}, item)
            this.dialog = true
        },

        deleteItem (item) {
            const index = this.desserts.indexOf(item)
            confirm('Are you sure you want to delete this item?') && this.desserts.splice(index, 1)
        },

        close () {
            this.dialog = false
            setTimeout(() => {
                this.editedItem = Object.assign({}, this.defaultItem)
                this.editedIndex = -1
            }, 300)
        },

        save () {
            if (this.editedIndex > -1) {
                Object.assign(this.desserts[this.editedIndex], this.editedItem)
            } else {
                this.desserts.push(this.editedItem)
            }
            this.close()
        },
        setCurrentCV(clickedCV) {
            this.doc = clickedCV;
        },
        setCurrentEduCert(clickedEduCert) {
            this.doc = clickedEduCert;
        },
        setCurrentItem(clickedItem) {
            this.item = clickedItem;

        }
    }
});
