# Tag 4
| Zeit | Beschreibung | Quelle |
| --- | --- | --- |
| 135' | Finalisiere den Auftrag von letzter Woche<br>und sichere dein Formular mit Recaptcha ab | |
| 45' | PHP - Repetition Login/Logout mit Sessions | | |
| Pause | | |
| 90' | Javascript - Einführung | | |
| 45' | Testing | | |
| 45' | Schlussteil mit Informationen über Schlussprüfung | | |



## Auftrag Alternative weiterführen
Im Verzeichnis [./day3](./day3) sind 2 SQL Files vorhanden welche importiert werden können.  
Dazu ist folgendes Datenmodell mitgeliefert worden:  
![ERD](./day3/db_model.png)  
Es handelt sich hierbei um eine Datenbank zur Hobbyverwaltung des Dozenten.
Es ist jedoch nicht vollständig, jedoch würde sich ansonsten der Aufwand zu stark erhöhen.  
Folgende Anforderungen werden an die Aufgabe gestellt:  
1. Es sollen alle Whisky in einer Tabelle ausgegeben werden
2. Es sollen alle Whisky in einer Box (je Whisky) ausgegeben werden
3. Es soll eine Filterung über die Marke möglich sein
   1. Es kann im Backend gefiltert werden oder
   2. Es kann im Frontend gefiltert werden (Allenfalls via JavaScript Library)
4. Es sollen Whisky erfasst werden können
5. Es sollen Whisky bearbeitet werden können
6. NEU: Die Daten sollen nur durch eingelogte User editiert werden können (dazu ist wiederum ein Login zu implementieren und das bearbeiten abzusichern)
7. NEU: Sofern du ein Google Konto hast - schütze deine Formular "mindestens die öffentlichen" mit dem Recaptcha von Google https://developers.google.com/recaptcha/docs/v3 um ein Recaptcha zu erstellen gelange zu folgender Seite: https://www.google.com/recaptcha/admin
8. NEU: Lerne allenfalls "Standardisierte Icons zu verwenden" Nutze dazu https://fontawesome.com/v5.15/icons/css3 
9. Optional:
   1. Die DB wird angepasst - Region: neues Attribut Location
   2. Die DB wird angepasst - Whisky: neues Attribut Bildpfad
   3. Bilder können bei der Whisky Erfassung hochgeladen werden
   4. Kartenausschnitt der Region wird bei der Whiskyausgabe in der Box ausgegeben
