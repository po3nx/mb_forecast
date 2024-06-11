<?php declare(strict_types=1);

/**
 * View for rendering output
 */
class RendererView
{
    /**
     * @var RendererModel $model
     */
    private $model;

    /**
     * Constructor for Renderer View
     * @param RendererModel $model
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
        extract([
            "lat" => $this->model->lat,
            "lon" => $this->model->lon,
            "format" => $this->model->format,
            "data"=>$this->model->data
        ]);
        ob_start();
        include $this->model->template;
        $output = ob_get_contents();
        ob_end_clean();
        // return rendered output
        return $output;
    }
}
