<?php
class AfspraakModel extends Model
{
    protected $table = 'afspraak';

    public function save($data)
    {
        $this->db->beginTransaction();

        try {
            $this->db->prepare("INSERT INTO {$this->table} (naam, email, telefoon, datum, opmerkingen) VALUES (?, ?, ?, ?, ?)")
                ->execute([
                    $data['naam'],
                    $data['email'],
                    $data['telefoon'],
                    $data['datum'],
                    $data['opmerkingen'],
                ]);

            $this->db->commit();
            return true;
        } catch (PDOException $e) {
            $this->db->rollBack();
            $this->errors = $e->getMessage();
            return false;
        }
    }
}
?>
<?php
class AfspraakModel extends Model
{
    protected $table = 'afspraak';

    public function readAllOrderedByDateDesc()
    {
        $this->db->prepare("SELECT * FROM {$this->table} ORDER BY datum DESC");
        $this->db->execute();
        return $this->db->fetchAll();
    }
}
?>