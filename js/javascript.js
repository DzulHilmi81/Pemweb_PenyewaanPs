let courses = [
  { title: "PS5", level: "1000000/Hari" },
  { title: "PS3", level: "45000/Hari" },
  { title: "PS4", level: "70000/Hari" },
  { title: "PS5", level: "100000/hari" },
  { title: "PS4", level: "70000/Hari" },
];

var tampildata = false;
// Membuat fungsi untuk menampilkan data list course ke dalam HTML
function renderCourses() {
  // Mencari elemen HTML dengan ID "courses-list"
  var coursesList = document.querySelector("#courses-list");
  coursesList.innerHTML = "";

  tampildata = !tampildata;
  if (tampildata) {
    // Melakukan iterasi pada data list course dan menambahkannya ke dalam elemen HTML "courses-list"
    for (var i = 0; i < courses.length; i++) {
      var course = courses[i];
      var courseElement = document.createElement("li");
      courseElement.innerText = `${course.title} (Level: ${course.level})`;
      coursesList.appendChild(courseElement);
    }
  } else {
    coursesList.innerHTML = "";
  }
}
const tomboltampil = document.querySelector("#tombol");
tomboltampil.addEventListener("click", renderCourses);

function keluar() {
  var keluar = confirm("Apakah anda yakin ingin keluar?");
  if (keluar == true) {
    window.location = "index.html";
  }
}

function done_transaction() {
  var keluar = confirm("Apakah telah selesai input data?");
  if (keluar == true) {
    window.location = "transactions.html";
  }
}

function done_categories() {
  var keluar = confirm("Apakah telah selesai input data?");
  if (keluar == true) {
    window.location = "categories-entry.php";
  }
}
