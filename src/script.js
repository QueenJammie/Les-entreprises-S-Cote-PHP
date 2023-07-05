function changeTheme() {
  let body = document.querySelector("body");

  if (body.classList.contains("dark")) {
    body.classList.remove("dark");
  } else {
    body.classList.add("dark");
  }
}

let changeThemeButton = document.querySelector("button.changeTheme");
changeThemeButton.addEventListener("click", changeTheme);

// -------------------------------------------------------

function rtn() {
   window.history.back();
}

// -------------------------------------------------------

/* let date = document.querySelector("#date");

date.innerHTML = date('d/m/Y h:i:s'); */