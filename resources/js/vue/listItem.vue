<template>
  <div class="item">
    <input type="checkbox" @change="updateCheck()" v-model="item.completed">
    <span :class="[item.completed ? 'completed' : '' , 'itemText']">{{item.name}}</span>
    <button @click="removItem()" class="trashcan">
        <font-awesome-icon icon="trash" />
    </button>
  </div>
</template>

<script>
export default {
    props: ['item']
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
        background: #bdc3c7;
        border: 0;
        outline: none;
        color: #df3131;
    }
</style>
