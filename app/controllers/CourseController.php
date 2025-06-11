<?php

/**
 * CourseController
 *
 * Handles logic related to courses.
 */
class CourseController extends Controller
{
    /**
     * The index method is the default for this controller.
     * It fetches all courses and displays them.
     */
    public function index()
    {
        // Load the Course model.
        // The model() method is in the base Controller class.
        $courseModel = $this->model('Course');

        // Call the model's method to get the data.
        $courses = $courseModel->getAllCourses();

        // Prepare the data to be passed to the view.
        $data = [
            'title' => 'Available Courses',
            'courses' => $courses
        ];

        // Load the view and pass the data.
        $this->view('course/index', $data);
    }
}
