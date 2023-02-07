let table = document.getElementById("table"), rIndex;

for (let i = 0; i < table.rows.length; i++) {
    table.rows[i].onclick = function () {
        rIndex = this.rowIndex;
        console.log(rIndex);

        let selected_row = rIndex;
        document.cookie = "selected_row=" + selected_row;

        document.location.reload();
    }
}