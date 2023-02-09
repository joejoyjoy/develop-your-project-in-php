let table = document.getElementById("table"), rIndex;

for (let i = 0; i < table.rows.length; i++) {
    table.rows[i].onclick = function () {
        rIndex = this.rowIndex;
        console.log(rIndex);

        let selected_row = rIndex - 1;

        if (selected_row != -1) {
            console.log(selected_row);
            document.cookie = "selected_row=" + selected_row;

            document.location.reload();
        }
    }
}

function removeCookie() {
    document.cookie = "selected_row=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
}