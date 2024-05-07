<?php
class GuildView{
    public function render($data){
        $no = 1;
        $dataGuilds = null;
        foreach($data as $guild){
            list($id, $name, $country) = $guild;
            $dataGuilds .= "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . $name . "</td>
                    <td>" . $country . "</td>
                    <td>
                        <a href='guild.php?id_edit=" . $id . "' class='btn btn-warning'>Edit</a>
                        <a href='guild.php?id_hapus=" . $id . "' class='btn btn-danger'>Hapus</a>
                    </td>
                </tr>";
        }

        $tpl = new Template("templates/guild.html");
        $tpl->replace("DATA_TABEL", $dataGuilds);
        $tpl->write();
    }
}
?>
