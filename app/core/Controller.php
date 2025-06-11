<?php

/**
 * Base Controller
 *
 * This class is extended by all other controllers.
 * It provides common functionality like loading models and views.
 */
class Controller
{
    /**
     * Load a model.
     *
     * @param string $model The name of the model to load.
     * @return object The model object.
     */
    public function model($model)
    {
        // Require the model file from the models directory.
        require_once '../app/models/' . $model . '.php';
        // Instantiate and return the new model.
        return new $model();
    }

    /**
     * Load a view with header and footer.
     *
     * @param string $view The path to the view file.
     * @param array $data Data to be extracted and made available to the view.
     */
    public function view($view, $data = [])
    {
        // Check if the view file exists.
        if (file_exists('../app/views/' . $view . '.php')) {
            // Include header
            require_once '../app/views/inc/header.php';
            
            // Require the specific view file
            require_once '../app/views/' . $view . '.php';

            // Include footer
            require_once '../app/views/inc/footer.php';
        } else {
            // If the view does not exist, stop the application and show an error.
            die('View does not exist: ' . $view);
        }
    }
}
