<?php

class Member extends DB
{
    function getAllMembers()
    {
        $query = "SELECT * FROM members";
        return $this->execute($query);
    }

    function addMember($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $joining_date = $data['joining_date'];
        $id_guilds = $data['id_guilds'];

        $query = "INSERT INTO members (name, email, phone, joining_date, id_guilds) VALUES ('$name', '$email', '$phone', '$joining_date', '$id_guilds')";
        return $this->execute($query);
    }

    function updateMember($data)
    {
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $joining_date = $data['joining_date'];
        $id_guilds = $data['id_guilds'];

        $query = "UPDATE members SET name = '$name', email = '$email', phone = '$phone', joining_date = '$joining_date', id_guilds = '$id_guilds' WHERE id = '$id'";
        return $this->execute($query);
    }

    function deleteMember($id)
    {
        $query = "DELETE FROM members WHERE id = '$id'";
        return $this->execute($query);
    }
}


?>