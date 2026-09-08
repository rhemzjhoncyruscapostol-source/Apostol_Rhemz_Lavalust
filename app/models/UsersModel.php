<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * UsersModel
 *
 * Represents the `users` table created in Laboratory Exercise No. 4.
 * Columns: id, firstname, lastname, email, username
 */
class UsersModel extends Model
{
    /**
     * Database table this model represents.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * Primary key of the table.
     *
     * @var string
     */
    protected $primary_key = 'id';

    /**
     * Retrieve all users from the database.
     *
     * @return array An array of all users.
     */
    public function all()
    {
        return $this->db->get($this->table)->result_array();
    }
}
