<<<<<<< HEAD
const sqlite3 = require('sqlite3').verbose();
let db = new sqlite3.Database('/var/www/bolt/app/database/bolt.db', sqlite3.OPEN_READWRITE, (err) => {
  if (err) {
    console.error(err.message);
  }
  console.log('Connected to the bolt database.');
});
 
db.serialize(() => {
  db.each(`SELECT *
           FROM bolt_users`, (err, row) => {
    if (err) {
      console.error(err.message);
    }
    console.log(row.id + "\t" + row.email);
  });
});
 
db.close((err) => {
  if (err) {
    console.error(err.message);
  }
  console.log('Close the database connection.');
});










=======
const sqlite3 = require('sqlite3').verbose();
let db = new sqlite3.Database('/var/www/bolt/app/database/bolt.db', sqlite3.OPEN_READWRITE, (err) => {
  if (err) {
    console.error(err.message);
  }
  console.log('Connected to the bolt database.');
});
 
db.serialize(() => {
  db.each(`SELECT *
           FROM bolt_users`, (err, row) => {
    if (err) {
      console.error(err.message);
    }
    console.log(row.id + "\t" + row.email);
  });
});
 
db.close((err) => {
  if (err) {
    console.error(err.message);
  }
  console.log('Close the database connection.');
});










>>>>>>> New
