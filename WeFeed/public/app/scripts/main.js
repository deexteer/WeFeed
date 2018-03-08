switch (document.readyState) {
  case "loading":
  	console.log("loading")
    break;
  case "interactive":
  	console.log("you can go")

  case "complete":
  	console.log("tadam")
    break;
}
