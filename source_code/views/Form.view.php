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
    
</html>
<br>
 <label> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" class="form-control"> <br>

 <label> PHONE: </label>
 <input type="text" name="phone" class="form-control"> <br>

 <label> JOINING DATE: </label>
 <input type="date" name="joining_date" class="form-control"> <br>

 <label> GUILD: </label>
 <input type="text" name="id_guilds" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a>
 <br>