<template>
  <div class="flex flex-row w-2/4 justify-around ">

 <button @click="navigation('Home')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Home</button>
 <button @click="navigation('Create')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Create</button>
 
  </div>
</template>
<script>
export default {
  name: "Navigation",

methods: {
    navigation(name){
        this.$router.push(name);
    }
},
}
</script>
