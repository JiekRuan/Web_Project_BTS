document.addEventListener("DOMContentLoaded", () => {
  /*APP*/
  console.log("charged");
  let date = new Date();
  let footer = document.querySelector("footer p");
  let body = document.querySelector("body");
  let el = document.querySelector("main p");

  footer.innerText += ` ${date.getFullYear()}`;

  let el2, modal, closed, open_modal, closed_all, rows;

  el2 = document.querySelectorAll(".grid-picture-large li");
  modal = document.querySelector(".parent-modale");
  closed = document.querySelector(".modale button");
  closed_all = document.querySelector(".modale img");

  /* property elements */

  open_modal = function () {
    console.log(this.dataset);
    /* les variables */
    let image = this.dataset.image;
    let title = this.dataset.title;
    let desc = this.dataset.description;
    let dates = this.dataset.dates;
    modal.classList.add("modale-active"); /* ajouter la classe active */
    /* sélectionner les sélecteurs html*/
    document.querySelector(".modale img").setAttribute("src", image);
    document.querySelector(".modale .desc h3").innerText = title;
    document.querySelector(
      ".modale .desc p"
    ).innerHTML = `<strong>Description : </strong>${desc}`;
    document.querySelector(".modale .desc time").innerText = `Année : ${dates}`;
    document
      .querySelector(".modale .desc time")
      .setAttribute("datetime", dates);
  };
  for (rows of el2) {
    rows.addEventListener("click", open_modal);
  }
  closed.addEventListener("click", () => {
    modal.classList.remove("modale-active");
  });
  closed_all.addEventListener("click", () => {
    modal.classList.remove("modale-active");
  });
});
