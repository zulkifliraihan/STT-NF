const db = require("../config/database");

class Student {
  /**
   * Method Get All Data
   */
  static all() {
    return new Promise((resolve, reject) => {
      const sql = "SELECT * from students";

      db.query(sql, (err, results) => {
        resolve(results);
      });
    });
  }

  /**
   * TODO 1: Buat fungsi untuk insert data.
   * Method menerima parameter data yang akan diinsert.
   * Method mengembalikan data student yang baru diinsert.
   */
  static create() {
    // code here
  }
}

// export class Student
module.exports = Student;
