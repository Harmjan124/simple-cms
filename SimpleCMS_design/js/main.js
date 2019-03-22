var Open = true;

function togglesidebar() {
    var Sidebar = document.getElementById("sidebar");
    var Content = document.getElementById("content");

    if (Open) {
        Sidebar.style.left = "-" + Sidebar.offsetWidth + "px";
        Content.style.width = "100%";
        Content.style.left = "0";
        Open = false;
    } else {
        Sidebar.style.left = "0";
        Content.style.width = 'calc(100% - ' + Sidebar.offsetWidth + "px )";
        Content.style.left = Sidebar.offsetWidth + "px";
        Open = true;
    }

}

