<?php

class TutorialsModel extends Model
{
    public function Index()
    {
        $this->query("SELECT t.id, t.title, t.short_desc, 
                             tc.name category, tc.description categ_desc
                      FROM tutorial AS t
                      LEFt JOIN tutorialcategory AS tc ON t.id_Category = tc.id
                      WHERE t.visible = 1
                      ORDER BY tc.name, t.id");
        $rows = $this->resultSet();
        $this->close();
        return $rows;
    }
    public function Display()
    {
        $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
        $this->query("SELECT t.title, t.content, t.id_Previous, t.id_Next,
                             CONCAT(p.id, ' - ',p.title) previous_title, 
                             CONCAT(n.id, ' - ',n.title) next_title
                      FROM tutorial AS t
                      LEFT OUTER JOIN tutorial AS p ON t.id_Previous = p.id
                      LEFT OUTER JOIN tutorial AS n ON t.id_Next = n.id
                      WHERE t.id = :id");
        $this->bind(':id', $get['id']);
        $rows = $this->single();
        $this->close();
        return $rows;
    }
}
?>