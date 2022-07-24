<?php

namespace FluentForm\App\Modules\Widgets;
use Elementor\Plugin as Elementor;
use FluentForm\App\Modules\Widgets\FluentFormWidget;

class ElementorWidget
{
    private $app = null;

    public function __construct($app)
    {
        $this->app = $app;
        add_action( 'elementor/widgets/widgets_registered', array($this, 'init_widgets') );
    }


    public function init_widgets()
    {
        $this->enqueueAssets();

        $widgets_manager = Elementor::instance()->widgets_manager;

        if ( file_exists( FLUENTFORM_DIR_PATH.'app/Modules/Widgets/FluentFormWidget.php' ) ) {
            require_once FLUENTFORM_DIR_PATH.'app/Modules/Widgets/FluentFormWidget.php';
            $widgets_manager->register_widget_type( new FluentFormWidget() );
        }
    }


    public function enqueueAssets()
    {
        wp_enqueue_style('fluentform-elementor-widget', $this->app->publicUrl('css/fluent-forms-elementor-widget.css'), array(), FLUENTFORM_VERSION );
    }

}
