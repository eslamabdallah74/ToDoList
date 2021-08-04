<template>
  <div>
    <div v-for="(item, index) in items" :key="index">
        <list-item
        :item='item'
        class="item"
        ></list-item>
    </div>
  </div>
</template>

<script>
import listItem from './listItem'


export default {
    props: ['items'],
    components: {
        listItem,
    }
}
</script>

<style scoped>
    .item{
        background: #bdc3c7;
        padding: 5px;
        margin-top: 5px;
        border-radius: 10px;
        color: black;
 
    }
</style>
