<!-- <?php
class DataHandler{
    private $host;
    private $dbdriver;
    private $dbname;
    private $username;
    private $password;

    public function __construct($host, $dbdriver, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbdriver = $dbdriver;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $this->dbh = new PDO("localhost:host=mysql;dbname=webshopMultiversum", 'ilias', '12345');
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $e) {
            echo "Connection with ".$this->dbdriver." failed: ".$e->getMessage();
        }
    }

    public function headsetOverview() {
        $sql = "SELECT * FROM productenoverzicht;";
        return $this->dbh->query($sql,PDO::FETCH_ASSOC);
    }

    public function __destruct()
    {
        $this->dbh = null;
    }
}
?> -->
