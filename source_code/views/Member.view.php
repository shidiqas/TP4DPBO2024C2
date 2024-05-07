<?php

class MemberView {
    public function render($data){
        $no = 1;
        $dataMembers = null;
        $dataGuilds = null;
        foreach($data as $member){
            list($id, $name, $email, $phone, $joining_date, $guild_id) = $member;
            $dataMembers .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $name . "</td>
                <td>" . $email . "</td>
                <td>" . $phone . "</td>
                <td>" . $joining_date . "</td>
                <td>" . $guild_id . "</td>";

            // Tombol Edit dan Hapus
            $dataMembers .= "
                <td>
                    <a href='index.php?id_edit=" . $id . "' class='btn btn-warning'>Edit</a>
                    <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger'>Hapus</a>
                </td>";

            $dataMembers .= "</tr>";
        }

        // Membuat opsi untuk pemilihan guild
        foreach($data['guilds'] as $guild){
            list($id, $name, $country) = $guild;
            $dataGuilds .= "<option value='".$id."'>".$name."</option>";
        }

        // Mengganti placeholder di template dengan data yang telah dibuat
        $tpl = new Template("templates/index.html");
        $tpl->replace("OPTION", $dataGuilds);
        $tpl->replace("DATA_TABEL", $dataMembers);
        $tpl->write(); 
    }
}

?>