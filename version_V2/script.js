function vpnConnectOn() {
    const vpnConnection_connecting = document.getElementById('vpn-connect');
    const vpnConnectedMessage_connecting = document.getElementById('vpn-connected-message');

    vpnConnection_connecting.innerHTML = `
    <video width="80" height="80" style="cursor: pointer;" autoplay loop muted>
        <source src="./assets/indexAssets/connecting.mp4" type="video/mp4" />
        Your browser does not support the video tag.
    </video>`;

    vpnConnectedMessage_connecting.innerHTML = "Connecting...";
    vpnConnectedMessage_connecting.setAttribute("class", "text-warning");

    setTimeout(
        function () {
            const vpnConnection_connected = document.getElementById('vpn-connect');
            const vpnRocket = document.getElementById('vpn-rocket');
            const vpnConnectedMessage = document.getElementById('vpn-connected-message');

            vpnConnection_connected.innerHTML = `
                <video width="80" height="80" onclick="vpnConnectOff()" style="cursor: pointer;" autoplay loop muted>
                    <source src="./assets/indexAssets/connected.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>`;

            vpnRocket.innerHTML = `
                <video width="320" height="240" autoplay muted>
                    <source src="./assets/indexAssets/RocketFade.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>`;

            vpnConnectedMessage.innerHTML = "You're connect to the VPN";
            vpnConnectedMessage.setAttribute("class", "text-success");
        }, 6000);

}

function vpnConnectOff() {
    const vpnConnection_connecting = document.getElementById('vpn-connect');
    const vpnConnectedMessage_connecting = document.getElementById('vpn-connected-message');

    vpnConnection_connecting.innerHTML = `
        <video width="80" height="80" onclick="vpnConnectOn()" style="cursor: pointer;" autoplay loop muted>
            <source src="./assets/indexAssets/off.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>`;

    vpnConnectedMessage_connecting.innerHTML = "Connect to VPN";
    vpnConnectedMessage_connecting.setAttribute("class", "text-secondary");
}