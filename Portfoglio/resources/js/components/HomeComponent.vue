<template>
  <div class="container justify-content-center">
    <h1>Benvenuto nel mio Portfolio Personale</h1>
    <div v-if="recentWorks.length > 0">
      <h2>Lavori Recenti</h2>
      <div v-for="work in recentWorks" :key="work.id" class="work-item">
        <img :src="work.image" :alt="work.title" class="work-image">
        <div class="work-details">
          <h3>{{ work.title }}</h3>
          <p>{{ work.description }}</p>
          <div class="work-actions">
            <button @click="likeWork(work)" class="like-button">Mi Piace ({{ work.likes }})</button>
            <textarea v-model="newComment" placeholder="Aggiungi un commento" class="comment-input"></textarea>
            <button @click="addComment(work)" class="comment-button">Invia Commento</button>
          </div>
          <ul class="comment-list">
            <li v-for="comment in work.comments" :key="comment.id" class="comment-item">{{ comment.text }}</li>
          </ul>
        </div>
      </div>
    </div>
    <div v-else>
      <p>Nessun lavoro disponibile al momento.</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      recentWorks: [
        { id: 1, title: "Progetto 1", description: "Descrizione del Progetto 1", image: "/images/project1.jpg", likes: 0, comments: [] },
        // Aggiungi altri lavori qui
      ],
      newComment: ''
    };
  },
  methods: {
    likeWork(work) {
      work.likes++;
    },
    addComment(work) {
      if (this.newComment.trim() !== '') {
        work.comments.push({ text: this.newComment.trim() });
        this.newComment = ''; // Pulisce il campo di testo del commento dopo l'invio
      }
    }
  }
};
</script>

<style scoped>
.work-item {
  display: flex;
  margin-bottom: 20px;
}

.work-image {
  width: 200px;
  height: 150px;
  margin-right: 20px;
}

.work-details {
  flex: 1;
}

.work-actions {
  margin-top: 10px;
}

.like-button,
.comment-button {
  background-color: #0f451f;
  color: #fff;
  border: none;
  padding: 5px 10px;
  margin-right: 10px;
  cursor: pointer;
}

.comment-input {
  width: 100%;
  margin-bottom: 10px;
}

.comment-list {
  margin-top: 10px;
  padding-left: 0;
}

.comment-item {
  list-style-type: none;
  margin-bottom: 5px;
}
</style>
