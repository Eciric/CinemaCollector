function minimize() {
    const header = document.getElementById("primary-header");
    const iconClose = "fa-angles-left";
    const iconOpen = "fa-angles-right";
    const icon = document.getElementById("minimize-icon");
    if (icon.classList.contains("fa-angles-left")) {
        header.classList.add("minimize-closed");
        header.classList.remove("minimize");
        icon.classList.remove(iconClose);
        icon.classList.add(iconOpen);
        hideChildren(header);
    } else {
        header.classList.add("minimize");
        header.classList.remove("minimize-closed");
        icon.classList.remove(iconOpen);
        icon.classList.add(iconClose);
        showChildren(header);
    }
}

function hideChildren(header) {
    const children = header.children;
    const childrenArray = Object.entries(children);

    childrenArray.forEach((child, index) => {
        if (!index) return;

        child[1].style.visibility = "hidden";
    });
}

function showChildren(header) {
    const children = header.children;
    const childrenArray = Object.entries(children);

    childrenArray.forEach((child, index) => {
        if (!index) return;

        child[1].style.visibility = "visible";
    });
}
