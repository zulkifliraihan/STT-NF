// import students from '../data/students'
const stundents = require('../data/students')

class StudentController {
  constructor() {
    this.dataStudents = stundents.dataStudents
  }
  
  index = (req, res) =>  {
    console.log()
    const data = {
      message: "Menampilkkan semua students",
      data: this.dataStudents,
    };

    res.json(data);
  }

  store = (req, res) => {
    const { nama } = req.body;

    this.students.push(nama);

    const data = {
      message: `Menambahkan data student: ${nama}`,
      data: this.dataStudents,
    };

    res.json(data);
  }

  update = (req, res) => {
    const { id } = req.params;
    const { nama } = req.body;

    this.students[id] = nama;

    const data = {
      message: `Mengedit student id ${id}, nama ${nama}`,
      data: this.dataStudents,
    };

    res.json(data);
  }

  destroy = (req, res) => {
    const { id } = req.params;

    this.students.splice(id, 1);

    const data = {
      message: `Menghapus student id ${id}`,
      data: this.dataStudents,
    };

    res.json(data);
  }
}

module.exports = new StudentController();
