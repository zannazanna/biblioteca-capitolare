<template>
  <div>
    <span> titolo </span>
    <input type="text" placeholder="titolo" v-model="book.titolo" >

    <span> autore </span>
    <input type="text" placeholder="autore" v-model="book.autore" >

    <span> iban </span>
    <input type="text" placeholder="iban" v-model="book.isbn">

    <span> genere </span>
    <input type="text" placeholder="genere" v-model="book.genere" >

    <span> valutazione </span>
    <input type="text" placeholder="valutazione" v-model="book.valutazione" >

    <span> link </span>
    <input type="text" placeholder="link" v-model="book.link" >

    <button @click="conferma()"> conferma</button>
  </div>
</template>

<script>
import axios from "axios"
export default {
  name: "Create",
  data() {
    return {
      book: {
        titolo: "",
        autore: "",
        isbn: "",
        genere: "",
        link: "",
        valutazione: 0,
      },
    };
  },
  methods:{
      async conferma(){
         let response = await axios.post("http://127.0.0.1:8000/api/insertBook",this.book);
         console.log(response)
      }
  }
};
</script>
