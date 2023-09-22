const mainInfo = document.querySelector(".info-panel");
const infoToggle = document.querySelector(".project-info-icon");

infoToggle.addEventListener("click", () => {
    const visibility = mainInfo.getAttribute("data-visible");

    if (visibility === "false") {
        mainInfo.setAttribute("data-visible", true);
        infoToggle.setAttribute("aria-expanded", true);
    } else if (visibility === "true") {
       mainInfo.setAttribute("data-visible", false);
        infoToggle.setAttribute("aria-expanded", false);
    }
});