<?php

/**
 * Course Model
 *
 * Manages the data for courses. This corresponds to the "Course Management"
 * component from your app_structure.json.
 */
class Course
{
    private $db;

    public function __construct()
    {
        // In a real application, you would instantiate the database class.
        // $this->db = new Database;
    }

    /**
     * Get all courses.
     *
     * In a real application, this method would query the database.
     * For this example, we are returning a hardcoded array of data.
     *
     * @return array
     */
    public function getAllCourses()
    {
        return [
            ['id' => 1, 'name' => 'PHP for Beginners', 'instructor' => 'John Doe'],
            ['id' => 2, 'name' => 'Advanced JavaScript', 'instructor' => 'Jane Smith'],
            ['id' => 3, 'name' => 'Bootstrap 5 Deep Dive', 'instructor' => 'Peter Jones'],
            ['id' => 4, 'name' => 'Database Design Principles', 'instructor' => 'Jane Smith']
        ];
    }
}
