<?php

class Guild extends DB
{
    function getAllGuilds()
    {
        $query = "SELECT * FROM guilds";
        return $this->execute($query);
    }

    function addGuild($data)
    {
        $name_guilds = $data['name_guilds'];
        $country_guild = $data['country_guild'];

        $query = "INSERT INTO guilds (name_guilds, country_guilds) VALUES ('$name_guilds', '$country_guild')";
        return $this->execute($query);
    }

    function updateGuild($data)
    {
        $id = $data['id'];
        $name_guilds = $data['name_guilds'];
        $country_guild = $data['country_guild'];

        $query = "UPDATE guilds SET name_guilds = '$name_guilds', country_guilds = '$country_guild' WHERE id_guilds = '$id'";
        return $this->execute($query);
    }

    function deleteGuild($id)
    {
        $query = "DELETE FROM guilds WHERE id_guilds = '$id'";
        return $this->execute($query);
    }
}


?>