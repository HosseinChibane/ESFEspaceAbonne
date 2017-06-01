<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_31a9cad127ddcd79d1113d5cd0e6f89daa3f082421c68c1a986d1f9287c99c53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcdbd93ebe942822fd124b4a121e32debae4f7644605ee408a7d6212eb7382ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcdbd93ebe942822fd124b4a121e32debae4f7644605ee408a7d6212eb7382ad->enter($__internal_bcdbd93ebe942822fd124b4a121e32debae4f7644605ee408a7d6212eb7382ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1732b26b398a5cbe52c9241473b5c37a71ab5f784c273c50348164adca06dc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1732b26b398a5cbe52c9241473b5c37a71ab5f784c273c50348164adca06dc55->enter($__internal_1732b26b398a5cbe52c9241473b5c37a71ab5f784c273c50348164adca06dc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_bcdbd93ebe942822fd124b4a121e32debae4f7644605ee408a7d6212eb7382ad->leave($__internal_bcdbd93ebe942822fd124b4a121e32debae4f7644605ee408a7d6212eb7382ad_prof);

        
        $__internal_1732b26b398a5cbe52c9241473b5c37a71ab5f784c273c50348164adca06dc55->leave($__internal_1732b26b398a5cbe52c9241473b5c37a71ab5f784c273c50348164adca06dc55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
