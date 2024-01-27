console.log("base loaded")

document.addEventListener("visibilitychange", () => {
    // it could be either hidden or visible
    document.title = document.visibilityState;
    if(document.visibilityState === "hidden"){alert('You can\'t cheat !')}
});