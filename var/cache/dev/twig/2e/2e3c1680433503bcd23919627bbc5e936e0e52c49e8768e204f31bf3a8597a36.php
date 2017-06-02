<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4c36caa496ea4d5b3a670a4a6db11775cdb05530be57534cf29e179c6acb3f89 extends Twig_Template
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
        $__internal_d14121cc2f652b6dc9c770e0480cc88c64cd941f7d9d34e1fd784f2a9ef2f8ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14121cc2f652b6dc9c770e0480cc88c64cd941f7d9d34e1fd784f2a9ef2f8ec->enter($__internal_d14121cc2f652b6dc9c770e0480cc88c64cd941f7d9d34e1fd784f2a9ef2f8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0646f6e1f804451f0a7c1a050e30b1d8f80753d5efb364e4bff2cafa2ca6a750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0646f6e1f804451f0a7c1a050e30b1d8f80753d5efb364e4bff2cafa2ca6a750->enter($__internal_0646f6e1f804451f0a7c1a050e30b1d8f80753d5efb364e4bff2cafa2ca6a750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d14121cc2f652b6dc9c770e0480cc88c64cd941f7d9d34e1fd784f2a9ef2f8ec->leave($__internal_d14121cc2f652b6dc9c770e0480cc88c64cd941f7d9d34e1fd784f2a9ef2f8ec_prof);

        
        $__internal_0646f6e1f804451f0a7c1a050e30b1d8f80753d5efb364e4bff2cafa2ca6a750->leave($__internal_0646f6e1f804451f0a7c1a050e30b1d8f80753d5efb364e4bff2cafa2ca6a750_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
