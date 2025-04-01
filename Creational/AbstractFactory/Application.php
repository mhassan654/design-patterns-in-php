<?php

class Application
{
    private Button $button;
    /**
     * @var GUIFactory
     */
    public GUIFactory $factory;

    public function __construct(GUIFactory $GUIFactory)
    {
        $this->factory = $GUIFactory;
    }

    public function createUI()
    {
        $this->button = $this->factory->createButton();
    }

    public function paint()
    {
        $this->button->paint();
    }

}