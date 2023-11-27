// Get the modal
const modal = document.getElementById("myModal");
const modalConfirm = document.getElementById("myModalConfirm");
const modalAlert = document.getElementById("myModalAlert");
const modalClue = document.getElementById("myModalClue");
const modalResult = document.getElementById("myModalResult");

// Get the button that opens the modal
const btnCheck = document.querySelectorAll("#check");
const btnTrash = document.querySelectorAll("#trash");
const btnNav = document.querySelectorAll("#nav-link");
const btnClue = document.querySelectorAll("#clue");

// Get the <span> element that closes the modal

const btnEnd = document.getElementsByClassName("end")[0];
const btnAccept = document.getElementsByClassName("accept")[0];
const btnDecline = document.getElementsByClassName("decline")[0];
const btnOk = document.getElementsByClassName("ok")[0];
const btnClose = document.getElementsByClassName("close")[0];
const btnResult = document.getElementsByClassName("result")[0];
const btnAbort = document.getElementsByClassName("abort")[0];

let clueCounter = 0;

btnResult &&
  btnResult.addEventListener("click", () => {
    modalResult.style.display = "none";
    setTimeout(() => {
      window.location.href = "review.html";
    }, 500);
  });

btnAbort &&
  btnAbort.addEventListener("click", () => {
    modalResult.style.display = "none";
  });

btnEnd &&
  btnEnd.addEventListener("click", () => {
    modalResult.style.display = "block";
  });

btnClue &&
  btnClue.forEach((btn) => {
    btn.addEventListener("click", () => {
      //modalAlert.style.display = "block";
      if (clueCounter == 0) {
        modalClue.style.display = "block";
        clueCounter++;
      } else {
        modalAlert.style.display = "block";
      }
    });
  });

btnNav &&
  btnNav.forEach((btn) => {
    btn.addEventListener("click", () => {
      modal.style.display = "block";
    });
  });

btnTrash &&
  btnTrash.forEach((btn) => {
    btn.addEventListener("click", () => {
      modal.style.display = "block";
    });
  });

btnAccept &&
  btnAccept.addEventListener("click", () => {
    if (modal) {
      modal.style.display = "none";
    }
  });

btnDecline &&
  btnDecline.addEventListener("click", () => {
    modal.style.display = "none";
  });

btnCheck &&
  btnCheck.forEach((btn) => {
    btn.addEventListener("click", () => {
      modalConfirm.style.display = "block";
    });
  });

btnOk &&
  btnOk.addEventListener("click", () => {
    if (modalAlert) {
      modalAlert.style.display = "none";
    } else {
      modalConfirm.style.display = "none";
    }
  });

btnClose &&
  btnClose.addEventListener("click", () => {
    modalClue.style.display = "none";
  });

// When the user clicks on <span> (x), close the modal

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  } else if (event.target == modalConfirm) {
    modalConfirm.style.display = "none";
  } else if (event.target == modalAlert) {
    modalAlert.style.display = "none";
  } else if (event.target == modalClue) {
    modalClue.style.display = "none";
  } else if (event.target == modalResult) {
    modalResult.style.display = "none";
  }
};
