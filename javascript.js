let courses = [
  { title: "Matematika SD", level: "Beginner" },
  { title: "Matematika SD", level: "Intermediate" },
  { title: "Matematika SMP", level: "Beginner" },
  { title: "IPA SMA", level: "Intermediate" },
  { title: "Matematika SMA", level: "Advanced" },
];

function renderCourses() {
  var coursesList = document.querySelector("#courses-list");
  coursesList.innerHTML = "";

  // Jika coursesList sudah memiliki anak-anak (data sudah ditampilkan), hapus anak-anaknya
  if (coursesList.children.length > 0) {
    return;
  }

  // Melakukan iterasi pada data list course dan menambahkannya ke dalam elemen HTML "courses-list"
  courses.forEach(function (course) {
    var courseElement = document.createElement("li");
    courseElement.innerText = `${course.title} (Level: ${course.level})`;
    coursesList.appendChild(courseElement);
  });
}

const tomboltampil = document.querySelector("#tombol");
tomboltampil.addEventListener("click", renderCourses);

function keluar() {
  var keluar = confirm("Apakah anda yakin ingin keluar?");
  if (keluar == true) {
    window.location = "index.html";
  }
}
