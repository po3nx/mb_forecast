<?php declare(strict_types=1);

/**
 * View for rendering error messages
 */
class ErrorView
{
    /**
     * @var ErrorModel $model
     */
    private $model;

    /**
     * Constructor for Error View
     * @param ErrorModel $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Render Output
     * @return string
     */
    public function render()
    {
        extract(["message" => $this->model->message]);
        ob_start();
        include $this->model->template;
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }
}
