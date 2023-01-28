 /**
  * ici on l'affichage de d'un tableau de jquery
  */
 
 $(document).ready(function() {
                            $('#datatablesSimple').DataTable( {
                                "language": {
                                    "lengthMenu":     " Voir _MENU_ lignes",
                                    "zeroRecords": "aucun resultat trouver",
                                    "info": "",
                                    "infoFiltered": "",
                                    "infoEmpty":      "",
                                    "paginate": {
                                                        "first":      "",
                                                        "last":       "",
                                                        "next":       "suivant",
                                                        "previous":   "retour"
                                                    },
                                    "search":         "Rechercher",
                                }
                            } );
                } );