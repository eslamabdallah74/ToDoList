<template>
  <div class="item">
    <input type="checkbox" @change="updateCheck()" v-model="item.completed">
    <span :class="[item.completed ? 'completed' : '' , 'itemText']">{{item.name}}</span>
    <button @click="removItem()" class="trashcan">
       <i class="fas fa-trash"></i>
    </button>
  </div>
</template>

<script>
export default {
    props: ['item'],
    methods: {
        // Update item
        updateCheck(){
            axios.put('api/item/' + this.item.id,{
                item: this.item
            })
            .then(response =>{
                if(response.status==200){
                    this.$emit('itemchanged');
                }
            })
            .catch(error => {
                console.log(error);
            })
        },
        // Remove Item
        removItem(){
            axios.delete('api/item/' + this.item.id)
            .then(response => {
                if(response.status==200){
                    this.$emit('itemchanged');
                }
            })
            .catch(error => {
                console.log(error);
            })
        }
    },

}
</script>

<style scoped>
    .completed{
        text-decoration: line-through;
        color: gray;
    }
    .itemText{
        width: 100%;
        margin-left: 20px;
        font-size: 20px;
    }
    .item{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .trashcan{
        background: transparent;
        border: 0;
        outline: none;
        color: #df3131;
    }
</style>
