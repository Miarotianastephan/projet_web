var ctx3= document.getElementById('diagrame_2').getContext('2d');
var data = {
  // labels: ['Rouge', 'Bleu', 'Vert'];
  datasets: [{
    data: [30,70],
    backgroundColor: ['blue', 'greenyellow'] // Couleurs des segments du diagramme
  }]
};

// Créez le graphe 2
var graphe_camembert = new Chart(ctx3, {
  type: 'pie', // Type de graphe (diagramme circulaire)
  data: data,
  options: {
    responsive: true // Rend le graphe réactif à la taille de la fenêtre
  }
});

      //fixe
      const fixe = document.getElementById('fixe');
        
      new Chart(fixe, {
        type: 'pie',
        data: {
          //label sy data apifandraisina @ json le retour ao ambony
          labels: ['Koto','Jean','Miaro'],
          datasets: [{
          label: '#Hashtag Recues',
          data:[1,2,3],
          borderWidth: 1
          }]
        },
    });