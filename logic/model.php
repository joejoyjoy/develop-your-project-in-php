<?php
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}


class Model
{

    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "php_vpn";
    private $conn;

    public function __construct()
    {
        try {

            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }

    public function insert()
    {

        if (isset($_POST['submit'])) {
            if (isset($_POST['vpn_country']) && isset($_POST['vpn_city']) && isset($_POST['vpn_ip_address']) && isset($_POST['vpn_ip_route']) && isset($_POST['vpn_isp'])) {
                if (!empty($_POST['vpn_country']) && !empty($_POST['vpn_city']) && !empty($_POST['vpn_ip_address']) && !empty($_POST['vpn_ip_route']) && !empty($_POST['vpn_isp'])) {

                    $vpn_country = $_POST['vpn_country'];
                    $vpn_city = $_POST['vpn_city'];
                    $vpn_ip_address = $_POST['vpn_ip_address'];
                    $vpn_ip_route = $_POST['vpn_ip_route'];
                    $vpn_isp = $_POST['vpn_isp'];

                    $query = "INSERT INTO VPN (vpn_country,vpn_city,vpn_ip_address,vpn_ip_route,vpn_isp) VALUES ('$vpn_country','$vpn_city','$vpn_ip_address','$vpn_ip_route','$vpn_isp')";
                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('records added successfully');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    } else {
                        echo "<script>alert('failed');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    }
                } else {
                    echo "<script>alert('empty');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }
    }

    public function fetch()
    {
        $data = null;

        $query = "SELECT * FROM VPN";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function delete($vpn_id)
    {

        $query = "DELETE FROM VPN where vpn_id = '$vpn_id'";
        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }

    public function fetch_single($vpn_id)
    {

        $data = null;

        $query = "SELECT * FROM VPN WHERE vpn_id = '$vpn_id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function edit($vpn_id)
    {

        $data = null;

        $query = "SELECT * FROM VPN WHERE vpn_id = '$vpn_id'";
        if ($sql = $this->conn->query($query)) {
            while ($row = $sql->fetch_assoc()) {
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data)
    {

        $query = "UPDATE VPN SET vpn_country='$data[vpn_country]', vpn_city='$data[vpn_city]', vpn_ip_address='$data[vpn_ip_address]', vpn_ip_route='$data[vpn_ip_route]', vpn_isp='$data[vpn_isp]' WHERE vpn_id='$data[vpn_id] '";

        if ($sql = $this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}
