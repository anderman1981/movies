<?php

class Controller
{
    /**
     * Call models
     */
    public function model($model)
    {
        require_once '../app/models/'. $model .'.php';
        return new $model();
    }

    /**
     * Call views
     */
    public function view($view, $data = [])
    {
        require_once '../app/views/'. $view . '.php';
    }

    /**
     * render Views
     */
    public function render($view, $params = [])
    {
        $content = $this->getView()->render($view, $params, $this);
        return $this->renderContent($content);
    }

    
    /**
     * Renders a static string by applying a layout.
     * @param string $content the static string being rendered
     * @return string the rendering result of the layout with the given static string as the `$content` variable.
     * If the layout is disabled, the string will be returned back.
     * @since 2.0.1
     */
    public function renderContent($content)
    {
        $layoutFile = $this->getView();
        if ($layoutFile !== false) {
            return $this->getView()->renderFile($layoutFile, ['content' => $content], $this);
        }

        return $content;
    }

    /**
     * Returns the view object that can be used to render views or view files.
     * The [[render()]], [[renderPartial()]] and [[renderFile()]] methods will use
     * this view object to implement the actual view rendering.
     * If not set, it will default to the "view" application component.
     * @return View|\app\Views the view object that can be used to render views or view files.
     */
    public function getView()
    {
        if ($this->_view === null) {
            $this->_view = $this->controller->getView();
        }

        return $this->_view;
    }

}