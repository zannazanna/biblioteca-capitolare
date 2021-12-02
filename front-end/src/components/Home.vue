<template>
  <div class="flex flex-row">
    <div v-if="modifi == false">
      <div
        v-for="(book, index) in books"
        :key="index"
        class="flex flex-col text-center m-9"
      >
        <img :src="book.link" class="w-32 h-32" />
        <span> Titolo: {{ book.titolo }}</span>
        <span> Autore: {{ book.autore }}</span>
        <button @click="elimina(book)">X</button>
        <button @click="modifica()">edit</button>
      </div>
    </div>

<div v-if="modifi == true">
      <div
        v-for="(book, index) in books"
        :key="index"
        class="flex flex-row text-center m-9"
      >
         <span> titolo: </span>
    <input type="text" :placeholder="book.titolo" v-model="book.titolo" >

    <span> autore: </span>
    <input type="text" :placeholder="book.autore" v-model="book.autore" >

    <span> iban: </span>
    <input type="text" :placeholder="book.isbn" v-model="book.isbn">

    <span> genere: </span>
    <input type="text" :placeholder="book.genere" v-model="book.genere" >

    <span> valutazione: </span>
    <input type="text" :placeholder="book.valutazione" v-model="book.valutazione" >

    <span> link: </span>
    <input type="text" :placeholder="book.link" v-model="book.link" >

    <button @click="invia(book)">conferma</button>

      </div>

    </div>


  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "Home",
  data() {
    return {
      books: [],
      modifi: false,
    };
  },
  async mounted() {
    let response = await axios.get("http://127.0.0.1:8000/api/allBook");
    this.books = response.data;
  },
  methods: {
    async elimina(book) {
      await axios.delete("http://127.0.0.1:8000/api/deleteBook/" + book.id);
    },
    modifica() {
      this.modifi = true;
    },
    async invia(book){
        await axios.put("http://127.0.0.1:8000/api/modifica/" + book.id, book)
    }
  },
};
</script>
