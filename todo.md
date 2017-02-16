1. isLogged no hi ha de ser sempre a l'inici de les actions. Mirar com posar-lo al call_action o al call_controller
2. Afegir gestió de permisos. Dos possibilitats (decidir): usuari + controller + action -> boolean / tipus d'usuari + contorller + action ->  boolean
3. En qualsevol cas, interfície d'administrador per gestionar permisos
4. La id no hi hauria de ser a la db. Utilitzar username or e-mail com a clau primària.


5. Eliminar de l'array fillable les claus primàries a tots els models
5.1. En concret en el model d'usuaris, desar a Session la clau primària (nom d'usuari o e-mail)
6. Repensar si és necessari posar la clau primària a un hidden input (si se pot aclarir amb Session millor)

7. Aplicar hash + salt + cost als pwd d'usuari
8. Implementar https per enviar missatges xifrats

9. Sanititizar totes les dades que provenen d'usuari (comprovar si laravel ja ho fa)