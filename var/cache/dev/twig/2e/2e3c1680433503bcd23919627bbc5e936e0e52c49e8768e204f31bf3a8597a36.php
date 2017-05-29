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
        $__internal_6dd49dff27bc91d01d6cc8146ebdbd1f08151cbb2b2fdc00085889c3ba13a4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd49dff27bc91d01d6cc8146ebdbd1f08151cbb2b2fdc00085889c3ba13a4dd->enter($__internal_6dd49dff27bc91d01d6cc8146ebdbd1f08151cbb2b2fdc00085889c3ba13a4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_7ea248bb7f5054ebb0939b4e00cfad7205fa37bdc6e3a19a849043b05e350b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea248bb7f5054ebb0939b4e00cfad7205fa37bdc6e3a19a849043b05e350b82->enter($__internal_7ea248bb7f5054ebb0939b4e00cfad7205fa37bdc6e3a19a849043b05e350b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6dd49dff27bc91d01d6cc8146ebdbd1f08151cbb2b2fdc00085889c3ba13a4dd->leave($__internal_6dd49dff27bc91d01d6cc8146ebdbd1f08151cbb2b2fdc00085889c3ba13a4dd_prof);

        
        $__internal_7ea248bb7f5054ebb0939b4e00cfad7205fa37bdc6e3a19a849043b05e350b82->leave($__internal_7ea248bb7f5054ebb0939b4e00cfad7205fa37bdc6e3a19a849043b05e350b82_prof);

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
