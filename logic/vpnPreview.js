const table = document.getElementById("table");
let rIndex;

for (let i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function () {
        rIndex = this.rowIndex;
        console.log(rIndex);

        console.log(this.cells[0].innerHTML);
        console.log(this.cells[1].innerHTML);
        console.log(this.cells[2].innerHTML);
        console.log(this.cells[3].innerHTML);
        console.log(this.cells[4].innerHTML);

        document.getElementById("h4").innerText = 'VPN Information';
        document.getElementById("vpn-id-side-info").innerHTML = `<b>ID Nº: </b>` + this.cells[5].innerHTML;
        document.getElementById("vpn-country-side-info").innerHTML = `<b>Country: </b>` + this.cells[0].innerHTML;
        document.getElementById("vpn-city-side-info").innerHTML = `<b>City: </b>` + this.cells[1].innerHTML;
        document.getElementById("vpn-ip-address-side-info").innerHTML = `<b>IP Address: </b>` + this.cells[2].innerHTML;
        document.getElementById("vpn-ip-route-side-info").innerHTML = `<b>IP Route: </b>` + this.cells[6].innerHTML;
        document.getElementById("vpn-isp-side-info").innerHTML = `<b>ISP: </b>` + this.cells[3].innerHTML;
        document.getElementById("vpn-created-side-info").innerHTML = `<b>Created: </b>` + this.cells[7].innerHTML;

        document.getElementById("rocketdiv").innerHTML = `
        <div class="d-flex justify-content-center" id="vpn-rocket" style="width: 320; height: 240px;">
        </div>
        <div class="d-flex justify-content-center" id="vpn-connect">
            <video width="80" height="80" onclick="vpnConnectOn()" style="cursor:pointer;" autoplay loop muted>
                <source src="../assets/vpnConnect/off.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="d-flex justify-content-center">
            <p class="text-secondary" id="vpn-connected-message">Connect to VPN</p>
        </div>`;
    };
}