<template>
    <div class="todolistContainer">
        <div class="heading">
            <h2 id="title">To Do List...</h2>
            <add-item-form
            v-on:reloadlist="getList()"
            ></add-item-form>
        </div>
            <list-view
            :items="items"
            v-on:reloadlist="getList()"
            ></list-view>
    </div>
</template>

<script>

//Import components
import addItemForm from './addItemForm'
import listView from './listView'

export default {
    components: {
        addItemForm,
        listView,

    },
    data() {
        return {
            items: []
        }
    },
    methods: {
        getList(){
            axios.get('api/items')
            .then(response => {
                this.items = response.data
            })
            .catch(error => {
                console.log(error);
            })
        }
    },
    created() {
       this.getList();
    },
}
</script>
<!-- This page style -->
 <style scoped>
    .todolistContainer{
        width: 350px;
        margin: auto;
        color: white;
    }
    .heading{
        background-color: #34495e;
        padding: 20px;
        border-radius: 30px;
        margin: 20px 0;
    }
    #title{
        text-align: center;
    }
 </style>
